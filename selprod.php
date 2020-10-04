<!DOCTYPE Html>
<html>
<head>
		<title>PRODUCT DETAILS</title>
		<body>
<style>
        html, body
        {
          background:url("https://i.pinimg.com/564x/c4/8d/6c/c48d6c448f8e7b54cb95b08d6fe3063c.jpg");
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;
        }
        </style>
        <style>
            table {
  border-collapse: collapse;
  width:50%;
}

table, td, th {
  border: 1px solid black;
}
th{
    color:red;
}
a,h2{
    color:black;
}

		
		</style>
</body>
	</head>
<body>
	
	<form method="post">
	<legend><h3>PRODUCT DETAILS</h3></legend>
	<?php
		$conn=mysqli_connect("localhost","root","","demo");
		if(!$conn){
			die("connection failed");
		}
		
		$sql="SELECT P_ID,P_TYPE,P_NAME,BRAND,STOCK,PRICE from product";
		$result=mysqli_query($conn,$sql);
		echo"<table>";
		echo"<tr><th>P_ID</th><th>P_TYPE</th><th>P_NAME</th><th>BRAND</th><th>STOCK</th><th>PRICE</th></tr>"; 
		
		if($result){
			
			while($row=mysqli_fetch_assoc($result)){
				echo "<tr><td>".$row["P_ID"]." </td>"  ; 
				echo  "<td>".$row["P_TYPE"]."</td>" ; 
				echo "<td>".$row["P_NAME"]. "</td>"; 
				echo "<td>" .$row["BRAND"]."</td>";
				echo "<td>".$row["STOCK"]."</td>" ;
                echo "<td>".$row["PRICE"]."</td></tr>";
               
			}
			
		}
		else
		{
			echo "no rows";
		}
		echo "</table><br><br>";
						
	?>

	</form>
	<body>
<form>
    <div>
        <a  href ="index1.html">BACK</a>
        </div>
</form>
</body>
</html>