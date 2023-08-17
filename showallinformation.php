<?php
    include 'connect.php';

    $conn = new mysqli($servername, $username, $password, $dbname);

    $id = $_GET['id'];

    // คำสั่ง SQL สำหรับเลือกข้อมูลจาก ID ที่รับมา
    $sql = "SELECT * FROM employees WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);

?>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Member Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link href="style.css" rel="stylesheet">
</head>

<body>

    
    <div class="container " style="margin-top: 10px;">
        <div class="row">
            <div class="col-12">
                <h1>ระบบข้อมูลสมาชิก</h1>
            </div>
        </div>
    </div>

    <div class="container centered-element">
        <div class="row">
            <div class="col-12 centerrow">
                <div class="card" style="width: 600px;">
                    <div class="card-body ">
                        <h3 class="card-title">ข้อมูลสมาชิก 
                            <br>
                            <br>
                        </h3>

                        <div class="container">
                            <div class="row">
                                <div class="col-4" style=" display: flex; justify-content: center;">
                                <img src="<?php echo $row['image']; ?>" class="rounded" alt="img-thumbnail" width="150" height="150" >
                                </div>
                                <div class="col-8">
                                    <div class="row" style="margin: 5px;">
                                        <div class="col-4">ชื่อ</div>
                                        <div class="col-8">
                                        <?php echo $row['firstName'] ?>
                                                                                    </div>
                                    </div>
                                    <div class="row" style="margin: 5px;">
                                        <div class="col-4">นามสกุล</div>
                                        <div class="col-8">
                                        <?php echo $row['lastName'] ?>
                                                                                    </div>
                                    </div>
                                    <div class="row" style="margin: 5px;">
                                        <div class="col-4">ชื่อเล่น</div>
                                        <div class="col-8">
                                        <?php echo $row['nickname'] ?>
                                                                                    </div>
                                    </div>
                                    <div class="row" style="margin: 5px;">
                                        <div class="col-4">อีเมล์</div>
                                        <div class="col-8">
                                        <?php echo $row['email'] ?>
                                                                                    </div>
                                    </div>
                                    <div class="row" style="margin: 5px;">
                                        <div class="col-4">โทรศัพท์</div>
                                        <div class="col-8">
                                        <?php echo $row['phone'] ?>
                                                                                    </div>
                                    </div>
                                
                                    <div class="row">
                                        <div class="col-12 " class="centered-element" style="margin-top: 20px ;">
                                            <a class="btn btn-success" href="index.php">
                                                <!-- ไอค่อน -->
                                                <i class="bi bi-arrow-left-right"></i> กลับหน้าแรก
                                            </a>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body></html>