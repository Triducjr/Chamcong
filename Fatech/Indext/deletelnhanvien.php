<?php
    $conn = new mysqli('localhost', 'root', '', 'qlcongnhanvien') or die("Kết nối thất bại!");
    $sql = "DELETE FROM tblnhanvien WHERE MaNV='".$_GET["id"]."'";
    $conn->query($sql);
    
    header("location: Nhanvien.php");
?>