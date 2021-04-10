@extends('nameformal.base_no_ad')

@section('title', '寶貝命名網')

@section('header')
    @include('nameformal.header')
@endsection

@section('content')
{{-- 線上靈籤抽取 --}}
<div class="cover result">
    <div class="item">
        <div class="sprite a1"></div>
    </div>
</div>
{{-- 線上靈籤抽取end --}}
<!-- Use this inside Body tag-->
<div class="container">
    <div class="row">
        <img class="mw-100 mx-auto d-block"  src="image/m_god.jpeg" alt="m_god">
    </div>
{{-- 介紹六十甲子 --}}
<h3>六十甲子籤介紹</h3>
<p>六十甲子籤詩，在各種靈籤中，是最普遍而且最靈驗的一種</p>

{{-- 抽籤步驟 --}}

<h3>抽籤詩的正確步驟</h3>
<p>1.點一柱香等待約10分鐘然後跟神明稟告姓名、農曆出生年月日、地址，描述想問的問題注意一籤一問的原則，可以對問題列出幾個選項</p>
<p>2.問完問題後向神明問是否賜籤，若是有三個聖杯才開始抽籤詩。</p>
<p>3.開始抽籤後問神明是否是這支籤，連續三個聖杯即為該支,否的話將抽取的籤放在一旁避免重複抽到</p>
<p>4.解籤資訊請持續關注本網站，或留言會有老師親自回覆</p>
<h3>點選求籤</h3>
<div class="row" id="choose_dice" onclick="ShowDice()">
    <img class="mx-auto d-block"  src="image/dice.jpeg" alt="籤">
</div>
{{-- 抽籤系統  躑杯 --}}
{{-- 各籤文的列表 --}}
<h3>以下是各個籤文的解析</h3>
<div class="row">
    @foreach (config('yearSign') as $key => $item)
        <div class="col-4 col-sm-3 sign-table" style="border:1px #ffc955 solid;">
            <a href="{{ route('sixty.sign_content',$key+1) }}">
                {{ $item }}
            </a>
        </div>
    @endforeach
</div>
</div>

{{-- 各籤的解析 --}}
{{-- 籤文基礎解釋--}}
{{-- 求才 愛情   --}}
@endsection

@section('footer')
    @include('nameformal.footer')
@endsection


@push('scripts')
     <!-- Bootstrap core JavaScript -->
  <script src="nametest/vendor/jquery/jquery.min.js"></script>
  <script src="nametest/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="nametest/js/clean-blog.min.js"></script>
  {{-- start = function() {
	isStarted = true;
	// $('.decode').hide();
	$('.result').show();
	// setTimeout(showDecode, 3000);
} --}}
<script>
   function ShowDice(){
        $(".sign-table").hide();  
        $(".cover").css("display", "block");
        setTimeout(function(){
            $(".sign-table").show();  
            $(".cover").css("display", "none");
             //導向
            toAnswer();
        }, 3000);
   }
   function toAnswer(){
        //會產生1~5之間的隨機亂數
        let code = getRandom(1,60);
        console.log(code);
        url = `/sign/${code}`;
        //導向
        location.href = url;
   }
   //產生min到max之間的亂數
    function getRandom(min,max){
        return Math.floor(Math.random()*(max-min+1))+min;
    }

</script>
@endpush

@push('css')
<style>
	     @keyframes play {
	100%{
		background-position: -737px -2px;
	}
}
@-webkit-keyframes play {
	100%{
		background-position: -737px -2px;
	}
}
        .sprite {
	width:145px;
	height:300px;
	display:inline-block;
	overflow:hidden;
	background-repeat: no-repeat;
	background-image:url(/image/dice_cup.png);
	background-position: -2px -2px;
	animation: play 0.8s steps(5) infinite;
    animation-iteration-count:infinite;

	-webkit-animation: play 0.8s steps(5) infinite;
}

/* .cover {
	background: url(share.png) top right no-repeat;
	background-size: 50%;
	background-color: rgba(0, 0, 0, 0.7);
	position: fixed;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	display: none;
} */
.cover {
	background:  top right no-repeat;
	background-size: 50%;
	background-color: rgba(0, 0, 0, 0.7);
	position: fixed;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	display: none;
}
.item {
	width: 100%;
	text-align: center;
	padding-top: 20%;
}

body {
	/* background: url(bg.jpg) no-repeat #E8DFD0; */
	/* background-size: cover; */
}
html, body{
	/* margin: 0;
	width: 100%;
	height: 100%; */
}
</style>
@endpush