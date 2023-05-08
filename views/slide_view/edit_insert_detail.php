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
    @media only screen and (max-width: 700px) {
  body {
    height: 100%;
  }
}
</style>

<body>

    <?php
    include "../share_templetes/sidebar.php";
    ?>


    <div class="box-data-body">
        <div class="home_content">
            <div class="insert-indicator">แก้ไขตัวรายละเอียดชี้วัด</div>
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
                <div class="unit">
                    <div class="group-indicator-body">
                        <div class="line-checkbox">
                            <div class="name-group-indicator">
                                กลุ่มของตัวชี้วัด:
                            </div>
                            <div class="checkbox-one-body">
                                <input class="checkbox-one" type="checkbox" id="learning-management" value="" name="learning-management"><label class="light-one" for="ด้านการจัดการเรียนรู้">ด้านการจัดการเรียนรู้</label>
                                <input class="checkbox-two" type="checkbox" id="academic-service" value="" name="academic-service"><label class="light-two" for="ด้านบริการวิชาการ">ด้านบริการวิชาการ</label>
                                <input class="checkbox-three " type="checkbox" id="learning-management" value="" name="learning-management"><label class="light-one" for="ด้านการจัดการเรียนรู้">ด้านการจัดการเรียนรู้</label>
                                <input class="checkbox-three" type="checkbox" id="academic-service" value="" name="academic-service"><label class="light-two" for="ด้านบริการวิชาการ">ด้านบริการวิชาการ</label>
                            </div>
                            <div class="checkbox-two-body">
                                <input class="checkbox-one" type="checkbox" id="research" value="" name="research"><label class="light-three" for="ด้านวิจัย">ด้านวิจัย</label>
                                <input class="checkbox-four" type="checkbox" id="management-communication" value="" name="management-communication"><label class="light-four" for="ด้านบริหารจัดการและการสื่อสาร">ด้านบริหารจัดการและการสื่อสาร</label>
                                <input class="checkbox-one" type="checkbox" id="management-communication" value="" name="management-communication"><label class="light-four" for="ด้านบริหารจัดการและการสื่อสาร">ด้านบริหารจัดการและการสื่อสาร</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="unit  container">
                    <div class="border-bottom border-dark">

                    </div>
                </div>

                <div>
                    <select name="orderby" class="orderby field2 mt-4">
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
                    <input class="field" type="text" id="unit" name="unit" placeholder="หน่วยวัด:">
                </div>
                <div class="unit">
                    <input class="field" type="text" id="unit" name="unit" placeholder="หน่วยวัด:">
                </div>
                <div class="unit">
                    <input class="field" type="text" id="unit" name="unit" placeholder="หน่วยวัด:">
                </div>
                <div class="unit d-flex field3 mt-3 border-0">
                    <p>ไฟล์หลักฐานแนบ : </p>
                    <input class="ms-2" type="file" id="unit" name="unit" >
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