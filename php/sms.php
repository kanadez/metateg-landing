<?php

//sendsms("+79004622958", "123888888 Sveta");

function sendsms($phonenumber, $msgtext){
   $myCurl = curl_init();
   
   curl_setopt_array($myCurl, array(
      CURLOPT_URL => 'http://smsc.ru/sys/send.php',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_POST => true,
      CURLOPT_POSTFIELDS => http_build_query(array(
         "login" => "metategdesign",
         "psw" => "l\FO*c231Y7>*VXyLx<YnFIL",
         "phones" => $phonenumber,
         "mes" => $msgtext
      ))
   ));
   
   $response = curl_exec($myCurl);
   curl_close($myCurl);
   
   return $response;
}

?>