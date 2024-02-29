<div class="header-top">
 <nav class="navbar navbar-expand-sm navbar-light bg-white fixed-top">
     <div class="container-fluid">
         <div class="slidebar-icons" data-bs-toggle="offcanvas" href="#menu">
             <a class="navbar-icon" href="#" onclick="navbarEvent.showLeftNavbar()">
                 <i class="bi bi-list"></i>
             </a>
         </div>
         <div class="header-notification">
             <li class="mx-15">
                 <a href="#" class="messenger">
                     <img src="https://demo.dashboardpack.com/cryptocurrency-html/img/icon/msg.svg"
                         alt="">
                 </a>
             </li>
             <li class="mx-15">
                 <a href="#" class="notification">
                     <img src="https://demo.dashboardpack.com/cryptocurrency-html/img/icon/bell.svg"
                         alt="">
                 </a>
             </li>
         </div>
         <div class="profile-info d-flex align-items-center">
             <div class="profile-thumb mx-15">
                 <img src="https://demo.dashboardpack.com/cryptocurrency-html/img/transfer/4.png" alt="#">
             </div>
             <div class="author-name">
                 <h4 class="f-s-15">Jiue Anderson</h4>
                 <span class="f-s-12">Manager</span>
             </div>
             <div class="profile-info-iner">
                 <div class="profile-info-details d-flex flex-column w-215">
                     <li>
                         <a href="#" class="mt-15">My Profile </a>
                     </li>
                     <li>
                         <a href="#" class="mt-15">Settings</a>
                     </li>
                     <li>
                         <a href="{{route('admin.logout')}}" class="mt-15">Log Out </a>
                     </li>
                 </div>
             </div>
         </div>
     </div>
 </nav>
</div>