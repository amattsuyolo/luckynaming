@extends('nameformal.base')

@section('title', '命名資訊')

@section('header')
@include('nameformal.header')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="post-content col-lg-8 col-md-10 mx-auto">

            <h2 class="info-color white-text text-center py-4">
                <strong>命名結果</strong>
            </h2>
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">熊崎氏八十一數好運筆畫</label>
            <select class="custom-select my-1 mr-sm-2" id="draw-combinations" >
                <option>選擇...</option>
                @foreach ($returnComBinations as $combination)
                <option value="{{ $combination }}">{{ $combination }}</option>
                @endforeach
            </select>
            <br>
            <br>
            <p>預設筆畫次序:&nbsp;&nbsp;<span id="preset-order">{{$choosedArray["top"].",".$choosedArray["middle"].",".$choosedArray["last"] }}</span></p>
            <p>{{ $last_name }}<strong>姓筆畫：{{$choosedArray["top"]}} </strong></p>
            <hr>
            <p><strong>名首字筆畫：<span id="middle-draw">{{$choosedArray["middle"]}} </span></strong></p>
            <div>
                <p><b>生肖喜用字</b>：</p>
                <p id="middle-good">{{ $zodiac_middle_info["good"] }}</p>
                <p><b>生肖忌用字</b>：</p>
                <p id="middle-bad">{{ $zodiac_middle_info["bad"] }}</p>
            </div>
            <hr>
            <p><strong>名次字筆畫：<span id="last-draw">{{ $choosedArray["last"] }}</span></strong></p>
            <div>
                <p><b>生肖喜用字</b>:</p>
                <p id="last-good">{{ $zodiac_last_info["good"] }}</p>
                <p><b>生肖忌用字</b>：</p>
                <p id="last-bad">{{ $zodiac_last_info["bad"] }}</p>
                <p></p>
            </div>
            <hr>
        </div>
    </div>
</div>
<style>
    @media screen and (min-width: 600px) {
.name-comment {
    min-height:403px;
    margin-top:16rem;;
  }
  .name-comment p{
    font-size:3.2rem;
    margin:0px
  }
}
@media screen and (max-width: 599px) {
.name-comment {
    min-height:159px;
    margin-top:5.5rem;;
  }
  .name-comment p{
    font-size:1.5rem;
    margin:0px
  }
}

</style>

<div class="text-center post-content col-lg-12 col-md-12 col-12 mx-auto" >

<span style="font-size:1.6rem"><b>點評</b></span>
</div>
<div class="container">
    <div class="row">
        <div class="text-center post-content col-lg-12 col-md-12 col-12 mx-auto" style="background-image:url(https://storage.googleapis.com/luckynaming/frame.png);background-repeat: no-repeat; background-size: 100% auto">
        <div class="name-comment">    
            <p><strong><span id="comment-0">{{ $content[0] }}</span>，<span id="comment-1">{{ $content[1] }}</span></strong></p>
            <p><strong><span id="comment-2">{{ $content[2] }}</span>，<span id="comment-3">{{ $content[3] }}</span></strong></p>
        </div>
        </div>
    </div>
</div>


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
<script>
zodiac = {{$zodiac}}
</script>

<script src="/js/name_result.js"></script>
@endpush