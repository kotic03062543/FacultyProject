<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg ">
        <div class="modal-content ">
            <div class="modal-body">
                <div>
                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div id="login" class="mb-5">
                    <div class="text-center mt-5">
                        <img src="../../assets/images/scit-logo.png">
                    </div>
                    <div class="container">
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
                                            <input type="text" name="fname" id="fname" class="form-control"
                                                placeholder="PSU Passport">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="text-dark">รหัสผ่าน</label><br>
                                            <div class="password-wrapper">
                                                <input type="password" name="lname" id="lname"
                                                    class="form-control" placeholder="PSU Passport password">
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
                                                    class="btn btn-block w-100 rounded-lg text-white border-0"
                                                    value="เข้าสู่ระบบ">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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