<html>
    <body>
        <h1>Hello, from "Kurt Anthony M. Ortega"</h1>
    </body>
</html>

<?php 
echo"Hello, World!";
?>


<br>

<?php 
$x =15;
$y = 3;
$sum = $x + $y;

echo "The sum is $sum.";
?>

<br>

<?php 
for($i = 1; $i < 100; $i++) {
    if($i %3 == 0 || $i %5== 0) {
    echo "$i <br>";
    }
}
?>


<?php 
 $products = array("Product A", "Product B", "Product C");
 var_dump($products);
 ?>

<?php
$products = array("Product A","Product B", "Product C");
$products[1] = "Product D";
var_dump($products);
?>

<?php
$products = array("Product A","Product B", "Product C");
foreach($products as $p) {
    echo"$p <br>";
    }
?>

<?php
    $products = array("name"=>"Product A", "price"=>10.50,"stock"=>12);
    echo $products["name"];
?>

<?php
$products = array (
    array("name"=>"Product A", "price"=>10.50,"stock"=>12),
    array("name"=>"Product B", "price"=>5.60,"stock"=>7),
    array("name"=>"Product C", "price"=>7.00,"stock"=>5)
    );

    foreach($products as $product) {
    echo $product["name"] . " is " . $product["price"] . " pesos <br>";
}
?>

