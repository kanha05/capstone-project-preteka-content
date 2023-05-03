<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/dist/output.css" rel="stylesheet">
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/charts.css/dist/charts.min.css">
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="lg:w-2/6 md:w-3/6 relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0 gap-4">
            <!-- left side -->
            <div class="absolute top-3 right-3 ">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAABo0lEQVR4nO2WvU4CQRSFt113ztksiYW/sbTQCjrxAUzU+BwK+Cx2Go2FpT3qeygzCw+gwQ6xE4OZDRBUdnaWhUDBTW4ymWTyzT1zf8ZxFjZv9hIEm4osS+BJkqECPrXrdW+v9BwEGxMD1l13TQFXkuwosmtySX5L4F75/lYmaE2IEwW0k4D/LgB8KOB4LKgCznUEaaHD0SugkjpSmQH6B24XeSOXWx9HXqPsrruaCJbk7aSgQ36dWDJx2RsKsafIgiSbIyRtKt/Ph0IUYyTvaCVjwbpOY2/t+/lIEc/bGYbrtd7rnS8Y3vssXmbg0XBwAOjDR+0Z5K6aIq4nZOlvkD20qztcPNgimyX5rjxvt38mFGJbkW+JCQa0pwF+tSir1vxJLWeVXJIsTbGcTmPBep4aGkjR2EDIQk2I/Rjwl7GB9G59k5ihKV0Cl47N4I8a++SgLbm0tOLYWAgc2Pw4LMfikRV0IDlQyfwRIMupoH3TQ3wc2SN5gUMnizWEWJbkhc5MyyjvrN/UxnQ56NEmyQdJqqi9Au1oTVZ1nSaWzMKcGdgPOnZMCze6l4MAAAAASUVORK5CYII=">
            </div>
            <div class=" flex-col flex justify-center w-full p-9 ">
                <span class="mb-3 lg:text-3xl md:text-3xl text-2xl after: font-bold flex justify-center">Change Password</span> 
                <div class="">
                    <label class="lg:text-lg md:text-md text-sm " for="">Old password</label>
                    <input type="password"
                        class="w-full p-2 border border-gray-300 rounded-md pl-7 bg-gray-200 text-xl placeholder:italic mt-2"
                        name="code" id="code" placeholder="Old-password"/>
                </div>
                <div class="mt-3">
                    <label class="lg:text-lg md:text-md text-sm " for="">New password</label>
                    <input type="password"
                        class="w-full p-2 border border-gray-300 rounded-md pl-7 bg-gray-200 text-xl placeholder:italic mt-2"
                        name="newpassword" id="newpassword" placeholder="New-password"/>
                </div>
                <div class="mt-3">
                    <label class="lg:text-lg md:text-md text-sm " for="">Confirm password</label>
                     <input type="password"
                        class="w-full p-2 border border-gray-300 rounded-md pl-7 bg-gray-200 text-xl placeholder:italic mt-2 "
                        name="confirm-password" id="confirm-password" placeholder="Confirm-password"/>
                </div>
               
                <div class=" grid-cols-2 flex justify-center gap-7 mt-7">
                    <button
                    class="w-2/3 bg-green-600 text-white p-2 rounded-lg mb-6 hover:bg-white hover:text-black hover:border hover:border-gray-300">
                    Back
                    </button>
                    <button
                    class="w-2/3 bg-green-600 text-white p-2 rounded-lg mb-6 hover:bg-white hover:text-black hover:border hover:border-gray-300">
                    Next
                    </button>
                </div>

            </div>
        </div>
    </div>
</body>

</html>