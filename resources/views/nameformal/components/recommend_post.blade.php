<div class="recommend">
    <div class="slider owl-carousel" id="carrusel">
     
    </div>
</div>
<script>
 let recommend = document.getElementsByClassName('recommend-post')[0];
console.log(recommend );
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<script src="/nametest/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
url = '/api/recommend/post';
if(typeof(post_id) != 'undefined'){
    url = `/api/recommend/post/${post_id}`;
}

axios.get(url, {
    params: {
        ID: 0
    }
})
.then(function (response) {
    // console.log("hi:",response.data);
    $.each(response.data, function (key, elem) {
        console.log("hi:",elem.title);
        $('#carrusel').append(` <div class="card">
        <a href="/post/${ elem.id }">
        <div class="img"><img src="https://storage.googleapis.com/luckynaming/${ elem.min_pic }" alt="推薦小圖"></div>
        </a>
        <div class="content">
          <div class="title">${ elem.title }</div>
          <div class="sub-title">${ elem.subtitle }</div>
          <div class="btn">
          <a href="/post/${ elem.id }">
            <button class="btn btn-outline-dark">閱讀更多</button>
          </a>
          </div>
        </div>
      </div>
     `);
   });
  
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
})
.catch(function (error) {
    console.log(error);
})
.finally(function () {
// always executed
});  
</script>