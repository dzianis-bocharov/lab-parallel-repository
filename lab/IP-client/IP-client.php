<?php
  //   if(!empty($_SERVER['HTTP_CLIENT_IP'])){
  //     $ip=$_SERVER['HTTP_CLIENT_IP'];
  //   }
  //   elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
  //     $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
  //   }
  //   else{
  //     $ip=$_SERVER['REMOTE_ADDR'];
  //   }
	// if($ip = '::1') {
	// 	$ip = '127.0.0.1';
	// }
	// echo  "".$ip."";


  if (isset($_SERVER['HTTP_CLIENT_IP']) && $_SERVER['HTTP_CLIENT_IP'] != '')
  $Ip = $_SERVER['HTTP_CLIENT_IP'];
elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && $_SERVER['HTTP_X_FORWARDED_FOR'] != '')
  $Ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
elseif (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] != '')
  $Ip = $_SERVER['REMOTE_ADDR'];

   if($Ip == '::1') {
     $Ip = '127.0.0.1';
   }

  echo $Ip;



?>