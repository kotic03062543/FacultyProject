const tableBody = document.querySelector('#table-indicator tbody');

async function loadIndicators() {
    try {
        const response = await fetch('../../models/indicator/IndicatorModel.php');
        const data = await response.json();
        if (data.length > 0) {
            data.forEach((indicator, index) => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${indicator.id}</td>
                    <td>${indicator.name}</td>
                    <td><a href="../../views/slide_view/detail_indicator.php?id=${indicator.id}">กด</a></td>

                `;
                tableBody.appendChild(row);
            });
        } else {
            const row = document.createElement('tr');
            row.innerHTML = '<td colspan="3">ไม่พบข้อมูลตัวชี้วัด</td>';
            tableBody.appendChild(row);
        }
    } catch (error) {
        console.log(error);
    }
}

loadIndicators();
