<?php
include_once('connectCSDL.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <button>
        <a href="Add.php">ADD</a>
    </button>
    <table border='1'>
        <h2>
            Quan ly thu vien
        </h2>
        <tr>
            <th>Code</th>
            <th>category</th>
            <th>description</th>
        </tr>
        <?php

        $sql = 'SELECT * FROM categories';
        $result = $connect->query($sql);
        ?>
        <?php
        foreach ($result as $value) { ?>
            <tr>
                <td><?php echo $value['categoryCode']; ?></td>
                <td><?php echo $value['categoryName']; ?></td>
                <td><?php echo $value['description']; ?></td>

                <td>
                    <a href="Edit.php?id=<?php echo $value['categoryCode']; ?>">Edit</a>
                </td>
                <td>
                    <a href="Delete.php?id=<?php echo $value['categoryCode']; ?>">Delete</a>
                </td>
            </tr>
        <?php  } ?>
    </table>

</body>

</html>