<?php

	if( $_SERVER['REQUEST_METHOD']=='POST' ) {
               
                $student_id = $_POST['student_id'];
                $branch = $_POST['branch'];
                $f = $_POST['f'];
		$password = $_POST['password'];
		$question_one =$_POST['question_one'];
		$question_two= $_POST['question_two'];
                $answer_one=$_POST['answer_one'];
                $answer_two=$_POST['answer_two'];
		$student_name=$_POST['student_name'];
        
 define('HOST','127.0.0.1');
 define('USER','u707236822_saifu');
 define('PASS','iamsoangry6');
 define('DB','u707236822_imfun');
 
 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
		$sql = "UPDATE add_student SET password=$password,question_one=$question_one,question_two=$question_two,answer_one='".$answer_one."',answer_two='".$answer_two."',f=$f WHERE student_name='".$student_name."'";
		if(mysqli_query($con,$sql)){
			echo "Successfully Updated";
		}else{
			echo "Could not Update";
                     }
	}else{
echo 'error';
}	