<?php
// Bài 2: Quản lý thông tin sản phẩm bằng mảng kết hợp

$products = [
    [
        "name" => "Laptop",
        "price" => 15000000,
        "quantity" => 2
    ],
    [
        "name" => "Chuột",
        "price" => 300000,
        "quantity" => 5
    ],
    [
        "name" => "Bàn phím",
        "price" => 700000,
        "quantity" => 3
    ]
];

function totalValue($products) {
    $total = 0;

    foreach ($products as $product) {
        $total += $product["price"] * $product["quantity"];
    }

    return $total;
}

echo "<h2>Bài 2: Thông tin sản phẩm</h2>";

foreach ($products as $product) {
    echo "Tên sản phẩm: " . $product["name"] . "<br>";
    echo "Giá: " . number_format($product["price"], 0, ",", ".") . " VNĐ<br>";
    echo "Số lượng: " . $product["quantity"] . "<br>";
    echo "Thành tiền: " .
         number_format($product["price"] * $product["quantity"], 0, ",", ".") .
         " VNĐ<br><hr>";
}

echo "<h3>Tổng giá trị tất cả sản phẩm: " .
     number_format(totalValue($products), 0, ",", ".") .
     " VNĐ</h3>";
?>
