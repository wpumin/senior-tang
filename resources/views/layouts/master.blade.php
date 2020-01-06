<!DOCTYPE html>
<html lang="en">
    <head>

        <?php
            $current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $current_page = (explode("/",$current_url));
            if(!empty($current_page[2]))
            {
                $menu_active = $current_page[2];
            }else{
                $menu_active = "";
            }
            if(!empty($current_page[3]))
            {
                $menu_active2 = $current_page[3];
            }else{
                $menu_active2 = "";
            }
            if(!empty($current_page[4]))
            {
                $menu_active3 = $current_page[4];
            }else{
                $menu_active3 = "";
            }
            // echo '<pre>'. $menu_active . '</pre>'; // domain
            // echo '<pre>'. $menu_active2 . '</pre>'; // first
            // echo '<pre>'. $menu_active3 . '</pre>'; // second
        ?>

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

        <script>

        $( document ).ready( function() {
            $( '.dropdown' ).on( 'show.bs.dropdown', function() {
                $( this ).find( '.dropdown-menu' ).first().stop( true, true ).slideDown( 150 );
            } );
            $('.dropdown').on( 'hide.bs.dropdown', function(){
                $( this ).find( '.dropdown-menu' ).first().stop( true, true ).slideUp( 150 );
            } );
        } );

        </script>

    </head>
    <body id="myDiv">
        <div id="loader" class="loader">&nbsp;</div>
        <header class="header-wrapper top">
            <div class="header container">
                <div class="row">
                    <div class="col-12 p-0 p-lg-3">
                        <a href="{{ url('/') }}" class="logo">
                            <img src="{{ asset('images/logo/source.gif') }}" alt="logo" class="d-block d-md-none">
                            <img src="{{ asset('images/logo/source.gif') }}" alt="logo" class="d-none d-md-block">
                        </a>
                        <input class="menu-btn" type="checkbox" id="menu-btn"/>
                        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
                        <ul class="menu">
                            <li><a href="{{ url('/show-detail') }}" class="<?php if($menu_active2 == "show-detail"){ echo "active"; } ?>"> <i class="flaticon-internet"></i> ข้อมูล</a></li>
                            <li><a href="{{ url('/calculate') }}" class="<?php if($menu_active2 == "calculate" || $menu_active2 == "result"){ echo "active"; } ?>"> <i class="flaticon-calculator"></i> คำนวณเส้นทาง</a></li>
                            <li><a href="{{ url('/') }}" class=""> <i class="flaticon-logout"></i> ออกจากระบบ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        {{-- only for index  --}}
        @yield('banner-index')

        {{-- common page  --}}
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @yield('content')
                </div>
            </div>
        </div>

        <a href="#" id="scroll" style="display: none;"><span></span></a>

        {{-- script  --}}
        @yield('script')

        <script>

            $('#announcement').click(function(){
                $(this).find('#announcement-arrow').toggleClass('rotated');
                $('#profile-arrow').removeClass('rotated');
            });

            $('#profile').click(function(){
                $(this).find('#profile-arrow').toggleClass('rotated');
                $('#announcement-arrow').removeClass('rotated');
            });

        </script>

    </body>
</html>
