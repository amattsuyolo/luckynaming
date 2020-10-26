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
    @component('nameformal.components.form')
    @endcomponent
     <div id="post">

     </div>
        
        <div class="clearfix showMoreButton">
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
  <script src="nametest/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="nametest/js/clean-blog.min.js"></script>
  <script src="/js/index.js"></script>
@endpush