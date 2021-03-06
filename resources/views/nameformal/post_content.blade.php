@inject('postPresenter', 'App\Presenters\PostPresenter')

@extends('nameformal.base')

@section('bootstrap','/nametest/vendor/bootstrap/css/bootstrap-post-content.css')

@section('amp')
<link  rel = "amphtml"  href = "{{ route('amp-content', $post_id) }}" >
@endsection

@section('og-title', $title)

@section('og-image', 'https://storage.googleapis.com/luckynaming/'.$share_pic)

@section('title', $title)

@section('header')
<!-- 進度bar  -->
<div class="progress-container">
        <div id="myBar" class="blue-bar" style="width:1%"></div>
        <div class="progress-text">
            <span> 寶貝命名網
            </span>
        </div>
    </div>
 <!-- Page Header -->
 <header class="masthead" style="background-image: url('/nametest/img/big2.jpeg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-10 col-lg-8 col-md-10 mx-auto" style="position:relative">
          <div class="post-heading">
            <h1 id="post-title">{{ $title }}</h1>
            <h2 class="subheading">{{ $sub_title }}</h2>
            <span class="meta">由
              <a href="#">寶貝命名網</a>
              發表於{{ $published_at }}
            </span>
          </div>
        </div>
      </div>
    </div>
  </header>
@endsection

@section('content')
<style>
        .blue-bar {
            color: #fff !important;
            background-color: #17a2b8 !important;
            height: 100%;
            position: absolute;
            line-height: inherit;
            opacity:1!important;
            z-index:2;
        }
        .blue-bar:hover {
            color: #fff !important;
            background-color: #17a2b8 !important;
        }

        .progress-container {
            top: 1px;
            display: none;
            width: 100%;
            height: 3.1rem;
            position: sticky;
            background-color: #f1f1f1;
        }

        .progress-text {
            position: relative;
            text-align: center;
            z-index: 3;
            line-height: 3.1rem;
            font-weight: 900;
        }
    </style>
<!-- Post Content -->
<div class="container">
      <div class="row">
        <div class="col-lg-8 col-10 mx-auto">
          @if($audio )
          <span class="text-large">收聽文章故事內容</span>
          @else
          <span class="text-large">聽好音樂心情輕鬆好運來</span>
          @endif
        <audio preload="auto" controls>
                <source src="{{ $postPresenter->getCloudBaseUrl() }}{{ $audio ?? 'luck_default2.mp3' }}">
        </audio>
        </div>
      </div>
</div>
		
		
<article>
    <div class="container">
      <div class="row">
        <div class="post-content col-lg-8 col-md-10 mx-auto ql-editor" style="z-index:0 !important" >
           {!! $content !!}         
        </div>
        <div class="post-content col-11 col-lg-8 col-md-10 mx-auto">
            @foreach ($tags as $tag)
            <a href="{{ route('tags', ['tag_id' => $tag->id ]) }}">
              <button type="button" class="btn btn-outline-info mr-1 ">{{ $tag->name }}</button>
            </a>
            @endforeach
        </div>
      </div>
    </div>

  </article>

  <hr>
<!-- 推薦文章 -->
<h3 class=" info-color white-text text-center py-4">
    <strong>精選文章</strong>
</h3>
@component('nameformal.components.recommend_post')
@endcomponent
@endsection

@section('footer')
    @include('nameformal.footer')
@endsection

@push('css')
  <link href="/nametest/css/post_content.css" rel="stylesheet">
  
@endpush
@push('include-scripts')
   <!-- Bootstrap core JavaScript -->
   <script src="/nametest/vendor/jquery/jquery.min.js"></script>
  <script src="/nametest/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
    post_id = {{ $post_id ?? 0}};
  </script>
@endpush
@push('scripts')
  
  <!-- Custom scripts for this template -->
  <script src="/nametest/js/clean-blog.min.js"></script>
  <script src="/js/post_content.js"></script>
  <script src="/js/audio_player.js"></script>
  <script>$( function() { $( 'audio' ).audioPlayer(); } );</script>
@endpush
