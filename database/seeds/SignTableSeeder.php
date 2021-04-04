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
            $route = ($key<10) ? 'sign/sign0'.$key.'.jpg' : 'sign/sign'.$key.'.jpg' ;
            Sign::insert([
                'sign_topic' => $value,
                //sign/sign01.jpg
                'pic' => $route 
            ]);
        }  
    }
}
