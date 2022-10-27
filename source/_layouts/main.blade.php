<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>

        <link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="../assets/favicon/site.webmanifest">

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>

    <body class="max-w-screen-2xl mx-auto text-gray-900 font-sans relative antialiased">

    <!-- animation -->
    <div class="animation hidden">
        <h1 class="animate">
            <img class="w-16" src="../assets/logo.svg">
        </h1>
    </div>


        <div class="max-w-screen-2xl fixed w-full z-50 mx-auto">
            <a href="../">
                <div class="absolute top-0 left-0 px-5 lg:px-10 py-5 flex">
                    <img class="w-16" src="../assets/logo.svg">
                </div>
            </a>
            <div class="px-5 lg:px-10 py-5 w-full justify-end flex flex-row">
                <div class="flex flex-row space-x-5 lg:space-x-10">
                    <a class="flex" href="/design">
                        <p class="text-sm lg:text-xl font-semibold my-auto transform duration-300 ease-in-out hover:scale-105 cursor-pointer">Design</p>
                    </a>
                    <p class="text-sm lg:text-xl font-semibold my-auto transform duration-300 ease-in-out hover:scale-105 cursor-pointer">About</p>
                    <a href="mailto: Irfanmaulanamr@gmail.com?subject=Willing to work together">
                        <div class="transform duration-300 ease-in-out hover:scale-105 cursor-pointer bg-black text-white text-center px-4 py-1 rounded-sm">
                            <p class="text-sm lg:text-md font-semibold underline">Hello Irfan</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="max-w-screen-2xl relative mx-auto h-screen max-h-desktop">
            @yield('body')
        </div>
    </body>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.1/gsap.min.js"></script>


    <script>
        const timeline = gsap.timeline();

        timeline.to(".animate", {
            delay: 0.5,
            duration: 0.5,
            opacity: 0
        });
        timeline.to(".animation", {
            display:"flex",
            duration: 1,
            y: "-100%",
            ease: "power4.out",
            height:0
        });

        timeline.to(".animation", {
            zIndex: -1,
        });

        timeline.from(".container h1", {
            delay: 0.5,
            duration: 0.8,
            skewY: 10,
            y: 100,
            x: -300,
            opacity: 0
        });

        timeline.set("body", {
            overflow:"flex"
        });

    </script>

    <script>
        const items = document.querySelectorAll('.container')
        const mediaQuery = window.matchMedia("(min-width: 1280px)");
        console.log('query', mediaQuery)
        function buildConditionalTween(mediaQuery) {

            if(mediaQuery.matches) {
                items.forEach((el) => {
                    const image = el.querySelector('img')

                    el.addEventListener('mouseenter', (e) => {
                        gsap.to(image, { y: -200, duration:5})
                    })

                    el.addEventListener('mouseleave', (e) => {
                        gsap.to(image, { y: 0, duration:5})
                    })
                    //
                    // el.addEventListener('mousemove', (e) => {
                    //     gsap.set(image, {
                    //         force3D:true,
                    //         x: e.offsetX - 100, y: e.offsetY - 100 })
                    // })
                })
            } else {
                items.forEach((el) => {
                    const image = el.querySelector('img')

                    el.addEventListener('mouseenter', (e) => {
                        gsap.to(image, { y: -10, duration:1})
                    })

                    el.addEventListener('mouseleave', (e) => {
                        gsap.to(image, { y: 0, duration:1})
                    })
                    //
                    // el.addEventListener('mousemove', (e) => {
                    //     gsap.set(image, {
                    //         force3D:true,
                    //         x: e.offsetX - 100, y: e.offsetY - 100 })
                    // })
                })
            }

        }
        // Initialise
        buildConditionalTween(mediaQuery);

        // Listen to changes
        mediaQuery.addListener(buildConditionalTween);

    </script>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7230368529827505"
            crossorigin="anonymous"></script>
</html>
