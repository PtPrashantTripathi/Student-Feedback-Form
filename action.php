<?php 
include("dbconn.php");	
if(isset($_POST["Submit"])){
$sub=$_POST["sub"];
$value=$_POST["f1"]+$_POST["f2"]+$_POST["f3"]+$_POST["f4"]+$_POST["f5"]+$_POST["f6"]+$_POST["f7"];
mysql_query("UPDATE feedback SET fb = ((fb+".$value.")/2) WHERE SUB='".$sub."'");
}
?>

<html>
<head>
    <title>feedback</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="login" style="width:360px;">
        <h1 align="center">Thanks For your Feedback</h1>
            <a href="/" style="display: block;text-align:center;text-decoration:none;">logout</a>
    </div>
</body>

</html>