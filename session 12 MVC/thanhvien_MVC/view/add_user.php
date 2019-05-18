<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quan ly thanh vien</title>
</head>

<body>
    <div class="content">
        <div class="dangkithanhvien">
        <a href="MVC.php?controller=thanh-vien&action=list" class="list">Danh sách</a>
            <h3>Thêm mới thành viên</h3>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td>Tên thành viên: </td>
                        <td><input type="text" name="hoten" placeholder="tên thành viên"></td>
                    </tr>
                    <tr>
                        <td>Năm sinh: </td>
                        <td><input type="text" name="namsinh" placeholder="năm sinh"></td>
                    </tr>
                    <tr>
                        <td>Quê quán: </td>
                        <td><input type="text" name="quequan" placeholder="quê quán"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="add_user" value="Thêm mới"></td>
                    </tr>
                </table>

            </form>
            <?php
                if(isset($thanhcong) && in_array('add_success', $thanhcong)){
                    echo "<p style = 'color: pink; text-align:center'>Thêm thành công.</p>";
                }
            ?>
        </div>
    </div>
</body>

</html>