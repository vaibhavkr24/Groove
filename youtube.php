<!DOCTYPE html>

<html>

<style>

</style>
  <body>
    <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
    <iframe id="player" type="text/html" width="640" height="34"
  src="http://www.youtube.com/embed/M7lc1UVf-VE?showinfo=0&autohide=0&enablejsapi=1&origin=http://example.com"
  frameborder="0"></iframe>

    <script>
      
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '34',
          
          width: '640',
          videoId: '5p0rEyj3LbI',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.playVideo();
      }
      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          setTimeout(stopVideo, 6000);
          done = true;
        }
      }
      function stopVideo() {
        player.stopVideo();
      }
    </script>
  </body>
</html>