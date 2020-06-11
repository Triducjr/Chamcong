<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>

<body>
    <?php
    include 'menu.php';
    ?>

    <form method="post" action="">
        <?php
        if(isset($_GET['id'])){
            $isNew= false;
            $id= $_GET['id'];
            $conn = new mysqli('localhost','root','','qlcongnhanvien');
            $sql = "SELECT * FROM `tblnhanvien` WHERE  MaNV='" .$id ."'";
            $result=$conn->query($sql);
            $row = $result->fetch_assoc();
            $conn->close();
            echo '<h1 style="color: #00FF00;">Sửa Nhân viên</h1>';
        }
        else{
            $isNew=true;
            echo '<h1 style="color: #00FF00;">Thêm Nhân viên</h1>';
        }
        ?>
        <table>
            <tr>
                <td>Mã Nhân viên:</td>
                <td>
                    <input type="text" name='MaNV' value='<?php echo isset($row['MaNV']) ? $row['MaNV'] : '' ?>'>
                    
                </td>
            </tr>            
            <tr>
                <td>Mã mức lương:</td>
                <td>
                    <input type="text" name='Mamucluong' value='<?php echo isset($row['Mamucluong']) ? $row['Mamucluong'] : '' ?>'>
                </td>
            </tr>
            
            <tr>
                <td>Tên Nhân Viên</td>
                <td><input type="text" name="TenNV" value='<?php echo isset($row['TenNV']) ? $row['TenNV']:''?>'></td>
            </tr>
            
            <tr>
                <td>Giới Tính</td>
                <td><input type="text" name="GioiTinh" value='<?php echo isset($row['GioiTinh']) ? $row['GioiTinh']:''?>'></td>
            </tr>
            
            <tr>
                <td>Số Điện Thoại</td>
                <td><input type="text" name="SĐT" value='<?php echo isset($row['SĐT']) ? $row['SĐT']:''?>'></td>
            </tr>
            
            <tr>
                <td>Chức vụ</td>
                <td><input type="text" name="ChucVu" value='<?php echo isset($row['ChucVu']) ? $row['ChucVu']:''?>'></td>
            </tr>
            
            <tr>
                <td>Số Lương</td>
                <td><input type="text" name="SoLuong" value='<?php echo isset($row['SoLuong']) ? $row['SoLuong']:''?>'></td>
            </tr>
            <tr>
                <td></td>
                    <td><input type="submit" name='submit' value="Cập nhật"></td>
            </tr>
            <?php
            if (isset($_POST['submit'])) {
                $conn=new mysqli('localhost', 'root','','qlcongnhanvien');
                if($isNew) {
                    
                    $sql1 = "INSERT INTO `tblnhanvien` 
                            (`MaNV`, `Mamucluong`, `TenNV`, `GioiTinh`, `SĐT`, `ChucVu`, `SoLuong`) 
                             VALUES ('" .$_POST['MaNV']."',
                              '" .$_POST['Mamucluong']."',
                               '" .$_POST['TenNV']."', 
                               '" .$_POST['GioiTinh']."', 
                               '" .$_POST['SĐT']."', 
                               '" .$_POST['ChucVu']."', 
                               '" .$_POST['SoLuong']."')";
                    $conn->query($sql1);     
                }
                
                else {
                    {
                        $sql="UPDATE `tblnhanvien`SET `Mamucluong`='" .$_POST['Mamucluong']."', 
                             `TenNV`='" .$_POST['TenNV']."',
                          `GioiTinh`= '".$_POST['GioiTinh']."',
                            `SĐT`= '".$_POST['SĐT']."',
                             `ChucVu`= '".$_POST['ChucVu']."',
                             `SoLuong`= '".$_POST['SoLuong']."' 
                             where MaNV='" .$_POST['MaNV'] ."'";                  
                            $conn->query($sql);            
                        }
                }
                $conn->close();
                header('Location: Nhanvien.php');
                } 

            ?>
        </table>
    </form>
    
</html>