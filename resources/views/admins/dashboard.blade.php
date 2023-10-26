<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('public/src/main.css') }}">
    <link rel="stylesheet" href="{{ url('public/src/47.css') }}">
    <link rel="stylesheet"
        href="{{ url('public/src/vendors-node_modules_bootstrap_dist_js_bootstrap_esm_js-node_modules_bootstrap-icons_font_boo-87d249.css') }}">
</head>

<body>
    {{-- Start Main Sidebar --}}
        @include('admins.sidebar')
    {{-- End Main Sidebar --}}
    <div class="content-wrapper">
        {{-- Navbar top --}}
        @include('admins.navbar-top')
        {{-- End navbar top --}}
        <div class="content-main">
            <div id="editor1"></div>
        </div>
    </div>
    <script src="{{ url('public/src/main.js') }}"></script>
    <script src="{{ url('public/src/47.js') }}"></script>
    <script src="{{ url('public/src/ckeditor5/build/ckeditor.js') }}"></script>
    <script
        src="{{ url('public/src/vendors-node_modules_bootstrap-icons_font_bootstrap-icons_scss-node_modules_bootstrap_dist_js-ca060b.js') }}">
    </script>
</body>

</html>

<script>
    ClassicEditor.create( document.querySelector('#editor1'), {} )
    const navLeft = document.querySelector(".nav-left");
    var width = window.innerWidth;
    const navbarEvent = {
        mobileWidth: 768,
        navHidden: 'nav-left-sidebar-hidden',
        navShow: 'nav-left-sidebar-show',
        showLeftNavbar: function() {
            const sidebar = document.querySelector(".sidebar")
            const contenrWrapper = document.querySelector(".content-wrapper")
            if(navLeft.classList.contains('nav-left-sidebar-show')) {
                navLeft.classList.add(this.navHidden)
                navLeft.classList.remove(this.navShow)
                if(width > this.mobileWidth ) {
                    contenrWrapper.classList.remove('full-main-content')
                    sidebar.classList.remove('mini-sidebar')
                }
            } else {
                navLeft.classList.add(this.navShow)
                navLeft.classList.remove(this.navHidden)
                if(width > this.mobileWidth ) {
                    contenrWrapper.classList.add('full-main-content')
                    sidebar.classList.add('mini-sidebar')
                }
            }
        },
        toggleLeftNavbar: function(event) {
            let _this = event;
            const elements = document.querySelectorAll('.has-arrow')
            elements.forEach(element => {
                if(_this === element) {
                    if(element.parentElement.classList.contains('active')) {
                        element.parentElement.classList.remove("active");
                        element.parentElement.classList.add("inactive");
                    } else {
                        element.parentElement.classList.add("active");
                        element.parentElement.classList.remove("inactive");
                    }
                } else {
                    element.parentElement.classList.remove("active");
                    element.parentElement.classList.add("inactive");
                }
                
            });
        },
        toggleLeftNavbarMobile: function(event) {
            const navLeft = document.querySelector(".nav-left");
            if(event.target.closest(".sidebar") || event.target.closest(".navbar-icon")) {
                return;
            } else {
                navLeft.classList.remove(this.navShow)
                navLeft.classList.add(this.navHidden)
            }
        },
        getWidthDevice: function() {
            const elemnts = document.querySelector(".nav-left");
            if(width < this.mobileWidth ) {
                navLeft.classList.add(this.navHidden)
                navLeft.classList.remove(this.navShow)
            } else {
                navLeft.classList.remove(this.navHidden)
                navLeft.classList.remove(this.navShow)
            }
        }
    }
    window.addEventListener('load', function() {
        document.addEventListener("click", function(event) {
            const width = window.innerWidth;
            if(width < navbarEvent.mobileWidth) {
                navbarEvent.toggleLeftNavbarMobile(event);
            }
        })
        window.onresize = function(event) {
            navbarEvent.getWidthDevice();
            width = window.innerWidth;
        };
    })
</script>
<style>

</style>
