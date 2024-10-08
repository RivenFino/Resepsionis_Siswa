@extends('layouts/index')

@section('container')
<div class="h-auto w-full mt-32 flex flex-col items-center">
    <form action="/process-" enctype="multipart/form-data" method="POST" class="w-1/2 max-sm:w-full max-sm:px-3 px-8 h-full transition-all">
        @csrf
        <div class="flex flex-col">
            <div class="flex w-full gap-6 py-4 text-sm px-8 max-sm:flex-col">
                <div class="flex flex-col w-full text-lg">
                    <label for="nis" class="uppercase">nis</label>
                    <input type="number" readonly name="nis" id="nis" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:border-none focus:outline-none outline-none" value="{{$siswa->nis}}">
                </div>
                
                <div class="flex flex-col w-full text-lg max-sm:flex-colz`">
                    <label for="nama" class="capitalize">Nama</label>
                    <input type="text" name="nama" id="nis" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 focus:border-none focus:outline-none outline-none" readonly value="{{$siswa->nama}}">
                </div>
            </div>
            <div class="flex w-full gap-6 py-4 text-sm px-8 max-sm:flex-col">
                <div class="flex flex-col w-full text-lg">
                    <label for="keperluan" class="capitalize">keperluan</label>
                    <select name="keperluan" require id="keperluan" class="h-10 border mt-1 rounded px-4 w-full focus:bg-blue-50 focus:outline-none outline-none transition-all">
                        <option selected hidden value="" ><span class="capitalize">keperluan</option>
                        <option value="keluar sekolah"><span class="capitalize">keluar sekolah</span></option>
                        <option value="izin" ><span class="capitalize">izin</span></option>
                        <option value="terlambat" ><span class="capitalize">terlambat</span></option>
                        <option value="melanggar aturan" ><span class="capitalize">melanggar aturan</span></option>
                    </select>
                </div>
                
                <div class="flex flex-col w-full text-lg max-sm:flex-colz`">
                    <label for="keterangan" class="capitalize">Keterangan</label>
                    <textarea type="text" require name="keterangan" id="keterangan" class="h-10 max-h-20 border mt-1 rounded px-4 w-full bg-gray-50 focus:border-none focus:outline-none outline-none" value="" max="255"></textarea>
                </div>
            </div>
            <div class="flex justify-center mt-5 px-8">
                <div class="inline-flex items-end">
                    <button type="submit" class="transition-all w-64 h-12 bg-blue-600 hover:bg-white hover:border hover:border-red-600 hover:text-red-600 text-gray-100 font-bold py-2 px-4 rounded">Simpan</button>
                </div>
            </div>
        </div>

    </form>
</div>
@endsection

