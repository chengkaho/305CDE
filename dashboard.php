<?php
 
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Drugs Defender</title>
<link href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" rel="stylesheet" type="text/css"/>
<script src="http://code.jquery.com/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/registration.js"></script>
 <script type="text/javascript">
       $(document).on("mobileinit", function() {
        $.extend( $.mobile , {
          pageLoadErrorMessage: 'Either the page cannot be found or it cannot be loaded.'
        });
     });
      $(document).on("pageinit","#page", function() {
        alert("pageinit is bound!");
      });
    </script>
</head>
<title>Discuss!</title>

</head>
<body>

<div id="fb-root"></div>

<div class="form">
<div data-role="page" id="index">
<div data-role="header">
    <h1>Discuss!</h1>
</div>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1919217371658748',
      xfbml      : true,
      version    : 'v2.9'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<div id="fb-root"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=1919217371658748";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-comments" data-href="https://www.facebook.com/Drugs-Defender-1467651396631902/?hc_ref=PAGES_TIMELINE&amp;fref=nf" data-width="150" data-numposts="5"></div>

<p><a href="index.php" type="button">Home</a></p>
<a href="logout.php" type="button">Logout</a>

<br />
 <div data-role="footer">
    <h1>Say No to Drugs!</h1>
 </div>
</div>
</body>
</html>
