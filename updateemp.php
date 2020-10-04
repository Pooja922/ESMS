<!DOCTYPE html>
<head>
    <title>Update Employee</title>
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
include('searchemp.php');
$conn=new mysqli("localhost","root","","demo");
if($conn->connect_error){
    exit('Error connection ');

}
	else
	{
            $sql="select E_ID,E_NAME,DOB,PHONE,EMAIL,SALARY,DESIGNATION from employee where E_ID=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('i',$_POST['E_ID']);
            $i=$stmt->execute();
            if($i)
            {
                $result=$stmt->get_result();
                if($result->num_rows > 0)
                {
                    $row=$result->fetch_assoc();
                    ?>
                    <form method="POST">
                    E_ID:<br><input type="text" class="btn1" name="E_ID" value="<?php echo $row['E_ID'] ?>"><br><br>
                    SALARY:<br><input type="text" class="btn1" name="SALARY" value="<?php echo $row['SALARY'] ?>"><br><br>
                        <button type="submit" class="btn" name="save">SAVE</button><br><br>
                    </form>
                    <?php  
                    if(isset($_POST['save']))
                    {
                        $stmt->close();
                        $E_ID=$_POST['E_ID'];
                        $SALARY=$_POST['SALARY'];
                        $sql1="update employee set SALARY=? where E_ID=?";
                        $stmt = $conn->prepare($sql1);
                        $stmt->bind_param('ii',$SALARY,$E_ID);
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
       <br><br> <a  href ="index1.html">BACK</a>
        </div>
</form>
</body>
</html>
