@extends('layouts.main')
@section('title', 'Form Staf')
@section('container')
    <div class="w-full h-screen flex justify-center items-center">

        <form action="siswa" method="post" class=" w-[900px] -translate-y-16">
            @csrf
            <div class="flex flex-col">
    
                <div class="bg-white p-4 px-4 md:p-8 mb-6 rounded-xl shadow border border-black border-opacity-25">
                    <div class="text-zinc-600">
                        <p class="font-bold text-lg">Form Staf</p>
                        <p>Mohon lengkapi data berikut.</p>
                    </div>
                        <div class="flex w-full gap-6 py-4 text-sm ">
                            <div class="flex flex-col w-full text-sm">
                                <label for="nis" class="uppercase">NIS</label>
                                <input type="number" name="nis" id="nis" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="">
                             </div>
    
                             <div class="flex flex-col w-full text-sm">
                                 <label for="nama">Nama</label>
                                 <input type="text" name="nama" id="jurusan" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="">
                             </div>
                         </div>
        
            
        
                        
                        <div class="flex w-full gap-6 py-4 text-sm ">
                            <div class="flex flex-col w-full text-sm">
                                <label for="jurusan">Jurusan</label>
                                <select name="jurusan" id="jurusan" class="h-10 border mt-1 rounded px-4 w-full">
                                    <option selected hidden value="" ><span class="capitalize">pilih jurusan</option>
                                    <option value="tjkt"><span class="uppercase">tjkt</span></option>
                                    <option value="rpl" ><span class="uppercase">rpl</span></option>
                                    <option value="dkv" ><span class="uppercase">dkv</span></option>
                                    <option value="anim" ><span class="uppercase">anim</span></option>
                                </select>
                            </div>
    
                            <div class="flex flex-col w-full text-sm">
                                <label for="angkatan">Angkatan</label>
                                <input type="number" name="angkatan" id="angkatan" value="20" min="1" max="40" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                            </div>
                        </div>
       
    
                        <div class="flex justify-end mt-5">
                            <div class="inline-flex items-end">
                              <button class="bg-red-700 hover:bg-black hover:text-red-600 text-gray-200 font-bold py-2 px-4 rounded">Submit</button>
                            </div>
                        </div>
                </div>
            </div>
        </form>
    </div>


@endsection