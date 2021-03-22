@extends('nameformal.base')

@section('title', '寶貝命名網')

@section('header')
    @include('nameformal.header')
@endsection

@section('content')
{{-- 介紹六十甲子 --}}
<p>六十甲子籤是台灣最常見的籤</p>
{{-- 抽籤系統  躑杯 --}}
{{-- 各籤文的列表 --}}

<!-- Use this inside Body tag-->

<div class="row">

    @foreach (config('yearSign') as $item)
    <div class="col-4 col-sm-3 " style="background-color:rgb(235, 81, 46);">{{ $item }}</div>
    @endforeach
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