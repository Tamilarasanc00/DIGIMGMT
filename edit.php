<?php require_once("db.php"); $id=$_GET['id']; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="mhome.css">
	<title>Image Upload and edit in PHP and MYSQL database</title>
</head>
<body>
	<?php
		if(isset($_POST['update_submit']))
		{	
			$title=$_POST['title'];
$folder = "mgallery/";
$image_file=$_FILES['image']['name'];
 $file = $_FILES['image']['tmp_name'];
 $path = $folder . $image_file;  
 $target_file=$folder.basename($image_file);
 $imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
if($file!=''){
//Set image upload size 
    if ($_FILES["image"]["size"] > 500000) {
   $error[] = 'Sorry, your image is too large. Upload less than 500 KB in size.';
}
//Allow only JPG, JPEG, PNG & GIF 
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
 $error[] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed';   
}
}
if(!isset($error))
{
	if($file!='')
	{
		$res=mysqli_query($conn,"SELECT* from mod_gallery WHERE id=$id limit 1");
if($row=mysqli_fetch_array($res)) 
{
$deleteimage=$row['image']; 
}
unlink($folder.$deleteimage);
move_uploaded_file($file,$target_file); 
$result=mysqli_query($conn,"UPDATE mod_gallery SET image='$image_file',title='$title' WHERE id=$id"); 
	}
	else 
	{
	$result=mysqli_query($conn,"UPDATE mod_gallery SET title='$title' WHERE id=$id"); 	
	} 
if($result)
{
 header("location:mhome.php?action=saved");
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
$res=mysqli_query($conn,"SELECT* from mod_gallery WHERE id=$id limit 1");
if($row=mysqli_fetch_array($res)) 
{
$image=$row['image']; 
$title=$row['title']; 
}
	?> 
	<div class="container" style="width:500px;">
		<h1> Edit </h1>
	<?php if(isset($update_sucess))
		{
		echo '<div class="success">Image Updated successfully</div>'; 
		} ?>
<form action="" method="POST" enctype="multipart/form-data">
	<label>Image Preview </label><br>
	<img src="mgallery/<?php echo $image;?>" height="100"><br>
	<label>Change Image </label>
	<input type="file" name="image" class="form-control">
	<label>Details</label>
	<input type="text" name="title" value="<?php echo $title;?>" class="form-control">
	<br><br>
	<button name="update_submit" class="btn-primary">Update </button>
</form>
</div>
</body>
</html>