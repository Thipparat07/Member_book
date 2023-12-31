<?php
            // เชื่อมต่อไฟล์ฐานข้อมูล
            include 'connect.php';

            $conn = new mysqli($servername, $username, $password, $dbname);


            // รับค่า ID จาก URL
            $id = $_GET['id'];

            // คำสั่ง SQL สำหรับเลือกข้อมูลจาก ID ที่รับมา
            $sql = "SELECT * FROM employees WHERE id = '$id'";
            $result = mysqli_query($conn, $sql);

            $row = mysqli_fetch_assoc($result);
?>

<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&amp;display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="css\style.css" rel="stylesheet">
    <style>
    body {
    background-image: url("img/2.jpg");
    background-size: cover; /* ปรับขนาดรูปเพื่อพอดีกับพื้นที่ */
    background-repeat: no-repeat; /* ไม่ต้องทำซ้ำพื้นหลัง */
    }
    </style>
</style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>แก้ไขข้อมูลสมาชิก</h1>

        <!-- เพิ่มข้อมูลใหม่ -->
        <a class="btn btn-success" href="index.php">
              <!-- ไอค่อน -->
              <i class="bi bi-arrow-up-left-square-fill"></i> กลับหน้าแรก
        </a>
    </div>
    <div class="container centered-element">
        <div class="row">
            <div class="col-12 centerrow">
                <div class="card">
                    <div class="card-body ">
                        <h3 class="card-title ">แก้ไขข้อมูลสมาชิก </h3>
                        <!-- ส่งข้อมูลเป็น post ไปที่ไฟล์ register.php -->
                        <form action="edit_data_conn.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <div class="row">
                                    <div class="col-2">ชื่อ</div>
                                    <div class="col-10">
                                        <input class="form-control" type="text" name="firstName" value="<?php echo $row['firstName']?>" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">นามสกุล</div>
                                    <div class="col-10">
                                        <input class="form-control" type="text" name="lastName" value="<?php echo $row['lastName']?>" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">ชื่อเล่น</div>
                                    <div class="col-10">
                                        <input class="form-control" type="text" name="nickname" value="<?php echo $row['nickname']?>" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">อีเมล์</div>
                                    <div class="col-10">
                                        <input class="form-control" type="email" name="email" value="<?php echo $row['email']?>" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">โทรศัพท์</div>
                                    <div class="col-10">
                                        <input class="form-control" type="text" name="phone" value="<?php echo $row['phone']?>" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">รูปภาพ (URL)</div>
                                    <div class="col-9">
                                        <input class="form-control" type="text" name="image" value="<?php echo $row['image']?>" required>
                                    </div>
                                </div>

                            <div class="container" style=" width: 50%; margin: 0 auto; ">
                                <div class="row" style=" width: 50%; margin: 0 auto;">
                                    <div class="col-9 "></div>
                                    <div class="col-3" style="display: flex; justify-content: end; ">
                                        <input class="btn btn-primary" type="submit" name="edit_data_conn" value="ยืนยัน">
                                    </div>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body></html>