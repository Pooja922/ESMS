<!DOCTYPE html>
<head>
<title>VIEW</title>
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
a,h2{
    color:black;
}

		
		</style>
</body>
<body>
<h3>ENTER THE ORD NO</h3>
<form action="" method="POST">
    <input type="text" class="btn1" name="ORD_NO" />
    <input type="submit" class="btn" name="submit" value="SUBMIT">
    
</form>
    
    <?php
    include('pay.php');
    include('searchorder.php');
    $conn=mysqli_connect("localhost","root","","demo");
    if(!$conn){
        die("connection failed");
    }
    if(isset($_POST['submit']))
    {
        $ORD_NO=$_POST['ORD_NO'];
        $sql="SELECT CUST_ID,CUST_NAME,ORD_NO,AMOUNT from payment where ORD_NO='$ORD_NO' ";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($result))
        {
            echo "<br><br>ORD_NO : ";
            echo $row['ORD_NO'];
            echo "<br><br>CUSTOMER ID : ";
            echo $row['CUST_ID'];
            echo "<br><br>CUSTOMER NAME : ";
            echo $row['CUST_NAME'];
            echo "<br><br>TOTAL AMOUNT : ";
             echo $row['AMOUNT'];


        }
    }   
    ?>
    <form>
    <div>
        <a href="index1.html"><br>BACK</a>
        </div>
</form>
    
   
    </body>
    </html>