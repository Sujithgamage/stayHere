<?php  include 'dataConnect.php';  


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>StayHere Index</title>
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
		<a href="product_summary.html"><span class=""></span></a>
		<a href="product_summary.html"><span class=""></span></a>
		
		
		
		 
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
		<form class="form-inline navbar-search" method="post"  >
		 <select class="srchTxt" name="district">
			
            <option>Colombo</option>
            <option>Gampaha</option>
			<option>Kalutara</option>
            
            <option>Badulla</option>
            <option>Monaragala</option>
            
            <option>Galle</option>
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
			<option>Kegalle</option>
            
            </select>
            
		<select class="srchTxt" name="type">
        <option>All</option>
			 <?php
								$sql1="Select type from housecategory";
								$resu=$connect->query($sql1);
								while($row=$resu->fetch_assoc()){
								echo '<option>'.$row['type'].'</option>';
								}
								?>
		</select> 
		  <button type="submit" id="submitButton" name="go" class="btn btn-primary">Go</button>
		  

    </form>
		
        <ul id="topMenu" class="nav pull-right">
        <li class=""><a href="index.php">Home</a></li>
	 <li class=""><a href="account.php">Account</a></li>
	 <li class=""><a href="RentHouse.php">Rent House</a></li>
	 <li class=""><a href="rcontact.php">Contact</a></li>
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
<div id="carouselBlk">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
		  <div class="item active">
		  <div class="container">
			<a ><img style="width:100%" src="themes/images/carousel/1.jpg" alt="special offers"/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a ><img style="width:100%" src="themes/images/carousel/2.jpg" alt=""/></a>
				<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a ><img src="themes/images/carousel/3.jpg" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
			
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href=""><img src="themes/images/carousel/4.jpg" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		   
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href=""><img src="themes/images/carousel/5.jpg" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			</div>
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href=""><img src="themes/images/carousel/6.jpg" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	  </div> 
</div>
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		<div class="well well-small"><a id="myCart" href="account.php"><img src="themes/images/ico-cart.png" alt="cart">Your Booking  <span class="badge badge-warning pull-right"><?php $reg_no="";
 
      $cookie_name='userlogindetails';
	  $reg_no= $_COOKIE[$cookie_name];
	  echo $reg_no;?></span></a></div>
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
			<div class="well well-small">
			<h4>New Houses <small class="pull-right"></small></h4>
			<div class="row-fluid">
			<div id="featured" class="carousel slide">
			<div class="carousel-inner">
			  <div class="item active">
			  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a ><?php
					$image1=mysqli_query($connect,"select image from advertiesment where add_id='1' ");
                    $image2=mysqli_fetch_array($image1);
                     $image3=$image2[0];
					 $name1=mysqli_query($connect,"select name from advertiesment where add_id='1' ");
                    $name2=mysqli_fetch_array($name1);
                     $name=$name2[0];
					 ?><img src="<?php echo "themes/images/Home_Image/NewPost/".$image3; ?>" alt=""></a>
					<div class="caption">
					  <h5><?php echo $name; ?></h5>
					  <h4></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a ><?php
					$image1=mysqli_query($connect,"select image from advertiesment where add_id='2' ");
                    $image2=mysqli_fetch_array($image1);
                     $image3=$image2[0];
					 $name1=mysqli_query($connect,"select name from advertiesment where add_id='2' ");
                    $name2=mysqli_fetch_array($name1);
                     $name=$name2[0];
					 ?><img src="<?php echo "themes/images/Home_Image/NewPost/".$image3; ?>" alt=""></a>
					<div class="caption">
					  <h5><?php echo $name; ?></h5>
					  
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a ><?php
					$image1=mysqli_query($connect,"select image from advertiesment where add_id='3' ");
                    $image2=mysqli_fetch_array($image1);
                     $image3=$image2[0];
					 $name1=mysqli_query($connect,"select name from advertiesment where add_id='3' ");
                    $name2=mysqli_fetch_array($name1);
                     $name=$name2[0];
					 ?><img src="<?php echo "themes/images/Home_Image/NewPost/".$image3; ?>" alt=""></a>
					<div class="caption">
					  <h5><?php echo $name; ?></h5>
					  
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a ><?php
					$image1=mysqli_query($connect,"select image from advertiesment where add_id='4' ");
                    $image2=mysqli_fetch_array($image1);
                     $image3=$image2[0];
					 $name1=mysqli_query($connect,"select name from advertiesment where add_id='4' ");
                    $name2=mysqli_fetch_array($name1);
                     $name=$name2[0];
					 ?><img src="<?php echo "themes/images/Home_Image/NewPost/".$image3; ?>" alt=""></a>
					<div class="caption">
					  <h5><?php echo $name; ?></h5>
					  
					</div>
				  </div>
				</li>
			  </ul>
			  </div>
			   <div class="item">
			  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a ><?php
					$image1=mysqli_query($connect,"select image from advertiesment where add_id='5' ");
                    $image2=mysqli_fetch_array($image1);
                     $image3=$image2[0];
					 $name1=mysqli_query($connect,"select name from advertiesment where add_id='5' ");
                    $name2=mysqli_fetch_array($name1);
                     $name=$name2[0];
					 ?><img src="<?php echo "themes/images/Home_Image/NewPost/".$image3; ?>" alt=""></a>
					<div class="caption">
					  <h5><?php echo $name; ?></h5>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
				<a ><?php
					$image1=mysqli_query($connect,"select image from advertiesment where add_id='6' ");
                    $image2=mysqli_fetch_array($image1);
                     $image3=$image2[0];
					 $name1=mysqli_query($connect,"select name from advertiesment where add_id='6' ");
                    $name2=mysqli_fetch_array($name1);
                     $name=$name2[0];
					 ?><img src="<?php echo "themes/images/Home_Image/NewPost/".$image3; ?>" alt=""></a>
					<div class="caption">
					  <h5><?php echo $name; ?></h5>
					  
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a ><?php
					$image1=mysqli_query($connect,"select image from advertiesment where add_id='7' ");
                    $image2=mysqli_fetch_array($image1);
                     $image3=$image2[0];
					 $name1=mysqli_query($connect,"select name from advertiesment where add_id='7' ");
                    $name2=mysqli_fetch_array($name1);
                     $name=$name2[0];
					 ?><img src="<?php echo "themes/images/Home_Image/NewPost/".$image3; ?>" alt=""></a>
					<div class="caption">
					  <h5><?php echo $name; ?></h5>
					  
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a ><?php
					$image1=mysqli_query($connect,"select image from advertiesment where add_id='8' ");
                    $image2=mysqli_fetch_array($image1);
                     $image3=$image2[0];
					 $name1=mysqli_query($connect,"select name from advertiesment where add_id='8' ");
                    $name2=mysqli_fetch_array($name1);
                     $name=$name2[0];
					 ?><img src="<?php echo "themes/images/Home_Image/NewPost/".$image3; ?>" alt=""></a>
					<div class="caption">
					  <h5><?php echo $name; ?></h5>
					  
					</div>
				  </div>
				</li>
			  </ul>
			  </div>
			   <div class="item">
			  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail">
					<a ><?php
					$image1=mysqli_query($connect,"select image from advertiesment where add_id='9' ");
                    $image2=mysqli_fetch_array($image1);
                     $image3=$image2[0];
					 $name1=mysqli_query($connect,"select name from advertiesment where add_id='9' ");
                    $name2=mysqli_fetch_array($name1);
                     $name=$name2[0];
					 ?><img src="<?php echo "themes/images/Home_Image/NewPost/".$image3; ?>" alt=""></a>
					<div class="caption">
					  <h5><?php echo $name; ?></h5>
					  
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a ><?php
					$image1=mysqli_query($connect,"select image from advertiesment where add_id='10' ");
                    $image2=mysqli_fetch_array($image1);
                     $image3=$image2[0];
					 $name1=mysqli_query($connect,"select name from advertiesment where add_id='10' ");
                    $name2=mysqli_fetch_array($name1);
                     $name=$name2[0];
					 ?><img src="<?php echo "themes/images/Home_Image/NewPost/".$image3; ?>" alt=""></a>
					<div class="caption">
					  <h5><?php echo $name; ?></h5>
					  
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a ><?php
					$image1=mysqli_query($connect,"select image from advertiesment where add_id='11' ");
                    $image2=mysqli_fetch_array($image1);
                     $image3=$image2[0];
					 $name1=mysqli_query($connect,"select name from advertiesment where add_id='11' ");
                    $name2=mysqli_fetch_array($name1);
                     $name=$name2[0];
					 ?><img src="<?php echo "themes/images/Home_Image/NewPost/".$image3; ?>" alt=""></a>
					<div class="caption">
					  <h5><?php echo $name; ?></h5>
					  
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a ><?php
					$image1=mysqli_query($connect,"select image from advertiesment where add_id='12' ");
                    $image2=mysqli_fetch_array($image1);
                     $image3=$image2[0];
					 $name1=mysqli_query($connect,"select name from advertiesment where add_id='12' ");
                    $name2=mysqli_fetch_array($name1);
                     $name=$name2[0];
					 ?><img src="<?php echo "themes/images/Home_Image/NewPost/".$image3; ?>" alt=""></a>
					<div class="caption">
					  <h5><?php echo $name; ?></h5>
					  
					</div>
				  </div>
				</li>
			  </ul>
			  </div>
			   <div class="item">
			  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail">
				<a ><?php
					$image1=mysqli_query($connect,"select image from advertiesment where add_id='13' ");
                    $image2=mysqli_fetch_array($image1);
                     $image3=$image2[0];
					 $name1=mysqli_query($connect,"select name from advertiesment where add_id='13' ");
                    $name2=mysqli_fetch_array($name1);
                     $name=$name2[0];
					 ?><img src="<?php echo "themes/images/Home_Image/NewPost/".$image3; ?>" alt=""></a>
					<div class="caption">
					  <h5><?php echo $name; ?></h5>
					  
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a ><?php
					$image1=mysqli_query($connect,"select image from advertiesment where add_id='14' ");
                    $image2=mysqli_fetch_array($image1);
                     $image3=$image2[0];
					 $name1=mysqli_query($connect,"select name from advertiesment where add_id='14' ");
                    $name2=mysqli_fetch_array($name1);
                     $name=$name2[0];
					 ?><img src="<?php echo "themes/images/Home_Image/NewPost/".$image3; ?>" alt=""></a>
					<div class="caption">
					  <h5><?php echo $name; ?></h5>
					  
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a ><?php
					$image1=mysqli_query($connect,"select image from advertiesment where add_id='15' ");
                    $image2=mysqli_fetch_array($image1);
                     $image3=$image2[0];
					 $name1=mysqli_query($connect,"select name from advertiesment where add_id='15' ");
                    $name2=mysqli_fetch_array($name1);
                     $name=$name2[0];
					 ?><img src="<?php echo "themes/images/Home_Image/NewPost/".$image3; ?>" alt=""></a>
					<div class="caption">
					  <h5><?php echo $name; ?></h5>
					  
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a ><?php
					$image1=mysqli_query($connect,"select image from advertiesment where add_id='16' ");
                    $image2=mysqli_fetch_array($image1);
                     $image3=$image2[0];
					 $name1=mysqli_query($connect,"select name from advertiesment where add_id='16' ");
                    $name2=mysqli_fetch_array($name1);
                     $name=$name2[0];
					 ?><img src="<?php echo "themes/images/Home_Image/NewPost/".$image3; ?>" alt=""></a>
					<div class="caption">
					  <h5><?php echo $name; ?></h5>
					  
					</div>
				  </div>
				</li>
              
			  </ul>
			  </div>
			  </div>
			  <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
			  <a class="right carousel-control" href="#featured" data-slide="next">›</a>
			  </div>
			  </div>
		</div>
        
        
		<h4>Selected  House Category </h4>
        <div class="scroll">
			  <ul class="thumbnails">

<?php

	$typefor="All";
	$districtfor="All";
    if(isset($_POST['go'])){
	
    $typefor=$_POST['type'];
    $districtfor=$_POST['district'];
	
    }




	
 $imageid1=mysqli_query($connect,"select max(CAST(image_id AS UNSIGNED)) from houseimage");
 $imageid2=mysqli_fetch_array($imageid1);
 $y=$imageid2[0];

for($i=1;$i<=$y;$i++){
	
 $imageref1=mysqli_query($connect,"select imageref from houseimage where image_id='$i' ");
 $imageref2=mysqli_fetch_array($imageref1);
 $imageref=$imageref2[0];
 
 $house_id1=mysqli_query($connect,"select house_id from houseimage where image_id='$i' ");
 $house_id2=mysqli_fetch_array($house_id1);
 $house_id=$house_id2[0];
 
 $price1=mysqli_query($connect,"select price from house where house_id='$house_id' ");
 $price2=mysqli_fetch_array($price1);
 $price=$price2[0];
 
 $title1=mysqli_query($connect,"select title from house where house_id='$house_id' ");
 $title2=mysqli_fetch_array($title1);
 $title=$title2[0];
 
 
 $address1=mysqli_query($connect,"select address from house where house_id='$house_id' ");
 $address2=mysqli_fetch_array($address1);
 $address=$address2[0];
 
  $type1=mysqli_query($connect,"select type from housecategory where category_id=(Select category_id from house where house_id='$house_id') ");
  $type2=mysqli_fetch_array($type1);
  $type3=$type2[0];
  
  $district1=mysqli_query($connect,"select district from house where house_id='$house_id' ");
  $district2=mysqli_fetch_array($district1);
  $district3=$district2[0];
  
  
  if(($type3==$typefor)&&($district3==$districtfor)){
	?>



  <li class="span3">
				  <div class="thumbnail">
					<a ><img src="<?php echo "themes/images/products/".$imageref; ?>"  alt=""/></a>
					<div class="caption">
					  <h5><?php 
					  echo $type3;
					  
					  ?></h5>
					  <p> 
						 <?php 
					  echo $title."<br>";
					  echo $address;
					  ?>
					  </p>
					 
					  <h4 style="text-align:center"> </a> <a href="product_details.php?id=<?php  echo $address;?>"><input class="btn" type="submit" name="productdetails" value="More Details"  > </form> <b class="btn btn-primary" >LKR <?php echo $price; ?></b></h4>
					</div>
				  </div>
				</li>
				
														
 <?php }
 if(($typefor=="All")&&($districtfor=="All")){
	?>



  <li class="span3">
				  <div class="thumbnail">
					<a ><img src="<?php echo "themes/images/products/".$imageref; ?>"  alt=""/></a>
					<div class="caption">
					  <h5><?php 
					  echo $type3;
					  
					  ?></h5>
					  <p> 
						 <?php 
					  echo $title."<br>";
					  echo $address;
					  ?>
					  </p>
					 
					  <h4 style="text-align:center"> </a> <a href="product_details.php?id=<?php  echo $address;?>"><input class="btn" type="submit" name="productdetails" value="More Details"  > </form> <b class="btn btn-primary" >LKR <?php echo $price; ?></b></h4>
					</div>
				  </div>
				</li>
				
														
 <?php }
 
 if(($typefor=="All")&&($districtfor==$district3)){
	?>



  <li class="span3">
				  <div class="thumbnail">
					<a ><img src="<?php echo "themes/images/products/".$imageref; ?>"  alt=""/></a>
					<div class="caption">
					  <h5><?php 
					  echo $type3;
					  
					  ?></h5>
					  <p> 
						 <?php 
					  echo $title."<br>";
					  echo $address;
					  ?>
					  </p>
					 
					  <h4 style="text-align:center"> </a> <a href="product_details.php?id=<?php  echo $address;?>"><input class="btn" type="submit" name="productdetails" value="More Details"  > </form> <b class="btn btn-primary" >LKR <?php echo $price; ?></b></h4>
					</div>
				  </div>
				</li>
				
														
 <?php }
 
 } ?>

                
              
                
               
                
                
			  </ul>	
</div>
		</div>
		</div>
	</div>
</div>
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
<style>
.scroll{
width:110%;
	
	overflow:scroll;
	height:730px;
		
	background:rgba(0,0,255,0.5);
    
}



	
</style>
</html>

