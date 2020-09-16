axios.get('api/post', {
    params: {
        ID: 0
    }
})
.then(function (response) {
    console.log(response);
    $(".showMoreButton").hide();
                text = "" ;
                var i = 0;
                for (i = 0; i < response["data"].length; i++) {
                    text +=`<div class="post-preview">
                <a href="/post/${ response["data"][i]["id"] }">
                    <h2 class="post-title">
                            ${ response["data"][i]["title"] }
                    </h2>
                    <h3 class="post-subtitle">
                            ${ response["data"][i]["subtitle"] }
                    </h3>
                </a>
                <p class="post-meta">由
                    <a href="#">${ '寶貝命名網' }</a>發表
                    on September 24, 2019</p>
                </div>
                <hr>`;
                }
                $("#post").append(text);
})
.catch(function (error) {
    console.log(error);
})
.finally(function () {
// always executed
});  
