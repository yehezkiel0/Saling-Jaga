<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berita Saling Jaga</title>
    @vite('public/css/style.css')

    <style>
        .custom-shape-divider-bottom-1717051783 {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

        .custom-shape-divider-bottom-1717051783 svg {
            position: relative;
            display: block;
            width: calc(151% + 1.3px);
            height: 212px;
        }

        .custom-shape-divider-bottom-1717051783 .shape-fill {
            fill: #FFFFFF;
        }

        .title1 {
            background: linear-gradient(180deg, #FFF 100%, #FFF 50%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .title2 {
            background: linear-gradient(180deg, #FFF 0%, rgba(255, 255, 255, 0.50) 100%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>

<body>
    @include('components.navbar')
    <div class="min-h-screen w-full">
        <div class="pt-40 pb-4 relative bg-gradient-to-b from-[#2A55EE] to-[#404557] min-h-[600px]">
            <div class=" flex items-center justify-center">
                <div class="scale-[2.5] px-8 flex items-center justify-center">
                    <img src="/images/Logo Fix.svg" alt="">
                </div>
                <div class="flex flex-col px-8 text-[64px] font-bold text-white">
                    <h1 class="title1">SALING JAGA</h1>
                    <h1 class="title2">NEWS</h1>
                </div>
            </div>
            <div class="custom-shape-divider-bottom-1717051783">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                    preserveAspectRatio="none">
                    <path
                        d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                        class="shape-fill"></path>
                </svg>
            </div>
        </div>
        <div class="w-full px-8 pb-8">
            <div class="flex flex-col items-center">
                <div class="text-black font-bold text-2xl p-2">
                    <h1>Sorotan</h1>
                </div>
                <div class="container lg:w-[75%] mx-auto py-8">
                    <div class="mb-6">
                        <div class="relative bg-white rounded-lg shadow-md overflow-hidden">
                            <img src="/images/bully.jpg" alt="Featured Image" class="w-full h-[450px] object-cover">
                            <div class="absolute bottom-0 left-0 bg-black bg-opacity-50 p-4">
                                <h2 class="text-3xl font-bold text-white text-center px-4">
                                    Anak kiai Jombang Moch Subchi Azal Tsani (MSAT) cabuli santriwati
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <img src="/images/bully.jpg" alt="Image 1" class="w-full">
                            <div class="p-4">
                                <h2 class="text-xl font-bold text-gray-800">Polda Metro Respon Dugaan Pemerkosaan Eks
                                    Kapolsek Mineng</h2>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <img src="/images/bully.jpg" alt="Image 2" class="w-full">
                            <div class="p-4">
                                <h2 class="text-xl font-bold text-gray-800">TransJakarta Buka Suara Usai Viral Pelecehan
                                    ke Penumpang Pria</h2>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <img src="/images/bully.jpg" alt="Image 3" class="w-full">
                            <div class="p-4">
                                <h2 class="text-xl font-bold text-gray-800">Kapolsek Pinang Dicopot Buntut Kasus Dugaan
                                    Pelecehan</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center">
                <div class="text-black font-bold text-2xl p-4">
                    <h1>Berita Terkini</h1>
                </div>
                <div class="cards-berita-secondary w-full">
                    <a href="/"
                        class="w-full m-2 rounded-lg flex gap-2 pb-2 px-56 item-center hover:opacity-90 transition duration-300">
                        <div class="bg-cover bg-center w-1/2 min-h-[300px] rounded-lg"
                            style="background-image: url('https://images.unsplash.com/photo-1511608170515-b4557034155c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80')">
                        </div>
                        <div class="p-4 ml-3 w-1/2">
                            <h3 class="font-semibold text-md mb-3">Terungkap Mahasiswi UNM Korban Kekerasan Seksual
                                Terjadi di Banyak Fakultas, Dosennya Berbeda
                            </h3>
                            <div class="flex items-center">
                                <img src="/images/home/logo-detik.png" class="w-10">
                                <div class="ml-2">
                                    <p class="font-semibold text-[12px]">Detik.com</p>
                                    <p class="text-[10px]">12 Juni 2021</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/"
                        class="w-full m-2 rounded-lg flex gap-2 pb-2 px-56 item-center hover:opacity-90 transition duration-300">
                        <div class="bg-cover bg-center w-1/2 min-h-[300px] rounded-lg"
                            style="background-image: url('https://images.unsplash.com/photo-1511608170515-b4557034155c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80')">
                        </div>
                        <div class="p-4 ml-3 w-1/2">
                            <h3 class="font-semibold text-md mb-3">Relawan Perindo Dampingi Anak Korban
                                Kekerasan Seksual
                            </h3>
                            <div class="flex items-center">
                                <img src="/images/home/logo-detik.png" class="w-10">
                                <div class="ml-2">
                                    <p class="font-semibold text-[12px]">Detik.com</p>
                                    <p class="text-[10px]">12 Juni 2021</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/"
                        class="w-full m-2 rounded-lg flex gap-2 pb-2 px-56 item-center hover:opacity-90 transition duration-300">
                        <div class="bg-cover bg-center w-1/2 min-h-[300px] rounded-lg"
                            style="background-image: url('https://images.unsplash.com/photo-1511608170515-b4557034155c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80')">
                        </div>
                        <div class="p-4 ml-3 w-1/2">
                            <h3 class="font-semibold text-md mb-3">2 Pelajar di Sumbawa Jadi Korban Kekerasan Seksual
                                oleh Seorang Fotografer
                            </h3>
                            <div class="flex items-center">
                                <img src="/images/home/logo-detik.png" class="w-10">
                                <div class="ml-2">
                                    <p class="font-semibold text-[12px]">Detik.com</p>
                                    <p class="text-[10px]">12 Juni 2021</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    @include('components.footer')
</body>

</html>
