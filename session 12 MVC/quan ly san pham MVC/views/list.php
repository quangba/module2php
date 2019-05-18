<h2>Danh sách sản phẩm</h2>
<a href="index.php?controller=san-pham&action=add">Thêm mới</a>
<table class="table" border = '2'>
  <thead>
  <tr>
      <th>STT</th>
      <th>Name</th>
      <th>PRICE</th>
      <th>DESCRIPTION</th>
      <th>PRODUCER</th>
  </tr>
  </thead>
  <tbody>
  <?php 

    foreach ($san_pham as $key => $products):?>
      <tr>
          <td><?php echo ++$key ?></td>
          <td><?php echo $products->name ?></td>
          <td><?php echo $products->price ?></td>
          <td><?php echo $products->description ?></td>
          <td><?php echo $products->producer ?></td>

          <td>              
              <a href="index.php?controller=san-pham&action=edit&id=<?php echo $products->id;?>">SỬA</a>
              <a onclick ="return confirm('ban co chac muon xoa khong') " href="index.php?controller=san-pham&action=delete&id=<?php echo $products->id;?>">XÓA</a>
          </td>
    <?php endforeach; ?>
  </tbody>
</table>