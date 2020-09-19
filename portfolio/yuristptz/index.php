<?php 
/*
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
*/

include(dirname(__FILE__).'/classes/Constructor.class.php');

$constructor = new Constructor;

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Мой защитник | <?php echo $constructor->getHeader("title"); ?></title>
    <link rel="icon" href="/assets/img/favicon.png" type="image/x-icon" />
    <meta name="description" content='<?php echo $constructor->getHeader("title"); ?>. <?php echo $constructor->getHeader("offer"); ?>.'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="yandex-verification" content="e58560e725df5baa" />
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/js/plugins/bootstrap/css/bootstrap.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/simple-line-icons.css">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- Carousel -->
    <link rel="stylesheet" href="assets/js/plugins/carousel/owl.carousel.css">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="assets/css/ui-slider.css">
    <link rel="stylesheet" href="assets/css/feedback.css">
    <link rel="stylesheet" href="assets/css/feedback_insert.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/calc.css">
    <!-- Feature detection -->
    <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/vendor/html5shiv.js"></script>
    <script src="assets/js/vendor/respond.min.js"></script>
    <![endif]-->
    <!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter45259371 = new Ya.Metrika({ id:45259371, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/45259371" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</head>
<body>

    <!-- Навигация
    ================================================== -->
    <header class="navbar-wrapper">
        <div class="navbar navbar-default navbar-static-top home-navbar" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--logo start-->
                    <div class="brand">
                        <a href="/<?php echo isset($_SERVER["QUERY_STRING"]) ? "?".$_SERVER["QUERY_STRING"] : "";?>" class="logo">
                            <img src="assets/img/yflogo.png" />
                        </a>
                    </div>
                    <!--logo end-->
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav pull-right" id="main-menu">
                        <li><a href="tel:88142594500" id="phone_a"><img src="assets/img/phone.png"> 59-45-00</a>
                        </li>
                        <li class="nav_hled"><a href="javascript:void(0)" data-toggle="modal" data-target="#callback_modal_div">Бесплатный обратный звонок</a>
                        </li>
                        <!--<li><a href="#calc_header_wrapper_div">Цены</a>
                        </li>
                        <li><a href="#team">Отзывы</a>
                        </li>-->
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- Приветствие
    ================================================== -->
    <section id="intro">
        <div class="overlay-bg">
            <div class="container">
                <div class="hero">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 wow fadeInLeft text-center">
                            <header>
                                <h1 href="<?php echo $constructor->getMoreButtonHref(); ?>" id="intro_first_h1"><?php echo $constructor->getHeader("offer"); ?></h1>
                            </header>
                            <header class="second">
                                <h2 href="<?php echo $constructor->getMoreButtonHref(); ?>" id="intro_second_h1"><?php echo $constructor->getHeader("title"); ?></h2>
                            </header>
                            <a id="more_a" href="<?php echo $constructor->getMoreButtonHref(); ?>" class="action_button nav_button">Далее</a>
                        </div>
                    </div>
                </div>
            </div>
            <svg class="canvas__triangle" preserveAspectRatio="xMinYMax" viewBox="0 0 1330 84" xmlns="http://www.w3.org/2000/svg">
                <title>canvas-triangle</title>
                <polygon points="1330 84 0 84 0 0 1330 48 1330 84"></polygon>
            </svg>
        </div>
        
        <!-- Наши услуги
        ================================================== -->
        <div id="services_div" style="display:none;" class="container">
            <div class="intro-text text-center">
                <header>
                    <h1>Подробнее об услуге</h1>
                    <div class="spacer"></div>
                </header>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left">
                <header>
                    <h2><?php echo $constructor->getServiceDesc("title"); ?></h2>
                </header>
                <?php echo $constructor->getServiceDesc("text"); ?>
                <div id="calc_button_wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <a id="show_calc_a" href="#calc" class="action_button_secondary">
                        <?php echo $constructor->getProfitOfferButtonText(); ?>
                    </a>
                </div>
                <div id="arrow_down_wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <i class="fa fa-angle-down"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Наши преимущества / Калькулятор
    ================================================== -->
    <section id="features">
        <div id="calc_header_wrapper_div" class="intro-text text-center">
            <header>
                <h1><?php echo $constructor->getAdvantagesTitle(); ?></h1>
            </header>
        </div>
        <div class="container">
            <?php echo $constructor->getAdvantages(); ?>
        </div>
    </section>
    
    <section style="display:none;" id="gift" data-toggle="modal" data-target="#consultation_modal_div">
        <div id="gift_icon_div" class="col-md-2 col-md-offset-2 col-sm-2 col-xs-2"></div>
        <div style="color: white;margin-top: 40px;margin-bottom: 40px;" class="col-md-8 col-sm-8 col-xs-8"><b>И у нас для Вас подарок:</b> получите бесплатную консультацию нашего юриста по Вашему вопросу!</div>
    </section>
    <section class="text-center" style="padding-top: 0px;padding-bottom: 70px;">
        <a href="#" class="action_button_secondary" data-toggle="modal" data-target="#consultation_modal_div">Получить бесплатную консультацию</a>
        <a id="show_feedback_a" href="#testimonials" class="action_button_secondary_blue">Почитать отзывы наших клиентов</a>
    </section>
    
    <section id="features_hidden">
        <?php echo $constructor->getAdvantagesOnly(); ?>
    </section>
    
    <!-- Нам доверяют
    ================================================== -->
    <section id="testimonials">
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center header_wrapper">
                        <header>
                            <h1>Отзывы клиентов</h1>
                        </header>
                    </div>
                </div>
                <div class="row">
                    <div id="feedback_div">
                        <div id="vip_wrapper_div">
                            <div id="vip_content_wrapper_div">
                                <div class="gallery_element_box item"  id="first_gallery_box_div">
                                    <div id="feedback_5" class="friend_block">
                                        <div class="frienddata_wrapper">
                                            <div class="friendphoto_wrapper">
                                                <img id="user_5_photo" class="friend_image_w" src="assets/img/<?php echo $constructor->getFeedback("photo", 0); ?>">
                                            </div>
                                            <div class="friendname"><a class="opacity_transition"><?php echo $constructor->getFeedback("name", 0); ?></a></div>
                                            <div class="message_preview"><?php echo $constructor->getFeedback("text", 0); ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gallery_element_box item" id="first_gallery_box_div">
                                    <div id="feedback_3" class="friend_block">
                                        <div class="frienddata_wrapper">
                                            <div class="friendphoto_wrapper">
                                                <img id="user_3_photo" class="friend_image_w" src="assets/img/<?php echo $constructor->getFeedback("photo", 1); ?>">
                                            </div>
                                            <div class="friendname"><a class="opacity_transition"><?php echo $constructor->getFeedback("name", 1); ?></a></div>
                                            <div class="message_preview"><?php echo $constructor->getFeedback("text", 1); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Еще вопрос
    ================================================== -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <header>
                        <h1>Получите бесплатную консультацию</h1>
                        <p>Мы бесплатно позвоним и проконсультруем Вас по Вашему вопросу.</p>
                    </header>
                </div>
            </div>
            <form class="contact-form" id="contact_form">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-12 col-xs-12">
                        <div class="spacer"></div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-6 col-sm-offset-3 col-xs-12 col-xs-offset-0">
                                    <input type="text" 
                                           id="phone_input1" 
                                           maxlength="50" 
                                           class="form-control" 
                                           name="name" 
                                           value=""
                                           placeholder="Введите Ваш номер телефона" 
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="bottom_callback_form" class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                            <span class="agreement" style="font-size: .46em;">Нажимая "Получить бесплатную консультацию", Вы принимаете условия <a target="_blank" href="agreement.php">Пользовательского соглашения</a></span>
                            <br><button onclick="sendFeedback('callback', 'phone_input1');return false;" class="btn btn-success order_callback wow shake">Получить бесплатную консультацию</button>
                        </div>
                        <div style="display:none;" class="success_message_2 col-md-12 col-sm-12 col-xs-12 text-center">
                            Спасибо! Мы позвоним Вам в течение 5 минут.
                        </div>
                        <div style="display:none;" class="fail_message_2 col-md-12 col-sm-12 col-xs-12 text-center">
                            Что-то пошло не так. Попробуйте обновить<br> страницу и отправить заявку еще раз.
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                        <p>Или позвоните нам сами:</p>
                        <header>
                            <h1>59-45-00</h1>
                        </header>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer
    ================================================== -->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 text-left">
                    <span>Подписывайтесь на нас </span>  <a href="https://vk.com/yurfineks" target="_blank" class="social facebook"><i class="fa fa-vk"></i></a> 
                    <a href="https://www.youtube.com/channel/UCNNP61Z6dDr1SsT6qdOqpGw" target="_blank" class="social youtube"><i class="fa fa-youtube-play"></i></a> 
                    <a href="https://ok.ru/group/58196712947773" target="_blank" class="social odnokl"><i class="fa fa-odnoklassniki"></i></a> 
                    <p><br>ООО АК «ЮрфинэкС» 
                    <br>ИНН 1001245260, КПП 100101001 
                    <br>ОГРН 1111001002991, ОКПО 69558164 
                    <p>
                    <br>Р/С 40702810632460000147 
                    <br>в Филиал «Санкт-Петербургский» АО «АЛЬФА-БАНК» 
                    <br>г. Петрозаводск 
                    <br>БИК 044030786 
                    <br>К/С 30101810600000000786
                    <p>
                    <br>г. Петрозаводск, ул. Андропова, д. 15, офис 401 
                    <br>Режим работы: пн-пт 9.00-18.00
                    <p><br><span>Исполнение сайта - </span>  <a target="_blank" href="https://metateg.pro" class="madein">Студия Metateg</a> 
                </div>
            </div>
        </div>
    </footer>
    
    <div id="consultation_modal_div" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Бесплатная консультация</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
                                <div class="spacer"></div>
                                <div class="form-group" style="margin-bottom:0;">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <p>Укажите Ваши контактные данные, и мы бесплатно перезвоним Вам в течение 5 минут:</p>
                                        <input type="text" 
                                               id="phone_input2" 
                                               maxlength="50" 
                                               class="form-control" 
                                               name="name" 
                                               value="" 
                                               placeholder="Введите Ваш номер телефона"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                    <span class="agreement_msg agreement">Нажимая "Получить консультацию", Вы принимаете условия <a style="color:#337ab7" target="_blank" href="agreement.php">Пользовательского соглашения</a></span>
                                    <button onclick="sendFeedback('callback', 'phone_input2');return false;" class="btn btn-success get_service">Получить консультацию</button>
                                </div>
                                <div style="display:none;" class="success_message col-md-12 col-sm-12 col-xs-12 text-center">
                                    Спасибо! Мы позвоним Вам в течение 5 минут.
                                </div>
                                <div style="display:none;" class="fail_message col-md-12 col-sm-12 col-xs-12 text-center">
                                    Что-то пошло не так. Попробуйте обновить<br> страницу и отправить заявку еще раз.
                                </div>
                            </div>
                            <div class="callback_form_phone_wrapper col-sm-12 col-md-12 col-lg-12 text-center">
                                <p>Или позвоните нам сами:</p>
                                <header>
                                    <h1>59-45-00</h1>
                                </header>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
                </div>
            </div>
        </div>
    </div>
    
    <div id="callback_modal_div" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Обратный звонок</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
                                <div class="spacer"></div>
                                <div class="form-group" style="margin-bottom:0;">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <p>Укажите Ваши контактные данные, и мы бесплатно перезвоним Вам в течение 5 минут:</p>
                                        <input type="text" 
                                               id="phone_input3" 
                                               maxlength="50" 
                                               class="form-control" 
                                               name="name" 
                                               value="" 
                                               placeholder="Введите Ваш номер телефона"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                    <span class="agreement_msg agreement">Нажимая "Заказать бесплатный звонок", Вы принимаете условия <a style="color:#337ab7" target="_blank" href="agreement.php">Пользовательского соглашения</a></span>
                                    <button onclick="sendFeedback('callback', 'phone_input3');return false;" class="btn btn-success get_service">Заказать бесплатный звонок</button>
                                </div>
                                <div style="display:none;" class="success_message col-md-12 col-sm-12 col-xs-12 text-center">
                                    Спасибо! Мы позвоним Вам в течение 5 минут.
                                </div>
                                <div style="display:none;" class="fail_message col-md-12 col-sm-12 col-xs-12 text-center">
                                    Что-то пошло не так. Попробуйте обновить<br> страницу и отправить заявку еще раз.
                                </div>
                            </div>
                            <div class="callback_form_phone_wrapper col-sm-12 col-md-12 col-lg-12 text-center">
                                <p>Или позвоните нам сами:</p>
                                <header>
                                    <h1>59-45-00</h1>
                                </header>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
                </div>
            </div>
        </div>
    </div>


    <!--Global JS-->
    <script src="assets/js/vendor/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="assets/js/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins/nav/jquery.nav.js"></script>
    <script src="assets/js/plugins/sticky/jquery.sticky.js"></script>
    <script src="assets/js/plugins/scrollTo/jquery.scrollTo.js"></script>
    <script src="assets/js/plugins/wow/wow.min.js"></script>
    <script src="assets/js/plugins/parallax/jquery.parallax-1.1.3.js"></script>
    <script src="assets/js/plugins/carousel/owl.carousel.js"></script>
    <script src="assets/js/src/app.js"></script>
    <script src="assets/js/src/vendor.js"></script>
    <script src="assets/js/src/calc.js"></script>
    <script> $.noConflict(); </script>
    
    <!-- BEGIN JIVOSITE CODE {literal} -->
    <!--<script type='text/javascript'>
    (function(){ var widget_id = 'hXuXSI6TPx';var d=document;var w=window;function l(){
    var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>-->
    <!-- {/literal} END JIVOSITE CODE -->
</body>

</html>
