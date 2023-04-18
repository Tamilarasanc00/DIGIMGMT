<?php include("db.php");
session_start();
$user_id = $_SESSION['user_id'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/mhome.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
	<title>Upload image, display, edit and delete in PHP </title>
</head>
<body>
<div class="container_display">
		
<div class="profile">
      <?php
         $select = mysqli_query($conn, "SELECT * FROM `signup` WHERE id = '$user_id'") or die('query failed');
         $fetch = mysqli_fetch_assoc($select);
       
         if(mysqli_num_rows($select) > 0){
   
            if($fetch['img'] == ''){
               echo '<img src="uploaded_img/profile_icon.png" style="height:300px;width: 300px;border-radius: 50%;">';
            }else{
               echo '<img src="uploaded_img/'.$fetch['img'].'" style="height:300px;width: 300px;border-radius: 50%;">';
            }
         }
      
      ?>
      <h3 class=''><?php echo $fetch['fname']; ?></h3>
      
      <a href="update_profile_inf.php" class="btn btn-info">Edit Influencer profile</a>
      <a href="login.php?logout=<?php echo $user_id; ?>" onClick="logout()" class="btn btn-danger">logout</a>
</div>




		<span style="float:right;"><a href="iupload.php"><button class="btn-primary">Upload New image </button></a></span>
		<br><br>
	<?php 
	if(isset($_GET['image_success']))
		{
		echo '<div class="success">Image Uploaded successfully</div>'; 
		}

		if(isset($_GET['action']))
		{
    $action=$_GET['action'];
	if($action=='saved')
	{
		echo '<div class="success">Saved </div>'; 
	}
	elseif($action=='deleted')
	{
     echo '<div class="success">Image Deleted Successfully ... </div>'; 
      
	}
		}
	?>
	<table cellpadding="10">
		<tr>
			
		</tr>
	</table>
		
		<?php $res=mysqli_query($conn,"SELECT * from inf_gallery ORDER by id DESC");
			while($row=mysqli_fetch_array($res)) 
			{
				echo '<div class="post_img"> 
                  <img src="igallery/'.$row['image'].'" height="250px" width="240px">
                  <div class="post_con">
				  <h5>'.$row['title'].'</h5> 
                  <a href="edit.php?id='.$row['id'].'"><button class="btn-primary">Edit </button></a>
                  	
                  	 <a href=\'delete.php?id='.$row['id'].'\' onClick=\'return confirm("Are you sure you want to delete?")\'"><button class="btn-primary btn_del">Delete</button></a>
					</div>
				</div>';
} ?>
		
	</div>
</body>
<script>
function logout() {
  confirm("Hello! Are Sure To Log Out");
}
</script>
</html>