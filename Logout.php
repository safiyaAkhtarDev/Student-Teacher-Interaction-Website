<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
        <link rel='stylesheet' type='text/css' href='css/style.css' />
    <script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
<script type='text/javascript' src='js/jquery.ba-hashchange.min.js'></script>
<script type='text/javascript' src='js/dynamicpage.js'></script>
           </head>
    <body>
         <div id="page-wrap">
             <header>
<!--                   <img alt="Convo" src="convo.png">-->
          <nav>
        <ul class="group">
       <li id="Add_Student"><a class="active" href="Add_Student.php">ADD STUDENT</a></li>
       <li id="Upload_Syllabus"><a href="Upload_Syllabus.php">UPLOAD SYLLABUS</a></li>
       <li id="Upload_Book"><a href="Upload_Book.php">UPLOAD BOOK</a></li>
       <li id="Upload_Notice"><a href="Upload_Notice.php">UPLOAD NOTICE</a></li>
       <li id="Upload_Question_Paper"><a href="Upload_Paper.php">UPLOAD QUESTION PAPER</a></li>
       <li id="VIEW_Uploads"><a href="#">VIEW UPLOADS</a></li>
        <li id="Discussion_Form"><a href="#">DISCUSSION FORM</a></li>
        <li onClick="refreshPage()"><a href="Logout.php">LOGOUT</a></li>
        </ul> 
            </nav>
                 </header>
<!-- *********Add Student Form***********-->
        
        <section id="main-content">
        <div id="guts">
               <?php
session_start();
session_unset();
echo' <p>This HAs BEEN LOgged OUT </p>';
            echo 'Click<a href="index.php">here to log in</a>';
            session_destroy();

exit();

    ?>
            
  <script>
function refreshPage(){
    window.location.reload();
} 
</script>      
        </div>
        </section>
        </div>
         
</body>
</html>