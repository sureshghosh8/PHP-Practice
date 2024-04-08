<?php
$em=$_POST['e1'];
$pw1=$_POST['p1'];
$pw2=$_POST['p2'];
$con=mysqli_connect("localhost","root","","php");
if(!$con)
{
    echo mysqli_connect_error();
}
else{
    $q="update applicant set pwd='$pw2' where email='$em' and pwd='$pw1'";
    mysqli_query($con,$q);
    $r=mysqli_affected_rows($con);
    if($r>0)
    echo "password updated";
else
echo "Email id or password is incorrect";

}
?>