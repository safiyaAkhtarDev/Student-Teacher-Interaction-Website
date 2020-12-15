<?php 
echo htmlspecialchars($_SERVER["PHP_SELF"]);
?>
<?php 
    $con=mysqli_connect("127.0.0.1","u707236822_saifu","iamsoangry6","u707236822_imfun");
?>
<?php 
  //Print Errors
  if (isset($_POST['Submit'])) {
  // Print any error messages. 
  if (!empty($errors)) { 
  echo '<hr /><h3>The following occurred:</h3><ul>'; 
  // Print each error. 
  foreach ($errors as $msg) { echo '<li>'. $msg . '</li>';}
  echo '</ul><h3>Input errors</h3><hr />';}
      
   else{echo '<hr /><h3 align="center">Your Feedback was sent. Thank you!</h3><hr />'; 
        $branch=$_POST['branch'];
        $year=$_POST['year'];
        $semester=$_POST['semester'];
        $fileupload=$_POST['fileupload'];
        $namepaper=$_POST['namepaper'];
        
       $filename = $_FILES['fileupload']['name'];
       $file_tmp =$_FILES['fileupload']['tmp_name'];
       $file_type=$_FILES['fileupload']['type'];
       $target_path=$_SERVER['DOCUMENT_ROOT'].'/appwebsite/uploads/';
        
        if(move_uploaded_file($file_tmp,$target_path.$filename))
      {
        $msg="uploaded";
          echo $msg;
      }
      else
      {
        $msg="not uploaded";
          echo $msg;
      }
  if($branch=='Computer_Science'){mysqli_query($con,"insert into computer_science values ( '', '$year', '$semester','','','','','$namepaper','$target_path.$filename','','','')");}
  if($branch=='Civil'){ mysqli_query($con,"insert into civil values( '', '$year', '$semester','','','','','$namepaper','$target_path.$filename','','','')");}
  if($branch=='Mechanical'){ mysqli_query($con,"insert into mechanical values( '', '$year', '$semester','','','','','$namepaper','$target_path.$filename','','','')");}
  if($branch=='Electrical'){ mysqli_query($con,"insert into electrical values( '', '$year', '$semester','','','','','$namepaper','$target_path.$filename','','','')");}
}
  }
//End of errors array
?>

