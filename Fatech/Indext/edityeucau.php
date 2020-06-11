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
        
        
        ?>
        <table>
            <h1 style="color: #00FF00;">Thêm yêu cầu</h1>
            <tr>
                <td>Loại yêu cầu</td>
                <td>
                    <input type="text" name='Loaiyc' value='<?php echo isset($row['Loaiyc']) ? $row['Loaiyc'] : '' ?>'>
                    
                </td>
            </tr>            
            <tr>
                <td>Mã nhân viên</td>
                <td>
                    <input type="text" name='MaNV' value='<?php echo isset($row['MaNV']) ? $row['MaNV'] : '' ?>'>
                </td>
            </tr>
            
            <tr>
                <td>Tên nhân viên</td>
                <td><input type="text" name="TenNV" value='<?php echo isset($row['TenNV']) ? $row['TenNV']:''?>'></td>
            </tr>
            
            <tr>
                <td>Lý do: </td>
                <td><input type="text" name="Lydo" value='<?php echo isset($row['Lydo']) ? $row['Lydo']:''?>'></td>
            </tr>
            <tr>
                <td>Ngày gửi</td>
                <td><input type="text" name="Time" value='<?php echo isset($row['Time']) ? $row['Time']:''?>'></td>
            </tr>
              
            <tr>
                <td></td>
                    <td><input type="submit" name='submit' value="Cập nhật"></td>
            </tr>
            <?php
            if (isset($_POST['submit'])) {
                $conn=new mysqli('localhost', 'root','','qlcongnhanvien');                   
                    $sql1 = "INSERT INTO `yeucau`(`Loaiyc`, `MaNV`, `TenNV`, `Lydo`, `Time`) 
                    VALUES ('" .$_POST['Loaiyc']."',
                              '" .$_POST['MaNV']."',
                               '" .$_POST['TenNV']."', 
                               '" .$_POST['Lydo']."',
                               '" .$_POST['Time']."')";
                    $conn->query($sql1);                  
                $conn->close();
                header('Location: yeucau.php');
                } 

            ?>
        </table>
    </form>
    
</html>