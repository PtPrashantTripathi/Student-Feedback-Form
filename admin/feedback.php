<?php
include('../dbconn.php');
?>	

<html>
<head>
    <title>Feedback</title>
	<link rel="stylesheet" href="/style.css">
</head>

<body>
    <div class="login" style="width:600px;">
        <h1 align="center">Teacher Feedbacks</h1>
		<table>
		<tr>
			<th>Name</th>
			<th>Subject</th>
			<th>Feedback</th>
		</tr>
		<?php
		$result = mysql_query("SELECT * from feedback");
		while($row = mysql_fetch_array($result)) {
		echo '
		<tr>
			<td>'.$row['name'].'</td>
			<td>'.$row['sub'].'</td>
			<td>'.$row['fb'].'/35</td>
		</tr>
		';
		}
		?>
		</table>
		<a href="../index.php" style="display:block;text-align:center;text-decoration:none;">Go To Home</a>

    </div>
</body>

</html>