<?php
$ser = "localhost"; // server
$u = "root"; // username
$p = ""; // password
$db = "b"; // tên database

// Tạo kết nối cơ sở dữ liệu
$conn = new mysqli($ser, $u, $p, $db);
//kiem tratham so truyen
if(isset($_POST['id'])&&
    isset($_POST['firstname'])&&
    isset($_POST['lastname'])&&
    isset($_POST['email']))
    {
        //nhap gt tu tham so truyen
    $id=$_POST['id'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
        // Lệnh insert
$sql = "INSERT INTO myguests values ('$id','$firstname','$lastname','$email')";
        // Thực thi câu lệnh
$kq = $conn->query($sql);
        // doc ket qua
echo$kq;//in ra ket qua
    }


$conn->close(); // Đóng kết nối
?>

