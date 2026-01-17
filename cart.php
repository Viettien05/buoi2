<?php
session_start();

$products = [
    1 => "Áo thun",
    2 => "Quần jeans",
    3 => "Giày sneaker",
    4 => "Balo"
];

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_GET['add'])) {
    $product_id = $_GET['add'];

    $_SESSION['cart'][] = $product_id;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Giỏ hàng Session</title>
</head>
<body>

<h2>Danh sách sản phẩm</h2>

<ul>
    <?php foreach ($products as $id => $name): ?>
        <li>
            <?php echo $name; ?>
            <a href="?add=<?php echo $id; ?>">[Thêm vào giỏ]</a>
        </li>
    <?php endforeach; ?>
</ul>

<hr>

<h2>Giỏ hàng của bạn</h2>

<?php

if (empty($_SESSION['cart'])) {
    echo "<p>Giỏ hàng trống</p>";
} else {
    echo "<ul>";
    foreach ($_SESSION['cart'] as $item_id) {
        echo "<li>ID sản phẩm: $item_id</li>";
    }
    echo "</ul>";
}
?>

<p><i>F5 lại trang, giỏ hàng vẫn còn nguyên</i></p>

</body>
</html>