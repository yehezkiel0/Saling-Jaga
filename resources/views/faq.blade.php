<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Saling jaga</title>
    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</head>
<body>
    @include('components.navbar')

        <div class="min-h-screen pt-20 mt-10 flex flex-col items-center">
            <h1 class="text-4xl font-bold text-primary text-center">Frequently Ask Questions</h1>
            @foreach($faqs as $key => $faq)   
                <div class="mt-12 ">
                    <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="shadow-md flex justify-between min-w-[600px] text-black  bg-white hover:ring-2 hover:ring-primary-lighter focus:ring-2 focus:outline-none transition duration-300 focus:ring-primary-light font-bold rounded-lg text-lg px-4 py-2.5 text-center items-center" type="button">
                        <p>{{ $faq->question }}</p>
                        <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdown" class="z-10 w-[600px] bg-white rounded divide-y divide-gray-100 shadow-md text-justify ">
                            <p class="py-3 text-md px-5 text-gray-700 " aria-labelledby="dropdownDefault">{{ $faq->answer }}</p>  
                    </div>  
                </div>
            @endforeach
        </div>
    @include('components.footer')
</body>
</html>