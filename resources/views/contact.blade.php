@extends('layouts.app')

@section('content')
    <div class="font-poppins flex min-h-screen w-full flex-col-reverse lg:flex-row justify-between">
        <div class="lg:mx-32 lg:w-[30%] w-full pt-[150px]">
            <div class=" mt-10 items-center flex flex-col lg:w-full">
                
                <div class="w-full lg:px-12 px-4">
                    <h1 class="text-3xl text-primary font-bold mb-5 py-5">KONTAK</h1>
                    <ul class="w-full cursor-pointer">
                        <a href="">
                            <li class="rounded-md my-5 py-2 mb-5 items-center bg-gradient-to-b from-[#335CD6] to-[#2559F5]
                             text-white flex justify-between px-10">
                                <span class="rounded bg-white w-10 p-2"><img src="/images/contact/phone.svg" alt=""></span>
                                <span class="px-5 text-lg min-w-[150px]">WhatsApp</span>
                            </li>
                        </a>
                        
                        <a href="">
                            <li class="rounded-md py-2 mb-5 items-center bg-gradient-to-b from-[#335CD6] to-[#2559F5]
                             text-white flex justify-between px-10">
                                <span class="rounded bg-white w-10 p-2"><img src="/images/contact/instagram.svg" alt=""></span>
                                <span class="px-5 text-lg min-w-[150px]">Instagram</span>
                            </li>
                        </a>

                        <a href="">
                            <li class="rounded-md py-2 mb-5 items-center bg-gradient-to-b from-[#335CD6] to-[#2559F5]
                             text-white flex justify-between px-10">
                                <span class="rounded bg-white w-10 p-2"><img src="/images/contact/mail.svg" alt=""></span>
                                <span class="px-5 text-lg min-w-[150px]">Email</span>
                            </li>
                        </a>

                        <a href="">
                            <li class="rounded-md py-2 mb-5 items-center bg-gradient-to-b from-[#335CD6] to-[#2559F5]
                             text-white flex justify-between px-10">
                                <span class="rounded bg-white w-10 p-2"><img src="/images/contact/twitter.svg" alt=""></span>
                                <span class="px-5 text-lg min-w-[150px]">Twitter</span>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>

        <div style="background-image: url('/images/Background.svg')" class="bg lg:w-[50%] flex items-center justify-center w-full">
            <iframe class="rounded-xl mr-10 mt-20 w-[500px] h-[300px]" 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.4316200588405!2d112.61250126406294!3d-7.95426908145646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827994694b27%3A0x4eb4fed2fe1b7977!2sGedung%20A%20Fakultas%20Ilmu%20Komputer%20Universitas%20Brawijaya!5e0!3m2!1sid!2sid!4v1669711628934!5m2!1sid!2sid"  
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
        </div>
    </div>
@endsection