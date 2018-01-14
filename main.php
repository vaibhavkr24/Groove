<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="style_main.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>	
	
</head>
<body>
	<div id="main">
		<nav>
		    <img src="images/logo.png" alt="GROOVE" id="logo">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Browse</a></li>
				<li><a href="#">Recommended</a></li>
				<li><a href="#">My Music</a></li>
			</ul>
		</nav>
		
		<div class="slideshow-container" >

			<div class="mySlides fade">
			    <div class="numbertext">1 / 3</div>
			    <img src="images/mic.jpg" alt="GROOVE" style="width:100%">
			    <div class="text">"One good thing about music, when it hits you, you feel no pain." - Bob Marley</div>
			</div>

			<div class="mySlides fade">
			    <div class="numbertext">2 / 3</div>
			    <img src="images/1d.jpg" style="width:100%">
			    <div class="text">"The true beauty of music is that it connects people. It carries a message, and we, the musicians, are the messengers." - Roy Ayers</div>
			</div>

			<div class="mySlides fade">
			    <div class="numbertext">3 / 3</div>
			    <img src="images/head.jpg" style="width:100%">
			    <div class="text">"Music, at its essence, is what gives us memories. And the longer a song has existed in our lives, the more memories we have of it." - Stevie Wonde</div>
			</div>

		</div>
		<br>

		<div style="text-align:center">
		    <span class="dot"></span> 
		    <span class="dot"></span> 
		    <span class="dot"></span> 
		</div>
		<hr>
		<div id="top_charts">
			<h2 id="head_text" style="padding-left:50px;">Top Ten Artists</h2><br>
		    
			
		</div>
		<script src="top_artists.js"></script>
		<div class="row" id="top_art"> </div>
		<hr>
		<div id="top_charts" >
			<h2 id="head_text" style="padding-left:50px;">Top Ten Tracks</h2><br>
		   
		</div>
		 <script src="top_tracks.js"></script>
			<div class="row" id="top_tra"> </div>
		<hr>
		<!--<div id="top_charts">
			<h2 id="head_text">Top Ten Artists</h2>
		    <script src="top_artists.js"></script>
			<div id="top_alb"> </div>
		</div>-->

		<div id="top_charts">
			<h2 id="head_text" style="padding-left:50px;">Top Ten Albums</h2><br>
		    
			
		</div>
		<script src="top_albums.js"></script>
		<div class="row" id="top_alb"> </div>
<hr/>
		<div class="row" style="background-color:#000">
		<h3>//Footer</h3>
		</div>
	</div>
<script src="slide.js"></script>
</body>
</html>