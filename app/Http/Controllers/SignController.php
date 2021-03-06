<?php

namespace App\Http\Controllers;

use App\Sign;
use Illuminate\Http\Request;

class SignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('nameformal/sign/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sign  $sign
     * @return \Illuminate\Http\Response
     */
    public function show(Sign $sign, Request $request)
    {
        $is_from_dice = ($request->dice == 1) ? 1 : 0;
        $sign_key = Config('yearSign.' . ($sign->id - 1));
        $content = Config('yearSignContent.content.' . $sign_key);
        $og_description = "專業解籤：{$content['first']},{$content['second']},{$content['third']},{$content['fourth']}";
        return view("nameformal.sign.sign", [
            "sign" => $sign,
            "content" => $content,
            "og_description" => $og_description,
            "is_from_dice" => $is_from_dice
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sign  $sign
     * @return \Illuminate\Http\Response
     */
    public function edit(Sign $sign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sign  $sign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sign $sign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sign  $sign
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sign $sign)
    {
        //
    }
    public function exam()
    {
        return view('nameformal/sign/exam');
    }
}
