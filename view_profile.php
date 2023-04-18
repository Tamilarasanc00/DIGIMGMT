<?php include('db.php');?>
 



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
	<title>View Profile </title>
</head>
<style>
    .ret{
        float:right;
    }

    body{
background-color: #f1f1f1;
	}
		.form-control {
    width: 100%;
    height: 25px;
    padding: 6px 12px;
    font-size: 14px;
    color: #555;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 4px;
   
}

.profile_post img h5 a{
  display:flex;
  float:right;
}
.btn-primary {
    padding: 6px 12px;
    font-size: 14px;
    font-weight: 400;
    cursor: pointer;
    border: 1px solid transparent;
    border-radius: 4px; 
    background-color: #337ab7;
    color: #fff;
}
.btn_del {
  background-color: #FF5733 !important;   
}
.container 
{ 
margin-left: 30%;
width: 400px ;
background-color: #fff;
padding: 10px;
padding-right: 40px;
    border: 1px solid #ccc;
    border-radius: 4px;
 }
 .container_display
{ 
margin-left: 22%;
width: 900px ;
background-color: #fff;
padding: 10px;
padding-right: 40px;
    border: 1px solid #ccc;
    border-radius: 4px;
 }

label   {
	font-size: 16px;
}
.success 
{ 
	margin: 5px auto;
  border-radius: 5px;
  border: 3px solid #fff;
  background: #33CC00;
  color: #fff;
font-size: 20px;
  padding: 10px;
  box-shadow: 10px 5px 5px grey;
}
.post_img{
  border: #337ab7 solid 5px;
  border-radius: 10px;
  box-shadow: 1px 2px 34px 1px #000 inset;
  display:flex; 
  float:left; 
  margin:15px;
  
}
.post_img{
  display:inline-block;
  margin:15px;
}
    </style>
<body>
    <div class="container_display">

		
<div class="profile">
  
     <?php if(isset($_GET['id'])){
   $id = $_GET['id'];
 
  $select = mysqli_query($conn, "SELECT * FROM signup where id=$id");
 $fetch = mysqli_fetch_array($select);
  if(mysqli_num_rows($select) > 0){
   
            if($fetch['img'] == ''){
               echo '<img src="uploaded_img/profile_icon.png" style="height:100px;width: 100px;border-radius: 50%;">';
            }else{
               echo '<img src="uploaded_img/'.$fetch['img'].'" style="height:100px;width: 100px;border-radius: 50%;">';
            }
         }
}else{
     $select = mysqli_query($conn, "SELECT s.id, s.fname, s.lname,s.age,s.DOB,s.email,s.gender,s.website,s.media_plat,s.media_id
FROM signup") or die('query failed');
 $fetch = mysqli_fetch_array($select);
  if(mysqli_num_rows($select) > 0){
   
            if($fetch['img'] == ''){
               echo '<img src="uploaded_img/profile_icon.png" style="height:300px;width: 300px;border-radius: 50%;">';
            }else{
               echo '<img src="uploaded_img/'.$fetch['img'].'" style="height:300px;width: 300px;border-radius: 50%;">';
            }
         }
}
       
       
        
       //print_r($fetch); exit;
        
      
      
    ?>   
    
    
  <h3 class=''><?php echo $fetch['fname'];echo $fetch['lname'];?></h3>
      <div class="row">
      <div class="col-md-6">
      <h6 class=''>Age : <?php echo $fetch['age'];?></h6>
      <h6 class=''>DOB : <?php echo $fetch['DOB']; ?></h6>
      <h6 class=''>Email : <?php echo $fetch['email']; ?></h6>
      <h6 class=''>Gender : <?php echo $fetch['gender']; ?></h6>
     </div>
     <div class="col-md-6">
      <h6 class=''>Web Site : <?php echo $fetch['website'];?></h6>
      <h6 class=''>Media Platform : <?php echo $fetch['media_plat'];?></h6>
      <h6 class=''>Media Id : <?php echo $fetch['media_id'];?></h6>
       <h6 class=''>User Id : <?php echo $fetch['id'];?></h6>
    </div>
    </div>
    
       
      
</div>

<a href="index.php" onClick="back()" class="btn btn-danger ret">Back</a>
		<br><br>
	<table cellpadding="10">
		<tr>
			
		</tr>
	</table>
		
		<?php 
		
		$res=mysqli_query($conn,"SELECT DISTINCT mod_gallery.user_id , mod_gallery.image,inf_gallery.image,mod_gallery.title,inf_gallery.title from mod_gallery JOIN signup JOIN inf_gallery ON mod_gallery.user_id=signup.id OR inf_gallery.user_id=signup.id");
	//	$res=mysqli_query($conn,"SELECT Distinct (concat(m.user_id as m,'',i.user_id))from mod_gallery m INNER JOIN inf_gallery i ON m.user_id=s.id INNER JOIN signup s ON i.user_id=s.id");
        	while($row=mysqli_fetch_array($res)) 
			{
				echo '<div class="post_img"> 
                  <img src="mgallery/'.$row['image'].'" height="250px" width="250px">
                  <div class="post_con">
				  <h5>'.$row['title'].'</h5> 
				  </div>
				</div>';
} ?>
		
	</div>

</body>
<script>
function back() {
  confirm("Hello! Are Sure To Back");
}
</script>
</html>