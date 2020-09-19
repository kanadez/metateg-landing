var post_url = "http://metateg.pro/php/main.php";
var cookie = null;

$(document).ready(function(){
   cookie = new Cookie();
   
   //if ($('#wrapper').height() < $(document).height())
      //$('#copyr_span').offset({top:$(document).height()-35});
   
   $('#order_a').click(function(){
      $.post(post_url,{
         a: "o",
         b: translit($('#phone_input').val())
      },function (result){
         cookie.setCookie("ordered_already", 1, "Mon, 01-Jan-2020 00:00:00 GMT", "/");
      });
      
      $('#order_a').hide();
      $('#thanx_span').show();
   });
});