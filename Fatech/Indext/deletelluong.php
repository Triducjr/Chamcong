<?php
    $conn = new mysqli('localhost', 'root', '', 'qlcongnhanvien') or die("Kết nối thất bại!");
    $sql = "DELETE FROM mucluong WHERE Mamucluong='".$_GET["id"]."'";
    $conn->query($sql);
    
    header("location: Luong.php");
?>