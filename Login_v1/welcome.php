<?php
// Inicia a desgraia da sessão
session_start();
 
// Checa se o boy ta logado, se nao redireciona pra caraia do login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$_SESSION["expire"] = $_SESSION["start"] + (1 * 60);

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	
    <title>Welcome</title>
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">-->
		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <style type="text/css">
       body, html {width: 100%; height: 100%; margin: 0; padding: 0}
		.first-row{
		color: #0;
		font-family: 'Source Sans Pro', sans-serif;
		font-size: 8pt;
		font-weight: 300 !important;
		letter-spacing: -0.025em;
		line-height: 1.75em;
	}
.second-row {position: absolute; top: 100px; left: 0; right: 0; bottom: 0;}
.second-row iframe {display: block; width: 100%; height: 100%; border: none;}
    </style>
</head>
<body>
	
    <div class="first-row">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to the Monthly Management Model.</h1>
	</div>
	<div class="second-row">
<iframe src="https://docs.google.com/presentation/d/1V8KEIq-XMtU70anBHBCD6YtlfJZTk_SV/embed?start=false&loop=false&delayms=60000" frameborder="0" width="1920" height="1109" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>

	</div>
    
    <p>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
	
	 <p>
        <a  class="card-text">A Development made by Skyrail Bahia I.T Team</a>
    </p>
</body>
</html>