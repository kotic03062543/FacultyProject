const form = document.querySelector('#form-insert-indicator');
form.addEventListener('submit', async (e) => {
    e.preventDefault();
    const name = document.querySelector('#name').value;
    const unit = document.querySelector('#unit').value;
    const description = document.querySelector('#description').value;
    const data = {
        name, unit, description
    };
    try {
        const response = await fetch('../../models/indicator/insert-indicatorModel.php', {
            method: 'POST',
            body: JSON.stringify(data),
            headers: {
                'Content-Type': 'application/json'
            }
        });
        const rs = await response.json();
        if (rs.success) {
            alert('บันทึกข้อมูลสำเร็จ');
            window.location.href = '../indicator/indicator.php';
        }
        else {
            alert(rs.message);
        }
    }
    catch (error) {
        console.log(error);
    }

});
