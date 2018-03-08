<?php
//sesi login
session_start();
if(isset($_SESSION["username"])){
}else{
 echo header("location:login.php");
 
}
?>
<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin CP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    Admin CP 
	<?php 
			if(isset($_GET['username'])){
echo 'Welcome '.$_GET['username'];
}else {
echo '(write) a 404 page';

}?>
    <ul>
            <li><a href="../index.php?page=story">Cek Page</a></li>
            <li><a href="logout.php">logout</a></li>
	</ul>
	
	
</body>
</html>>