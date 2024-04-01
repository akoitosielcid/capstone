<?php 
require_once("../include/initialize.php");
	 if (!isset($_SESSION['user_id'])){
      //redirect(web_root."login.php");
     } 

$content='home.php';
$view = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
switch ($view) {  
	default :
     $title = "Home";
	 $content = "home.php";
}
?>