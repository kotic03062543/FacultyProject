<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="asset/css/login_css.css">
    <title>Document</title>

</head>

<body>
    <div id="login">
        <div class="text-center mt-5">
            <img src="asset/images/scit-logo.png" class="" height="100px" width="250px" alt="">
        </div>
        <div class="container">
            <div id="login-row" class="row justify-content-center   align-items-center">
                <div id="login-column" class="col-md-6  ">
                    <div id="login-box" class="col-md-12 shadow ">
                        <form id="login-form" class="form" action="" method="">
                            <div class="row mt-3">
                                <div class="col-8">
                                    <h5 class="font-weight-bold">ลงชื่อเข้าใช้บัญชี</h5>
                                    <h7>กรุณากรอกบัญชี PSU Passport และรหัสผ่าน</h7>
                                </div>
                                <div class="col-4">
                                     <img src="asset/images/psu_logo.png" alt="">
                                </div>

                            </div>
                            <div class="form-group mt-3">
                                <label for="username" class="text-dark">อีเมล</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-dark">รหัสผ่าน</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span><input  id="remember-me" name="remember-me" type="checkbox"></span><span>จดจำรหัสผ่าน</span> </label><br>
                            
                            </div>

                            <div class="row">
                                <div class="col-12">
                                <input type="submit" name="submit" class="btn btn-info btn-md btn-block  rounded-lg " value="เข้าสู่ระบบ">
                                </div>
                            </div>
                            <!-- <div id="register-link" class="text-right">
                                <a href="#" class="text-info">Register here</a>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>