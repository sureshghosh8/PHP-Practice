<?php
$con=mysqli_connect("localhost","root","","php");
if(!$con)
{
echo mysqli_connect_error();
}
else
{
$q="select * from applicant";
$res=mysqli_query($con,$q);
echo "<table border='2'><tr><td>Name</td><td>Email</td><td>DOB</td><td>Phone</td></tr>";
while ($r=mysqli_fetch_row($res))
{
echo "<tr>";
echo "<td>".$r[0]."</td>";
echo "<td>".$r[2]."</td>";
echo "<td>".$r[3]."</td>";
echo "<td>".$r[4]."</td>";
echo "</tr>";
}
echo "</table>";
}
?>