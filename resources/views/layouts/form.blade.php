@extends('layouts.main')
@section('container')
@if($notif = Session::get('success'))




<script type="text/javascript">
    const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.onmouseenter = Swal.stopTimer;
        toast.onmouseleave = Swal.resumeTimer;
    }
    });
    Toast.fire({
    icon: 'success',
    title: '{{ $notif }}'
});
</script>
@endif

        <div class="flex w-full h-full max-md:flex-col max-md:px-2 max-sm:gap-4 max-md:gap-2">
            <div class="flex relative flex-col w-full p-4 gap-4 px-0 rounded-xl shadow border border-black border-opacity-25 h-full bg-white">
                <div class="text-zinc-600 px-8 max-sm:px-3 max-sm:text-sm">
                    <p class="font-bold text-lg capitalize">Form @yield('data')</p>
                    <p>@yield('deskripsi-judul')</p>
                </div>
                <div class="flex justify-center h-16 w-full flex-row max-md:flex-row max-md:w-full max-md:h-16 max-sm:px-3 max-sm:text-sm max-sm:h-12 bg-white border border-black border-opacity-10 border-x-0">
                    @yield('nav')
                </div>
                <div class="w-full flex justify-center">
                    @yield('form')
                    
                    @csrf
                    <div class="flex flex-col h-full">
                        
                        <div class="bg-white p-4 px-0 rounded-xl shadow border border-black border-opacity-25 h-full">
                            <div class="flex flex-col">
                                @yield('form-field')
                                <div class="flex w-full gap-6 py-4 text-sm px-8 max-sm:flex-col">
                                    <div class="flex flex-col w-full text-lg">
                                        @yield('row-1-col-1')
                                    </div>
                                    
                                    <div class="flex flex-col w-full text-lg max-sm:flex-colz`">
                                        @yield('row-1-col-2')
                                    </div>
                                </div>
                                
                                <div class="flex w-full gap-6 py-4 text-lg px-8 @yield('row-1-status') max-sm:flex-col">
                                    
                                    <div class="flex flex-col w-full text-lg">
                                        @yield('row-1')
                                    </div>
                                </div> 
                                
                                <div class="flex w-full gap-6 py-4 text-lg px-8 @yield('row-2-status') max-sm:flex-col">
                                    
                                    <div class="flex flex-col w-full text-lg">
                                        @yield('row-2')
                                    </div>
                                </div> 
                                <div class="flex w-full gap-6 py-4 text-lg px-8 @yield('row-3-status') max-sm:flex-col">
                                    
                                    <div class="flex flex-col w-full text-lg">
                                        @yield('row-3')
                                    </div>
                                </div> 
                                
                                <div class="flex w-full gap-6 py-4 text-lg px-8 @yield('row-22-status') max-sm:flex-col">
                                    <div class="flex flex-col w-full text-lg">
                                        @yield('row-2-col-1')
                                    </div>
                                    
                                    <div class="flex flex-col w-full text-lg @yield('row-2-col-2-status') @yield('row-(3-4)')">
                                        @yield('row-2-col-2')
                                    </div>
                                </div> 

                                <div class="flex w-full gap-6 py-4 text-lg px-8 @yield('row-3-status') max-sm:flex-col">
                                    <div class="flex flex-col w-full text-lg">
                                        @yield('row-3-col-1')
                                    </div>
                                    
                                    <div class="flex flex-col w-full text-lg">
                                        @yield('row-3-col-2')
                                    </div>
                                </div>
                                
                                <div class="flex w-full gap-6 py-4 text-lg px-8 @yield('row-4-status')  @yield('row-(3-4)') max-sm:flex-col">
                                    <div class="flex flex-col w-full text-lg">
                                        @yield('row-4-col-1')
                                    </div>
                                    
                                    <div class="flex flex-col w-full text-lg">
                                        @yield('row-4-col-2')
                                    </div>
                                </div>
                                
                                @yield('button')
                            </div>
                            
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

@endsection