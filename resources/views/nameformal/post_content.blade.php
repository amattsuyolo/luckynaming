@extends('nameformal.base')

@section('bootstrap','/nametest/vendor/bootstrap/css/bootstrap-post-content.css')

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
 <header class="masthead" style="background-image: url('/nametest/img/post-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto" style="position:relative">
          <div class="post-heading">
            <h1>{{ $title }}</h1>
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
<article>
    <div class="container">
      <div class="row">
        <div class="post-content col-lg-8 col-md-10 mx-auto ql-editor" style="z-index:0 !important" >
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

@push('css')
  <link href="/nametest/css/post_content.css" rel="stylesheet">
  
@endpush
@push('scripts')
     <!-- Bootstrap core JavaScript -->
  <script src="/nametest/vendor/jquery/jquery.min.js"></script>
  <script src="/nametest/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="/nametest/js/clean-blog.min.js"></script>
  <script>
        let $win = $(window);

        // 進度區塊
        let progressBlock = $('.progress-container');
        // 設定進度bar藍色比例
        function setRate(num) {
            num = parseInt(num);
            if (num <= 0) {
                num = 0;
            }
            if (num >= 100) {
                num = 100;
            }
            $("#myBar").css("width", num + "%");
        }
        // content 上方高度
        let upperContentHeight = $(".post-content").offset().top;
        console.log("upperContentHeight:",upperContentHeight);
        // 內容高度
        let contentHeight = $(".post-content").height();
        console.log("contentHeight:",contentHeight);
        // 初始下移高度
        lastScrollY = 0
        $win.scroll(function () {
            //螢幕高度
            let winHeight = $(window).height();
            //閱讀部分（滾動下移＋螢幕高度-上方非文章區塊）
            let readPartion = $win.scrollTop() + winHeight - upperContentHeight;
            //閱讀站內容比例（閱讀部分/內容高度）
            let ratio = readPartion / contentHeight * 100;
            setRate(ratio);
            //下移時且未閱讀完畢 顯示進度bar ; 上移隱藏進度bar
            st = this.scrollY;
            if (st > lastScrollY && $win.scrollTop() > upperContentHeight && ratio <= 100) {
                progressBlock.fadeIn();
            } else {
                progressBlock.fadeOut();
            }
            lastScrollY = st;
        })

    </script>
@endpush
