<!DOCTYPE Html>
<html>
<head>
		<title>PAYMENT</title>
	</head>
<body>
	<?php
		$conn=mysqli_connect("localhost","root","","demo");
		if(!$conn){
			die("connection failed");
		}
		$sql2="delete from payment";
		$result1=mysqli_query($conn,$sql2);

		$sql="CALL payment ";
		$result=mysqli_query($conn,$sql);?>
    </body>
</html>