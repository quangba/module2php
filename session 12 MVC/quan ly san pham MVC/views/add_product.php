<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm mới khách hàng</title>
</head>

<body>
    <div class='themkhachhang'>
        <a href="index.php?controller=san-pham&action=list">Danh sách</a>
        <h3>THÊM SẢN PHẨM</h3>
        <div>
            <table border='1'>
                <form action='' method='post'>
                    <tr>
                        <td>NAME</td>
                        <td><input type="text" name='name' placeholder='nhập tên'></td>
                    </tr>
                    <tr>
                        <td>PRICE</td>
                        <td><input type="text" name='price' placeholder='nhập giá'></td>
                    </tr>
                    <tr>
                        <td>DESCRIPTION</td>
                        <td><input type="text" name='description' placeholder='mô tả'></td>
                    <tr>
                        <td>PRODUCER</td>
                        <td><input type="text" name="producer" placeholder="nhà sản xuất"></td>
                    </tr>
                    <tr>
                        <td colspan='2'><input type="submit" name='addproduct' value='ADD CUSTOMER'></td>
                    </tr>
                </form>
                <?php
               
                ?>
</body>

</html>