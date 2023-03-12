<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])){ 
?>
<!doctype html>
<html>
    <head>
        <title>HOME</title>
        <link rel="stylesheet"  type="text/css" href="style.css">
</head>
<body>
     <h1>Hello,John <?php echo $_SESSION['name']; ?></h1>
     <a href="logout.php">Logout</a>
</body>
</html>
<?php
}else{
    header("location:index.php");
    exit();
}
?>