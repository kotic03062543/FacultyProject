// นำเข้าค่าต่างๆ เช่น DOM elements และ function ต่างๆ ที่เราจะใช้ในการทำงานของ controller

const id = new URLSearchParams(window.location.search).get('id');

const idField = document.querySelector('#id');
const nameField = document.querySelector('#name');
const unitField = document.querySelector('#unit');
const descriptionField = document.querySelector('#description');

async function loadIndicator() {
    try {
        const response = await fetch(`../../models/indicator/detailIndicatorModel.php?id=${id}`);
        const data = await response.json();
        if (data.success) {
            const indicator = data.message;
            idField.value = indicator.id;
            nameField.value = indicator.name;
            unitField.value = indicator.unit;
            descriptionField.value = indicator.description;
        } else {
            alert(data.message);
        }
    } catch (error) {
        console.log(error);
    }
}

loadIndicator();
