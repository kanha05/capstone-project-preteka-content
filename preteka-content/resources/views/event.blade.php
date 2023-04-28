<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="w
idth=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/charts.css/dist/charts.min.css">
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="dark:bg-black dark:text-white font-poppins p-4">
<div class="moon cursor-pointer w-4">
      <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
      <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z"></path>
      </svg>
</div>
<div class="sun cursor-pointer w-4">
    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"></path>
    </svg>
</div>
<div class="m-4">
    <button class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-base px-4 py-2.5 text-center inline-flex items-center" type="button" data-dropdown-toggle="dropdown">Category <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
    <!-- Dropdown category -->
    <div class="hidden bg-white text-base list-none divide-y divide-gray-100 rounded shadow my-4" id="dropdown">
        <ul class="py-1" aria-labelledby="dropdown">
        <li>
            <a href="#entertainment" class="text-sm hover:bg-green-100 text-gray-700 block px-4 py-2">Entertainment</a>
        </li>
        <li>
            <a href="#technology" class="text-sm hover:bg-green-100 text-gray-700 block px-4 py-2">Technology</a>
        </li>
        <li>
            <a href="#education" class="text-sm hover:bg-green-100 text-gray-700 block px-4 py-2">Education</a>
        </li>
        <li>
            <a href="#inspiration" class="text-sm hover:bg-green-100 text-gray-700 block px-4 py-2">Inspiration</a>
        </li>
        <li>
            <a href="#marketing" class="text-sm hover:bg-green-100 text-gray-700 block px-4 py-2">Marketing</a>
        </li>
        </ul>
    </div>
</div>

<div class="px-4">
    <!-- Entertainment -->
    <div >
        <h1 class="flex place-content-center font-bold text-3xl text-green-700 pb-4 dark:text-green-400" id="entertainment">Entertainment</h1>
        <div class="grid grid-cols-2 md:gap-8 lg:gap-8 md:grid-cols-3 lg:grid-cols-4 sm:grid-cols-2 gap-4 pb-4">
            <div class="shadow-xl rounded-md transition-colors duration-500 hover:bg-gray-200 dark:shadow-slate-500 dark:hover:bg-slate-800 dark:shadow-md">
                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg" alt="" class="rounded-t-md">
                <div class="px-2">
                    <h1 class="font-bold text-1xl ">Begin your Tai Cai journey: Traditional</h1>
                <div class="flex mt-2">
                    <div>
                        <svg class="w-6 h-6 dark:text-white mr-4" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="text-red-600 font-bold">: Sun, Apr 9, 2023 10:00 PM +07 + 1 more event</div>
                </div>
                <div class="flex mt-2">
                    <div>
                        <svg class="w-6 h-6 dark:text-white mr-4" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="font-bold">: Online</div>
                </div>
                <div class="flex">
                    <h1 class="text-red-600">Organizer: </h1>
                    <span class="ml-2">Smart Axiata</span>
                </div>
                <div class="flex place-content-center">
                    <a href="detail"><button class="h-8 px-2 m-2 text-white bg-green-600 transition-colors duration-500 border-solid border-green-600 border-2 rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">More Detail</button></a>
                </div>
                </div>
            </div>
    
            <div class="shadow-xl rounded-md transition-colors duration-500 hover:bg-gray-200  dark:shadow-slate-500 dark:hover:bg-slate-800 dark:shadow-md">
                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg" alt="" class="rounded-t-md">
                <div class="px-2">
                    <h1 class="font-bold text-1xl ">Begin your Tai Cai journey: Traditional</h1>
                <div class="flex mt-2">
                    <div>
                        <svg class="w-6 h-6 dark:text-white mr-4" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="text-red-600 font-bold">: Sun, Apr 9, 2023 </div>
                </div>
                <div class="flex mt-2">
                    <div>
                        <svg class="w-6 h-6 dark:text-white mr-4" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="font-bold">: Online</div>
                </div>
                <div class="flex">
                    <h1 class="text-red-600">Organizer: </h1>
                    <span class="ml-2">Smart Axiata</span>
                </div>
                <div class="flex place-content-center">
                    <button class="h-8 px-2 m-2 text-white bg-green-600 transition-colors duration-500 border-solid border-green-600 border-2 rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">More Detail</button>
                </div>
                </div>
            </div>
    
            <div class="shadow-xl rounded-md transition-colors duration-500 hover:bg-gray-200  dark:shadow-slate-500 dark:hover:bg-slate-800 dark:shadow-md">
                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg" alt="" class="rounded-t-md">
                <div class="px-2">
                    <h1 class="font-bold text-1xl ">Begin your Tai Cai journey: Traditional</h1>
                <div class="flex mt-2">
                    <div>
                        <svg class="w-6 h-6 dark:text-white mr-4" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="text-red-600 font-bold">: Sun, Apr 9, 2023 </div>
                </div>
                <div class="flex mt-2">
                    <div>
                        <svg class="w-6 h-6 dark:text-white mr-4" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="font-bold">: Online</div>
                </div>
                <div class="flex">
                    <h1 class="text-red-600">Organizer: </h1>
                    <span class="ml-2">Smart Axiata</span>
                </div>
                <div class="flex place-content-center">
                    <button class="h-8 px-2 m-2 text-white bg-green-600 transition-colors duration-500 border-solid border-green-600 border-2 rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">More Detail</button>
                </div>
                </div>
            </div>
     
            <div class="shadow-xl rounded-md transition-colors duration-500 hover:bg-gray-200  dark:shadow-slate-500 dark:hover:bg-slate-800 dark:shadow-md">
                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg" alt="" class="rounded-t-md">
                <div class="px-2">
                    <h1 class="font-bold text-1xl ">Begin your Tai Cai journey: Traditional</h1>
                <div class="flex mt-2">
                    <div>
                        <svg class="w-6 h-6 dark:text-white mr-4" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="text-red-600 font-bold">: Sun, Apr 9, 2023 </div>
                </div>
                <div class="flex mt-2">
                    <div>
                        <svg class="w-6 h-6 dark:text-white mr-4" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="font-bold">: Online</div>
                </div>
                <div class="flex">
                    <h1 class="text-red-600">Organizer: </h1>
                    <span class="ml-2">Smart Axiata</span>
                </div>
                <div class="flex place-content-center">
                    <button class="h-8 px-2 m-2 text-white bg-green-600 transition-colors duration-500 border-solid border-green-600 border-2 rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">More Detail</button>
                </div>
                </div>
            </div>
    
            <!-- row2 -->
    
            <div class="shadow-xl rounded-md transition-colors duration-500 hover:bg-gray-200  dark:shadow-slate-500 dark:hover:bg-slate-800 dark:shadow-md">
                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg" alt="" class="rounded-t-md">
                <div class="px-2">
                    <h1 class="font-bold text-1xl ">Begin your Tai Cai journey: Traditional</h1>
                <div class="flex mt-2">
                    <div>
                        <svg class="w-6 h-6 dark:text-white mr-4" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="text-red-600 font-bold">: Sun, Apr 9, 2023 </div>
                </div>
                <div class="flex mt-2">
                    <div>
                        <svg class="w-6 h-6 dark:text-white mr-4" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="font-bold">: Online</div>
                </div>
                <div class="flex">
                    <h1 class="text-red-600">Organizer: </h1>
                    <span class="ml-2">Smart Axiata</span>
                </div>
                <div class="flex place-content-center">
                    <a href="index.html"><button class="h-8 px-2 m-2 text-white bg-green-600 transition-colors duration-500 border-solid border-green-600 border-2 rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">More Detail</button></a>
                </div>
                </div>
            </div>
    
            <div class="shadow-xl rounded-md transition-colors duration-500 hover:bg-gray-200  dark:shadow-slate-500 dark:hover:bg-slate-800 dark:shadow-md">
                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg" alt="" class="rounded-t-md">
                <div class="px-2">
                    <h1 class="font-bold text-1xl ">Begin your Tai Cai journey: Traditional</h1>
                <div class="flex mt-2">
                    <div>
                        <svg class="w-6 h-6 dark:text-white mr-4" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="text-red-600 font-bold">: Sun, Apr 9, 2023 </div>
                </div>
                <div class="flex mt-2">
                    <div>
                        <svg class="w-6 h-6 dark:text-white mr-4" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="font-bold">: Online</div>
                </div>
                <div class="flex">
                    <h1 class="text-red-600">Organizer: </h1>
                    <span class="ml-2">Smart Axiata</span>
                </div>
                <div class="flex place-content-center">
                    <button class="h-8 px-2 m-2 text-white bg-green-600 transition-colors duration-500 border-solid border-green-600 border-2 rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">More Detail</button>
                </div>
                </div>
            </div>
    
            <div class="shadow-xl rounded-md transition-colors duration-500 hover:bg-gray-200  dark:shadow-slate-500 dark:hover:bg-slate-800 dark:shadow-md">
                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg" alt="" class="rounded-t-md">
                <div class="px-2">
                    <h1 class="font-bold text-1xl ">Begin your Tai Cai journey: Traditional</h1>
                <div class="flex mt-2">
                    <div>
                        <svg class="w-6 h-6 dark:text-white mr-4" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="text-red-600 font-bold">: Sun, Apr 9, 2023 </div>
                </div>
                <div class="flex mt-2">
                    <div>
                        <svg class="w-6 h-6 dark:text-white mr-4" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="font-bold">: Online</div>
                </div>
                <div class="flex">
                    <h1 class="text-red-600">Organizer: </h1>
                    <span class="ml-2">Smart Axiata</span>
                </div>
                <div class="flex place-content-center">
                    <button class="h-8 px-2 m-2 text-white bg-green-600 transition-colors duration-500 border-solid border-green-600 border-2 rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">More Detail</button>
                </div>
                </div>
            </div>
    
            <div class="shadow-xl rounded-md transition-colors duration-500 hover:bg-gray-200  dark:shadow-slate-500 dark:hover:bg-slate-800 dark:shadow-md">
                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg" alt="" class="rounded-t-md">
                <div class="px-2">
                    <h1 class="font-bold text-1xl ">Begin your Tai Cai journey: Traditional</h1>
                <div class="flex mt-2">
                    <div>
                        <svg class="w-6 h-6 dark:text-white mr-4" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="text-red-600 font-bold">: Sun, Apr 9, 2023 </div>
                </div>
                <div class="flex mt-2">
                    <div>
                        <svg class="w-6 h-6 dark:text-white mr-4" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="font-bold">: Online</div>
                </div>
                <div class="flex">
                    <h1 class="text-red-600">Organizer: </h1>
                    <span class="ml-2">Smart Axiata</span>
                </div>
                <div class="flex place-content-center">
                    <button class="h-8 px-2 m-2 text-white bg-green-600 transition-colors duration-500 border-solid border-green-600 border-2 rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">More Detail</button>
                </div>
                </div>
            </div>
    
        </div>      
         <!-- pagination -->
        <div class="flex place-content-end items-end">
            <div class="bg-white p-4 flex items-center flex-wrap place-content-end dark:bg-black ">
                <nav aria-label="Page navigation">
                  <ul class="inline-flex">
                    <li><button class="px-4 py-2 text-green-600 transition-colors duration-150 bg-white border border-r-0 border-green-600 rounded-l-lg focus:shadow-outline hover:bg-green-100 dark:bg-black">Prev</button></li>
                    <li><button class="px-4 py-2 text-green-600 transition-colors duration-150 bg-white border border-r-0 border-green-600 focus:shadow-outline hover:bg-green-100 dark:bg-black">1</button></li>
                    <li><button class="px-4 py-2 text-white transition-colors duration-150 bg-green-600 border border-r-0 border-green-600 focus:shadow-outline">2</button></li>
                    <li><button class="px-4 py-2 text-green-600 transition-colors duration-150 bg-white border border-r-0 border-green-600 focus:shadow-outline hover:bg-green-100 dark:bg-black">3</button></li>
                    <li><button class="px-4 py-2 text-green-600 transition-colors duration-150 bg-white border border-green-600 rounded-r-lg focus:shadow-outline hover:bg-green-100 dark:bg-black">Next</button></li>
                  </ul>
                </nav>
              </div>
        </div>
        <!--end pagination  -->
    
    </div>
    <!-- end Entertainment -->

    <!-- Technology -->
    <div>
        <h1 class="flex place-content-center font-bold text-3xl text-green-700 pb-4 dark:text-green-400" id="technology">Technology</h1>
        <div class="grid grid-cols-2 md:gap-8 lg:gap-8 md:grid-cols-3 lg:grid-cols-4 sm:grid-cols-2 gap-4 pb-4">
            <div class="shadow-xl rounded-md transition-colors duration-500 hover:bg-gray-200  dark:shadow-slate-500 dark:hover:bg-slate-800 dark:shadow-md">
                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg" alt="" class="rounded-t-md">
                <div class="px-2">
                    <h1 class="font-bold text-1xl ">Begin your Tai Cai journey: Traditional</h1>
                <div class="flex mt-2">
                    <div>
                        <svg class="w-6 h-6 dark:text-white mr-4" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="text-red-600 font-bold">: Sun, Apr 9, 2023 </div>
                </div>
                <div class="flex mt-2">
                    <div>
                        <svg class="w-6 h-6 dark:text-white mr-4" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="font-bold">: Online</div>
                </div>
                <div class="flex">
                    <h1 class="text-red-600">Organizer: </h1>
                    <span class="ml-2">Smart Axiata</span>
                </div>
                <div class="flex place-content-center">
                    <a href="index.html"><button class="h-8 px-2 m-2 text-white bg-green-600 transition-colors duration-500 border-solid border-green-600 border-2 rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">More Detail</button></a>
                </div>
                </div>
            </div>
    
            <div class="shadow-xl rounded-md transition-colors duration-500 hover:bg-gray-200 ">
                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg" alt="" class="rounded-t-md">
                <div class="px-2">
                    <h1 class="font-bold text-1xl ">Begin your Tai Cai journey: Traditional</h1>
                <div class="flex mt-2">
                    <div>
                        <svg class="w-6 h-6 dark:text-white mr-4" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="text-red-600 font-bold">: Sun, Apr 9, 2023 </div>
                </div>
                <div class="flex mt-2">
                    <div>
                        <svg class="w-6 h-6 dark:text-white mr-4" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="font-bold">: Online</div>
                </div>
                <div class="flex">
                    <h1 class="text-red-600">Organizer: </h1>
                    <span class="ml-2">Smart Axiata</span>
                </div>
                <div class="flex place-content-center">
                    <button class="h-8 px-2 m-2 text-white bg-green-600 transition-colors duration-500 border-solid border-green-600 border-2 rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">More Detail</button>
                </div>
                </div>
            </div>
    
            <div class="shadow-xl rounded-md transition-colors duration-500 hover:bg-gray-200  dark:shadow-slate-500 dark:hover:bg-slate-800 dark:shadow-md">
                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg" alt="" class="rounded-t-md">
                <div class="px-2">
                    <h1 class="font-bold text-1xl ">Begin your Tai Cai journey: Traditional</h1>
                <div class="flex mt-2">
                    <div>
                        <svg class="w-6 h-6 dark:text-white mr-4" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="text-red-600 font-bold">: Sun, Apr 9, 2023 </div>
                </div>
                <div class="flex mt-2">
                    <div>
                        <svg class="w-6 h-6 dark:text-white mr-4" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="font-bold">: Online</div>
                </div>
                <div class="flex">
                    <h1 class="text-red-600">Organizer: </h1>
                    <span class="ml-2">Smart Axiata</span>
                </div>
                <div class="flex place-content-center">
                    <button class="h-8 px-2 m-2 text-white bg-green-600 transition-colors duration-500 border-solid border-green-600 border-2 rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">More Detail</button>
                </div>
                </div>
            </div>
    
            <div class="shadow-xl rounded-md transition-colors duration-500 hover:bg-gray-200  dark:shadow-slate-500 dark:hover:bg-slate-800 dark:shadow-md">
                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg" alt="" class="rounded-t-md">
                <div class="px-2">
                    <h1 class="font-bold text-1xl ">Begin your Tai Cai journey: Traditional</h1>
                <div class="flex mt-2">
                    <div>
                        <svg class="w-6 h-6 dark:text-white mr-4" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="text-red-600 font-bold">: Sun, Apr 9, 2023 </div>
                </div>
                <div class="flex mt-2">
                    <div>
                        <svg class="w-6 h-6 dark:text-white mr-4" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="font-bold">: Online</div>
                </div>
                <div class="flex">
                    <h1 class="text-red-600">Organizer: </h1>
                    <span class="ml-2">Smart Axiata</span>
                </div>
                <div class="flex place-content-center">
                    <button class="h-8 px-2 m-2 text-white bg-green-600 transition-colors duration-500 border-solid border-green-600 border-2 rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">More Detail</button>
                </div>
                </div>
            </div>
    
            <!-- row2 -->
    
            <div class="shadow-xl rounded-md transition-colors duration-500 hover:bg-gray-200  dark:shadow-slate-500 dark:hover:bg-slate-800 dark:shadow-md">
                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg" alt="" class="rounded-t-md">
                <div class="px-2">
                    <h1 class="font-bold text-1xl ">Begin your Tai Cai journey: Traditional</h1>
                <div class="flex mt-2">
                    <div>
                        <svg class="w-6 h-6 dark:text-white mr-4" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="text-red-600 font-bold">: Sun, Apr 9, 2023 </div>
                </div>
                <div class="flex mt-2">
                    <div>
                        <svg class="w-6 h-6 dark:text-white mr-4" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="font-bold">: Online</div>
                </div>
                <div class="flex">
                    <h1 class="text-red-600">Organizer: </h1>
                    <span class="ml-2">Smart Axiata</span>
                </div>
                <div class="flex place-content-center">
                    <a href="index.html"><button class="h-8 px-2 m-2 text-white bg-green-600 transition-colors duration-500 border-solid border-green-600 border-2 rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">More Detail</button></a>
                </div>
                </div>
            </div>
    
            <div class="shadow-xl rounded-md transition-colors duration-500 hover:bg-gray-200  dark:shadow-slate-500 dark:hover:bg-slate-800 dark:shadow-md">
                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg" alt="" class="rounded-t-md">
                <div class="px-2">
                    <h1 class="font-bold text-1xl ">Begin your Tai Cai journey: Traditional</h1>
                <div class="flex mt-2">
                    <div>
                        <svg class="w-6 h-6 dark:text-white mr-4" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="text-red-600 font-bold">: Sun, Apr 9, 2023 </div>
                </div>
                <div class="flex mt-2">
                    <div>
                        <svg class="w-6 h-6 dark:text-white mr-4" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="font-bold">: Online</div>
                </div>
                <div class="flex">
                    <h1 class="text-red-600">Organizer: </h1>
                    <span class="ml-2">Smart Axiata</span>
                </div>
                <div class="flex place-content-center">
                    <button class="h-8 px-2 m-2 text-white bg-green-600 transition-colors duration-500 border-solid border-green-600 border-2 rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">More Detail</button>
                </div>
                </div>
            </div>
    
            <div class="shadow-xl rounded-md transition-colors duration-500 hover:bg-gray-200  dark:shadow-slate-500 dark:hover:bg-slate-800 dark:shadow-md">
                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg" alt="" class="rounded-t-md">
                <div class="px-2">
                    <h1 class="font-bold text-1xl ">Begin your Tai Cai journey: Traditional</h1>
                <div class="flex mt-2">
                    <div>
                        <svg class="w-6 h-6 dark:text-white mr-4" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="text-red-600 font-bold">: Sun, Apr 9, 2023 </div>
                </div>
                <div class="flex mt-2">
                    <div>
                        <svg class="w-6 h-6 dark:text-white mr-4" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="font-bold">: Online</div>
                </div>
                <div class="flex">
                    <h1 class="text-red-600">Organizer: </h1>
                    <span class="ml-2">Smart Axiata</span>
                </div>
                <div class="flex place-content-center">
                    <button class="h-8 px-2 m-2 text-white bg-green-600 transition-colors duration-500 border-solid border-green-600 border-2 rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">More Detail</button>
                </div>
                </div>
            </div>
    
            <div class="shadow-xl rounded-md transition-colors duration-500 hover:bg-gray-200 dark:shadow-slate-500 dark:hover:bg-slate-800 dark:shadow-md">
                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg" alt="" class="rounded-t-md">
                <div class="px-2">
                    <h1 class="font-bold text-1xl ">Begin your Tai Cai journey: Traditional</h1>
                <div class="flex mt-2">
                    <div>
                        <svg class="w-6 h-6 dark:text-white mr-4" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="text-red-600 font-bold">: Sun, Apr 9, 2023 </div>
                </div>
                <div class="flex mt-2">
                    <div>
                        <svg class="w-6 h-6 dark:text-white mr-4" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="font-bold">: Online</div>
                </div>
                <div class="flex">
                    <h1 class="text-red-600">Organizer: </h1>
                    <span class="ml-2">Smart Axiata</span>
                </div>
                <div class="flex place-content-center">
                    <button class="h-8 px-2 m-2 text-white bg-green-600 transition-colors duration-500 border-solid border-green-600 border-2 rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">More Detail</button>
                </div>
                </div>
            </div>
    
        </div>       
                <!-- pagination -->
                <div class="flex place-content-end items-end">
            <div class="bg-white p-4 flex items-center flex-wrap place-content-end dark:bg-black ">
                <nav aria-label="Page navigation">
                  <ul class="inline-flex">
                    <li><button class="px-4 py-2 text-green-600 transition-colors duration-150 bg-white border border-r-0 border-green-600 rounded-l-lg focus:shadow-outline hover:bg-green-100 dark:bg-black">Prev</button></li>
                    <li><button class="px-4 py-2 text-green-600 transition-colors duration-150 bg-white border border-r-0 border-green-600 focus:shadow-outline hover:bg-green-100 dark:bg-black">1</button></li>
                    <li><button class="px-4 py-2 text-white transition-colors duration-150 bg-green-600 border border-r-0 border-green-600 focus:shadow-outline">2</button></li>
                    <li><button class="px-4 py-2 text-green-600 transition-colors duration-150 bg-white border border-r-0 border-green-600 focus:shadow-outline hover:bg-green-100 dark:bg-black">3</button></li>
                    <li><button class="px-4 py-2 text-green-600 transition-colors duration-150 bg-white border border-green-600 rounded-r-lg focus:shadow-outline hover:bg-green-100 dark:bg-black">Next</button></li>
                  </ul>
                </nav>
              </div>
        </div>
        <!--end pagination  -->
    
    </div>
    <!-- End Technology -->

</div>
<script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
</body>
</html>