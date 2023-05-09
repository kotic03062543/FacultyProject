<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../utility/theme.css">
    <link rel="stylesheet" href="../utility/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../utility/styles/style.css">
  


</head>

<body>

    <?php
        include "../share_templates/sidebar.php";
    ?>


    <div class="box-data-body">
        <div class="home_content">
            <div class="text">ข้อมูลตัวชี้วัด</div>
        </div>
        <p>แสดงรายการข้อมูลและตัวชี้วัดทั้งหมดของคณะฯ ซึ่งดึงมาจากฐานข้อมูลที่เก็บรวบรวมไว้ ณ ปัจจุบัน</p>
        <!-- สร้าง 2 ปุ่ม -->
        <div class="box-data-header d-flex mb-3">
            <div class="box-data-header-right me-3">
                <a href="indicator_search.php" class="btn btn-search">
                    <i class="fas fa-search me-2"></i>
                    ค้นหาข้อมูล
                </a>
            </div>
            <div class="box-data-header-left ">
                <a href="indicator_add.php" class="btn btn-fillter">
                    <i class="fas fa-filter me-2"></i>
                    ตัวกรอง
                </a>
            </div>
        </div>
        <!-- // สร้างตาราง -->
        <div class="box-data-table table-responsive">
            <table class="table table-bordered" id="table-indicator">
                <thead>
                    <tr>
                        <th scope="col">ลำดับ</th>
                        <th scope="col">ชื่อตัวชี้วัด</th>
                        <th scope="col">รายละเอียด</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>

            </table>
        </div>
    </div>



    </section>

    <script src="../../controllers/indicator/IndicatorController.js"></script>
    <script src="../utility/bootstrap5/js/bootstrap.min.js"></script>
</body>

</html>