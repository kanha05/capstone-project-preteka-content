<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/charts.css/dist/charts.min.css">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Document</title>
</head>

<body class="dark:bg-black dark:text-white">
    <div>
        <!--Background opacity-->
        <div class="w-full md:h-96 sm:h-80 h-74 shadow-2xl overflow-hidden relative">
            <img class="absolute inset-0 w-screen md:h-96 sm:h-80 h-74 object-cover" src="img/layout-cover.jpg" alt="">
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            <div class="lg:flex md:flex flex justify-between relative ">
                <a href="./home"><img src="img/logo-use.png"
                        class=" lg:w-32 md:w-32 sm:w-24 w-20 lg:ml-10 md:ml-10 sm:ml-5 ml-1 " alt=""></a>
                <ul class="flex mt-5 lg:space-x-8 md:space-x-4 sm:pace-x-4 space-x-2">
                    <li class="  text-white hover:text-green-400 duration-100"><a href="./home"
                            class="font-semibold lg:text-xl md:text-sm  sm:text-xs text-xs duration-500 ">Home</a></li>
                    <li class=" text-white hover:text-green-400 duration-100"><a href="./event"
                            class="font-semibold lg:text-xl md:text-sm  sm:text-xs text-xs  duration-500">Events</a>
                    </li>
                    <li class=" text-white hover:text-green-400 duration-100"><a href="./aboutus"
                            class="font-semibold lg:text-xl md:text-sm  sm:text-xs  text-xs duration-500">About Us</a>
                    </li>
                    <li class=" text-white hover:text-green-400 duration-100"><a href="./contact"
                            class="font-semibold lg:text-xl md:text-sm  sm:text-xs text-xs duration-500">Contact Us</a>
                    </li>
                </ul>
                <div>
                    <div class="flex lg:space-x-5 md:space-x-3 sm:space-x-1 space-x-2 mt-5 ">
                        <img class=" md:w-6 md:h-6 sm:h-5 sm:w-5 h-4 w-4"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABj0lEQVR4nO1YwU7CQBDd/8AABzWe9NTqzWTrReLH8RFcSAWBhJvlIhztemjskq4XvdpEmnJes1WJtqR2sGFLnJe8pFmS9+Z1Z6YJhCAQ28eNM20NnOmLYv/27lK3DhiJ6WQmEzqzZ906YKxMP6lbZy2W5+ZebBl2bBlRbJnyO9PG6d+LcvCrjhHF1OwtLk4PCLh4aoTrTCOaNVZn0OJBOtQIl/SsVjjAx5tfL+YdH2WM1Rk0AFiHml1IgEzbfNFp1jPGTqMODgDWoeYbIECecUMOr0cr06E9kpNmY4MAcB1SRgB1zePWVWKoqJ69k81aaAzUKSWAGjRlrt6gonredIg9oE4pAXSSYABrR26AcSGrSIIBON6ArEQLtTv9Hyz7nGEAjjcgK91CDL8DArdQLnCIOxUf4vauf8gYbiGBW+h/z0AbAwjcQrnQvS7Zn2fAFwvdxbI0/aD4n7suD3raC+YZ2oUDPDw+HTIuXitQtFR0eRDee8F+4QBJG83nNdcXXa3t5CfeNrh4BAKBINvCO+WE9Ir/r6VFAAAAAElFTkSuQmCC">
                        <div class="moon cursor-pointer">
                            <svg class=" md:w-6 md:h-6 sm:h-5 sm:w-5 h-4 w-4  moon text-white" fill="none" stroke="currentColor"
                                stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z">
                                </path>
                            </svg>
                        </div>
                        <div class="sun cursor-pointer w-4">
                            <svg class=" md:w-6 md:h-6 sm:h-5 sm:w-5 h-4 w-4 sun" fill="none" stroke="currentColor"
                                stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z">
                                </path>
                            </svg>
                        </div>
                        <img class=" md:w-6 md:h-6 sm:h-5 sm:w-5 h-4 w-4"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADu0lEQVR4nO2ZOWgVURSGJ0kR3CJok8U1kkIFl0axMQkWaiJoKdgmMaU2Ka1FwX3BEJN0aaLiErVTUNDKBdEqLoVauIFi8V6MfnLwf3h5ee/NvZMXnWh+GBjmnvOfMzPnnnvuuVE0gxmkB8Au4BLwDPgEjOmy+6ca2xmlEcAC4Avx+AosjNIG4IAcvAVsAJYAs4DZut+oMcOBKE0A5gDv5NzmEnLNkvkAzI3SAmC/HLvnIXtXsvuiNABYAbyWU+0e8u2SNZ0Vf8LBGqABqM57Ph84oyxjeABUePBVSNZguqeNK0+mWjZrJut8I/DeySCWZUYtVIC3evYNGADqAnjrgEHpIq574nYzmdluTOq8ZY/HIvrsfGkXZnRlIgO/bKwC7hfgHZNNwyPLZknID4vgVe4XK2yagE26qpI679ipcvia8myZbcOhUNJ1wDjw3VJf9JfAr7T7XaG2NkTxmt78eAKj9cBeoB8Y0dWvZ3UJ+E7Ilyu+CuulkAmcmIs0me2LFcO4XqYh8INkpB//F4CzEj4XYGQL8NF58WGgC2jTZfcXgKyzErcG8PdK74yPsKUyw54A53MZ6jKwtITscuCqk2laPW3skc6oj3CPhN9YhRkju9j58kc8F7JK4KjzJxo8qlzzxdDjm9buSGEoRnbA+fKxzue9RO5PnI+RHZKc+VQZsgLnVsTdJSbXuGJ+ma/zeeGUEUfBZGG25cOX4BUZ6JSyhci8AuPdGh8Odd7huCiOrgJj85zw7EhqYLRY+rJfX8x4AH+3OPqKLKZ+E7eEgZciWV5g7KbGtk6Cf7s4rhcJY8OLcrzAhPgDbmhs2yT428QxUmSfYXielN83hPamMoSAjphJbLWN4UJC/43D2iyGzphJ3BlK7JNG65w0OmGOeNrIiqO2bGlUi4zvQmaFGVqU/BaZ3zasSi0YPiUWsqpylxINKgdQeVDp6fwxZ8tYX+5SIrSYa3WKuaulwklhk/vyptMyFcWcdRoMvT7kzkvk/kRWK2y3U053a8JmnS/v5XyScjqXvjJxv7dAOJ3XpCwGG+sL5K2XLz+ANb5KV2TwhK+hvOzUpZfJbSn7VFvVJuA7KV8uhyit1Ub6b2/qW5xN/ZpQ5UMpaqscTEI8S02luMbWqkk4v9qjsfUwUWMrsLU4OEWtxXeJW4t5NUmx5u7pMjR3T5Vo7k6owaa6vb4jsL3eGKUB0/qAo8ARU/O0O2LKO+S7rQO9pWrRz9Z9eg/5/oljVoMdYqtoe6LdVEbXRz1L70H3DP5X/AT6o5UN0rX/AgAAAABJRU5ErkJggg==">
                        <div class="dropdown">
                            <button class=" rounded inline-flex items-center">

                                <img class=" md:w-6 md:h-6 sm:h-5 sm:w-5 h-4 w-4"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAACX0lEQVR4nO2XTU8UQRCG54BeFBbDBdarAokHQeWMJMaLRtz/Akj0CHKAA8Fw5OMnaODEjmvikT+gcvPrZiAEZNUDPKbMu0lnme6eGTXGhDfpZNJvVXV1V1V3TZKc4X8CMAA8Al4Cb4GvGvadAlNA/99Y+BbQID/MwZt/YuFzwDJwIsO7wArwQKdxQcO+x4FVySCdZ0BH2cUvAa9k7AiYAbpy6HUBs0DTOY3uMjtvyMBnC0GJDVwH3svGa+B8EeVlKX4Eqhn8fTloCXio73sZclXgk2wtFUm4Ex37cAZvx+vDTIb8DYXj2L7zONAIGLOdG74DE0CfxqTm8JzEU3FpbPEBJ9tPJZyTlBMZnN0BhkYGVwH2xF8NOTAtoRUPb/E29GZwveIOPLpr4idDDqQSGvfw++L7PAln2Pfo1sTXQw7sSKg/4uCpXeiKNmxFwvsu5MCBhDo9/F0nCae066oW/yHujke3MxSiXA5IZiFQhvMBvVwO7ERCYHH8EnDAuNrvhCD1JaHVty4Tw3Ng1HmMbgMvxB177oJaKEfaa3m1bb7HqQBvGTmJaLI9bdy67w6JXkTAk9bOkwiADck+LnwRGfR8GmaduW3NjSYRAGOS3Xbm5qLH34J1MnqMmq3Hw2kyLiYRONm+6zxu35QbQzH9X1Ang57Sy0lJmK7zHC8WUexwQmENyUiJxYeAD7KRFm7NgG7Hiaae1EoOvYpibsduqBduydpOYsmp/z2V00Ng0HJCY1B1vu5ku+kslm5KXQDXgE3yI83V/RSF1bC6n7p+Rg413liJqUu6UtjwGZJ/iJ90ivkzFRnZFwAAAABJRU5ErkJggg==">
                            </button>
                            <ul class="dropdown-menu absolute hidden text-white bg-transparent ">
                                <li class=""><a
                                        class="rounded-t bg-transparent lg:text-sm md:text-xs text-xs hover:text-green-600  block whitespace-no-wrap"
                                        href="./pf-page">View profile</a></li>
                                <li class=""><a
                                        class="bg-transparent lg:text-sm md:text-xs text-xs hover:text-green-600  block whitespace-no-wrap"
                                        href="#">Edit profile</a></li>
                                <li class=""><a
                                        class="rounded-b bg-transparent lg:text-sm md:text-xs text-xs hover:text-green-600  block whitespace-no-wrap"
                                        href="#">Log out</a></li>
                            </ul>
                        </div>
                        <!-- <img class=" md:w-6 md:h-6 sm:h-5 sm:w-5 h-4 w-4"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAACX0lEQVR4nO2XTU8UQRCG54BeFBbDBdarAokHQeWMJMaLRtz/Akj0CHKAA8Fw5OMnaODEjmvikT+gcvPrZiAEZNUDPKbMu0lnme6eGTXGhDfpZNJvVXV1V1V3TZKc4X8CMAA8Al4Cb4GvGvadAlNA/99Y+BbQID/MwZt/YuFzwDJwIsO7wArwQKdxQcO+x4FVySCdZ0BH2cUvAa9k7AiYAbpy6HUBs0DTOY3uMjtvyMBnC0GJDVwH3svGa+B8EeVlKX4Eqhn8fTloCXio73sZclXgk2wtFUm4Ex37cAZvx+vDTIb8DYXj2L7zONAIGLOdG74DE0CfxqTm8JzEU3FpbPEBJ9tPJZyTlBMZnN0BhkYGVwH2xF8NOTAtoRUPb/E29GZwveIOPLpr4idDDqQSGvfw++L7PAln2Pfo1sTXQw7sSKg/4uCpXeiKNmxFwvsu5MCBhDo9/F0nCae066oW/yHujke3MxSiXA5IZiFQhvMBvVwO7ERCYHH8EnDAuNrvhCD1JaHVty4Tw3Ng1HmMbgMvxB177oJaKEfaa3m1bb7HqQBvGTmJaLI9bdy67w6JXkTAk9bOkwiADck+LnwRGfR8GmaduW3NjSYRAGOS3Xbm5qLH34J1MnqMmq3Hw2kyLiYRONm+6zxu35QbQzH9X1Ang57Sy0lJmK7zHC8WUexwQmENyUiJxYeAD7KRFm7NgG7Hiaae1EoOvYpibsduqBduydpOYsmp/z2V00Ng0HJCY1B1vu5ku+kslm5KXQDXgE3yI83V/RSF1bC6n7p+Rg413liJqUu6UtjwGZJ/iJ90ivkzFRnZFwAAAABJRU5ErkJggg==">
                     -->
                    </div>
                </div>
                <div class="flex md:ml-3 sm:ml-0.5 ml-0.5 mt-3">
                    <a href="detail"><button
                            class="md:h-8 h-6 sm:h-5 md:px-2 px-1 md:m-2 m-0.5 text-white md:text-sm sm:text-xs text-xs bg-green-600 transition-colors duration-500 border-solid border-green-600 border-2 rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">
                            Login</button></a>
                    <a href="detail"><button
                            class="md:h-8 h-6 sm:h-5 md:px-2 px-1 md:m-2 m-0.5 text-white md:text-sm sm:text-xs text-xs  transition-colors duration-500 border-solid border-green-600 border-2 rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">
                            Sign up</button></a>
                </div>

            </div>
            <!--Search-->
            <div class=" w-1/2 md:ml-32 sm:ml-24 lg:ml-36 ml-14">
                <form>
                    <div class="relative md:ml-36 sm:ml-24 lg:ml-44 ml-14">
                        <button class="inset-y-0 left-0 absolute flex items-center justify-center pl-3 px-4">
                            <svg aria-hidden="true"
                                class="lg:w-5 lg:h-5 w-3 h-3 text-gray-500 dark:text-gray-400 rounded-md" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>
                        <input type="search" id="default-search"
                            class="w-3/4 lg:h-15 md:h-8 sm:h-7 h-6 p-4 pl-10 lg:text-sm md:text-sm sm:text-xs text-xs text-gray-900 border border-green-600 rounded-md  focus:ring-blue-500 focus:border-blue-500 bg-transparent"
                            placeholder="Search for Events " required>
                    </div>
                </form>
            </div>
            <!-- <div class="relative mt-10"> -->
            <!-- <ul class="flex justify-center items-center -mt-20">
                    <li class="md:mx-10 my-4 md:my-0  text-white hover:text-green-400 duration-100"><a href="#"
                            class="font-semibold lg:text-2xl md:text-xl mx-5  sm:text-sm duration-500 ">Home</a></li>
                    <li class="md:mx-10 my-4 md:my-0 text-white hover:text-green-400 duration-100"><a href="#"
                            class="font-semibold lg:text-2xl md:text-xl mx-5 sm:text-sm  duration-500">Events</a></li>
                    <li class="md:mx-10 my-4 md:my-0 text-white hover:text-green-400 duration-100"><a href="#"
                            class="font-semibold lg:text-2xl md:text-xl mx-5 sm:text-sm duration-500">About Us</a></li>
                    <li class="md:mx-10 my-4 md:my-0 text-white hover:text-green-400 duration-100"><a href="#"
                            class="font-semibold lg:text-2xl md:text-xl mx-5 sm:text-sm duration-500">Contact Us</a>
                    </li>
                </ul> -->
            <!-- </div> -->
            <div class=" relative lg:mt-20 md:mt-12 sm:mt-5 mt-3 lg:ml-80 md:ml-60 sm:ml-44 ml-28">
                <p class="lg:text-3xl md:text-xl sm:text-lg text-lg text-center font-bold text-green-600 w-3/4">Welcome
                    to our
                    ព្រឹត្តិការណ៍-Content</p>
                <p class="lg:text-sm md:text-xs text-xs text-center text-white w-3/4">
                    Our website is created to provide user the best site to share and find many events in a bunch of
                    category which is considered as your source of
                    information about education source. Our website is created very special for people who are
                    passionate in gain more knowledge, improve their skills
                    and enjoy the moment of the event from any organization in Cambodia.
                </p>
            </div>

        </div>
    </div>
    <!--End Header-->
    @yield('content')
    <!--Footer-->
    <div class=" bg-green-400 m-auto items-center mt-5 ">
        <div>
            <h1 class="text-center text-3xl font-bold pt-5 text-white ">Our Partner</h1>
        </div>
        <div class="grid lg:grid-cols-5 grid-cols-3 mt-0  p-10   ">
            <a href="https://www.cadt.edu.kh/"><img src="../img/cadt.png" alt=""
                    class="w-20  lg:ml-20 ml-10  bg-white rounded-full"></a>
            <a href="http://rupp.edu.kh/"><img src="../img/rupp.png" alt="" class="w-20 lg:ml-20 ml-10"></a>
            <a href="https://www.aupp.edu.kh/"><img src="../img/aupp.png" alt=""
                    class="w-20 lg:ml-20 ml-10 bg-white rounded-full"></a>
            <a href="https://itc.edu.kh/"><img src="../img/itc.png" alt=""
                    class="w-20 lg:ml-20 ml-10 bg-white rounded-full"></a>
            <a href="https://paragoniu.edu.kh/"> <img src="../img/paragon.png" alt=""
                    class="w-28 h-20 lg:ml-20 ml-10 bg-white "></a>
        </div>
        <hr>
        <div class="m-auto items-center  grid md:grid-cols-4 grid-cols-2 text-white">
            <div class="space-y-5  lg:ml-10  ml-10 lg:mt-0 lg:mb-0 lg:mr-0 -mt-5 text-start  lg:pl-32">
                <h1 class="text-2xl font-bold ">Explore</h1>
                <ul class="lg:space-y-5 space-y-0">
                    <li><a href="./home">Home</a></li>
                    <li><a href="./event">Event</a></li>
                    <li><a href="./aboutus">About Us</a></li>
                    <li><a href="./contact">Contact Us</a></li>
                </ul>
            </div>
            <div class="m-5 space-y-5 text-start lg:pl-20">
                <h1 class="text-2xl font-bold">Quick link</h1>
                <ul class="lg:space-y-5 space-y-0">
                    <li><a href="./contact#location">Location</a></li>
                    <li><a href="./aboutus#team">Our Team</a></li>
                    <li><a href="./contact#getInTouch">Get in touch</a></li>
                    <li><a href="./home#today">Event Today</a></li>
                </ul>
            </div>
            <div class="space-y-5 lg:ml-0 ml-10 lg:mt-0 -mt-20  text-start lg:pl-20">
                <h1 class="text-2xl font-bold ">Categories</h1>
                <ul class="space-y-5">
                    <li><a href="./event#technology">Technology</a></li>
                    <li><a href="./event#entertainment">Entertainment</a></li>
                    <li><a href="./event#entertainment">Health Care</a></li>
                    <li><a href="./event#entertainment">Inspriration</a></li>
                </ul>
            </div>
            <div class="lg:mr-10 m-5 space-y-5 ">
                <h1 class="text-2xl font-bold">Contact Us</h1>
                <ul class="space-y-5 sm:spac">
                    <li class="flex">
                        <img class=" w-8 h-8 mr-5 "
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADT0lEQVR4nO2X3UsUURjGX4uCUrspqIuCNAW7CAqhIs/sWJa3WUT/QEnSdWaIsEFBUOiMVkJQF3UhhTflBxVIfmzknlmFJLsI6aI7Q8ywcs8R841zdlFbd2Z2Z7ezS8wDDwyz877n+c2ec2YGwJcvX77+G6EOO5BAPRJ4gRp8QgI/pWPH4txFrIHtkG/CU1CIGlxHAj9QA3TxPBIIYiVshXwQarAHCYynEDzRE6hBSW7DEyhFDb56CB8zgemcQeAxKEYNPnoOvwrxAXUoUg9A4FbG4bUViBtqw+uwCzVYcAj0HAnocnELV0E1atDjAPELj8BOdQAELjuEb3Koa3aAaFAHoMFLuzufQm2vTW2/mvSxEJ9tQuiutQE4blM7pRIg+fxPYTeJ715J1wGoEhKY8wxwGLbZAMyq/AdCSUNUQXUKtSdsAEJq0sdCtNiE6HGtJdBnU9ui8jmwGwks2SzG5rTBCSyJnsoAZJjY67Hdnt4rdxsdiqTFtLG/8yh6KQ0vATSozdqrhAa1ygHiEINZCB/KSXgJUAUkYwDi/vD7txBOc9s9fF9Ow0uAAJQjAeYBgKMOFZAPQg1u5v03gJPwKGyxfcFL7i/iOwFyqeAkbm4PL1YalNebFm991floeDlQ4BpeXPO68+GQqDEorxc9RC8loY1Rtt+grMmgLGRQtmhaHNd6oumSK8DEtYa/akyLY6wXGzHD7KoYI6uhg4gb2iLsnAidOHCi772dw7kzZbbhv9eV4P3QrGMPU5qNGBY7i4gFGYVvH4vuMy027D7gqp91D+NyYOP6qaNvwO6nAyn3MYUpH2yzoqWewneEoyWGxafTGjDuSPDKOoBIsDHtPqaEYDOt49GytAHknPQyoMXx7rt5nDl/YCW8OBbnvPYzKBvyArDgdUDhx/2TyE8W42JNIT7pfe+5jxlbEwtpAwjqzAblYruUzrSPYfE36QOMRvd6XQNZNWUzYjNJG2ANxEDuANiIOcrKIROJvdgIs7psTKmUpwxlQ+0Rdjrj50CiOsZYhWGxRglDGc9iYCb2fNFbjAEq9GAMN7Vb/JAZ5hcMyu+YlHXJpzXlU2LtGBb7ZlL2W1gcy/UkfpPXsC6T8tvx2oOil5LQvnz58gXZ1h8JC/UEAA50vAAAAABJRU5ErkJggg==">
                        <a
                            href="https://www.google.com/maps/place/Cambodia+Academy+of+Digital+Technology/@11.65306,104.911694,16z/data=!4m6!3m5!1s0x3109516bdea989b3:0x372d2c5e0e14b706!8m2!3d11.6530599!4d104.9116944!16s%2Fg%2F11byygmxw3?hl=en"><span
                                class="mr-5 justify-start text-sm ">Brige2, National Road 6A, Sanngkat Prek Leap, Khan
                                Chroy
                                Changva, Phnom
                                Penh</span></a>
                    </li>
                    <li class="flex">
                        <img class=" w-8 h-8 mr-5"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACBUlEQVR4nO2ZQUtUURTHf1NWguimcBqjIFpZLUNchtiuaCMGBkNg9RECP0G0s1aT38CFqJVGMYsKBmFa2ASWUZAErbQZioyo4MmF+zZDM75zH+++8+D94L8cmB/3vnvPORdyclLlKlAHfgCvgVEyxiGgAgRtaQEnyAj9wOp/JMKskAGGgI0uEmHKKKYIfIggYdIESijkMFCLKBFmGYXMCCXCXEcZW44iO8BxFPHTUcRkAUV8jCFicg0lLMQU2UQJt2OK/EIJg8C/GCJrKKIaQ6SsrdINHPIGOIAiCkDDQeQSCpkUSjxCKQXglUBkGsWcA/4IquAzKOaeYFXWgT6UcsT+wagyVfsblZwFdgUyi0APSrklPMXm7IGhkopQZhbFo6EXQpn7WlemCHxy2GYHUcgp4ItQZgnoRSHngW9CmWcd7hmzWjfsKPYv8N6WSN4YsbNgiUyjrQIY63JPPbaDQi+MA7+FMk1bmz2JOJ2Z8tm/SGUCh2+s5EPmosM2k6ZlZwqJcwHYTlgmAJ4CJ32U/l89yLTsYZMopx0uTZfU8TRWknSYLvmOxyeKhwmK1PDMTWE/E0TMZVJgWNhpBvvkASliWuC7goFG0OX4VdGBmiP6paPEW2AARZhma0K43d7ZfkglRugK8NyW8EGHmKP8GBnhqK2K5+2DkXkG/AzcsW12Tg4psAf86ZgqZsaVBAAAAABJRU5ErkJggg==">
                        <a href="+855 10283312"><span class="text-sm">010 283312</span></a>
                    </li>
                    <li class="flex">
                        <svg class=" mr-5 w-8 h-8" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            viewBox="0 0 48 48">
                            <path fill="#4caf50" d="M45,16.2l-5,2.75l-5,4.75L35,40h7c1.657,0,3-1.343,3-3V16.2z"></path>
                            <path fill="#1e88e5" d="M3,16.2l3.614,1.71L13,23.7V40H6c-1.657,0-3-1.343-3-3V16.2z"></path>
                            <polygon fill="#e53935"
                                points="35,11.2 24,19.45 13,11.2 12,17 13,23.7 24,31.95 35,23.7 36,17"></polygon>
                            <path fill="#c62828"
                                d="M3,12.298V16.2l10,7.5V11.2L9.876,8.859C9.132,8.301,8.228,8,7.298,8h0C4.924,8,3,9.924,3,12.298z">
                            </path>
                            <path fill="#fbc02d"
                                d="M45,12.298V16.2l-10,7.5V11.2l3.124-2.341C38.868,8.301,39.772,8,40.702,8h0 C43.076,8,45,9.924,45,12.298z">
                            </path>
                        </svg>
                        <span class="text-sm">preteke.content@gmail.com</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="lg:ml-20 flex space-x-2 ">
            <p class=" font-italic text-green-600 text-xs mx-2 mt-2">Follow us on </p>
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 48 48">
                    <path fill="#039be5" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z"></path>
                    <path fill="#fff"
                        d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z">
                    </path>
                </svg>
            </a>
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 48 48">
                    <path fill="#304ffe"
                        d="M41.67,13.48c-0.4,0.26-0.97,0.5-1.21,0.77c-0.09,0.09-0.14,0.19-0.12,0.29v1.03l-0.3,1.01l-0.3,1l-0.33,1.1 l-0.68,2.25l-0.66,2.22l-0.5,1.67c0,0.26-0.01,0.52-0.03,0.77c-0.07,0.96-0.27,1.88-0.59,2.74c-0.19,0.53-0.42,1.04-0.7,1.52 c-0.1,0.19-0.22,0.38-0.34,0.56c-0.4,0.63-0.88,1.21-1.41,1.72c-0.41,0.41-0.86,0.79-1.35,1.11c0,0,0,0-0.01,0 c-0.08,0.07-0.17,0.13-0.27,0.18c-0.31,0.21-0.64,0.39-0.98,0.55c-0.23,0.12-0.46,0.22-0.7,0.31c-0.05,0.03-0.11,0.05-0.16,0.07 c-0.57,0.27-1.23,0.45-1.89,0.54c-0.04,0.01-0.07,0.01-0.11,0.02c-0.4,0.07-0.79,0.13-1.19,0.16c-0.18,0.02-0.37,0.03-0.55,0.03 l-0.71-0.04l-3.42-0.18c0-0.01-0.01,0-0.01,0l-1.72-0.09c-0.13,0-0.27,0-0.4-0.01c-0.54-0.02-1.06-0.08-1.58-0.19 c-0.01,0-0.01,0-0.01,0c-0.95-0.18-1.86-0.5-2.71-0.93c-0.47-0.24-0.93-0.51-1.36-0.82c-0.18-0.13-0.35-0.27-0.52-0.42 c-0.48-0.4-0.91-0.83-1.31-1.27c-0.06-0.06-0.11-0.12-0.16-0.18c-0.06-0.06-0.12-0.13-0.17-0.19c-0.38-0.48-0.7-0.97-0.96-1.49 c-0.24-0.46-0.43-0.95-0.58-1.49c-0.06-0.19-0.11-0.37-0.15-0.57c-0.01-0.01-0.02-0.03-0.02-0.05c-0.1-0.41-0.19-0.84-0.24-1.27 c-0.06-0.33-0.09-0.66-0.09-1c-0.02-0.13-0.02-0.27-0.02-0.4l1.91-2.95l1.87-2.88l0.85-1.31l0.77-1.18l0.26-0.41v-1.03 c0.02-0.23,0.03-0.47,0.02-0.69c-0.01-0.7-0.15-1.38-0.38-2.03c-0.22-0.69-0.53-1.34-0.85-1.94c-0.38-0.69-0.78-1.31-1.11-1.87 C14,7.4,13.66,6.73,13.75,6.26C14.47,6.09,15.23,6,16,6h16c4.18,0,7.78,2.6,9.27,6.26C41.43,12.65,41.57,13.06,41.67,13.48z">
                    </path>
                    <path fill="#4928f4"
                        d="M42,16v0.27l-1.38,0.8l-0.88,0.51l-0.97,0.56l-1.94,1.13l-1.9,1.1l-1.94,1.12l-0.77,0.45 c0,0.48-0.12,0.92-0.34,1.32c-0.31,0.58-0.83,1.06-1.49,1.47c-0.67,0.41-1.49,0.74-2.41,0.98c0,0,0-0.01-0.01,0 c-3.56,0.92-8.42,0.5-10.78-1.26c-0.66-0.49-1.12-1.09-1.32-1.78c-0.06-0.23-0.09-0.48-0.09-0.73v-7.19 c0.01-0.15-0.09-0.3-0.27-0.45c-0.54-0.43-1.81-0.84-3.23-1.25c-1.11-0.31-2.3-0.62-3.3-0.92c-0.79-0.24-1.46-0.48-1.86-0.71 c0.18-0.35,0.39-0.7,0.61-1.03c1.4-2.05,3.54-3.56,6.02-4.13C14.47,6.09,15.23,6,16,6h10.8c5.37,0.94,10.32,3.13,14.47,6.26 c0.16,0.39,0.3,0.8,0.4,1.22c0.18,0.66,0.29,1.34,0.32,2.05C42,15.68,42,15.84,42,16z">
                    </path>
                    <path fill="#6200ea"
                        d="M42,16v4.41l-0.22,0.68l-0.75,2.33l-0.78,2.4l-0.41,1.28l-0.38,1.19l-0.37,1.13l-0.36,1.12l-0.19,0.59 l-0.25,0.78c0,0.76-0.02,1.43-0.07,2c-0.01,0.06-0.02,0.12-0.02,0.18c-0.06,0.53-0.14,0.98-0.27,1.36 c-0.01,0.06-0.03,0.12-0.05,0.17c-0.26,0.72-0.65,1.18-1.23,1.48c-0.14,0.08-0.3,0.14-0.47,0.2c-0.53,0.18-1.2,0.27-2.02,0.32 c-0.6,0.04-1.29,0.05-2.07,0.05H31.4l-1.19-0.05L30,37.61l-2.17-0.09l-2.2-0.09l-7.25-0.3l-1.88-0.08h-0.26 c-0.78-0.01-1.45-0.06-2.03-0.14c-0.84-0.13-1.49-0.35-1.98-0.68c-0.7-0.45-1.11-1.11-1.35-2.03c-0.06-0.22-0.11-0.45-0.14-0.7 c-0.1-0.58-0.15-1.25-0.18-2c0-0.15,0-0.3-0.01-0.46c-0.01-0.01,0-0.01,0-0.01v-0.58c-0.01-0.29-0.01-0.59-0.01-0.9l0.05-1.61 l0.03-1.15l0.04-1.34v-0.19l0.07-2.46l0.07-2.46l0.07-2.31l0.06-2.27l0.02-0.6c0-0.31-1.05-0.49-2.22-0.64 c-0.93-0.12-1.95-0.23-2.56-0.37c0.05-0.23,0.1-0.46,0.16-0.68c0.18-0.72,0.45-1.4,0.79-2.05c0.18-0.35,0.39-0.7,0.61-1.03 c2.16-0.95,4.41-1.69,6.76-2.17c2.06-0.43,4.21-0.66,6.43-0.66c7.36,0,14.16,2.49,19.54,6.69c0.52,0.4,1.03,0.83,1.53,1.28 C42,15.68,42,15.84,42,16z">
                    </path>
                    <path fill="#673ab7"
                        d="M42,18.37v4.54l-0.55,1.06l-1.05,2.05l-0.56,1.08l-0.51,0.99l-0.22,0.43c0,0.31,0,0.61-0.02,0.9 c0,0.43-0.02,0.84-0.05,1.22c-0.04,0.45-0.1,0.86-0.16,1.24c-0.15,0.79-0.36,1.47-0.66,2.03c-0.04,0.07-0.08,0.14-0.12,0.2 c-0.11,0.18-0.24,0.35-0.38,0.51c-0.18,0.22-0.38,0.41-0.61,0.57c-0.34,0.26-0.74,0.47-1.2,0.63c-0.57,0.21-1.23,0.35-2.01,0.43 c-0.51,0.05-1.07,0.08-1.68,0.08l-0.42,0.02l-2.08,0.12h-0.01L27.5,36.6l-2.25,0.13l-3.1,0.18l-3.77,0.22l-0.55,0.03 c-0.51,0-0.99-0.03-1.45-0.09c-0.05-0.01-0.09-0.02-0.14-0.02c-0.68-0.11-1.3-0.29-1.86-0.54c-0.68-0.3-1.27-0.7-1.77-1.18 c-0.44-0.43-0.82-0.92-1.13-1.47c-0.07-0.13-0.14-0.25-0.2-0.39c-0.3-0.59-0.54-1.25-0.72-1.97c-0.03-0.12-0.06-0.25-0.08-0.38 c-0.06-0.23-0.11-0.47-0.14-0.72c-0.11-0.64-0.17-1.32-0.2-2.03v-0.01c-0.01-0.29-0.02-0.57-0.02-0.87l-0.49-1.17l-0.07-0.18 L9.5,25.99L8.75,24.2l-0.12-0.29l-0.72-1.73l-0.8-1.93c0,0,0,0-0.01,0L6.29,18.3L6,17.59V16c0-0.63,0.06-1.25,0.17-1.85 c0.05-0.23,0.1-0.46,0.16-0.68c0.85-0.49,1.74-0.94,2.65-1.34c2.08-0.93,4.31-1.62,6.62-2.04c1.72-0.31,3.51-0.48,5.32-0.48 c7.31,0,13.94,2.65,19.12,6.97c0.2,0.16,0.39,0.32,0.58,0.49C41.09,17.48,41.55,17.91,42,18.37z">
                    </path>
                    <path fill="#8e24aa"
                        d="M42,21.35v5.14l-0.57,1.19l-1.08,2.25l-0.01,0.03c0,0.43-0.02,0.82-0.05,1.17c-0.1,1.15-0.38,1.88-0.84,2.33 c-0.33,0.34-0.74,0.53-1.25,0.63c-0.03,0.01-0.07,0.01-0.1,0.02c-0.16,0.03-0.33,0.05-0.51,0.05c-0.62,0.06-1.35,0.02-2.19-0.04 c-0.09,0-0.19-0.01-0.29-0.02c-0.61-0.04-1.26-0.08-1.98-0.11c-0.39-0.01-0.8-0.02-1.22-0.02h-0.02l-1.01,0.08h-0.01l-2.27,0.16 l-2.59,0.2l-0.38,0.03l-3.03,0.22l-1.57,0.12l-1.55,0.11c-0.27,0-0.53,0-0.79-0.01c0,0-0.01-0.01-0.01,0 c-1.13-0.02-2.14-0.09-3.04-0.26c-0.83-0.14-1.56-0.36-2.18-0.69c-0.64-0.31-1.17-0.75-1.6-1.31c-0.41-0.55-0.71-1.24-0.9-2.07 c0-0.01,0-0.01,0-0.01c-0.14-0.67-0.22-1.45-0.22-2.33l-0.15-0.27L9.7,26.35l-0.13-0.22L9.5,25.99l-0.93-1.65l-0.46-0.83 l-0.58-1.03l-1-1.79L6,19.75v-3.68c0.88-0.58,1.79-1.09,2.73-1.55c1.14-0.58,2.32-1.07,3.55-1.47c1.34-0.44,2.74-0.79,4.17-1.02 c1.45-0.24,2.94-0.36,4.47-0.36c6.8,0,13.04,2.43,17.85,6.47c0.22,0.17,0.43,0.36,0.64,0.54c0.84,0.75,1.64,1.56,2.37,2.41 C41.86,21.18,41.94,21.26,42,21.35z">
                    </path>
                    <path fill="#c2185b"
                        d="M42,24.71v7.23c-0.24-0.14-0.57-0.31-0.98-0.49c-0.22-0.11-0.47-0.22-0.73-0.32 c-0.38-0.17-0.79-0.33-1.25-0.49c-0.1-0.04-0.2-0.07-0.31-0.1c-0.18-0.07-0.37-0.13-0.56-0.19c-0.59-0.18-1.24-0.35-1.92-0.5 c-0.26-0.05-0.53-0.1-0.8-0.14c-0.87-0.15-1.8-0.24-2.77-0.25c-0.08-0.01-0.17-0.01-0.25-0.01l-2.57,0.02l-3.5,0.02h-0.01 l-7.49,0.06c-2.38,0-3.84,0.57-4.72,0.8c0,0-0.01,0-0.01,0.01c-0.93,0.24-1.22,0.09-1.3-1.54c-0.02-0.45-0.03-1.03-0.03-1.74 l-0.56-0.43l-0.98-0.74l-0.6-0.46l-0.12-0.09L8.88,24.1l-0.25-0.19l-0.52-0.4l-0.96-0.72L6,21.91v-3.4 c0.1-0.08,0.19-0.15,0.29-0.21c1.45-1,3-1.85,4.64-2.54c1.46-0.62,3-1.11,4.58-1.46c0.43-0.09,0.87-0.18,1.32-0.24 c1.33-0.23,2.7-0.34,4.09-0.34c6.01,0,11.53,2.09,15.91,5.55c0.66,0.52,1.3,1.07,1.9,1.66c0.82,0.78,1.59,1.61,2.3,2.49 c0.14,0.18,0.28,0.36,0.42,0.55C41.64,24.21,41.82,24.46,42,24.71z">
                    </path>
                    <path fill="#d81b60"
                        d="M42,28.72V32c0,0.65-0.06,1.29-0.18,1.91c-0.18,0.92-0.49,1.8-0.91,2.62c-0.22,0.05-0.47,0.05-0.75,0.01 c-0.63-0.11-1.37-0.44-2.17-0.87c-0.04-0.01-0.08-0.03-0.11-0.05c-0.25-0.13-0.51-0.27-0.77-0.43c-0.53-0.29-1.09-0.61-1.65-0.91 c-0.12-0.06-0.24-0.12-0.35-0.18c-0.64-0.33-1.3-0.63-1.96-0.86c0,0,0,0-0.01,0c-0.14-0.05-0.29-0.1-0.44-0.14 c-0.57-0.16-1.15-0.26-1.71-0.26l-1.1-0.32l-4.87-1.41c0,0,0,0-0.01,0l-2.99-0.87h-0.01l-1.3-0.38c-3.76,0-6.07,1.6-7.19,0.99 c-0.44-0.23-0.7-0.81-0.79-1.95c-0.03-0.32-0.04-0.68-0.04-1.1l-1.17-0.57l-0.05-0.02h-0.01l-0.84-0.42L9.7,26.35l-0.07-0.03 l-0.17-0.09L7.5,25.28L6,24.55v-3.43c0.17-0.15,0.35-0.29,0.53-0.43c0.19-0.15,0.38-0.29,0.57-0.44c0.01,0,0.01,0,0.01,0 c1.18-0.85,2.43-1.6,3.76-2.22c1.55-0.74,3.2-1.31,4.91-1.68c0.25-0.06,0.51-0.12,0.77-0.16c1.42-0.27,2.88-0.41,4.37-0.41 c5.27,0,10.11,1.71,14.01,4.59c1.13,0.84,2.18,1.77,3.14,2.78c0.79,0.83,1.52,1.73,2.18,2.67c0.05,0.07,0.1,0.14,0.15,0.2 c0.37,0.54,0.71,1.09,1.03,1.66C41.64,28.02,41.82,28.37,42,28.72z">
                    </path>
                    <path fill="#f50057"
                        d="M41.82,33.91c-0.18,0.92-0.49,1.8-0.91,2.62c-0.19,0.37-0.4,0.72-0.63,1.06c-0.14,0.21-0.29,0.41-0.44,0.6 c-0.36-0.14-0.89-0.34-1.54-0.56c0,0,0,0,0-0.01c-0.49-0.17-1.05-0.35-1.65-0.52c-0.17-0.05-0.34-0.1-0.52-0.15 c-0.71-0.19-1.45-0.36-2.17-0.46c-0.6-0.1-1.19-0.16-1.74-0.16l-0.46-0.13h-0.01l-2.42-0.7l-1.49-0.43l-1.66-0.48h-0.01l-0.54-0.15 l-6.53-1.88l-1.88-0.54l-1.4-0.33l-2.28-0.54l-0.28-0.07c0,0,0,0-0.01,0l-2.29-0.53c0-0.01,0-0.01,0-0.01l-0.41-0.09l-0.21-0.05 l-1.67-0.39l-0.19-0.05l-1.42-1.17L6,27.9v-4.08c0.37-0.36,0.75-0.7,1.15-1.03c0.12-0.11,0.25-0.21,0.38-0.31 c0.12-0.1,0.25-0.2,0.38-0.3c0.91-0.69,1.87-1.31,2.89-1.84c1.3-0.7,2.68-1.26,4.13-1.66c0.28-0.09,0.56-0.17,0.85-0.23 c1.64-0.41,3.36-0.62,5.14-0.62c4.47,0,8.63,1.35,12.07,3.66c1.71,1.15,3.25,2.53,4.55,4.1c0.66,0.79,1.26,1.62,1.79,2.5 c0.05,0.07,0.09,0.13,0.13,0.2c0.32,0.53,0.62,1.08,0.89,1.64c0.25,0.5,0.47,1,0.67,1.52C41.34,32.25,41.6,33.07,41.82,33.91z">
                    </path>
                    <path fill="#ff1744"
                        d="M40.28,37.59c-0.14,0.21-0.29,0.41-0.44,0.6c-0.44,0.55-0.92,1.05-1.46,1.49c-0.47,0.39-0.97,0.74-1.5,1.04 c-0.2-0.05-0.4-0.11-0.61-0.19c-0.66-0.23-1.35-0.61-1.99-1.01c-0.96-0.61-1.79-1.27-2.16-1.57c-0.14-0.12-0.21-0.18-0.21-0.18 l-1.7-0.15L30,37.6l-2.2-0.19l-2.28-0.2l-3.37-0.3l-5.34-0.47l-0.02-0.01l-1.88-0.91l-1.9-0.92l-1.53-0.74l-0.33-0.16l-0.41-0.2 l-1.42-0.69L7.43,31.9l-0.59-0.29L6,31.35v-4.47c0.47-0.56,0.97-1.09,1.5-1.6c0.34-0.32,0.7-0.64,1.07-0.94 c0.06-0.05,0.12-0.1,0.18-0.14c0.04-0.05,0.09-0.08,0.13-0.1c0.59-0.48,1.21-0.91,1.85-1.3c0.74-0.47,1.52-0.89,2.33-1.24 c0.87-0.39,1.78-0.72,2.72-0.97c1.63-0.46,3.36-0.7,5.14-0.7c4.08,0,7.85,1.24,10.96,3.37c1.99,1.36,3.71,3.08,5.07,5.07 c0.45,0.64,0.85,1.32,1.22,2.02c0.13,0.26,0.26,0.52,0.37,0.78c0.12,0.25,0.23,0.5,0.34,0.75c0.21,0.52,0.4,1.04,0.57,1.58 c0.32,1,0.56,2.02,0.71,3.08C40.21,36.89,40.25,37.24,40.28,37.59z">
                    </path>
                    <path fill="#ff5722"
                        d="M38.39,39.42c0,0.08,0,0.17-0.01,0.26c-0.47,0.39-0.97,0.74-1.5,1.04c-0.22,0.12-0.44,0.24-0.67,0.34 c-0.23,0.11-0.46,0.21-0.7,0.3c-0.34-0.18-0.8-0.4-1.29-0.61c-0.69-0.31-1.44-0.59-2.02-0.68c-0.14-0.03-0.27-0.04-0.39-0.04 l-1.64-0.21h-0.02l-2.04-0.27l-2.06-0.27l-0.96-0.12l-7.56-0.98c-0.49,0-1.01-0.03-1.55-0.1c-0.66-0.06-1.35-0.16-2.04-0.3 c-0.68-0.12-1.37-0.28-2.03-0.45c-0.69-0.16-1.37-0.35-2-0.53c-0.73-0.22-1.41-0.43-1.98-0.62c-0.47-0.15-0.87-0.29-1.18-0.4 c-0.18-0.43-0.33-0.88-0.44-1.34C6.1,33.66,6,32.84,6,32v-1.67c0.32-0.53,0.67-1.05,1.06-1.54c0.71-0.94,1.52-1.8,2.4-2.56 c0.03-0.04,0.07-0.07,0.1-0.09l0.01-0.01c0.31-0.28,0.63-0.53,0.97-0.77c0.04-0.04,0.08-0.07,0.12-0.1 c0.16-0.12,0.33-0.24,0.51-0.35c1.43-0.97,3.01-1.73,4.7-2.24c1.6-0.48,3.29-0.73,5.05-0.73c3.49,0,6.75,1.03,9.47,2.79 c2.01,1.29,3.74,2.99,5.06,4.98c0.16,0.23,0.31,0.46,0.46,0.7c0.69,1.17,1.26,2.43,1.68,3.75c0.05,0.15,0.09,0.3,0.13,0.46 c0.08,0.27,0.15,0.55,0.21,0.83c0.02,0.07,0.04,0.14,0.06,0.22c0.14,0.63,0.24,1.29,0.31,1.95c0,0.01,0,0.01,0,0.01 C38.36,38.22,38.39,38.82,38.39,39.42z">
                    </path>
                    <path fill="#ff6f00"
                        d="M36.33,39.42c0,0.35-0.02,0.73-0.06,1.11c-0.02,0.18-0.04,0.36-0.06,0.53c-0.23,0.11-0.46,0.21-0.7,0.3 c-0.45,0.17-0.91,0.31-1.38,0.41c-0.32,0.07-0.65,0.13-0.98,0.16h-0.01c-0.31-0.19-0.67-0.42-1.04-0.68 c-0.67-0.47-1.37-1-1.93-1.43c-0.01-0.01-0.01-0.01-0.02-0.02c-0.59-0.45-1.01-0.79-1.01-0.79l-1.06,0.04l-2.04,0.07l-0.95,0.04 l-3.82,0.14l-3.23,0.12c-0.21,0.01-0.46,0.01-0.77,0h-0.01c-0.42-0.01-0.92-0.04-1.47-0.09c-0.64-0.05-1.34-0.11-2.05-0.18 c-0.69-0.08-1.39-0.16-2.06-0.24c-0.74-0.08-1.44-0.17-2.04-0.25c-0.47-0.06-0.88-0.11-1.21-0.15c-0.28-0.32-0.53-0.65-0.77-1.01 c-0.36-0.54-0.67-1.11-0.91-1.72c-0.18-0.43-0.33-0.88-0.44-1.34c0.29-0.89,0.67-1.73,1.12-2.54c0.36-0.66,0.78-1.29,1.24-1.89 c0.45-0.59,0.94-1.14,1.47-1.64v-0.01c0.15-0.15,0.3-0.29,0.45-0.42c0.28-0.26,0.57-0.5,0.87-0.73h0.01 c0.01-0.02,0.02-0.02,0.03-0.03c0.24-0.19,0.49-0.36,0.74-0.53c1.48-1.01,3.15-1.76,4.95-2.2c1.19-0.29,2.44-0.45,3.73-0.45 c2.54,0,4.94,0.61,7.05,1.71h0.01c1.81,0.93,3.41,2.21,4.7,3.75c0.71,0.82,1.32,1.72,1.82,2.67c0.35,0.64,0.65,1.31,0.9,1.99 c0.02,0.06,0.04,0.11,0.06,0.16c0.17,0.5,0.32,1.02,0.45,1.54c0.09,0.37,0.16,0.75,0.22,1.13c0.02,0.12,0.04,0.23,0.05,0.35 C36.28,37.99,36.33,38.7,36.33,39.42z">
                    </path>
                    <path fill="#ff9800"
                        d="M34.28,39.42v0.1c0,0.34-0.03,0.77-0.06,1.23c-0.03,0.34-0.06,0.69-0.09,1.02c-0.32,0.07-0.65,0.13-0.98,0.16 h-0.01C32.76,41.98,32.39,42,32,42h-1.75l-0.38-0.11l-1.97-0.6l-2-0.6l-4.63-1.39l-2-0.6c0,0-0.83,0.33-2,0.72h-0.01 c-0.45,0.15-0.94,0.31-1.46,0.47c-0.65,0.19-1.34,0.38-2.02,0.53c-0.7,0.16-1.39,0.28-2.01,0.33c-0.19,0.02-0.38,0.03-0.55,0.03 c-0.56-0.31-1.1-0.68-1.59-1.09c-0.43-0.36-0.83-0.75-1.2-1.18c-0.28-0.32-0.53-0.65-0.77-1.01c0.07-0.45,0.15-0.89,0.27-1.32 c0.3-1.19,0.77-2.33,1.39-3.37c0.34-0.59,0.72-1.16,1.16-1.69c0.01-0.03,0.04-0.06,0.07-0.08c-0.01-0.01,0-0.01,0-0.01 c0.13-0.17,0.27-0.33,0.41-0.48c0-0.01,0-0.01,0-0.01c0.41-0.44,0.83-0.86,1.29-1.25c0.16-0.13,0.31-0.26,0.48-0.39 c0.03-0.03,0.06-0.05,0.1-0.08c2.25-1.72,5.06-2.76,8.09-2.76c3.44,0,6.57,1.29,8.94,3.41c1.14,1.03,2.11,2.26,2.84,3.63 c0.06,0.1,0.12,0.21,0.17,0.32c0.09,0.18,0.18,0.37,0.26,0.57c0.33,0.72,0.59,1.48,0.77,2.26c0.02,0.08,0.04,0.16,0.06,0.24 c0.08,0.37,0.15,0.75,0.2,1.13C34.24,38.21,34.28,38.81,34.28,39.42z">
                    </path>
                    <path fill="#ffc107"
                        d="M32.22,39.42c0,0.2-0.01,0.42-0.02,0.65c-0.02,0.37-0.05,0.77-0.1,1.18c-0.02,0.25-0.06,0.5-0.1,0.75h-5.48 l-1.06-0.17l-4.14-0.66l-0.59-0.09l-1.35-0.22c-0.59,0-1.87,0.26-3.22,0.51c-0.71,0.13-1.43,0.27-2.08,0.36 c-0.08,0.01-0.16,0.02-0.23,0.03h-0.01c-0.7-0.15-1.38-0.38-2.02-0.68c-0.2-0.09-0.4-0.19-0.6-0.3c-0.56-0.31-1.1-0.68-1.59-1.09 c-0.01-0.12-0.02-0.22-0.02-0.27c0-0.26,0.01-0.51,0.03-0.76c0.04-0.64,0.13-1.26,0.27-1.86c0.22-0.91,0.54-1.79,0.97-2.6 c0.08-0.17,0.17-0.34,0.27-0.5c0.04-0.08,0.09-0.15,0.13-0.23c0.18-0.29,0.38-0.57,0.58-0.85c0.42-0.55,0.89-1.07,1.39-1.54 c0.01,0,0.01,0,0.01,0c0.04-0.04,0.08-0.08,0.12-0.11c0.05-0.04,0.09-0.09,0.14-0.12c0.2-0.18,0.4-0.34,0.61-0.49 c0-0.01,0.01-0.01,0.01-0.01c1.89-1.41,4.23-2.24,6.78-2.24c1.98,0,3.82,0.5,5.43,1.38h0.01c1.38,0.76,2.58,1.79,3.53,3.03 c0.37,0.48,0.7,0.99,0.98,1.53h0.01c0.05,0.1,0.1,0.2,0.15,0.3c0.3,0.59,0.54,1.21,0.72,1.85h0.01c0.01,0.05,0.03,0.1,0.04,0.15 c0.12,0.43,0.22,0.87,0.29,1.32c0.01,0.09,0.02,0.19,0.03,0.28C32.19,38.43,32.22,38.92,32.22,39.42z">
                    </path>
                    <path fill="#ffd54f"
                        d="M30.17,39.31c0,0.16,0,0.33-0.02,0.49v0.01c0,0.01,0,0.01,0,0.01c-0.02,0.72-0.12,1.43-0.28,2.07 c0,0.04-0.01,0.07-0.03,0.11h-4.67l-3.85-0.83l-0.51-0.11l-0.08,0.02l-4.27,0.88L16.27,42H16c-0.64,0-1.27-0.06-1.88-0.18 c-0.09-0.02-0.18-0.04-0.27-0.06h-0.01c-0.7-0.15-1.38-0.38-2.02-0.68c-0.02-0.11-0.04-0.22-0.05-0.33 c-0.07-0.43-0.1-0.88-0.1-1.33c0-0.17,0-0.34,0.01-0.51c0.03-0.54,0.11-1.07,0.23-1.58c0.08-0.38,0.19-0.75,0.32-1.1 c0.11-0.31,0.24-0.61,0.38-0.9c0.12-0.25,0.26-0.49,0.4-0.73c0.14-0.23,0.29-0.45,0.45-0.67c0.4-0.55,0.87-1.06,1.39-1.51 c0.3-0.26,0.63-0.51,0.97-0.73c1.46-0.96,3.21-1.52,5.1-1.52c0.37,0,0.73,0.02,1.08,0.07h0.02c1.07,0.12,2.07,0.42,2.99,0.87 c0.01,0,0.01,0,0.01,0c1.45,0.71,2.68,1.78,3.58,3.1c0.15,0.22,0.3,0.46,0.43,0.7c0.11,0.19,0.21,0.39,0.3,0.59 c0.14,0.31,0.27,0.64,0.38,0.97h0.01c0.11,0.37,0.21,0.74,0.28,1.13v0.01C30.11,38.16,30.17,38.73,30.17,39.31z">
                    </path>
                    <path fill="#ffe082"
                        d="M28.11,39.52v0.03c0,0.59-0.07,1.17-0.21,1.74c-0.05,0.24-0.12,0.48-0.21,0.71h-4.48l-2.29-0.63L18.63,42H16 c-0.64,0-1.27-0.06-1.88-0.18c-0.02-0.03-0.03-0.06-0.04-0.09c-0.14-0.43-0.25-0.86-0.3-1.31c-0.04-0.29-0.06-0.59-0.06-0.9 c0-0.12,0-0.25,0.02-0.37c0.01-0.47,0.08-0.93,0.2-1.37c0.06-0.3,0.15-0.59,0.27-0.87c0.04-0.14,0.1-0.27,0.17-0.4 c0.15-0.34,0.33-0.67,0.53-0.99c0.22-0.32,0.46-0.62,0.73-0.9c0.32-0.36,0.68-0.69,1.09-0.96c0.7-0.51,1.5-0.89,2.37-1.1 c0.58-0.16,1.19-0.24,1.82-0.24c2,0,3.79,0.8,5.09,2.09c0.05,0.05,0.11,0.11,0.16,0.18h0.01c0.14,0.15,0.27,0.3,0.4,0.47 c0.37,0.47,0.68,0.98,0.92,1.54c0.12,0.26,0.22,0.53,0.3,0.81c0.01,0.04,0.02,0.07,0.03,0.11c0.14,0.49,0.23,1,0.25,1.53 C28.1,39.2,28.11,39.36,28.11,39.52z">
                    </path>
                    <path fill="#ffecb3"
                        d="M26.06,39.52c0,0.41-0.05,0.8-0.16,1.17c-0.1,0.4-0.25,0.78-0.44,1.14c-0.03,0.06-0.1,0.17-0.1,0.17h-8.88 c-0.01-0.01-0.02-0.03-0.02-0.04c-0.12-0.19-0.22-0.38-0.3-0.59c-0.2-0.46-0.32-0.96-0.36-1.48c-0.02-0.12-0.02-0.25-0.02-0.37 c0-0.06,0-0.13,0.01-0.19c0.01-0.44,0.07-0.86,0.19-1.25c0.1-0.36,0.23-0.69,0.4-1.01c0,0,0.01-0.01,0.01-0.02 c0.12-0.21,0.25-0.42,0.4-0.62c0.49-0.66,1.14-1.2,1.89-1.55c0.01,0,0.01,0,0.01,0c0.24-0.12,0.49-0.22,0.75-0.29c0,0,0,0,0.01,0 c0.46-0.14,0.96-0.21,1.47-0.21c0.59,0,1.16,0.09,1.68,0.28c0.19,0.05,0.37,0.13,0.55,0.22c0,0,0,0,0.01,0 c0.86,0.41,1.59,1.05,2.09,1.85c0.1,0.15,0.19,0.31,0.27,0.48c0.04,0.07,0.08,0.15,0.11,0.22c0.23,0.52,0.37,1.09,0.41,1.69 c0.01,0.05,0.01,0.1,0.01,0.16C26.06,39.36,26.06,39.44,26.06,39.52z">
                    </path>
                    <g>
                        <path fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                            stroke-miterlimit="10" stroke-width="2"
                            d="M30,11H18c-3.9,0-7,3.1-7,7v12c0,3.9,3.1,7,7,7h12c3.9,0,7-3.1,7-7V18C37,14.1,33.9,11,30,11z">
                        </path>
                        <circle cx="31" cy="16" r="1" fill="#fff"></circle>
                    </g>
                    <g>
                        <circle cx="24" cy="24" r="6" fill="none" stroke="#fff" stroke-linecap="round"
                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></circle>
                    </g>
                </svg>
            </a>
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 48 48">
                    <path fill="#0288D1"
                        d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5V37z">
                    </path>
                    <path fill="#FFF"
                        d="M12 19H17V36H12zM14.485 17h-.028C12.965 17 12 15.888 12 14.499 12 13.08 12.995 12 14.514 12c1.521 0 2.458 1.08 2.486 2.499C17 15.887 16.035 17 14.485 17zM36 36h-5v-9.099c0-2.198-1.225-3.698-3.192-3.698-1.501 0-2.313 1.012-2.707 1.99C24.957 25.543 25 26.511 25 27v9h-5V19h5v2.616C25.721 20.5 26.85 19 29.738 19c3.578 0 6.261 2.25 6.261 7.274L36 36 36 36z">
                    </path>
                </svg>
            </a>
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 48 48">
                    <path fill="#FF3D00"
                        d="M43.2,33.9c-0.4,2.1-2.1,3.7-4.2,4c-3.3,0.5-8.8,1.1-15,1.1c-6.1,0-11.6-0.6-15-1.1c-2.1-0.3-3.8-1.9-4.2-4C4.4,31.6,4,28.2,4,24c0-4.2,0.4-7.6,0.8-9.9c0.4-2.1,2.1-3.7,4.2-4C12.3,9.6,17.8,9,24,9c6.2,0,11.6,0.6,15,1.1c2.1,0.3,3.8,1.9,4.2,4c0.4,2.3,0.9,5.7,0.9,9.9C44,28.2,43.6,31.6,43.2,33.9z">
                    </path>
                    <path fill="#FFF" d="M20 31L20 17 32 24z"></path>
                </svg>
            </a>
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 48 48">
                    <path fill="#8c9eff"
                        d="M40,12c0,0-4.585-3.588-10-4l-0.488,0.976C34.408,10.174,36.654,11.891,39,14c-4.045-2.065-8.039-4-15-4s-10.955,1.935-15,4c2.346-2.109,5.018-4.015,9.488-5.024L18,8c-5.681,0.537-10,4-10,4s-5.121,7.425-6,22c5.162,5.953,13,6,13,6l1.639-2.185C13.857,36.848,10.715,35.121,8,32c3.238,2.45,8.125,5,16,5s12.762-2.55,16-5c-2.715,3.121-5.857,4.848-8.639,5.815L33,40c0,0,7.838-0.047,13-6C45.121,19.425,40,12,40,12z M17.5,30c-1.933,0-3.5-1.791-3.5-4c0-2.209,1.567-4,3.5-4s3.5,1.791,3.5,4C21,28.209,19.433,30,17.5,30z M30.5,30c-1.933,0-3.5-1.791-3.5-4c0-2.209,1.567-4,3.5-4s3.5,1.791,3.5,4C34,28.209,32.433,30,30.5,30z">
                    </path>
                </svg>
            </a>

        </div>
    </div>
    <div class="font-bold text-xs bg-white flex justify-between lg:mb-0 ">
        <span>Copyright 2023,Inc. All right reserved</span>
        <div class="lg:space-x-10 space-x-5 mr-10">
            <span>Privacy Policy</span>
            <span>Terms of us</span>
        </div>
    </div>
    </div>
</body>

</html>