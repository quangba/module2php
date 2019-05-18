<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SỬA SẢN PHẨM</title>
</head>
<body>

    <div class = 'suakhachhang'>           
        <h3>CẬP NHẬT THÔNG TIN SẢN PHẨM</h3>  
            <div>     
            <table border = '1'>
                <form action = '' method = 'post'>
                    <tr>
                        <td>NAME</td>
                        <td><input type="text" name= 'name' value= '<?php echo $dataID->name; ?>' placeholder= 'nhap ten'></td>
                    </tr>
                    <tr>
                        <td>PRICE</td>
                        <td><input type="text" name= 'price' value = '<?php echo $dataID->price; ?>' placeholder= 'nhap giá'></td>
                    </tr>
                    <tr>
                        <td>DESCRIPTION</td>
                        <td><input type="text" name= 'description' value = '<?php echo $dataID->description; ?>' placeholder= 'mô tả'></td>
                    </tr>
                    <tr>
                        <td>PRODUCER</td>
                        <td><input type="text" name= 'producer' value = '<?php echo $dataID->producer ?>' placeholder= 'nhà sản xuất'></td>
                    </tr>
                    <tr>                   
                        <td colspan = '2'><input type="submit" name= 'editproduct' value='EDIT PRODUCT'>
                        <a href="/index.php?controller=san-phamg&action=list"></a></td>

                    </tr>
                </form>
               
            </table>
           
        </div>
    </div>
</body>
</html>