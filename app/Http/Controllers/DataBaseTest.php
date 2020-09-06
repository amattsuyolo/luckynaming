<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataBaseTest extends Controller
{
    public function index()
    {
        $users = DB::select('select * from users');
        var_dump($users);
    }
}
