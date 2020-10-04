<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Product</title>
    <style>
 html,body
        {
          background:url("https://i.pinimg.com/564x/c4/8d/6c/c48d6c448f8e7b54cb95b08d6fe3063c.jpg");
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;
        }
        a{
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
<?php 
include('searchprod.php');
$conn=new mysqli("localhost","root","","demo");
if($conn->connect_error){
    exit('Error connection ');

}
	else
	{
            $sql="select P_ID,P_TYPE,P_NAME,BRAND,STOCK,PRICE from product where P_ID=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('i',$_POST['P_ID']);
            $i=$stmt->execute();
            if($i)
            {
                $result=$stmt->get_result();
                if($result->num_rows > 0)
                {
                    $row=$result->fetch_assoc();
                    ?>
                    <form method="POST">
                   P_ID:<br><input type="text" class="btn1" name="P_ID" value="<?php echo $row['P_ID'] ?>"><br>
                    STOCK:<br><input type="text" class="btn1" name="STOCK" value="<?php echo $row['STOCK'] ?>"><br>
                    PRICE:<br><input type="text" name="PRICE" class="btn1" value="<?php echo $row['PRICE'] ?>"><br>
                        <button type="submit" class="btn" name="save">Save</button><br>
                    </form>
                    <?php  
                    if(isset($_POST['save']))
                    {
                        $stmt->close();
                        $P_ID=$_POST['P_ID'];
                        $STOCK=$_POST['STOCK'];
                        $PRICE=$_POST['PRICE'];
                        $sql1="update product set STOCK=?,PRICE=?  where P_ID=?";
                        $stmt = $conn->prepare($sql1);
                        $stmt->bind_param('iii',$STOCK,$PRICE,$P_ID);
                        $i1=$stmt->execute();
                        if($i1)
                        {
                            echo "Update Successful";
                        }
                        else
                        {
                            echo "Not successfull";
                        }
                    }
                }
                else
                {
                    echo "No records";
                }

            }
            else
            {
                echo "Try Again";
            }
        }   
    
?>
    
</body>
<body>
<form>
    <div>
        <br><br><a  href ="index1.html">BACK</a>
        </div>
</form>
</body>
</html>
