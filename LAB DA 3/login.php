<?php
    $error="";
    $con=mysqli_connect("localhost","root","","labda3");
    if(isset($_GET['uname']) && isset($_GET['password'])){
        $user=mysqli_real_escape_string($con,$_GET['uname']);
        $pass=mysqli_real_escape_string($con,$_GET['password']);
        $sql="SELECT * from registered where username='$user'and pass='$pass'";
        $res=mysqli_query($con,$sql);
        $count=mysqli_num_rows($res);
        if($count==1){
            header("location:home.php?name=$user&password=$pass");
        }
        else{
            $error="Invalid credentials";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IWP LAB ASSESSMENT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="templates/style.css">
    <script defer src="templates/scr.js"></script>
</head>
<body class="greenbg">
    <div class="container">
        <div class="grey lighten-4 container z-depth-2">
            <h4 class="center white-text">
                Sign up
            </h4>
            <form id="form" method="GET" class="white">
                <div>
                    <label for="name">Username</label>
                    <input type="text" name="uname" id="name">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="center">
                    <button class="btn btn-primary"type="submit">Submit</button>
                </div>
                <div id="error" class="rd"><?php echo $error;?></div>
            </form>
            <div class="blbox"></div>
            <div class="center">
                
                <p>Dont have an account?
                <a href="signup.php">Create here</a></p>
            </div>
            <div class="blbox"></div>
        </div>
    </div>
    
</body>
</html>