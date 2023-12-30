<?php
/*
Author: TitovV
*/
?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
        background-image: url("http://i.imgur.com/gX2TYbe.png");
} 
body {
        color: #FFFFFF;
}
h1 {
        color: #00FF00;
}
p {
        color: #FFFFFF;
}
h3 {
        color: #00FF00;		
}
< 
</style>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body background="bgimage.jpg">
<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>
<div class="form">
<h1>Log into your account</h1>
<hr>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" class="btn btn-success" value="Login" />
</form>
<p>Not registered yet? <a href='register.php'><font color="white"><b>Register Here</b></font></a></p>
<hr>
<br /><br />
<p>Author: <strong>TitovV</strong></p>
<?php } ?>


</body>
</html>
