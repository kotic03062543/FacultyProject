

<div class="sidebar  ">
    <div class="logo-details">
      <img src="asset/images/scit1.png" alt="">
        <!-- <i class='bx bxs-universal-access'></i> -->
        <span class="logo_name"><img src="asset/images/scit2.png" alt=""></span>
    </div>
    <ul class="nav-links">
 
        <li>
            <a href="#">
                <i class='bx bx-home'></i>
                <span class="link_name">Home</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name"  href="#">Home</a></li>
            
            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <a href="#">
                    <i class='bx bx-book-open' ></i>
                    <span class="link_name">Home</span>
                </a>
                
            </div>
            <ul class="sub-menu">
                <li><a class="link_name"  href="#">Catrgory</a></li>
                <li><a href="#">Web Design</a></li>
                <li><a href="#">Card Design</a></li>
                <li><a href="#">Login From</a></li>
            </ul>
            
        </li>
        <li>
            <div class="iocn-link">
                <a href="#">
                    <i class='bx bxs-book-content'></i>
                    <span class="link_name">Home</span>
                </a>
                <i class='bx bx-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name"  href="#">Catrgory</a></li>
                <li><a href="#">Web Design</a></li>
                <li><a href="#">Card Design</a></li>
                <li><a href="#">Login From</a></li>
            </ul>
        </li>

        <li>
            <div class="iocn-link">
                <a href="#">
                    <i class='bx bxs-graduation' ></i>
                    <span class="link_name">Home</span>
                </a>
                <i class='bx bx-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name"  href="#">Catrgory</a></li>
                <li><a href="#">Web Design</a></li>
                <li><a href="#">Card Design</a></li>
                <li><a href="#">Login From</a></li>
            </ul>
            
        </li>

        <li>
            <div class="iocn-link">
                <a href="#">
                    <i class='bx bx-book-open' ></i>
                    <span class="link_name">Home</span>
                </a>
                <i class='bx bx-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name"  href="#">Catrgory</a></li>
                <li><a href="#">Web Design</a></li>
                <li><a href="#">Card Design</a></li>
                <li><a href="#">Login From</a></li>
            </ul>
            
        </li>
        <li>
            <div class="iocn-link">
                <a href="#">
                    <i class='bx bx-plug' ></i>
                    <span class="link_name">Home</span>
                </a>
                <i class='bx bx-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name"  href="#">Plug</a></li>
                <li><a href="#">Web Design</a></li>
                <li><a href="#">Card Design</a></li>
                <li><a href="#">Login From</a></li>
            </ul>
            
        </li>



        <li>
            <a href="#">
                <i class='bx bx-comment-detail' ></i>
                <span class="link_name">MOU</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name"  href="#">Explor</a></li>
            
            </ul>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-history' ></i>
                <span class="link_name">Home</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name"  href="#">History</a></li>
            
            </ul>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-cog' ></i>
                <span class="link_name">History</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name"  href="#">Settin</a></li>
            
            </ul>
        </li>
<!-- <li>
    <div class="profile-deails">
        <div class="profile-contech">
            <img src="images/seber.jpg" alt="profile">
        </div>
       
        <div class="name-job">
            <div class="profile_name"> Prem Shahi </div>
            <div class="job"> Web Desginer </div>
        </div>
        <i class='bx bxs-log-out' ></i>
    </div>
</li> -->
</ul>
</div>
<section class="home-section">
    <div class="home-content" >
        <i class='bx bx-menu' ></i>
   <ul class="nav-link2">
        <li>
            <div class="iocn-link">
                <span class="link_name">เพิ่มข้อมูลการจัดการเรียนรู้</span>
                <i class='bx bx-chevron-down arrow ' ></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name"  href="#">Catrgory</a></li>
                <li><a href="#">Web Design</a></li>
                <li><a href="#">Card Design</a></li>
                <li><a href="#">Login From</a></li>
            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <span class="link_name">จัดการข้อมูลตัวชี้วัด</span>
                <i class='bx bx-chevron-down arrow'  ></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name"  href="#">Catrgory</a></li>
                <li><a href="#">Web Design</a></li>
                <li><a href="#">Card Design</a></li>
                <li><a href="#">Login From</a></li>
            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <span class="link_name">Admin</span>
                <i class='bx bxs-user-circle'></i>
            </div>
       
        </li>
        
    </ul>

    </div>

    
</section>

<script>
let arrow = document.querySelectorAll(".arrow");



for (var i = 0; i < arrow.length; i++){
arrow[i].addEventListener("click", (e)=>{
    let arrowParent = e.target.parentElement.parentElement;
  
    arrowParent.classList.toggle("showMenu");
    
});
}



let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".bx-menu");
console.log(sidebarBtn);
sidebarBtn.addEventListener("click", ()=>{
sidebar.classList.toggle("close");

});
</script>