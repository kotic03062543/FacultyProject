<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../utility/theme.css">
    <link rel="stylesheet" href="../utility/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../utility/styles/css_sidebar.css">

    <link rel="stylesheet" href="../utility/styles/insert_indicator_style.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.4.1.js%22%3E"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<style>
.home-section{
    height: 100vh;
}

</style>

<body>

    <?php
    include "../share_templetes/sidebar.php";
    ?>


    <div class="box-data-body">
        <div class="home_content">
            <div class="insert-indicator">เพิ่มรายละเอียดตัวชี้วัด</div>
        </div>
        <form action="">
        <div class="input-data-body">
            <div class="name-indicator">
                <input class="field" type="text" id="name" name="name" placeholder="ชื่อข้อมูล/ตัวชี้วัด:">
            </div>
            <div class="unit">
                <input class="field" type="text" id="unit" name="unit" placeholder="หน่วยวัด:">
            </div>
            <div class="description">
                <textarea class="field" type="text" id="description" name="description"
                    placeholder="คำอธิบาย:"></textarea>
            </div>
        </div>
        </form>



        <div class="btn-body container-fluid text-end mt-3">
            <button class="btn-one" type="button">
                <label class="text-cancel">ยกเลิก</label>
            </button>
            <button class="btn-two" type="button">
                <label class="text-save">บันทึก</label>
            </button>
        </div>

    </div>





    </section>

    <script src="../utility/bootstrap5/js/bootstrap.min.js"></script>
  
</body>

</html>