<?php
$em=$_POST['e1'];
$pw1=$_POST['p1'];


$con=mysqli_connect("localhost","root","","php");
if(!$con)
{
echo mysqli_connect_error();
}
else
{
$q="select * from applicant  where email='$em'";
$res=mysqli_query($con,$q);
$r=mysqli_fetch_rows($con);
if($r)
{
$pw=$r[1];
if($pw1==$pw)
header("location: search.php");
else
echo "Password is incorrect";
}
else
echo "Email id is incorrect";
}
?>