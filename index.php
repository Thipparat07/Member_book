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
  <link href="style.css" rel="stylesheet" type="text/css">
  <style>
    body {
    background-image: url("img/2.jpg");
    background-size: cover; /* ปรับขนาดรูปเพื่อพอดีกับพื้นที่ */
    background-repeat: no-repeat; /* ไม่ต้องทำซ้ำพื้นหลัง */
    }
    </style>
</head>
<body>

<!-- แสดงข้อมูล -->
  <div class="container centered-element">
    <div class="container mt-3" style="color: white;" >
      <h2>Member book</h2>
              <!-- ค้นหาข้อมูล -->
              <div class="col-4">
                  <form action="search.php" method="POST">
                      <div class="input-group mb-3">
                          <input type="text" name="search_id" class="form-control" placeholder="ค้นหาจากชื่อ นามสกุล ชื่อเล่น เบอร์โทร" required>
                          <button class="btn btn-success" type="submit">ค้นหา</button>
                      </div>
                  </form>
              </div>

            <!-- เพิ่มข้อมูลใหม่ -->
            <a class="btn btn-success" href="add_data.php">
                <!-- ไอค่อน -->
                <i class="bi bi-person-add"></i> เพิ่มข้อมูลใหม่
            </a>
          <br>
          <br>
            <div class="row">
              <div class="col-12 centerrow">
                <div class="card">
          <br>
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
        </thead >
          <tbody>
            <!-- ลูปช้อมูล -->
              <?php if ($result->num_rows > 0) { 
                while ($val = $result->fetch_assoc()) {?>
                <tr>
                  <!-- แสดงข้อมูล -->
                  <td><?php echo $val['id'] ?></td>
                  <td><img src="<?php echo $val['image']; ?>" class="rounded" alt="Cinque Terre" width="150px" height="150px"></td>
                  <td><?php echo $val['firstName'] ?></td>
                  <td><?php echo $val['lastName'] ?></td>
                  <td><?php echo $val['nickname'] ?></td>
                  <btnall method="post">
                        <!-- ปุ่มต่างๆ -->
                        <!-- ข้อมูลเพิ่มเติม ไฟล์ showallinformation.php -->
                        <td>
                            <a class="btn btn-primary" href="show_details.php?id=<?php echo $val['id']; ?>">
                                  <!-- ไอค่อน -->
                                    <i class="bi bi-eye-slash"></i> ข้อมูลเพิ่มเติม
                            </a>

                            <!-- แก้ไขข้อมูล ไฟล์ etidinformation.php-->
                            <a class="btn btn-warning" href="edit_form.php?id=<?php echo $val['id']; ?>"
                                  onclick="return confirm('ยืนยันการแก้ไขข้อมูล <?php echo $val['id']; ?>')">
                                    <!-- ไอค่อน -->
                                      <i class="bi bi-pencil-square" ></i> แก้ไข
                            </a>

                            <!-- ลบข้อมูล ไฟล์ delete.php-->
                            <a class="btn btn-danger" href="delete_conn.php?id=<?php echo $val['id']; ?>"
                                onclick="return confirm('ยืนยันการลบข้อมูล <?php echo $val['id']; ?>')">
                                  <!-- ไอค่อน -->
                                    <i class="bi bi-trash3"></i> ลบ
                            </a>
                        </td>
                    </btnall>
                </tr>
                <?php }
                } else {
                  // echo "ไม่พบข้อมูล";
                } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>
