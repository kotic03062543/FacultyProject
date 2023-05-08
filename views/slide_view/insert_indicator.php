<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../utility/theme.css">
    <link rel="stylesheet" href="../utility/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../utility/styles/insert_indicator_style.css">


</head>
<style>
body {
    height: 100vh;
}

</style>

<body>

    <?php
    include "../share_templates/sidebar.php";
    ?>


    <div class="box-data-body">
        <div class="home_content">
            <div class="insert-indicator">เพิ่มตัวชี้วัด</div>
        </div>

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

        <div class="group-indicator-body">
            <div class="line-checkbox">
                <div class="name-group-indicator">
                    กลุ่มของตัวชี้วัด:
                </div>
                <div class="checkbox-one-body">
                    <input class="checkbox-one" type="checkbox" id="learning-management" value=""
                        name="learning-management"><label class="light-one"
                        for="ด้านการจัดการเรียนรู้">ด้านการจัดการเรียนรู้</label>
                    <input class="checkbox-two" type="checkbox" id="academic-service" value=""
                        name="academic-service"><label class="light-two"
                        for="ด้านบริการวิชาการ">ด้านบริการวิชาการ</label>
                </div>
                <div class="checkbox-two-body">
                    <input class="checkbox-three" type="checkbox" id="research" value="" name="research"><label
                        class="light-three" for="ด้านวิจัย">ด้านวิจัย</label>
                    <input class="checkbox-four" type="checkbox" id="management-communication" value=""
                        name="management-communication"><label class="light-four"
                        for="ด้านบริหารจัดการและการสื่อสาร">ด้านบริหารจัดการและการสื่อสาร</label>
                </div>
            </div>
        </div>

        <div class="status">
            <div class="col-md-10 col-lg-6 col-xl-12">
                <div class="d-flex flex-row align-items-center mb-4">
                    <p class="name-status mt-3 ms-1 fw-bold">สถานะ (active):</p>
                    <div class=" flex-fill mt-1 mb-0 ms-2 me-3">
                        <label class="switch">
                            <input type="checkbox" onchange="toggleText()">
                            <span class="slider"></span>
                            <span class="textshow">Active</span>
                            <span class="texthide">Inactive</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="btn-body text-end me-5">
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