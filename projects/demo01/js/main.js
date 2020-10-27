/*
$.get('get.py')
.done((data) => console.log(data))
.fail((error) => console.error(error))
*/

$(document).ready(function() {

  var interval = 50000;
  function refresh() {
    //$.ajaxSetup({ cache: false });
    $.ajax({
      type: 'post',
      url: 'get.py',
      data: {ticker:"TSLA"},
      dataType: 'json',
      success: function(d) {
        $("#stockList2").empty();
        $("#stockList2").append('Ticker: TSLA<br>Current Share Price: $'+d); 
      },
      complete: function (data) { setTimeout(refresh, interval); }
    });
  }

  setTimeout(refresh, interval);

  $("#search").click(function(e) {
      e.preventDefault();
      $("#search").prop("disabled", true);
      $.ajax({
        url:"get.py",
        type:"get",
        data:$("#getTicker").serialize(),
        dataType: 'json',
        success: function(d) {
          console.log(d);
          $("#stockList").empty();
          let timezone = Date.now();
          let result = JSON.stringify(d);
          let realResult = JSON.parse(result);
          if(realResult.c != '0'){
            $("#stockList").append('Current Date: '+new Date().toLocaleDateString()+'<br>Current Time: '+new Date().toLocaleTimeString()+'<br>Share Price: $'+realResult);
            setTimeout(function(){
              $("#search").prop("disabled", false);
            },1000);
          }else
            $("#stockList").append('Wrong ticker try again');
            setTimeout(function(){
              $("#search").prop("disabled", false);
            },1000);
        },
        error: function (textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
        }
      });
  });  
});