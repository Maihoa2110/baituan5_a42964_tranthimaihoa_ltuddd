<?php
$ser = "localhost"; // server
$u = "root"; // username
$p = ""; // password
$db = "b"; // tên database

// Tạo kết nối cơ sở dữ liệu
$conn = new mysqli($ser, $u, $p, $db);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lệnh insert
$sql = "delete from test Where Ma =1 ";

// Thực hiện insert
if ($conn->query($sql) === TRUE) { // Sửa lỗi ở đây
    echo "Đã delete thành công";
} else {
    echo "Có lỗi: " . $conn->error;
}

$conn->close(); // Đóng kết nối
?>

