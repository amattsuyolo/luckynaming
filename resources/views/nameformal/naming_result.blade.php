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
  
  <div class="recommend">
    <div class="slider owl-carousel">
      <div class="card">
        <div class="img"><img src="https://storage.googleapis.com/luckynaming/profile-3.jpeg" alt=""></div>
        <div class="content">
          <div class="title">Briana Tozour</div>
          <div class="sub-title">Graphic Designer</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
          <div class="btn">
            <button>Read more</button>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="img"><img src="https://storage.googleapis.com/luckynaming/profile-3.jpeg" alt=""></div>
        <div class="content">
          <div class="title">Pricilla Preez</div>
          <div class="sub-title">Web Developer</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
          <div class="btn">
            <button>Read more</button>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="img"><img src="https://storage.googleapis.com/luckynaming/profile-3.jpeg" alt=""></div>
        <div class="content">
          <div class="title">Eliana Maia</div>
          <div class="sub-title">App Developer</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
          <div class="btn">
            <button>Read more</button>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('footer')
    @include('nameformal.footer')
@endsection

@push('include-scripts')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
@endpush
@push('scripts')
<script>
    $('.owl-carousel').owlCarousel({
    autoplay: true,
    autoplayTimeout: 2000, //2000ms = 2s;
    autoplayHoverPause: true,
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:3,
            nav:false,
            loop:false
        }
    }
})
</script>
@endpush