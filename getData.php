<?php

 if($_SERVER['REQUEST_METHOD']=='GET'){
 
 $student_id  = $_GET['student_id'];
$server_name="127.0.0.1";
$mysql_user="u707236822_saifu";
$mysql_pass="iamsoangry6";
$db_name="u707236822_imfun";
 
 $con = mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name) or die('Unable to Connect');

 $sql = "SELECT * FROM add_student WHERE student_id='".$student_id."'";
 $r = mysqli_query($con,$sql);

 $res = mysqli_fetch_array($r);
 
 $result = array();
 
 array_push($result,array(
"student_id"=>$res['student_id'],
 "student_name"=>$res['student_name'],
"f"=>$res['f'],
 "branch"=>$res['branch']
 )
 );
 
 echo json_encode(array("result"=>$result));

 mysqli_close($con);
 }