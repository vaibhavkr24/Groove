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
			<div class="jumbotron row">
					<div class="col-md-4">
						<img src="https://lastfm-img2.akamaized.net/i/u/174s/546fe202b6b7456388e04d7c43f961bf.png" alt="image">
					</div>
					<div class="col-md-4">
						<h2>Ferry Corsten</h2>
						<h3 id="artist_cat">Ferry Corsten Songs</h3>
					</div>
			</div>
			<script src="artist.js"></script>
			<div class="tab">
				<button class="tablinks" onclick="opentab(event, 'Songs')" id="defaultOpen">Top Songs</button>
				<button class="tablinks" onclick="opentab(event, 'Albums')">Top Albums</button>
			</div>
			<div id="Songs" class="tabcontent">
			    <p id="songs_tab"></p>
			</div>

			<div id="Albums" class="tabcontent">
			    <p id="album_tab"></p> 
			</div>
		</div>
	</div>
    <script>  
	// Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
	$(document).ready(function() {  
		$.getJSON("http://ws.audioscrobbler.com/2.0/?method=artist.getTopTracks&artist=FerryCorsten&api_key=4a9f5581a9cdf20a699f540ac52a95c9&limit=100&format=json&callback=?", function(json) {  
			var html = '';
			var	str='';	
			var sln = 0;
			
			  
			$.each(json.toptracks.track, function(i, item) {  
				//html += "<p><a href=" + item.url + " target='_blank'>" + item.name  + "<img src="+JSON.stringify(item.image[0])+">"+"</a></p>";  
				str=JSON.stringify(item.image[2])
				var sln = str.length;
				str=str.slice(10,sln-17);
				
				html += "<img src='images/music.jpg' alt='aa' style='border-radius:20%;width:8%'><a href="+item.url+" style='font-size:20px;margin-left:150px;'>"+item.name+"</a><hr>"; 
			      html+="<a href='follow_Song.php?mbid="+item.mbid+"&name="+item.name+"'>Liked</a>";

			});  
			
			$('#songs_tab').append(html); 


	




		}); 
        $.getJSON("http://ws.audioscrobbler.com/2.0/?method=artist.getTopAlbums&artist=FerryCorsten&api_key=4a9f5581a9cdf20a699f540ac52a95c9&limit=100&format=json&callback=?", function(json) {  
			var html = '';
			var	str='';	
			var sln = 0;
			
			  
			$.each(json.topalbums.album, function(i, item) {  
				//html += "<p><a href=" + item.url + " target='_blank'>" + item.name  + "<img src="+JSON.stringify(item.image[0])+">"+"</a></p>";  
				str=JSON.stringify(item.image[2])
				var sln = str.length;
				str=str.slice(10,sln-17);
				html += "<img src='images/music.jpg' alt='aa' style='border-radius:20%;width:8%'><a href="+item.url+" style='font-size:20px;margin-left:150px;'>"+item.name+"</a><hr>"; 
			});  
			
			$('#album_tab').append(html);  
		}); 		
		
	}); 
</script> 
</body>
</html>