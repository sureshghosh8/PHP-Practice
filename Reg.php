
<body>
<form action="Reg.php" method="POST">
<fieldset>
<legend align="left">RegForm</legend>
<table>
<tr><td>Name</td>
<td><input type="text" placeholder="Enter Name Here" required="required" name="na" id="na"></td></tr>

<tr><td>Password</td>
<td><input type="password"  placeholder="Enter password Here" required="required" name="p1" ></td></tr>

<tr><td>RePassword</td>
<td><input type="password"  placeholder="Enter Repassword Here" required="required" name="p2" ></td></tr>


<tr><td>Email</td>
<td><input type="email"  placeholder="Enter Email Here" required="required" name="e1" ></td></tr>


<tr><td>Date</td>
<td><input type="date"  name="d1" ></td></tr>

<tr><td>PhoneNo</td>
<td><input type="number"  name="ph1" ></td></tr>



<tr><td>Gender</td>
<td><input type="radio" name="r1" checked value="male" >Male
<input type="radio" name="r1" value="Female" >FeMale
</td></tr>

<tr><td>Language</td>
<td><input type="checkbox" checked name="c1" value="Hindi" >Hindi
<input type="checkbox" name="c2" value="English" >English
</td></tr>
<tr><td>course</td>
<td><select name="s1">
<optgroup label="Btech">
<option value="CS">CS</option>
<option value="EE">ee</option>
<option value="ME">Me</option>
</optgroup>

<optgroup label="MBA">
<option value="finance">Finance</option>
<option value="Hr">Hr</option>
</optgroup>
</select>
</td>
</tr>
<tr>
<tr>
<td>Comment</td>
<td><textarea rows="7" cols="20" name="CM"></textarea>
</td>
</tr>
<tr>
<td><input type="submit"  value="RegisterNow" name="b1"></td>
<td><input type="reset" value="Referesh" ></td></tr>
</table>
</fieldset>
<form>
<?php
if(isset($_POST['b1']))
{
$Name=$_POST['na'];
$pwd=$_POST['p1'];
$email=$_POST['e1'];
$Dob=$_POST['d1'];
$phone=$_POST['ph1'];
$gen=$_POST['r1'];
$lan1=$_POST['c1'];
$lang2=$_POST['c2'];
$course=$_POST['s1'];
$cmt=$_POST['CM'];
$con=mysqli_connect("localhost","root","","php");
if(!$con)
{
    echo mysqli_connect_error();

}
else{
$q="insert into applicant values('$Name','$pwd','$email','$Dob','$phone','$gen','$lan1','$lang2','$course','$cmt')";
    mysqli_query($con,$q);
    $r=mysqli_affected_rows($con);
    if($r>0)
    echo"you are Successfully registered";
else
echo"some promblem is occured";
}
}
?>