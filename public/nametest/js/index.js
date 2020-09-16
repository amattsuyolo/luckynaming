axios.get('api/post', {
    params: {
        ID: 0
    }
})
.then(function (response) {
  console.log(response);
})
.catch(function (error) {
    console.log("測試");
})
.finally(function () {
// always executed
});  
