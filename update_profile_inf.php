<?php

include 'db.php';
session_start();
$user_id = $_SESSION['user_id'];

if(isset($_POST['update_profile'])){

   $update_fname = $_POST['update_fname'];
   $update_lname = $_POST['update_lname'];
   $update_email =  $_POST['update_email'];
   $update_age =  $_POST['update_age'];
   $update_mobile_num = $_POST['update_mobile_num'];
   $update_dob =  $_POST['update_dob'];
   $update_gender =  $_POST['update_gender'];
   $update_ws =  $_POST['update_ws'];
   $update_street =  $_POST['update_street'];
   $update_city =  $_POST['update_city'];
   $update_state =  $_POST['update_state'];
   $update_country =  $_POST['update_country'];
   $update_pin_code =  $_POST['update_pin_code'];
   $update_media_id =  $_POST['update_media_id'];
   $update_currency = $_POST['update_currency'];
   $update_image = $_FILES['update_image']['name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_folder = 'uploaded_img/'.$update_image;



   if($update_image_folder != "")
 
   {
      move_uploaded_file($update_image_tmp_name, $update_image_folder);
   mysqli_query($conn, "UPDATE `signup` SET fname = '$update_fname', lname = '$update_lname', email = '$update_email', age = '$update_age',mobile_num='$update_mobile_num',website ='$update_ws',gender='$update_gender',street='$update_street',city='$update_city',state='$update_state',country='$update_country',pin_code='$update_pin_code',media_id='$update_media_id',currency='$update_currency',img='$update_image' WHERE id = '$user_id'") or die('query failed');
   }else{
      mysqli_query($conn, "UPDATE `signup` SET fname = '$update_fname', lname = '$update_lname', email = '$update_email', age = '$update_age',mobile_num='$update_mobile_num',website ='$update_ws',gender='$update_gender',street='$update_street',city='$update_city',state='$update_state',country='$update_country',pin_code='$update_pin_code',media_id='$update_media_id',currency='$update_currency' WHERE id = '$user_id'") or die('query failed');
   }
  
   

 


}

?>

<!DOCTYPE html>
<html lang="en">
<head>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
   <title>update profile</title>

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
   span{
        color:#1FBEE5 ;
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
   </style>

</head>
<body>
 <div class="container">
<div class="update-profile">

   <?php
      $select = mysqli_query($conn, "SELECT * FROM `signup` WHERE id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>

<form action="" method="post" enctype="multipart/form-data">

   <div class="pro_img">
      <?php
         if($fetch['img'] == ''){
            echo '<img src="uploaded_img/profileicon.png" style="height:300px;width: 300px;border-radius: 50%;">';
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
   <h1 style="color:#fff;">Edit Influencer Profile Page<i class='fas fa-edit' style='font-size:48px;color:#0C5263 '></i></h1>
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
			<input type="text" class="form-control" value="<?php echo $fetch['website']; ?>" placeholder="https//www.website.com" id="website" name="update_ws" value="<?php echo $fetch['mobile_num']; ?>">
			
         </div>

        	 <div class="col-md-6">
			  <label>LastName</label>
            <input type="text" name="update_lname" value="<?php echo $fetch['lname']; ?>" class="form-control box">
			
                <label>your email :</label>
			   <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" class="form-control box">
			   
			   <label for="">DOB</label>
			<input type="date" class="form-control" placeholder="Enter Date" id="date" name="update_dob" value="<?php echo $fetch['DOB']; ?>">
			
			 <label>My Audience is Mainly :</label>
			  <select name="audience" id="aud" class="browser-default custom-select">
			   <option value="">select</option>
                <option value="Men"<?php if($fetch['audience'] == 'Men'){echo 'selected="selected"';}?>>Male</option>
                <option value="Women"<?php if($fetch['audience'] == 'Women'){echo 'selected="selected"';}?>>Female</option>
                 <option value="Both"<?php if($fetch['audience'] == 'Both'){echo 'selected="selected"';}?>>Other</option>
              </select>
			  </div>

       </div>
			<div class="city form-check-inline">
			<label for="username">Address</label>
			<input type="text" class="form-control" placeholder="Street Address" id="sa" name="update_street" value="<?php echo $fetch['street']; ?>" style="width:100%;">
			<input type="text" class="form-control" placeholder="City" id="city" name="update_city" value="<?php echo $fetch['city']; ?>" style="width:40%;">
			<input type="text" class="form-control" placeholder="State" id="state" name="update_state" value="<?php echo $fetch['state']; ?>" style="width:40%;">
			<input type="text" class="form-control" placeholder="Country" id="country" name="update_country" value="<?php echo $fetch['country']; ?>" style="width:40%;">
			<input type="text" class="form-control" placeholder="Pin Code" id="pin_code" name="update_pin_code" value="<?php echo $fetch['pin_code']; ?>" style="width:40%;">
			</div>
			
			<div class="col-md-12">
			<label>Gender:</label>
            <div class="form-check-inline">
            <input type="radio" class="form-check-input-inline" id="male" name="update_gender" value="male"<?php echo ($fetch['gender'] =='male')?'checked':'' ?> style="height: 25px;width:25px;"> 
             <span class="form-check-label" >Male</span>
            <input type="radio" class="form-check-input-inline" id="female" name="update_gender" value="female"<?php echo ($fetch['gender'] =='female')?'checked':'' ?> style="height:25px;width:25px;">   
             <span class="form-check-label" >Female</span>
         </div>

         
	        <div class="col-md-12">
             <label >PlatForm :</label>
			<select class="browser-default custom-select" name="update_media_plat">
			   <option value="Instagram" <?php if($fetch['update_media_plat'] == 'Instagram'){echo 'selected="selected"';}?>>Instagram</option>
                <option value="Facebook" <?php if($fetch['update_media_plat'] == 'Facebook'){echo 'selected="selected"';}?>>Facebook</option>
                 <option value="YouTube" <?php if($fetch['update_media_plat'] == 'YouTube'){echo 'selected="selected"';}?>>YouTube</option>
                 <option value="TikTok" <?php  if($fetch['update_media_plat'] == 'TikTok'){echo 'selected="selected"';}?>>TikTok</option>
                 <option value="Other" <?php if($fetch['update_media_plat']   == 'Other'){echo 'selected="selected"';}?>>Other</option>
              </select>
			 
			<label >Enter Id:</label>
			<input type="text" class="form-control" placeholder="Enter Your Id" id="Media-id" name="update_media_id" value="<?php echo $fetch['media_id']; ?>" >

         	<label>Content Category :</label>
				<select class="browser-default custom-select" id="content" name="content">
			   <option value="Business" <?php if($fetch['content'] == 'Business'){echo 'selected="selected"';}?>>Business</option>
                <option value="Fashion" <?php if($fetch['content'] == 'Fashion'){echo 'selected="selected"';}?>>Fashion</option>
                 <option value="Fitness" <?php if($fetch['content'] == 'Fitness'){echo 'selected="selected"';}?>>Fitness</option>
                 <option value="Music" <?php  if($fetch['content'] == 'Music'){echo 'selected="selected"';}?>>Music</option>
                 <option value="Life Style" <?php if($fetch['content']   == 'Life Style'){echo 'selected="selected"';}?>>Life Style</option>
              </select>
			
			<label for="username">Primary Platform(s) of Influence?</label>
        	<select class="browser-default custom-select" id="pmp" name="primary_media_platform">
			   <option value="Instagram" <?php if($fetch['primary_media_platform'] == 'Instagram'){echo 'selected="selected"';}?>>Instagram</option>
                <option value="Facebook" <?php if($fetch['primary_media_platform'] == 'Facebook'){echo 'selected="selected"';}?>>Facebook</option>
                 <option value="YouTube" <?php if($fetch['primary_media_platform'] == 'YouTube'){echo 'selected="selected"';}?>>YouTube</option>
                 <option value="TikTok" <?php  if($fetch['primary_media_platform'] == 'TikTok'){echo 'selected="selected"';}?>>TikTok</option>
                 <option value="Other" <?php if($fetch['primary_media_platform']   == 'Other'){echo 'selected="selected"';}?>>Other</option>
              </select>
           
            <label>Primary Region(s) of Influencer?</label>
             <select class="browser-default custom-select" id="pc" name="primary_country">
			   <option value="Asia" <?php if($fetch['primary_country'] == 'Asia'){echo 'selected="selected"';}?>>Asia</option>
               <option value="Africa" <?php if($fetch['primary_country'] == 'Africa'){echo 'selected="selected"';}?>>Africa</option>
               <option value="Australia" <?php if($fetch['primary_country'] == 'Australia'){echo 'selected="selected"';}?>>Australia</option>
                <option value="Europe" <?php  if($fetch['primary_country'] == 'Europe'){echo 'selected="selected"';}?>>Europe</option>
                <option value="USA" <?php if($fetch['primary_country']   == 'USA'){echo 'selected="selected"';}?>>USA</option>
                <option value="Others" <?php if($fetch['primary_country']   == 'Others'){echo 'selected="selected"';}?>>Others</option>
              </select>  
   </div>
             <div class="col-md-12">

         <label>Audience’s Ages :</label> 

       <?php  $audage = explode(",", $fetch['aud_age']); ?>

         <div class="form-check form-check-inline">

        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="aud_age[]" value="age_18"<?php if(in_array("age_18", $audage)){ echo " checked=\"checked\""; } ?>age_18 />

        <span>Under 18</span>

       <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="aud_age[]" value="age_25"<?php if(in_array("age_25", $audage)){ echo " checked=\"checked\""; } ?>age_25/>

        <span>18-25</span>

        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="aud_age[]" value="age_30"<?php if(in_array("age_30", $audage)){ echo " checked=\"checked\""; } ?>age_30/>

        <span>25-30</span>

        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="aud_age[]" value="age_40"<?php if(in_array("age_40", $audage)){ echo " checked=\"checked\""; } ?>age_40/>

        <span>Above 30</span>

         </div>

      </div>

	     <div class="col-md-12">
	        <label class="form-check-label">Monetizing Your Audience (Select all that apply):</label>
	          <?php  $aud_monetize = explode(",", $fetch['aud_monetize']); ?>

		 <div class="form-check form-check-inline">
			  <input type="checkbox" class="form-check-input" id="Blog_Posts" name="aud_monetize[]" value="Blog_Posts"<?php if(in_array("Blog_Posts", $aud_monetize)){ echo " checked=\"checked\""; } ?>Blog_Posts />
			   <span>Blog</span>
				<input type="checkbox" class="form-check-input" id="Media_Posts" name="aud_monetize[]" value="Media_Posts"<?php if(in_array("Media_Posts", $aud_monetize)){ echo " checked=\"checked\""; } ?>Media_Posts />
				<span>Social Media</span>
				<input type="checkbox" class="form-check-input" id="Click_ads" name="aud_monetize[]" value="Click_Ads"<?php if(in_array("Click_Ads", $aud_monetize)){ echo " checked=\"checked\""; } ?>Click_Ads />
				<span>CPC Ads</span>
				<input type="checkbox" class="form-check-input" id="Affiliate" name="aud_monetize[]" value="Affiliate"<?php if(in_array("Affiliate", $aud_monetize)){ echo " checked=\"checked\""; } ?>Affiliate />
				<span>Affiliate</span>
      </div>
		</div>
		
      <div class="form-check form-check-inline">
        <label>Estimate Monthly Earnings Influencer $ :</label>
            <input type="text" class="form-control" placeholder="$" id="currency" name="update_currency" value="<?php echo $fetch['currency']; ?>" style="width:15%;">
        </div>

       
      
      <input type="submit" value="update profile" name="update_profile" class="btn btn-primary">
      <a href="ihome.php" class="btn btn-primary">go back</a>
	</div>
   </form>

</div>
</div>
</body>
</html>