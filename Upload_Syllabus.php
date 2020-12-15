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
           <style>
               .error{
                   color: red;
                   font-family: serif;
               }
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
        <li><a href="Logout.php">LOGOUT</a></li>
        </ul> 
            </nav>
            
		<section id="main-content">
		<div id="guts">
            <!-- *********Upload Syllabus Form***********-->
                      
        <?php 
    $nameErr="";
    $name="";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
  if (empty($_POST["name"])) {
    $nameErr = "Pease Enter  Name";
  }
    else {
    $name= test_input($_POST["name"]);
 }
  }
    ?>
<div id="upload_syllabus" class="upload_syllabus">
                 <h1>UPLOAD SYLLABUS</h1><br>
              <form action="db_upload_syllabus.php" method="post" enctype="multipart/form-data">
  <select name="branch">
  <option value="None">--Select Stream--</option>
  <option value="Computer_Science">Computer Science</option>
  <option value="Mechanical">Mechanical</option>
  <option value="Electrical">Electrical</option>
  <option value="Civil">Civil</option>
</select><br> <br>
                   <select name="year">
  <option value="None">--Select Year--</option>
  <option value="1">First Year</option>
  <option value="2">Second Year</option>
  <option value="3">Third Year</option>
  <option value="4">Fourth Year</option>
</select><br> <br>
                   <select name="semester">
  <option value="None">--Select Sem--</option>
  <option value="1">First Sem</option>
  <option value="2">Second Sem</option>
  <option value="3">Third Sem</option>
  <option value="4">Fourth Sem</option>
  <option value="5">Fifth Sem</option>
  <option value="6">Sixth Sem</option>
  <option value="7">Seventh Sem</option>
  <option value="8">eighth Sem</option>
</select><br> <br>
<input type="text" name="namesyllabus" size="40" placeholder="Enter Name of File"><br>
                   <span class="error">*<?php echo $nameErr;?></span><br> <br>
<input type="file" name="fileupload" value="fileupload" id="fileupload"><br> <br>
<button type="submit" name="Submit" class="btn btn-primary" >Upload</button>
<button type="submit" name="Reset" class="btn btn-primary" >Reset</button>
</form>
    </div> 
            </div>
            </section>
            </div>
<?php
}
else
{
    echo '<a href="AdminLogin.php"></a>';
}
        ?>
        </div>
    </body>
</html>
