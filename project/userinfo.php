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
<?php
$con=mysqli_connect('localhost','root',"","developer");
if($con)
{
    echo"connection successful";
    echo"No connection";
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="insert into users (username,email,password) values('$user','$email','$password')";
    echo "$query";
    mysqli_query($con,$query);
    $r=mysqli_affected_rows($con);
    if($r>0)
    header("location:wel.php");
else
echo mysqli_error($con)
}

