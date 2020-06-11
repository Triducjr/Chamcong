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
            $sql = "SELECT * FROM `mucluong` WHERE  Mamucluong='" .$id ."'";
            $result=$conn->query($sql);
            $row = $result->fetch_assoc();
            $conn->close();
            echo '<h1 style="color: #00FF00;">Sửa bảng lương</h1>';
        }
        else{
            $isNew=true;
            echo '<h1 style="color: #00FF00;">Thêm mức lương</h1>';
        }
        ?>
        <table>
            <tr>
                <td>Mã mức lương</td>
                <td>
                    <input type="text" name='Mamucluong' value='<?php echo isset($row['Mamucluong']) ? $row['Mamucluong'] : '' ?>'>
                    
                </td>
            </tr>            
            <tr>
                <td>Tên mức lươg:</td>
                <td>
                    <input type="text" name='Tenmucluong' value='<?php echo isset($row['Tenmucluong']) ? $row['Tenmucluong'] : '' ?>'>
                </td>
            </tr>
            
            <tr>
                <td>Tiền lương</td>
                <td><input type="text" name="Tienluong" value='<?php echo isset($row['Tienluong']) ? $row['Tienluong']:''?>'></td>
            </tr>
            
            <tr>
                <td>Mã phụ cấp</td>
                <td><input type="text" name="Maphucap" value='<?php echo isset($row['Maphucap']) ? $row['Maphucap']:''?>'></td>
            </tr>
            
            <tr>
                <td></td>
                    <td><input type="submit" name='submit' value="Cập nhật"></td>
            </tr>
            <?php
            if (isset($_POST['submit'])) {
                $conn=new mysqli('localhost', 'root','','qlcongnhanvien');
                if($isNew) {
                    
                    $sql1 = "INSERT INTO `mucluong` (`Mamucluong`, `Tenmucluong`, `Tienluong`, `Maphucap`) 
                    VALUES ('" .$_POST['Mamucluong']."',
                              '" .$_POST['Tenmucluong']."',
                               '" .$_POST['Tienluong']."', 
                               '" .$_POST['Maphucap']."')";
                    $conn->query($sql1);     
                }
                
                else {
                    {
                        $sql="UPDATE `mucluong` SET 
                       
                        `Tenmucluong`='" .$_POST['Tenmucluong']."',
                        `Tienluong`='" .$_POST['Tienluong']."',
                        `Maphucap`='" .$_POST['Maphucap']."'
                         WHERE Mamucluong= '" .$_POST['Mamucluong']."'";                 
                            $conn->query($sql);            
                        }
                }
                $conn->close();
                header('Location: Luong.php');
                } 

            ?>
        </table>
    </form>
    
</html>