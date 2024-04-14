<?php
$con=mysqli_connect('localhost','root',"","developer");
if($con)
{
    echo "connection successful";
    $user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comments=$_POST['comments'];
$query="insert into userinfodata (user,email,mobile,comments) values('$user','$email','$mobile','$comments')";
echo "$query";
mysqli_query($con,$query);
$r=mysqli_affected_rows($con);
if($r>0)
header("location:index.php");
else
echo mysqli_error($con);
}

?>


