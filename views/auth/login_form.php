<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
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
    <div class="img-scit-logo pb-2 pt-5">
        <img src="../../assets/images/scit-logo.png" alt="">
    </div>
    <div class="container w-50">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-12">
                <div id="login-box" class="col-md-12 shadow">
                    <form id="login-form" class="form" action="" method="">
                        <div class="d-flex mb-3">
                            <div class="my-auto">
                                <h5 class="font-weight-bold">ลงชื่อเข้าใช้บัญชี</h5>
                                <h7>กรุณากรอกบัญชี PSU Passport และรหัสผ่าน</h7>
                            </div>
                            <div>
                                <img src="../../assets/images/psu_logo.png" alt="">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label class="text-dark">อีเมล</label><br>
                            <input type="text" name="fname" id="fname" class="form-control" placeholder="PSU Passport">
                        </div>
                        <div class="form-group mb-3">
                            <label class="text-dark">รหัสผ่าน</label><br>
                            <div class="password-wrapper">
                                <input type="password" name="lname" id="lname" class="form-control"
                                    placeholder="PSU Passport password">
                                <i class="bi bi-eye-fill password-toggle-icon" id="togglePassword"></i>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label class="text-info">
                                <span><input id="remember-me" name="remember-me" type="checkbox">
                                </span>
                                <span>จดจำรหัสผ่าน</span>
                            </label>
                            <br>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <input type="submit" name="submit"
                                    class="btn btn-block w-100 rounded-lg text-white border-0" value="เข้าสู่ระบบ">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>


<!-- นำเข้าไฟล์ JavaScript ของ Bootstrap 5 -->
<script src="../utility/bootstrap5/js/bootstrap.min.js"></script>
<!-- login coontroller -->
<script src="../../controllers/auth/login.js"></script>

<!-- ดู Password -->
<script>
const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#lname');

togglePassword.addEventListener('click', function(e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('bi-eye-slash-fill');
});
</script>