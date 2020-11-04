<?php
include ("config.php");
if ($_SERVER['REQUEST_METHOD']==='GET'){
    $npm = $_GET['id'];
    $result = mysqli_query($config, "DELETE FROM data WHERE npm=$npm");
}
header("Location: localhost:13000/crud/index.php");
?>
