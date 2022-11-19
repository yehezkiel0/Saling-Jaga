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
    <div
        class="fixed z-50 top-0 w-full shadow-lg navbar p-5 px-10 flex lg:flex-row flex-col justify-between lg:items-center bg-primary font-poppins text-white ">
        <button id="hamburger" class="lg:hidden block absolute right-10 top-[23px] z-50">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
        <div>
            <a href="/" class="uppercase text-2xl font-semibold flex items-center w-fit">
                <img src={{ url('/images/Logo.svg') }} class="w-7 h-7">
                <p class="ml-2">salingjaga</p>
            </a>
        </div>
        <div class="lg:my-0 my-10 nav-links text-sm hidden lg:block">
            <ul class="flex lg:flex-row flex-col lg:items-center">
                <a href="/">
                    <li
                        class="mx-2 lg:my-0 my-2 rounded-lg hover:bg-white {{ Request::is('/') ? 'bg-white text-primary font-semibold' : '' }} hover:text-primary px-3 py-2 transition duration-200">
                        Home
                    </li>
                </a>
                <a href="/layanan">
                    <li
                        class="mx-2 lg:my-0 my-2 rounded-lg hover:bg-white {{ Request::is('/layanan') ? 'bg-white text-primary font-semibold' : '' }} hover:text-primary px-3 py-2 transition duration-200">
                        Layanan
                    </li>
                </a>
                <a href="/faq">
                    <li
                        class="mx-2 lg:my-0 my-2 rounded-lg hover:bg-white {{ Request::is('/faq') ? 'bg-white text-primary font-semibold' : '' }} hover:text-primary px-3 py-2 transition duration-200">
                        FAQ
                    </li>
                </a>
                <a href="/berita">
                    <li
                        class="mx-2 lg:my-0 my-2 rounded-lg hover:bg-white {{ Request::is('/berita') ? 'bg-white text-primary font-semibold' : '' }} hover:text-primary px-3 py-2 transition duration-200">
                        Berita
                    </li>
                </a>
                <a href="/kontak">
                    <li
                        class="mx-2 lg:my-0 my-2 rounded-lg hover:bg-white {{ Request::is('/kontak') ? 'bg-white text-primary font-semibold' : '' }} hover:text-primary px-3 py-2 transition duration-200">
                        Kontak
                    </li>
                </a>
            </ul>
        </div>
        <div>
            @auth
                <p>Welcome back, {{ auth()->user()->name }}</p>
                <form action="/logout" method="post">
                    @csrf
                    <a href="/login" class="mx-1 my-1 text-white border-[1px] border-white rounded-lg">
                        <button>Logout</button>
                    </a>
                </form>
            @else
                <a href="/login" class="mx-1 px-4 py-2 text-white border-[1px] border-white rounded-lg">
                    <button>Sign in</button>
                </a>
                <a href="/register" class="mx-1 px-4 py-2 bg-white text-[#2a55ee] hover:bg-slate-100 transition duration-200 border-[1px] border-white rounded-lg">
                    <button>Sign up</button>
                </a>
            @endauth
            
            
        </div>
    </div>
    <script>
        const hamburger = document.getElementById('hamburger');
        const navLinks = document.getElementsByClassName('nav-links')[0];
        const buttons = document.getElementsByClassName('nav-buttons')[0];

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('hidden');
            buttons.classList.toggle('hidden');
        })
    </script>
</body>

</html>
