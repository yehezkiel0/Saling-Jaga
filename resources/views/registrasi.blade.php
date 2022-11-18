<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    @vite('public/css/style.css')
</head>
<body>
    

    <div class="flex w-full min-h-screen lg:flex-row flex-col-reverse">
        <div class = "lg:mx-20 lg:w-[50%] w-full">
        <div class="ml-20 mt-12 mb-5 ">
            <img src="/images/Logo Fix.svg" alt="">
        </div>
            <div class = "lg:ml-20 items-center flex flex-col lg:w-fit" >
                <h1 class = "text-5xl font-[600]">Buat akun baru</h1>
                <form class= "lg:w-fit w-full lg:px-0 px-20" action="method = 'post'">
                    <input class = "my-5 border-2  border-slate-700 rounded-md block lg:w-[500px] w-full pl-5 pr-24 py-2" type="text " id = "Nama Lengkap" name = "Nama Lengkap" placeholder = "Nama Lengkap">
                    <input class = "my-5 border-2  border-slate-700 block rounded-md lg:w-[500px] w-full pr-24 pl-5 py-2"type="text" id = "Email" name = "Email" placeholder = "Email">
                    <input class = "my-5 border-2  border-slate-700 block rounded-md lg:w-[500px] w-full pr-24 pl-5 py-2"type="password" id = "Password" name = "Password" placeholder = "Password">
                    <input class = "my-5 border-2  border-slate-700 block rounded-md lg:w-[500px] w-full pr-24 pl-5 py-2"type="password" id = "kpassword" name = "Konfirmasi Password" placeholder = "Konfirmasi Password">
                

                <div class = "items-center flex flex-col w-full">
                    <div class = "w-full my-3">
                    <hr class = "border-black">
                        <div class="w-full flex justify-center">
                        <p class="-mt-3 text-center w-fit bg-white px-2">Lanjutkan dengan</p>
                        </div>
                    </div>

                    <div class = "flex mb-5">
                        <img src="/images/register/Google.svg" class = "bg-white border  w-10 p-2 rounded-md" alt="">
                        <img src="/images/register/Facebook.svg" class = "bg-[#1877F2] w-10 p-2 rounded-md mx-5" alt="">
                        <img src="/images/register/Apple.svg" class = "bg-black w-10 p-2 rounded-md" alt="">
                    </div>
                <button class="bg-blue-600 px-32 py-3 rounded-md text-white w-[200px] mb-5 flex items-center justify-center">Register</button>
                </form>
                <p class="lg:mb-0 mb-8">Sudah punya akun? <a href="/login" class="text-[#1877F2]">Login</a></p>
                </div>
            </div>
        </div>

        <div class="bg-[#2A55EE] lg:w-[50%] flex items-center justify-center w-full">
        <img class ="lg:w-full w-[40%] lg:mr-0 mr-8"src="/images/register/saly-13.png" alt="">
        </div>

    </div>
    
    
</body>
</html>