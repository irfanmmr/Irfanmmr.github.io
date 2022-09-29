@extends('_layouts.main')
@section('body')
<div class="w-full flex flex-col">
    <div class="w-full h-screen flex flex-col">
        <div class="w-full my-auto flex-col flex items-center space-y-5">
            <div class="flex flex-col -mt-48">
                <p class="text-beatrice text-5xl leading-normal mx-auto w-8/12 text-center">
                    Impactful branding and high-end Webflow websites for creatives.
                </p>
                <p class="text-center mx-auto text-xl">
                    WEBSITE DESIGNER, FRONT-END DEVELOPER & WEBFLOW EXPERT
                </p>
            </div>

            <div class="flex flex-row px-12 bottom-6 absolute w-full justify-between">
                <div class="imagescontainer w-52 h-64  bg-white hover:scale-110 duration-300 transform shadow-lg container">
                    <img class="" src="../assets/1.png">
                </div>

                <div class="imagescontainer w-52 h-64  mt-5 bg-white hover:scale-110 duration-300 transform shadow-lg container">
                    <img class="" src="../assets/2.png">
                </div>

                <div class="imagescontainer w-52 h-64  mt-10 bg-white hover:scale-110 duration-300 transform shadow-lg container">
                    <img class="" src="../assets/3.png">
                </div>

                <div class="imagescontainer w-52 h-64  mt-5 bg-white hover:scale-110 duration-300 transform shadow-lg container">
                    <img class="" src="../assets/4.png">
                </div>

                <div class="imagescontainer w-52 h-64  bg-white hover:scale-110 duration-300 transform shadow-lg container">
                    <img class="" src="../assets/5.png">
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
