<?php require_once("db.php");
session_start();
$user_id=$_SESSION['user_id'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/mhome.css">
	<title>Image Upload</title>
</head>
<body>
	<?php
		if(isset($_POST['form_submit']))
		{	
	$title=$_POST['title'];
$folder = "igallery/";
$image_file=$_FILES['image']['name' ];
 $file = $_FILES['image']['tmp_name'];
 $path = $folder . $image_file;  
 $target_file=$folder.basename($image_file);
 $imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
//Allow only JPG, JPEG, PNG & GIF etc formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
 $error[] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed';  
}
//Set image upload size 
    if ($_FILES["image"]["size"] > 1048576) {
   $error[] = 'Sorry, your image is too large. Upload less than 1 MB KB in size.';
}
if(!isset($error))
{
	// move image in folder 
move_uploaded_file($file,$target_file); 
$result=mysqli_query($conn,"INSERT INTO inf_gallery(image,title,user_id) VALUES('$image_file','$title','$user_id')");
if($result)
{
	header("location:ihome.php?image_success=1");
}
else 
{
	echo 'Something went wrong'; 
}
}
		}
if(isset($error)){ 

foreach ($error as $error) { 
	echo '<div class="message">'.$error.'</div><br>'; 	
}
}
	?> 
	<div class="container">
<form action="" method="POST" enctype="multipart/form-data">
	<label>Image </label>
	<input type="file" name="image" class="form-control" required >
	<label>Details</label>
	<input type="text" name="title" class="form-control">
	<br><br>
	<button name="form_submit" class="btn-primary"> Upload</button>
</form>
</div>
</body>
</html>