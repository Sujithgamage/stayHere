
<?php  include 'dataConnect.php';  ?>


<?php
       
   $msg="";
   if(isset($_POST['upload'])){
	  $reg_no="";
 
      $cookie_name='userlogindetails';
	  $reg_no= $_COOKIE[$cookie_name];
	 
	 $maxhouseID1=mysqli_query($connect,"select max(CAST(house_id AS UNSIGNED)) from house ");
     $maxhouseID2=mysqli_fetch_array($maxhouseID1);
     $maxhouseID3=$maxhouseID2[0];
	 $maxhouseID=$maxhouseID3+1;
	 
	 
	
	   
      $htype=$_POST['htype'];
      $hname=$_POST['hname'];
	  $offertype=$_POST['offertype'];
	  $numofbedrooms=$_POST['numofbedrooms'];
	  $numofbeds=$_POST['numofbeds'];
	  $numbathrooms=$_POST['numbathrooms'];
	  $address=$_POST['address'];
	  $district=$_POST['district'];
	  $rprice=$_POST['rprice'];
	  
	 $housetype1=mysqli_query($connect,"select category_id from housecategory where type='$htype' ");
     $housetype2=mysqli_fetch_array($housetype1);
     $housetype3=$housetype2[0];
	  
	 $ac=$_POST['ac'];
	 $hw=$_POST['hw'];
	 $par=$_POST['par'];
	 $sp=$_POST['sp'];
	 $ess=$_POST['ess'];
	 $heatof=$_POST['he'];
	 $tv=$_POST['tv'];
	 $wifi=$_POST['wifi'];
	 
	 $search_Query1="INSERT INTO house  values ('$maxhouseID','$hname','$offertype','$numofbedrooms','$numofbeds','$numbathrooms','$rprice','$address','$district','$housetype3') ";
     mysqli_query($connect, $search_Query1);
	  
       $search_Query2="INSERT INTO customer_host  values ('$reg_no','$maxhouseID') ";
     mysqli_query($connect, $search_Query2); 
	   
	   if($ac=="Yes"){
		$search_Query3="INSERT INTO house_amenity  values ('$maxhouseID','7') ";
     mysqli_query($connect, $search_Query3); 
	   }
	   
	     if($hw=="Yes"){
		$search_Query3="INSERT INTO house_amenity  values ('$maxhouseID','4') ";
        mysqli_query($connect, $search_Query3); 
	   }
	   if($par=="Yes"){
		$search_Query3="INSERT INTO house_amenity  values ('$maxhouseID','8') ";
        mysqli_query($connect, $search_Query3); 
	   } 
	   
	   if($sp=="Yes"){
		$search_Query3="INSERT INTO house_amenity  values ('$maxhouseID','9') ";
        mysqli_query($connect, $search_Query3); 
	   } 
	   
	    if($ess=="Yes"){
		$search_Query3="INSERT INTO house_amenity  values ('$maxhouseID','3') ";
        mysqli_query($connect, $search_Query3); 
	   }
	   
	    if($heatof=="Yes"){
		$search_Query3="INSERT INTO house_amenity  values ('$maxhouseID','6') ";
        mysqli_query($connect, $search_Query3); 
	   }
	   
	    if($tv=="Yes"){
		$search_Query3="INSERT INTO house_amenity  values ('$maxhouseID','5') ";
        mysqli_query($connect, $search_Query3); 
	   }
	   
	    if($wifi=="Yes"){
		$search_Query3="INSERT INTO house_amenity  values ('$maxhouseID','1') ";
        mysqli_query($connect, $search_Query3); 
	   }
	   
	   
	   $ab=$_FILES['image']['name'];
      $target="themes/images/products/".basename($_FILES['image']['name']);
      
     
      $image=$_FILES['image']['name'];
      
      
      
	 $maximageId1=mysqli_query($connect,"select max(CAST(image_id AS UNSIGNED)) from houseimage");
     $maximageId2=mysqli_fetch_array($maximageId1);
     $maximageId3=$maximageId2[0];
	  $maximageId3=$maximageId3+1;
      $sql="Insert into houseimage  values ('$maximageId3','$image','$maxhouseID')";
      mysqli_query($connect,$sql);
      
      if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
          $msg="Image uploaded successfully";
      }else{
          $msg="There was a problem uploading image";
      }
	   
  }
  
        ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Rent Your House</title>
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
		<h2>Rent Your House</h2>
		  
    </div>
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
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		<div class="well well-small"><a id="myCart" href="account.php"><img src="themes/images/ico-cart.png" alt="cart">Your Booking Details  </a></div>
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
		<li class="active">Rent House</li>
    </ul>
	<h3>Enter Your House Details</h3>	
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
	<form class="form-horizontal"  method="post" action="RentHouse.php" enctype="multipart/form-data">
		<h4>About House</h4>
		<div class="control-group">
		<label class="control-label">Select House Category <sup>*</sup></label>
		<div class="controls">
		
        <select  name="htype">
			 <?php
								$sql1="Select type from housecategory";
								$resu=$connect->query($sql1);
								while($row=$resu->fetch_assoc()){
								echo '<option>'.$row['type'].'</option>';
								}
								?>
		</select> 
		</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputFname1">House name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputFname1" required name="hname"  placeholder="House Name">
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="inputLnam">Offer Type <sup>*</sup></label>
			<div class="controls">
            <select name="offertype">
			  <option></option>
			  <option>Full House</option>
			   <option>Part of House</option>
			</select>
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="input_email">Number of Bed Rooms<sup>*</sup></label>
		<div class="controls">
		  <input type="text" id="input_email" required name="numofbedrooms" placeholder="Number of Bed Rooms">
		</div>
	  </div>	  
	<div class="control-group">
		<label class="control-label" for="inputPassword1">Number of Beds  <sup>*</sup></label>
		<div class="controls">
		  <input type="text" id="inputPassword1" required name="numofbeds" placeholder="Number of Beds in a Room ">
		</div>
	  </div>	  
		<div class="control-group">
		<label class="control-label">Number of Bath Rooms <sup>*</sup></label>
		<div class="controls">
		  <input type="text" name="numbathrooms" required  placeholder="Number of Bath Rooms">
		</div>
	  </div>
<div class="control-group">
		<label class="control-label">Address<sup>*</sup></label>
		<div class="controls">
		  <input type="text" name="address" required  placeholder="Address">
		</div>
	  </div>
      
      <div class="control-group">
		<label class="control-label">District<sup>*</sup></label>
		 <div class="controls">
         <select  name="district">
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
			<option>Kegall</option>
            
            </select>
            </div>
	  </div>
      
      
      <div class="control-group">
      <input type="hidden" required  name="size" id = "driver" value="1000000"><br>
			<label class="control-label" for="city">House Image<sup>*</sup></label>
			<div class="controls">
              
			   <input type="file" name="image"> 
			</div>
		</div>
	
<div class="control-group">
			<label class="control-label" for="city">Room Price<sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="city" required name="rprice" placeholder="Price(LKR)"/> 
			</div>
		</div>
		<h4>House Amenities</h4>
		
		
		<div class="control-group">
		      <label class="control-label">Air Condition<sup>*</sup></label>
		      <div class="controls">
		        <fieldset   class="span1">
                     yes<input required  type="radio" name="ac" value="Yes">
                     No<input  required type="radio" name="ac" value="No">      
                </fieldset>
		    </div>
		</div>
        
		<div class="control-group">
		     <label class="control-label">Hot Water<sup>*</sup></label>
		      <div class="controls">
		          <fieldset  class="span1">
                     yes<input required type="radio" name="hw" value="Yes"> 
                     No<input required type="radio" name="hw" value="No">      
                </fieldset>
		     </div>
		</div>
		
		<div class="control-group">
		      <label class="control-label">Parking<sup>*</sup></label>
		          <div class="controls">
		              <fieldset  class="span1">
                     yes<input required type="radio" name="par" value="Yes"> 
                     No<input required type="radio" name="par" value="No">      
                     </fieldset>
		        </div>
		</div>
        
        <div class="control-group">
		<label class="control-label">Swimming Pool<sup>*</sup></label>
		      <div class="controls">
		         <fieldset  class="span1">
                     yes<input required type="radio" name="sp" value="Yes"> 
                     No<input  required type="radio" name="sp" value="No">      
                </fieldset>
		      </div>
		</div>
        
        <div class="control-group">
		     <label class="control-label">Essentials<sup>*</sup></label>
		         <div class="controls">
		            <fieldset  class="span1">
                     yes<input required type="radio" name="ess" value="Yes"> 
                     No<input required type="radio" name="ess" value="No">     
                </fieldset>
		      </div>
		</div>
        
       <div class="control-group">
		     <label class="control-label">Heat<sup>*</sup></label>
		         <div class="controls">
		            <fieldset  class="span1">
                     yes<input required type="radio" name="he" value="Yes"> 
                     No<input required type="radio" name="he" value="No">     
                </fieldset>
		      </div>
		</div>
         <div class="control-group">
		    <label class="control-label">TV<sup>*</sup></label>
		       <div class="controls">
		        <fieldset  class="span1">
                      yes<input required type="radio" name="tv" value="Yes"> 
                     No<input required type="radio" name="tv" value="No">       
                </fieldset>
			</div>
	  </div>
	
     <div class="control-group">
		    <label class="control-label">Wi-Fi<sup>*</sup></label>
		       <div class="controls">
		        <fieldset  class="span1">
                      yes<input required type="radio" name="wifi" value="Yes"> 
                     No<input required type="radio" name="wifi" value="No">      
                </fieldset>
			</div>
	  </div>
		
		
		 
		 
		
	<p><sup>*</sup>Required field	</p>
	
	<div class="control-group">
			<div class="controls">
				<input type="hidden" name="email_create" value="1">
				<input type="hidden" name="is_new_customer" value="1">
                
				<input class="btn btn-large btn-success" type="submit" value="Rent House" name="upload" />
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
