@extends('nameformal.base')

@section('title', '命名資訊')

@section('header')
    @include('nameformal.header')
@endsection

@section('content')
  <h2 class=" info-color white-text text-center py-4">
          <strong>命名結果</strong>
  </h2>
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