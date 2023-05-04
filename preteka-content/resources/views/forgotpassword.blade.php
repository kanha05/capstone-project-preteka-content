<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/charts.css/dist/charts.min.css">
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="relative flex flex-col m-6 space-y-7 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0 ">
            <!-- left side -->
           
            <div class="flex flex-col justify-center p-8 md:p-14">
                <div class="absolute top-5 right-5 ">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAABo0lEQVR4nO2WvU4CQRSFt113ztksiYW/sbTQCjrxAUzU+BwK+Cx2Go2FpT3qeygzCw+gwQ6xE4OZDRBUdnaWhUDBTW4ymWTyzT1zf8ZxFjZv9hIEm4osS+BJkqECPrXrdW+v9BwEGxMD1l13TQFXkuwosmtySX5L4F75/lYmaE2IEwW0k4D/LgB8KOB4LKgCznUEaaHD0SugkjpSmQH6B24XeSOXWx9HXqPsrruaCJbk7aSgQ36dWDJx2RsKsafIgiSbIyRtKt/Ph0IUYyTvaCVjwbpOY2/t+/lIEc/bGYbrtd7rnS8Y3vssXmbg0XBwAOjDR+0Z5K6aIq4nZOlvkD20qztcPNgimyX5rjxvt38mFGJbkW+JCQa0pwF+tSir1vxJLWeVXJIsTbGcTmPBep4aGkjR2EDIQk2I/Rjwl7GB9G59k5ihKV0Cl47N4I8a++SgLbm0tOLYWAgc2Pw4LMfikRV0IDlQyfwRIMupoH3TQ3wc2SN5gUMnizWEWJbkhc5MyyjvrN/UxnQ56NEmyQdJqqi9Au1oTVZ1nSaWzMKcGdgPOnZMCze6l4MAAAAASUVORK5CYII=">
                </div>
                <span class="mb-3 lg:text-3xl md:text-3xl text-2xl font-bold mt-6">Forgot your password?</span>
                <span class="font-light text-gray-400 mb-8">
                    Set your new password
                </span>
                <div class="pb-4">
                    <input type="text"
                        class="w-full lg:p-3 md:p-2  p-1 lg:text-lg md:text-base lg:placeholder:text-lg placeholder:text-base border border-gray-300 rounded-md pl-7 bg-gray-200 text-xl placeholder:italic"
                        name="username" id="username" placeholder="Username"/>
                </div>
                <div class="py-4">
                    <input type="text"
                        class="w-full lg:p-3 md:p-2  p-1 lg:text-lg md:text-base lg:placeholder:text-lg placeholder:text-base border border-gray-300 rounded-md pl-7 bg-gray-200 text-xl placeholder:italic"
                        name="email" id="email" placeholder="Email"/>
                </div>
                <div class="py-4 flex justify-center">
                    <a href="./verifypassword"><button class="  lg:px-12 md:px-10 px-8 bg-green-600 text-white p-2 rounded-lg mb-6 hover:bg-white hover:text-black hover:border hover:border-gray-300 ml-auto">Next</button> </a>
                </div>
                
            </div>
        </div>
    </div>
</body>

</html>