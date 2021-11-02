<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        form {
            max-width: 800px;
            margin: 6rem;
            margin-bottom: 0px;
            padding: 20px;
            margin-top: 5rem
        }
        .greenbg{
            background-color: #155252;
        }
        h4{
            background-color:black;
            padding:10px;
        }

        .blbox {
            padding-top:0.5rem;
        }
        label {
            font-size:18px; color:black;
        }
        .rd{
            color:red;
        }
        .dp{
            border-radius: 50%;
        }
    </style>
    <script>
        function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
        $(document).ready(function() {
            $("form").submit(function(event){
                event.preventDefault();
                var name=$("#first_name").val();
                var email= $("#mail-id").val();
                var submit = $("#submit").val();
                $("#emerror").load("mail.php", {
                    name: name,
                    submit: submit,
                    email: email
                });
            });
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
</head>
<body class="greenbg">
    <!-- nav bar browse + about + login -->
    <div class="container">
        <div class=" grey lighten-4 container z-depth-2">
            <h4 class="center white-text">
                Register Here
            </h4>
            <form id="form" method="POST" action = "mail.php">
                <div>
                    <label  for="first_Name">Name</label>
                    <input placeholder="Eg: John" type="text" id="first_name" name="f_name" >
                </div>
                <p id="emerror"></p>
                <!-- <div>
                    <label  for="name">Username</label>
                    <input type="text" name="u_name" id="name" >
                    <p class="emerror"></p>
                </div>
                <div>
                    <label  for="password">Password</label>
                    <input type="password" name="password" id="password" >
                    <p>
                        <label>
                            <input type="checkbox" onclick="myFunction()"/>
                            <span>Show/Hide password</span>
                        </label>
                    </p> 
                    <br> 
                </div>
                <div>
                    <label  for="c_password">Confirm Password</label>
                    <input type="password" name="c_password" id="c_password" >
                    <p class="error"></p>
                </div>
                <div>
                    <label  for="dob">Date of Birth</label>
                    <input type="date" name="dob" id="dob">
                    
                </div>-->
                <div>
                    <label  for="mail-id">Email</label>
                    <input type="email" name="mail-id" id="mail-id" >
                    <p id="emerror"></p>
                <br>
                <div class="center">
                    <button class="btn btn-primary" type="submit" name="submit" id="submit" value="submit">Submit</button>
                </div>
                <div id="error" style="color: red;"></div>
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