@extends('_layouts.main')
@section('body')


        <img class="transform absolute bottom-0 mx-auto lg:mx-0 lg:-left-16" width="550" src="assets/me2.png">
        <div class="w-full flex h-screen flex-col">
                <div class="hidden lg:block relative flex flex-col ml-auto pr-12 pb-5 my-auto">
                        <img class="mx-auto transform duration-300 ease-in-out hover:scale-105 hover:opacity-100 opacity-75 cursor-pointer -mb-12" src="assets/webdesain.svg">
                        <img class="mx-auto transform " src="assets/dan.svg">
                        <img class="mx-auto transform duration-300 ease-in-out hover:scale-105 hover:opacity-100 opacity-75 cursor-pointer -mt-12" src="assets/fe.svg">
                </div>

                <div class="mt-60 mx-auto lg:hidden block">
                        <img class="transform duration-300 ease-in-out hover:scale-105 hover:opacity-100 opacity-75 cursor-pointer -mb-5" width="300" src="assets/webdesain.svg">
                        <img class="transform mx-auto" width="50" src="assets/dan.svg">
                        <img class="transform duration-300 ease-in-out hover:scale-105 hover:opacity-100 opacity-75 cursor-pointer -mt-5" width="300" src="assets/fe.svg">
                </div>

                <div class="flex w-full absolute bottom-5 lg:bottom-24 px-5 lg:px-0">
                        <div class="ml-auto mx-auto lg:mr-0 pr-0 lg:pr-56 flex flex-row space-x-10">
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
