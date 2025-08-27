<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Table</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $products = [
            ["name"=>"Keyboard", "price"=>67.50, "stock"=>7],
            ["name"=>"Mouse", "price"=>10.60, "stock"=>10],
            ["name"=>"Ram", "price"=>40.00, "stock"=>5],
            ["name"=>"CPU", "price"=>100.00, "stock"=>10],
            ["name"=>"Monitor", "price"=>10.00, "stock"=>6]
        ];
    ?>
    <table>
        <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>
        <?php foreach($products as $p) { ?>
            <tr class="<?= ($p['stock'] < 10) ? 'low-stock' : '' ?>">
                <td><?= $p["name"] ?></td>
                <td><?= $p["price"] ?></td>
                <td><?= $p["stock"] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
