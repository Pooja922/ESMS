<!DOCTYPE html>
<head>
<title>ADD</title>
       <style>
           html, body
{
  background:url("https://i.pinimg.com/564x/c4/8d/6c/c48d6c448f8e7b54cb95b08d6fe3063c.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
input{
width: 90%;
padding: 10px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid rgb(4, 54, 119);
box-sizing: border-box;
}
.container {
padding: 20px;
margin-top: 120px;
margin-left: 500px;
margin-right: 600px;
border: 1px solid rgb(4, 54, 119);
position: center;
box-shadow: 5px 10px 18px ;
width:250px;
height:600px;

}
.btn
{
    float: right;
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
  
</style>
</head>
<body>
<div class="container">
<form method="POST" action="#">
<?php 


$mysqli=new mysqli("localhost","root","","demo");
if($mysqli->connect_error){
    exit('Error connection ');

}
$stmt=$mysqli->prepare("Insert into employee(E_NAME,DOB,PHONE,EMAIL,SALARY,DESIGNATION) values(?,?,?,?,?,?)");
$stmt->bind_param("ssisis",$_POST['E_NAME'],$_POST['DOB'],$_POST['PHONE'],$_POST['EMAIL'],$_POST['SALARY'],$_POST['DESIGNATION']);
$r=$stmt->execute();
?>




    E_NAME:<input type="text"  name="E_NAME" required>
    DOB:<input type="date"  name="DOB" required>
    PHONE:<input type="text"   name="PHONE" required>
    EMAIL:<input type="email"  name="EMAIL" required>
    SALARY:<input type="text"   name="SALARY" required>
    DESIGNATION:<input type="text"  name="DESIGNATION" required>
    <input type="submit" class="btn" value="SUBMIT">
    <?php
if($r)
echo " RECORD INSERTED SUCCESSFULLY<br>";
$stmt->close();
?>
    <button class="btn" onclick="myFunction()">BACK</button>
    <script>
    function myFunction(){
        location.replace("index1.html")

    }

</script>

</form>
</div>
</body>
</html>