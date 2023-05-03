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
    <div class="flex items-center justify-center min-h-screen ">
        
        <div class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
            <!-- left side -->
            <div class="flex flex-col justify-center p-8 md:p-10">
            <div class=" ml-72 -mt-5">
        <img class=" lg:ml-12 mg:ml-10 sm:ml-8 ml-6 " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAABo0lEQVR4nO2WvU4CQRSFt113ztksiYW/sbTQCjrxAUzU+BwK+Cx2Go2FpT3qeygzCw+gwQ6xE4OZDRBUdnaWhUDBTW4ymWTyzT1zf8ZxFjZv9hIEm4osS+BJkqECPrXrdW+v9BwEGxMD1l13TQFXkuwosmtySX5L4F75/lYmaE2IEwW0k4D/LgB8KOB4LKgCznUEaaHD0SugkjpSmQH6B24XeSOXWx9HXqPsrruaCJbk7aSgQ36dWDJx2RsKsafIgiSbIyRtKt/Ph0IUYyTvaCVjwbpOY2/t+/lIEc/bGYbrtd7rnS8Y3vssXmbg0XBwAOjDR+0Z5K6aIq4nZOlvkD20qztcPNgimyX5rjxvt38mFGJbkW+JCQa0pwF+tSir1vxJLWeVXJIsTbGcTmPBep4aGkjR2EDIQk2I/Rjwl7GB9G59k5ihKV0Cl47N4I8a++SgLbm0tOLYWAgc2Pw4LMfikRV0IDlQyfwRIMupoH3TQ3wc2SN5gUMnizWEWJbkhc5MyyjvrN/UxnQ56NEmyQdJqqi9Au1oTVZ1nSaWzMKcGdgPOnZMCze6l4MAAAAASUVORK5CYII=">

        </div>
                <span class="mb-3 text-4xl font-bold">Welcome back</span>
                <span class="font-light text-gray-400 mb-8">
                    Welcome back! Please enter your details
                </span>
                <div class="py-4">
                    <input type="text"
                        class="p-2 pl-7 w-full text-xl bg-gray-300 placeholder:italic rounded-lg placeholder:text-slate-600 placeholder-gray-500 outline-0 dark:text-black"
                        name="email" id="email" placeholder="Email"/>
                </div>
                <div class="py-4">
                    <input type="password" name="pass" id="pass"
                        class="p-2 pl-7 w-full text-xl bg-gray-300 placeholder:italic rounded-lg placeholder:text-slate-600 placeholder-gray-500 outline-0 dark:text-black" placeholder="Password"/>
                </div>
                <div class="flex justify-between w-full py-4">
                    <div class="mr-24">
                        <input type="checkbox" name="ch" id="ch" class="mr-2" />
                        <span class="text-md">Remember me</span>
                    </div>
                    <span class="font-bold text-md"><a href="">Forgot password</a></span>
                </div>
                <button
                    class="w-full text-md p-2 mb-6 text-white bg-green-600 transition-colors duration-500 border-solid border-green-600 border rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">
                    Sign in
                </button>
                <button
                class="w-full text-md p-2 mb-6 text-black transition-colors duration-500 border-solid border-green-600 border rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">
                    
                    <svg class="w-6 h-6 inline mr-2" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"

viewBox="0 0 48 48">
<path fill="#fbc02d" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12	s5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24s8.955,20,20,20	s20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path><path fill="#e53935" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039	l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path><path fill="#4caf50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36	c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path><path fill="#1565c0" d="M43.611,20.083L43.595,20L42,20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571	c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
</svg>
                    Sign in with Google
                </button>
                <div class="text-center text-gray-400">
                    Dont'have an account?
                    <span class="font-bold text-green-700"><a href="">Sign up for free</a></span>
                </div>
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