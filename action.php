 <?php
    $con=mysql_connect("localhost","root");
    mysql_select_db("gallery");


?>
<?php 
if (isset($_REQUEST['send'])) 
{
// Initialize error array.
  $errors = array();
  if (!empty($_REQUEST['Name'])) 
  {
  $name = $_REQUEST['Name'];
  $pattern = "/^[a-zA-Z0-9\_]{2,20}/";
  if (preg_match($pattern,$name)){ $name = $_REQUEST['Name'];}
  else{ $errors[] = 'Your Name can only contain _, 1-9, A-Z or a-z 2-20 long.';}
  }
    else {$errors[] = 'You forgot to enter your Name.';}
  
  if (!empty($_REQUEST['Home-Town'])) 
  {
  $town = $_REQUEST['Home-Town'];
  $pattern = "/^[a-zA-Z0-9\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
  if (preg_match($pattern,$town)){ $town = $_REQUEST['Home-Town'];}
  else{ $errors[] = 'Your Home-Town can only contain _, 1-9, A-Z or a-z 2-20 long.';}
  }
    else {$errors[] = 'You forgot to enter your Home-Town.';}
  }
        ?>
         <?php 
  //Print Errors
  if (isset($_REQUEST['send'])) {
  // Print any error messages. 
  if (!empty($errors)) { 
  echo '<hr /><h3>The following occurred:</h3><ul>'; 
  // Print each error. 
  foreach ($errors as $msg) { echo '<li>'. $msg . '</li>';}
  echo '</ul><h3>Input errors</h3><hr />';}
      
   else{echo '<hr /><h3 align="center">Your Feedback was sent. Thank you!</h3><hr />'; 
        $name=$_POST['Name'];
        $town=$_POST['Home-Town'];
        $review=$_POST['Review'];
 mysql_query("insert into review values('','$name','$town','$review')");

  }
  }
//End of errors array
  ?>