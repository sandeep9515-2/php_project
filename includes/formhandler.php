<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") 
{
    $name=$_POST["username"];
    $password=$_POST["password"];
    if(empty($name)){
        exit();
        header("Location: ../index.php");
    }
    echo $name;
    echo "<br>";
    echo $password;
    header("Location: ../index.php");
}
?>
