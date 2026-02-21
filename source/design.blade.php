@extends('_layouts.main')
@section('body')
<div class="w-full flex flex-col">
    <div class="w-full h-screen flex flex-col">
        <div class="w-full my-auto flex-col flex items-center space-y-5">


            <div class="grid content-center h-screen w-full">
                <div class="flex lg:flex-row px-5 lg:px-12 h-auto w-full justify-between">
                    <div class="flex flex-col space-y-3 lg:space-y-5 -mt-52 lg:-mt-48 absolute">
                        <p class="text-beatrice text-2xl lg:text-5xl leading-relaxed mx-auto w-11/12 lg:w-8/12 text-center">
                            Impactful branding and high-end Webflow websites for creatives.
                        </p>
                        <p class="text-center mx-auto text-lg lg:text-xl">
                            WEBSITE DESIGNER, FRONT-END DEVELOPER & WEBFLOW EXPERT
                        </p>
                    </div>
                    <div class="flex lg:flex-row px-5 lg:px-12 h-auto w-full absolute bottom-44 justify-between">
                        <div class="imagescontainer w-16 h-40 lg:w-52 lg:h-64  bg-white hover:scale-110 duration-300 transform shadow-lg container">
                           <a href="https://tokogampang.com/" target="_blank"> <img class="" src="../assets/1.png"></a>
                        </div>

                        <div class="imagescontainer w-16 h-40 lg:w-52 lg:h-64  mt-5 bg-white hover:scale-110 duration-300 transform shadow-lg container">
                            <img class="" src="../assets/2.png">
                        </div>

                        <div class="imagescontainer w-16 h-40 lg:w-52 lg:h-64  mt-10 bg-white hover:scale-110 duration-300 transform shadow-lg container">
                            <img class="" src="../assets/3.png">
                        </div>

                        <div class="imagescontainer w-16 h-40 lg:w-52 lg:h-64  mt-5 bg-white hover:scale-110 duration-300 transform shadow-lg container">
                            <img class="" src="../assets/4.png">
                        </div>

                        <div class="imagescontainer w-16 h-40 lg:w-52 lg:h-64  bg-white hover:scale-110 duration-300 transform shadow-lg container">
                            <img class="" src="../assets/5.png">
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex lg:flex-row px-5 lg:px-12 bottom-32 lg:bottom-24 h-screen w-full justify-between">


            </div>
        </div>
    </div>
</div>
@endsection
