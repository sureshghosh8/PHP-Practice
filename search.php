<?php

$em=$_POST['e1'];

$con=mysqli_connect("localhost","root","","php");
if(!$con)
{
echo mysqli_connect_error();
}
else
{
$q="select * from applicant where email='$em'";
$res=mysqli_query($con,$q);
$r=mysqli_fetch_row($res);
if($r)
{
echo "Name  is ".$r[0];
echo "Email  is ".$r[2];
echo "City  is ".$r[3];
echo "Dob  is ".$r[4];
echo "Phone  is ".$r[5];
echo "Gender  is ".$r[6];
}
else
echo "Email id is wrong";
}
?>
