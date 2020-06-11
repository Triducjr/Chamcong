<?php
    include 'menu.php';
?>
<html>
<body>
  
    <div class= "data">
    <div class = "btn">
        <a href="editluong.php"><button type="button"> Tạo mới</button></a>
    </div>
    <table border="1">
            <tr>
                
                <td>
                    <h6> Mã mức lương </h6>
                </td>
                <td>
                <h6> tên mức lương</h6>
                </td>
                <td>
                <h6> Tiền lương</h6>
                </td>
                <td>
                <h6> Mã phụ cấp</h6>
                </td>
                
            </tr>
    
            <?php
                $conn = new mysqli('localhost', 'root', '', 'qlcongnhanvien') or die ("kết nối chưa thành công!");

                $sql = 'SELECT  *  FROM mucluong';
                $result = $conn->query($sql);
                foreach ($result as $row) {
                        echo "<tr>
                                <td>" . $row['Mamucluong'] . "</td>                                     
                                <td>" . $row['Tenmucluong']. "</td>
                                <td>" .$row['Tienluong']. "</td>
                                <td>" .$row['Maphucap']. "</td>
                                
                                <td> <a href='editluong.php?id=" .$row['Mamucluong']."'>Sửa</a> </td>    
                                <td><a href='deletelluong.php?id=" .$row['Mamucluong']."'>xóa</a></td>                    
                        </tr>";
                    }
                $conn->close();
            ?>
                
        
        </table>
    </div>
    
    </body>
</html>