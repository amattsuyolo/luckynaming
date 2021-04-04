@extends('nameformal.base')

@section('title', '寶貝命名網')

@section('header')
    @include('nameformal.header')
@endsection

@section('content')

<!-- Use this inside Body tag-->
<div class="container">

{{-- 介紹六十甲子 --}}
<h3>六十甲子籤介紹</h3>
<p>六十甲子籤詩，在各種靈籤中，是最普遍而且最靈驗的一種</p>

{{-- 抽籤步驟 --}}

<h3>抽籤詩的正確步驟</h3>
<p>1.點一柱香等待約10分鐘然後跟神明稟告姓名、農曆出生年月日、地址，描述想問的問題注意一籤一問的原則，可以對問題列出幾個選項</p>
<p>2.問完問題後向神明問是否賜籤，若是有三個聖杯才開始抽籤詩。</p>
<p>3.開始抽籤後問神明是否是這支籤，連續三個聖杯即為該支,否的話將抽取的籤放在一旁避免重複抽到</p>
<p>4.解籤資訊請持續關注本網站，或留言會有老師親自回覆</p>


{{-- 抽籤系統  躑杯 --}}
{{-- 各籤文的列表 --}}
<h3>以下是各個籤文的解析</h3>
<div class="row">
    @foreach (config('yearSign') as $key => $item)
        <div class="col-4 col-sm-3 " style="border:1px #ffc955 solid;">
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

@endpush

@push('css')
<style>
	
	</style>
@endpush