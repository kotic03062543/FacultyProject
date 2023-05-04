const loginForm = document.querySelector('#login-form');

loginForm.addEventListener('submit', async function (event) {
    event.preventDefault();

    const fname = document.querySelector('#fname').value;
    const lname = document.querySelector('#lname').value;

    try {
        const response = await fetch('../../models/auth/login.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `fname=${fname}&lname=${lname}`
        });
        const data = await response.json();
        if (data.success) {
            // เข้าสู่ระบบสำเร็จ
            alert('เข้าสู่ระบบสำเร็จ');
        } else {
            // เข้าสู่ระบบไม่สำเร็จ
            alert(data.message);
        }
    } catch (error) {
        console.log(error);
    }
});
