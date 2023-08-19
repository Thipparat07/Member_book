<?php
// เชื่อมต่อไฟล์ฐานข้อมูล
include 'connect.php';

$conn = new mysqli($servername, $username, $password, $dbname);

// รับค่าจากฟอร์มแก้ไข
$id = $_POST['id'];
$firstname = $_POST['firstName'];
$lastname = $_POST['lastName'];
$nickname = $_POST['nickname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$image = $_POST['image'];



//คำสั่งเพิ่มข้อมูลลงตาราง
$sql = "UPDATE employees SET firstName = ?, lastName = ? ,nicknamE = ?, email = ?, phone = ?, image = ? WHERE id = ?";


//เตรียมคำสั่ง SQL และผูกค่าตัวแปร
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ssssssi", $firstname, $lastname, $nickname, $email, $phone, $image, $id);

//บันทึกลงฐานข้อมูลแล้ว
if (mysqli_stmt_execute($stmt)) {
    //echo "<script> alert('บันทึกข้อมูลเรียบร้อย'); </script>";
    header("Location: index.php");
    exit();// จบการทำงานทันทีหลังจากใช้ header
} else {
    echo "Error: " . mysqli_error($conn);
    echo "<script> alert('บันทึกข้อมูลไม่ได้'); </script>";
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
