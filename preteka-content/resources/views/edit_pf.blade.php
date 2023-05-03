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
<div class=" w-full h-full py-5 px-3items-center justify-center flex">
        <div class=" h-full  w-[70%] rounded-lg "> 
            <h1 class="text-3xl text-center font-bold mt-10">Edit Profile</h1>
            <!--Basic imformation-->
            <div class="lg:flex">
                <div class="lg:w-1/2 w-full p-10 mt-10">
                    <h1 class="text-xl font-semibold">Basic Information</h1>
                    <div class="flex p-5 space-x-5">
                        <span class="text-lg">Username:</span>
                        <input type="text"
                            class="w-full border text-lg shadow-md shadow-slate-400 rounded-sm placeholder:italic"
                            name="name" id="name" placeholder="Username"/>
                    </div>
                    <div class="flex p-5 space-x-16">
                        <span class="text-base mr-2">DOB</span>
                        <input class="w-full boder shadow-md" type="date" placeholder="Event Title" >
                    </div>
                    <div class="flex p-5 space-x-5">
                        <span class="text-lg">Education:</span>
                        <input type="text"
                            class="w-full border text-lg shadow-md shadow-slate-400 rounded-sm placeholder:italic"
                            name="edu" id="edu" placeholder="Education"/>
                    </div>
                    <div class="flex p-5 space-x-5">
                        <span class="text-lg mr-10">Work:</span>
                        <input type="text"
                            class="w-full border text-lg shadow-md shadow-slate-400 rounded-sm placeholder:italic"
                            name="work" id="work" placeholder="Work"/>
                    </div>
                    <div class="flex p-5 space-x-5">
                        <span class="text-lg mr-14">Bio </span>
                        <textarea name="bio" id="bio" cols="30" rows="5" class=" w-full border text-lg shadow-md shadow-slate-400 rounded-sm placeholder:italic" placeholder="Desccription"></textarea>
                    </div>
                    <div class="flex p-5">
                        <span class="text-lg mr-10">Profile:</span>
                            <input type="file">
                    </div>
                    <div class="flex p-5">
                        <span class="text-lg mr-10">Cover:</span>
                            <input type="file">
                    </div>
                
            </div>
            <!--Contact-->
            <div class="lg:w-1/2 w-full p-10 mt-10">
                    <h1 class="text-xl font-semibold">Contact</h1>
                    <div class="flex p-5 space-x-7">
                        <span class="text-lg">Facebook</span>
                        <input type="text"
                            class="w-full border text-lg shadow-md shadow-slate-400 rounded-sm placeholder:italic"
                            name="face" id="face" placeholder="link Facebook"/>
                    </div>
                    <div class="flex p-5 space-x-6">
                        <span class="text-lg">Instagram</span>
                        <input type="text"
                            class="w-full border text-lg shadow-md shadow-slate-400 rounded-sm placeholder:italic"
                            name="ig" id="ig" placeholder="link Instagram"/>
                    </div>
                    <div class="flex p-5 space-x-8">
                        <span class="text-lg">Telegram</span>
                        <input type="text"
                            class="w-full border text-lg shadow-md shadow-slate-400 rounded-sm placeholder:italic"
                            name="tele" id="tele" placeholder="link telegram"/>
                    </div>
                    <div class="flex p-5 space-x-16 ">
                        <span class="text-lg">Link</span>
                        <input type="text"
                            class="w-full ml-2  border text-lg shadow-md shadow-slate-400 rounded-sm placeholder:italic"
                            name="link" id="link" placeholder="link-in"/>
                    </div>
                    <div class="flex p-5 space-x-10">
                        <span class="text-lg">Phone</span>
                        <input type="text"
                            class="w-full border text-lg shadow-md shadow-slate-400 rounded-sm placeholder:italic"
                            name="phone" id="phone" placeholder="Phone number"/>
                    </div>
                    <div class="flex">
                        <div class=" lg:p-5">
                            <button class="lg:px-10   py-2 md:px-7 px-7 text-lg  m-2 text-white bg-green-600 transition-colors duration-500 border-solid border-green-600 border-1 rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">Cancel</button>
                        </div>
                        <div class=" lg:p-5">
                            <button class="lg:px-10   py-2 md:px-7 px-7 text-lg   m-2 text-white bg-green-600 transition-colors duration-500 border-solid border-green-600 border-1 rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">Save</button>
                        </div>
                    </div>
                </div>
                
                <!--End conntact-->
            </div>
        </div>
    </div>
</body>
</html>