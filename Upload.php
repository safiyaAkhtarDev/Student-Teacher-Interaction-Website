<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    <title>Upload Files</title>
    <link href="fonts/glyphicons-halflings-regular.eot"/>
  
      <link rel='stylesheet' type='text/css' href='css/style.css' />
        <script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
<script type='text/javascript' src='js/jquery.ba-hashchange.min.js'></script>
<script type='text/javascript' src='js/dynamicpage.js'></script>
           <style>.error{
               color: red;
               font-family: serif;}
               #main-content {
    background-color: whitesmoke;
    text-align: center;
    border-color: cadetblue;
    border-radius: 20px;
    width: inherit;
    box-shadow:0 0 20px #999;
    border-style: inset;
    padding: 54px; 
    margin-right: 20%;
    margin-left: 20%;
    margin-top: 20px;
    margin-bottom: 20px;
}
        </style>
    </head>
    <body>
         <?php
session_start();
if (! empty($_SESSION['logged_in']))
{
    ?>
        
        <div class="main">
            <header>
            <img src="back.jpg"/>
                </header>
        <div class="page-wrap">
          <nav >
   <ul class="group">
       <li id="Add_Student"><a class="active" href="Add_Student.php">ADD STUDENT</a></li>
       <li id="Upload_Syllabus"><a href="Upload_Syllabus.php">UPLOAD SYLLABUS</a></li>
       <li id="Upload_Book"><a href="Upload_Book.php">UPLOAD BOOK</a></li>
       <li id="Upload_Notice"><a href="Upload_Notice.php">UPLOAD NOTICE</a></li>
       <li id="Upload_Question_Paper"><a href="Upload_Paper.php">UPLOAD QUESTION PAPER</a></li>
        <li id="VIEW_Uploads"><a href="#">VIEW UPLOADS</a></li>
        <li id="Discussion_Form"><a href="#">DISCUSSION FORM</a></li>
        <li><a href=Logout.php>LOGOUT</a></li>
        </ul> 
            </nav>
            
		<section id="main-content">
		<div id="guts">
            <?php 
        $studentidErr="";
        $studentnameErr="";
        $studentid="";
        $studentname="";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
  if (empty($_POST["studentid"])) {
   $studentidErr = "Pease Enter Student ID";
  } else {
   $studentid = test_input($_POST["studentid"]);
  }
 if (empty($_POST["studentname"])) {
    $studentnameErr = "Pease Enter Student Name";
  }
    else {
    $studentname= test_input($_POST["studentname"]);
 }
  }
    ?>
            <div  id="add_student" class="add_student">
                <h1>ADD STUDENT</h1><br>
              <form action="db_add_student.php" method="post">
<input type="text" name="studentid" size="40" placeholder="Enter Student ID"><br>
                  <span class="error">*<?php echo $studentidErr;?></span><br> <br>
<input type="text" name="studentname" size="40" placeholder="Enter Student Name" ><br>
                  <span class="error">*<?php echo $studentnameErr;?></span><br> <br>
 <select name="branch">
  <option value="None">--Select Stream--</option>
  <option value="Computer_Science">Computer Science</option>
  <option value="Mechanical">Mechanical</option>
  <option value="Electrical">Electrical</option>
  <option value="Civil">Civil</option>
</select><br> <br>
<button type="submit" name="Submit" class="btn btn-primary" >Submit</button>
<button type="submit" name="Reset" class="btn btn-primary" >Reset</button></form>
</div>
        </div>
        </section>
            </div>
        </div>
   
<?php
}
else
{
    echo 'TO LOGIN<a href="AdminLogin.php">CLICK HERE</a>';
}
        ?>
    </body>
</html>
