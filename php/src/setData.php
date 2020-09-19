<?php
  
class SetData{
    const NOTIFICATION_PHONE = "79114201617";
    const NOTIFICATION_MAIL = "host@metateg.pro";
    
    public function order($data, $description){
        sendsms(self::NOTIFICATION_PHONE, "Metateg ".$data);
        $this->sendMail($data, $description);

        $sql = sprintf("INSERT INTO `hashtag_customers` (`data`, `description`) VALUES ('%s', '%s');",
            mysql_real_escape_string($data),
            mysql_real_escape_string($description));
        DB::getInstance()->db_query($sql, __LINE__, __FILE__);
   }
   
   private function sendMail($data_to_send, $description_to_send){
        $header = "From: Metateg <noreply@metateg.pro>\r\n"; 
        $header.= "MIME-Version: 1.0\r\n"; 
        $header.= "Content-Type: text/html; charset=utf-8\r\n"; 
        $header.= "X-Priority: 1\r\n";
        
        mail(self::NOTIFICATION_MAIL, "Metateg новая заявка", $data_to_send.", ".$description_to_send, $header);
   }
}

?>
