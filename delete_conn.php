
<?php

include 'connect.php';

$conn = new mysqli($servername, $username, $password, $dbname);

//ลบข้อมูล

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM employees WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        //echo "ลบข้อมูลเรียบร้อยแล้ว";
        // กลับไปยังหน้าที่แสดงข้อมูลหลัก
        header("Location: index.php");
        exit();// จบการทำงานทันทีหลังจากใช้ header
    } else {
        echo "เกิดข้อผิดพลาดในการลบข้อมูล: " . $conn->error;
    }
}

$conn->close();
?>



