<?php
$stu=array
(
"ram"=>array(40,50,60),
"raj"=>array(90,30),
"kamal"=>array(4,6,23,45)
);
foreach($stu as $row)
{
    foreach($row as $c)
    {
    echo $c." ";
    }
echo "<br>";
}


?>
