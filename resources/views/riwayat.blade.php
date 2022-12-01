@extends('layouts.app')

@section('content')
    <div class="pt-20 px-10">
        <div class="my-10">
            <h1 class="text-primary font-bold text-2xl">Riwayat Pelaporan Anda</h1>
            <p class="text-gray-400 text-md mt-3">Lihat riwayat pemesanan untuk modifikasi dan melihat detail riwayat</p>

            <div class="riwayat-box p-3 bg-white border mt-20 min-h-[300px] overflow-x-auto">
                <div class="riwayat-1 border md:w-full w-fit p-3 flex items-center mb-2">
                    <p class="md:w-[20%] min-w-[50px] font-bold">ID</p>
                    <p class="md:w-[25%] min-w-[300px] font-bold">Nama Pelapor</p>
                    <p class="md:w-[25%] min-w-[300px] font-bold  md:ml-0 ml-5">Created At</p>
                    <p class="md:w-[25%] min-w-[250px] font-bold  md:ml-0 ml-5">Action</p>
                </div>
                <div>
                    <div class="riwayat-1 border md:w-full w-fit p-3 flex items-center mb-2 text-sm">
                        <p class="md:w-[20%] min-w-[50px]">1</p>
                        <p class="md:w-[25%] min-w-[300px]">Rafli Ardiansyah</p>
                        <p class="md:w-[25%] min-w-[300px] md:ml-0 ml-5">1 Desember 2022</p>
                        <div class="lg:w-[25%] min-w-[250px] md:ml-0 ml-5 flex items-center">
                            <button class="bg-yellow-400 p-3 rounded-lg flex items-center focus:ring-2 ring-yellow-300 translate duration-200 outline-none">
                                <x-fas-edit class="w-5 h-5"/>
                                <p class="ml-2 text-sm">Edit</p>
                            </button>
                            <button class="bg-red-400 p-3 rounded-lg flex items-center ml-2 focus:ring-2 ring-red-300 translate duration-200 outline-none">
                                <x-fas-delete-left class="w-5 h-5" />
                                <p class="ml-2 text-sm">Delete</p>
                            </button>
                        </div>
                    </div>
                    <div class="riwayat-1 border md:w-full w-fit p-3 flex items-center mb-2 text-sm">
                        <p class="md:w-[20%] min-w-[50px]">2</p>
                        <p class="md:w-[25%] min-w-[300px]">Muchammad Saifurrijaal</p>
                        <p class="md:w-[25%] min-w-[300px] md:ml-0 ml-5">1 Desember 2022</p>
                        <div class="lg:w-[25%] min-w-[250px] md:ml-0 ml-5 flex items-center">
                            <button class="bg-yellow-400 p-3 rounded-lg flex items-center focus:ring-2 ring-yellow-300 translate duration-200 outline-none">
                                <x-fas-edit class="w-5 h-5"/>
                                <p class="ml-2 text-sm">Edit</p>
                            </button>
                            <button class="bg-red-400 p-3 rounded-lg flex items-center ml-2 focus:ring-2 ring-red-300 translate duration-200 outline-none">
                                <x-fas-delete-left class="w-5 h-5" />
                                <p class="ml-2 text-sm">Delete</p>
                            </button>
                        </div>
                    </div>
                    <div class="riwayat-1 border md:w-full w-fit p-3 flex items-center mb-2 text-sm">
                        <p class="md:w-[20%] min-w-[50px]">3</p>
                        <p class="md:w-[25%] min-w-[300px]">Muchammad Saifurrijaal</p>
                        <p class="md:w-[25%] min-w-[300px] md:ml-0 ml-5">1 Desember 2022</p>
                        <div class="lg:w-[25%] min-w-[250px] md:ml-0 ml-5 flex items-center">
                            <button class="bg-yellow-400 p-3 rounded-lg flex items-center focus:ring-2 ring-yellow-300 translate duration-200 outline-none">
                                <x-fas-edit class="w-5 h-5"/>
                                <p class="ml-2 text-sm">Edit</p>
                            </button>
                            <button class="bg-red-400 p-3 rounded-lg flex items-center ml-2 focus:ring-2 ring-red-300 translate duration-200 outline-none">
                                <x-fas-delete-left class="w-5 h-5" />
                                <p class="ml-2 text-sm">Delete</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
