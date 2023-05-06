//  สร้างฟังก์ชัน getData ที่ใช้ส่ง request ไปยัง endpoint ของ API เพื่อดึงข้อมูลตัวชี้วัด
async function getData() {
    try {
      const response = await fetch('../controllers/indicator/IndicatorController.php');
      const data = await response.json();
      return data;
    } catch (error) {
      console.log(error);
    }
  }
  
  //  สร้างฟังก์ชัน renderTable ที่ใช้สร้างตารางและแสดงข้อมูลตัวชี้วัดที่ได้จาก API
  async function renderTable() {
    const data = await getData();
  
    const tbody = document.querySelector('#table-indicator tbody');
    let html = '';
  
    data.forEach((indicator, index) => {
      html += `
        <tr>
          <th scope="row">${index + 1}</th>
          <td>${indicator.name}</td>
          <td>${indicator.description}</td>
        </tr>
      `;
    });
  
    tbody.innerHTML = html;
  }
  
  //  เรียกใช้งานฟังก์ชัน renderTable เมื่อโหลดหน้าเว็บ
  window.addEventListener('load', renderTable);
  