  
<?php
$alb_id=$_GET["mbid"];
$alb_name=$_GET["alb_name"];
$art_name=$_GET["art_name"];

include('dbconfig.php');
include('dbconfig.php');

 $sql="DELETE FROM playlist_song WHERE pid='$pid' AND song_name='$s' ";

$r=mysqli_query($con,$sql);

//$uid=1;

$sql="INSERT INTO `liked_album` (`album_id`, `alb_name`, `art_name`, `uid`) VALUES ('$alb_id', '$alb_name', '$art_name', '$uid');";

mysqli_query($con,$sql);

echo mysqli_error($con);


	header("location:album.php");

?> 