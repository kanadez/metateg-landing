function slideshow(src, type){
   
   $(document.body).css({height: "100%",overflow: "hidden"});

   var h = $(window).height();
   var w = $(window).width();
   var bg = $("<div/>", {id:"bg"});
   
   bg.width(w);
   bg.height(h);
   bg.offset({top:0});
   bg.css({"position":"fixed","z-index": 999, background:"rgba(0,0,0,0.7)"});
   //bg.hover(function(){$('#close_icon').css("opacity",0.6)}, function(){$('#close_icon').css("opacity",0.3)});
   
   var close_panel = $("<div/>", {id:"close_panel"});
   close_panel.width(w/2);
   close_panel.height(h);
   close_panel.offset({top:0});
   close_panel.css({"position":"fixed","z-index": 9999, background:"rgba(0,0,0,0)", "right": 0});
   
   var  close = $("<div/>", {id:"close_icon"});
   close.width(50);
   close.height(50);
   close.offset({top:20, left:w-70});
   close.css({"position":"fixed","z-index": 9999, background:"url(../img/close.png)", opacity:0.9, cursor:"pointer"});
   close.hover(function(){$('#close_icon').css("opacity",1)}, function(){$('#close_icon').css("opacity",0.9)});
   close.click(function(){$('#bg').remove();$(document.body).css({height: "auto",overflow: "visible"});});
   close_panel.html(close);
   
   if (type == "url"){
        var image = new $('<iframe />', {src: src, width: screen.width-50, height: screen.height-220});
        image.css({border:"0px"});
        //image.id = "preview_img";
        //image.src = src;//$('#preview_img').attr("src");//"galleria/img/5.jpg";
   }
   else{
        var image = new Image();
        image.id = "preview_img";
        image.onload = onImageLoaded;
        image.onerror = onImageLoadError;
        image.src = src;//$('#preview_img').attr("src");//"galleria/img/5.jpg";
   }
   
   var ss = $("<div/>", {id:"ss"});
   ss.offset({top:100});
   ss.css({"width":"100%","text-align":"center","position":"fixed","z-index": 9999, background:"rgba(0,0,0,0)"});
   //ss.hover(function(){$('#close_icon').css("opacity",0.3)}, function(){$('#close_icon').css("opacity",0.6)});
   ss.html(image);
   bg.append(close_panel);
   bg.append(ss);
   
   $(document.body).append(bg);
   
   bg.click(function(){$('#bg').remove();$(document.body).css({height: "auto",overflow: "visible"});});
   $('#preview_img').css("cursor","pointer");
   $('#preview_img').click(function(){$('#bg').remove();$(document.body).css({height: "auto",overflow: "visible"});});
}

function onImageLoaded(object){
   var img_id = object.currentTarget.attributes.id.value;
   var img = $('#'+img_id);
   
   img.offset({top:($(window).scrollTop()+($(window).height()-$(this).height())/2)});
   
   if (img.height() > $(window).height()){
      img.offset({top:$(window).scrollTop()+10});
      img.height($(window).height()-20);
   }
   
   if (img.width() > $(window).width()-200){
      img.width($(window).width()-200);
   }
   //$('#'+img_id).addClass("post_userpic");
}

function onImageLoadError(object){
   //var img_id = object.currentTarget.attributes.id.value;
   //$('#'+img_id).addClass("post_userpic");
}