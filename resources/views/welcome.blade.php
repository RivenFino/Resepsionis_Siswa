@extends('layouts.index')
@section('title', 'Resepsionis Siswa')
@section('container')


        <div class="w-full h-screen flex justify-center flex-col items-center bg-white">
            
        </div>
        <div class="flex justify-center items-center w-full h-screen bg-gray-300">
            <div class="w-full h-full flex justify-center items-center">
                <div class=" w-[650px] h-[500px] bg-neutral-50 ">
                    <div class="w-full h-[400px] p-4">
                        <div class="w-full bg-red-700 h-full"></div>
                    </div>
                    <div class="flex w-full h-[100px] gap-4 p-4">
                        <div class="w-full bg-red-400"><a class="w-full h-full text-white text-xl flex items-center justify-center capitalize" href="login">login</a></div>
                        <div class="w-full bg-red-400"><a class="w-full h-full text-white text-xl flex items-center justify-center capitalize" href="dashboard">dashboard</a></div>
                        <div class="w-full bg-red-400"><a class="w-full h-full text-white text-xl flex items-center justify-center capitalize" href="siswa">data siswa</a></div>
                    </div>
                </div>
            </div>
            <div class="w-full h-full bg-gray-500">

            </div>
        </div>
        <div class="w-full h-screen bg-red-300"></div>


@endsection