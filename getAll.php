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

// Lệnh select
$sql = "SELECT * FROM mytable";

// Thực thi câu lệnh
$kq = $conn->query($sql);

$row = array(); // Khai báo mảng để lưu trữ dữ liệu

if ($kq->num_rows > 0) {
    while ($r = $kq->fetch_assoc()) {
        $row[] = $r; // Đọc từng dòng và thêm vào mảng
    }
    $json = json_encode($row); // Chuyển đổi thành JSON
    echo '{"products":' . $json . '}';
}

$conn->close(); // Đóng kết nối
?>
