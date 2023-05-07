<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../utility/theme.css">
    <link rel="stylesheet" href="../utility/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../utility/styles/detali_indicator.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>


<body>

    <?php
    include "../share_templetes/sidebar.php";
    ?>




    <div class="container-fluid pb-2 ">
        <div class="home_content">
            <div class="mt-4 ms-5 fs-2 me-4   ">
                <p>ข้อมูลและตัวชี้วัด</p>
            </div>
            <div class="mt-4 ms-5  me-1  ps-4 pt-3 border border-dark h-100  section1 border-2  ">
                <div class="row">
                    <div class=" col-md-10 col-lg-6 col-xl-12">
                        <div class="d-flex flex-row align-items-center mb-4">
                            <p class="mt-3 ms-1  fw-bold">รหัส:</p>
                            <div class=" flex-fill mb-0  ms-3 me-3  ">
                                <input type="text" id="form3Example1c" class="form-control shadow  " placeholder="ชื่อโครงการ" name="project_name" id="project_name" required style="border-radius: 15px;" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-md-10 col-lg-6 col-xl-12">
                        <div class="d-flex flex-row align-items-center mb-4">
                            <p class="mt-3 ms-1  fw-bold">ชื่อข้อมูล/ตัวชี้วัด:</p>
                            <div class=" flex-fill mb-0 ms-3 me-3">
                                <input type="text" id="form3Example1c" class="form-control shadow  " placeholder="ชื่อโครงการ" name="project_name" id="project_name" required style="border-radius: 15px;" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-md-10 col-lg-6 col-xl-12">
                        <div class="d-flex flex-row align-items-center mb-4">
                            <p class="mt-3 ms-1  fw-bold">หน่วยวัด:</p>
                            <div class=" flex-fill mb-0 ms-3 me-3">
                                <input type="text" id="form3Example1c" class="form-control shadow  " placeholder="ชื่อโครงการ" name="project_name" id="project_name" required style="border-radius: 15px;" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-md-10 col-lg-6 col-xl-12">
                        <div class="d-flex flex-row align-items-center mb-4">
                            <p class="mt-3 ms-1  fw-bold">คำอธิบาย:</p>
                            <div class=" flex-fill mb-0 ms-3 me-3">
                                <input type="text" id="form3Example1c" class="form-control shadow  " placeholder="ชื่อโครงการ" name="project_name" id="project_name" required style="border-radius: 15px;" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-md-10 col-lg-6 col-xl-12">
                        <div class="d-flex flex-row align-items-center mb-4">
                            <p class="mt-3 ms-1  fw-bold">กลุ่มตัวชี้วัด (หลัก):</p>
                            <div class=" flex-fill mb-0 ms-3 me-3">
                                <input type="text" id="form3Example1c" class="form-control shadow  " placeholder="ชื่อโครงการ" name="project_name" id="project_name" required style="border-radius: 15px;" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-md-10 col-lg-6 col-xl-12">
                        <div class="d-flex flex-row align-items-center mb-4">
                            <p class="mt-3 ms-1  fw-bold">ประเภทข้อมูล (ย่อย):</p>
                            <div class=" flex-fill mb-0 ms-3 me-3">
                                <input type="text" id="form3Example1c" class="form-control shadow  " placeholder="ชื่อโครงการ" name="project_name" id="project_name" required style="border-radius: 15px;" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-md-10 col-lg-6 col-xl-12">
                        <div class="d-flex flex-row align-items-center mb-4">
                            <p class="mt-3 ms-1  fw-bold">ผู้รับผิดชอบ:</p>
                            <div class=" flex-fill mb-0 ms-3 me-3">
                                <input type="text" id="form3Example1c" class="form-control shadow  " placeholder="ชื่อโครงการ" name="project_name" id="project_name" required style="border-radius: 15px;" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-md-10 col-lg-6 col-xl-12">
                        <div class="d-flex flex-row align-items-center mb-4">
                            <p class="mt-3 ms-1  fw-bold">สถานะ (active):</p>
                            <div class=" flex-fill mb-0 ms-4 me-3">
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
                <div class="row ">
                    <div class=" col-md-10 col-lg-6 col-xl-12">
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

                <canvas id="myChart" class="" style="width:100%;max-width:600px"></canvas>




            </div>



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
    <script>
        const xValues = [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000];

        new Chart("myChart", {
            type: "line",
            data: {
                labels: xValues,
                datasets: [{
                    data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                    borderColor: "red",
                    fill: false
                }, {
                    data: [1600, 1700, 1700, 1900, 2000, 2700, 4000, 5000, 6000, 7000],
                    borderColor: "green",
                    fill: false
                }, {
                    data: [300, 700, 2000, 5000, 6000, 4000, 2000, 1000, 200, 100],
                    borderColor: "blue",
                    fill: false
                }]
            },
            options: {
                legend: {
                    display: false
                }
            }
        });
    </script>
</body>

</html>