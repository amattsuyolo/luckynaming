<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NamingRequest;
use App\Http\Requests\SpecificNamingRequest;
use App\Zodiac;
use Symfony\Polyfill\Intl\Idn\Info;

class NameController extends Controller
{
     /**
     * @param Integer $zodiac_id
     * @return Array $return_array
     */
    public function dealZodiac($zodiac_id): Array
    {
        $zodiac = Zodiac::where('zodiac_en_sign', config("zodiac.".$zodiac_id))->first();
        $return_array = [];
        $good_character = implode(",", $zodiac->good_character);
        $bad_character = implode(",", $zodiac->bad_character);
        $tw_describe = $zodiac->tw_describe;
        $return_array["good_character"] = $good_character;
        $return_array["bad_character"] = $bad_character;
        $return_array["tw_describe"] = $tw_describe;
        return $return_array;
    }
     /**
     * @return \Illuminate\View\View
     */
    public function namingResult(NamingRequest $request)
    {
        $request = $request->all();
        $character_info = $this->localDealCharacter($request);
        if(is_null($character_info)){
            return redirect()->back()->withErrors(['抱歉，暫無此姓資訊']);
        }
        //適合的筆畫排列
        $goodNumComBinations = $this->localDealEightyOne($character_info["draw"]);
        //隨機選取的筆畫排列
        try {
            $choosedArray = $goodNumComBinations [array_rand($goodNumComBinations)];
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['抱歉，暫無此姓資訊']);
        }
        //生肖用字資訊
        $zodiac_middle_info = $this->dealLocalZodiac($request["zodiac"],$choosedArray["middle"]);
        $zodiac_last_info = $this->dealLocalZodiac($request["zodiac"],$choosedArray["last"]);
        //取得81總格數說明
        $eightyone = config("eightyone");
        $sum = $choosedArray["middle"]+$choosedArray["last"]+$character_info["draw"]-1;
        while($sum>81) {
            $sum = $sum - 81;
        }
        $content =  $eightyone[$sum]["content"];
        $content = explode('，',$content,4);
        // return view("nameformal.naming_result",compact(['zodiac_info']));
        $returnComBinations=[];
        for($i=0;$i<count($goodNumComBinations);$i++){
            $returnComBinations[$i] = $goodNumComBinations[$i]['top'].','.$goodNumComBinations[$i]['middle'].','.$goodNumComBinations[$i]['last'];
        }
        $return_zodiac_middle_info=[];
        $return_zodiac_middle_info["good"] = @implode(",",$zodiac_middle_info["good"]) ?? "";
        $return_zodiac_middle_info["bad"] = @implode(",",$zodiac_middle_info["bad"]) ?? "";
        $return_zodiac_last_info=[];
        $return_zodiac_last_info["good"] = @implode(",",$zodiac_last_info["good"]) ?? "";
        $return_zodiac_last_info["bad"] = @implode(",",$zodiac_last_info["bad"])?? "";

        // echo "<pre>";
        // var_dump([
        //     // "goodNumComBinations" => $returnComBinations,
        //     // "choosedArray" => $choosedArray,
        //     // "zodiac_middle_info" => $return_zodiac_middle_info,
        //     // "zodiac_last_info" => $zodiac_last_info,
        //     // "content" => $content
        // ]);
        // echo "</pre>";
        return view("nameformal.naming_result",[
            "last_name" =>  $request["last_name"],
            "returnComBinations" => $returnComBinations,
            "choosedArray" => $choosedArray,
            "zodiac_middle_info" => $return_zodiac_middle_info,
            "zodiac_last_info" => $return_zodiac_last_info,
            "content" => $content,
            "zodiac" => $request["zodiac"],
            "ch_zodiac" => $zodiac_middle_info["ch_zodiac"],
        ]);
    }
     /**
     * @return json
     */
    public function specificNamingResult(SpecificNamingRequest $request)
    {
        $request=$request->all();
        // $character_info = $this->localDealCharacter($request);
        //適合的筆畫排列
        // $goodNumComBinations = $this->localDealEightyOne($character_info["draw"]);
        //隨機選取的筆畫排列
        // $choosedArray = $goodNumComBinations [array_rand($goodNumComBinations)];
        // dd( $choosedArray);
        $combinations = explode(',',$request["combination"],3);
        $choosedArray["middle"]=$combinations[1];
        $choosedArray["last"]=$combinations[2];
        $choosedArray["top"]=$combinations[0];
        //生肖用字資訊
        $zodiac_middle_info = $this->dealLocalZodiac($request["zodiac"],$choosedArray["middle"]);
        $zodiac_last_info = $this->dealLocalZodiac($request["zodiac"],$choosedArray["last"]);
        //取得81總格數說明
        $eightyone = config("eightyone");
        $content =  $eightyone[$choosedArray["middle"]+$choosedArray["last"]+$choosedArray["top"]-1]["content"];
        $content = explode('，',$content,4);
        // return view("nameformal.naming_result",compact(['zodiac_info']));
    
        $return_zodiac_middle_info=[];
        $return_zodiac_middle_info["good"] = implode(",",$zodiac_middle_info["good"]);
        $return_zodiac_middle_info["bad"] = implode(",",$zodiac_middle_info["bad"]);
        $return_zodiac_last_info=[];
        $return_zodiac_last_info["good"] = implode(",",$zodiac_last_info["good"]);
        $return_zodiac_last_info["bad"] = implode(",",$zodiac_last_info["bad"]);

        // echo "<pre>";
        // var_dump([
        //     // "goodNumComBinations" => $returnComBinations,
        //     // "choosedArray" => $choosedArray,
        //     // "zodiac_middle_info" => $return_zodiac_middle_info,
        //     // "zodiac_last_info" => $zodiac_last_info,
        //     // "content" => $content
        // ]);
        // echo "</pre>";
        return [
            "choosedArray" => $choosedArray,
            "zodiac_middle_info" => $return_zodiac_middle_info,
            "zodiac_last_info" => $return_zodiac_last_info,
            "content" => $content
        ];
    }
    /**
     * @param Array $info
     * @return Array $characterInfo
     */
    public function localDealCharacter($info)
    {
        $chineseCharacter = config("chineseCharacters");
        $last_name = $info["last_name"]; 
        for($i=0;$i<count($chineseCharacter);$i++){ 
            if (preg_match("/($last_name)/i", $chineseCharacter[$i]["chars"])){
                $characterInfo = [];
                $characterInfo["draw"] = $chineseCharacter[$i]['draw'];
                $characterInfo["fiveEle"] = $chineseCharacter[$i]['fiveEle'];
                return $characterInfo;
            }
        }
    }
    /**
     * @param Int $draw
     * @return Array $goodNumArray
     */
    public function localDealEightyOne($topDraw)
    {
       //姓筆畫 $topDraw
       
       //名1 筆畫$middleDraw = 0;
       
       //名2 筆畫$lastDraw = 0;
       
       //天格 $topDraw +1
       //人格 $middleDraw + $topDraw;
       //地格 $middleDraw + $lastDraw;
       //外格 $lastDraw + 1;
       //總格 $topDraw + $middleDraw + $lastDraw
       $eightyOne = config("eightyone");
       $eightyOneForCalculate = [];
       for ($j=1;$j<count($eightyOne)+1;$j++) {
         $eightyOneForCalculate[$j] = $eightyOne[$j-1]["value"];
       }
       $goodNumArray = [];
       //總筆畫不大於60
       $quality = 96;
       $total = 46 - $topDraw;
       for($middleDraw=1;$middleDraw<$total;$middleDraw++){
            for($lastDraw=1;$lastDraw<$total-$middleDraw;$lastDraw++){
                $value = 0;
                try {
                    $value += $eightyOneForCalculate[$topDraw +1]; 
                    $value += $eightyOneForCalculate[$middleDraw + $topDraw];
                    $value += $eightyOneForCalculate[$middleDraw + $lastDraw]; 
                    $value += $eightyOneForCalculate[$lastDraw + 1]; 
                    $sum = ($topDraw + $middleDraw + $lastDraw<=81) ? ($topDraw + $middleDraw + $lastDraw) : ($topDraw + $middleDraw + $lastDraw-81);
                    $value += $eightyOneForCalculate[$sum];
                } catch (\Exception $e) {
                    continue;
                }
                if($value*2 > $quality){
                    array_push($goodNumArray,[
                        "value" => $value,
                        "top" => $topDraw,
                        "middle" => $middleDraw,
                        "last" => $lastDraw
                    ]);
                }
            }
       }
       return $goodNumArray;
    }
     /**
     * @param Integer $zodiac_id
     * @return Array $return_array
     */
    public function dealLocalZodiac($zodiac_id,$draw)
    {
        $zodiacInfo = config(config('zodiac.'.$zodiac_id.'.en'));
        $returnArray = [];
        $returnArray["good"] = $zodiacInfo["better"]['_'.$draw] ?? "";
        $returnArray["bad"] = $zodiacInfo["worse"]['_'.$draw] ?? "";
        $returnArray["ch_zodiac"] = config('zodiac.'.$zodiac_id.'.tc');
        return $returnArray;
    }

}
