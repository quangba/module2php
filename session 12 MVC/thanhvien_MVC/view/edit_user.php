<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sửa thành viên</title>
</head>

<body>
    <div class="content">
        <div class="dangkithanhvien">
            <a href="MVC.php?controller=thanh-vien&action=list" class="list">Danh sách</a>
            <h3>Cập nhật mới thành viên</h3>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td>Tên thành viên: </td>
                        <td><input type="text" name="hoten" value="<?php echo $dataID['hoten']; ?>" placeholder="tên thành viên"></td>
                    </tr>
                    <tr>
                        <td>Năm sinh: </td>
                        <td><input type="text" name="namsinh" value="<?php echo $dataID['namsinh']; ?>" placeholder="năm sinh"></td>
                    </tr>
                    <tr>
                        <td>Quê quán: </td>
                        <td><input type="text" name="quequan" value="<?php echo $dataID['quequan']; ?>" placeholder="quê quán"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="update_user" value="Cập nhật"></td>
                    </tr>
                </table>

            </form>
            
        </div>
    </div>
</body>

</html>