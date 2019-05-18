<div class="danhsach">
    <h3>Danh sách thành viên</h3>
    <table border="1">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên thành viên</th>
                <th>Năm sinh</th>
                <th>Quê quán</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $STT = 1;
            foreach ($data as $value) {


                ?>
                <tr>
                    <td><?php echo $STT; ?></td>
                    <td><?php echo $value['hoten']; ?></td>
                    <td><?php echo $value['namsinh']; ?></td>
                    <td><?php echo $value['quequan']; ?></td>
                <td><a onclick="return confirm('Bạn chắc chắn muốn sửa không?')"
                 href="MVC.php?controller=thanh-vien&action=edit&id=<?php echo $value['id']; ?>">Edit</a>

                <a onclick="return confirm('Bạn chắc chắn muốn xóa không?')" 
                href="MVC.php?controller=thanh-vien&action=delete&id=<?php echo $value['id']; ?>" title="Xóa">Delete</a>
                    </td>
                </tr>
                <?php
                $STT++;
            }
            ?>
        </tbody>
    </table>

</div>