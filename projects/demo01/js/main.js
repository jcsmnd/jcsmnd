/*
$.get('get.py')
.done((data) => console.log(data))
.fail((error) => console.error(error))
*/

$(document).ready(function() {
  $("#search").click(function(e) {
  //$('#getTicker').submit(function(e){
    
    e.preventDefault();

    $("#search").prop("disabled", true);

    $.ajax({
      url:"get.py",
      type:"get",
      data:$("#getTicker").serialize(),
      success: function(d) {
        console.log(d);
        $("#stockList").empty();
        let timezone = Date.now();
        let result = JSON.stringify(d);
        let realResult = JSON.parse(result);
        if(realResult.c != '0'){
          $("#stockList").append('Current Date: '+new Date().toLocaleDateString()+'<br>Current Time: '+new Date().toLocaleTimeString()+'<br>Share Price: $'+realResult.c);
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