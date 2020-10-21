@extends('nameformal.base')

@section('title', '命名資訊')

@section('header')
@include('nameformal.header')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="post-content col-lg-8 col-md-10 mx-auto">

            <h2 class="info-color white-text text-center py-4">
                <strong>命名結果</strong>
            </h2>
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">熊崎氏八十一數適宜筆畫</label>
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                <option selected>選擇...</option>
                <option value="1">7,10,15</option>
                <option value="2">7,12,1</option>
                <option value="3">7,5,2</option>
            </select>
            <br>
            <br>
            <p>預設筆畫次序:&nbsp;&nbsp;7,10,15</p>
            <p>吳<strong>姓筆畫： 7（木）</strong></p>
            <hr>
            <p><strong>名首字筆畫：10</strong></p>
            <div>
                <p><b>生肖喜用字</b>：</p>
                <p>迅(火), 芳(木), 芝(木), 芽(木), 芹(木), 花(木), 芸(木), 芷(木), 原(木), 圃(水), 埔(土), 娟(木), 娥(水), 家(木), 容(土), 庭(火), 桂(木), 桃(木), 殊(金), 烈(火), 畔(水), 秦(火), 秩(火), 航(水), 起(木), 軒(土), 馬(水), 芫(木)</p>
                <p><b>生肖忌用字</b>：</p>
                <p>十(金), 股(木), 恍(火), 恢(木), 恆(水), 恬(火), 指(金), 拯(金), 洋(水), 洲(水), 洪(水), 津(水), 洗(水), 活(水), 洽(水), 派(水), 洛(水), 洵(水), 珊(金), 玲(火), 珍(火), 珀(水), 玳(火), 倡(金), 修(金), 凍(火), 凌(火), 剛(金), 唐(火), 套(火), 奘(金), 奚(木), 姬(木), 孫(金), 席(金), 師(金), 恣(火), 恐(木), 恕(火), 恭(木), 恩(土), 息(金), 時(金), 晉(火), 晁(金), 書(金), 朔(火), 朗(火), 栩(木), 特(火), 矩(木), 祠(金), 祟(金), 祖(金), 神(金), 祝(火), 祚(金), 秘(水), 紡(水), 紗(水), 紋(水), 素(金), 索(金), 純(金), 紐(水), 紜(木), 納(火), 紙(金), 紛(水), 翁(土), 衽(金), 躬(木), 酒(水), 恂(水), 洳(水), 珅(金), 祜(水), 祓(水), 紓(金), 衿(木), 衾(木)</p>
            </div>
            <hr>
            <p><strong>名次字筆畫：15</strong></p>
            <div>
                <p><b>生肖喜用字</b>:</p>
                <p>逸(土), 進(火), 葉(土), 嫻(土), 寬(木), 樂(火), 毅(木), 稼(木), 穀(木), 範(水), 蝶(火), 賢(木), 逯(火), 萩(木), 槿(木)</p>
                <p><b>生肖忌用字</b>:</p>
                <p>郭(木), 慷(木), 慢(水), 慚(金), 漳(水), 演(水), 漂(水), 漢(水), 滿(水), 漆(水), 漲(水), 漣(水), 漫(水), 漪(水), 滬(水), 瑤(火), 瑣(金), 瑰(木), 劇(金), 劉(火), 劍(金), 增(土), 墩(土), 審(金), 幟(金), 影(土), 慶(木), 慧(水), 慕(水), 慰(土), 暮(水), 暴(水), 槽(木), 槳(木), 瑩(木), 締(火), 練(火), 緯(土), 緘(金), 緬(水), 編(水), 緣(土), 緞(火), 緩(火), 緲(水), 翩(水), 褐(水), 褓(水), 褊(水), 諄(金), 賣(水), 質(火), 輝(水), 醇(水), 靠(木), 魯(火), 黎(火), 齒(火), 摎(火), 滸(水), 褙(水)</p>
            </div>
            <hr>
        </div>
    </div>
</div>
<style>
    @media screen and (min-width: 600px) {
.name-comment {
    min-height:403px;
    margin-top:16rem;;
  }
  .name-comment p{
    font-size:3.2rem;
    margin:0px
  }
}
@media screen and (max-width: 599px) {
.name-comment {
    min-height:159px;
    margin-top:5.5rem;;
  }
  .name-comment p{
    font-size:1.5rem;
    margin:0px
  }
}

</style>

<div class="text-center post-content col-lg-12 col-md-12 col-12 mx-auto" >

<span style="font-size:1.6rem"><b>點評</b></span>
</div>
<div class="container">
    <div class="row">
        <div class="text-center post-content col-lg-12 col-md-12 col-12 mx-auto" style="background-image:url(https://storage.googleapis.com/luckynaming/frame.png);background-repeat: no-repeat; background-size: 100% auto">
        <div class="name-comment">    
            <p><strong>池中之龍，風雲際會</strong></p>
            <p><strong>一躍上天，成功可望</strong></p>
        </div>
        </div>
    </div>
</div>


<h3 class=" info-color white-text text-center py-4">
    <strong>精選文章</strong>
</h3>
<!-- 推薦文章 -->
@component('nameformal.components.recommend_post')
@endcomponent
@endsection

@section('footer')
@include('nameformal.footer')
@endsection

@push('include-scripts')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
@endpush
@push('scripts')

@endpush