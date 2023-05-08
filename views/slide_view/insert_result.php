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
            <div class="insert-results">เพิ่มผลลัพธ์</div>
        </div>

        <div class="input-result-body">
            <div class="select-indicator">
                <input class="field-one" type="text" id="select" name="select" placeholder="เลือกตัวชี้ตัวชี้วัด:">
                <button class="btn-select text-end mt-3" type="button">
                    <label class="text-select">เลือก</label>
                </button>
            </div>
            <div class="years">
                <input class="field" type="text" id="years" name="years" placeholder="ประจำปี:">
            </div>
            <div class="target">
                <input class="field" type="text" id="target" name="target" placeholder="เป้า(หน่วยวัด):">
            </div>
            <div class="results">
                <input class="field" type="text" id="results" name="results" placeholder="ผลลัพธ์:">
            </div>
            <div class="evidence">
                <input class="field" type="text" id="evidence" name="evidence" placeholder="หลักฐานที่มา:">
            </div>
        </div>

        <div class="unit d-flex flex-row field3 mt-3 border-0">
            <p class="name-evidence-file ms-1 fw-bold">ไฟล์หลักฐานแนบ:</p>
            <input class="ms-2" type="file" id="file-input" name="unit">
            <label for="file-input">เลือกไฟล์...</label>
        </div>


        <div class="btn-body text-end pe-5 mt-3">
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