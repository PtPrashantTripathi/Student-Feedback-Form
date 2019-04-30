<?php
include('../dbconn.php');
if(isset($_POST["Login"])){
	$id = 'admin';
	$pass = 'admin';	
	if($id==$_POST["id"]&&$pass==$_POST["pass"]) {
		header("Location: feedback.php");
		}
	else{
		echo "<script>alert('Password does not Match !!!');</script>";
		}
}

?>	

<html>
<head>
    <title>Login</title>
	<link rel="stylesheet" href="/style.css">
</head>

<body>
	<a href="../index.php" style="float:right;display:block;text-align:center;text-decoration:none;width:200px">Student login</a>

    <div class="login" style="width:360px;">
        <h1 align="center">Admin Login</h1>
        <form method="post" style="text-align:center;">
            <input placeholder="Username" type="text" name="id">
            <br>
            <br>
            <input placeholder="Password" type="password" name="pass">
            <br>
            <br>
            <input type="submit" value="Login" name="Login"><span></span></form>
    </div>
</body>

</html>