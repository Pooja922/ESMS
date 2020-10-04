<!DOCTYPE Html>
<html>
<head>
		<title>CUSTOMER DETAILS</title>
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
<body>
	<form method="post">
    <h3>CUSTOMER DETAILS</h3>
	<?php
		$conn=mysqli_connect("localhost","root","","demo");
		if(!$conn){
			die("connection failed");
		}
		
		$sql="SELECT CUST_ID,CUST_NAME,ORD_NO,ADDRESS_DETAIL,PHONE from customer";
		$result=mysqli_query($conn,$sql);
		echo"<table>";
		 
		
		if($result){
			echo"<tr><th>CUST_ID</th><th>CUST_NAME</th><th>ORD_NO</th><th>ADDRESS_DETAIL</th><th>PHONE</th></tr>";
			while($row=mysqli_fetch_assoc($result)){
                
				echo "<tr><td>".$row["CUST_ID"]." </td>"  ; 
				echo "<td>".$row["CUST_NAME"]. "</td>"; 
				echo "<td>".$row["ORD_NO"]. "</td>"; 
				echo "<td>" .$row["ADDRESS_DETAIL"]."</td>";
				echo "<td>".$row["PHONE"]."</td></tr>" ;
               
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