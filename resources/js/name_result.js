// 更換背景圖片
switch (zodiac) {
  case 1:
    document.getElementById("naming-result").style.backgroundImage ="url('https://storage.googleapis.com/luckynaming/51miz-E423424-FF97220C.png')";
    break;
  case 2:
    document.getElementById("naming-result").style.backgroundImage ="url('https://storage.googleapis.com/luckynaming/ox.png')";
    break;
}
// 更新顯示結果
document.getElementById("draw-combinations").addEventListener("change", getSpecificNamingResult);

function getSpecificNamingResult() {
  let objS = document.getElementById("draw-combinations");
  let combinations = objS.value;
  const url = '/api/name/specificresult';
  const config = {
    withCredentials: false, // default
    url: url,
    method: 'post',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    params: {
      zodiac: zodiac,
      combination: combinations,
    },
  }
  axios(config)
    .then(function (response) {
      data = response.data;
      console.log(data);
      //設定好的筆畫順序
      document.getElementById("preset-order").innerHTML = `${data.choosedArray.top},${data.choosedArray.middle},${data.choosedArray.last}`;
      //首字筆畫
      document.getElementById("middle-draw").innerHTML = data.choosedArray.middle;
      //喜用
      document.getElementById("middle-good").innerHTML = data.zodiac_middle_info.good;
      //忌用
      document.getElementById("middle-bad").innerHTML = data.zodiac_middle_info.bad;
      //末字筆畫
      document.getElementById("last-draw").innerHTML = data.choosedArray.last;
      //喜用
      document.getElementById("last-good").innerHTML = data.zodiac_last_info.good;
      //忌用
      document.getElementById("last-bad").innerHTML = data.zodiac_last_info.bad;
      //點評
      document.getElementById("comment-0").innerHTML = data.content[0];
      document.getElementById("comment-1").innerHTML = data.content[1];
      document.getElementById("comment-2").innerHTML = data.content[2];
      document.getElementById("comment-3").innerHTML = data.content[3];

     
    })
    .catch(function (error) {
      console.log(error);
    })
    .finally(function () {
      // always executed
    });
}
