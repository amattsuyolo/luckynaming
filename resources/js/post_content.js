
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
let validReading = false;
$win.scroll(function () {
    //螢幕高度
    let winHeight = $(window).height();
    //閱讀部分（滾動下移＋螢幕高度-上方非文章區塊）
    let readPartion = $win.scrollTop() + winHeight - upperContentHeight;
    //閱讀站內容比例（閱讀部分/內容高度）
    let ratio = readPartion / contentHeight * 100;
    setRate(ratio);
    //紀錄有效閱讀
    if(!validReading && ratio>75){
      validReading = true;
      sendToStoreReadingBehavior("valid",postTitle,id,readDateTime);
    }
    //下移時且未閱讀完畢 顯示進度bar ; 上移隱藏進度bar
    st = this.scrollY;
    if (st > lastScrollY && $win.scrollTop() > upperContentHeight && ratio <= 100) {
        progressBlock.fadeIn();
    } else {
        progressBlock.fadeOut();
    }
    lastScrollY = st;
})
// 文章標題
let postTitle = document.getElementById("post-title").innerText;
// 文章id
let path = location.pathname;
let id = path.split("/")[2]; 
// 閱讀時間
const datetime = new Date()
let readDateTime = datetime.toString();
// 上一頁
//儲存點擊紀錄
sendToStoreReadingBehavior("normal",postTitle,id,readDateTime);

// 儲存閱讀紀錄
function sendToStoreReadingBehavior(type,title,id,datetime){
  const url = 'https://script.google.com/macros/s/AKfycbzB4D45mpilPBnNIlUIYFSrts3X8Kbwj-NhaiMtNg9zCniRGDk8/exec'; // origin api url
  const config = {
    withCredentials: false, // default
    url: url, 
    method: 'post', 
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    params:  {
            type: type,
            id: id,
            title: title,
            time: datetime,
            last_url: document.referrer
        },
  }
  axios(config)
    .then(function (response) {
          // console.log(response);
        })
    .catch(function (error) {
        console.log(error);
    })
    .finally(function () {
    // always executed
    });  
}
