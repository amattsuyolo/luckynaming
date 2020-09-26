@extends('nameformal.base')

@section('title', '寶貝命名網')

@section('header')
    @include('nameformal.header')
@endsection

@section('content')

  <!-- Main Content -->
  <div class="container" >
    <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
     <div id="post">
      @foreach ($posts as $post)
      <div class="post-preview">
          <a href="/post/{{ $post->id }}">
            <h2 class="post-title">
              {{ $post->title }}
            </h2>
            <h3 class="post-subtitle">
             {{ $post->subtitle }}
            </h3>
          </a>
          <p class="post-meta">由
              <a href="#">寶貝命名網</a>發表於 {{ $post->published_at }}
          </p>
      </div>
        <hr> 
      @endforeach
      <div class="container">
        <div class="row text-center">
          {{ $posts->links() }}
        </div>
      </div>
     </div>
      
      </div>
    </div>
  </div>
  <hr>
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
      .pagination > .active > span {
        background-color: #5f8ace !important;
        color: #fff !important;
        border-color: #5f8ace !important;
     }
</style>
@endpush