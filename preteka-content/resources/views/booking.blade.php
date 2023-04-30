

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/charts.css/dist/charts.min.css">
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
  <div class="w-full h-screen  items-center flex dark:bg-slate-700">
    <div class=" border-2 border-gray-300 bg-neutral-50 lg:w-2/5 lg:h-5/6  md:w-3/6 md:h-4/5 sm:w-3/6 sm:h-4/8 w-3/5 h-4/8 mx-auto rounded-3xl grid lg:grid-rows-6 m:grid-rows-6 sm:grid-rows-6 grid-rows-7  lg:gap-7 md:gap-6 sm:gap-5 gap-4 p-9 ">
      
        <div class=" flex justify-center">
          <h1 class="font-bold lg:text-4xl md:text-3xl sm:text-2xl">Booking</h1>
        </div>
        <div class=" grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-5 ">
          <div class=" rounded-3xl">
            <input  class="drop-shadow-lg placeholder:italic bg-gray-200 w-full h-full lg:text-2xl lg:pl-7 md:text-1xl md:pl-6 sm:text-lg text-base sm:pl-5 pl-4 rounded-md lg:p-3 md:p-2 sm:p-2 p-2" type="text" placeholder="First Name">
          </div>
          <div class=" rounded-3xl ">
            <input  class="drop-shadow-lg placeholder:italic bg-gray-200 w-full h-full lg:text-2xl lg:pl-7 md:text-1xl md:pl-5 sm:text-lg text-base sm:pl-5 pl-4 rounded-md lg:p-3 md:p-2 sm:p-2 p-2" type="text" placeholder="Last Name">
          </div>
        </div>
        <div class=" rounded-3xl ">
          <input class="drop-shadow-lg placeholder:italic bg-gray-200 w-full h-full lg:text-2xl lg:pl-7 md:text-1xl md:pl-6 sm:text-lg text-base sm:pl-5 pl-4 rounded-md lg:p-3 md:p-2 sm:p-2 p-2"type="text" placeholder="Email">
        </div>
        <div class=" rounded-3xl ">
          <input class="drop-shadow-lg placeholder:italic bg-gray-200 w-full h-full lg:text-2xl lg:pl-7 md:text-1xl md:pl-6 sm:text-base text-base sm:pl-5 pl-4 rounded-md lg:p-3 md:p-2 sm:p-2 p-2" type="text" placeholder="Organization/School">
        </div>
        <div class="  font-bold  flex justify-end pr-7 lg:text-3xl md:text-2xl sm:text-1xl text-lg">Price : 0.00 $</div>
        <div class="flex justify-center ">
          <button class=" bg-green-600  lg:text-2xl md:text-1xl sm:text-lg text-lg flex rounded-lg items-center p-4 hover:bg-green-200  text-white">Register</button>
        </div>
       
      
    </div>
  </div>
</body>
</html>