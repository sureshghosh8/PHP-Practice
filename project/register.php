<?php
$con=mysqli_connect('localhost','root',"","developer");
if($con)
{
    echo"connection successful";
    $username=$_POST['na'];
    $email=$_POST['em'];
    $password=$_POST['pwd'];
    $query="insert into users (username,email,password) values('$username','$email','$password')";
    echo "$query";
    mysqli_query($con,$query);
    $r=mysqli_affected_rows($con);
    if($r>0)
    header("location:wel.php");
else
echo mysqli_error($con);
}
?>