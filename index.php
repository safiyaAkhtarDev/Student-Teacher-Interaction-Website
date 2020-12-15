<!DOCTYPE html>
<html>
    <head>
    <title>Log In</title>
        <link href="css/bootstrap.css" rel="stylesheet" />
    <script src="1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel='stylesheet' type='text/css' href='css/style.css' />
        <style>
            nav ul{
                margin-top: 20px;
                height: 50%;
                padding: 20px 0px 20px 0px;
            }
            nav ul li a
            {
                height: 24px;
                margin-left: 20px;
                
            }
            .error{
                color: red;
                font-family: serif;
            }
            img{
                width: 100%;
            }
            .main{
                margin-top: 20px;
                margin-bottom: 20px;
            }#main-content {
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
        $adminidErr="";
        $passwordErr="";
        $adminid="";
        $password="";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
  if (empty($_POST["adminid"])) {
    $adminidErr = "Pease Enter Provided ID";
  } else {
    $adminid = test_input($_POST["adminid"]);
  }
 if (empty($_POST["password"])) {
    $passwordErr = "Pease Enter Provided Password";
  }
    else {
    $password = test_input($_POST["password"]);
 }
  }
            session_start();
            if (! empty($_POST) && $_POST['adminid'] === 'admin' && $_POST['password'] === 'admin')
                {
                $_SESSION['logged_in'] = true;
            header('Location: Upload.php');
                }
            else
            {}
    ?>

        <div class="main">
             <header>
            <img src="back.jpg"/>
                </header>
  
             <div class="page-wrap">
          <nav>
   <ul class="group">
       <li><a class="active" href="index.php">HOME</a></li>
       <li><a href="#">ABOUT US</a></li>
        <li><a href="#myModal" data-toggle="modal" data-target="#myModal">CONTACT US</a></li>
        </ul> 
  </nav>
        <section id="main-content">
		<div id="guts">
                      <!--     *******   validation for login********-->
        
      
            <h1>ADMIN LOG-IN</h1>
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<input type="text" name="adminid" size="40" placeholder="Enter Your ID"/><br>
<span class="error">*<?php echo $adminidErr;?></span><br> <br>
<input type="password" name="password" size="40" placeholder="Enter Your Password"/><br>
<span class="error">*<?php echo $passwordErr;?></span><br> <br>
          <button type="submit" name="LogIn" class="btn btn-primary" >Log In</button>
            </form>
        </div>
        </section>
            </div>
        </div>
    </body>
</html>