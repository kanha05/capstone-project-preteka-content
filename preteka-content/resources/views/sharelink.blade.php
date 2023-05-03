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
<div class=" p-10 min-h-screen flex justify-center items-center">
        <div class="w-full max-w-lg h-96 rounded-lg shadow-2xl ">
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