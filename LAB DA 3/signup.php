<?php
    $con=mysqli_connect("localhost","root","","labda3");
    $error="";
    if(isset($_GET['submit'])){
        $usern=$_GET['u_name'];
        $pass=$_GET['password'];
        $name=$_GET['f_name'];
        $DOB=$_GET['dob'];
        $phone=$_GET['phone'];
        $sql="INSERT INTO `registered`(`username`, `pass`, `name`, `DOB`, `Phone`) VALUES ('$usern','$pass','$name','$DOB',$phone)";

        $sqlcheck="SELECT * FROM `registered` WHERE `username`='$usern'";
        $rescheck=mysqli_query($con,$sqlcheck);
        $count=mysqli_num_rows($rescheck);
        
        if($count==0)
        {
            mysqli_query($con,$sql);
            header("location: login.php");
        }
        else
        {
            $error="username already exists";
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
    <script defer src="templates/script.js"></script>
</head>
<body class="greenbg">
    <div class="container">
        <div class=" grey lighten-4 container z-depth-2">
            <h4 class="center white-text">
                Register Here
            </h4>
            <form id="form" method="GET" class="white" >
                <div>
                    <label  for="first_Name">Name</label>
                    <input placeholder="Eg: John" type="text" id="first_name" name="f_name">
                </div>
                <div>
                    <label  for="name">Username</label>
                    <input type="text" name="u_name" id="name">
                </div>
                <div>
                    <label  for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <div>
                    <label  for="c_password">Confirm Password</label>
                    <input type="password" name="c_password" id="c_password">
                </div>
                <div>
                    <label  for="dob">Date of Birth</label>
                    <input type="date" name="dob" id="dob">
                </div>
                <div>
                    <label  for="mobile">Phone Number</label>
                    <input type="number" name="phone" id="mobile">
                </div>
                <br>
                <div class="center">
                    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                </div>
                <div id="error" style="color: red;"><?php echo $error;?></div>
            </form>
            
            <div class="blbox"></div>
            <div class="center">
                <p>Already have an account?
                <a href="login.php">Login here</a></p>
            </div>
            <div class="blbox"></div>
        </div>
    </div>
    
</body>
</html>