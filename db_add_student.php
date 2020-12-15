<?php 
echo htmlspecialchars($_SERVER["PHP_SELF"]);
?>
<?php
    $con=mysqli_connect("127.0.0.1","u707236822_saifu","iamsoangry6","u707236822_imfun");
   
?>
<?php 
  //Print Errors
  if (isset($_REQUEST['Submit'])) {
  // Print any error messages. 
  if (!empty($errors)) { 
  echo '<hr /><h3>The following occurred:</h3><ul>'; 
  // Print each error. 
  foreach ($errors as $msg) { echo '<li>'. $msg . '</li>';}
  echo '</ul><h3>Input errors</h3><hr />';}
      
   else{echo '<hr /><h3 align="center"> Added Successfully. Thank you!</h3><hr />'; 
        $studentid=$_POST['studentid'];
        $studentname=$_POST['studentname'];
        $branch=$_POST['branch'];
 mysqli_query($con,"insert into add_student values('','$studentid','$studentname','$branch','','','','','','')");

  }
  }
//End of errors array
  ?>