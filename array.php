<?php
$a=array(10,40,50,30,40,90);
print_r($a);
?>
<br>
<?php
$a[0]="10";
$a[1]="30";
$a[2]="30";
$a[3]="30";
$a[4]="30";
print_r($a);
?>
<br>
<?php
$a=array(10,20,10.6,true,false,"ram","dinesh");

print_r($a);
?>
<br>
<?php
$a=array(10,20,10.6,true,false,"ram","dinesh");
for($i=0;$i<7;$i++)
echo $a[$i]."";
?>
<br>
<!--foreachLoop -->
<?php
$a=array(10,20,10.6,true,false,"ram","dinesh");
foreach($a as $b)
echo $b."";
?>
<?php
$a=array(10,20,10.6,true,false,"ram","dinesh");
print_r($a);
?>
<br>
<!--Associative Arrays -->
<?php
$a=array("a"=>10,"b"=>30,"c"=>40);
echo $a['a'];
print_r($a);
?>
<!--ex-2-->
<?php
$a=array("n1"=>"ram","n2"=>"raju","n3"=>"mayank");
print_r($a)
?>
<br>
<!--ex-3-->
<?php
$ages['Peter']="32";
$ages['raj']="30";
$ages['joes']="34";
echo "peter is ".$ages['Peter']."years old.";
?>
<br>
<!--Multidimensional Arrays-->
<?php
$stu=array
(
"ram"=>array(40,50,60),
"raj"=>array(90,30),
"kamal"=>array(4,6,23,45)
);
print_r($stu);
?>
<!-- to traverse Multidimensional Arrays-->
<?php
$stu=array(
    "ram"=>array(40,50,60),
    "raj"=>array(90,30),
    "kamal"=>array(4,6,23,45)
);
foreach($stu as $row ){
    foreach($row as $c)
    {
        echo $c."";
    }
    echo"<br>";
}
?>