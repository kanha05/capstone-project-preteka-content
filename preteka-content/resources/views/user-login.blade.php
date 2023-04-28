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
                <span class="mb-3 text-4xl font-bold">Welcome back</span>
                <span class="font-light text-gray-400 mb-8">
                    Welcome back! Please enter your details
                </span>
                <div class="py-4">
                    <input type="text"
                        class="w-full p-2 border border-gray-300 rounded-md pl-7 bg-gray-200 text-xl placeholder:italic"
                        name="email" id="email" placeholder="Email"/>
                </div>
                <div class="py-4">
                    <input type="password" name="pass" id="pass"
                        class="w-full p-2 border border-gray-300 rounded-md pl-7 bg-gray-200 text-xl placeholder:italic" placeholder="Password"/>
                </div>
                <div class="flex justify-between w-full py-4">
                    <div class="mr-24">
                        <input type="checkbox" name="ch" id="ch" class="mr-2" />
                        <span class="text-md">Remember for 30 days</span>
                    </div>
                    <span class="font-bold text-md">Forgot password</span>
                </div>
                <button
                    class="w-full bg-green-600 text-white p-2 rounded-lg mb-6 hover:bg-white hover:text-black hover:border hover:border-gray-300">
                    Sign in
                </button>
                <button
                    class="w-full border border-gray-300 text-md p-2 rounded-lg mb-6 hover:bg-green-600 hover:text-white">
                    <img src="google.svg" alt="img" class="w-6 h-6 inline mr-2" />
                    Sign in with Google
                </button>
                <div class="text-center text-gray-400">
                    Dont'have an account?
                    <span class="font-bold text-black">Sign up for free</span>
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