<?php

include 'db.php';

if(isset($_POST['save']))
{

   $fname =$_POST['fname'];
   $lname =$_POST['lname'];
    $age=$_POST['age'];
   $DOB = $_POST['DOB'];
  
 //$DOB = date("Y-m-d", strtotime($_POST['DOB']) );
   $email = $_POST['email'];
   $pass = md5($_POST['pass']);
   $cpass = md5($_POST['cpass']);
   $mobile_num =  $_POST['mobile_num'];
   $gender= $_POST['gender'];
    
    $street= $_POST['street'];
    $city= $_POST['city'];
    $state= $_POST['state'];
    $country= $_POST['country'];
    $pin_code=$_POST['pin_code'];
    $website= $_POST['website'];
    $media_plat= $_POST['media_plat'];
    $media_id= $_POST['media_id'];
    $primary_media_platform= $_POST['primary_media_platform'];
    $secondary_media_platform= $_POST['secondary_media_platform'];
    $primary_country= $_POST['primary_country'];
    $secondary_country= $_POST['secondary_country'];
    $content= $_POST['content'];
    $audience= $_POST['audience'];
    $aud_age=$_POST['aud_age'];
   $aud_monetize=$_POST['aud_monetize'];
   $currency= $_POST['currency'];
   $select_models=$_POST['select_models'];
   $height= $_POST['height'];
   $weight= $_POST['weight'];
   $previous_modelexperience= $_POST['previous_modelexperience'];
   $event= $_POST['event'];
   $modeling_opportunity=$_POST['modeling_opportunity'];
   $shirt= $_POST['shirt'];
   $jeans= $_POST['jeans'];
   $footwear= $_POST['footwear'];
   $haircolor= $_POST['haircolor'];
   $t_shirt= $_POST['t_shirt'];
   $top_dress_size= $_POST['top_dress_size'];
   $skincolor= $_POST['skincolor'];
   $eyecolor= $_POST['eyecolor'];
   $apply=$_POST['apply'];
   $select_platform= $_POST['select_platform'];

 $aa = '';
  
    foreach($aud_age as $a)
    {
      $aa .= $a.","; 
    }


    $aud_mn = '';

    foreach($aud_monetize as $am)
    {
          $aud_mn .= $am.","; 
    }

    $mop = '';

    foreach($modeling_opportunity as $mp)
    {
      $mop .= $mp.","; 
    }
   
    $aply = '';
  
    foreach($apply as $ap)
    {
      $aply .= $ap.","; 
    }

   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

  $select = mysqli_query($conn, "SELECT * FROM `signup` WHERE email = '$email' AND pass = '$pass'");

    $targetDir = "uploaded_img/";
    $fileName = basename($_FILES["image"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
  
      $allowTypes = array('jpg','png','jpeg','gif'); 
     
     
      if(in_array($fileType, $allowTypes))
      { 
        if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath))
         {
            $statusMsg = "$fileName";
          
          }
       else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
      }
      else{ 
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
    } 
  
    $sql= "insert into signup(fname,lname,age,DOB,email,pass,cpass,mobile_num,gender,street,city,state,country,pin_code,website,media_plat,media_id,primary_media_platform,secondary_media_platform,primary_country,secondary_country,content,audience,aud_age,aud_monetize,currency,select_models,height,weight,previous_modelexperience,event,modeling_opportunity,shirt,jeans,footwear,haircolor,t_shirt,top_dress_size,skincolor,eyecolor,apply,select_platform,img)values('$fname','$lname','$age','$DOB','$email','$pass','$cpass','$mobile_num','$gender','$street','$city','$state','$country','$pin_code','$website','$media_plat','$media_id','$primary_media_platform','$secondary_media_platform','$primary_country','$secondary_country','$content','$audience','$aa','$aud_mn','$currency','$select_models','$height','$weight','$previous_modelexperience','$event','$mop','$shirt','$jeans','$footwear','$haircolor','$t_shirt','$top_dress_size','$skincolor','$eyecolor','$aply','$select_platform','$statusMsg')";
     // echo $sql; exit; 
     if($conn->query($sql) === TRUE)
     {
        header('location:login.php');
    }
    else
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
   }
}
  ?>