
<?php
    include 'menu.php';
?>
<html>
<body>

    <div class = "mn">
        <ul>
            <li><a href="">Nhân viên</a></li>
            <li><a href="">Hợp đồng</a></li>
            <li><a href="">Bảo hiểm</a></li>
            <li><a href="">Khen thưởng</a></li>
            <li><a href="">kỹ luật</a></li>
        </ul>
        
    </div>
   
    <div class= "data">
    <div class = "btn">
        <a href="editnhanvien.php"><button type="button"> Tạo mới</button></a>
        <button type="button"> Nhập từ exel</button>
        <button type="button"> Xuất exel</button>
    </div>
    <table border="1" >
            <tr>
                
                <td>
                    <h6> Mã nhân viên</h6>
               
                </td>
                <td>
                <h6> Mã mức lương</h6>
                </td>
                <td>
                <h6> Tên nhân viên</h6>
                </td>
                <td>
                <h6> Giới tính</h6>
                </td>
                <td>
                <h6> Số điện thoại</h6>
                </td>
                <td>
                <h6> Chức vụ</h6>
                </td>
                <td>
                <h6>Lương</h6>
                </td>
            </tr>
    
            <?php
                $conn = new mysqli('localhost', 'root', '', 'qlcongnhanvien') or die ("kết nối chưa thành công!");

                $sql = 'SELECT  *  FROM tblnhanvien';
                $result = $conn->query($sql);
                foreach ($result as $row) {
                        echo "<tr>
                                <td>" . $row['MaNV'] . "</td>                                     
                                <td>" . $row['Mamucluong']. "</td>
                                <td>" .$row['TenNV']. "</td>
                                <td>" .$row['GioiTinh']. "</td>
                                <td>" .$row['SĐT']. "</td>
                                <td>" .$row['ChucVu']. "</td>
                                <td>" .$row['SoLuong']. "</td>                        
                                <td> <a href='editnhanvien.php?id=" .$row['MaNV']."'>Sửa</a> </td>  
                                <td><a href='deletelnhanvien.php?id=" .$row['MaNV']."'>xóa</a></td>         
                                       
                        </tr>";
                    }
                $conn->close();
            ?>
                
        
        </table>
    </div>
    
    </body>
</html>