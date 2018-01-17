
<?php  include 'dataConnect.php';  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
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
		
		 <h1>User Registration</h1>
		  
        </div>
    <ul id="topMenu" class="nav pull-right">
    <li class=""><a href="home.php">Home</a></li>
	  <li class=""><a href="login.php">Login</a></li>
	 <li class=""><a href="register.php">Register</a></li>
	 <li class=""><a href="contact.php">Contact</a></li>
	 <li class="">
	
	<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
		  <div class="modal-header">

			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Login Block</h3>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal loginFrm">
			  <div class="control-group">								
				<input type="text" id="inputEmail" placeholder="Email">
			  </div>
			  <div class="control-group">
				<input type="password" id="inputPassword" placeholder="Password">
			  </div>
			  <div class="control-group">
				<label class="checkbox">
				<input type="checkbox"> Remember me
				</label>
			  </div>
			</form>		
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
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		<div class="well well-small"><a id="myCart" href="register.php"><img src="themes/images/ico-cart.png" alt="cart">Your Booking  </a></div>
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
				<li class="subMenu open"><a> Appartment</a>
				<ul>
				<li><a class="active" ><i class="icon-chevron-right"></i>With AC </a></li>
				<li><a><i class="icon-chevron-right"></i>With Swiming Pool</a></li>
				<li><a><i class="icon-chevron-right"></i>With Hotwater</a></li>
				<li><a><i class="icon-chevron-right"></i>With Wifi</a></li>
				</ul>
			</li>
			<li class="subMenu"><a> Guest House </a>
			<ul style="display:none">
				<li><a><i class="icon-chevron-right"></i>With Swiming Pool</a></li>
				<li><a><i class="icon-chevron-right"></i>With Hotwater</a></li>
				<li><a><i class="icon-chevron-right"></i>With Wifi</a></li>												
			</ul>
			</li>
			<li class="subMenu"><a>Vacation Home</a>
				<ul style="display:none">
				<li><a><i class="icon-chevron-right"></i>With Swiming Pool</a></li>
				<li><a><i class="icon-chevron-right"></i>With Hotwater</a></li>
				<li><a><i class="icon-chevron-right"></i>With Wifi</a></li>												
			</ul>
			</li>
			<li class="subMenu"><a>House</a>
				<ul style="display:none">
				<li><a><i class="icon-chevron-right"></i>With Swiming Pool</a></li>
				<li><a><i class="icon-chevron-right"></i>With Hotwater</a></li>
				<li><a><i class="icon-chevron-right"></i>With Wifi</a></li>												
			</ul>
			</li>
            
            <li class="subMenu"><a>Villa</a>
				<ul style="display:none">
				<li><a><i class="icon-chevron-right"></i>With Swiming Pool</a></li>
				<li><a><i class="icon-chevron-right"></i>With Hotwater</a></li>
				<li><a><i class="icon-chevron-right"></i>With Wifi</a></li>												
			</ul>
			</li>
            
            <li class="subMenu"><a>Tree House</a>
				<ul style="display:none">
				<li><a><i class="icon-chevron-right"></i>With Swiming Pool</a></li>
				<li><a><i class="icon-chevron-right"></i>With Hotwater</a></li>
				<li><a><i class="icon-chevron-right"></i>With Wifi</a></li>												
			</ul>
			</li>
            <li class="subMenu"><a>Light House</a>
				<ul style="display:none">
				<li><a><i class="icon-chevron-right"></i>With Swiming Pool</a></li>
				<li><a><i class="icon-chevron-right"></i>With Hotwater</a></li>
				<li><a><i class="icon-chevron-right"></i>With Wifi</a></li>												
			</ul>
			</li>
            
            <li class="subMenu"><a>Boat House</a>
				<ul style="display:none">
				<li><a><i class="icon-chevron-right"></i>With Swiming Pool</a></li>
				<li><a><i class="icon-chevron-right"></i>With Hotwater</a></li>
				<li><a><i class="icon-chevron-right"></i>With Wifi</a></li>												
			</ul>
			</li>
		</ul>
		<br/>
		  <div class="thumbnail">
			<img src="themes/images/products/panasonic.jpg" alt="Bootshop panasonoc New camera"/>
			<div class="caption">
			  <h5></h5>
				<h4 style="text-align:center"> </i></a> </h4>
			</div>
		  </div><br/>
			<div class="thumbnail">
				<img src="themes/images/products/kindle.jpg" title="Bootshop New Kindel" alt="Bootshop Kindel">
				<div class="caption">
				 
				    <h4 style="text-align:center">  </h4>
				</div>
			  </div><br/>
			<div class="thumbnail">
				<img src="themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
				<div class="caption">
				  <h5>Payment Methods</h5>
				</div>
			  </div>
	</div>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="home.php">Home</a> <span class="divider">/</span></li>
		<li class="active">Registration</li>
    </ul>
	<h3> Registration</h3>	
	<div class="well">
	<!--
	<div class="alert alert-info fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	<div class="alert fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	 <div class="alert alert-block alert-error fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div> -->
	<form class="form-horizontal" method="post">
		<h4>Your personal information</h4>
		<div class="control-group">
			<label class="control-label" for="inputFname1">NIC <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputFname1" name="nic" required placeholder="Identity Number">
			</div>
		 </div>
		<div class="control-group">
			<label class="control-label" for="inputFname1">First name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputFname1" name="fname" required placeholder="First Name">
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="inputLnam">Last name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputLnam" name="lname" required placeholder="Last Name">
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="input_email">Email <sup>*</sup></label>
		<div class="controls">
		  <input type="text" id="input_email" name="email" required placeholder="Email">
		</div>
	  </div>	  
	<div class="control-group">
		<label class="control-label" for="inputPassword1">Password <sup>*</sup></label>
		<div class="controls">
		  <input type="password" name="password" required id="inputPassword1" placeholder="Password">
		</div>
	  </div>	  
		<div class="control-group">
		<label class="control-label">Date of Birth <sup>*</sup></label>
		<div class="controls">
		  <input type="date" id="" name="dateofbirth" required placeholder="">
		</div>
	  </div>

	

		<h4>Other Details</h4>
		
		
		<div class="control-group">
			<label class="control-label" for="company">Company</label>
			<div class="controls">
			  <input type="text" id="company" name="company" required placeholder="company"/>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="address">Address<sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="address" name="address" required placeholder="Adress"/> <span>Street address, P.O. box, company name, c/o</span>
			</div>
		</div>
		
		
		<div class="control-group">
			<label class="control-label" for="city">City<sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="city" name="city" required placeholder="city"/> 
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="state">District<sup>*</sup></label>
			<div class="controls">
			  <select id="state"  name="district" required>
				<option value="">-</option>
				<option>Colombo</option>
            <option>Gampaha</option>
			<option>Kalutara</option>
            
            <option>Badulla</option>
            <option>Monaragala</option>
            
            <option>Gall</option>
			<option>Matara</option>
			<option>Hambantota</option>
            
			<option>Kurunegala</option>
            <option>Puttalam</option>
            
            <option>Anuradhapura</option>
            <option>Polonnaruwa</option>
            
			<option>Jaffna</option>
			<option>Kilinochchi</option>
            <option>Mannar</option>
            <option>Mulative</option>
			<option>Vauniya</option>
			
			
            <option>Kandy</option>
			<option>Nuwara Eliya</option>
			<option>Matale</option>
			
            
            
            <option>Ampara</option>
			<option>Baticalo</option>
			<option>Trincomalee</option>
			
            
			<option>Rathnapura</option>
			<option>Kegall</option></select>
			</div>
		</div>		
		<div class="control-group">
			<label class="control-label" for="postcode">Zip / Postal Code<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="pcode" required id="postcode" placeholder="Zip / Postal Code"/> 
			</div>
		</div>
		
		
		<div class="control-group">
			<label class="control-label" for="aditionalInfo">Additional information</label>
			<div class="controls">
			  <textarea   name="description"id="aditionalInfo" cols="26" rows="3">Additional information</textarea>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="phone">Home phone <sup>*</sup></label>
			<div class="controls">
			  <input type="text"   name="hphone" id="phone" placeholder="phone"/> <span>You must register at least one phone number</span>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label"  for="mobile">Mobile Phone</label>
			<div class="controls">
			  <input type="text"  name="mphone" required id="mobile" placeholder="Mobile Phone"/> 
			</div>
		</div>
		
	<p><sup>*</sup>Required field	</p>
	
	<div class="control-group">
			<div class="controls">
				<input type="hidden" name="email_create" value="1">
				<input type="hidden" name="is_new_customer" value="1">
				<input class="btn btn-large btn-success" type="submit" name="register" value="Register" />
			</div>
		</div>		
	</form>
</div>

</div>
</div>
</div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	<div  id="footerSection">
	<div class="container">
		<div class="row">
			
			<div id="socialMedia" class="span3 pull-right">
				<h5>SOCIAL MEDIA </h5>
				<a href="#"><img width="60" height="60" src="themes/images/facebook.png" title="facebook" alt="facebook"/></a>
				<a href="#"><img width="60" height="60" src="themes/images/twitter.png" title="twitter" alt="twitter"/></a>
				<a href="#"><img width="60" height="60" src="themes/images/youtube.png" title="youtube" alt="youtube"/></a>
			 </div> 
		 </div>
		<p class="pull-right">&copy;Software Engineering Project 2017</p>
	</div><!-- Container End -->
	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>
	
	<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
<link rel="stylesheet" href="themes/switch/themeswitch.css" type="text/css" media="screen" />
<script src="themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>
	<div id="themeContainer">
	<div id="hideme" class="themeTitle">Style Selector</div>
	<div class="themeName">Oregional Skin</div>
	<div class="images style">
	<a href="themes/css/#" name="bootshop"><img src="themes/switch/images/clr/bootshop.png" alt="bootstrap business templates" class="active"></a>
	<a href="themes/css/#" name="businessltd"><img src="themes/switch/images/clr/businessltd.png" alt="bootstrap business templates" class="active"></a>
	</div>
	<div class="themeName">Bootswatch Skins (11)</div>
	<div class="images style">
		<a href="themes/css/#" name="amelia" title="Amelia"><img src="themes/switch/images/clr/amelia.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="spruce" title="Spruce"><img src="themes/switch/images/clr/spruce.png" alt="bootstrap business templates" ></a>
		<a href="themes/css/#" name="superhero" title="Superhero"><img src="themes/switch/images/clr/superhero.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="cyborg"><img src="themes/switch/images/clr/cyborg.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="cerulean"><img src="themes/switch/images/clr/cerulean.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="journal"><img src="themes/switch/images/clr/journal.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="readable"><img src="themes/switch/images/clr/readable.png" alt="bootstrap business templates"></a>	
		<a href="themes/css/#" name="simplex"><img src="themes/switch/images/clr/simplex.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="slate"><img src="themes/switch/images/clr/slate.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="spacelab"><img src="themes/switch/images/clr/spacelab.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="united"><img src="themes/switch/images/clr/united.png" alt="bootstrap business templates"></a>
		<p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
	</div>
	<div class="themeName">Background Patterns </div>
	<div class="images patterns">
		<a href="themes/css/#" name="pattern1"><img src="themes/switch/images/pattern/pattern1.png" alt="bootstrap business templates" class="active"></a>
		<a href="themes/css/#" name="pattern2"><img src="themes/switch/images/pattern/pattern2.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern3"><img src="themes/switch/images/pattern/pattern3.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern4"><img src="themes/switch/images/pattern/pattern4.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern5"><img src="themes/switch/images/pattern/pattern5.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern6"><img src="themes/switch/images/pattern/pattern6.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern7"><img src="themes/switch/images/pattern/pattern7.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern8"><img src="themes/switch/images/pattern/pattern8.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern9"><img src="themes/switch/images/pattern/pattern9.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern10"><img src="themes/switch/images/pattern/pattern10.png" alt="bootstrap business templates"></a>
		
		<a href="themes/css/#" name="pattern11"><img src="themes/switch/images/pattern/pattern11.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern12"><img src="themes/switch/images/pattern/pattern12.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern13"><img src="themes/switch/images/pattern/pattern13.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern14"><img src="themes/switch/images/pattern/pattern14.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern15"><img src="themes/switch/images/pattern/pattern15.png" alt="bootstrap business templates"></a>
		
		<a href="themes/css/#" name="pattern16"><img src="themes/switch/images/pattern/pattern16.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern17"><img src="themes/switch/images/pattern/pattern17.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern18"><img src="themes/switch/images/pattern/pattern18.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern19"><img src="themes/switch/images/pattern/pattern19.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern20"><img src="themes/switch/images/pattern/pattern20.png" alt="bootstrap business templates"></a>
		 
	</div>
	</div>
</div>
<span id="themesBtn"></span>
</body>
</html>
<?php

if(isset($_POST['register'])){
	
$nic=$_POST['nic'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$dateofbirth=$_POST['dateofbirth'];
$company=$_POST['company'];
$address=$_POST['address'];
$city=$_POST['city'];
$district=$_POST['district'];
$pcode=$_POST['pcode'];
$description=$_POST['description'];
$hphone=$_POST['hphone'];
$mphone=$_POST['mphone'];

$name=$fname." ".$lname;

     $search_Query1="INSERT INTO login  values ('$nic','$password') ";
     mysqli_query($connect, $search_Query1); 
	 
	 $search_Query2="INSERT INTO customer  values ('$nic','$name','$mphone','$email','$address','$dateofbirth','$company','$city','$district','$pcode','$mphone','$description') ";
     mysqli_query($connect, $search_Query2); 
	
}
?>