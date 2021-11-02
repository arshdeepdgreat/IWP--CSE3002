<?php

echo 'Job title applied: '.$_POST["job"];
echo '<br>';
echo 'Name: '.strtoupper($_POST["name"]);
echo '<br>';

echo 'Mobile No: '.$_POST["phone"];
echo '<br>';

echo 'Email: '.$_POST["email"];
echo '<br>';

echo 'Date Of Birth: '.$_POST["DOB"];
echo '<br>';

$allowedExts = array("doc", "pdf");
$temp = explode(".", $_FILES["resume"]["name"]);
$extension = end($temp);

if (in_array($extension, $allowedExts) && $_FILES["resume"]["size"] < 5000000){
    //echo  basename($_FILES["resume"]["name"]);
    echo '<br>';
    echo 'File uploaded sucessfully';
}

$search = $_POST["college"];
$stringz = file_get_contents("list.txt");
$stringz = explode(";", $stringz);
if(!(in_array($search, $stringz))){
    $uploadok=0;
    echo '<br>'.$search.'college not found';
   // header("location: form.html");
}
else{
    $uploadok=1;
}

?>