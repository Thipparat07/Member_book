<?php
//เชื่อมต่อไฟล์ฐานข้อมูล
include 'connect.php';

$conn = new mysqli($servername, $username, $password, $dbname);

//รับค่าตัวแปรมาจากไฟล์ addaddinformation.php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$nickname = $_POST['nickname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$image = $_POST['image'];

//คำสั่งเพิ่มข้อมูลลงตาราง
$sql = "INSERT INTO employees (firstName,lastName,nickname,email,phone,image) 
Values(?,?,?,?,?,?)";

//เตรียมคำสั่ง SQL และผูกค่าตัวแปร
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ssssss", $firstname, $lastname, $nickname, $email, $phone, $image);

//บันทึกลงฐานข้อมูลแล้ว
$result = mysqli_stmt_execute($stmt);

//เช็คว่าบันทึกได้ไหม
if ($result) {
    //echo "ลบข้อมูลเรียบร้อยแล้ว";
    // กลับไปยังหน้าที่แสดงข้อมูลหลัก
    header("Location: index.php");
    exit();// จบการทำงานทันทีหลังจากใช้ header
} else {
    echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล: " . $conn->error;
}
?>