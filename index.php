<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: profile.php"); // Redirecting To Profile Page
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body bg-color="black">


<p style="margin-left:47%;font-family: 'Averia Serif Libre', cursive;font-size:35px;">SwaDes</p>
<p style="margin-left:40%;">---------------------------------------------------------- </p>
<p style="margin-left:45%;font-family: 'Averia Serif Libre', cursive;font-size:20px;">SociAl EnterPrenuers</p>
<div class="wrapper">
    <div class="container">
        <h1>Welcome</h1>
        <form class="form" action="" method="post">
            <input id="name" name="username" placeholder="Username" type="text">
            <input id="password" name="password" placeholder="**********" type="password">
            <button type="submit" name="submit" value="login" id="login-button">Login</button>
            <span><?php echo $error; ?></span>
        </form>
    </div>
    
    
</div>


<p></p>
<img src="images/l.jpg" style="height:70px;margin-left:720px;">

</body>
</html>