@extends('nameformal.base')

@section('title', '寶貝命名網')

@section('og-description', $og_description)

@section('header')
<header class="masthead" style="background-image: url('/nametest/img/big2.jpeg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="mx-auto" style="position:relative">
          <div class="post-heading">
            <h1 id="post-title">{{ $sign->sign_topic }}</h1>
          </div>
        </div>
      </div>
    </div>
  </header>
@endsection

@section('content')
{{-- 介紹六十甲子 --}}
{{-- 抽籤系統  躑杯 --}}
{{-- 各籤文的列表 --}}

<!-- Use this inside Body tag-->

<article>
    <div class="container">
      <div class="row">
        <div class="mx-auto ql-editor" style="z-index:0 !important" >
            <h2>{!! $content['first'] !!}</h2>
            <h2>{!! $content['second'] !!}</h2>
            <h2>{!! $content['third'] !!}</h2>
            <h2>{!! $content['fourth'] !!}</h2>
        </div>
      </div>
    </div>
</article>
<div class="container">
    <div class="row">
        <div class="mx-auto">
            <img src="{{config('file.gcp_prefix').$sign->pic}}" alt="{{ $sign->sign_topic }}">
        </div>
    </div>
</div>
<article>
    <div class="container">
      <div class="row">
        <div class="post-content col-lg-8 col-md-10 mx-auto ql-editor" style="z-index:0 !important" >
            解析：
            {!! $sign->analysis !!}
        </div>
      </div>
    </div>
</article>

{{-- 各籤的解析 --}}
{{-- 籤文基礎解釋--}}
{{-- 求才 愛情   --}}
@endsection

@section('footer')
    @include('nameformal.footer')
@endsection


@push('scripts')
     <!-- Bootstrap core JavaScript -->
  <script src="/nametest/vendor/jquery/jquery.min.js"></script>
  <script src="/nametest/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="/nametest/js/clean-blog.min.js"></script>

@endpush

@push('css')
<style>
	
	</style>
@endpush