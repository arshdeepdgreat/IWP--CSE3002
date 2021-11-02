<?php
    $con=mysqli_connect("localhost","root","","labda3");
    if(isset($_GET['name']) && isset($_GET['password'])){
        $user=mysqli_real_escape_string($con,$_GET['name']);
        $pass=mysqli_real_escape_string($con,$_GET['password']);
        $sql="SELECT * from registered where username='$user' and pass='$pass'";
        $res=mysqli_query($con,$sql);
        $info=mysqli_fetch_array($res,MYSQLI_ASSOC);
        $count=mysqli_num_rows($res);
        if($count!=1){
            header('location:login.php');
        }
    }
    else{
        header('location:login.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="templates/style.css">
</head>
<body class="greenbg">
    <nav class="black z-depth-0">
        <div class="container">
            <a href="#" class="brand-logo brand-text"><?php echo $info['name'];?></a>
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li><a href="login.php" class="btn brand z-depth-0">Logout</a></li>
            </ul>
        </div>
    </nav>
    <h5 class="center">Connection sucessful</h5>
    <h1 class="center">THIS IS CONFIDENTIAL INFO THAT IS ONLY ACCESSABLE IF DETAILS PROVIDED IS VALID</h1>

    <div class="container">
        <div class="grey lighten-4 container z-depth-3">
            <h4 class="center white-text">
                Personal Details
            </h4>
            <div class="container">
                <table>
                    <th>Field</th>
                    <th>Details</th>

                    <tr>
                        <td>Name: </td>
                        <td><?php echo $info['name'];?></td>
                    </tr>
                    <tr>
                        <td>Date of Birth: </td>
                        <td><?php echo $info['DOB'];?></td>
                    </tr>
                    <tr>
                        <td>Mobile Number: </td>
                        <td><?php echo $info['Phone'];?></td>
                    </tr>
                </table>
                <div class="blbox"></div>
            </div>
        </div>
    </div>
</body>
</html>