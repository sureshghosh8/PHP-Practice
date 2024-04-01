
 <?php
$em=$_POST['e1'];
$con=mysqli_connect("localhost","root","","php");
if(!$con)
{
echo mysqli_connect_error();
}
else
{
$q="delete from applicant where email='$em'";
mysqli_query($con,$q);
$r=mysqli_affected_rows($con);
if($r>0)
echo "data deleted";
else
echo "Email id is not found";
}
?>