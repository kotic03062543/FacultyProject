<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- นำเข้าไฟล์ CSS ของ Bootstrap 5 -->
    <link rel="stylesheet" href="../utility/bootstrap5/css/bootstrap.min.css">
    <!-- นำเข้าไฟล์ CSS Theme -->
    <link rel="stylesheet" href="../utility/theme.css">
    <!-- นำเข้าไฟล์ CSS style -->
    <link rel="stylesheet" href="../utility/styles/style.css">
    <!-- นำเข้าไฟล์ CSS Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light sticky-top">
        <div class="container-fluid">
            <!-- โลโก้ -->
            <a class="navbar-brand" href="index.html">
                <img src="../../assets/icons/scit-logo.png" alt="">
            </a>
            <!-- ปุ่มที่ใช้แสดงเมนูเมื่อขนาดหน้าจอเล็ก -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- เมนู -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">หน้าหลัก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#lernning_center">ศูนย์ข้อมูลการเรียนรู้</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about_fac">เกี่ยวกับคณะ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#person">บุคคลากร</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#community">ข่าว</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about_psu">เกี่ยวกับเรา</a>
                    </li>
                </ul>
                <!-- ปุ่มเข้าสู่ระบบ -->
                <button type="button" class="btn btn-login ms-auto show-modal" data-bs-toggle="modal" data-bs-target="#exampleModal">ลงชื่อเข้าใช้</button>  
            </div>
        </div>
    </nav>
    <!-- เรียกใช้ Modal -->
    <?php include_once('../auth/login_form.php'); ?>

    <!-- img card -->
    <div class="position-relative img-card">
        <img class="w-100" src="../../assets/images/img-card.jpg" alt="">
        <div class="position-absolute top-50 translate-middle-y bg-transparent">
            <div class="text-start text-white">
                <div class="d-flex">
                    <h2>SCIT</h2>&nbsp;
                    <h2 class="data-center">DataCenter</h2>
                </div>
                <h2>Prince of Songkla University</h2>
                <div class="d-flex">
                    <h2 class="surat">Suratthani</h2>&nbsp;
                    <h2>Campus</h2>
                </div>
                <p>
                    ศูนย์ข้อมูลการเรียนรู้ คณะวิทยาศาสตร์และเทคโนโลยีอุตสาหกรรม
                    <br> มหาวิทยาลัยสงขลานครินทร์ วิทยาเขตสุราษฎร์ธานี
                </p>
            </div>
        </div>
    </div>

    <!-- Card menu ศูนย์ข้อมูลการเรียนรู้ -->
    <div class="container-fluid bg-cnf" id="lernning_center">
        <h2 class="container text-menusix">ศูนย์ข้อมูลการเรียนรู้</h2>
        <div class="container overflow-hidden card-sixmenu">
            <div class="row gy-5">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="p-3 border bg-light">
                        <div class="d-flex justify-content-center">
                            <img src="../../assets/icons/ตัวชี้วัด.png" alt="">
                        </div>
                        <div class="text-center">
                            <p>ข้อมูลตัวชี้วัด</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="p-3 border bg-light">
                        <div class="d-flex justify-content-center">
                            <img src="../../assets/icons/การเรียนรู้.png" alt="">
                        </div>
                        <div class="text-center">
                            <p>จัดการข้อมูลการเรียนรู้</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="p-3 border bg-light">
                        <div class="d-flex justify-content-center">
                            <img src="../../assets/icons/วิจัย.png" alt="">
                        </div>
                        <div class="text-center">
                            <p>งานวิจัย</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="p-3 border bg-light">
                        <div class="d-flex justify-content-center">
                            <img src="../../assets/icons/วิชาการ.png" alt="">
                        </div>
                        <div class="text-center">
                            <p>บริการวิชาการ</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-5">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="p-3 border bg-light">
                        <div class="d-flex justify-content-center">
                            <img src="../../assets/icons/สื่อสาร.png" alt="">
                        </div>
                        <div class="text-center">
                            <p>บริหารจัดการและการสื่อสาร</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="p-3 border bg-light">
                        <div class="d-flex justify-content-center">
                            <img src="../../assets/icons/mou.png" alt="">
                        </div>
                        <div class="text-center">
                            <p>ข้อมูล MOU</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="p-3 border bg-light">
                        <div class="d-flex justify-content-center">
                            <img src="../../assets/icons/rate.png" alt="">
                        </div>
                        <div class="text-center">
                            <p>ประเมินความพึงพอใจ</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="p-3 border bg-light">
                        <div class="d-flex justify-content-center">
                            <img src="../../assets/icons/indicator.png" alt="">
                        </div>
                        <div class="text-center">
                            <p>ข้อมูลทั่วไป</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- เกี่ยวกับคณะของเรา -->
    <div class="card card-about-scit container" id="about_fac">
        <div class="row g-0 ">
            <div class="col-md-5">
                <img src="../../assets/icons/scit-logo.png" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h5 class="card-title d-flex">
                        <i class="bi bi-mortarboard-fill me-3"></i>
                        <p class="mt-2 fw-bold">เกี่ยวกับคณะของเรา</p>
                    </h5>
                    <p class="card-text"> คณะวิทยาศาสตร์และเทคโนโลยีอุตสาหกรรมคือองค์กร
                        ที่ทำหน้าที่สอนวิจัยและบริการวิชาการให้เป็นไปตามวิสัยทัศน์และพันธกิจของคณะซึ่งได้รับการจัดตั้งเป็นหน่วยงานภายในของมหาวิทยาลัยสงขลานครินทร์ตามมติที่ประชุมสภามหาวิทยาลัยสงขลานครินทร์ในคราวประชุมครั้งที่
                        306 4/2551 เมื่อวันที่ 31 พฤษภาคม 2551 ...</p>
                    <p class="card-text">
                    <div class="text-muted">
                        <button class="btn btn-name">
                            อ่านเพิ่มเติม
                            <i class="bi bi-arrow-right"></i>
                        </button>
                    </div>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- บุคคลากร -->
    <div class="container-fluid container-person" id="person">
        <div class="container px-4">
            <div class="row gx-5">
                <div class="col">
                    <div class="p-3 bg-light">
                        <div class="text-center fw-bold">
                            <h2>200</h2>
                            <h3>บุคคลากร</h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 bg-light">
                        <div class="text-center fw-bold">
                            <h2>200</h2>
                            <h3>งานวิจัย</h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 bg-light">
                        <div class="text-center fw-bold">
                            <h2>200</h2>
                            <h3>นักศึกษา</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ข่าวประชาสัมพันธ์ -->
    <div class="bg-cnlernning" id="community">
        <div class="d-flex justify-content-between container mt-3">
            <h2 class="text-menusix">ศูนย์ข้อมูลการเรียนรู้</h2>
            <div class="my-auto">
                <button class="btn btn-name">
                    อ่านเพิ่มเติม
                    <i class="bi bi-arrow-right"></i>
                </button>
            </div>
        </div>
        <div class="container d-flex flex-wrap justify-content-between">
            <div class="card card-activities col-12 col-md-6 col-lg-3" style="width: 19rem;">
                <img src="../../assets/images/scittong.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fw-bold">โครงการ Internet of things with simulation tools</h5>
                    <p class="card-text">ขยายเวลารับสมัคร นักเรียน ครู อาจารย์ พนักงานเจ้าหน้าที่ ภาครัฐ เอกชน
                        ที่เกี่ยวข้องกับระบบอัจฉริยะของหน่วยงานเข้าร่วมโครงการ Internet of things with simulation tools
                    </p>
                    <button class="btn btn-name">อ่านเพิ่มเติม
                        <i class="bi bi-arrow-right"></i>
                    </button>
                    <p class="text-end text-date">31 ธันวาคม 2566</p>
                </div>
            </div>
            <!-- ////////////////// -->
            <div class="card card-activities col-12 col-md-6 col-lg-3" style="width: 19rem;">
                <img src="../../assets/images/scittong.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fw-bold">โครงการ Internet of things with simulation tools</h5>
                    <p class="card-text">ขยายเวลารับสมัคร นักเรียน ครู อาจารย์ พนักงานเจ้าหน้าที่ ภาครัฐ เอกชน
                        ที่เกี่ยวข้องกับระบบอัจฉริยะของหน่วยงานเข้าร่วมโครงการ Internet of things with simulation tools
                    </p>
                    <button class="btn btn-name">อ่านเพิ่มเติม
                        <i class="bi bi-arrow-right"></i>
                    </button>
                    <p class="text-end text-date">31 ธันวาคม 2566</p>
                </div>
            </div>
            <div class="card card-activities col-12 col-md-6 col-lg-3" style="width: 19rem;">
                <img src="../../assets/images/scittong.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fw-bold">โครงการ Internet of things with simulation tools</h5>
                    <p class="card-text">ขยายเวลารับสมัคร นักเรียน ครู อาจารย์ พนักงานเจ้าหน้าที่ ภาครัฐ เอกชน
                        ที่เกี่ยวข้องกับระบบอัจฉริยะของหน่วยงานเข้าร่วมโครงการ Internet of things with simulation tools
                    </p>
                    <button class="btn btn-name">อ่านเพิ่มเติม
                        <i class="bi bi-arrow-right"></i>
                    </button>
                    <p class="text-end text-date">31 ธันวาคม 2566</p>
                </div>
            </div>
            <div class="card card-activities col-12 col-md-6 col-lg-3" style="width: 19rem;">
                <img src="../../assets/images/scittong.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fw-bold">โครงการ Internet of things with simulation tools</h5>
                    <p class="card-text">ขยายเวลารับสมัคร นักเรียน ครู อาจารย์ พนักงานเจ้าหน้าที่ ภาครัฐ เอกชน
                        ที่เกี่ยวข้องกับระบบอัจฉริยะของหน่วยงานเข้าร่วมโครงการ Internet of things with simulation tools
                    </p>
                    <button class="btn btn-name">อ่านเพิ่มเติม
                        <i class="bi bi-arrow-right"></i>
                    </button>
                    <p class="text-end text-date">31 ธันวาคม 2566</p>
                </div>
            </div>
        </div>
    </div>

    <!-- เกี่ยวกับมหาลัย -->
    <div class="container-fluid container-about-psu" id="about_psu">
        <div class="card card-about-psu container">
            <div class="row g-0 ">
                <div class="col-md-6 my-auto">
                    <div class="card-body">
                        <div class="card-title d-flex fs-4 justify-content-end">
                            <p class="mt-2 fw-bold">เกี่ยวกับคณะของเรา</p>
                            <i class="bi bi-house-door-fill ms-3 mt-2"></i>
                        </div>
                        <p class="card-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            คณะวิทยาศาสตร์และเทคโนโลยีอุตสาหกรรมคือองค์กร
                            ที่ทำหน้าที่สอนวิจัยและบริการวิชาการให้เป็นไปตามวิสัยทัศน์และพันธกิจของคณะซึ่งได้รับการจัดตั้งเป็นหน่วยงานภายในของมหาวิทยาลัยสงขลานครินทร์ตามมติที่ประชุมสภามหาวิทยาลัยสงขลานครินทร์ในคราวประชุมครั้งที่
                            306 4/2551 เมื่อวันที่ 31 พฤษภาคม 2551 ...</p>
                        <div class="text-muted text-end mt-4">
                            <button class="btn btn-name">
                                อ่านเพิ่มเติม
                                <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="../../assets/images/psu.png" class="img-fluid rounded-start" alt="...">
                </div>
            </div>
        </div>
    </div>

    <!-- นำเข้าไฟล์ JavaScript ของ Bootstrap 5 -->
    <script src="../utility/bootstrap5/js/bootstrap.min.js"></script>

    <script src="../../controllers/auth/login.js"></script>
</body>

</html>