<?php

require_once dirname(__FILE__)."/src/DB.php";
require_once dirname(__FILE__)."/src/getData.php";
require_once dirname(__FILE__)."/src/setData.php";
require_once dirname(__FILE__)."/sms.php";
require_once dirname(__FILE__)."/src/class_feedback.php";

$db = new DB;

if (!$db->mysqlConnect()){
   mysql_query("SET NAMES 'utf8'");
   mysql_query("SET collation_connection = 'UTF-8_general_ci'");
   mysql_query("SET collation_server = 'UTF-8_general_ci'");
   mysql_query("SET character_set_client = 'UTF-8'");
   mysql_query("SET character_set_connection = 'UTF-8'");
   mysql_query("SET character_set_results = 'UTF-8'");
   mysql_query("SET character_set_server = 'UTF-8'");
   
   $get_data = new GetData;
   $set_data = new SetData;
   $feedback = new Feedback;
}

switch ($_POST["a"]){
   case "feedback_set":
      echo $feedback->set($_POST["b"], $_POST["c"], $_POST["d"], $_POST["e"], $_POST["f"]);
   break;
   
   case "o" :
      echo $set_data->order($_POST["b"], $_POST["c"]);
   break;

   default : 
      exit();
}

mysql_close();

?>
