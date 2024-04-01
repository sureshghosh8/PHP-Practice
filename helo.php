<html>
<head>
<title>My First PHP Page</title>
<style>
H1
{
Color:red;
}
P
{
Color:teal;
}
</style>

</head>
<body>
<h1>Hello welcome to php</h1>
<?php echo"welcome to the fisrt code of php"
?>

<?php
$a=10;
$b="Ramu";
$c=10.6;

echo $a;
echo var_dump($a);   // integer 10
echo var_dump($b)   //string(4) ramu
?>
<?php
$a="ram";
$b="Sharma";
$c=$a." ".$b;
echo $c;                     // ram Sharma
?>  
<?php
if(isset($_POST['b1']))
{
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$a+$b;
echo "Sum is $c";
}

