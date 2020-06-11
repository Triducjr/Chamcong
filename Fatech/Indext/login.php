<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class=loginbox>
        <h1>Fatech</h1>
        <div class="textbox username">
            <form action="#" method="post">
                <div>
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Tên truy cập" name="username">
                </div>

                <div>
                    <i class="fa fa-lock"></i>
                    <input type="password" placeholder="Mật Khẩu " name="pass">
                </div>

                </div class = " btnlogin">
                <input name="login" type="submit" class="btn" value="Đăng Nhập">
                        <div class="help?" >
                            <a href=""><p>Quên mật khẩu?</p></a>
                         </div>
                </div>
        </div>
        </form>

        <?php
        $conn = new mysqli('localhost', 'root', '', 'qlcongnhanvien') or die("Kết nối thất bại!");
        if (isset($_POST['login'])) {
            $sql = "SELECT * FROM `dangnhapquanly` WHERE Taikhoan = '" . $_POST['username'] . "'and Matkhau  ='" . $_POST['pass'] . "'";

            $check = $conn->query($sql);
            if ($check) {
                header('location: Indext/Dashboard.php');
                
            } else {
                header('location: login.php');
               
            }
        }
        ?>
</body>

</html>