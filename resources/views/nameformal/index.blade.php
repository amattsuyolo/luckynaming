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
        <h5 class=" info-color white-text text-center py-4">
          <strong>搜索吉祥美名</strong>
        </h5>
        <form style="background-image:url(nametest/img/butterfly2.jpg);background-repeat: no-repeat; background-size: 100% auto;">
          <div class="form-group">
            <label for="exampleInputEmail1">姓氏</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="請輸入姓氏">
          </div>
          <div class="form-group">
            <label for="example-date-input" >生日</label>
            <input class="form-control" type="date" value="2011-01-01" id="example-date-input">
            <small id="emailHelp" class="form-text text-muted">請選擇西元生日</small>
          </div>
          <label for="example-date-input" >性別</label>
          <div class="form-group">
          <label class="radio-inline">
            <input type="radio" name="optradio" checked>男
          </label>
          <label class="radio-inline">
            <input type="radio" name="optradio">女
          </label>
        </div>
        <div class="text-center">
          <button type="submit" style="font-size:large;" class="btn btn-info  btn-block">立即獲取</button>
      </div>
        </form>
        <div class="post-preview">
          <a href="/post">
            <h2 class="post-title">
              Man must explore, and this is exploration at its greatest
            </h2>
            <h3 class="post-subtitle">
              Problems look mighty small from 150 miles up
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">Start Bootstrap</a>
            on September 24, 2019</p>
        </div>
        <hr>
        <div class="post-preview">
          <a href="/post">
            <h2 class="post-title">
              I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
            </h2>
          </a>
          <p class="post-meta">Posted by
            <a href="#">Start Bootstrap</a>
            on September 18, 2019</p>
        </div>
        <hr>
        <div class="post-preview">
          <a href="/post">
            <h2 class="post-title">
              Science has not yet mastered prophecy
            </h2>
            <h3 class="post-subtitle">
              We predict too much for the next year and yet far too little for the next ten.
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">Start Bootstrap</a>
            on August 24, 2019</p>
        </div>
        <hr>
        <div class="post-preview">
          <a href="/post">
            <h2 class="post-title">
              Failure is not an option
            </h2>
            <h3 class="post-subtitle">
              Many say exploration is part of our destiny, but it’s actually our duty to future generations.
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">Start Bootstrap</a>
            on July 8, 2019</p>
        </div>
        <hr>
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
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
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="nametest/js/index.js"></script>
@endpush