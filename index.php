<?php
    require_once "connect.php";//ดึงข้อมูล

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- แสดงข้อมูล -->
<div class="container mt-3">
    <h2>Member book</h2>
  
          <!-- เพิ่มข้อมูลใหม่ -->
          <a class="btn btn-success" href="addinformation.php">
              <!-- ไอค่อน -->
              <i class="bi bi-person-add"></i> เพิ่มข้อมูลใหม่
          </a>

  
  <table class="table table-hover">
    <thead>
      <tr>
        <!-- ชื่อตาราง -->
        <th>ลำดับ</th>   
        <th>รูปภาพ</th>
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>ชื่อเล่น</th>
        <th>รายละเอียด</th>
      </tr>
    </thead>
    <tbody>
      <!-- ลูปช้อมูล -->
      <?php foreach ($result as $val)  { ?>
      <tr>
        <!-- แสดงข้อมูล -->
        <td><?php echo $val['id'] ?></td>
        <td><img src="<?php echo $val['image']; ?>" class="rounded" alt="Cinque Terre" width="150px" height="150px"></td>
        <td><?php echo $val['firstName'] ?></td>
        <td><?php echo $val['lastName'] ?></td>
        <td><?php echo $val['nickname'] ?></td>

        <btnall method="post">
          <!-- ปุ่มต่างๆ -->
          <!-- showallinformation -->
          <td><a class="btn btn-primary" href="showallinformation.php?id=<?php echo $val['id']; ?>">
                  <!-- ไอค่อน -->
                  <i class="bi bi-eye-slash"></i> ข้อมูลเพิ่มเติม
            </a>

          <!-- แก้ไขข้อมูล -->
          <a class="btn btn-warning" href="etidinformation.php?id=<?php echo $val['id']; ?>"
                onclick="return confirm('ยืนยันการแก้ไขข้อมูล <?php echo $val['id']; ?>')">
                  <!-- ไอค่อน -->
                  <i class="bi bi-pencil-square" ></i> แก้ไข
            </a>

          <!-- ลบข้อมูล -->
            <a class="btn btn-danger" href="delete.php?id=<?php echo $val['id']; ?>"
                onclick="return confirm('ยืนยันการลบข้อมูล <?php echo $val['id']; ?>')">
                  <!-- ไอค่อน -->
                  <i class="bi bi-trash3"></i> ลบ
            </a>
      </td>
        </btnall>


      </tr>
      <?php } ?>
    </tbody>
  </table>
</>

