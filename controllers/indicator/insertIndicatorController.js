const loginForm = document.querySelector('#form-insert-indicator');

loginForm.addEventListener('submit', async function (event) {
    event.preventDefault();

    const name = document.querySelector('#name').value;
    const unit = document.querySelector('#unit').value;
    const description = document.querySelector('#description').value;

    try {
        const response = await fetch('../../models/indicator/insert-indicatorModel.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `name=${name}&unit=${unit}&description=${description}`
        });
        const data = await response.json();
        if (data.success) {
            // เข้าสู่ระบบสำเร็จ
            alert('เพิ่มตัวชี้วัดสำเร็จ');
            window.open('../../views/slide_view/insert_indicator.php', '_self');
        } else {
            // ไม่สำเร็จ
            alert(data.message);
        }
    } catch (error) {
        console.log(error);
    }
});
