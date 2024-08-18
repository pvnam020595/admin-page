<nav class="navbar navbar-expand-sm navbar-light bg-white fixed-top d-flex header-content">
    <div class="nav-left d-flex">
        <div class="slidebar-icons sidebar-toggle" href="#menu">
            <button class="navbar-icon btn-toggle-menu" id="btn-toggle-menu">
                <i class="bi bi-list icons"></i>
            </button>
        </div>
        {{-- Search --}}
        <div class="header-search">
            <div class="form-search">
                <form action="" method="post">
                    <div class="search-field">
                        <input type="text" placeholder="Search for" class="inp-search">
                    </div>
                    <div class="icon-search">
                        <a>
                            <i class="bi bi-search icons"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        {{-- End search --}}
    </div>
    <div class="nav-right d-flex">
        {{-- Notification --}}
        <div class="header-notification">
            <li class="mx-15 position-relative">
                <span class="position-absolute badge rounded-circle bg-danger">
                    9
                </span>
                <a href="#" class="messenger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-mailbox icons"></i>
                </a>
                <ul class="profile-info-iner dropdown-menu">
                    {{-- <div class="profile-info-details d-flex flex-column w-215">
                        
                    </div> --}}
                    <li class="users-item-dropdown">
                        <div class="w-40">
                            <i class="bi bi-person icons"></i>
                        </div>
                        <div class="da-text">
                            <a href="#" class="">My Profile </a>
                        </div>

                    </li>
                    <li class="users-item-dropdown">
                        <div class="w-40">
                            <i class="bi bi-gear icons"></i>
                        </div>
                        <div class="da-text">
                            <a href="#" class="">Settings</a>
                        </div>
                    </li>
                    <li class="users-item-dropdown">
                        <div style="" class="w-40">
                            <i class="bi bi-upload icons"></i>
                        </div>
                        <div class="da-text">
                            <a href="{{ route('dashboard.logout') }}" class="">Log Out </a>
                        </div>

                    </li>
                </ul>
            </li>
            <li class="mx-15 position-relative">
                <span class="position-absolute badge rounded-circle bg-danger">
                    9
                </span>
                <a href="#" class="notification">
                    <i class="bi bi-bell icons"></i>
                </a>

            </li>
        </div>
        {{-- End notification --}}
        {{-- Profile --}}
        <div class="profile-info">
            <div class="profile-thumb">
                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" >
                    <img class="w-42" src="{{ url('images/4.png') }}" alt="#">
                </a>
                <ul class="profile-info-iner dropdown-menu">
                    {{-- <div class="profile-info-details d-flex flex-column w-215">
                        
                    </div> --}}
                    <li class="users-item-dropdown">
                        <div class="w-40">
                            <i class="bi bi-person icons"></i>
                        </div>
                        <div class="da-text">
                            <a href="#" class="">My Profile </a>
                        </div>

                    </li>
                    <li class="users-item-dropdown">
                        <div class="w-40">
                            <i class="bi bi-gear icons"></i>
                        </div>
                        <div class="da-text">
                            <a href="#" class="">Settings</a>
                        </div>
                    </li>
                    <li class="users-item-dropdown">
                        <div style="" class="w-40">
                            <i class="bi bi-upload icons"></i>
                        </div>
                        <div class="da-text">
                            <a href="{{ route('dashboard.logout') }}" class="">Log Out </a>
                        </div>

                    </li>
                </ul>
            </div>
            
        </div>
        {{-- End profile --}}
    </div>
</nav>
