  <head>  <link rel="stylesheet" href="css/bootstrap.min.css">
	      <link rel="stylesheet" href="css/font-awesome.min.css">
	    <script src="js/jquery.js"></script>
	    <script src="js/bootstrap.js"></script>	
</head>
<?php


include('dbconfig.php');

 //get uid
 
/* $user=$_SESSION["email"];

$u="SELECT * FROM user_details WHERE `email`='$user' ";
$r=mysqli_query($con,$u);
$row=mysqli_fetch_assoc($r);
$uid=$row["uid"];
*/
$uid=2;
$sql="SELECT * FROM `played` WHERE uid!='$uid' ";
$r=mysqli_query($con,$sql);

?>

<ul class="list-group">
	<?php
	while($row=mysqli_fetch_assoc($r))
	{
		echo "<li class='li-group-item'>".$row["song_name"]."</li>";
	}
	?>
</ul>