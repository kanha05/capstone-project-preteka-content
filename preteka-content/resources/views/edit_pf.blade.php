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

        <div class="w-full lg:h-screen md:overflow-auto lg:px-10 md:px-10 sm:px-10 ">
            <div class=" lg:overflow-auto md:overflow-auto flex   border-t-2 border-gray-400  ">
                <div class="grid grid-rows-2 gap-5 w-full ">


                    <div class=" ">
                        
                        <img class=" inset-0 w-full lg:h-80 md:h-72 sm:h-60 h-52 object-cover" src="img/layout-cover.jpg" alt="">
                    </div>
                    <div class=" h-12 flex justify-center">
                    
                        <img src="img/pf1.png" alt="#"
                            class=" lg:w-56 lg:h-56 md:w-40 md:h-40 sm:h-28  sm:w-28 h-24 w-24 rounded-full outline outline-black object-cover sm:-mt-20 -mt-16 lg:-mt-32 md:-mt-24  ">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            class="w-10 mr-20 relative"
                            viewBox="0 0 128 128">
                                <path d="M 79.335938 15.667969 C 78.064453 15.622266 76.775 15.762109 75.5 16.099609 C 72.1 16.999609 69.299609 19.199219 67.599609 22.199219 L 64 28.699219 C 63.2 30.099219 63.699609 32.000781 65.099609 32.800781 L 82.400391 42.800781 C 82.900391 43.100781 83.400391 43.199219 83.900391 43.199219 C 84.200391 43.199219 84.399219 43.199609 84.699219 43.099609 C 85.499219 42.899609 86.1 42.399219 86.5 41.699219 L 90.199219 35.199219 C 91.899219 32.199219 92.4 28.700781 91.5 25.300781 C 90.6 21.900781 88.400391 19.100391 85.400391 17.400391 C 83.525391 16.337891 81.455078 15.744141 79.335938 15.667969 z M 60.097656 38.126953 C 59.128906 38.201172 58.199219 38.724609 57.699219 39.599609 L 27.5 92 C 24.1 97.8 22.200781 104.30039 21.800781 110.90039 L 21 123.80078 C 20.9 124.90078 21.5 125.99961 22.5 126.59961 C 23 126.89961 23.5 127 24 127 C 24.6 127 25.199219 126.8 25.699219 126.5 L 36.5 119.40039 C 42 115.70039 46.7 110.8 50 105 L 80.300781 52.599609 C 81.100781 51.199609 80.599219 49.3 79.199219 48.5 C 77.799219 47.7 75.899609 48.199609 75.099609 49.599609 L 44.800781 102 C 41.900781 106.9 37.899609 111.20039 33.099609 114.40039 L 27.300781 118.19922 L 27.699219 111.30078 C 27.999219 105.60078 29.699609 100 32.599609 95 L 62.900391 42.599609 C 63.700391 41.199609 63.200781 39.3 61.800781 38.5 C 61.275781 38.2 60.678906 38.082422 60.097656 38.126953 z M 49 121 C 47.3 121 46 122.3 46 124 C 46 125.7 47.3 127 49 127 L 89 127 C 90.7 127 92 125.7 92 124 C 92 122.3 90.7 121 89 121 L 49 121 z M 104 121 A 3 3 0 0 0 101 124 A 3 3 0 0 0 104 127 A 3 3 0 0 0 107 124 A 3 3 0 0 0 104 121 z"></path>
                            </svg>
                     
                    </div>


                    {{-- basic info --}}
                    <div class="grow  bg-neutral-50 drop-shadow-2xl  border-t-2  bg   px-[100px] w-full grid-rows-3 lg:-mt-[200px] md:-mt-[200px] sm:-mt-[190px] -mt-[180px]">
                        <div class=" flex justify-center">
                            <h1 class=" font-bold lg:text-4xl mg:text-3xl sm:text-2xl  text-1xl py-4">Edit profile</h1>
                        </div>
                        <div class="grid grow drop-shadow-lg  bg-white lg:grid-cols-2  lg:flex">
                            <div class="lg:w-1/2 md:full drop-shadow-lg bg-black-200 grid grid-rows-6  p-4 ">

                                <div class=" grid grid-rows-2 ">
                                    <div class="  ">
                                       <h1 class=" font-bold lg:text-3xl mg:text-3xl sm:text-2xl  text-1xl ">Basic info</h1> 
                                    </div>
                                    <div class="  text-gray-600 ">
                                        <p class="lg:text-base md:text-base sm:text-base text-sm">Edit details about yourself to make it unique.</p>
                                    </div>
                                </div>

                                <div class="  ">
                                    <h1 class=" text-gray-600  lg:text-1xl md:text-lg text-md font-bold">Username</h1>
                                    <input class="mt-2 hover:border-green-600 focus:ring-green-600 focus:border-green-600  lg:p-2 md:p-2  p-1 flix items-center w-full lg:text-lg md:text-base lg:placeholder:text-lg placeholder:text-base border-2" type="text" placeholder="Username" >
                                   
                                </div>

                                <div class=" mt-2">
                                    <h1 class=" text-gray-600  lg:text-1xl md:text-lg text-md font-bold">Date of Birth
                                    <input class="mt-2 hover:border-green-600 focus:ring-green-600 focus:border-green-600  lg:p-2 md:p-2  p-1 flix items-center w-full lg:text-lg md:text-base lg:placeholder:text-lg placeholder:text-base border-2" type="date" placeholder="Date of Birth" >
                                   
                                </div>
                                <div class=" mt-2">
                                    <h1 class=" text-gray-600  lg:text-1xl md:text-lg text-md font-bold">Education</h1>
                                    <input class="mt-2 hover:border-green-600 focus:ring-green-600 focus:border-green-600  lg:p-2 md:p-2  p-1 flix items-center w-full lg:text-lg md:text-base lg:placeholder:text-lg placeholder:text-base border-2" type="text" placeholder="Education" >
                                   
                                </div>
                                <div class=" mt-2">
                                    <h1 class=" text-gray-600  lg:text-1xl md:text-lg text-md font-bold">Work</h1>
                                    <input class="mt-2 hover:border-green-600 focus:ring-green-600 focus:border-green-600  lg:p-2 md:p-2  p-1 flix items-center w-full lg:text-lg md:text-base lg:placeholder:text-lg placeholder:text-base border-2" type="text" placeholder="Work" >
                                   
                                </div>
                                <div class=" mt-2">
                                    <h1 class=" text-gray-600  lg:text-1xl md:text-lg text-md font-bold">Bio</h1>
                                    <input class="mt-2 hover:border-green-600 focus:ring-green-600 focus:border-green-600  lg:p-2 md:p-2  p-1 flix items-center w-full lg:text-lg md:text-base lg:placeholder:text-lg placeholder:text-base border-2" type="text" placeholder="Bio" >
                                   
                                </div>
                            </div>
                            <div class="lg:w-1/2 md:full drop-shadow-lg bg-black-200 grid grid-rows-6  p-4 ">
                                <div class=" grid grid-rows-2 ">
                                    <div class="  ">
                                       <h1 class=" font-bold lg:text-3xl mg:text-3xl sm:text-2xl  text-1xl ">Contact</h1> 
                                    </div>
                                    <div class="  text-gray-600 ">
                                        <p class="lg:text-base md:text-base sm:text-base text-sm">Edit details about yourself to make it unique.</p>
                                    </div>
                                </div>

                                <div class="  ">
                                    <h1 class=" text-gray-600  lg:text-1xl md:text-lg text-md font-bold">Facebook</h1>
                                    <input class="mt-2 hover:border-green-600 focus:ring-green-600 focus:border-green-600  lg:p-2 md:p-2  p-1 flix items-center w-full lg:text-lg md:text-base lg:placeholder:text-lg placeholder:text-base border-2" type="text" placeholder="Facebook" >
                                   
                                </div>

                                <div class=" mt-2">
                                    <h1 class=" text-gray-600  lg:text-1xl md:text-lg text-md font-bold">Instagram</h1>
                                    <input class="mt-2 hover:border-green-600 focus:ring-green-600 focus:border-green-600  lg:p-2 md:p-2  p-1 flix items-center w-full lg:text-lg md:text-base lg:placeholder:text-lg placeholder:text-base border-2" type="type" placeholder="Instagram" >
                                   
                                </div>
                                <div class=" mt-2">
                                    <h1 class=" text-gray-600  lg:text-1xl md:text-lg text-md font-bold">Telegram</h1>
                                    <input class="mt-2 hover:border-green-600 focus:ring-green-600 focus:border-green-600  lg:p-2 md:p-2  p-1 flix items-center w-full lg:text-lg md:text-base lg:placeholder:text-lg placeholder:text-base border-2" type="text" placeholder="Telegram" >
                                   
                                </div>
                                <div class=" mt-2">
                                    <h1 class=" text-gray-600  lg:text-1xl md:text-lg text-md font-bold">Link-in</h1>
                                    <input class="mt-2 hover:border-green-600 focus:ring-green-600 focus:border-green-600  lg:p-2 md:p-2  p-1 flix items-center w-full lg:text-lg md:text-base lg:placeholder:text-lg placeholder:text-base border-2" type="text" placeholder="Link-in" >
                                   
                                </div>
                                <div class=" mt-2">
                                    <h1 class=" text-gray-600  lg:text-1xl md:text-lg text-md font-bold">Phone number</h1>
                                    <input class="mt-2 hover:border-green-600 focus:ring-green-600 focus:border-green-600  lg:p-2 md:p-2  p-1 flix items-center w-full lg:text-lg md:text-base lg:placeholder:text-lg placeholder:text-base border-2" type="text" placeholder="Event Title" >
                                   
                                </div>
                            </div>

                        </div>

                        <div class="  flex justify-center">
                            <div class="flex justify-center p-5">
                                <button class="lg:px-10  py-2 md:px-7 px-7 lg:text-2xl md:text-1xl    sm:px-4  m-2 text-white bg-green-600 transition-colors duration-500 border-solid border-green-600 border-2 rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">Back</button>
                            </div>
                            <div class="flex item-center justify-center  p-5">
                                <button class="  lg:px-10   py-2 md:px-7 px-7 lg:text-2xl md:text-1xl  sm:px-4   m-2 text-white bg-green-600 transition-colors duration-500 border-solid border-green-600 border-2 rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">Edit</button>
                            </div>    
                        </div>   
                    </div>




                </div>
            </div>
        </div>
    </body>
    </html>