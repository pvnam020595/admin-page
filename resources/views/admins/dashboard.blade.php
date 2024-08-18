<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('app.dashboard') }}</title>
    <link rel="stylesheet" href="{{ url('src/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('src/css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ url('src/css/common.css') }}">
</head>

<body>
    <div class="das-main">
        {{-- Start Main Sidebar --}}
        <section class="nav" aria-label="nav">
            @include('admins.sidebar')
        </section>
        {{-- End Main Sidebar --}}
        
        {{-- Navbar top --}}
        @include('admins.header')
        {{-- End navbar top --}}
        {{-- <div class="content-main">
        </div> --}}
    </div>
</body>
<script src="{{ url('src/js/bootstrap.bundle.js') }}"></script>

</html>

<script>
    window.addEventListener('load', function() {
        let options = [
            {
                Cclass: "profile-thumb",
                Ctoggle: "profile-info-iner"
            },
            {
                Cclass: "slidebar-icons",
                Ctoggle: "nav"
            },
        ]
        pToggle.init(options).add();
    })

    var pToggle = {
        close: "hidden",
        elem: undefined,
        options: [],
        init: function(options) {
            pToggle.options = options
            return pToggle
        },
        add: function() {
            let that = pToggle.options;
            that.forEach(element => {
                let dom = document.querySelector(`.${element.Cclass}`);
                dom.addEventListener("click", function(event) {
                    profile = document.querySelector(`.${element.Ctoggle}`);
                    profile.classList.toggle(pToggle.close);
                })
            });
        },

    }
</script>
<style>

</style>
