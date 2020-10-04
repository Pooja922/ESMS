<!DOCTYPE html>
<head>
<title>VIEW</title>
<style>
            table {
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
}
th{
    color:black;
}
		
		</style>
</head>
<body>
<table>
    <tr>
    <th>PRODUCT ID</th>
    <th>QUANTITY</th>
    <th>PRICE</th>
    <th>TOTAL PRICE</th>
    </tr><br>
    <?php
    $conn=mysqli_connect("localhost","root","","demo");
    if(!$conn){
        die("connection failed");
    }
    if(isset($_POST['submit']))
    {
        $ORD_NO=$_POST['ORD_NO'];
        $sql="SELECT ORD_NO,P_ID,QUANTITY,PRICE,TOTAL_PRICE from totorder where ORD_NO='$ORD_NO' ";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($result))
        {
            ?>
            <tr>
            <th><?php echo $row['P_ID']; ?></th>
            <th><?php echo $row['QUANTITY']; ?></th>
            <th><?php echo $row['PRICE']; ?></th>
            <th><?php echo $row['TOTAL_PRICE']; ?></th>
            </tr>

            <?php
        }
    }   
    ?>
    </table>
   
    </body>
    </html>