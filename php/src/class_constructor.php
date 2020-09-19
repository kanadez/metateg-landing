<?php

class Constructor{
    public static function getOrderForm(){
        return '
            <a id="question"></a>
            <span id="order_description_msg_div">В двух словах о том, что Вы хотите заказать у нас:</span>
            <br><input id="description_input" placeholder="Пара слов о Вашем проекте..."/>
            <br><span id="order_msg_div">Оставьте свои контакты, и мы свяжемся с Вами:</span>
            <br><input id="phone_input" placeholder="Ваш телефон, e-Mail, Skype, WhatsApp или Telegram..." maxlength=100/>
            <p><span id="thanx_span" style="display: none; font-size: 2em; opacity: 0;">Спасибо, мы очень скоро позвоним Вам!</span>
            <p style="margin-bottom: -79px;"><a id="order_button" href="javascript:void(0)" class="cupid-green">ОТПРАВИТЬ</a>
            <p style="margin-bottom: 114px;"><span style="font-size:1.33em;">Нажимая "ОТПРАВИТЬ", Вы принимаете условия <a target="_blank" class="dotted" href="agreement.php">Пользовательского соглашения</a></span>
        ';
    }


    public function getFooter(){
      return '<div id="footer_div">
         <div>
            <a href="feedback.php">Обратная связь</a>
            <a href="jobs.php">Вакансии</a>
            <a href="about.php">О нас</a>
            <a href="about.php#payments">Способы оплаты</a>
            <a href="about.php#agreements">Договора</a>
            <a href="contacts.php#map">Как проехать</a>
            <a href="search.php">Найти тур</a>
         </div>
         <div id="social_panel_div">
            <a href="#"><img src="img/vklogo.png"></a>
            <a href="#"><img src="img/fblogo.png"/></a>
         </div>
         <div id="copyr_div">
            <span id="copyr_span">© Karelia-travel.pro 2015. Все права защищены / <a href="mailto:'.$this->getContent("about", "company_email").'" target="_blank">'.$this->getContent("about", "company_email").'</a> / '.$this->getContent("about", "company_phone").'</span>
         </div>
      </div>';
   }
   
   public function getHeader(){
      $header = '<div id="header_div" >  
            <div id="head_panel_div">
               <div>
                  <a id="logo_a" href="index.php" class="header_link active"><img id="logo" src="img/logo.png"></a>
                  <ul><li><a href="search.php" class="header_link">ПОИСК ТУРА</a></li>
                  <li><a href="hot.php" class="header_link">ГОРЯЩИЕ ТУРЫ</a></li>
                  <li><a href="tours.php" class="header_link">ВСЕ ТУРЫ</a></li>
                  <li>
                     <a href="about.php#about" class="header_link">О НАС</a>
                     <ul>
                        <li><a href="contacts.php" class="">КОНТАКТЫ</a></li>
                        <li><a href="about.php#payment" class="">СПОСОБЫ ОПЛАТЫ</a></li>
                        <li><a href="about.php#agreements" class="">ДОГОВОРА</a></li>
                        <li><a href="feedback.php" class="">ОТЗЫВЫ</a></li>
                        <li><a href="about.php#about" class="">О КОМПАНИИ</a></li>
                     </ul>
                  </li>
                  <li><a href="cart.php" class="header_link">КОРЗИНА</a></li></ul>
               </div>
            </div>
         </div>';
      
      return $header;
   }
   
   public function getWhiteHeader($page){
      $header = '<div id="header_div" >  
            <div id="head_panel_div">
               <div>
                  <a id="logo_a" href="index.php" class="header_link '.($page == "index" ? "active" : "").'"><img id="logo" src="img/logo.png"></a>
                  <ul><li><a class="'.($page == "search" ? "active" : "").' header_link" href="search.php">ПОИСК ТУРА</a></li>
                  <li><a class="'.($page == "hot" ? "active" : "").' header_link" href="hot.php">ГОРЯЩИЕ ТУРЫ</a></li>
                  <li><a class="'.($page == "tours" ? "active" : "").' header_link" href="tours.php">ВСЕ ТУРЫ</a></li>
                  <li>
                     <a class="'.($page == "about" ? "active" : "").' header_link" href="about.php#about">О НАС</a>
                     <ul>
                        <li><a href="contacts.php" class="">КОНТАКТЫ</a></li>
                        <li><a href="about.php#payment" class="">СПОСОБЫ ОПЛАТЫ</a></li>
                        <li><a href="about.php#agreements" class="">ДОГОВОРА</a></li>
                        <li><a href="feedback.php" class="">ОТЗЫВЫ</a></li>
                        <li><a href="about.php#about" class="">О КОМПАНИИ</a></li>
                     </ul>
                  </li>
                  <li><a class="'.($page == "cart" ? "active" : "").' header_link" href="cart.php">КОРЗИНА</a></li></ul>
               </div>
            </div>
         </div>';
      
      return $header;
   }
   
   public function setPagination($page, $pages, $parameter){
      $_parameter = isset($parameter) ? "&".$parameter : "";
      $dom = "";
      $name = basename($_SERVER['PHP_SELF']);
      
      if ($pages > 4){
         if ($page == 1){
            $dom .= '<li><a class="disabled" style="font-weight : bolder" href="'.$name.'?page=1'.$_parameter.'">1</a></li>
            <li><a class="opacity_transition" href="'.$name.'?page=2'.$_parameter.'">2</a></li>
            <li><a class="opacity_transition" href="'.$name.'?page=3'.$_parameter.'">3</a></li>
            <li><a class="next opacity_transition" href="'.$name.'?page='.$pages.''.$_parameter.'">»</a></li>';
         }
         elseif ($page > 1 && $page < $pages-2){
            $dom .= '<li><a class="prev opacity_transition" href="'.$name.'?page=1'.$_parameter.'" >«</a></li>
            <li><a class="opacity_transition" href="'.$name.'?page='.($page-1).''.$_parameter.'" >'.($page-1).'</a></li>
            <li><a class="disabled" style="font-weight : bolder" href="'.$name.'?page='.$page.''.$_parameter.'" >'.$page.'</a></li>
            <li><a class="opacity_transition" href="'.$name.'?page='.($page+1).''.$_parameter.'" >'.($page+1).'</a></li>
            <li><a class="next opacity_transition" href="'.$name.'?page='.$pages.''.$_parameter.'" >»</a></li>';
         }
         elseif ($page > 1 && $page < $pages-1){
            $dom .= '<li><a class="prev opacity_transition" href="'.$name.'?page=1'.$_parameter.'" >«</a></li>
            <li><a class="opacity_transition" href="'.$name.'?page='.($page-1).''.$_parameter.'" >'.($page-1).'</a></li>
            <li><a class="disabled" style="font-weight : bolder" href="'.$name.'?page='.$page.''.$_parameter.'" >'.$page.'</a></li>
            <li><a class="opacity_transition" href="'.$name.'?page='.($page+1).''.$_parameter.'" >'.($page+1).'</a></li>
            <li><a class="opacity_transition" href="'.$name.'?page='.($page+2).''.$_parameter.'" >'.($page+2).'</a></li>';
         }
         elseif ($page > 1 && $page < $pages){
            $dom .= '<li><a class="prev opacity_transition" href="'.$name.'?page=1'.$_parameter.'" >«</a></li>
            <li><a class="opacity_transition" href="'.$name.'?page='.($page-1).''.$_parameter.'" >'.($page-1).'</a></li>
            <li><a class="disabled opacity_transition" style="font-weight : bolder" href="'.$name.'?page='.$page.''.$_parameter.'" >'.$page.'</a></li>
            <li><a class="opacity_transition" href="'.$name.'?page='.($page+1).''.$_parameter.'" >'.($page+1).'</a></li>';
         }
         elseif ($page == $pages){
            $dom .= '<li><a class="prev opacity_transition" href="'.$name.'?page=1'.$_parameter.'" >«</a></li>
            <li><a class="opacity_transition" href="'.$name.'?page='.($page-2).''.$_parameter.'" >'.($page-2).'</a></li>
            <li><a class="opacity_transition" href="'.$name.'?page='.($page-1).''.$_parameter.'" >'.($page-1).'</a></li>
            <li><a class="disabled" style="font-weight : bolder" href="'.$name.'?page='.$page.''.$_parameter.'" >'.$page.'</a></li>';
         }
      }
      else{
         for ($i = 1; $i <= $pages; $i++){
            $dom .= '<li><a '.($i == $page ? 'class="disabled" style="font-weight : bolder"' : '').' class="opacity_transition" href="'.$name.'?page='.$i.''.$_parameter.'" >'.$i.'</a></li>';
         }
      }
      
      return $dom;
   }
   
    public function getLastModified(){
        $LastModified_unix = strtotime(date("D, d M Y H:i:s", filectime($_SERVER['SCRIPT_FILENAME']))); 
        $LastModified = gmdate("D, d M Y H:i:s \G\M\T", $LastModified_unix); 
        $IfModifiedSince = false;

        if (isset($_ENV['HTTP_IF_MODIFIED_SINCE']))    
            $IfModifiedSince = strtotime(substr($_ENV['HTTP_IF_MODIFIED_SINCE'], 5)); 

        if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']))    
            $IfModifiedSince = strtotime(substr($_SERVER['HTTP_IF_MODIFIED_SINCE'], 5)); 

        if ($IfModifiedSince && $IfModifiedSince >= $LastModified_unix) {    
            header($_SERVER['SERVER_PROTOCOL'] . ' 304 Not Modified');    
            exit; 
        } 

        header('Last-Modified: '. $LastModified);
    }
   
}

?>