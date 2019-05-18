<table border='2'>
    <tr>
        <th>officeCode</th>
        <th>city</th>
        <th>phone</th>
        <th>addressLine1</th>
        <th>addressLine2</th>
        <th>state</th>
        <th>postalCode</th>
        <th>territory</th>
    </tr>
    <?php

    try {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=classicmodels', 'root', '');
    } catch (Exception $e) {
        die('could not connect mysql');
    }
    $sql = 'SELECT * FROM offices';
    $result = $pdo->query($sql);
    foreach ($result as $value) {
        echo '<tr>';
        echo '<th>' . $value["officeCode"] . '</th>';
        echo '<td>' . $value["city"] . '</td>';
        echo '<td>' . $value["phone"] . '</td>';
        echo '<td>' . $value["addressLine1"] . '</td>';
        echo '<td>' . $value["addressLine2"] . '</td>';
        echo '<td>' . $value["state"] . '</td>';
        echo '<td>' . $value["postalCode"] . '</td>';
        echo '<td>' . $value["territory"] . '</td>';
        echo '<tr>';
    }
    ?>
</table>
