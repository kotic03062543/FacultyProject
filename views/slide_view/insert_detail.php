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
    <link rel="stylesheet" href="../utility/styles/detali_indicator.css">


</head>
<style>
    body {
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
            <div class="input-data-body ">
                <div>
                    <select name="orderby" class="orderby field2 name-indicator">
                        <option value="menu_order" selected="selected">Default sorting</option>
                        <option value="popularity">Sort by popularity</option>
                        <option value="rating">Sort by average rating</option>
                        <option value="date">Sort by newness</option>
                        <option value="price">Sort by price: low to high</option>
                        <option value="price-desc">Sort by price: high to low</option>
                    </select>
                    <input type="hidden" name="paged" value="1">
                </div>

                <div class="unit">
                    <input class="field" type="text" id="name" name="name" placeholder="ชื่อข้อมูล/ตัวชี้วัด:">
                </div>


                <div class="unit">
                    <input class="field" type="text" id="unit" name="unit" placeholder="หน่วยวัด:">
                </div>
                <div class="description">
                    <textarea class="field" type="text" id="description" name="description" placeholder="คำอธิบาย:"></textarea>
                </div>
                <div class="unit">
                    <input class="field" type="text" id="unit" name="unit" placeholder="หน่วยวัด:">
                </div>
                <div class="unit">
                    <input class="field" type="text" id="unit" name="unit" placeholder="หน่วยวัด:">
                </div>
                <div class="unit ">
                    <div class="row ms-3 ">
                        <div class=" col-md-10 col-lg-6 col-xl-12 ">
                            <div class="d-flex flex-row align-items-center mb-4">
                                <p class="mt-3 ms-1  fw-bold">สถานะการนำไปใช้:</p>
                                <div class=" flex-fill mb-0 ms-2 me-3 mt-1">
                                    <ul class="ks-cboxtags">
                                        <li><input type="checkbox" id="checkboxOne" value="Rainbow Dash"><label for="checkboxOne">KPI ยุทธศาสตร์</label></li>
                                        <li><input type="checkbox" id="checkboxTwo" value="Cotton Candy" checked><label for="checkboxTwo">KPI มหาวิทยาลัย</label></li>
                                        <li><input type="checkbox" id="checkboxThree" value="Rarity" checked><label for="checkboxThree">EdPEx</label></li>
                                        <li><input type="checkbox" id="checkboxFour" value="Moondancer"><label for="checkboxFour">OKR</label></li>
                                        <li><input type="checkbox" id="checkboxFive" value="Surprise"><label for="checkboxFive">Risk</label></li>
                                        <li><input type="checkbox" id="checkboxSix" value="Twilight Sparkle" checked><label for="checkboxSix">CHE-QA/AUN-QA
                                            </label></li>
                                        <li><input type="checkbox" id="checkboxSeven" value="Fluttershy"><label for="checkboxSeven">ข้อมูลพื่นฐาน</label></li>

                                    </ul>

                                </div>
                            </div>
                        </div>

                    </div>
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