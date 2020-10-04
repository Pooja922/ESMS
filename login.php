<!DOCTYPE html>
<head>
</head>
<body>
<?php 

$con=mysqli_connect("localhost","root");
mysqli_select_db($con,'demo');

if(isset($_POST['txtUserName'])){
    $uname=$_POST['txtUserName'];
    $password=$_POST['txtPassword'];
    $sql="select * from login where user='". $uname."'and password='".$password."' limit 1";
    $result=mysqli_query($con,$sql);
    $num=mysqli_num_rows($result);
    if($num==1){
        header("location:index1.html");
        exit();

    }
    else{
        ?>
        <script>
        alert("INVALID USERNAME OR PASSWORD");
        </script>
        <?php
    }
}





?>
</body>
</html>




<!DOCTYPE html>

<head>
    
    <title>Login Page</title>
    <style>
        html, body
        {
          background:url("data:image/jpeg;base64,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");
        }
        .logincontent
        {
            position: fixed;
            width: 350px;
            height: 280px;
            top: 50%;
            left: 50%;
            margin-top: -150px;
            margin-left: -175px;
            background: #004D8A;
            padding-top: 10px;
        }
        .loginheading
        {
            border-bottom: solid 1px #ECF2F5;
            padding-left: 18px;
            padding-bottom: 10px;
            color: #ffffff;
            font-size: 20px;
            font-weight: bold;
           
        }
        label
        {
            color: #ffffff;
            display: inline-block;
            margin-left: 18px;
            padding-top: 10px;
            font-size: 15px;
        }
        input[type=text], input[type=password]
        {
            font-size: 14px;
            padding-left: 10px;
            margin: 10px;
            margin-top: 8px;
            margin-left: 18px;
            width: 300px;
            height: 38px;
            border: 1px solid #ccc;
            border-radius: 2px;
            
            font-size: 14px;
        }
       
    .loginremember
        {
            background: #FFFFFF;
            height: 70px;
            margin-top: 20px;
        }
        
       .loginbtn
        {
            float: right;
            margin-right: 20px;
            margin-top: 20px;
            padding: 6px 20px;
            font-size: 14px;
            font-weight: bold;
            color: #fff;
            background-color: #004D8A;
             border-radius: 30px;
            border: 1px solid #004D8A;
           
        }
       
    </style>
</head>
<body>
    <div class="logincontent">
    <form method="POST" action="#">
        <div class="loginheading">
            Login
        </div>
        <label for="txtUserName">
            Username:</label>
        <input type="text" id="txtUserName" name="txtUserName" />
        <label for="txtPassword">
            Password:</label>
        <input type="password" id="txtPassword" name="txtPassword" />
        <div class="loginremember">
            
            <input type="submit" class="loginbtn" value="Login" id="btnSubmit" />
            </form>
        </div>
    </div>
</body>
</html>