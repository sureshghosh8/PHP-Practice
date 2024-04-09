<?php
echo "hii";
$em=$_POST['e1'];
$pw1=$_POST['p1'];
session_start();

$con=mysqli_connect("localhost","root","","php");
if(!$con)
{
echo mysqli_connect_error();
}
else
{
$q="select * from applicant  where email='$em'";
$res=mysqli_query($con,$q);
$r=mysqli_fetch_row($res);
if($r)
{
$pw=$r[1];
if($pw1==$pw)
{
    $_SESSION['na']=$r[0];
    $_SESSION['em']=$r[2];
header("location: wel.php");
}
else
echo "Password is incorrect";
}
else
echo "Email id is incorrect";
}
?>