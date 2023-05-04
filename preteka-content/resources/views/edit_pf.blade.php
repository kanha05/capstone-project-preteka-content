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