<?php

require_once dirname(__FILE__)."/php/src/class_constructor.php";

$constructor = new Constructor;
$constructor->getLastModified();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru" id="metateg-pro">
   <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="Цены на наши услуги." />
        <meta http-equiv="keywords" content="создание сайтов, разработка сайтов, сложные интернет-проектоы, веб-приложения, интернет-магазины" />
        <title>Metateg | Цены на наши услуги</title>
        <link rel="icon" href="/img/icon.png" type="image/x-icon"/>
        <link type="text/css" rel="stylesheet" href="css/main.css"/>
        <link type="text/css" rel="stylesheet" href="css/prices.css"/>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css"/>
        <script type="text/javascript" src="jq/jquery.min.js" ></script>
        <script type="text/javascript" src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
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
         <h1 id="welcome_div">Цены на наши услуги<br><br></h1>
         <a id="next_a" href="#" class="cupid-green">СМОТРЕТЬ</a>
      </div>
      <div id="content4_div">
         <a id="prices"></a>
         <div id="prices_panel_div">
            <!--
            <div class="price_img_left" id="price_homepage_div"><img class="prices_img" style="opacity:0.7;" src="img/prices/homepage.png" /></div>
            <div class="price_caption_left">
                <h2 class="price_caption_title">Сайт-визитка - от 5 000 рублей</h2>
                <p>Сайт-визитка - эффективный и одновременно экономный способ представить себя или свой бизнес в Интернете. Если онлайн не является приоритетным направлением развития для Вашей компании, сайт-визитка от студии Метатег - оптимальный выбор по нескольким причинам:
                <p>• Недорого. Вложения будут минимальны - в нашем случае цены начинаются от 5 000 рублей.
                <br>• Качественно. Мы подойдем к Вашему проекту индивидуально и сделаем уникальный дизайн, подходящий именно Вам. 
                <p>Здесь уместно упомянуть разного рода "бесплатные конструкторы сайтов". Разным типам бизнеса подходят разные типы сайтов (сейчас представьте сайт металлургического завода, выполненный во всех цветах радуги). Правильно определить подходящий тип сайта, а также грамотно его разработать возможно только при индивидуальном профессиональном подходе. Очевидно, что в случае с конструктором это невозможно - там всё делается по шаблону "один для всех", либо можно выбрать шаблон самостоятельно, но сделать это правильно непрофессионалу нереально. Поэтому если Вам нужен рабочий сайт, выполняющий свою функцию (в данном случае представительскую) - обратитесь к нам. Если нужен просто сайт "для галочки", который, скорее всего, посетители будут закрывать сразу после открытия - воспользуйтесь конструктором.
                <p><a class="order_link opacity_transition" href="#">Сделать заказ</a>
            </div>
            
            <div class="price_caption_right">
                <h2 class="price_caption_title">Лэндинг - от 10 000 рублей</h2>
                <p>Лэндинг (с англ. Landing page - посадочная страница) - тип сайта, основной задачей которого является продажа. Продавать лэндинг может что угодно - от услуг парикмахера до ракетных установок. Выполняется такой сайт по строго определенным принципам и всегда на одной странице (именно лэндинги еще иногда называют "одностраничниками"). 
                <p>Сделать продающий landing page - нетривиальная задача, т.к. нужен индивидуальный подход, а также анализ и подгон Вашего товара/услуги под рабочие принципы продаж. Ну и, разумеется, качественный дизайн. 
                <p>В нашем случае стоимость лендинга начинается от 10 000 рублей.
                <p><a class="order_link opacity_transition" href="#">Сделать заказ</a>
            </div>
            <div class="price_img_right" id="price_landing_div"><img class="prices_img" style="opacity:0.7;" src="img/prices/landing.png" /></div>
            -->
            <div style="width:100%; clear:both">
               <div class="price_img_left" id="price_ecommerce_div"><img class="prices_img" style="opacity:0.7;" src="img/prices/ecommerce.png" /></div>
               <div class="price_caption_left">
                    <h2 class="price_caption_title">Интернет-магазин - от 50 000 рублей</h2>
                    <p>Интернет-магазин сегодня - необходимый атрибут успешной торговли. Больше половины Ваших текущих и потенциальных покупателей постоянно пользуются сетью Интернет. Поэтому, не имея интернет-магазина, Вы теряете как минимум столько же (а обычно больше) недополученной прибыли, сколько у Вас есть сейчас. 
                    <p>Однако сделать рабочую онлайн-витрину не так просто - бесплатный шаблон или услуги соседа-программиста принесут только убытки и убитые нервы. Ибо данный тип сайта строится индивидуально для каждого бизнеса и по определенным правилам, которые также подгоняются индивидуально, что требует работы нескольких профессионалов. 
                    <p>В случае с Метатегом интернет-магазин будет стоить Вам от 50 000 рублей и выше.
                    <p><a class="order_link opacity_transition" href="#">Сделать заказ</a>
               </div>
            </div>
            <div style="width:100%; clear:both">
               <div class="price_caption_right">
                    <h2 class="price_caption_title">Индивидуальный проект - цена обсуждается</h2>
                    <p>Вы придумали веб-сервис с уникальной бизнес идеей, которой ни у кого нет? Или же у Вас серьёзная компания, которая нуждается в солидном сайте с оригинальным современным дизайном и особенным функционалом? Мы выполним для Вас ресурс любой сложности и направленности, соблюдая при этом все последние тренды и тенденции в области веб-дизайна. Более того, мы поможем Вам окончательно определиться со всеми спорными моментам в случае, если это Ваш первый опыт работы в интернет-индустрии. Для владельцев бизнесов мы обеспечим бесплатную техническую поддержку после создания сайта. 
                    <p>Стоимость данного вида услуг всегда обсуждается отдельно.
                    <p><a class="order_link opacity_transition" href="#">Сделать заказ</a>
               </div>
               <div class="price_img_right" id="price_vip_div"><img class="prices_img" style="opacity:0.7;" src="img/prices/vip.png" /></div>
            </div>
            <div style="width:100%; clear:both">
               <div class="price_img_left" id="price_ecommerce_div"><img class="prices_img" style="opacity:0.7;width:52%" src="img/prices/search.png" /></div>
               <div class="price_caption_left">
                    <h2 class="price_caption_title">Продвижение - от 5 000 рублей</h2>
                    <p>Интернет - особая среда, со своими правилами и принципами. И продвинуть здесь что-либо также тяжело, как и создать. Мы умеем это делать, и готовы помочь Вам. Стоимость интернет-продвижения начинается от 5 000 руб.
                    <p><a class="order_link opacity_transition" href="#">Сделать заказ</a>
               </div>
            </div>
            <!--<div style="width:100%; clear:both">
               <div class="price_caption_right">
                    <h2 class="price_caption_title">Графический дизайн</h2>
                    <p>Качественно и верно выполненный дизайн крайне важен при создании любого продукта. От этого во многом зависит процесс и результат использования. Мы уделяем очень много внимания дизайну при создании наших проектов, будь то сайт, печатная продукция или рекламные материалы.
                    <p>Мы разработаем и выполним дизайн любой печатной или рекламной продукции для Вашего бизнеса - визитные карточки, рекламные проспекты, логотипы, флаеры, постеры, штендеры. 
                    <p>Примеры работ Вы можете посмотреть в <a href="portfolio.php" style="color: #2B587A">портфолио</a>. Цена каждого проекта обсуждается отдельно.
                    <p><a class="order_link opacity_transition" href="#">Сделать заказ</a>
               </div>
               <div class="price_img_right" id="price_vip_div"><img class="prices_img" style="opacity:0.7;" src="img/prices/brush.png" /></div>
            </div>-->
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
      <script type="text/javascript" src="js/prices.js"></script>
      <script type="text/javascript" src="js/translit.js"></script>
      <script type="text/javascript" src="js/cookie.js"></script>
      <!-- BEGIN JIVOSITE CODE {literal} -->
        <script type='text/javascript'>
        (function(){ var widget_id = 'OZQwbO1iuj';var d=document;var w=window;function l(){
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
        <!-- {/literal} END JIVOSITE CODE -->
   </body>
</html>