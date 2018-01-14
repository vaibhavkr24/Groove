<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Artist</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="style_artist.css">
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
		<div class="container" id="cont">
			

			<div id="Albums" class="tabcontent">
			    <p id="album_tab"></p> 
			</div>
		</div>
	</div>
    <script>  
	// Get the element with id="defaultOpen" and click on it
    //document.getElementById("defaultOpen").click();
	$(document).ready(function() {  
		
			
			  
	
        $.getJSON("http://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=rj&api_key=4a9f5581a9cdf20a699f540ac52a95c9&format=json&callback=?", function(json) {  
			var html = '';
			var	str='';	
			var sln = 0;
			
			  
			$.each(json.recenttracks.track, function(i, item) {  
				//html += "<p><a href=" + item.url + " target='_blank'>" + item.name  + "<img src="+JSON.stringify(item.image[0])+">"+"</a></p>";  
				//str=JSON.stringify(item.image[2])
				//var sln = str.length;
				//str=str.slice(10,sln-17);
				//html += "<img src='images/music.jpg' alt='aa' style='border-radius:20%;width:8%'><a href="+item.url+" style='font-size:20px;margin-left:150px;'>"+item.name+"</a><hr>"; 
			html+=item.name;
			});  
			
			$('#album_tab').append(html);  
		}); 		
		
	}); 
</script> 
</body>
</html>	
	