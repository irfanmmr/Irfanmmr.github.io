@extends('_layouts.main')
@section('body')


        <img class="transform absolute bottom-0 -left-16" width="550" src="assets/me2.png">
        <div class="w-full flex h-screen flex-col">
                <div class="relative flex flex-col ml-auto pr-12 pb-5 my-auto">
                        <img class="mx-auto transform duration-300 ease-in-out hover:scale-105 hover:opacity-100 opacity-75 cursor-pointer -mb-12" src="assets/webdesain.svg">
                        <img class="mx-auto transform " src="assets/dan.svg">
                        <img class="mx-auto transform duration-300 ease-in-out hover:scale-105 hover:opacity-100 opacity-75 cursor-pointer -mt-12" src="assets/fe.svg">
                </div>

                <div class="flex w-full absolute bottom-24">
                        <div class="ml-auto pr-56 flex flex-row space-x-10">
                                <div class="transform duration-300 ease-in-out hover:scale-105 cursor-pointer bg-black text-white text-center px-5 py-2.5 rounded-sm">
                                        <p class="font-semibold">You Need Designer ?</p>
                                </div>

                                <div class="transform duration-300 ease-in-out hover:opacity-100 opacity-40 hover:scale-105 cursor-pointer bg-black text-white text-center px-5 py-2.5 rounded-sm">
                                        <p class="font-semibold">You Need Front-End ?</p>
                                </div>
                        </div>

                </div>
        </div>



@endsection
