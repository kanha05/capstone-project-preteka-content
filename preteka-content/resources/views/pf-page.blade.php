<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/f930ed931d.js" crossorigin="anonymous"></script>

</head>

<body class="font-poppins">
    <main>
        <section id="profile">
            <div class=" dark:text-white bg-white dark:bg-black ">
                <div class="moon cursor-pointer w-4">
                    <svg class=" moon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z">
                        </path>
                    </svg>
                </div>
                <div class="sun cursor-pointer w-4">
                    <svg class=" sun" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z">
                        </path>
                    </svg>
                </div>
                <!-- start Profile header -->
                <div>
                    <!-- Profiile cover image -->
                    <div>
                        <img src="img/pf-cover1.jpg" class=" w-screen">
                    </div>
                    <div class=" flex w-full">
                        <!-- Profile image -->
                        <div>
                            <img src="img/pf1.png" alt="#"
                                class=" lg:w-32 md:w-40 w-56 rounded-full outline outline-black object-cover -mt-12 lg:-mt-20  mx-6">
                        </div>
                        <div class=" pl-10">
                            <!-- Username -->
                            <h1 class=" font-bold lg:text-5xl md:text-3xl sm: text-2xl font-poppins"> @Kanha23</h1>
                            <!-- Profile bio -->
                            <p class=" break-words lg:text-base md:text-sm text-sm text-slate-700 dark:text-slate-400">
                                Be the brightest star. Your time is limited, so don't waste it
                                living someone
                                else's life. Don't be trapped by dogma – which is living with the results of
                                other people's thinking. -Steve Jobs</p>
                        </div>
                    </div>
                    <div class=" flex flex-row-reverse">
                        <!-- Edit account -->
                        <div>
                            <button
                                class=" rounded-md outline outline-green-500 lg:w-36 lg:h-9 w-24 h-7 m-1 text-xs lg:text-sm">
                                Edit profile </button>
                        </div>

                        <!-- Upload the new event -->
                        <div>
                            <button
                                class=" rounded-md outline outline-green-500 bg-green-500 lg:w-36 lg:h-9 w-24 h-7 m-1 hover:bg-green-700 text-xs lg:text-sm">
                                Upload new event</button>
                        </div>

                    </div>
                </div>
                <!-- End pf header -->

                <!-- start pf body -->
                <div class=" lg:flex ">
                    <!-- sart left container  -->
                    <div class=" lg:w-1/3 m-3">
                        <!-- start Into -->
                        <div class=" border border-green-500">
                            <h1 class=" font-bold lg:text-3xl text-center text-2xl m-3">Intro</h1>
                            <div class=" flex m-3">

                                <svg class=" w-8" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5">
                                    </path>
                                </svg>
                                <p class=" pl-3 text-sm lg:text-base">Studies Computer Science at Cambodia Academy of
                                    Digital Technology -
                                    CADT</p>

                            </div>
                            <div class=" flex m-3">
                                <svg class=" w-8" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z">
                                    </path>
                                </svg>
                                <p class=" pl-3 text-sm lg:text-base">Work at ABA bank</p>

                            </div>
                            <div class=" flex m-3">
                                <svg class=" w-8" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75">
                                    </path>
                                </svg>
                                <p class=" pl-3 text-sm lg:text-base">Kanhasongeam@gmail.com</p>

                            </div>

                        </div>
                        <!-- end intro -->

                        <!-- start reminder -->
                        <div class=" border border-green-500">
                            <h1 class="font-bold text-3xl m-3">Event Reminder</h1>
                        </div>
                        <!-- end reminder -->

                    </div>

                    <!-- end left container -->

                    <!-- start right container -->
                    <div class=" lg:w-2/3 border border-green-500 m-3">
                        <!-- start event post header -->
                        <div class=" flex">
                            <div>
                                <h1 class=" font-bold text-3xl m-3">Event</h1>
                            </div>
                    
                            <div class=" flex flex-row-reverse">

                                <button class="btn-back-to-top">
                                    <svg class=" w-8 " fill="none" stroke="currentColor" stroke-width="1.5"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 15.75l7.5-7.5 7.5 7.5"></path>
                                    </svg>
                                </button>

                                <button>
                                <svg class=" w-8" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75">
                                    </path>
                                </svg>
                                </button>

                                <svg class=" w-8" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25">
                                    </path>
                                </svg>
                            </div>

                        </div>
                        <!-- end event post header -->
                        <hr class="h-px my-0.5 bg-green-500 border-0">

                        <!-- start event post container -->
                        <div class=" m-4 p-3 border border-gray-500 shadow-slate-400 ">

                            <div class=" flex">
                                <div>
                                    <img src="img/pf1.png" alt="#"
                                        class=" w-16 rounded-full outline outline-gray-200 object-cover mx-3 mb-3">
                                </div>
                                <div class=" pl-2">
                                    <!-- Username -->
                                    <h1 class=" font-bold lg:text-xl md:text-md text-sm"> @Kanha23</h1>
                                    <!-- date -->
                                    <p class=" text-gray-400 font-light "> April, 26 2023</p>


                                </div>
                                <svg class=" w-8 " fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z">
                                    </path>
                                </svg>

                            </div>

                            <!--  -->
                            <div class="lg:flex md:flex space-x-4">
                                <!-- event poster -->
                                <div class=" lg:basis-1/2 md:basis-1/2 ">
                                    <img src="img/event-poster1.jpg">

                                </div>
                                <!--  -->
                                <!-- event post info -->
                                <div class=" lg:basis-1/2 md:basis-1/2">
                                    <!-- title -->
                                    <p class=" font-bold text-lg">Explore, learn how to start technology company</p>
                                    <!-- description -->
                                    <p class=" text-sm line-clamp-2">At Innovation Festival you will learn and connect
                                        with experienced researchers, developers, and industry leaders in a
                                        community-based way.</p>

                                    <div >
                                        <div class=" flex ">
                                            <svg class="w-6 md:w-7 lg:w-8 lg:m-2 md:m-2 m-1" fill="none"
                                                stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5">
                                                </path>
                                            </svg>
                                            <p
                                                class=" text-red-500 font-semibold md:text-sm text-xs mt-2 md:mt-4 lg:mt-4">
                                                : Sun, Apr 9, 2023 10:00 PM +07 + 1 more event
                                            </p>
                                        </div>

                                        <div class=" flex">
                                            <svg class=" w-6 md:w-7 lg:w-8 lg:m-2 md:m-2 m-1" fill="none"
                                                stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z">
                                                </path>
                                            </svg>
                                            <p class=" text-xs md:text-sm font-normal mt-2 md:mt-4 lg:mt-4">: online</p>
                                        </div>

                                        <div class=" flex">
                                            <svg class=" w-6 md:w-7 lg:w-8 lg:m-2 md:m-2 m-1" fill="none"
                                                stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z">
                                                </path>
                                            </svg>
                                            <p class=" text-xs md:text-sm font-normal mt-2 md:mt-4 lg:mt-4">: 100 seats
                                            </p>
                                        </div>

                                        <div class=" flex">
                                            <p class=" font-semibold text-xs md:text-sm lg:text-base m-1">Agenda</p>
                                            <a href="#"
                                                class=" hover:text-green-500 text-xs md:text-sm lg:text-base m-1">:
                                                www.djfskaljfk.pdf</a>

                                        </div>

                                        <div class=" flex m-3">
                                            <p class=" font-semibold text-xs md:text-sm lg:text-base m-1 ">Price: </p>
                                            <p class=" font-bold text-red-600 text-sm md:text-sm lg:text-base m-1"> $0.00</p>
                                            <div class=" pl-8">
                                             <button
                                                class=" text-center align-middle outline outline-green-500 bg-green-500 w-20 h-5 hover:bg-green-700 text-xs lg:text-sm">Register</button>
                                             </div>

                                        </div>
                                        <!-- <div class=" pl-10 mb-3">
                                            <button
                                                class=" text-center align-middle outline outline-green-500 bg-green-500 w-20 h-5 hover:bg-green-700 text-xs lg:text-sm">Register</button>
                                        </div> -->

                                        <div class=" flex">
                                            <p class=" font-light text-sm ">Rate </p>

                                            <svg class=" lg:w-5 w-4" fill="none" stroke="currentColor"
                                                stroke-width="1.5" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z">
                                                </path>
                                            </svg>
                                            <svg class=" lg:w-5 w-4" fill="none" stroke="currentColor"
                                                stroke-width="1.5" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z">
                                                </path>
                                            </svg>
                                            <svg class=" lg:w-5 w-4" fill="none" stroke="currentColor"
                                                stroke-width="1.5" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z">
                                                </path>
                                            </svg>
                                            <svg class=" lg:w-5 w-4" fill="none" stroke="currentColor"
                                                stroke-width="1.5" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z">
                                                </path>
                                            </svg>
                                            <svg class=" lg:w-5 w-4" fill="none" stroke="currentColor"
                                                stroke-width="1.5" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z">
                                                </path>
                                            </svg>
                                            <div class=" flex justify-items-end">
                                                <button>
                                                    <svg class=" lg:w-5 w-4 hover:fill-green-500" fill="none"
                                                        stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155">
                                                        </path>
                                                    </svg>
                                                </button>

                                                <button>
                                                    <svg class=" lg:w-5 w-4 hover:fill-green-500" fill="none"
                                                        stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <!--  -->
                        </div>


                        <!-- end event post container -->

                        <!-- start event post container -->
                        <div class=" m-4 p-3 border border-gray-500 shadow-slate-400 ">

                            <div class=" flex">
                                <div>
                                    <img src="img/pf1.png" alt="#"
                                        class=" w-16 rounded-full outline outline-gray-200 object-cover mx-3 mb-3">
                                </div>
                                <div class=" pl-2">
                                    <!-- Username -->
                                    <h1 class=" font-bold lg:text-xl md:text-md text-sm"> @Kanha23</h1>
                                    <!-- date -->
                                    <p class=" text-gray-400 font-light"> April, 26 2023</p>


                                </div>
                                <svg class=" w-8 " fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z">
                                    </path>
                                </svg>

                            </div>

                            <!--  -->
                            <div class="flex flex-row space-x-4">
                                <!-- event poster -->
                                <div class=" basis-1/2 ">
                                    <img src="img/event-poster1.jpg">

                                </div>
                                <!--  -->
                                <!-- event post info -->
                                <div class=" basis-1/2">
                                    <p class=" font-semibold text-sm lg:text-base">Explore, learn how to start
                                        technology company</p>
                                    <div class=" flex">
                                        <svg class=" w-8" fill="none" stroke="currentColor" stroke-width="1.5"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5">
                                            </path>
                                        </svg>
                                        <p class=" font-sans text-xs mt-2">:Sun, Apr 9, 2023 10:00 PM +07 + 1 more event
                                        </p>
                                    </div>

                                    <div class=" flex">
                                        <svg class=" w-8" fill="none" stroke="currentColor" stroke-width="1.5"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z">
                                            </path>
                                        </svg>
                                        <p class=" font-sans text-xs mt-2">: online</p>
                                    </div>

                                    <div class=" flex">
                                        <svg class=" w-8" fill="none" stroke="currentColor" stroke-width="1.5"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z">
                                            </path>
                                        </svg>
                                        <p class=" font-sans text-xs mt-2">: 100 seats</p>
                                    </div>

                                    <div class=" flex">
                                        <p class=" font-semibold text-sm lg:text-base"> Agenda: </p>
                                        <a href="#"
                                            class=" hover:text-green-500 text-sm lg:text-base">www.djfskaljfk.pdf</a>

                                    </div>

                                    <div class=" flex">
                                        <p class=" font-semibold ">Price: </p>
                                        <p class=" font-bold text-red-600"> $0.00</p>
                                        <button
                                            class=" rounded-lg outline outline-green-500 w-16 h-5 mx-5 hover:bg-green-500 inline-block align-middle">Register</button>
                                    </div>

                                    <div class=" flex">
                                        <p class=" font-light text-sm ">Rate </p>

                                        <svg class=" w-5" fill="none" stroke="currentColor" stroke-width="1.5"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z">
                                            </path>
                                        </svg>
                                        <svg class=" w-5" fill="none" stroke="currentColor" stroke-width="1.5"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z">
                                            </path>
                                        </svg>
                                        <svg class=" w-5" fill="none" stroke="currentColor" stroke-width="1.5"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z">
                                            </path>
                                        </svg>
                                        <svg class=" w-5" fill="none" stroke="currentColor" stroke-width="1.5"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z">
                                            </path>
                                        </svg>
                                        <svg class=" w-5" fill="none" stroke="currentColor" stroke-width="1.5"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z">
                                            </path>
                                        </svg>
                                        <div>
                                            <button>
                                                <svg class=" w-5 hover:fill-green-500" fill="none" stroke="currentColor"
                                                    stroke-width="1.5" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155">
                                                    </path>
                                                </svg>
                                            </button>

                                            <button>
                                                <svg class=" w-5 hover:fill-green-500" fill="none" stroke="currentColor"
                                                    stroke-width="1.5" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <!--  -->
                        </div>


                        <!-- end event post container -->

                        <!-- start event post container -->
                        <div class=" m-4 p-3 border border-gray-500 shadow-slate-400 ">

                            <div class=" flex">
                                <div>
                                    <img src="img/pf1.png" alt="#"
                                        class=" w-16 rounded-full outline outline-gray-200 object-cover mx-3 mb-3">
                                </div>
                                <div class=" pl-2">
                                    <!-- Username -->
                                    <h1 class=" font-bold lg:text-xl md:text-md text-sm"> @Kanha23</h1>
                                    <!-- date -->
                                    <p class=" text-gray-400 font-light"> April, 26 2023</p>


                                </div>
                                <svg class=" w-8 " fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z">
                                    </path>
                                </svg>

                            </div>

                            <!--  -->
                            <div class="flex flex-row space-x-4">
                                <!-- event poster -->
                                <div class=" basis-1/2 ">
                                    <img src="img/event-poster1.jpg">

                                </div>
                                <!--  -->
                                <!-- event post info -->
                                <div class=" basis-1/2">
                                    <p class=" font-semibold text-sm lg:text-base">Explore, learn how to start
                                        technology company</p>
                                    <div class=" flex">
                                        <svg class=" w-8" fill="none" stroke="currentColor" stroke-width="1.5"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5">
                                            </path>
                                        </svg>
                                        <p class=" font-sans text-xs mt-2">:Sun, Apr 9, 2023 10:00 PM +07 + 1 more event
                                        </p>
                                    </div>

                                    <div class=" flex">
                                        <svg class=" w-8" fill="none" stroke="currentColor" stroke-width="1.5"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z">
                                            </path>
                                        </svg>
                                        <p class=" font-sans text-xs mt-2">: online</p>
                                    </div>

                                    <div class=" flex">
                                        <svg class=" w-8" fill="none" stroke="currentColor" stroke-width="1.5"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z">
                                            </path>
                                        </svg>
                                        <p class=" font-sans text-xs mt-2">: 100 seats</p>
                                    </div>

                                    <div class=" flex">
                                        <p class=" font-semibold text-sm lg:text-base"> Agenda: </p>
                                        <a href="#" class=" hover:text-green-500 text-sm lg:text-base">
                                            www.djfskaljfk.pdf</a>

                                    </div>

                                    <div class=" flex">
                                        <p class=" font-semibold ">Price: </p>
                                        <p class=" font-bold text-red-600"> $0.00</p>
                                        <button
                                            class=" rounded-lg outline outline-green-500 w-16 h-5 mx-5 hover:bg-green-500 inline-block align-middle">Register</button>
                                    </div>

                                    <div class=" flex">
                                        <p class=" font-light text-sm ">Rate </p>

                                        <svg class=" w-5" fill="none" stroke="currentColor" stroke-width="1.5"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z">
                                            </path>
                                        </svg>
                                        <svg class=" w-5" fill="none" stroke="currentColor" stroke-width="1.5"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z">
                                            </path>
                                        </svg>
                                        <svg class=" w-5" fill="none" stroke="currentColor" stroke-width="1.5"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z">
                                            </path>
                                        </svg>
                                        <svg class=" w-5" fill="none" stroke="currentColor" stroke-width="1.5"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z">
                                            </path>
                                        </svg>
                                        <svg class=" w-5" fill="none" stroke="currentColor" stroke-width="1.5"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z">
                                            </path>
                                        </svg>
                                        <div>
                                            <button>
                                                <svg class=" w-5 hover:fill-green-500" fill="none" stroke="currentColor"
                                                    stroke-width="1.5" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155">
                                                    </path>
                                                </svg>
                                            </button>

                                            <button>
                                                <svg class=" w-5 hover:fill-green-500" fill="none" stroke="currentColor"
                                                    stroke-width="1.5" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <!--  -->
                        </div>


                        <!-- end event post container -->

                        <!-- start event post container -->
                        <div class=" m-4 p-3 border border-gray-500 shadow-slate-400 ">

                            <div class=" flex">
                                <div>
                                    <img src="img/pf1.png" alt="#"
                                        class=" w-16 rounded-full outline outline-gray-200 object-cover mx-3 mb-3">
                                </div>
                                <div class=" pl-2">
                                    <!-- Username -->
                                    <h1 class=" font-bold lg:text-xl md:text-md text-sm"> @Kanha23</h1>
                                    <!-- date -->
                                    <p class=" text-gray-400 font-light"> April, 26 2023</p>


                                </div>
                                <svg class=" w-8 " fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z">
                                    </path>
                                </svg>

                            </div>

                            <!--  -->
                            <div class="flex flex-row space-x-4">
                                <!-- event poster -->
                                <div class=" basis-1/2 ">
                                    <img src="img/event-poster1.jpg">

                                </div>
                                <!--  -->
                                <!-- event post info -->
                                <div class=" basis-1/2">
                                    <p class=" font-semibold text-sm lg:text-base">Explore, learn how to start
                                        technology company</p>
                                    <div class=" flex">
                                        <svg class=" w-8" fill="none" stroke="currentColor" stroke-width="1.5"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5">
                                            </path>
                                        </svg>
                                        <p class=" font-sans text-xs mt-2">:Sun, Apr 9, 2023 10:00 PM +07 + 1 more event
                                        </p>
                                    </div>

                                    <div class=" flex">
                                        <svg class=" w-8" fill="none" stroke="currentColor" stroke-width="1.5"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z">
                                            </path>
                                        </svg>
                                        <p class=" font-sans text-xs mt-2">: online</p>
                                    </div>

                                    <div class=" flex">
                                        <svg class=" w-8" fill="none" stroke="currentColor" stroke-width="1.5"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z">
                                            </path>
                                        </svg>
                                        <p class=" font-sans text-xs mt-2">: 100 seats</p>
                                    </div>

                                    <div class=" flex">
                                        <p class=" font-semibold text-sm lg:text-base "> Agenda: </p>
                                        <a href="#"
                                            class=" hover:text-green-500 text-sm lg:text-base">www.djfskaljfk.pdf</a>

                                    </div>

                                    <div class=" flex">
                                        <p class=" font-semibold ">Price: </p>
                                        <p class=" font-bold text-red-600"> $0.00</p>
                                        <button
                                            class=" rounded-lg outline outline-green-500 w-16 h-5 mx-5 hover:bg-green-500 inline-block align-middle">Register</button>
                                    </div>

                                    <div class=" flex">
                                        <p class=" font-light text-sm ">Rate </p>

                                        <svg class=" w-5" fill="none" stroke="currentColor" stroke-width="1.5"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z">
                                            </path>
                                        </svg>
                                        <svg class=" w-5" fill="none" stroke="currentColor" stroke-width="1.5"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z">
                                            </path>
                                        </svg>
                                        <svg class=" w-5" fill="none" stroke="currentColor" stroke-width="1.5"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z">
                                            </path>
                                        </svg>
                                        <svg class=" w-5" fill="none" stroke="currentColor" stroke-width="1.5"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z">
                                            </path>
                                        </svg>
                                        <svg class=" w-5" fill="none" stroke="currentColor" stroke-width="1.5"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z">
                                            </path>
                                        </svg>
                                        <div>
                                            <button>
                                                <svg class=" w-5 hover:fill-green-500" fill="none" stroke="currentColor"
                                                    stroke-width="1.5" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155">
                                                    </path>
                                                </svg>
                                            </button>

                                            <button>
                                                <svg class=" w-5 hover:fill-green-500" fill="none" stroke="currentColor"
                                                    stroke-width="1.5" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <!--  -->
                        </div>


                        <!-- end event post container -->

                        <!-- start event post container -->
                        <div class=" m-4 p-3 border border-gray-500 shadow-slate-400 ">

                            <div class=" flex">
                                <div>
                                    <img src="img/pf1.png" alt="#"
                                        class=" w-16 rounded-full outline outline-gray-200 object-cover mx-3 mb-3">
                                </div>
                                <div class=" pl-2">
                                    <!-- Username -->
                                    <h1 class=" font-bold lg:text-xl md:text-md text-sm"> @Kanha23</h1>
                                    <!-- date -->
                                    <p class=" text-gray-400 font-light"> April, 26 2023</p>


                                </div>
                                <svg class=" w-8 " fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z">
                                    </path>
                                </svg>

                            </div>

                            <!--  -->
                            <div class="flex flex-row space-x-4">
                                <!-- event poster -->
                                <div class=" basis-1/2 ">
                                    <img src="img/event-poster1.jpg">

                                </div>
                                <!--  -->
                                <!-- event post info -->
                                <div class=" basis-1/2">
                                    <p class=" font-semibold text-sm lg:text-base">Explore, learn how to start
                                        technology company</p>
                                    <div class=" flex">
                                        <svg class=" w-8" fill="none" stroke="currentColor" stroke-width="1.5"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5">
                                            </path>
                                        </svg>
                                        <p class=" font-sans text-xs mt-2">:Sun, Apr 9, 2023 10:00 PM +07 + 1 more event
                                        </p>
                                    </div>

                                    <div class=" flex">
                                        <svg class=" w-8" fill="none" stroke="currentColor" stroke-width="1.5"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z">
                                            </path>
                                        </svg>
                                        <p class=" font-sans text-xs mt-2">: online</p>
                                    </div>

                                    <div class=" flex">
                                        <svg class=" w-8" fill="none" stroke="currentColor" stroke-width="1.5"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z">
                                            </path>
                                        </svg>
                                        <p class=" font-sans text-xs mt-2">: 100 seats</p>
                                    </div>

                                    <div class=" flex">
                                        <p class=" font-semibold text-sm lg:text-base"> Agenda: </p>
                                        <a href="#"
                                            class=" hover:text-green-500 text-sm lg:text-base">www.djfskaljfk.pdf</a>

                                    </div>

                                    <div class=" flex">
                                        <p class=" font-semibold ">Price: </p>
                                        <p class=" font-bold text-red-600"> $0.00</p>
                                        <button
                                            class=" rounded-lg outline outline-green-500 w-16 h-5 mx-5 hover:bg-green-500 inline-block align-middle">Register</button>
                                    </div>

                                    <div class=" flex">
                                        <p class=" font-light text-sm ">Rate </p>

                                        <svg class=" w-5" fill="none" stroke="currentColor" stroke-width="1.5"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z">
                                            </path>
                                        </svg>
                                        <svg class=" w-5" fill="none" stroke="currentColor" stroke-width="1.5"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z">
                                            </path>
                                        </svg>
                                        <svg class=" w-5" fill="none" stroke="currentColor" stroke-width="1.5"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z">
                                            </path>
                                        </svg>
                                        <svg class=" w-5" fill="none" stroke="currentColor" stroke-width="1.5"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z">
                                            </path>
                                        </svg>
                                        <svg class=" w-5" fill="none" stroke="currentColor" stroke-width="1.5"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z">
                                            </path>
                                        </svg>
                                        <div>
                                            <button>
                                                <svg class=" w-5 hover:fill-green-500" fill="none" stroke="currentColor"
                                                    stroke-width="1.5" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155">
                                                    </path>
                                                </svg>
                                            </button>

                                            <button>
                                                <svg class=" w-5 hover:fill-green-500" fill="none" stroke="currentColor"
                                                    stroke-width="1.5" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <!--  -->
                        </div>


                        <!-- end event post container -->







                        <!-- end event post -->

                    </div>
                    <!-- end right container -->

                </div>


            </div>

        </section>
    </main>
    <script>
    let mybutton = document.getElementByClass("btn-back-to-top");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    // When the user clicks on the button, scroll to the top of the document
    mybutton.addEventListener("click", backToTop);

    function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    </script>
</body>

</html>