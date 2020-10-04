<!DOCTYPE html>
<html>
    <head>
		<title>EMPLOYEE DETAILS</title>
    </head>
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
  width:70%;
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
	<h2>EMPLOYEE DETAILS</h2>
<?php

    $conn=mysqli_connect("localhost","root","","demo");
    if(!$conn)
    {
        die("connection failed");
    }

    $sql="SELECT E_ID,E_NAME,DOB,PHONE,EMAIL,SALARY,DESIGNATION from employee";
    $result=mysqli_query($conn,$sql);
    echo"<table>";
    echo"<tr><th>E_ID</th><th>E_NAME</th><th>DOB</th><th>PHONE</th><th>EMAIL</th><th>SALARY</th><th>DESIGNATION</th></tr>"; 
    


    if($result){

     while($row=mysqli_fetch_assoc($result)){

        echo "<tr><td>".$row["E_ID"]."</td>";
        echo "<td>".$row["E_NAME"]."</td>";  
        echo "<td>" .$row["DOB"]. "</td>"; 
        echo "<td>" .$row["PHONE"]."</td>";
        echo "<td>" .$row["EMAIL"]. "</td>";
        echo "<td>".$row["SALARY"]. "</td>";
        echo "<td>".$row["DESIGNATION"]. "</td></tr>";
    }
}
else
{
    echo "no rows";
}
echo "</table><br><br>";
?>

</body>
<body>
<form>
    <div>
        <a  href ="index1.html">BACK</a>
        </div>
</form>
</body>
</html>