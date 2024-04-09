
<?php
session_start();
if(!isset($_SESSION['na']))
header("location: login.html");
?>

<body>
   <h1>welcome <?php echo $_SESSION['na']; ?>
</body>
</html>