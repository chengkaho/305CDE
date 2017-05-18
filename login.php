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
<?php
	require('db.php');
	session_start();
    
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); 
		$username = mysqli_real_escape_string($con,$username); 
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		

        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index.php"); 
            }else{
				echo "<div class='form'><h3>Username or Password is incorrect. Please go back and retry.</h3></div>";
				}
    }else{
?>
<div class="form">
<div data-role="page" id="index">
<div data-role="header">
    <h1>Login</h1>
</div>

<form action="" method="post" name="login">
<br><input type="text" name="username" placeholder="Username" required /><br>
<input type="password" name="password" placeholder="Password" required /><br>
<input name="submit" type="submit" value="Login" />
</form>
<a href="index.html#main" type = "button" data-mini="true" data-ajax="false">Back to home page</a><br>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p><br>

<!--
 <div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1919217371658748',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.8'
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








-->

 <div data-role="footer">
    <h1>Say No sto Drugs!</h1>
 </div>
 
</div>
</div>

<?php } ?>


</body>
</html>
