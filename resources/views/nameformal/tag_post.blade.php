@extends('nameformal.base')

@section('title', '寶貝命名網')

@section('header')
    @include('nameformal.header')
@endsection

@section('content')
<div class="container mb-5">
    <!-- Portfolio Section Heading-->
    <h1 class="text-center text-uppercase mb-0">{{ $name }}</h1>
</div>

<div class="container">
  <div class="card-group vgr-cards">
  @foreach ($posts as $post)
    <div class="card">
      <div class="card-img-body">
      <a href="/post/{{ $post->id }}">
      <img class="card-img" src="https://storage.googleapis.com/luckynaming/{{ $post->min_pic }}" alt="Card image cap">
      </a>  
    </div>
      <div class="card-body">
        <h4 class="card-title">{{ $post->title }}</h4>
        <p class="card-text"> {{ $post->subtitle }}</p>
        <a href="/post/{{ $post->id }}" class="btn btn-outline-info">看更多</a>
      </div>
    </div>
  @endforeach
  </div>
</div>
  <hr>
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
      .pagination > .active > span {
        background-color: #5f8ace !important;
        color: #fff !important;
        border-color: #5f8ace !important;
     }
</style>
<link href="/css/tag_post.css" rel="stylesheet">
@endpush