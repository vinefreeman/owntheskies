<!DOCTYPE html>
<html>
    <head>
        <title>FLIGHTDECK: own the skies</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet" type="text/css">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <link rel="stylesheet" type="text/css" href="/css/sidebar.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    </head>
    <body class="@yield('bodyClass')">

    <div id="wrapper" class="toggled">
        
        @yield('content')
	</div><!-- #main page wrapper -->
	<div id="video-background" style="opacity: 0.4;position: fixed; z-index: -99; width: 100%; height: 100%" >
  <!--<iframe frameborder="0" height="100%" width="100%" src="https://www.youtube.com/embed/eEGhgcMIt9s?playlist=eEGhgcMIt9s&autoplay=1&controls=0&showinfo=0&autohide=1&rel=0" frameborder="0" allowfullscreen></iframe>-->
  </div>
<script src="//code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
        </script>
  <script>

  // Youtube Video Background for Unbounce. V1.3.5

  // lpVideoBG('#SectionID', 'YoutubeVideoID', width, height, muted);
  // Use '#lp-pom-root' for a full page background

  //lpVideoBG('#lp-pom-block-9', 'eEGhgcMIt9s', 560, 315, 0); #lp-pom-root
  lpVideoBG('#video-background', 'eEGhgcMIt9s', 560, 315, 0); 

  function lpVideoBG(e,t,o,i,a){function n(){var t=$(e).width(),a=$(e).height();"#lp-pom-root"==e&&(a=$(window).height());var n=t/o,r=i*n;if(a>=r){var l=a/r;r=a*l}var p=r/i,c=o*p,y=(c-t)/2,u=(r-a)/2;$("#"+d)[0].setAttribute("height",r),$("#"+d)[0].setAttribute("width",c),$("#"+d).css({top:-u,left:-y,position:s})}var r=navigator.userAgent.match(/(Android|iPod|iPhone|iPad|iemobile|blackberry)/),d="framedVideo-"+e.substr(1),l=e,s="fixed";"#lp-pom-root"!==e&&(l=e+" .lp-pom-block-content",s="absolute"),$(l).css({width:"100%","margin-left":"0",overflow:"hidden"});var p="block";r&&(p="none");var c='<div style="height:100%;width:100%;position:absolute; top:0px"><iframe id="'+d+'" width="100%" height="100%" src="//www.youtube.com/embed/'+t+"?autoplay=1&controls=0&iv_load_policy=3&disablekb=1&fs=0&loop=1&modestbranding=1&rel=0&showinfo=0&playlist="+t+'&enablejsapi=1" frameborder="0" allowfullscreen style="display:'+p+'; visibility:hidden; "></iframe></div>',y='<div style="height:100%;width:100%;position:absolute; top:0px"></div>';"#lp-pom-root"===e?($(l).prepend(y),$(l).prepend(c)):($(l).append(c),$(l).append(y),$(e+"-color-overlay").appendTo(l)),n(),$(window).resize(function(){n()});var u=onPlayerReady;onPlayerReady=function(e){u(e),h.setLoop(!0),1==a&&e.target.mute()};var f=onChangedState;onChangedState=function(e){f(e),e.data==YT.PlayerState.PLAYING?document.getElementById(d).style.visibility="visible":e.data==YT.PlayerState.ENDED&&(document.getElementById(d).style.visibility="hidden")};var h,m=onYouTubeIframeAPIReady;onYouTubeIframeAPIReady=function(){m(),h=new YT.Player(d,{loop:"1",events:{onReady:onPlayerReady,onStateChange:onChangedState}})}}function onYouTubeIframeAPIReady(){}function onPlayerReady(){}function onChangedState(){}var tag=document.createElement("script");tag.src="//www.youtube.com/iframe_api";var firstScriptTag=document.getElementsByTagName("script")[0];firstScriptTag.parentNode.insertBefore(tag,firstScriptTag);

</script>
    </body>
</html>
