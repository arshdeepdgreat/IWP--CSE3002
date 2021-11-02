<?php

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];

        $errorname=false;
        $erroremail=false;

        if(empty($name)||empty($email)){
            echo"<span style='color:red;'>Name should not be empty</span>";
            $errorname=true;
        }
        else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo"<span style='color:red;'>Use a valid email should contain @ symbol</span>";
            $erroremail=true;
        }
    }

?>
<script>
    var errorempty="<?php echo $errorname?>";
    var erroremail="<?php echo $erroremail?>";

    if(errorempty==true){
        $("#first_name","#mail-id").addClass("inputerror");
    }
    if(erroremail==true){
        $("#mail-id").addClass("inputerror");
    }
