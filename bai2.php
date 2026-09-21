<?php
// Tạo mảng kết hợp 
$products = array(
    array("name" => "Sản phẩm A", "price" => 100000, "quantity" => 5),
    array("name" => "Sản phẩm B", "price" => 250000, "quantity" => 2),
    array("name" => "Sản phẩm C", "price" => 50000, "quantity" => 10)
);

echo "<h3>Thông tin các sản phẩm:</h3>";
// Hiển thị thông tin tất cả sản phẩm
foreach ($products as $item) {
    echo "Tên SP: " . $item['name'] . " | Giá: " . $item['price'] . " | Số lượng: " . $item['quantity'] . "<br>";
}

// Viết hàm tính tổng giá trị
function calculateTotal($arrProducts) {
    $total = 0;
    foreach ($arrProducts as $item) {
        $total += ($item['price'] * $item['quantity']);
    }
    return $total;
}

echo "<h3>Tổng giá trị của tất cả sản phẩm là: </h3>";
echo calculateTotal($products) . " VNĐ";
?>
