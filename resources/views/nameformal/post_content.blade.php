@extends('nameformal.base')

@section('title', '{{ $title }}')

@section('header')
 <!-- Page Header -->
 <header class="masthead" style="background-image: url('/nametest/img/post-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>{{ $title }}</h1>
            <h2 class="subheading">{{ $sub_title }}</h2>
            <span class="meta">由
              <a href="#">寶貝命名網</a>
              發表於{{ $published_at }}</span>
          </div>
        </div>
      </div>
    </div>
  </header>
@endsection

@section('content')
<!-- Post Content -->
<article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
           {!! $content !!}
        </div>
      </div>
    </div>
  </article>

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
