@extends('layouts.main')
@section('title', 'Dashboard')
@section('container')

<div class="flex h-full max-sm:px-2 max-sm:justify-start max-sm:h-full flex-col items-center justify-around gap-8  max-sm:gap-4 select-none">

    <div class="flex max-sm:flex-row bg-white justify-between  max-sm:justify-evenly px-12 rounded-xl shadow border pr-0 h-24 border-black border-opacity-25 w-full gap-8 max-sm:gap-4 max-sm:px-0 max-sm:flex-wrap max-sm:h-full max-sm:p-2  max-sm:pb-0">

            <div class="flex w-full max-sm:pl-12 gap-6 justify-start items-center">
                <h3 class="flex justify-center items-center h-full text-3xl font-bold max-sm:text-xl">
                    Data Keperluan
                </h3>
                <form action="{{ url()->current() }}" id="sortForm" method="GET">
                    <select id="sortSelect" name="sort" id="" class="font-bold capitalize w-40 text-red-700 border-none rounded-lg h-12 flex justify-center items-center bg-gray-300 ring-none focus:ring-3 focus:ring-red-500 text-xl max-sm:text-sm max-sm:h-8 max-sm:w-auto">
                        <option @if ($sort == 'all') selected @endif value="semua" class="capitaliz text-center items-center  bg-gray-100 text-red-500 flex">Semua</option>
                        <option @if ($sort == 'today') selected @endif value="hari_ini" class="capitaliz text-center items-center  bg-gray-100 text-red-500 flex">Hari ini</option>
                        <option @if ($sort == 'week') selected @endif value="minggu_ini" class="capitalize text-center items-center  bg-gray-100 text-red-500 flex">minggu ini</option>
                        <option @if ($sort == 'month') selected @endif value="bulan_ini" class="capitalize text-center items-center  bg-gray-100 text-red-500 flex">bulan ini</option>
                    </select>
                </form>
                <script>
                    document.getElementById("sortSelect").addEventListener("change", function() {
                      document.getElementById("sortForm").submit();
                    });
                </script>
            </div>
            <div class="flex justify-center items-center text-xl gap-4 h-full pr-12 px-4 pl-12 max-sm:pl-0 text-white bg-red-600 rounded-r-xl  max-sm:rounded-b-xl max-sm:py-3 max-sm:w-full max-sm:pr-0 max-sm:rounded-none  max-sm:text-sm">
                <div class="flex justify-center items-center h-full">
                    <span class="text-zinc-100 w-40  font-medium text-start">Tanggal dan waktu sekarang</span>
                </div>
                <h2 class="flex  max-sm:hidden justify-center items-center h-full align-middle text-5xl">|</h2>
                <div class="flex w-52 max-sm:w-auto flex-col h-full justify-center items-end font-bold">
                    <p>{{ $date }}</p>
                    <div class="flex gap-4 text-white">
                        <p>{{$day}}</p>
                        <p id="clock"></p>
                    </div>
                </div>
            </div>
    </div>
 
    <div class="flex flex-wrap gap-8 h-auto justify-evenly  items-start w-full max-md:justify-center max-sm:flex-wrap max-sm:h-full max-sm:justify-center max-md:flex-wrap max-md:h-full max-sm:py-6">
        <div class="flex-row flex w-92 h-40 max-sm:h-56 bg-white shadow border border-black border-opacity-25 items-center font-medium justify-evenly" >
            <div class="flex justify-center py-6 items-center w-52 h-full gap-12 bg-red-600">
                <a href="{{url('keperluan?search=keluar&20sekolah')}}" class="w-full h-full flex flex-col items-center justify-center">

                <img class="w-auto h-20" src="data:image/png;base64,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">

                </a>
            </div>
            <div class="flex gap-2 flex-col items-center w-full h-full">
                <p class="text-xl items-center h-full flex flex-col text-center w-80 max-sm:w-full px-5 ">Siswa yang terkonfirmasi <span class="text-blue-500">keluar sekolah</span></p>
                <a href="{{url('keperluan?search=keluar&20sekolah')}}" class="w-full h-full flex flex-col items-center gap-2">
                    <p class="text-3xl h-20 w-full text-center py-8 text-gray-600 justify-center items-end flex gap-2" > <span class="text-5xl text-blue-500">{{$keluarSekolah}}</span> Siswa </p>
                    <div class="bg-blue-500 w-3/4 h-full"></div>
                </a>
            </div>
        </div>
        <div class="flex-row flex w-92 h-40 max-sm:h-56 bg-white shadow border border-black border-opacity-25 items-center font-medium justify-evenly" >
            <div class="flex justify-center py-6 items-center w-52 h-full gap-12 bg-red-600">
                <a href="{{url('keperluan?search=izin')}}" class="w-full h-full flex flex-col items-center justify-center">

                <img class="w-auto h-24" src="data:image/png;base64,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">

                </a>
            </div>
            <div class="flex gap-2 flex-col items-center w-full h-full">
                <p class="text-xl items-center h-full flex flex-col text-center w-80 max-sm:w-full px-5 ">Siswa yang terkonfirmasi <span class="text-green-500">izin sekolah</span></p>
                <a href="{{url('keperluan?search=izin')}}" class="w-full h-full flex flex-col items-center gap-2">
                    <p class="text-3xl h-20 w-full text-center py-8 text-gray-600 justify-center items-end flex gap-2" > <span class="text-5xl text-green-500">{{$izin}}</span> Siswa </p>
                    <div class="bg-green-500 w-3/4 h-full"></div>
                </a>
            </div>
        </div>
        <div class="flex-row flex w-92 h-40 max-sm:h-56 bg-white shadow border border-black border-opacity-25 items-center font-medium justify-evenly" >
            <div class="flex justify-center py-6 items-center w-52 h-full gap-12 bg-red-600">
                <a href="{{url('keperluan?search=terlambat')}}" class="w-full h-full flex flex-col items-center justify-center">

                <img class="w-auto h-20" src="data:image/png;base64,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">

                </a>
            </div>
            <div class="flex gap-2 flex-col items-center w-full h-full">
                <p class="text-xl items-center h-full flex flex-col text-center w-80 max-sm:w-full px-5 ">Siswa yang terkonfirmasi <span class="text-yellow-500">terlambat sekolah</span></p>
                <a href="{{url('keperluan?search=terlambat')}}" class="w-full h-full flex flex-col items-center gap-2">
                    <p class="text-3xl h-20 w-full text-center py-8 text-gray-600 justify-center items-end flex gap-2" > <span class="text-5xl text-yellow-500">{{$terlambatSekolah}}</span> Siswa </p>
                    <div class="bg-yellow-500 w-3/4 h-full"></div>
                </a>
            </div>
        </div>
        <div class="flex-row flex w-92 h-40 max-sm:h-56 bg-white shadow border border-black border-opacity-25 items-center font-medium justify-evenly" >
            <div class="flex justify-center py-6 items-center w-52 h-full gap-12 bg-red-600">
            <a href="{{url('keperluan?search=melanggar&20aturan')}}" class="w-full h-full flex flex-col items-center justify-center">

            <img class="w-auto h-20" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFbElEQVR4nO2czY8URRTAywTEFU2UoJ4Fsi7RLIgBgheNYf1AoiSa6FUC4j9ACJz1AKzRgx8HL0aiIRgvCBhivADG4NfZxfUjeFERD4IJrDo/8+LbpC2rV2a2a/p18X6n2Z2ZejX1m+6qfv1qQnAcx3Ecx3EyAtwGvAhMAzM4uZEx/hqYBG6NZawDfsreBacOGfu11SPDZbTPj8AtQQ8Zxwb7gp7HqjwPjOScr5wg4z4CvBCN/ZmQmMBdxpAAro/Gfkb++S+G1RnnH/4z/i6kXVyIMVyIMVyIMVyIMVyIMVxI14Q47eJCjOFCjOFCjOGpk5ZxIcZwIcZwIcZwIcZwIcbotBDgDmAH8DrwkdaQ/aq3oWf08bQ+95q+djQYpnNCgHEt4PthHsv7s1pdMx6M0QkhwDXAo8DHNM8pYJPECAYwLwS4BzhNfj4B1hj4vDaFANcBLwN/zjGIvwFHgV3AZp1TbgYWAgv08RjwCLAbOAxcmKM9ifUSsKjFz21PCLAC+LJm0HrAEeCJQQZOC9K2AMeAv2pifAEsz/PpOiYE2ACcrxFxELirwVhy9BzStmN+AdY3FauTQoAHgYuJwfkKuD9j3PuAqURc6ctErrimhegWiJSMt4AbhjRnvZGI/ztwb+74poTonBGfpnrAzmHEr/Rja83p6xyw7KoQot/MeAKXQdmWO3ZCRt0kL3w2jNWXBSGytI3ZaUBGL9GvyaKF6EVffJ3xTs6YMcAzNTKeA96M/i99vTuUKETTIacTq6nFuWJe4ZEhf2/V5xcnVl+nQqFCJDcV80CueP0cGYklcXz6eigUKCROFB7MFavfIyPx+nej154IJQkBViW+mXfmiDVfGfqelYn3NJYxsCBE7mdUOZIjThMyKu+V3FeVfaEgIfHNpSdzxGlKhr5fEpJVvg8lCNEUeZxCX2RZRiVLHKd2VoQChMj6vsrRpmM0LaPS1vtRO8/224ZFIVJsUGVX0zFyyND29kRtvTJIO9aESAVIlc1Nx8ghQ9uUe+9VPhy0LUtCvotCjHZBRuWGVpVvQgFC4jT7kjauwAdB+hq1e26ghowJuRyFuLYLMgTpa9T2pVCgkIVdkCHI8rxEIfEp66YuyBCApSWesr6NQoxZnMCvcFKfDgUuezd1QYYAPFbisje+MNzdBRmCVj8Wd2EoWwKqHO6CDAE4HsXcHgoQMhqFuNDPzwjSnowRrdEqK7moQWV/RpUtlmUIwFNFpt816GS/GV9alKHxP4hi7y1JyHhiYMcMy1iVKHQo5xauBpadS1UOWZQhAO8VXeRQk8ruxWVADOkK/H/6uTEeE6nSL7VQTraRVZmaLZQzcmTcmPil75OZY7YjRIOvSZWSWjgyBOBA1Afp6+pQqhDtgOzpi+m1eWTU3K4V9ofMWBAiKe3PEx++TRk7El+KT5u8dzNH7HaFaCeW656+mF5LR0Ys42fg9iHFb1+IdmRtzZblA8OoiNcJ/O1EfEmXbMgd35wQ7cxEzT7DqcybPicSqyn0C7IxV1zzQrRD63VPX0xPq9BXNnwFHl/0VU9T65qK1UefbAnRTi3TPX11k/wxrbUdGTBr+7TmplLb1mYn8KHMGYn+2RNSWX1NAn9Qz0Ut79yjV/5j+nMaC7RCZIluJXhcby4dT6TQq0is/cNYTXVOSKWDqxN5rxyclFOYgc9rW8gsso1MknoZRJzImZsqVsgskvaWzTJyg2geEuS9e3Ol0K8qIYlfgNgOvCoVILp0Pa/FeJf18Rl9Tl6zLcdt1ybptJAScSHGcCHGcCHGcCHGcCHGcCHGcCFdE+K0iwsxKGQ+P3LvNMvZoD/LHVenO8NHHDzc9pzmOI7jOI4TiuRvJ6qKLomIgl0AAAAASUVORK5CYII=">

            </a>
            </div>
            <div class="flex gap-2 flex-col items-center w-full h-full">
                <p class="text-xl  items-center h-full flex flex-col text-center w-80 max-sm:w-full px-5 ">Siswa yang terkonfirmasi <span class="text-red-500">melanggar aturan sekolah</span></p>
                <a href="{{url('keperluan?search=melanggar&20aturan')}}" class="w-full h-full flex flex-col items-center gap-2">
                    <p class="text-3xl h-20 w-full text-center py-8 text-gray-600 justify-center items-end flex gap-2" > <span class="text-5xl text-red-500">{{$melanggarAturan}}</span> Siswa </p>
                    <div class="bg-red-500 w-3/4 h-full"></div>
                </a>
            </div>
        </div>
    </div>

    <div class="flex w-full  h-80 gap-8 max-sm:flex-wrap  max-sm:bg-white  max-sm:h-full  max-sm:w-screen  max-sm:p-3  max-sm:py-6">
        <div class="w-full items-center flex-col flex h-full max-h-72 bg-white rounded-xl shadow border border-black border-opacity-25  max-sm:gap-3">
            <div class="flex justify-center gap-4 w-full py-2 text-white bg-red-600 rounded-t-xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 text-white h-16 ">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                </svg>
                <span class="text-xl w-52 font-semibold h-full flex items-center justify-center">Keperluan siswa yang dikonfirmasi</span>
            </div> 
             <div class="flex w-full h-full justify-center items-center">
                <h2 class="flex justify-center items-end gap-3 text-3xl font-semibold"><span class="text-8xl flex justify-center items-center rounded-full w-auto text-gray-600">{{$confirmed}}</span> Siswa</h2>
             </div>
             <div class="flex h-20 w-2/3 justify-center  max-sm:h-12 items-center rounded-t-xl bg-blue-500">
                <a class="w-full h-full flex justify-center items-center text-xl text-gray-50" href="{{url('keperluan?search=confirmed')}}">Periksa</a>
             </div>
        </div>
        <div class="w-full items-center flex-col flex h-full max-h-72 bg-white rounded-xl shadow border border-black border-opacity-25  max-sm:gap-3">
            <div class="flex justify-center gap-4 w-full py-2 text-white bg-red-600 rounded-t-xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 text-white h-16 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                </svg>

                <span class="text-xl w-64 font-semibold h-full flex items-center justify-center">Keperluan siswa yang belum dikonfirmasi</span>
            </div> 
             <div class="flex w-full h-full justify-center items-center">
                <h2 class="flex justify-center items-end gap-3 text-3xl font-semibold"><span class="text-8xl flex justify-center items-center rounded-full w-auto text-gray-600">{{$unconfirm}}</span> Siswa</h2>
             </div>
             <div class="flex h-20 w-2/3 justify-center  max-sm:h-12 items-center rounded-t-xl bg-yellow-500">
                <a class="w-full h-full flex justify-center items-center text-xl text-gray-50" href="{{url('keperluan?search=unconfirm')}}">Periksa</a>
             </div>
        </div>
        <div class="w-full items-center flex-col flex h-full max-h-72 bg-white rounded-xl shadow border border-black border-opacity-25  max-sm:gap-3">
            <div class="flex justify-center gap-4 w-full py-2 text-white bg-red-600 00 rounded-t-xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"  class="w-16 text-white h-16 ">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

                <span class="text-xl w-52 font-semibold h-full flex items-center justify-center">Keperluan siswa yang ditolak</span>
            </div> 
             <div class="flex w-full h-full justify-center items-center">
                <h2 class="flex justify-center items-end gap-3 text-3xl font-semibold"><span class="text-8xl flex justify-center items-center rounded-full w-auto text-gray-600">{{$cancel}}</span> Siswa</h2>
             </div>
             <div class="flex h-20 w-2/3 justify-center items-center  max-sm:h-12 rounded-t-xl bg-red-500">
                <a class="w-full h-full flex justify-center items-center text-xl text-gray-50" href="{{url('keperluan?search=cancel')}}">Periksa</a>
             </div>
        </div>

    </div>
</div>
<script>
        function updateClock() {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();

            // Menambahkan nol di depan angka jika kurang dari 10
            hours = (hours < 10) ? "0" + hours : hours;
            minutes = (minutes < 10) ? "0" + minutes : minutes;
            seconds = (seconds < 10) ? "0" + seconds : seconds;

            var timeString = hours + ':' + minutes + ':' + seconds;

            // Memperbarui elemen dengan ID 'clock' dengan waktu saat ini
            document.getElementById('clock').innerHTML = timeString;

            // Memanggil fungsi ini lagi setiap 1000ms (1 detik)
            setTimeout(updateClock, 1000);
        }

        // Memanggil fungsi untuk pertama kali
        updateClock();
    </script>

@endsection
