<?php  include 'dataConnect.php';  ?>
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
		<div class="form-inline navbar-search" >
		<h3>Customer Details</h3>
    </div>
    <ul id="topMenu" class="nav pull-right">
     <li class=""><a href="index.php">Home</a></li>
	 <li class=""><a href="account.php">Account</a></li>
	 <li class=""><a href="RentHouse.php">Rent House</a></li>
	 <li class=""><a href="rcontact.php">Contact</a></li>
	 <li class="">
	
	<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
		  <div class="modal-header">

			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
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
		<div class="well well-small"><a id="myCart"><img src="themes/images/ico-cart.png" alt="cart">Your Booking </a></div>
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
						<li class="subMenu open"><a> Appartment</a>
				<ul>
				<li><a><i class="icon-chevron-right"></i>With AC </a></li>
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
		<li class="active">Account</li>
    </ul>
	<h3>See Your Details<a href="index.php" class="btn btn-large pull-right"><i class="icon-arrow-left"></i>Home </a></h3>	
	<hr class="soft"/>
	<table class="table table-bordered">
		<tr><th>Change Password</th></tr>
		 <tr> 
		 <td>
			<form class="form-horizontal" method="post" name="myForm">
				<div class="control-group">
				  <label class="control-label" for="inputUsername">NIC</label>
				  <div class="controls">
					<input type="text" name="nic"  required id="inputUsername" placeholder="National Identity Number">
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="inputPassword1">Password</label>
				  <div class="controls">
					<input type="password" name="opword" required id="inputPassword1" placeholder="Password">
				  </div>
				</div>
                <div class="control-group">
				  <label class="control-label" for="inputPassword1">New Password</label>
				  <div class="controls">
					<input type="password" name="npword" required id="inputPassword1" placeholder="New Password">
				  </div>
				</div>
                 <div class="control-group">
				  <label class="control-label" for="inputPassword1">Confirm Password</label>
				  <div class="controls">
					<input type="password" name="cpword" required id="inputPassword1" placeholder="Confirm Password">
				  </div>
				</div>
				<div class="control-group">
				  <div class="controls">
					<button type="submit" name="change"  class="btn">Change Password</button>
				  </div>
				</div>
				<div class="control-group">
					<div class="controls">
					
					</div>
				</div>
			</form>
		  </td>
		  </tr>
	</table>		
			
	<table class="table table-bordered">
              <thead>
                <tr>
                 <th>Image</th>
                  <th>Title</th>
                  <th>Offer</th>
                  <th>Bedrooms</th>
				  <th>Beds</th>
                  <th>Bathrooms</th>
                  <th>Price</th>
                  <th>Address</th>
				</tr>
              </thead>
              <tbody>
                <?php
      $reg_no="";
 
      $cookie_name='userlogindetails';
	  $reg_no= $_COOKIE[$cookie_name];
	  echo "<h4>You Rent House Details</h4>";
	  
	 $maxhouseid1=mysqli_query($connect,"select max(CAST(house_id AS UNSIGNED)) from house");
     $maxhouseid2=mysqli_fetch_array($maxhouseid1);
     $maxhouseid=$maxhouseid2[0];
	 
	 for($i=1;$i<=$maxhouseid;$i++){
		 
     $customerNic1=mysqli_query($connect,"select nic from customer_host where house_id='$i'");
     $customerNic2=mysqli_fetch_array($customerNic1);
     $customerNic=$customerNic2[0];
	 
	 
	 
	 if($customerNic==$reg_no){
		 
	 $imageref1=mysqli_query($connect,"select imageref from houseimage where house_id='$i'");
     $imageref2=mysqli_fetch_array($imageref1);
     $imageref=$imageref2[0];
	 
      $hosthouse1=mysqli_query($connect,"select * from house  where house_id='$i'");
      $row=mysqli_fetch_assoc($hosthouse1);
	  
      ?>
                <tr>
                  <td> <a href="products.php?id=<?php  echo $row['address'];?>"><img width="60"  src="<?php echo "themes/images/products/".$imageref; ?>" alt=""/></a> </td>
                  <td><?php echo $row['title'];?></td>
                  <td><?php echo $row['offer'];?></td>
				  <td><?php echo $row['bedrooms'];?></td>
                  <td><?php echo $row['num_of_beds'];?></td>
                  <td><?php echo $row['num_of_bathrooms'];?></td>
                  <td><?php echo $row['price'];?></td>
                  <td><?php echo $row['address'];?></td>
                  <td><a href="EditOwners.php?id=<?php  echo $row['address'];?> ">Edit</a></td>
                </tr>
                <?php }
				}?>
				</tbody>
            </table>
		
		
            <table class="table table-bordered">
			    <thead>
                <tr>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Bedrooms</th>
				  <th>Beds</th>
                  <th>Bathrooms</th>
                  <th>Price</th>
                  <th>Address</th>
                  <th>Check In</th>
                  <th>Check Out</th>
                  <th>Booked Room</th>
                  <th>Total Price</th>
				</tr>
              </thead>
              <tbody>
                <?php
      $reg_no="";
 
      $cookie_name='userlogindetails';
	  $reg_no= $_COOKIE[$cookie_name];
	  echo "<h4>Your  Booking Details</h4>";
	  
	 $maxhouseid1=mysqli_query($connect,"select max(CAST(house_id AS UNSIGNED)) from house");
     $maxhouseid2=mysqli_fetch_array($maxhouseid1);
     $maxhouseid=$maxhouseid2[0];
	 
	 for($i=1;$i<=$maxhouseid;$i++){
		 
     $customerNic1=mysqli_query($connect,"select nic from customerbooking where house_id='$i' and nic='$reg_no'");
     $customerNic2=mysqli_fetch_array($customerNic1);
     $customerNic=$customerNic2[0];
	 
	 
	 
	 if($customerNic!=null){
		$imageref1=mysqli_query($connect,"select imageref from houseimage where house_id='$i'");
        $imageref2=mysqli_fetch_array($imageref1);
        $imageref=$imageref2[0];
		 
      $hosthousefor=mysqli_query($connect,"SELECT * FROM `house` where house_id='$i'");
      $housedetails = mysqli_fetch_assoc($hosthousefor);
	  
	  
	  
	 $hosthousefortest=mysqli_query($connect,"select * from customerbooking where nic='$reg_no' and house_id='$i'");
	   while($row = mysqli_fetch_assoc($hosthousefortest)) {
		 
		 $inda=$row['Indate'];
		 $ouda=$row['outdate'];
		$diif1=mysqli_query($connect,"Select DATEDIFF('$ouda','$inda') AS DateDiff");
        $diif2=mysqli_fetch_array($diif1);
        $diif=$diif2[0];
		   
		   $totalprice=($housedetails['price'])*($row['numofrooms'])*$diif;
		  
      ?>
      
                <tr>
                  <td> <a href="bookingproducts.php?id=<?php  echo $housedetails['address'];?>"><img width="60" src="<?php echo "themes/images/products/".$imageref; ?>" alt=""/></a></td>
                  <td><?php echo $housedetails['title'];?></td>
				  <td><?php echo $housedetails['bedrooms'];?></td>
                  <td><?php echo $housedetails['num_of_beds'];?></td>
                  <td><?php echo $housedetails['num_of_bathrooms'];?></td>
                  <td><?php echo $housedetails['price'];?></td>
                  <td><?php echo $housedetails['address'];?></td>
                   <td><?php echo $row['Indate'];?></td>
                  <td><?php echo $row['outdate'];?></td>
                  <td><?php echo $row['numofrooms'];?></td>
                  <td><?php echo $totalprice;?></td>
                   <td><a href="EditCustomer.php?id=<?php  echo $housedetails['address'];?> & indate=<?php  echo $row['Indate'];?>& outdate=<?php  echo $row['outdate'];?> ">Edit</a></td>
                </tr>
                <?php } }
				}?>
				</tbody>
			</table>
			
			<table class="table table-bordered">
			 <tr><th><h4>Personal Details </h4></th></tr>
			 <tr> 
			 <td>
				<div class="form-horizontal">
				<?php
				 $customerdetails=mysqli_query($connect,"select * from customer where nic='$reg_no'");
	             $rowof = mysqli_fetch_assoc($customerdetails);
				 
				 echo "Name: ".$rowof['name']."<br>";
				 echo "NIC: ".$rowof['nic']."<br>";
				 echo "Date Of Birth: ".$rowof['dateofbirth']."<br>";
				 echo "Company: ".$rowof['company']."<br>";
				 echo "About: ".$rowof['description']."<br>";
				?> 
				
				</div>				  
			  </td>
			  </tr>
            </table>	
            
            <table class="table table-bordered">
			 <tr><th><h4>Contact Details </h4></th></tr>
			 <tr> 
			 <td>
				<div class="form-horizontal">
				<?php
				 $customerdetails=mysqli_query($connect,"select * from customer where nic='$reg_no'");
	             $rowof = mysqli_fetch_assoc($customerdetails);
				 
				 echo "Email: ".$rowof['email']."<br>";
				 echo "Mobile Phone: ".$rowof['phone']."<br>";
				 echo "Home: ".$rowof['homephone']."<br>";
				 echo "Address: ".$rowof['Address']."<br>";
				 echo "Postal Code: ".$rowof['postalcode']."<br>";
				?> 
				
				</div>				  
			  </td>
			  </tr>
            </table>		
	<a href="index.php" class="btn btn-large"><i class="icon-arrow-left"></i> Home </a>
	<a href="index.php" class="btn btn-large pull-right">Home<i class="icon-arrow-right"></i></a>
	
</div>
</div></div>
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
if(isset($_POST['change'])){
	  $nic=$_POST['nic'];
	  $opword=$_POST['opword'];
	  $npword=$_POST['npword'];
	  $cpword=$_POST['cpword'];
	 
	  $Allaboutlogin1=mysqli_query($connect,"select * from login  where nic='$nic'");
      $row=mysqli_fetch_assoc($Allaboutlogin1); 
				  
	if($row['password']==$opword){
	  if( $npword==$cpword){
		  
     $search_Query2="Update login  set password='$npword' where  nic='$nic' ";
     mysqli_query($connect, $search_Query2);
		 echo '<script language="javascript">';
	             echo 'alert("Password Change Successfully!!!")';
	              echo '</script>';
		  
	  }
	  else{
		           echo '<script language="javascript">';
	             echo 'alert("New Password and Confirm Password are not match!!!")';
	              echo '</script>';	 
	  }
	}
	else{
		 echo '<script language="javascript">';
	             echo 'alert("Invalid Username Or Password!!!")';
	              echo '</script>';
		
	}
	  
	  
}

?>