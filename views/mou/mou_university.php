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


<div class="box-mou-body">
        <div class="tabs">
            <input type="radio" id="radio-1" name="tabs" checked />
            <a href="#" class="tab border border-dark  "  onclick="showTab('about')"><label  class="tab" for="radio-1">MOU ต่างประเทศ</label></a>
            <input type="radio" id="radio-2" name="tabs" checked />
            <a href="#" class="tab border border-dark  "  onclick="showTab('home')"><label  class="tab" for="radio-2">MOU สถานประกอบการ</label></a>
            <input type="radio" id="radio-3" name="tabs" checked />
            <a href="#" class="tab border border-dark  "  onclick="showTab('home2')"><label  class="tab" for="radio-3">MOU กับโรงเรียน</label></a>
            <span class="glider"></span>
        </div>


        <div class="input-mou-body" id="about" > 
            <div class="home-mou">
                <div class="mou-university">MOU กับมหาวิทยาลัยต่างประเทศ</div>
            </div>

            <div class="input-mou-university" id="about" >
                <div class="name-university">
                    <input class="field" type="text" id="name" name="name" placeholder="ชื่อมหาวิทยาลัยในต่างประเทศ">
                </div>
                <div class="country">
                    <input class="field" type="text" id="country" name="country" placeholder="ประเทศ :">
                </div>
                <div class="date-write">
                    <input class="field" type="text" id="date" name="date" placeholder="วันที่จด MOU">
                </div>
                <div class="expiration-date">
                    <input class="field" type="text" id="expiration_date" name="expiration_date"
                        placeholder="วันหมดอายุ :">
                </div>
            </div>
        </div>

        <div class="input-mou-body" id="home" >
            <div class="home-mou">
                <div class="mou-university">MOU  กับสถานประกอบการ</div>
            </div>

            <div class="input-mou-university" id="about" >
                <div class="name-university">
                    <input class="field" type="text" id="name" name="name" placeholder="ชื่อมหาวิทยาลัยในต่างประเทศ">
                </div>
                <div class="country">
                    <input class="field" type="text" id="country" name="country" placeholder="ประเทศ :">
                </div>
                <div class="date-write">
                    <input class="field" type="text" id="date" name="date" placeholder="วันที่จด MOU">
                </div>
                <div class="expiration-date">
                    <input class="field" type="text" id="expiration_date" name="expiration_date"
                        placeholder="วันหมดอายุ :">
                </div>
            </div>
        </div>

        
        <div class="input-mou-body" id="home2" > 
            <div class="home-mou">
                <div class="mou-university">MOU  กับโรงเรียน</div>
            </div>

            <div class="input-mou-university">
                <div class="name-university">
                    <input class="field" type="text" id="name" name="name" placeholder="ชื่อมหาวิทยาลัยในต่างประเทศ">
                </div>
                <div class="country">
                    <input class="field" type="text" id="country" name="country" placeholder="ประเทศ :">
                </div>
                <div class="date-write">
                    <input class="field" type="text" id="date" name="date" placeholder="วันที่จด MOU">
                </div>
                <div class="expiration-date">
                    <input class="field" type="text" id="expiration_date" name="expiration_date"
                        placeholder="วันหมดอายุ :">
                </div>
            </div>
        </div>

        <div class="btn-body text-end pe-5 mt-4">
            <input class="btn-one" type="reset" value="ยกเลิก">
            <input class="btn-two" type="submit" value="บันทึก">
        </div>

    </div>

<!-- 
    <div class="container  ">
        <div class="tabs">
            <input type="radio" id="radio-1" name="tabs" checked />
            <a href="#" class="tab border border-dark  "  onclick="showTab('home')"><label  class="tab" for="radio-1">MOU ต่างประเทศ</label></a>


            <input type="radio" id="radio-2" name="tabs" />
            <a href="#" class="tab border border-dark "  onclick="showTab('about')"><label  class="tab" for="radio-2">MOU สถานประกอบการ</label></a>

            
            <input type="radio" id="radio-3" name="tabs" />
            <a href="#" class="tab border border-dark  "  onclick="showTab('contact')"><label  class="tab" for="radio-3">MOU กับโรงเรียน</label></a>
            <span class="glider"></span>
        </div>
    </div>



    <div class="box-data-university  " id="home">
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


    <div class="box-data-university  " id="about">
        <div class="mou_university">
            MOU2 กับมหาวิทยาลัยต่างประเทศ
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


    <div class="box-data-university  " id="contact">
        <div class="mou_university">
            MOU3 กับมหาวิทยาลัยต่างประเทศ
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
    </div> -->



    </section>

    <script src="../utility/bootstrap5/js/bootstrap.min.js"></script>
    <script>
        function showTab(tabId) {
            // hide all tab content
            var tabs = document.getElementsByClassName("input-mou-body");
            for (var i = 0; i < tabs.length; i++) {
                tabs[i].style.display = "none";
            }

            // show selected tab content
            document.getElementById(tabId).style.display = "block";

            // store selected tab ID in local storage
            localStorage.setItem("selectedTab", tabId);
        }

        // on page load, show the last selected tab (if any)
        var lastSelectedTab = localStorage.getItem("selectedTab");
        if (lastSelectedTab) {
            showTab(lastSelectedTab);
        } else {
            // show the first tab by default
            showTab("home");
        }
    </script>

</body>

</html>