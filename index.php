<?php
include("auth.php"); 
?>
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
<body>

<div data-role="page" id="main">
	<div data-role="header">
		<h1>Member Page</h1>
	</div>

	<div>
		<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
		<p>This is member page.</p>
	</div>
	
	<div data-role="content">	
		<ul data-role="listview">
		<li><a href="dashboard.php">Discussion Page</a></li>
		<li><a href="logout.php">Logout</a></li>
	</div>
	

	<div data-role="footer">
		<h1>Say No to Drugs!</h1>
	</div>
 
<br /><br /><br /><br />
</div>




</body>
</html>
