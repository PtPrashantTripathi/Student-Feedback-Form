<?php
include('dbconn.php');
if(isset($_POST["Login"])){
	$id = $_POST["id"];
	$pass = $_POST["pass"];	
	$sql = mysql_query("SELECT * FROM student WHERE id ='$id' and password='$pass'");
	$rows = mysql_num_rows($sql);
	if($rows==1) {
		$user = mysql_fetch_array($sql);
		$_SESSION["id"] = $user['id'];
		$_SESSION["Name"] = $user['name'];
		header("Location: feedback.html");
		}
	else{
		echo "<script>alert('Password does not Match !!!');</script>";
		}
}

?>	

<html>
<head>
    <title>Login</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
<a href="/admin" style="float:right;display:block;text-align:center;text-decoration:none;width:200px">Admin login</a>
    <div class="login" style="width:360px;">
        <h1 align="center">Student Login</h1>
        <form method="post" style="text-align:center;">
            <input placeholder="Roll No." type="text" name="id">
            <br>
            <br>
            <input placeholder="Password" type="password" name="pass">
            <br>
            <br>
            <input type="submit" value="Login" name="Login"><span></span></form>
    </div>
</body>

</html>