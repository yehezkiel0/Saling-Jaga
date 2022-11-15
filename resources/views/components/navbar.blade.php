<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('public/css/style.css')
</head>

<body>
    <div class="shadow-lg navbar p-5 px-10 flex lg:flex-row flex-col justify-between lg:items-center bg-[#2a55ee] text-white ">
        <div>
            <a href="/" class="uppercase text-2xl font-semibold flex items-center">
                <img src={{url('/images/Logo.svg')}} class="w-7 h-7">
                <p class="ml-2">salingjaga</p>
            </a>
        </div>
        <div class="lg:ml-10 lg:my-0 my-10">
            <ul class="flex lg:flex-row flex-col lg:items-center">
                <a href="/">
                    <li class="mx-2 lg:my-0 my-2 rounded-lg hover:bg-white {{ Request::is('/') ? 'bg-white text-[#2a55ee]' : '' }} hover:text-[#2a55ee] px-3 py-2 transition duration-200">
                        Home
                    </li>
                </a>
                <a href="/layanan">
                    <li class="mx-2 lg:my-0 my-2 rounded-lg hover:bg-white {{ Request::is('/layanan') ? 'bg-white text-[#2a55ee]' : '' }} hover:text-[#2a55ee] px-3 py-2 transition duration-200">
                        Layanan
                    </li>
                </a>
                <a href="/faq">
                    <li class="mx-2 lg:my-0 my-2 rounded-lg hover:bg-white {{ Request::is('/faq') ? 'bg-white text-[#2a55ee]' : '' }} hover:text-[#2a55ee] px-3 py-2 transition duration-200">
                        FAQ
                    </li>
                </a>
                <a href="/berita">
                    <li class="mx-2 lg:my-0 my-2 rounded-lg hover:bg-white {{ Request::is('/berita') ? 'bg-white text-[#2a55ee]' : '' }} hover:text-[#2a55ee] px-3 py-2 transition duration-200">
                        Berita
                    </li>
                </a>
                <a href="/kontak">
                    <li class="mx-2 lg:my-0 my-2 rounded-lg hover:bg-white {{ Request::is('/kontak') ? 'bg-white text-[#2a55ee]' : '' }} hover:text-[#2a55ee] px-3 py-2 transition duration-200">
                        Kontak
                    </li>
                </a>
            </ul>
        </div>
        <div>
            <a href="/login" class="mx-1 px-4 py-2 text-white border-[1px] border-white rounded-lg">
                <button>Sign in</button>
            </a>
            <a href="/register" class="mx-1 px-4 py-2 bg-white text-[#2a55ee] hover:bg-slate-100 transition duration-200 border-[1px] border-white rounded-lg">
                <button>Sign up</button>
            </a>
        </div>
    </div>
</body>

</html>
