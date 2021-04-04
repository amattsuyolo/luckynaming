<?php

use Illuminate\Database\Seeder;
use App\Sign;
use Illuminate\Support\Str;

class SignTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(config("yearSign") as $key => $value){
            $new_key = $key+1;
            $route = ($new_key<10) ? 'sign/sign0'.$new_key.'.jpg' : 'sign/sign'.$new_key.'.jpg' ;
            Sign::insert([
                'sign_topic' => $value,
                //sign/sign01.jpg
                'pic' => $route 
            ]);
        }  
    }
}
