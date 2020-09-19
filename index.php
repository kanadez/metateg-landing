<?php

require_once('mdd.php');
require_once dirname(__FILE__)."/php/src/DB.php";
require_once dirname(__FILE__)."/php/src/class_constructor.php";
require_once dirname(__FILE__)."/php/src/class_feedback.php";
require_once dirname(__FILE__)."/php/src/data_parameter.php";

$constructor = new Constructor;

mobile_device_detect();

$db = new DB;

if (!$db->mysqlConnect()){
   mysql_query("SET NAMES 'utf8'");
   mysql_query("SET collation_connection = 'UTF-8_general_ci'");
   mysql_query("SET collation_server = 'UTF-8_general_ci'");
   mysql_query("SET character_set_client = 'UTF-8'");
   mysql_query("SET character_set_connection = 'UTF-8'");
   mysql_query("SET character_set_results = 'UTF-8'");
   mysql_query("SET character_set_server = 'UTF-8'");
   
   $feedback = new Feedback;
   $parameter = new Parameter;
} 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru" id="metateg-pro">
   <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta property="og:image" content="img/logo.png" />
        <meta name="description" content="Мы занимаемся проектированием и разработкой интернет-магазинов и сложных интернет-проектов." />
        <meta http-equiv="keywords" content="создание сайтов, разработка сайтов, сложные интернет-проектоы, веб-приложения, интернет-магазины" />
        <title>Metateg | веб-студия</title>
        <link rel="icon" href="/img/icon.png" type="image/x-icon" />
        <link type="text/css" rel="stylesheet" href="css/main.css"/>
        <link type="text/css" rel="stylesheet" href="css/feedback_insert.css"/>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css" />
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
        <meta name="yandex-verification" content="55168184d4cc9481" />
    </head>
    <body>
        <a id="top"></a>
        <div id="header_div" >
           <a id="logo_a" href="#">
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
            <h1 id="welcome_div">
                Проектирование, разработка и продвижение
                <br><span id="welcome_div_smalltext">интернет-магазинов и сложных интернет-проектов, а также</span>
                <br><span style="display:block" id="welcome_div_smalltext">проектов на основе искусственного интеллекта</span>                
            </h1>
            <a id="next_a" href="#" class="cupid-green">ПОЧЕМУ МЫ ВАМ НЕ ПОДХОДИМ?</a>
        </div>
        <div id="content2_div">
           <a id="advantages"></a>
           <h2 class="white_bg_header">Потому что:</h2>
           <div id="advantages_panel_div">
              <table id="advantages_table">
                 <tr>
                    <td id="profit_td"><div class="profit_container"><img id="profit_img" class="advantages_table_td" src="img/pro.png" /><span id="profit_caption" class="advantage_caption">Если у Вас торговля или сервис, мы сделаем сайт, который увеличит Ваши продажи засчет онлайн-аудитории.</span></div><p><p><p><div id="profit_span" class="advantages_table_caption">Мы делаем эффективные, рабочие проекты. А это почти всегда расходится с Вашими представлениями о том, как надо делать.</div></td>
                    <td id="customers_td"><div class="profit_container"><img id="customers_img" class="advantages_table_td" src="img/profit.png" /><span id="customers_caption" class="advantage_caption">Мы сделаем так, что максимально возможная доля простых посетителей Вашего сайта станет Вашими преданными клиентами или покупателями.</span></div><br><div id="customers_span" class="advantages_table_caption">Мы делаем продающие интернет-магазины. А доведение до продаж требует времени и сил, в то время как вы хотите быстрых результатов.</div></td>
                    <td id="discount_td"><div class="profit_container"><img id="discount_img" class="advantages_table_td" src="img/customers.png" /><span id="discount_caption" class="advantage_caption">Цены на наши услуги максимально адекватны, учитывая качество, с которым мы делаем сайты. К тому же у нас действуют регулярные скидки и акции.</span></div><br><div id="discount_span" class="advantages_table_caption">Наше продвижение работает. Но, опять же, занимает немало времени, в то время как Вы хотите получить клиентов сразу.</div></td>
                    <td id="pro_td"><div class="profit_container"><img id="pro_img" class="advantages_table_td" src="img/discount.png" /><span id="pro_caption" class="advantage_caption">Наши сайты выполняются в самых последних трендах веб-дизайна, что делает их стильными и современными. Для примера взгляните на этот сайт.</span></div><br><div id="pro_span" class="advantages_table_caption">У нас недорого, но долго. К тому же, мы беремся только за действительно интересные и тяжелые проекты.</div></td>
                 </tr>
              </table>
           </div>
        </div>

        <div id="gift">
            <div id="gift_icon_div" class=""></div>
            <div class="text">
                Если всё же мы Вам подходим,
                <br/>Для <i><b>новых клиентов</b></i> у нас действует <i><b>скидка на услугу веб-разработки - 30%*</b></i>
                <br/>Нажмите, чтобы оставить заявку на заказ, либо посмотрите отзывы наших клиентов ниже.
                <br/><span>* - Скидка не распространяется на проекты "под ключ".</span>
            </div>
        </div>
        
        <div id="content3_div" style="background-color: #f1f1f1">
            <h2 class="white_bg_header">Отзывы клиентов</h2>
            <a id="feedback_insert"></a>
            <div id="feedback_div" style="height: 302.27px;">
                <div id="vip_wrapper_div">
                    <div id="vip_content_wrapper_div">

                        <?php echo $feedback->getInsert()?>

                    </div>
                    <a id="get_all_feedback_a" class="cupid-green" href="feedback.php">Показать все отзывы</a>
                    <a id="lancer_feedback_a" class="cupid-green" target="_blank" href="https://www.weblancer.net/users/kanadezz/reviews/">Отзывы на фрилансе</a>
                </div>
            </div>
        </div>
        <div id="content5_div">
           <a id="order"></a>
           <h2 class="dark_bg_header">Оформление заказа</h2>
           <div id="order_panel_div">
              <?= Constructor::getOrderForm()?>
              <p><div id="footer_panel">
                 <div id="social_panel">
                     <a href="https://vk.com/ptz.creatif" target="_blank"><img class="social_img opacity_transition" src="img/vk_logo.png" /></a>
                     <a href="https://twitter.com/kanadezz" target="_blank"><img class="social_img opacity_transition" src="img/twitter_logo1.png" /></a>
                 </div>                 
                 <div itemscope itemtype="http://schema.org/Organization">
                    <span id="copyr_span">© <span itemprop="name">Metateg</span> 2012-2018. Все права защищены. / 
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
        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript" src="js/translit.js"></script>
        <script type="text/javascript" src="js/cookie.js"></script>
        <!-- BEGIN JIVOSITE CODE {literal} -->
        <script type='text/javascript'>
        (function(){ var widget_id = 'OZQwbO1iuj';var d=document;var w=window;function l(){
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
        <!-- {/literal} END JIVOSITE CODE -->
    </body>
</html>