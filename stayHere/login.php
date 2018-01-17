
<?php

 

$servername="localhost";
$username="root";
$password="";

$conn=new mysqli($servername,$username,$password);
 
 

if ($conn->connect_error)   {  
 die("Connection Failed:".$conn->connect_error); 
   
   } 
   else{
  
   }
 mysqli_select_db( $conn,"stayhere");

 
	
$message="";

if(!empty($_POST["login"])) {
	
$cookie_name='userlogindetails';
$cookie_value=$_POST['user_name'];
setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
	
	$result = mysqli_query($conn,"SELECT * FROM login WHERE nic='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
	$row  = mysqli_fetch_array($result);
	
	if(is_array($row)) {
		
  
	
	
	header ("Location:index.php");
	
	}
	 else {
	$message = "Invalid Username or Password!";
	
	
	  echo '<script language="javascript">';
	  echo 'alert("Invalid Username or Password!!!")';
	  echo '</script>';
	}
}
if(!empty($_POST["new_account"])) {
	 
	 
	header ("Location:create_account.php");
	 
}

if(!empty($_POST["new_account"])) {
	header ("Location:register.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Your Booking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="themes/js/less.js" type="text/javascript"></script> -->
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6"></div>
	<div class="span6">
	<div class="pull-right">
		 
	</div>
	</div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" ><img src="themes/images/logo.png" alt="Bootsshop"/></a>
		<div class="form-inline navbar-search"  >
		<h1>User Login</h1>
		
    </div>
    <ul id="topMenu" class="nav pull-right">
      <li class=""><a href="home.php">Home</a></li>
	  <li class=""><a href="login.php">Login</a></li>
	 <li class=""><a href="register.php">Register</a></li>
	 <li class=""><a href="contact.php">Contact</a></li>
	 <li class="">
	
	<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
		  <div class="modal-header">

			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
			<h3>Login Block</h3>
		  </div>
		  <div class="modal-body">
				
			<button type="submit" class="btn btn-success">Sign in</button>
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		  </div>
	</div>
	</li>
    
    </ul>
  </div>
</div>
</div>
</div>
    <section id="contact-page" class="container" >
        <div class="row">
            <div class="col-sm-8" >
              
                <div class="status alert alert-success" style="display: none"></div>
              
                  
                <form method="post"  class="loginform" >
                  <div align="center">
                    <div class="row">
                        <div class="col-sm-5">
                        <h3>User Login </h3>
                            <div class="form-group">
                                <input type="text" name="user_name"  required="required" placeholder="NIC">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" required="required" placeholder="Password">
                            </div>
                            
                            
                            <div class="form-group">
                                <input type="submit" value="Login" name="login" class="btn btn-primary btn-lg"> Or
                                  <input type="submit" name="new_account" value="Create Account"class="btn btn-primary btn-lg"> 
                            </div>
                        </div>
                        
                    </div>
                </form>
                </div>
              
                
            </div>
          
            
            <!--/.col-sm-8-->
            <div class="col-sm-4">
                
               
            </div><!--/.col-sm-4-->
        </div>
    </section><!--/#contact-page-->
    
    <!--/#footer-->

  

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
<style>
.loginform{
position:relative;
left:10%;
top:30%;
width:80%;


}
body{

background-color:hsla(357,15%,75%,1.00);

}
.createaccount{
position:absolute;
left:39%;
width:100%;
bottom:11%;


}
</style>
</html>