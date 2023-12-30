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
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
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
            echo "<center><img src='http://ddxcourier.com/web/wp-content/uploads/2017/12/gif-img1.gif'></center> <div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'><font color='white'><b>Login</b></a></div><br>";
        }
    }else{
?>
<div class="form">
<h1>Create an account</h1>
<hr>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
<hr>
</form>
<p><a href='login.php'><font color="white"><b>Log in here</b></font></a></p><p> if you have registered already</p></a>
<br /><br />
<p>Author: <strong>TitovV</p>
</div>
<?php } ?>
</body>
</html>
