<?php

include 'db.php';
session_start();
$user_id = $_SESSION['user_id'];
$sm='';                                                                                                                                                             
if(isset($_POST['update_profile']) )
{
   $update_fname =  $_POST['update_fname'];
   $update_lname = $_POST['update_lname'];
   $update_email =  $_POST['update_email'];
   $update_age =  $_POST['update_age'];
   $update_mobile_num =  $_POST['update_mobile_num'];
   $update_dob =  $_POST['update_dob'];
   $update_gender =  $_POST['update_gender'];
   $update_ws =  $_POST['update_ws'];
   $update_street =  $_POST['update_street'];
   $update_city =  $_POST['update_city'];
   $update_state =  $_POST['update_state'];
   $update_country =  $_POST['update_country'];
   $update_pin_code =  $_POST['update_pin_code'];
   $update_height = $_POST['update_height'];
   $update_weight = $_POST['update_weight'];
   $update_shirt = $_POST['update_shirt'];
   $update_t_shirt = $_POST['update_t_shirt'];
   $update_jeans = $_POST['update_jeans'];
   $update_footwear = $_POST['update_footwear'];
   $update_haircolor = $_POST['update_haircolor'];
   $update_eyecolor = $_POST['update_eyecolor'];
   $update_skincolor = $_POST['update_skincolor'];
   $update_top_dress_size = $_POST['update_top_dress_size'];
   
   $update_select_platform = $_POST['update_select_platform'];

  $update_apply=$_POST['update_apply'];
  $uap=implode(",",$update_apply);
  $modeling_opportunity=implode(",",$_POST['modeling_opportunity']);

  $update_image = $_FILES['update_image']['name'];
  $update_image_size = $_FILES['update_image']['size'];
  $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
  $update_image_folder = 'uploaded_img/'.$update_image;
  



  if($update_image_folder != "")
 
{
   move_uploaded_file($update_image_tmp_name, $update_image_folder);

  
         $sql =mysqli_query($conn, "UPDATE `signup` SET fname = '$update_fname',lname = '$update_lname', email = '$update_email',age = '$update_age',DOB='$update_dob',mobile_num='$update_mobile_num',
         website ='$update_ws',gender='$update_gender',street='$update_street',city='$update_city',state='$update_state',country='$update_country',pin_code='$update_pin_code',
         height='$update_height',weight='$update_weight',shirt='$update_shirt',t_shirt='$update_t_shirt',jeans='$update_jeans',haircolor='$update_haircolor',eyecolor='$update_eyecolor',
         skincolor='$update_skincolor',footwear='$update_footwear',top_dress_size='$update_top_dress_size',select_platform='$update_select_platform',apply='$uap',modeling_opportunity='$modeling_opportunity',
         img = '$update_image'
         WHERE id = '$user_id'") or die('query failed');
}
    else
    {
      $sql =mysqli_query($conn, "UPDATE `signup` SET fname = '$update_fname',lname = '$update_lname', email = '$update_email',age = '$update_age',DOB='$update_dob',mobile_num='$update_mobile_num',
      website ='$update_ws',gender='$update_gender',street='$update_street',city='$update_city',state='$update_state',country='$update_country',pin_code='$update_pin_code',
      height='$update_height',weight='$update_weight',shirt='$update_shirt',t_shirt='$update_t_shirt',jeans='$update_jeans',haircolor='$update_haircolor',eyecolor='$update_eyecolor',
      skincolor='$update_skincolor',footwear='$update_footwear',top_dress_size='$update_top_dress_size',select_platform='$update_select_platform',apply='$uap',modeling_opportunity='$modeling_opportunity'
      WHERE id = '$user_id'") or die('query failed');

    }
      
     
      }
    


?>

<!DOCTYPE html>
<html lang="en">
<head>

  <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
   <title>Update profile</title>

   <!-- custom css file link  -->
   <style media="screen">
	*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border: none;
   text-decoration: none;
	}
	body{
    background-color: #080710;
	}
	label{
		color:#B4121E;
		font-weight:600px;
	}
	.message{
		color:#14C42E ;
	}
	.pro_img{
		height: 300px;
		width: 300px;
		background-color:#BEBCB1;
		border: 2px solid red;
		border-radius: 50%;
		margin-bottom:80px;
		margin-top:50px;
		
	}
	input{
		margin:10px;
	}
    span{
        color:#1FBEE5 ;
    }
   @media only screen and (max-width: 768px) {
  /* For mobile phones: */
  [class*="col-"] {
    width: 100%;
  }
}


   </style>

</head>
<body>
 <div class="container">
    
<div class="update-profile">

   <?php

      $select = mysqli_query($conn, "SELECT * FROM `signup` WHERE id = '$user_id' and select_models =1") or die('query failed');
      
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>

   <form action="" method="post" enctype="multipart/form-data">
     <div class="pro_img">
      <?php
         if($fetch['img'] == ''){

            echo '<img src="images/default-avatar.png" style="height:300px;width: 300px;border-radius: 50%;">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['img'].'"style="height:300px;width: 300px;border-radius: 50%;">';
         }
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
      ?>
	</div>
    <h1 style="color:#fff;">Edit Model Profile Page<i class='fas fa-edit' style='font-size:48px;color:#0C5263 '></i></h1>
      <div class="container">
		<div class="row"> 
         <div class="col-md-12">
            <label>update your Profile pic :</label>
            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box"><br><br>
         </div>
         
         <div class="col-md-6">
            <label>FirstName</label>
            <input type="text" name="update_fname" value="<?php echo $fetch['fname']; ?>" class="form-control box">

            <label >Age</label>
			   <input type="text" class="form-control" placeholder="Enter Age" id="age" name="update_age" value="<?php echo $fetch['age']; ?>">

        	<label for="">Mobile No</label>
			<input type="text" class="form-control" id="mob" name="update_mobile_num" placeholder="Enter Mobile No" value="<?php echo $fetch['mobile_num']; ?>">

	        <label for="username">Your Blog or Website URL</label>
			<input type="text" class="form-control" value="<?php echo $fetch['website']; ?>" placeholder="https//www.website.com" id="website" name="update_ws">
			
         </div>

         <div class="col-md-6">
			   <label>LastName</label>
            <input type="text" name="update_lname" value="<?php echo $fetch['lname']; ?>" class="form-control box">
			
            <label>your email :</label>
			   <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" class="form-control box">
			   
			   <label for="">DOB</label>
			<input type="date" class="form-control" placeholder="Enter Date" id="date" name="update_dob" value="<?php echo $fetch['DOB']; ?>">
			
			 <label>Previous Model Experience :</label>
        <input type="text" name="previous_modelexperience" value="<?php echo $fetch['previous_modelexperience']; ?>" placeholder="Model Experience" class="form-control" required>
       
         </div>
         </div>
			<div class="city form-check-inline">
			<label for="un">Address</label>
			<input type="text" class="form-control" placeholder="Street Address" id="sa" name="update_street" value="<?php echo $fetch['street']; ?>" style="width:100%;">
			<input type="text" class="form-control" placeholder="City" id="city" name="update_city" value="<?php echo $fetch['city']; ?>" style="width:40%;">
			<input type="text" class="form-control" placeholder="State" id="state" name="update_state" value="<?php echo $fetch['state']; ?>" style="width:40%;">
			<input type="text" class="form-control" placeholder="Country" id="country" name="update_country" value="<?php echo $fetch['country']; ?>" style="width:40%;">
			<input type="text" class="form-control" placeholder="Pin Code" id="pin_code" name="update_pin_code" value="<?php echo $fetch['pin_code']; ?>"style="width:40%;">
			</div>
			
			<div class="col-md-12">
			<label>Gender:</label>
            <div class="form-check-inline">
            <input type="radio" class="form-check-input-inline" id="update_male" name="update_gender" value="male"<?php echo ($fetch['gender'] =='male')?'checked':'' ?> style="height: 25px;width:25px;"> 
             <span class="form-check-label" >Male</span>
            <input type="radio" class="form-check-input-inline" id="update_female" name="update_gender" value="female"<?php echo ($fetch['gender'] =='female')?'checked':'' ?> style="height:25px;width:25px;">   
             <span class="form-check-label" >Female</span>
         </div>

     <!------------------------- Models-------------- -->

        <div class="row">
            <div class="col-md-6">
            <label>Height :</label>
            <input type="text" class="form-control" id="height" name="update_height" value="<?php echo $fetch['height']; ?>" placeholder="Enter Your Height"> 
            <label>Shirt</label>
            <input type="text" class="form-control" id="shirt" name="update_shirt" value="<?php echo $fetch['shirt']; ?>" placeholder="Enter Shirt Size">
            <label>Jeans</label>
            <input type="text" class="form-control" id="jeans" name="update_jeans" value="<?php echo $fetch['jeans']; ?>" placeholder="Enter Jeans Size" >
            <label>FootWear</label>
            <input type="text" class="form-control" id="footwear" name="update_footwear" value="<?php echo $fetch['footwear']; ?>" placeholder="Enter FootWear Size" >
            <label>Hair Color</label>
            <input type="text" class="form-control" id="haircolor" name="update_haircolor" value="<?php echo $fetch['haircolor']; ?>" placeholder="Enter Hair Color">
           
            <label> Select Platform :</label>
               <label >PlatForm :</label>
			<select class="browser-default custom-select" name="update_select_platform">
			   <option value="Instagram" <?php if($fetch['select_platform'] == 'Instagram'){echo 'selected="selected"';}?>>Instagram</option>
                <option value="Facebook" <?php if($fetch['select_platform'] == 'Facebook'){echo 'selected="selected"';}?>>Facebook</option>
                <option value="Twitter" <?php if($fetch['select_platform'] == 'Twitter'){echo 'selected="selected"';}?>>Twitter</option>
                <option value="Linkedin" <?php  if($fetch['select_platform'] == 'Linkedin'){echo 'selected="selected"';}?>>Linkedin</option>
             </select>
             <br>
            </div>
            
        <div class="col-md-6">
            <label>Weight :</label>
            <input type="text" class="form-control" id="weight" name="update_weight" value="<?php echo $fetch['weight']; ?>" placeholder="Enter Your Weight"> 
            <label>T-Shirt</label>
            <input type="text" class="form-control" id="t-shirt" name="update_t_shirt" value="<?php echo $fetch['t_shirt']; ?>" placeholder="Enter T-Shirt Size">
            <label>Top</label>
            <input type="text" class="form-control" id="top_dress" name="update_top_dress_size" value="<?php echo $fetch['top_dress_size']; ?>" placeholder="Enter Top Size">
            <label>Skin Color</label>
            <input type="text" class="form-control" id="skincolor" name="update_skincolor" value="<?php echo $fetch['skincolor']; ?>" placeholder="Enter Skin Color">

            <label>Eye Color</label>
            <input type="text" class="form-control" id="eyecolor" name="update_eyecolor" value="<?php echo $fetch['eyecolor']; ?>" placeholder="Enter Eye Color">
            
            <label>Fashion District NW events before? :</label> 
            	<select class="form-control" name="update_event">
			   <option value="Yes" <?php if($fetch['event'] == 'Yes'){echo 'selected="selected"';}?>>Yes</option>
                <option value="No" <?php if($fetch['event'] == 'No'){echo 'selected="selected"';}?>>No</option>
             </select>
            <br>
        </div>
    </div>

     <label>What Kind Of You Want To Apply :</label>
         <div class="col-md-12 age form-check-inline">
               <?php  $uapply = explode(",", $fetch['apply']); ?>
            <input type="checkbox" class="form-control" id="runway" name="update_apply[]" value="runway"<?php if(in_array("runway", $uapply)){ echo " checked=\"checked\""; } ?>><span>Runway</span>
            <input type="checkbox" class="form-control" id="commercial" name="update_apply[]" value="commercial"<?php if(in_array("commercial", $uapply)){ echo " checked=\"checked\""; } ?>><span for="">Commercial</span>
            <input type="checkbox" class="form-control" id="fashion" name="update_apply[]" value="Fashion"<?php if(in_array("Fashion", $uapply)){ echo " checked=\"checked\""; } ?>><span for="">Fashion</span>
            <input type="checkbox" class="form-control" id="paint" name="update_apply[]" value="paint"<?php if(in_array("Paint", $uapply)){ echo " checked=\"checked\""; } ?>><span for="">Paint</span>
        </div>

          <label>Modeling opportunity interest?  (Click all that apply)</label>
        <div class="col-md-12">
              <?php  $oppur = explode(",", $fetch['modeling_opportunity']); 
             // print_r($oppur); exit;
              ?>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" class="custom-control-input" id="defaultInline1" name="modeling_opportunity[]" value="Fashion Show"<?php if(in_array("Fashion Show",$oppur)){ echo " checked=\"checked\""; } ?>>
          <label class="custom-control-label" for="defaultInline1">Fashion Show Model </label>
        </div>
        
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" class="custom-control-input" id="defaultInline2" name="modeling_opportunity[]" value="Fashion is ART"<?php if(in_array("Fashion is ART",$oppur)){ echo " checked=\"checked\""; } ?>>
          <label class="custom-control-label" for="defaultInline2">Fashion is ART Model </label>
        </div>
        
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" class="custom-control-input" id="defaultInline3" name="modeling_opportunity[]" value="Fashion District"<?php if(in_array("Fashion District",$oppur)){ echo " checked=\"checked\""; } ?>>
          <label class="custom-control-label" for="defaultInline3">Modeling outside of Fashion </label>
        </div> 
        </div>
       
       <input type="submit" class="btn btn-success" value="update_profile" name="update_profile" >
      <a href="mhome.php" class="btn btn-primary">Go back</a>
	</div>
   </form>

</div>
</div>
</body>
</html>