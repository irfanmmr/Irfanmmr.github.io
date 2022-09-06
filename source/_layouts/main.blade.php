<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <!-- Add the slick-theme.css if you want default styling -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <!-- Add the slick-theme.css if you want default styling -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>

    <body class="text-gray-900 font-sans relative antialiased">
        <div class="max-w-screen-2xl fixed w-full z-50 mx-auto">
            <div class="absolute top-0 left-0 px-10 py-5 flex">
                <img class="w-16" src="assets/logo.svg">
            </div>
            <div class="px-10 py-5 w-full justify-end flex flex-col lg:flex-row">
                <div class="flex flex-row space-x-10">
                    <p class="text-xl font-semibold my-auto transform duration-300 ease-in-out hover:scale-105 cursor-pointer">Design</p>
                    <p class="text-xl font-semibold my-auto transform duration-300 ease-in-out hover:scale-105 cursor-pointer">About</p>
                    <a href="mailto: Irfanmaulanamr@gmail.com?subject=Willing to work together">
                        <div class="transform duration-300 ease-in-out hover:scale-105 cursor-pointer bg-black text-white text-center px-4 py-1 rounded-sm">
                            <p class="font-semibold underline">Hello Irfan</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="max-w-screen-2xl relative mx-auto h-screen">
            @yield('body')
        </div>
    </body>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        $('.center').slick({
            slidesToShow: 3,
            arrows: false,
            dots:false,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        slidesToShow: 1
                    }
                }
            ]
        });

        $('.left').click(function(){
            $('.center').slick('slickPrev');
        })

        $('.right').click(function(){
            $('.center').slick('slickNext');
        })
    </script>
</html>
