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
.btn
{
    margin-right: 20px;
    margin-top: 20px;
    padding: 6px 10px;
    font-size: 14px;
    font-weight: bold;
    color: #fff;
    background:url("https://i.pinimg.com/564x/b0/64/76/b06476a6594924d71b1cac87f66272e3.jpg");
     border-radius: 30px;
    border: 1px solid #004D8A;
   
}

.btn1
{
    margin-right: 20px;
    margin-top: 20px;
    padding: 2px 0px;
    font-size: 14px;
    font-weight: bold;
    color: black;
    border-radius: 30px;
   
}
		
		</style>
</head>
<body>
<h3>ENTER THE EMPLOYEE ID</h3>
<form action="" method="POST">
    <input type="text" class="btn1" name="E_ID" />
    <input type="submit" class="btn" name="submit" value="SUBMIT">
</form>
<table>
    <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>DOB</th>
    <th>PHONE</th>
    <th>EMAIL</th>
    <th>SALARY</th>
    <th>DESIGNATION</th>
    </tr><br>
    <?php
    $conn=mysqli_connect("localhost","root","","demo");
    if(!$conn){
        die("connection failed");
    }
    if(isset($_POST['submit']))
    {
        $E_ID=$_POST['E_ID'];
        $sql="SELECT E_ID,E_NAME,DOB,PHONE,EMAIL,SALARY,DESIGNATION from employee where E_ID='$E_ID' ";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($result))
        {
            ?>
            <tr>
            <th><?php echo $row['E_ID']; ?></th>
            <th><?php echo $row['E_NAME']; ?></th>
            <th><?php echo $row['DOB']; ?></th>
            <th><?php echo $row['PHONE']; ?></th>
            <th><?php echo $row['EMAIL']; ?></th>
            <th><?php echo $row['SALARY']; ?></th>
            <th><?php echo $row['DESIGNATION']; ?></th>
            </tr>


            <?php
        }
    }   
    ?>
    </table><br><br>
</div>   
    </body>
    </html>