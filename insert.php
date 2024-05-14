<?php
$ser = "localhost"; // server
$u = "root"; // username
$p = ""; // password
$db = "b"; // tên database

// Tạo kết nối cơ sở dữ liệu
$conn = new mysqli($ser, $u, $p, $db);
//kiem tratham so truyen
if(isset($_GET['id'])&&
    isset($_GET['firstname'])&&
    isset($_GET['lastname'])&&
    isset($_GET['email']))
    {
        //nhap gt tu tham so truyen
    $id=$_GET['id'];
    $firstname=$_GET['firstname'];
    $lastname=$_GET['lastname'];
    $email=$_GET['email'];
        // Lệnh insert
$sql = "INSERT INTO myguests values ('$id','$firstname','$lastname','$email')";
        // Thực thi câu lệnh
$kq = $conn->query($sql);
        // doc ket qua
echo$kq;//in ra ket qua
    }


$conn->close(); // Đóng kết nối
?>

