<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>ระบบคำนวณเส้นทางการเดินเรือ จ.กระบี่ - @yield('title')</title>
        <meta name="description" content="ระบบคำนวณเส้นทางการเดินเรือ จ.กระบี่"/>
        <meta name="keywords" content="ขนส่งทางเรือ, จังหวัดกระบี่, กระบี่, ขนส่งกระบี่"/>
        <meta name="Classification" content="ขนส่งทางเรือ, ขนส่งกระบี่"/>
        <meta name="url" content="https://choose.in.th">
        <meta name="og:phone_number" content="+66898115155"/>
        <meta name="og:locality" content="choose.in.th"/>
        <meta name="og:image" content="xxxx"/>
        <meta name="designer" content="pumin.wongsiri@gmai.com">

        {{-- Stlyesheet Plugins --}}

        {{-- bootstrap --}}
        <link rel="stylesheet" href="{{ asset('plugins/bootstraps/bootstrap.min.css') }}">

        {{-- wow --}}
        <link rel="stylesheet" href="{{ asset('plugins/wow/animate.css') }}">

        {{-- owl carousel --}}
        <link rel="stylesheet" href="{{ asset('plugins/owl-carousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/owl-carousel/owl.theme.default.min.css') }}">

        {{-- magnific --}}
        <link rel="stylesheet" href="{{ asset('plugins/magnific-popup/magnific-popup.css') }}">

        {{-- datepicker --}}
        <link rel="stylesheet" href="{{ asset('plugins/datepicker/css/bootstrap-datepicker.min.css') }}">

        {{-- multiimage --}}
        <link rel="stylesheet" href="{{ asset('plugins/multiimage/fileinput.css') }}">

        {{-- dataTable --}}
        <link rel="stylesheet" href="{{ asset('plugins/datatable/dataTables.min.css') }}">

        {{-- style.css --}}
        <link rel="stylesheet" href="{{ asset('css/style.css?v=1.0.0') }}">


        {{-- Javascript Plugins --}}

        {{-- jquery --}}
        <script src="{{ asset('plugins/jquery/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ asset('plugins/jquery/modernizr.min.js') }}"></script>

        {{-- bootstrap --}}
        <script src="{{ asset('plugins/bootstraps/popper.min.js') }}"></script>
        <script src="{{ asset('plugins/bootstraps/bootstrap.min.js') }}"></script>

        {{-- wow --}}
        <script src="{{ asset('plugins/wow/wow.min.js') }}"></script>

        {{-- owl carousel --}}
        <script src="{{ asset('plugins/owl-carousel/owl.carousel.min.js') }}"></script>

        {{-- magnific --}}
        <script src="{{ asset('plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

        {{-- datepicker --}}
        <script src="{{ asset('plugins/datepicker/js/bootstrap-datepicker.min.js') }}"></script>

        {{-- multiimage --}}
        <script src="{{ asset('plugins/multiimage/fileinput.js') }}"></script>
        <script src="{{ asset('plugins/multiimage/theme.js') }}"></script>

        {{-- dataTable --}}
        <script src="{{ asset('plugins/datatable/dataTables.min.js') }}"></script>

        {{-- main.js --}}
        <script src="{{ asset('js/main.js') }}"></script>

</head>
<body>
    

    @yield('content')

    <div class="area" >
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
       
</body>
</html>