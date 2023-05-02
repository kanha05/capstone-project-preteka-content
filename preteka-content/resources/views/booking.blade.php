

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
    <div class=" border-2 border-gray-300 bg-neutral-50 lg:w-2/5 lg:h-4/6  md:w-3/6 md:h-3/5 sm:w-3/6 sm:h-4/8 w-3/5 h-4/8 mx-auto rounded-3xl grid lg:grid-rows-6 m:grid-rows-6 sm:grid-rows-6 grid-rows-7  lg:gap-7 md:gap-6 sm:gap-5 gap-4 p-9 ">
      
        <div class=" flex justify-center grid-cols-3 gap-4 ">
          <div class="w-1/6 "></div>
          <div class="w-4/6   flex justify-center">
            <h1 class="font-bold lg:text-3xl md:text-2xl text-1xl">Booking</h1>
          </div>
          <div class="w-1/6   ">
            <img class=" lg:ml-12 mg:ml-10 sm:ml-8 ml-6 " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAABo0lEQVR4nO2WvU4CQRSFt113ztksiYW/sbTQCjrxAUzU+BwK+Cx2Go2FpT3qeygzCw+gwQ6xE4OZDRBUdnaWhUDBTW4ymWTyzT1zf8ZxFjZv9hIEm4osS+BJkqECPrXrdW+v9BwEGxMD1l13TQFXkuwosmtySX5L4F75/lYmaE2IEwW0k4D/LgB8KOB4LKgCznUEaaHD0SugkjpSmQH6B24XeSOXWx9HXqPsrruaCJbk7aSgQ36dWDJx2RsKsafIgiSbIyRtKt/Ph0IUYyTvaCVjwbpOY2/t+/lIEc/bGYbrtd7rnS8Y3vssXmbg0XBwAOjDR+0Z5K6aIq4nZOlvkD20qztcPNgimyX5rjxvt38mFGJbkW+JCQa0pwF+tSir1vxJLWeVXJIsTbGcTmPBep4aGkjR2EDIQk2I/Rjwl7GB9G59k5ihKV0Cl47N4I8a++SgLbm0tOLYWAgc2Pw4LMfikRV0IDlQyfwRIMupoH3TQ3wc2SN5gUMnizWEWJbkhc5MyyjvrN/UxnQ56NEmyQdJqqi9Au1oTVZ1nSaWzMKcGdgPOnZMCze6l4MAAAAASUVORK5CYII=">
          </div>
        
        </div>
        <div class=" grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-5 ">
          <div class=" rounded-3xl">
            <input class="drop-shadow-lg placeholder:italic border hover:border-green-600 bg-gray-200 w-full h-full lg:text-1xl lg:pl-7 md:text-lg md:pl-6 sm:text-base text-base sm:pl-5 pl-4 rounded-md lg:p-3 md:p-2 sm:p-2 p-2" type="text" placeholder="First Name">
          </div>
          <div class=" rounded-3xl ">
            <input  class="drop-shadow-lg placeholder:italic border hover:border-green-600 focus:ring-green-600 focus:border-green-600 bg-gray-200 w-full h-full lg:text-1xl lg:pl-7 md:text-lg md:pl-6 sm:text-base text-base sm:pl-5 pl-4 rounded-md lg:p-3 md:p-2 sm:p-2 p-2" type="text" placeholder="Last Name">
          </div>
        </div>
        <div class=" rounded-3xl ">
          <input class="drop-shadow-lg placeholder:italic border hover:border-green-600 bg-gray-200 w-full h-full lg:text-1xl lg:pl-7 md:text-lg md:pl-6 sm:text-base text-base sm:pl-5 pl-4 rounded-md lg:p-3 md:p-2 sm:p-2 p-2"type="text" placeholder="Email">
        </div>
        <div class=" rounded-3xl ">
          <input class="drop-shadow-lg placeholder:italic border hover:border-green-600 bg-gray-200 w-full h-full lg:text-1xl lg:pl-7 md:text-lg md:pl-6 sm:text-base text-base sm:pl-5 pl-4 rounded-md lg:p-3 md:p-2 sm:p-2 p-2" type="text" placeholder="Organization/School">
        </div>
        <div class="  font-bold  flex justify-end pr-7 lg:text-2xl md:text-1xl sm:text-lg text-lg">Price : 0.00 $</div>
        <div class="flex justify-center ">
          <button class=" lg:h-12 md:h-10 sm:h-8 h-8  lg:px-6 md:px-5 sm:px-4 px-4 m-2  lg:text-2xl md:text-1xl sm:text-lg text-base text-white bg-green-600 transition-colors duration-500 border-solid border-green-600 border-2 rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">Register</button>
        </div>
       
      
    </div>
  </div>
</body>
</html>