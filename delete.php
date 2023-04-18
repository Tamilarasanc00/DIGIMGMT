<?php require_once("db.php"); 
$id=$_GET['id'];
		$res=mysqli_query($conn,"SELECT* from mod_gallery WHERE id=$id limit 1");
if($row=mysqli_fetch_array($res)) 
{
$deleteimage=$row['image']; 
}
$folder="mgallery/";
unlink($folder.$deleteimage);
$result=mysqli_query($conn,"DELETE from mod_gallery WHERE id=$id") ; 
if($result)
{
	 header("location:mhome.php?action=deleted");
}
?> 