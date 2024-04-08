<?php
session_start();
if(isset($_SESSION['Name'])){
    echo "welcome" . $_SESSION['Name'];
    echo "<br>";
}
else{
     echo "please login to continue";
}
?>