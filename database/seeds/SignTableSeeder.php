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
        foreach(config("yearSign") as $value){
            Sign::insert([
                'sign_topic' => $value
            ]);
        }  
    }
}
