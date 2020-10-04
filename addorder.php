<?php 

$mysqli=new mysqli("localhost","root","","demo");
if($mysqli->connect_error){
    exit('Error connection ');

}
$stmt=$mysqli->prepare("Insert into orders(ORD_NO,P_ID,QUANTITY,PRICE) values(?,?,?,?)");
$stmt->bind_param("iiii",$_POST['ORD_NO'],$_POST['P_ID'],$_POST['QUANTITY'],$_POST['PRICE']);
$i=$stmt->execute();

?>

<!DOCTYPE html>
<style>
        html, body
        {
          background:url("https://i.pinimg.com/564x/c4/8d/6c/c48d6c448f8e7b54cb95b08d6fe3063c.jpg");
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;
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
.container {
padding: 20px;
margin-top: 120px;
margin-left: 500px;
margin-right: 600px;
border: 1px solid rgb(4, 54, 119);
position: center;
box-shadow: 5px 10px 18px ;
width:250px;
height:500px;

}
a{
    color:black;
}
.ty{
width: 90%;
padding: 10px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid rgb(4, 54, 119);
box-sizing: border-box;
}
        </style>
</head>
<body>
<head>
<title>ORDER</title>

<div>
<?php
include('searchprod.php');
?>
</div>
<div class="container">
<form method="POST" action="#">
    ORD_NO:<input class="ty" type =number" name="ORD_NO" required>
    P_ID:<input class="ty" type="number" name="P_ID" required>
    QUANTITY:<input class="ty" type="number" name="QUANTITY" required>
    PRICE:<input class="ty" type="text" name="PRICE" required>
    <input type="submit" class="btn" value="SUBMIT"><br>
    <?php
    
    if($i)
        echo "ORDER PLACED SUCCESSFULLY";
    ?>
    <button class="btn" onclick="myFunction()">NEXT</button>
    <script>
    function myFunction(){
        location.replace("addcust.php")

    }
</script>
</form>
</div>
</body>
<body>
<form>
    <div>
       <br><br> <a  href ="index1.html">BACK</a>
        </div>
</form>
</body>
</html>
