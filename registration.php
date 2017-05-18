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
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>

<div class="form">
<div data-role="page" id="index">
<div data-role="header">
    <h1>Registration</h1>
</div>

<form name="registration" action="" method="post">
<br><input type="text" name="username" placeholder="Username" required /><br>
<input type="email" name="email" placeholder="Email" required /><br>
<input type="password" name="password" placeholder="Password" required /><br>
<input type="submit" name="submit" value="Register" />
</form>

<a href="index.html#main" type = "button" data-mini="true" data-ajax="false">Back to home page</a><br>

 <div data-role="footer">
    <h1>Say No to Drugs!</h1>
 </div>
 
</div>
<?php } ?>
</body>
</html>
