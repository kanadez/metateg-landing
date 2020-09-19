var post_url = "./php/main.php";
var scrolltop = 0;
var stop = 0;
var cookie = null;
var timer_id = -1;

$(document).ready(function(){
   cookie = new Cookie();
   detectscroll();
   setDOMevents();
});

function setDOMevents(){ // задаёт события для DOM-элементов приложения
   $(window).scroll(function(){detectscroll()});
   
   $('#portfolio_a').click(function(e){
      $('html,body').stop().animate({ scrollTop: $('#portfolio').offset().top-50 }, 500, function(){timer_id = setTimeout("showHint('portfolio_hint')",1000)});
      e.preventDefault();
      window.history.pushState(null, null, "#portfolio");
   });
   
   $('#prices_a').click(function(e){
      $('html,body').stop().animate({ scrollTop: $('#prices').offset().top-50 }, 500);
      e.preventDefault();
      window.history.pushState(null, null, "#prices");
   });
   
   $('#order_a, #gift').click(function(e){
      $('html,body').stop().animate({ scrollTop: $('#order').offset().top }, 500);
      e.preventDefault();
      window.history.pushState(null, null, "#order");
   });
   
   $('#question_a').click(function(e){
      $('html,body').stop().animate({ scrollTop: $('#question').offset().top }, 500);
      e.preventDefault();
      window.history.pushState(null, null, "#question");
   });
   
   $('#logo_a').click(function(e){
      $('html,body').stop().animate({ scrollTop: $('#top').offset().top }, 500);
      e.preventDefault();
      window.history.pushState(null, null, "#top");
   });
   
   $('#next_a').click(function(e){
      $('html,body').stop().animate({ scrollTop: $('#advantages').offset().top-120 }, 500, function(){timer_id = setTimeout("showHint('advantages_hint')",1000)});
      e.preventDefault();
      window.history.pushState(null, null, "#advantages");
   });
   
   $('#order_button').click(function(){
      order();
   });
   
   if (cookie.getCookie("ordered_already")){
      $('#order_button').hide();
      $('#thanx_span').text("Вы уже отправляли свои данные. Дождитесь звонка.");
      $('#thanx_span').show();
      $('#thanx_span').animate({opacity: 1}, 100);
   }
}

function showHint(id_parameter){
   if ($('#'+id_parameter).is(":hidden")){
      $('#'+id_parameter).show();
      $('#'+id_parameter).animate({opacity: 1, marginTop: "+=10"}, 500);
      clearTimeout(timer_id);
   }
}

function showHat(){
   $('#header_links_panel_div').animate({marginTop: "-=25"}, 400);
   $('.header_link').animate({fontSize: "1.9em"}, 400);
   $('#logo_img').animate({marginTop: "-=20", width: "-=10"}, 400);
   $("#header_div").animate({backgroundColor: "#291444", height:"78px", opacity: ".8"}, 400);
   //$("#header_div").animate({borderBottom: "1px solid rgba(255,255,255,0.2)"}, 400);
}

function hideHat(){
   $('#header_links_panel_div').animate({marginTop: "+=25"}, 400);
   $('.header_link').animate({fontSize: "2em"}, 400);
   $('#logo_img').animate({marginTop: "+=20", width: "+=10"}, 400);
   $("#header_div").animate({backgroundColor: "rgba(0,0,0,0)", height:"101px", opacity: "1"}, 400);
   //$("#header_div").css({"border-bottom": "none"});
}

function detectscroll(){
   scrolltop = $(window).scrollTop();
   if (scrolltop > 10 && !stop){
      showHat();
      stop = !stop;
   }
   else if (scrolltop < 10 && stop){
      hideHat();
      stop = !stop;
   }
   
   var bottom_line = scrolltop+$(window).height();

}

function order(){
   if ($('#phone_input').val() === ""){
      highlightCustomerDataInput();
      $('#phone_input').focus();
   }
   else{
      $.post(post_url,{
         a: "o",
         b: translit($('#phone_input').val().trim()),
         c: $('#description_input').val().trim()
      },function (result){
         cookie.setCookie("ordered_already", 1, "Mon, 01-Jan-2020 00:00:00 GMT", "/");         
         sendAnalyticsGoals();
      });
      
      $('#order_button').animate({opacity: 0}, 100, function(){
         $('#order_button').hide();
         $('#thanx_span').show();
         $('#thanx_span').animate({opacity: 1}, 100);
      });
   }
}

function highlightCustomerDataInput(){
   $("#phone_input").css({background:"#c6123d"});
   $("#phone_input").animate({backgroundColor: "rgba(0,0,0,0)"}, 1000);
}

function sendAnalyticsGoals(){
    yaCounter33638534.reachGoal("order-request");
    ga("send", "event", "submit", "order-request");
}