<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>DewataStore</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" />
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
        <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/perfect-scrollbar@1.5.5/dist/perfect-scrollbar.min.js"></script>
    </head>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        .header-3-1 .card {
            background-color: #f5f5f5;
            transition: 0.4s;
            top: 0px;
            left: 0px;
            position: relative;
        }

        .header-3-1 .card:hover {
            top: -3px;
            left: -3px;
            position: relative;
            transition: 0.4s;
        }

        .header-3-1 .btn-sign,
        .header-3-1 .nav-text,
        .header-3-1 .caption-text {
            color: #e8f1ff;
            transition: 0.2s;
        }

        .header-3-1 .bg-white-1 {
            background-color: #e8f1ff;
        }

        .header-3-1 .btn-sign:hover {
            color: #ffffff;
            transition: 0.3s;
        }

        .header-3-1 .btn-outline:hover {
            border: 1px solid #ff7468;
            color: #ff7468;
            transition: 0.3s;
        }

        .header-3-1 .navigation .active {
            position: relative;
            padding-bottom: 3px;
            padding-top: 3px;
            transition: 0.3s;
        }

        .header-3-1 .navigation .active:before {
            content: "";
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            text-align: center;
            bottom: 0;
            height: 0px;
            width: 80%;
            border-bottom: 2px solid #ff7468;
            transition: 0.3s;
        }

        .header-3-1 .btn-fill {
            border: 1px solid #ff7468;
            background-color: #ff7468;
            transition: 0.3s;
        }

        .header-3-1 .btn-fill:hover {
            background-color: #ff8378;
            border: 1px solid #ff8378;
            transition: 0.3s;
        }

        .header-3-1 .btn-outline {
            border: 1px solid #5d6e86;
            color: #5d6e86;
            transition: 0.3s;
        }

        .header-3-1 .btn-outline:hover div path {
            fill: #ff7468;
        }

        .header-3-1 .btn-outline:hover div rect {
            stroke: #ff7468;
        }

        .header-3-1 .navigation a:hover {
            color: #ffffff !important;
            font-weight: 500;
            transition: 0.3s;
        }

        .header-3-1 #form {
            width: 100%;
        }

        .header-3-1 #form input[type="text"] {
            width: 100%;
            background-color: #e8f1ff;
            box-sizing: border-box;
            font-size: 14px;
            padding: 0.375rem 0.5rem;
            -webkit-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
        }

        .header-3-1 .search-icon:hover path {
            fill: #ffffff;
        }

        .header-3-1 .title-font {
            color: #fefefe;
            line-height: 1.25;
        }

        .header-3-1 .text-gray-1 {
            color: #aaa6a6;
        }

        @media (max-width: 1023px) {
            .header-3-1 .backdrop-background {
                background-image: linear-gradient(to bottom right,
                        rgba(39, 59, 86, 1),
                        rgba(36, 49, 66, 1));
            }

            .header-3-1 #form input[type="text"] {
                width: 100%;
            }
        }

        @media (min-width: 1024px) {
            .header-3-1 .center-search {
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
            }

            .header-3-1 #form {
                width: 320px;
            }
        }

    </style>
    <style>
        .barcode {
            left: 50%;
            box-shadow: 1px 0 0 1px, 5px 0 0 1px, 10px 0 0 1px, 11px 0 0 1px, 15px 0 0 1px, 18px 0 0 1px, 22px 0 0 1px, 23px 0 0 1px, 26px 0 0 1px, 30px 0 0 1px, 35px 0 0 1px, 37px 0 0 1px, 41px 0 0 1px, 44px 0 0 1px, 47px 0 0 1px, 51px 0 0 1px, 56px 0 0 1px, 59px 0 0 1px, 64px 0 0 1px, 68px 0 0 1px, 72px 0 0 1px, 74px 0 0 1px, 77px 0 0 1px, 81px 0 0 1px, 85px 0 0 1px, 88px 0 0 1px, 92px 0 0 1px, 95px 0 0 1px, 96px 0 0 1px, 97px 0 0 1px, 101px 0 0 1px, 105px 0 0 1px, 109px 0 0 1px, 110px 0 0 1px, 113px 0 0 1px, 116px 0 0 1px, 120px 0 0 1px, 123px 0 0 1px, 127px 0 0 1px, 130px 0 0 1px, 131px 0 0 1px, 134px 0 0 1px, 135px 0 0 1px, 138px 0 0 1px, 141px 0 0 1px, 144px 0 0 1px, 147px 0 0 1px, 148px 0 0 1px, 151px 0 0 1px, 155px 0 0 1px, 158px 0 0 1px, 162px 0 0 1px, 165px 0 0 1px, 168px 0 0 1px, 173px 0 0 1px, 176px 0 0 1px, 177px 0 0 1px, 180px 0 0 1px;
            display: inline-block;
            transform: translateX(-90px);
        }

    </style>

    <body>
        <section class="h-full w-full border-box transition-all duration-500 linear relative" style="
				background-image: linear-gradient(
					to bottom,
					rgba(39, 59, 86, 1),
					rgba(36, 49, 66, 1)
				);
			">
            <!-- Navbar -->
            @include('components.frontend.header')
            <!-- Navbar -->
            <!-- body -->
            @yield('user-content')




            <!-- body -->

        </section>

        <!-- SECTION LEFT TO RIGHTT -->
        @include('sweetalert::alert')

    </body>

</html>
