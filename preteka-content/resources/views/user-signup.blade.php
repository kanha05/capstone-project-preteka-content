<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
            <!-- left side -->
            <div class="flex flex-col justify-center p-8 md:p-14">
            <div class=" ml-72 -mt-5">
        <img class=" lg:ml-12 mg:ml-10 sm:ml-8 ml-6 " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAABo0lEQVR4nO2WvU4CQRSFt113ztksiYW/sbTQCjrxAUzU+BwK+Cx2Go2FpT3qeygzCw+gwQ6xE4OZDRBUdnaWhUDBTW4ymWTyzT1zf8ZxFjZv9hIEm4osS+BJkqECPrXrdW+v9BwEGxMD1l13TQFXkuwosmtySX5L4F75/lYmaE2IEwW0k4D/LgB8KOB4LKgCznUEaaHD0SugkjpSmQH6B24XeSOXWx9HXqPsrruaCJbk7aSgQ36dWDJx2RsKsafIgiSbIyRtKt/Ph0IUYyTvaCVjwbpOY2/t+/lIEc/bGYbrtd7rnS8Y3vssXmbg0XBwAOjDR+0Z5K6aIq4nZOlvkD20qztcPNgimyX5rjxvt38mFGJbkW+JCQa0pwF+tSir1vxJLWeVXJIsTbGcTmPBep4aGkjR2EDIQk2I/Rjwl7GB9G59k5ihKV0Cl47N4I8a++SgLbm0tOLYWAgc2Pw4LMfikRV0IDlQyfwRIMupoH3TQ3wc2SN5gUMnizWEWJbkhc5MyyjvrN/UxnQ56NEmyQdJqqi9Au1oTVZ1nSaWzMKcGdgPOnZMCze6l4MAAAAASUVORK5CYII=">

        </div>
                <span class="mb-3 text-4xl font-bold">Create an account</span>
                <span class="font-light text-gray-400 mb-5">
                    Welcome to ព្រឹត្តិការណ៍-Content
                </span>
                <div class="py-4">
                    <input type="text"
                        class="p-2 pl-7 w-full text-xl bg-gray-300 placeholder:italic rounded-lg placeholder:text-slate-600 placeholder-gray-500 outline-0 dark:text-black"
                        name="username" id="username" placeholder="username"/>
                </div>
                <div class="py-4">
                    <input type="text"
                        class="p-2 pl-7 w-full text-xl bg-gray-300 placeholder:italic rounded-lg placeholder:text-slate-600 placeholder-gray-500 outline-0 dark:text-black"
                        name="email" id="email" placeholder="Email"/>
                </div>
                <div class="py-4">
                    <input type="password" name="pass" id="pass"
                        class="p-2 pl-7 w-full text-xl bg-gray-300 placeholder:italic rounded-lg placeholder:text-slate-600 placeholder-gray-500 outline-0 dark:text-black" placeholder="Set password"/>
                </div>
                <div class="py-4">
                    <input type="password" name="pass" id="pass"
                        class="p-2 pl-7 w-full text-xl bg-gray-300 placeholder:italic rounded-lg placeholder:text-slate-600 placeholder-gray-500 outline-0 dark:text-black" placeholder="Confirm password"/>
                </div>
                <button
                    class="w-full text-md p-2 mb-6 text-white bg-green-600 transition-colors duration-500 border-solid border-green-600 border rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">
                    Create account
                </button>
                <!-- <div class="text-center text-gray-400">
                    Dont'have an account?
                    <span class="font-bold text-black">Sign up for free</span>
                </div> -->
            </div>
            <!-- {/* right side */} -->
            <!-- <div class="relative">
                <img src="image.jpg" alt="img" class="w-[400px] h-full hidden rounded-r-2xl md:block object-cover" />
                
                <div
                    class="absolute hidden bottom-10 right-6 p-6 bg-white bg-opacity-30 backdrop-blur-sm rounded drop-shadow-lg md:block">
                    <span class="text-white text-xl">We've been uesing Untitle to kick"<br />start every new project
                        and can't <br />imagine working without it."
                    </span>
                </div>
            </div> -->
        </div>
    </div>
</body>

</html>