<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../utility/theme.css">
    <link rel="stylesheet" href="../utility/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../utility/styles/insert_result_style.css">
    <link rel="stylesheet" href="../utility/styles/mou_styles/mou_university_style.css">

</head>
<style>
    body {
        height: 100vh;
    }
</style>

</style>

<body>

    <?php
    include "../share_templates/sidebar.php";
    ?>

    <div class="container">
        <div class="tabs">
            <input type="radio" id="radio-1" name="tabs" checked />
            <label class="tab" for="radio-1">MOU ต่างประเทศ</label>
            <input type="radio" id="radio-2" name="tabs" checked />
            <label class="tab" for="radio-2">MOU สถานประกอบการ</label>
            <input type="radio" id="radio-3" name="tabs" checked />
            <label class="tab" for="radio-3">MOU โรงเรียน</label>
            <span class="glider"></span>
        </div>
    </div>



    <div class="box-data-university">
        <div class="mou_university">
            MOU กับมหาวิทยาลัยต่างประเทศ
        </div>
        <div class="name_university">
            <input class="field" type="text" id="name" name="name" placeholder="ชื่อมหาวิทยาลัยในต่างประเทศ">
        </div>
        <div class="country">
            <input class="field" type="text" id="country" name="country" placeholder="ประเทศ:">
        </div>
        <div class="date_write">
            <input class="field" type="text" id="date" name="date" placeholder="วันที่จด MOU">
        </div>
        <div class="expiration_date">
            <input class="field" type="text" id="expiration_date" name="expiration_date" placeholder="วันหมดอายุ:">
        </div>
    </div>


    </section>

    <script src="../utility/bootstrap5/js/bootstrap.min.js"></script>
    <script>
        function toggleText() {
            var textshow = document.querySelector('.textshow');
            var texthide = document.querySelector('.texthide');
            if (texthide.style.display === 'none') {
                texthide.style.display = 'block';
                textshow.style.display = 'none';
            } else {
                texthide.style.display = 'none';
                textshow.style.display = 'block';
            }
        }
    </script>
</body>

</html>