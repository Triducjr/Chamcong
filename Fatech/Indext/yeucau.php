
<?php
    include 'menu.php';
?>
<html>
<body>

  
   
    <div class= "data">
    <div class = "btn">
        <a href="edityeucau.php"><button type="button"> Tạo mới</button></a>
        <button type="button"> Chấp nhận</button>
        <button type="button"> Từ chối</button>
    </div>
    <table border="1" >
            <tr>
                
                <td>
                    <h6>Loại yêu cầu </h6>
                </td>
                <td>
                <h6> Mã nhân viên</h6>
                </td>
                <td>
                <h6> Tên nhân viên</h6>
                </td>
                <td>
                <h6> Lý do</h6>
                </td>
                <td>
                <h6> Ngày gửi</h6>
                </td>
               
            </tr>
    
            <?php
                $conn = new mysqli('localhost', 'root', '', 'qlcongnhanvien') or die ("kết nối chưa thành công!");

                $sql = 'SELECT * FROM `yeucau`';
                $result = $conn->query($sql);
                foreach ($result as $row) {
                        echo "<tr>
                                <td>" . $row['Loaiyc'] . "</td>                                     
                                <td>" . $row['MaNV']. "</td>
                                <td>" .$row['TenNV']. "</td>                         
                                <td>" .$row['Lydo']. "</td>
                                <td>" .$row['Time']. "</td>      
                                <td> <a href=''>Chấp nhận</a> </td>    
                                <td><a href=''>Từ chối</a></td>                                           
                        </tr>";
                    }
                $conn->close();
            ?>
                
        
        </table>
    </div>
    
    </body>
</html>