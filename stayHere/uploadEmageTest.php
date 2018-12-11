
<?php
       
   $msg="";
   if(isset($_POST['upload'])){
      $ab=$_FILES['image']['name'];
      $target="upload/".basename($_FILES['image']['name']);
      
     
      $image=$_FILES['image']['name'];
      
     
      
      if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
          $msg="Image uploaded successfully";
      }else{
          $msg="There was a problem uploading image";
      }
      
       
  }
  
        ?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
    <h3>Upload Image for Driver</h3>
       
        <title>Images Upload</title>
        
    </head>
    <body>
        
            <form method="post" action="uploadEmageTest.php" enctype="multipart/form-data">
           
                <input type="hidden" required  name="size" id = "driver" value="1000000"><br>
            <div>
                <input type="file" name="image"> <br>
                
            </div>
            
            <div>
              <br>  <input type="submit" id = "driver" name="upload" value="upload image">
            </div>
        </form>
        
      
    </body>
