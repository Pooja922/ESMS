<?php 


$conn=new mysqli("localhost","root","","demo");

if($conn->connect_error){
    die("connection failed:". $conn->connect_error);
}
?>
<!DOCTYPE html>
<head>
<title>DELETE</title>
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
height:200px;

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
    P_ID:<input type="text" name="P_ID" required>
       <input type="submit" class="btn" name="submit" value="DELETE">
      <?php
        
       if(isset($_POST['submit'])){

           $P_ID=$_POST['P_ID'];

           $sql="Delete from `product` where `P_ID`='$P_ID'";
           $r=mysqli_query($conn,$sql);
            if($r){
                        echo "Record deleted successfully";
                }
                else{
                    echo "Error deleting record ";
                    }




       }
       ?>
<button class="btn" onclick="myFunction1()">BACK</button>
    <script>
    function myFunction1(){
        location.replace("index1.html")

    }

</script>
</form>
</div>
</body>
</html>