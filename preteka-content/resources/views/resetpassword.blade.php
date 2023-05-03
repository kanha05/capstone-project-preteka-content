<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<body>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
            <!-- left side -->
            <div class="flex flex-col justify-center p-8 md:p-14">
                <span class="mb-3 text-4xl font-bold">Set your new password</span>
                <span class="font-light text-gray-400 mb-8">
                    Your password should be combined with letters, numbers and signals
                </span>
                <div class="py-4">
                    <input type="password"
                        class="w-full p-2 border border-gray-300 rounded-md pl-7 bg-gray-200 text-xl placeholder:italic"
                        name="newpassword" id="newpassword" placeholder="New-password"/>
                </div>
                <div class="py-4">
                <input type="password"
                        class="w-full p-2 border border-gray-300 rounded-md pl-7 bg-gray-200 text-xl placeholder:italic"
                        name="confirm-password" id="confirm-password" placeholder="Confirm-password"/>
                </div>
                
                <div class="grid grid-cols-2">
                    <a href="./verifypassword"><button class="w-2/3 bg-green-600 text-white p-2 rounded-lg mb-6 hover:bg-white hover:text-black hover:border hover:border-gray-300 ml-auto">Back</button> </a>

                    <a href="./home"><button class="w-2/3 bg-green-600 text-white p-2 rounded-lg mb-6 hover:bg-white hover:text-black hover:border hover:border-gray-300 ml-auto">Done</button> </a>
                </div>
                <div class="text-center text-gray-400">
                    Didn't get ur code?
                    <button class="">
                    <span class="font-bold text-black">send code again</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>