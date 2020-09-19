<?php

require_once dirname(__FILE__)."/php/src/class_constructor.php";

$constructor = new Constructor;
$constructor->getLastModified();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru" id="metateg-pro">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="Примеры выполненных нами проектов: сайты, веб-приложения, приложения для социальных сетей, интернет-магазины и другие интернет-проекты." />
        <meta http-equiv="keywords" content="создание сайтов, разработка сайтов, сложные интернет-проектоы, веб-приложения, интернет-магазины" />
        <title>Metateg | Наши работы</title>
        <link rel="icon" href="/img/icon.png" type="image/x-icon"/>
        <link type="text/css" rel="stylesheet" href="css/main.css"/>
        <link type="text/css" rel="stylesheet" href="css/portfolio.css"/>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css"/>
        <script type="text/javascript" src="jq/jquery.min.js" ></script>
        <script type="text/javascript" src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <script type="text/javascript" src="js/gallery.js"></script>
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
            (function (d, w, c) {
                (w[c] = w[c] || []).push(function() {
                    try {
                        w.yaCounter33638534 = new Ya.Metrika({
                            id:33638534,
                            clickmap:true,
                            trackLinks:true,
                            accurateTrackBounce:true,
                            webvisor:true,
                            trackHash:true
                        });
                    } catch(e) { }
                });

                var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function () { n.parentNode.insertBefore(s, n); };
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://mc.yandex.ru/metrika/watch.js";

                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else { f(); }
            })(document, window, "yandex_metrika_callbacks");
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/33638534" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-58444726-1', 'auto');
          ga('send', 'pageview');
        </script>
     </head>
     <body>
        <a id="top"></a>
        <div id="header_div" >
           <a id="logo_a" href="index.php">
              <img id="logo_img" src="img/logo.png" class="opacity_transition"/>
           </a>
           <div id="header_links_panel_div">
              <div class="header_link" style="float: left;opacity: 0.8;">
                 <!--<img src="img/phone.png" style="width: 19px;float: left;margin-right: 5px;margin-top: 1px;" />
                    <span id="phone_span" >(8142) 28-55-21</span>-->
              </div>
              <a id="portfolio_a" class="header_link opacity_transition" href="portfolio.php">Портфолио</a>
              <a id="prices_a" class="header_link opacity_transition" href="prices.php">Цены</a>
              <a id="feedback_a" class="header_link opacity_transition" href="feedback.php">Отзывы</a>
              <a id="order_a" class="header_link opacity_transition" href="#">Сделать заказ</a>
           </div>
        </div>
        <div id="content_div" >
           <h1 id="welcome_div">Наши работы<br><br></h1>
           <a id="next_a" href="#" class="cupid-green">СМОТРЕТЬ</a>
        </div>
        <div id="content3_div"><span class="dark_bg_header">Наши работы</span>
           <a id="portfolio"></a>
           <div id="portfolio_panel_div">
              <table id="portfolio_table" border="0" cellspacing="0" cellpadding="0">
                 <tr>
                    <td id="portfolio_12_td" class="transparent portfolio_td"><div style="position:relative;"><img id="portfolio_12_img" class="portfolio_img" src="img/portfolio/fflowers.jpg" /><a href="javascript:void(0)" onclick="slideshow('https://fflowers.nl', 'url')"><span id="portfolio_3_span" class="portfolio_span">Цветочный интернет-аукцион. Нажмите, чтобы посмотреть сайт.</span></a></div></td>
                    <td id="portfolio_13_td" class="transparent portfolio_td"><div style="position:relative;"><img id="portfolio_13_img" class="portfolio_img" src="img/portfolio/ffmobile.jpg" /><a href="javascript:void(0)" onclick="slideshow('img/portfolio/ffmobile_preview.jpg', 'image')"><span id="portfolio_4_span" class="portfolio_span">Мобильное приложение для цветочного интернет-аукциона (iOS + Android). Нажмите, чтобы посмотреть превью.</span></a></div></td>
                    <td id="portfolio_14_td" class="transparent portfolio_td"><div style="position:relative;"><img id="portfolio_14_img" class="portfolio_img" src="img/portfolio/moizashitnik.jpg" /><a href="javascript:void(0)" onclick="slideshow('/portfolio/yuristptz/', 'url')"><span id="portfolio_11_span" class="portfolio_span">Лендинг для юридической компании. Нажмите, чтобы посмотреть сайт.</span></a></div></td>
                 </tr>
                 <tr>
                    <td id="portfolio_1_td" class="transparent portfolio_td"><div style="position:relative;"><img id="portfolio_1_img" class="portfolio_img" src="img/portfolio/yf_thumb.jpg" /><a href="javascript:void(0)" onclick="slideshow('/portfolio/dlyayurlits/', 'url')"><span id="portfolio_3_span" class="portfolio_span">Лендинг для юридической компании. Нажмите, чтобы посмотреть сайт.</span></a></div></td>
                    <td id="portfolio_2_td" class="transparent portfolio_td"><div style="position:relative;"><img id="portfolio_2_img" class="portfolio_img" src="img/portfolio/4.jpg" /><a href="javascript:void(0)" onclick="slideshow('img/portfolio/neonpreview.png', 'url')"><span id="portfolio_4_span" class="portfolio_span">Интерактивная доска объявлений. Нажмите, чтобы посмотреть превью.</span></a></div></td>
                    <td id="portfolio_11_td" class="transparent portfolio_td"><div style="position:relative;"><img id="portfolio_11_img" class="portfolio_img" src="img/portfolio/topreal_thumb.jpg" /><a href="javascript:void(0)" onclick="slideshow('https://topreal.top', 'url')"><span id="portfolio_11_span" class="portfolio_span">SaaS-сервис для работы с недвижимостью. Нажмите, чтобы посмотреть сайт.</span></a></div></td>
                 </tr>
                 <tr>
                    <td id="portfolio_4_td" class="transparent portfolio_td"><div style="position:relative;"><img id="portfolio_4_img" class="portfolio_img" src="img/portfolio/5.jpg" /><a href="javascript:void(0)" onclick="slideshow('img/portfolio/kcspreview.jpg', 'image')"><span id="portfolio_5_span" class="portfolio_span">Посадочная страница для местного карельского бизнеса. Нажмите, чтобы посмотреть превью.</span></a></div></td>
                    <td id="portfolio_5_td" class="transparent portfolio_td"><div style="position:relative;"><img id="portfolio_5_img" class="portfolio_img" src="img/portfolio/50gradusov.jpg" /><a href="javascript:void(0)"><span id="portfolio_7_span" class="portfolio_span">Логотип.</span></a></div></td>
                    <td id="portfolio_6_td" class="transparent portfolio_td"><div style="position:relative;"><img id="portfolio_6_img" class="portfolio_img" src="img/portfolio/1.jpg" /><a href="javascript:void(0)" onclick="slideshow('img/portfolio/cherdackpreview.jpg', 'image')"><span id="portfolio_1_span" class="portfolio_span">Петрозаводский интернет-магазин брендовой одежды и аксессуаров. Нажмите, чтобы посмотреть превью.</span></a></div></td>
                 </tr>
                 <tr>
                    <td id="portfolio_7_td" class="transparent portfolio_td"><div style="position:relative;"><img id="portfolio_7_img" class="portfolio_img" src="img/portfolio/2.jpg" /><a href="javascript:void(0)" onclick="slideshow('img/portfolio/ymbpreview.jpg', 'image')"><span id="portfolio_2_span" class="portfolio_span">Фотохостинг в виде приложения ВК. Нажмите, чтобы посмотреть превью.</span></a></div></td>
                    <td id="portfolio_8_td" class="transparent portfolio_td"><div style="position:relative;"><img id="portfolio_8_img" class="portfolio_img" src="img/portfolio/travel.jpg" /><a href="javascript:void(0)" onclick="slideshow('img/portfolio/turpreview.jpg')"><span id="portfolio_2_span" class="portfolio_span">Сайт туристической компании. Нажмите, чтобы посмотреть превью.</span></a></div></td>
                    <td id="portfolio_9_td" class="transparent portfolio_td"><div style="position:relative;"><img id="portfolio_9_img" class="portfolio_img" src="img/portfolio/lakithumb.jpg" /><a href="javascript:void(0)" onclick="slideshow('img/portfolio/lakiapppreview.jpg', 'image')"><span id="portfolio_2_span" class="portfolio_span">Приложение ВК для онлайн-бронирования мест в гостинице. Нажмите, чтобы посмотреть превью.</span></a></div></td>
                 </tr>
                 <tr>
                    <td id="portfolio_1_td" class="transparent portfolio_td"><div style="position:relative;"><img id="portfolio_1_img" class="portfolio_img" src="img/portfolio/3.jpg" /><a href="javascript:void(0)" onclick="slideshow('img/portfolio/lakipreview.jpg', 'image')"><span id="portfolio_3_span" class="portfolio_span">Сайт-визитка для местного карельского бизнеса. Нажмите, чтобы посмотреть превью.</span></a></div></td>
                    <td id="portfolio_10_td" class="transparent portfolio_td"><div style="position:relative;"><img id="portfolio_10_img" class="portfolio_img" src="img/portfolio/lampothumb.jpg" /><a href="javascript:void(0)" onclick="slideshow('img/portfolio/lampo.jpg', 'image')"><span id="portfolio_2_span" class="portfolio_span">Приложение ВК для онлайн-бронирования мест в гостинице. Нажмите, чтобы посмотреть превью.</span></a></div></td>
                    <td id="portfolio_3_td" class="transparent portfolio_td"><div style="position:relative;"><img id="portfolio_3_img" class="portfolio_img" src="img/portfolio/foryousample.jpg" /><a href="javascript:void(0)"><span id="portfolio_6_span" class="portfolio_span">Рекламный баннер и логотип для студии красоты</span></a></div></td>
                 </tr>
              </table>
              <!--<div id="portfolio_hint" style="margin-top:-46px" class="bottom_arrow_div"><span class="arrow_span_white">Оформите заказ или задайте вопрос ниже</span><br><img src="img/arrow_white.png" class="arrow_img" /></div>-->
           </div>
        </div>
        <div id="content5_div">
           <a id="order"></a>
           <h2 class="dark_bg_header">Оформление заказа</h2>
           <div id="order_panel_div">
              <a id="question"></a>
              <?= Constructor::getOrderForm()?>
              <p><div id="footer_panel">
                 <div id="social_panel">
                     <a href="https://vk.com/ptz.creatif" target="_blank"><img class="social_img opacity_transition" src="img/vk_logo.png" /></a>
                     <a href="https://twitter.com/kanadezz" target="_blank"><img class="social_img opacity_transition" src="img/twitter_logo1.png" /></a>
                 </div> 
                 <div itemscope itemtype="http://schema.org/Organization">
                    <span id="copyr_span">© <span itemprop="name">Metateg</span> 2015. Все права защищены. / 
                       <a href="mailto:hello@metateg.pro" target="_blank" itemprop="email">hello@metateg.pro</a>
                       / <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                             <span itemprop="addressLocality">Петрозаводск</span>,
                             <span itemprop="streetAddress">ул. Коммунальная, 20</span></span> 
                       <!--/ <span itemprop="telephone">(8142) 28-55-21</span> -->
                    </span>
                 </div>
              </div>
           </div>
        </div>
        <script type="text/javascript" src="js/portfolio.js"></script>
        <script type="text/javascript" src="js/translit.js"></script>
        <script type="text/javascript" src="js/cookie.js"></script>
        <!-- BEGIN JIVOSITE CODE {literal} -->
        <script type='text/javascript'>
        (function(){ var widget_id = 'OZQwbO1iuj';var d=document;var w=window;function l(){
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
        <!-- {/literal} END JIVOSITE CODE -->
     </body>
</html>