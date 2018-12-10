<?php  include 'dataConnect.php';  ?>
<!DOCTYPE html>
<html lang="en">
 <body>
	</body>
	<head>
    <meta charset="utf-8">
    <title>Product Details</title>
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
	<div class="span6"></strong></div>
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
		
    <ul id="topMenu" class="nav pull-right">
	  <li class=""><a href="index.php">Home</a></li>
	 <li class=""><a href="account.php">Account</a></li>
	 <li class=""><a href="RentHouse.php">Rent House</a></li>
	 <li class=""><a href="rcontact.php">Contact</a></li>
	 <li class="">
	
	<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
		  <div class="modal-header">

			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Confirm Booking</h3>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal loginFrm" method="post">
			  <div class="control-group">								
				<h4>In Date</h4><input type="date" name="indate" required id="inputEmail" placeholder="In Date">
			  </div>
			  <div class="control-group">
				<h4>Out Date</h4><input type="date" name="outdate" required id="inputPassword" placeholder="Out Date">
			  </div>
               <div class="control-group">
				<h4>Number Of Rooms</h4><input type="text" name="numofrooms" required id="inputPassword" placeholder="How many rooms do you need?">
			  </div><br>
			  <button type="submit" name="booknow" class="btn btn-success">Book Now</button>
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
           
			</form>		
			
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
		<div class="well well-small"><a id="myCart" href="account.php"><img src="themes/images/ico-cart.png" alt="cart">Your Booking  </a></div>
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
    <li><a href="index.php">Home</a> <span class="divider">/</span></li>
   
    <li class="active">House Details</li>
    </ul>	
	<div class="row">	  
			<div id="gallery" class="span3">
           
				<img src="<?php
				$name=$_GET['id'];
				
				 $maxhouseID1=mysqli_query($connect,"select house_id from house where address='$name'");
                  $maxhouseID2=mysqli_fetch_array($maxhouseID1);
                  $maxhouseID3=$maxhouseID2[0];
				  
				  $imageref1=mysqli_query($connect,"select imageref from houseimage where house_id='$maxhouseID3'");
                  $imageref2=mysqli_fetch_array($imageref1);
                  $imageref=$imageref2[0];
				 echo "themes/images/products/".$imageref; ?>"" style="width:100%" alt="Fujifilm FinePix S2950 Digital Camera"/>
            </a>
            
            
			<div id="differentview" class="moreOptopm carousel slide">
                <div class="carousel-inner">
                  <div class="item active">
                   
               
                  </div>
                  <div class="item">
                   <a href="themes/images/products/large/f3.jpg" > <img style="width:29%" src="themes/images/products/large/f3.jpg" alt=""/></a>
                   <a href="themes/images/products/large/f1.jpg"> <img style="width:29%" src="themes/images/products/large/f1.jpg" alt=""/></a>
                   <a href="themes/images/products/large/f2.jpg"> <img style="width:29%" src="themes/images/products/large/f2.jpg" alt=""/></a>
                  </div>
                </div>
              <!--  
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a> 
			  -->
              </div>
			  
			 <div class="btn-toolbar">
			  <div class="btn-group">
				<?php $name=$_GET['id'];
				
				  $maxhouseID1=mysqli_query($connect,"select house_id from house where address='$name'");
                  $maxhouseID2=mysqli_fetch_array($maxhouseID1);
                  $maxhouseID3=$maxhouseID2[0];
				  
				  $ratings1=mysqli_query($connect,"select sum(ratings) from houserating where house_id='$maxhouseID3'");
                  $ratings2=mysqli_fetch_array($ratings1);
                  $ratings3=$ratings2[0];
				  
				  $ratings3=$ratings3/5;
				  for($i=0;$i<$ratings3;$i++){
				  ?>
                 
                <span class="btn" ><i  class="icon-star"></i> </span>
              

				<?php }
				
				
				 ?>
                  
                 
			  </div>
             
			</div>
			</div>
            
			<div class="span6">
				<h3><?php 
				$name=$_GET['id'];
				
				 $maxhouseID1=mysqli_query($connect,"select title from house where address='$name'");
                  $maxhouseID2=mysqli_fetch_array($maxhouseID1);
                  $maxhouseID3=$maxhouseID2[0];
				echo $maxhouseID3;
				 ?></h3>
				<h4><?php 
				$name=$_GET['id'];
				
				 $catID1=mysqli_query($connect,"select category_id from house where address='$name'");
                  $catID2=mysqli_fetch_array($catID1);
                  $catID3=$catID2[0];
				  
				  $type1=mysqli_query($connect,"select type from housecategory where category_id='$catID3'");
                  $type2=mysqli_fetch_array($type1);
                  $type3=$type2[0];
				  
				echo $type3."<br>";
				
				 $Allabouthouse1=mysqli_query($connect,"select * from house  where address='$name'");
                  $row=mysqli_fetch_assoc($Allabouthouse1);
				  echo "Offer Type: ".$row['offer']."<br>";
				  echo "Bed Rooms: ".$row['bedrooms']."<br>";
				  echo "Beds in a room: ".$row['num_of_beds']."<br>";
				  echo "Bathrooms: ".$row['num_of_bathrooms']."<br>";
				 ?></h4>
				<hr class="soft"/>
				<form class="form-horizontal qtyFrm">
				  <div class="control-group">
					<label class="control-label"><b><span><?php 	$name=$_GET['id'];
				
				 $maxhouseID1=mysqli_query($connect,"select price from house where address='$name'");
                  $maxhouseID2=mysqli_fetch_array($maxhouseID1);
                  $maxhouseID3=$maxhouseID2[0];
				  echo 'Price of a room'."<br>";
				echo "LKR ".$maxhouseID3;?></b></span></label>
					<div class="controls">
					
					  
					</div>
				  </div>
				</form>
              
				
				<hr class="soft"/>
				<h4><?php echo "Address: <br>".$_GET['id'];?></h4>
				
				<hr class="soft clr"/>
				<h5><?php
				   $name=$_GET['id'];
				
				  $maxhouseID1=mysqli_query($connect,"select house_id from house where address='$name'");
                  $maxhouseID2=mysqli_fetch_array($maxhouseID1);
                  $maxhouseID3=$maxhouseID2[0];
				
				 $cusnic1=mysqli_query($connect,"select nic from customer_host where house_id='$maxhouseID3'");
                  $cusnic2=mysqli_fetch_array($cusnic1);
                  $cusnic3=$cusnic2[0];
				 
				 $result=mysqli_query($connect,"select numofrooms,Indate,outdate from customerbooking where house_id='$maxhouseID3' ");                  echo "Booking Details <br>";
				 
				 while($row=mysqli_fetch_array($result)){
					 echo $row['numofrooms']." room book from ".$row['Indate']."	to ".$row['outdate'];
					 echo "<br>";
				 }
				  
				  
				  $All1=mysqli_query($connect,"select * from customer where nic='$cusnic3'");
                  $row=mysqli_fetch_assoc($All1);

				   echo "<h4>House Owner Details</h4>";
                 echo "Name: ".$row['name']."<br>";
				 echo "NIC: ".$row['nic']."<br>";
				 echo "Address: ".$row['Address']."<br>";
				 echo "Company: ".$row['company']."<br>";
				echo "<h4>Contact Details</h4>";
				 echo "Mobile Phone: ".$row['phone']."<br>";
				  echo "Home Phone: ".$row['homephone']."<br>";
				   echo "Email: ".$row['email']."<br>";
				
					  
				 
				?>
				</h5>
				
                <a class="btn btn-small pull-right" href="#detail">More Details</a><br>
          <?php /*    <h4>Edit Details</h4>
              
               <form  method="post">
               
               <h5>Check In Date</h5>
               <input type="date" name="indate" required placeholder="">
               <h5>Check Out Date</h5>
               <input type="date" name="outdate" required placeholder="">
               <h5>Num of Rooms:</h5>
               <input type="text" name="numofrooms" required placeholder="Num of Rooms"><br>
              
               <input type="submit" name="edit" required value="Edit" class="btn btn-primary"><br>
               </form>
              */
			 ?>
             <h4>Remove Your Booking</h4>
               <form method="post">
                     
                      <input type="submit" name="delete" required value="Remove" class="btn btn-primary">
            
               </form>
			   
               <?php
			    $addressof=$_GET['id'];
				$indateof=$_GET['indate'];
				$outdateof=$_GET['outdate'];
			   if(isset($_POST['delete'])){
				   $All1=mysqli_query($connect,"select * from house where address='$addressof'");
                   $row=mysqli_fetch_assoc($All1);
				   $hid=$row['house_id'];
				   
				   
				   $search_Queryof="Delete from customerbooking  where house_id='$hid' and  Indate='$indateof' and outdate='$outdateof' ";
                   mysqli_query($connect, $search_Queryof); 
			   
			   }
			   
			   
			    if(isset($_POST['deletechc'])){
					$nicof=$_POST['nicde'];
					$pword=$_POST['password'];
					
					$All1=mysqli_query($connect,"select * from house where address='$addressof')");
                   $row=mysqli_fetch_assoc($All1);
				   $hid=$row['house_id'];
				   
				   $nic1=mysqli_query($connect,"select * from customer_host where house_id='$hid')");
                   $nicrow=mysqli_fetch_assoc($nic1);
				   $nic=$nicrow['nic'];
				   
				   $allnic1=mysqli_query($connect,"select * from login where nic='$nic')");
                   $allnic=mysqli_fetch_assoc($allnic1);
				   
				   if(($allnic['nic']==$nicof)&&($allnic['password']==$pword)){
					   
					    $Allofdw=mysqli_query($connect,"select * from customerbooking where house_id='$hid'  and  outdate>curDate()");
                        $rowofdw=mysqli_fetch_assoc($Allofdw); 
						
										 if($rowofdw['house_id']==null){   
										 mysqli_query($connect,"Delete from customer_host where house_id='$hid' ");
										 mysqli_query($connect,"Delete from houseimage where house_id='$hid' ");
										 mysqli_query($connect,"Delete from houserating where house_id='$hid' ");
										 mysqli_query($connect,"Delete from house where house_id='$hid' ");
										 }
										 else{
											 echo '<script language="javascript">';
	                                         echo 'alert("Do not remove house customer waiting for this house!!!")';
	                                         echo '</script>';
											 
										 }
						
				   }
				   	 else {
	  echo '<script language="javascript">';
	  echo 'alert("Invalid Username and Password!!!")';
	  echo '</script>';
	}
				   
				}
			   
			   ?>
                 
				<br class="clr"/>
			<a href="#" name="detail"></a>
			<hr class="soft"/>
			</div>
			
			<div class="span9">
            <ul id="productDetail" class="nav nav-tabs">
              <li class="active"><a href="#home" data-toggle="tab">House Details</a></li>
              
            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade active in" id="home">
			 
              
               <h4>Editorial Reviews</h4>
				<h5>Wifi</h5>
				<p>
				When you're providing free WiFi facility service for the people who are going to stay in your place please ensure that you have marked the service as available.</p>

				<h5>Essentials</h5>
				<p>When you're providing free essentials like soap &amp; towels for the people who are going to stay in your place, please ensure that you have marked the service as available.</p>
				<h5>Hot Water</h5>
				<p>When your places have hot water facility for the people who are going to stay in your place please ensure that you have marked the service as available.</p>

				<h5>TV</h5>
				<h5></h5>
                <p>When your places have TV watching facility for the people who are going to stay in your place please ensure that you have marked the service as available.</p>
                
                <h5>Heat</h5>
				<h5></h5>
                <p>When your places have heaters facility for the people who are going to stay in your place please ensure that you have marked the service as available. 
                <p>
                
                <h5>AC</h5>
				<h5></h5>
                <p>When your places have Air Condition facility for the people who are going to stay in your place please ensure that you have marked the service as available. 
                <p>
                
                <h5>Parking</h5>
				<h5></h5>
                <p>When your places provide parking facility for the people who are going to stay in your place please ensure that you have marked the service as available. 
                <p>
                 
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
               
              </div>
		<div class="tab-pane fade" id="profile">
		<div id="myTab" class="pull-right">
		 
		 <a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>
		</div>
		<br class="clr"/>
		<hr class="soft"/>
		<div class="tab-content">
			<div class="tab-pane" id="listView">
				<div class="row">	  
					<div class="span2">
						<img src="themes/images/products/4.jpg" alt=""/>
					</div>
					<div class="span4">
						<h3>New | Available</h3>				
						<hr class="soft"/>
						<h5>Product Name </h5>
						<p>
						Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
						that is why our goods are so popular..
						</p>
						<a class="btn btn-small pull-right" href="product_details.html">View Details</a>
						<br class="clr"/>
					</div>
					<div class="span3 alignR">
					<form class="form-horizontal qtyFrm">
					<h3> $222.00</h3>
					<label class="checkbox">
						<input type="checkbox">  Adds product to compair
					</label><br/>
					<div class="btn-group">
					  <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
					  <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
					 </div>
						</form>
					</div>
			</div>
			<hr class="soft"/>
			<div class="row">	  
					<div class="span2">
						<img src="themes/images/products/5.jpg" alt=""/>
					</div>
					<div class="span4">
						<h3>New | Available</h3>				
						<hr class="soft"/>
						<h5>Product Name </h5>
						<p>
						Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
						that is why our goods are so popular..
						</p>
						<a class="btn btn-small pull-right" href="product_details.html">View Details</a>
						<br class="clr"/>
					</div>
					<div class="span3 alignR">
					<form class="form-horizontal qtyFrm">
						<h3> $222.00</h3>
						<label class="checkbox">
						<input type="checkbox">  Adds product to compair
						</label><br/>
						<div class="btn-group">
						<a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
						<a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
						</div>
					</form>
					</div>
			</div>
			<hr class="soft"/>
			<div class="row">	  
					<div class="span2">
					<img src="themes/images/products/6.jpg" alt=""/>
					</div>
					<div class="span4">
						<h3>New | Available</h3>				
						<hr class="soft"/>
						<h5>Product Name </h5>
						<p>
						Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
						that is why our goods are so popular..
						</p>
						<a class="btn btn-small pull-right" href="product_details.html">View Details</a>
						<br class="clr"/>
					</div>
					<div class="span3 alignR">
					<form class="form-horizontal qtyFrm">
					<h3> $222.00</h3>
					<label class="checkbox">
						<input type="checkbox">  Adds product to compair
					</label><br/>
				<div class="btn-group">
				  <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
				  <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
				 </div>
						</form>
					</div>
			</div>
			<hr class="soft"/>
			<div class="row">	  
					<div class="span2">
					<img src="themes/images/products/7.jpg" alt=""/>
					</div>
					<div class="span4">
						<h3>New | Available</h3>				
						<hr class="soft"/>
						<h5>Product Name </h5>
						<p>
						Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
						that is why our goods are so popular..
						</p>
						<a class="btn btn-small pull-right" href="product_details.html">View Details</a>
						<br class="clr"/>
					</div>
					<div class="span3 alignR">
						<form class="form-horizontal qtyFrm">
						<h3> $222.00</h3>
						<label class="checkbox">
						<input type="checkbox">  Adds product to compair
						</label><br/>
						<div class="btn-group">
						<a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
						<a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
						</div>
						</form>
					</div>
			</div>
			
			<hr class="soft"/>
			<div class="row">	  
					<div class="span2">
					<img src="themes/images/products/8.jpg" alt=""/>
					</div>
					<div class="span4">
						<h3>New | Available</h3>				
						<hr class="soft"/>
						<h5>Product Name </h5>
						<p>
						Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
						that is why our goods are so popular..
						</p>
						<a class="btn btn-small pull-right" href="product_details.html">View Details</a>
						<br class="clr"/>
					</div>
					<div class="span3 alignR">
						<form class="form-horizontal qtyFrm">
						<h3> $222.00</h3>
						<label class="checkbox">
						<input type="checkbox">  Adds product to compair
						</label><br/>
						<div class="btn-group">
						<a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
						<a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
						</div>
						</form>
					</div>
			</div>
			<hr class="soft"/>
				<div class="row">	  
					<div class="span2">
					<img src="themes/images/products/9.jpg" alt=""/>
					</div>
					<div class="span4">
						<h3>New | Available</h3>				
						<hr class="soft"/>
						<h5>Product Name </h5>
						<p>
						Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
						that is why our goods are so popular..
						</p>
						<a class="btn btn-small pull-right" href="product_details.html">View Details</a>
						<br class="clr"/>
					</div>
					<div class="span3 alignR">
						<form class="form-horizontal qtyFrm">
						<h3> $222.00</h3>
						<label class="checkbox">
						<input type="checkbox">  Adds product to compair
						</label><br/>
						<div class="btn-group">
						<a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
						<a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
						</div>
						</form>
					</div>
			</div>
			<hr class="soft"/>
		</div>
			<div class="tab-pane active" id="blockView">
				<ul class="thumbnails">
					
					<li class="span3">
					  <div class="thumbnail">
						<a href="product_details.html"><img src="themes/images/products/19.jpg" alt=""/></a>
						<div class="caption">
						  <h5>Manicure &amp; Pedicure</h5>
						  <p> 
							Lorem Ipsum is simply dummy text. 
						  </p>
						  <h4 style="text-align:center"><a href=""><input class="btn" type="submit" name="productdetails" value="More Details"  ></i></a> </i></a> <a class="btn btn-primary" >&euro;222.00</a></h4>
						</div>
					  </div>
					</li>
					
					
					
					
				  </ul>
			<hr class="soft"/>
			</div>
		</div>
				<br class="clr">
					 </div>
		</div>
          </div>

	</div>
</div>
</div> </div>
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
		<p class="pull-right">&copy; Software Engineering Project 2017</p>
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
 if(isset($_POST['booknow'])){
	  $indate=$_POST['indate'];
	  $outdate=$_POST['outdate'];
	  $numofrooms=$_POST['numofrooms'];
	  
	  $name=$_GET['id'];
				
				 $maxhouseID1=mysqli_query($connect,"select house_id from house where address='$name'");
                  $maxhouseID2=mysqli_fetch_array($maxhouseID1);
                  $maxhouseID3=$maxhouseID2[0];
				  
				  $cookie_name='userlogindetails';
	            $reg_no= $_COOKIE[$cookie_name];
	  
      $roomcount1=mysqli_query($connect,"select sum(numofrooms) from customerbooking where house_id='$maxhouseID3' and Indate<='$indate' and outdate>='$indate'");
	  
     $roomcount2=mysqli_fetch_array($roomcount1);
     $roomcount3=$roomcount2[0];
	 
	 
	  $roomcountfromoutdate1=mysqli_query($connect,"select sum(numofrooms) from customerbooking where house_id='$maxhouseID3' and Indate<='$outdate' and outdate>='$outdate'");
	  
     $roomcountfromoutdate2=mysqli_fetch_array($roomcountfromoutdate1);
     $roomcountfromoutdate3=$roomcountfromoutdate2[0];
	 
	 
      $bedrooms1=mysqli_query($connect,"select bedrooms from house where house_id='$maxhouseID3' ");
	  
     $bedrooms2=mysqli_fetch_array($bedrooms1);
     $bedrooms3=$bedrooms2[0];
	 
	 $availableroom=$bedrooms3-$roomcount3;
	 
	 $availableroomfromoutdate=$bedrooms3-$roomcountfromoutdate3;
				  
                if(($availableroom>=$numofrooms)&&($availableroomfromoutdate>=$numofrooms)){
				  
	  $search_Query2="INSERT INTO customerbooking   values ('$maxhouseID3','$reg_no','$numofrooms','$indate','$outdate','Confirm') ";
     mysqli_query($connect, $search_Query2); 
	 
				}
				else{
				  echo '<script language="javascript">';
	             echo 'alert("Rooms are Already booked in the select time period!!!")';
	              echo '</script>';	
				}
 }
?>
