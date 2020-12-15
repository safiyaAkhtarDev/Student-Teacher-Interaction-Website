<?php

 if($_SERVER['REQUEST_METHOD']=='GET'){
 
 $student_id  = $_GET['student_id'];
  define('HOST','127.0.0.1');
 define('USER','u707236822_saifu');
 define('PASS','iamsoangry6');
 define('DB','u707236822_imfun');
 
 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

 $sql = "SELECT * FROM add_student WHERE student_id='".$student_id."'";
 $r = mysqli_query($con,$sql);

 $res = mysqli_fetch_array($r);
 
 $result = array();
 
 array_push($result,array(
"student_id"=>$res['student_id'],
 "student_name"=>$res['student_name'],
 "password"=>$res['password']
 )
 );
 
 echo json_encode(array("result"=>$result));

 mysqli_close($con);
 }