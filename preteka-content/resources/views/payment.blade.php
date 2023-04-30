<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/charts.css/dist/charts.min.css">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    <div class="w-full h-screen flex justify-center items-center">
        <div class="lg:w-2/5 md:w-2/5 sm:w-2/5 w-4/5 border-2 border-gray-300 bg-neutral-50 drop-shadow-2xl  h-1/2 grid-rows-4 lg:px-[70px] md:px-7 sm:px-6 px-2">
            <div class="p-5">
                <h1 class="lg:text-3xl font-bold  flex justify-center">Payment</h1>
                <p class="text-gray-400 pt-1 lg:text-1xl  md:text-sm sm:text-sm text-xs">* Please choose payment method </p>
            </div>
            <div class="flex justify-center lg:gap-[80px] md:gap-[50px] sm:gap-[50px] gap-[50px] grid-cols-2 ">
                <div class="lg:w-32 lg:h-20 md:w-20 sm:w-20 w-20 md:h-16 sm:h-16 h-12 flex "><img class="w-full h-full" src="https://www.pngall.com/wp-content/uploads/2017/05/Visa-Logo-Free-Download-PNG.png" alt=""></div>
                <div class="lg:w-20 lg:h-20 md:w-16 w-12 h-12 sm:w-16 md:h-16 sm:h-16 flex justify-center"><img class="w-full h-full" src="https://upload.wikimedia.org/wikipedia/commons/6/6b/ABA_Logo.png" alt=""></div>
            </div>
            <div class="flex justify-center lg:gap-[80px] md:gap-[50px] sm:gap-[50px] gap-[50px] grid-cols-2 mt-2 ">
                <div class="lg:w-32 md:w-20 sm:w-20  flex "> <p class="text-gray-400 pt-1 lg:text-1xl md:text-sm sm:text-sm text-sm">By Visa card </p></div>
                <div class="lg:w-20 md:w-20 sm:w-20 flex justify-center"> <p class="text-gray-400 pt-1 lg:text-1xl md:text-sm sm:text-sm  text-sm">By ABA</p></div>
            </div>
            <div class="flex justify-center lg:gap-[100px] md:gap-[50px] sm:gap-[50px] gap-[50px] grid-cols-2  lg:mt-3 mt-5">
                <div class="lg:w-20 md:w-16 sm:w-16 w-16  bg-green-600 flex justify-center  text-white font-bold lg:text-1xl md:text-base sm:text-base text-base"><a href=""><button class="lg:py-3  py-1 ">Visa</button></a></div>
                <div class="lg:w-20 md:w-16 sm:w-16 w-16  bg-green-600 flex justify-center  text-white font-bold lg:text-1xl md:text-base sm:text-base text-base"><a href=""><button class="lg:py-3  py-1 ">ABA</button></a></div>
            </div>
        </div>
    </div>
</body>
</html>