<?php

require_once dirname(__FILE__)."/php/src/DB.php";
require_once dirname(__FILE__)."/php/src/class_constructor.php";
require_once dirname(__FILE__)."/php/src/class_feedback.php";
require_once dirname(__FILE__)."/php/src/data_parameter.php";

$db = new DB;

if (!$db->mysqlConnect()){
    mysql_query("SET NAMES 'utf8'");
    mysql_query("SET collation_connection = 'UTF-8_general_ci'");
    mysql_query("SET collation_server = 'UTF-8_general_ci'");
    mysql_query("SET character_set_client = 'UTF-8'");
    mysql_query("SET character_set_connection = 'UTF-8'");
    mysql_query("SET character_set_results = 'UTF-8'");
    mysql_query("SET character_set_server = 'UTF-8'");

    $constructor = new Constructor;
    $feedback = new Feedback;
    $parameter = new Parameter;
}

$constructor->getLastModified();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru" id="metateg-pro">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="Отзывы наших клиентов о качестве сервиса и проектов." />
        <meta http-equiv="keywords" content="создание сайтов, разработка сайтов, сложные интернет-проектоы, веб-приложения, интернет-магазины" />
        <title>Metateg | Отзывы о нас</title>
        <link rel="icon" href="/img/icon.png" type="image/x-icon" />
        <link type="text/css" rel="stylesheet" href="css/main.css"/>
        <link type="text/css" rel="stylesheet" href="css/feedback.css"/>
        <?php if (isset($_GET["page"]) && $_GET["page"] == 1){
            echo '<link rel="canonical" href="feedback.php"/>';
        }; ?>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css"/>
        <script type="text/javascript" src="jq/jquery.min.js" ></script>
        <script type="text/javascript" src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <script src="//vk.com/js/api/openapi.js" type="text/javascript"></script>
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
              <a id="feedback_a" class="header_link opacity_transition" href="#">Отзывы</a>
              <a id="order_a" class="header_link opacity_transition" href="#">Сделать заказ</a>
           </div>
        </div>
        <div id="content_div" >
           <h1 id="welcome_div">Отзывы о нас<br><br></h1>
           <a id="next_a" href="#" class="cupid-green">ЗДЕСЬ</a>
           <a id="lancer_next_a" target="_blank" href="https://www.weblancer.net/users/kanadezz/reviews/" class="cupid-green">НА ФРИЛАНСЕ</a>
        </div>
        <div id="content3_div">
           <a id="feedback"></a>
           <div id="feedback_panel_div">
              <div id="feedback_div">
                 <?php echo $feedback->get(isset($_GET["page"]) ? $_GET["page"] : 1)?>
              </div>
              <div id="login_wrapper">
                 <div style="margin-top:40px;color: #000; font-size: 1em">Чтобы оставить отзыв, необходимо войти на сайт через ВКонтакте или Одноклассники.</div>
                 <p>
                 <div style="margin: 20px 0;margin: 50px 0;">
                    <a id="vk_login" class="cupid-green" target="_blank" title="ВКонтакте" to="1" onclick="VK.Auth.login(loginAuthInfo);">Войти через ВКонтакте</a>
                    <a id="ok_login" class="cupid-green" href="https://connect.ok.ru/oauth/authorize?client_id=1242968064&scope=VALUABLE_ACCESS&response_type=token&redirect_uri=http://metateg.pro/feedback.php?page=1&layout=w">Войти через Одноклассники</a>
                 </div>
                 <p><span class="caption_msg">После входа Вы сможете оставить отзыв от своего имени в одной из этих соц. сетей.</span>
              </div>
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
        <script type="text/javascript" src="js/feedback.js"></script>
        <script type="text/javascript" src="js/utils.js"></script>
        <script type="text/javascript" src="js/md5.js"></script>
        <script type="text/javascript" src="js/translit.js"></script>
        <script type="text/javascript" src="js/cookie.js"></script>
        <!-- BEGIN JIVOSITE CODE {literal} -->
        <script type='text/javascript'>
        (function(){ var widget_id = 'OZQwbO1iuj';var d=document;var w=window;function l(){
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
        <!-- {/literal} END JIVOSITE CODE -->
    </body>
</html>

<?php

mysql_close();

?>