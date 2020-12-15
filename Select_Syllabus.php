<?php

 if($_SERVER['REQUEST_METHOD']=='POST'){
 
 $year  = $_POST['year'];
 $branch  = $_POST['branch'];
 $semester  = $_POST['semester'];
 define('HOST','127.0.0.1');
 define('USER','u707236822_saifu');
 define('PASS','iamsoangry6');
 define('DB','u707236822_imfun');
 
 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

  if($branch=="Computer_Science"){$sql = "SELECT * FROM computer_science WHERE year='$year' AND semester='$semester'"; }
  if($branch=='Civil'){ $sql = "SELECT * FROM civil WHERE year='$year' AND semester='$semester'";}
  if($branch=='Mechanical'){ $sql = "SELECT * FROM mechanical WHERE year='$year' AND semester='$semester'";}
  if($branch=='Electrical'){ $sql = "SELECT * FROM electrical WHERE year='$year' AND semester='$semester'";}

  $r = mysqli_query($con,$sql);
  $res = mysqli_fetch_array($r);
  $result = array();

 array_push($result,array(
 "year"=>$res['year'],
 "semester"=>$res['semester'],
     "syllabus"=>$res['syllabus'],
 "syllabus_file"=>$res['syllabus_file'],
 "notice"=>$res['notice'],
 "notice_file"=>$res['notice_file'],
 "question"=>$res['question'],
 "question_file"=>$res['question_file'],
"book"=>$res['book'],
 "book_file"=>$res['book_file'],
"date"=>$res['date']
 )
 );
 
 echo json_encode(array("result"=>$result));

 mysqli_close($con);
 }