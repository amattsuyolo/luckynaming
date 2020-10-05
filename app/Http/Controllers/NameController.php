<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Zodiac;

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
    public function namingResult(Request $request)
    {
        // $zodiac_info = $this->dealZodiac(1);
        // return view("nameformal.naming_result",compact(['zodiac_info']));
        return view("nameformal.naming_result");
    }
}
