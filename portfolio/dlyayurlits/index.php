<?php 

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
    <title>ЮрфинэкС | <?php echo $constructor->getServiceDesc("title"); ?></title>
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
    <link rel="stylesheet" href="assets/js/plugins/odometer/odometer-theme-default.css" />
    <!-- Feature detection -->
    <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="assets/js/plugins/odometer/odometer.min.js"></script>
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
                        <li><a href="tel:<?php echo $constructor->getPhone("regular")?>" id="phone_a"><img src="assets/img/phone.png"> <?php echo $constructor->getPhone("formatted")?></a>
                        </li>
                        <li id="header_callback_li" class="nav_hled"><a href=""  data-toggle="modal" data-target="#callback_modal_div">Бесплатный обратный звонок</a>
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
    <section id="intro" <?php echo !isset($constructor->service_group) || $constructor->service_group == 1 ? "" : "style='margin-bottom: -130px;'" ?>>
        <div class="overlay-bg">
            <div class="container">
                <div class="hero">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 wow fadeInLeft text-center">
                            <header>
                                <h2 href="<?php echo $constructor->getMoreButtonHref(); ?>" id="intro_first_h1"><?php echo $constructor->getHeader("title"); ?></h2>
                            </header>
                            <header class="bottom20">
                                <h1 href="<?php echo $constructor->getMoreButtonHref(); ?>" id="intro_second_h1"><?php echo $constructor->getHeader("offer"); ?></h1>
                            </header>
                            <a id="more_a" href="<?php echo $constructor->getMoreButtonHref(); ?>" class="action_button nav_button">Узнать подробнее</a>
                            <a id="discount_a" style="<?php echo $constructor->showActionButton(); ?>" href="#" data-toggle="modal" data-target="#service_order_modal_div" class="discount_button action_button nav_button">Заказать со скидкой 50%<p></p><span>до конца акции 5 ч. 13 м. 42 с.</span></a>
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
        <div id="services_div" <?php echo !isset($constructor->service_group) || $constructor->service_group == 1 ? "style='padding-top: 10px;'" : "style='display:none;padding-top: 10px;'"; ?> class="container">
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
                    <a href="#" class="action_button_secondary" data-toggle="modal" data-target="#service_order_modal_div">Оставить заявку на услугу</a>
                    <a id="show_calc_a" href="#calc" class="action_button_secondary">
                        <?php echo $constructor->getProfitOfferButtonText(); ?>
                    </a>
                </div>
                <div id="arrow_down_wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <i class="fa fa-angle-down"></i>
                </div>
            </div>
            <!--<div class="col-xs-4 col-sm-0 col-md-4 col-lg-4">
                <div class="list-group">
                    <a href="/" class="list-group-item <?php echo $constructor->getServiceListClass(1); ?>">Юридическое сопровождение</a>
                    <a href="?service_group=1&service_subgroup=2" class="list-group-item <?php echo $constructor->getServiceListClass(2); ?>">Бухглатерское сопровождение</a>
                    <a href="?service_group=1&service_subgroup=3" class="list-group-item <?php echo $constructor->getServiceListClass(3); ?>">Кадровое сопровождение</a>
                    <a href="?service_group=4&service_subgroup=4" class="list-group-item <?php echo $constructor->getServiceListClass(4); ?>">Представительство в суде</a>
                    <a href="?service_group=5&service_subgroup=5" class="list-group-item <?php echo $constructor->getServiceListClass(5); ?>">Регистрация ИП/ООО</a>
                    <a href="?service_group=6&service_subgroup=6" class="list-group-item <?php echo $constructor->getServiceListClass(6); ?>">Банкротство юридических лиц</a>
                    <a href="?service_group=7&service_subgroup=7" class="list-group-item <?php echo $constructor->getServiceListClass(7); ?>">Споры с государственными органами</a>
                    <a href="?service_group=8&service_subgroup=8" class="list-group-item <?php echo $constructor->getServiceListClass(8); ?>">Сопровождение сделок с недвижимостью</a>
                    <a href="?service_group=9&service_subgroup=9" class="list-group-item <?php echo $constructor->getServiceListClass(9); ?>">Взыскание дебиторской задолженности</a>
                    <a href="?service_group=10&service_subgroup=10" class="list-group-item <?php echo $constructor->getServiceListClass(10); ?>">Сопровождение договоров</a>
                </div>
            </div>-->
            <div class="col-xs-8 col-sm-12 col-md-8 col-lg-8 text-center">
                <!--<a href="#" style="margin-left: 20px;" data-toggle="modal" data-target="#service_order_modal_div" class="btn btn-primary">Оформить обслуживание</a>-->
            </div>
        </div>
    </section>

    <!-- Наши преимущества / Калькулятор
    ================================================== -->
    <section id="features">
        <div id="calc_header_wrapper_div" class="intro-text text-center">
            <header>
                <h1><?php echo $constructor->getAdvantagesTitle(); ?></h1>
                <p <?php echo $constructor->service_group == 1 || !isset($constructor->service_group) ? '' : 'style="display:none;"'?>>Отметьте нужные услуги слева и перемещайте ползунок вправо.</p>
            </header>
        </div>
        <div class="container">
            <?php echo $constructor->getAdvantages(); ?>
        </div>
    </section>
    
    <section id="gift" data-toggle="modal" data-target="#service_order_modal_div">
        <div id="gift_icon_div" class="col-md-2 col-md-offset-2 col-sm-2 col-xs-2"></div>
        <div class="col-md-8 col-sm-8 col-xs-8 text"><?php echo $constructor->getGiftText(); ?></div>
    </section>
    <section class="text-center" style="padding-top: 30px;padding-bottom: 70px;">
        <a href="#" class="action_button_secondary" data-toggle="modal" data-target="#service_order_modal_div">Оставить заявку на услугу</a>
        <a href="#" style="margin-left: 10px;" class="action_button_secondary" data-toggle="modal" data-target="#cons_modal_div">Получить консультацию</a>
        <a href="#features_hidden" style="<?php echo $constructor->hiddenStyleRule(); ?>" id="unhide_features_a" class="action_button_secondary_blue" onclick="showAdvsOnly()">Подробнее об услуге</a>
    </section>
    
    <section id="features_hidden">
        <?php echo $constructor->getAdvantagesOnly(); ?>
    </section>
    
    <!-- Pricing
    ================================================== -->
    <section id="pricing" style="<?php echo $constructor->pricingStyle() ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <header>
                        <h1>Цены</h1>
                        <div class="spacer"></div>
                        <p class="text-muted">Всего доступно три тафира на услугу "<?php echo $constructor->pricingTitle() ?>"</p>
                    </header>
                </div>
            </div>
            <div class="row">
                <div id="pricePlans">
                    <div class="col-md-4">
                        <ul id="plan1">
                            <li class="plan wow zoomIn" data-toggle="modal" data-target="#service_order_modal_div">
                                <ul class="planContainer">
                                    <li class="title">
                                        <h2><?php echo $constructor->pricingTriffData(0, "title") ?></h2>
                                    </li>
                                    <li class="price">
                                        <p><?php echo $constructor->pricingTriffData(0, "price") ?></p>
                                    </li>
                                    <li>
                                        <ul class="options">
                                            <?php echo $constructor->pricingTriffData(0, "components") ?>
                                        </ul>
                                    </li>
                                    <li class="button"><a href="javascript:void(0)">Заказать</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- End ul#plans -->
                    </div>

                    <div class="col-md-4">
                        <ul id="plan2">
                            <li class="plan wow zoomIn" data-toggle="modal" data-target="#service_order_modal_div">
                                <ul class="planContainer" style="background:rgba(213, 248, 183, 0.22)">
                                    <li class="title">
                                        <h2 class="bestPlanTitle"><?php echo $constructor->pricingTriffData(1, "title") ?></h2>
                                    </li>
                                    <li class="price">
                                        <p class="bestPlanPrice" style="border-radius: 0 0 5px 5px;"><?php echo $constructor->pricingTriffData(1, "price") ?></p>
                                    </li>
                                    <li>
                                        <ul class="options">
                                            <?php echo $constructor->pricingTriffData(1, "components") ?>
                                        </ul>
                                    </li>
                                    <li class="button"><a class="bestPlanButton" href="javascript:void(0)">Заказать</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- End ul#plans -->
                    </div>

                    <div class="col-md-4">
                        <ul id="plan3">
                            <li class="plan wow zoomIn" data-toggle="modal" data-target="#service_order_modal_div">
                                <ul class="planContainer">
                                    <li class="title">
                                        <h2><?php echo $constructor->pricingTriffData(2, "title") ?></h2>
                                    </li>
                                    <li class="price">
                                        <p><?php echo $constructor->pricingTriffData(2, "price") ?></p>
                                    </li>
                                    <li>
                                        <ul class="options">
                                            <?php echo $constructor->pricingTriffData(2, "components") ?>
                                        </ul>
                                    </li>
                                    <li class="button"><a href="javascript:void(0)">Заказать</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- End ul#plans -->
                    </div>
                </div>
            </div>

        </div>

    </section>
    
    <!-- О нас в цифрах
    ================================================== -->
    <section id="in_numbers">
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="intro-text text-center">
                        <header>
                            <h1>О нас в цифрах</h1>
                        </header>
                    </div>
                    <div id="numbers_ribbon" class="col-lg-12 text-center">
                        <div class="card_wrapper col-lg-4 col-xs-12 col-sm-12 col-md-4 text-center">
                            <div class="card">
                                <div class="card-block">
                                    <img src="assets/img/profit_1.png" />
                                    <p class="card-text odometer card1">0</p> <!--10-->
                                    <p class="card-text description">Лет юридического и бухгалтерского опыта</p>
                                </div>
                            </div>
                        </div>
                        <div class="card_wrapper col-lg-4 col-xs-12 col-sm-12 col-md-4 text-center">
                            <div class="card">
                                <div class="card-block">
                                    <img src="assets/img/lawyer.png" />
                                    <p class="card-text odometer card2">0</p> <!--15-->
                                    <p class="card-text description">Опытных юристов и бухгалтеров в штате</p>
                                </div>
                            </div>
                        </div>
                        <div class="card_wrapper col-lg-4 col-xs-12 col-sm-12 col-md-4 text-center">
                            <div class="card">
                                <div class="card-block">
                                    <img src="assets/img/like.png" />
                                    <p class="card-text odometer card3">0</p> <!--95-->
                                    <p class="card-text description">% клиентов довольны нашей работой</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Нам доверяют
    ================================================== -->
    <section id="testimonials">
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="intro-text text-center">
                        <header>
                            <h1>Нам доверяют</h1>
                        </header>
                    </div>
                    <div id="clients_ribbon" class="col-lg-12 text-center">
                        <div class="card_wrapper col-lg-4 col-xs-12 col-sm-12 col-md-4 text-center">
                            <div class="card">
                                <img class="card-img-left" src="assets/img/rtk_logo.png" alt="Card image cap">
                                <div class="card-block">
                                    <p class="card-text">Сеть заправок "РТК+"</p>
                                </div>
                            </div>
                        </div>
                        <div class="card_wrapper col-lg-4 col-xs-12 col-sm-12 col-md-4 text-center">
                            <div class="card">
                                <img class="card-img-left" src="assets/img/alfabank.png" alt="Card image cap">
                                <div class="card-block">
                                    <p class="card-text">Альфа Банк<p>
                                </div>
                            </div>
                        </div>
                        <div class="card_wrapper col-lg-4 col-xs-12 col-sm-12 col-md-4 text-center">
                            <div class="card">
                                <img class="card-img-left" src="assets/img/mediaweb_logo.png" alt="Card image cap">
                                <div class="card-block">
                                    <p class="card-text">Веб-студия "МедиаВеб"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    
    <!-- Пресса о нас
    ================================================== -->
    <section id="in_press">
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="intro-text text-center">
                        <header>
                            <h1>Пресса о нас</h1>
                        </header>
                    </div>
                    <div id="press_ribbon" class="col-lg-12 text-center">
                        <div style="margin-top:75px;" class="card_wrapper col-lg-4 col-xs-12 col-sm-12 col-md-4 text-center">
                            <a target="_blank" href="https://gubdaily.ru/blog/promo/yurfineks/yurij-romanchenko-esli-ty-biznesmen-pomogaj/">
                                <div class="card">
                                    <img style="width: 45%" class="card-img-left" src="assets/img/gubdaily.png" alt="Card image cap">
                                    <div class="card-block">
                                        <p class="card-text"></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div style="margin-top:80px;" class="card_wrapper col-lg-4 col-xs-12 col-sm-12 col-md-4 text-center">
                            <a target="_blank" href="https://ptzgovorit.ru/content/yurfineks-pomogaet-malomu-biznesu-zhit-bez-bolshih-problem">
                                <div class="card">
                                    <img style="" class="card-img-left" src="assets/img/ptzgovorit.png" alt="Card image cap">
                                    <div class="card-block">
                                        <p class="card-text"><p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div style="margin-top:80px;" class="card_wrapper col-lg-4 col-xs-12 col-sm-12 col-md-4 text-center">
                            <a target="_blank" href="http://stolicaonego.ru/">
                                <div class="card">
                                    <img class="card-img-left" src="assets/img/stolica.png" alt="Card image cap">
                                    <div class="card-block">
                                        <p class="card-text"></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Отзывы
    ================================================== -->
    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
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
                            <span style="font-size:.45em;">Нажимая "Получить бесплатную консультацию", Вы принимаете условия <a style="color:rgb(192, 193, 212)" target="_blank" href="agreement.php">Пользовательского соглашения</a></span>
                            <br><button onclick="sendFeedback('callback', 'phone_input1');return false;" class="btn btn-success order_callback wow shake">Получить бесплатную консультацию</button>
                        </div>
                        <div style="display:none;" class="success_message_2 col-md-12 col-sm-12 col-xs-12 text-center">
                            Спасибо! Мы позвоним Вам в течение 5 минут.
                        </div>
                        <div style="display:none;" class="fail_message_2 col-md-12 col-sm-12 col-xs-12 text-center">
                            Что-то пошло не так. Попробуйте обновить<br> страницу и отправить заявку еще раз.
                        </div>
                    </div>
                    <div  style="margin-top:30px;" class="col-sm-12 col-md-12 col-lg-12 text-center">
                        <p>Или позвоните нам сами:</p>
                        <header>
                            <h1><?php echo $constructor->getPhone("formatted")?></h1>
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
                    ООО АК «ЮрфинэкС» 
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
                </div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-7 text-right social_panel">
                    <span>Подписывайтесь на нас </span>  <a href="https://vk.com/yurfineks" target="_blank" class="social facebook"><i class="fa fa-vk"></i></a> 
                    <a href="https://www.youtube.com/channel/UCNNP61Z6dDr1SsT6qdOqpGw" target="_blank" class="social youtube"><i class="fa fa-youtube-play"></i></a> 
                    <a href="https://ok.ru/group/58196712947773" target="_blank" class="social odnokl"><i class="fa fa-odnoklassniki"></i></a> 
                </div>
                <div class="madein col-xs-8 col-sm-7 col-md-7 col-lg-7 text-right social_panel">
                    <span>Исполнение сайта - </span>  <a target="_blank" style="color:#fff" href="https://metateg.pro" target="_blank" >Студия Metateg</a> 
                </div>
            </div>
    </footer>
    
    <div id="cons_modal_div" class="modal fade" role="dialog">
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
                                        <p>Укажите Ваши контактные данные, мы перезвоним и бесплатно проконсультируем Вас по Вашему вопросу:</p>
                                        <input type="text" 
                                               id="phone_input2" 
                                               maxlength="50" 
                                               class="form-control" 
                                               name="name" value="" 
                                               placeholder="Введите Ваш номер телефона"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                    <span class="agreement_msg" style="font-size: .47em;">Нажимая "Получить бесплатную консультацию", Вы принимаете условия <a style="color:#337ab7" target="_blank" href="agreement.php">Пользовательского соглашения</a></span>
                                    <button onclick="sendFeedback('order', 'phone_input2');return false;" class="btn btn-success get_service">Получить бесплатную консультацию</button>
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
                                    <h1><?php echo $constructor->getPhone("formatted")?></h1>
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
    
    <div id="service_order_modal_div" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Заявка на обслуживание</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
                                
                                <div class="spacer"></div>
                                <div class="form-group" style="margin-bottom:0;">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <p>Укажите Ваши контактные данные, мы перезвоним и оформим Вас на обслуживание:</p>
                                        <input type="text" 
                                               id="phone_input4" 
                                               maxlength="50" 
                                               class="form-control" 
                                               name="name" value="" 
                                               placeholder="Введите Ваш номер телефона"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                    <span class="agreement_msg" style="font-size: .47em;">Нажимая "Оставить заявку", Вы принимаете условия <a style="color:#337ab7" target="_blank" href="agreement.php">Пользовательского соглашения</a></span>
                                    <button onclick="sendFeedback('order', 'phone_input4');return false;" class="btn btn-success get_service">Оставить заявку</button>
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
                                    <h1><?php echo $constructor->getPhone("formatted")?></h1>
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
                    <h4 class="modal-title">Бесплатный обратный звонок</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
                                <div class="spacer"></div>
                                <div class="form-group" style="margin-bottom:0;">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <p>Укажите Ваши контактные данные, и мы перезвоним Вам в течение 5 минут:</p>
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
                                    <span class="agreement_msg" style="font-size: .51em;">Нажимая "Заказать бесплатный звонок", Вы принимаете условия <a style="color:#337ab7" target="_blank" href="agreement.php">Пользовательского соглашения</a></span>
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
                                    <h1><?php echo $constructor->getPhone("formatted")?></h1>
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
    <script type='text/javascript'>
    (function(){ var widget_id = 'hXuXSI6TPx';var d=document;var w=window;function l(){
    var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
    <!-- {/literal} END JIVOSITE CODE -->
</body>

</html>
