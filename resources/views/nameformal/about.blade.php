@extends('nameformal.base')

@section('title', '寶貝命名網')

@section('header')
     <!-- Page Header -->
 <header class="masthead" style="background-image: url('https://storage.googleapis.com/luckynaming/about-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>網站緣起</h1>
            <span class="subheading">發揚文化、愛護動物</span>
          </div>
        </div>
      </div>
    </div>
  </header>
@endsection

@section('content')


  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <a href="#">
            <img class="img-fluid" src="https://storage.googleapis.com/luckynaming/polar_bear.jpg" alt="polar_bear">
        </a>
        <p>2020是個充滿挑戰的一年，在這近年來可說是一段動盪的日子，但也提醒了我們珍惜當下的人、事、物，我們是一群愛好傳統文化與北極熊的青年，希望憑藉著自身所擁有的技能發揚姓命學相關知識，未來也會逐步拓展更多元的主題。</p>
        <p>為了網站的發展與提供創作者動力，網站會有相關營利的廣告，然而我們承諾在2021年開始會於每年的6月5日也就是「世界環境日」捐贈網站<b>20%</b>的盈餘給予北極熊保育的團體，希望能為北極熊的存續盡一份微薄之力。
      </p>
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
@endpush