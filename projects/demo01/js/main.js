/*
$.get('get.py')
.done((data) => console.log(data))
.fail((error) => console.error(error))
*/

$(document).ready(function() {

  var interval = 100000;
  function doAjax() {
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
      complete: function (data) { setTimeout(doAjax, interval); }
    });

    $.ajax({
      type: 'post',
      url: 'get.py',
      data: {ticker:"MSFT"},
      dataType: 'json',
      success: function(d) {
        $("#stockList3").empty();
        $("#stockList3").append('Ticker: MSFT<br>Current Share Price: $'+d); 
      },
      complete: function (data) { setTimeout(doAjax, interval); }
    });

    $.ajax({
      type: 'post',
      url: 'get.py',
      data: {ticker:"AMZN"},
      dataType: 'json',
      success: function(d) {
        $("#stockList4").empty();
        $("#stockList4").append('Ticker: AMZN<br>Current Share Price: $'+d); 
      },
      complete: function (data) { setTimeout(doAjax, interval); }
    });
  }
  setTimeout(doAjax, interval);

  $("#search").click(function(e) {
    //$('#getTicker').submit(function(e){
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