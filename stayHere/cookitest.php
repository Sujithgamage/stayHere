<?php  include 'dataConnect.php';  



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
	 <li class=""><a href="special_offer.html">Specials Offer</a></li>
	 <li class=""><a href="normal.html">About</a></li>
	 <li class=""><a href="contact.html">Contact</a></li>
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

	<style>
	.testfor{
		width:50%;
		height:50%;
		background:hsla(339,53%,55%,1.00);
		position:absolute;
		top:30%;
		left:25%;
		
		
		
	}
	</style>			


</body>
<div class="testfor">
 <form method="post" name="myForm">
                  
                        
                            <div class="uname" align="center">
                            <h3>User Login </h3>
                                <input type="text" name="user_name" class="form-control" required="required" placeholder="User Name"><br><br>
                          
                           
                                <input type="password" name="password" class="form-control" required="required" placeholder="Password"><br>
                           
                            
                            
                           
                                <input type="submit" value="Login" name="login" class="btn btn-primary btn-lg"> <b>OR<b>
                                <input type="submit" value="Create Account" name="newword" class="btn btn-primary btn-lg">
                        </div>
                        
                 
                </form>
</div>
</html>
<?php  include 'dataConnect.php'; 

if(isset($_POST["login"])) {




$nic1=$_POST['nic'];
$password1=$_POST['password'];



 $nicgot1=mysqli_query($connect,"select nic from login where nic='$nic1' and password='$password1' ");
 $nicgot2=mysqli_fetch_array($nicgot1);
 $nicgot3=$nicgot2[0];

 
 
	if($nicgot3==$nic1) {
     ?>
	<script type="text/javascript">
	
     setCookie("userlogindetails", "Androo","Thu, 18 Dec 2018 12:00:00 UTC");
     
    </script>
     <?php
		
	 echo '<script language="javascript">';
	 
	  echo 'window.open("index.php", "_self");';
	  echo '</script>';
	}
else{
	
 
	 echo '<script language="javascript">';
	  echo 'alert("Invalid Username or Password!!!")';
	  echo '</script>';
}

}

?>

