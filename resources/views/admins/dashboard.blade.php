<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('app.dashboard') }}</title>
    <link rel="stylesheet" href="{{ url('public/src/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('public/src/css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ url('public/src/css/custom.css') }}">
</head>

<body>
    {{-- Start Main Sidebar --}}
    <aside class="nav" aria-label="nav">
        @include('admins.sidebar')
    </aside>
    {{-- End Main Sidebar --}}
        <div class="content-wrapper">
            {{-- Navbar top --}}
            @include('admins.navbar-top')
            {{-- End navbar top --}}
            {{-- <div class="content-main">
                
            </div> --}}
        </div>
</body>
<script src="{{ url('public/src/js/bootstrap.bundle.js') }}"></script>

</html>

<script>
    // ClassicEditor.create(document.querySelector('#editor1'), {})
    // const navLeft = document.querySelector(".nav-left");
    // var width = window.innerWidth;
    // const navbarEvent = {
    //     mobileWidth: 768,
    //     navHidden: 'nav-left-sidebar-hidden',
    //     navShow: 'nav-left-sidebar-show',
    //     showLeftNavbar: function() {
    //         const sidebar = document.querySelector(".sidebar")
    //         const contenrWrapper = document.querySelector(".content-wrapper")
    //         if (navLeft.classList.contains('nav-left-sidebar-show')) {
    //             navLeft.classList.add(this.navHidden)
    //             navLeft.classList.remove(this.navShow)
    //             if (width > this.mobileWidth) {
    //                 contenrWrapper.classList.remove('full-main-content')
    //                 sidebar.classList.remove('mini-sidebar')
    //             }
    //         } else {
    //             navLeft.classList.add(this.navShow)
    //             navLeft.classList.remove(this.navHidden)
    //             if (width > this.mobileWidth) {
    //                 contenrWrapper.classList.add('full-main-content')
    //                 sidebar.classList.add('mini-sidebar')
    //             }
    //         }
    //     },
    //     toggleLeftNavbar: function(event) {
    //         let _this = event;
    //         const elements = document.querySelectorAll('.sub-menu')
    //         elements.forEach(element => {
    //             if (_this === element) {
    //                 if (element.parentElement.classList.contains('active')) {
    //                     element.parentElement.classList.remove("active");
    //                     element.parentElement.classList.add("inactive");
    //                 } else {
    //                     element.parentElement.classList.add("active");
    //                     element.parentElement.classList.remove("inactive");
    //                 }
    //             } else {
    //                 element.parentElement.classList.remove("active");
    //                 element.parentElement.classList.add("inactive");
    //             }

    //         });
    //     },
    //     toggleLeftNavbarMobile: function(event) {
    //         const navLeft = document.querySelector(".nav-left");
    //         if (event.target.closest(".sidebar") || event.target.closest(".navbar-icon")) {
    //             return;
    //         } else {
    //             navLeft.classList.remove(this.navShow)
    //             navLeft.classList.add(this.navHidden)
    //         }
    //     },
    //     getWidthDevice: function() {
    //         const elemnts = document.querySelector(".nav-left");
    //         if (width < this.mobileWidth) {
    //             navLeft.classList.add(this.navHidden)
    //             navLeft.classList.remove(this.navShow)
    //         } else {
    //             navLeft.classList.remove(this.navHidden)
    //             navLeft.classList.remove(this.navShow)
    //         }
    //     }
    // }
    window.addEventListener('load', function() {
        // document.addEventListener("click", function(event) {
        //     const width = window.innerWidth;
        //     if (width < navbarEvent.mobileWidth) {
        //         navbarEvent.toggleLeftNavbarMobile(event);
        //     }
        // })
        profile = document.querySelector('.profile-info-iner');
        profile.classList.toggle('close');
        // profile = document.querySelector('.profile-info-iner');
        // profile.classList.toggle('close');
        doc = document.querySelector('.profile-thumb');
        doc.addEventListener("click", function(event) {
            profile = document.querySelector('.profile-info-iner');
            profile.classList.toggle('close');
        })
        // window.onresize = function(event) {
        //     navbarEvent.getWidthDevice();
        //     width = window.innerWidth;
        // };
        
        
    })
</script>
<style>

</style>
