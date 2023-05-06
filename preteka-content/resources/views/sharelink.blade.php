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
    <link rel="stylesheet" href="/popup.css">
    <script src="/popup.js"></script>
</head>
<body>
<div class=" p-10 min-h-screen flex justify-center items-center">
    
        <div class="popup w-full max-w-lg h-96 rounded-lg shadow-2xl ">
            <button  type="button" onclick="removepopup()">
                <div class="ml-[460px] mt-5 bg-white  hover:bg-red-500">
                    <img  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAABo0lEQVR4nO2WvU4CQRSFt113ztksiYW/sbTQCjrxAUzU+BwK+Cx2Go2FpT3qeygzCw+gwQ6xE4OZDRBUdnaWhUDBTW4ymWTyzT1zf8ZxFjZv9hIEm4osS+BJkqECPrXrdW+v9BwEGxMD1l13TQFXkuwosmtySX5L4F75/lYmaE2IEwW0k4D/LgB8KOB4LKgCznUEaaHD0SugkjpSmQH6B24XeSOXWx9HXqPsrruaCJbk7aSgQ36dWDJx2RsKsafIgiSbIyRtKt/Ph0IUYyTvaCVjwbpOY2/t+/lIEc/bGYbrtd7rnS8Y3vssXmbg0XBwAOjDR+0Z5K6aIq4nZOlvkD20qztcPNgimyX5rjxvt38mFGJbkW+JCQa0pwF+tSir1vxJLWeVXJIsTbGcTmPBep4aGkjR2EDIQk2I/Rjwl7GB9G59k5ihKV0Cl47N4I8a++SgLbm0tOLYWAgc2Pw4LMfikRV0IDlQyfwRIMupoH3TQ3wc2SN5gUMnizWEWJbkhc5MyyjvrN/UxnQ56NEmyQdJqqi9Au1oTVZ1nSaWzMKcGdgPOnZMCze6l4MAAAAASUVORK5CYII=">
                </div>
            </button>
            <h1 class="p-5 text-4xl font-bold">Share</h1>
            <div class="flex">
                <p class="lg:pl-10 pl-5 boder">fndsnjngjfngkjfmgnfjngfjngjfgfg<p>
                <a href=""><i class="fa-solid fa-copy lg:pl-20 pl-5 "></i></a>
                <a href="" class=" text-sm  lg:pl-5 pl-2">Copy Link </a>
            </div>
            <div class="text-sm text-blue-400 px-5 pt-5">Share with other</div>
            <div class="grid lg:grid-cols-4 grid-cols-3">
                <div class="p-10">
                    <img src="../img/facebook.png" alt="" class="w-10">
                    <h1 class="text-sm mt-2">Facebook</h1>
                </div>
                <div class="p-10">
                    <img src="../img/messenger.png" alt="" class="w-10">
                    <h1 class="text-sm mt-2">Messenger</h1>
                </div>
                <div class="p-10 ">
                    <img src="../img/telegram .png" alt="" class="w-10">
                    <h1 class="text-sm mt-2">Telegram</h1>
                </div>
                <div class="lg:p-10 pl-10 pt-5">
                    <img src="../img/instagram.png" alt="" class="w-10">
                    <h1 class="text-sm mt-2">Instagram</h1>
                </div>
            </div>
        </div>
    </div>
</body>
</html>