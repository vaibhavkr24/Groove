<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Album</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="style_album.css">
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
			<div class="jumbotron"> 
				<div id="jumbo">
				</div>
			</div>
			<div id="track_block">
				<h3>Tracks:</h3><br>
				<div id="tracks" ></div>
			</div>
		</div>
		
	</div>
    <script>
		$(document).ready(function() {  
			$.getJSON("http://ws.audioscrobbler.com/2.0/?method=album.getinfo&artist=Cher&album=Believe&api_key=4a9f5581a9cdf20a699f540ac52a95c9&limit=10&format=json&callback=?", function(json) {  
				var html = '';
				var	str='';	
				var sln = 0;
				var j='';
				//html +=json;
				str=JSON.stringify(json.album.image[2])
				var sln = str.length;
				str=str.slice(10,sln-17); 
				j+="<img src="+str+" ><b style='font-size:30px;margin-left:40px'>Album:Believe</b>";
				$('#jumbo').append(j);
				$.each(json.album.tracks.track, function(i, item) {  
					//html += "<p><a href=" + item.url + " target='_blank'>" + item.name  + "<img src="+JSON.stringify(item.image[0])+">"+"</a></p>";  
					
					html += "<a href="+item.url+">"+item.name+"</a><b></b><hr>"; 

					//html+="<a href='follow_Song.php?mbid="+item.mbid+"&name="+item.name+"'>Liked</a>";
				});  
				
				$('#tracks').append(html);  
			});  
		});
	</script>
</body>
</html>