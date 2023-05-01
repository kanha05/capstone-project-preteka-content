<!doctype html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<body>
    <div>
        <!--Background opacity-->
        <div class="w-full  shadow-2xl overflow-hidden relative">
            <img class="absolute inset-0  w-full h-screen object-cover" src="../img/1.png" alt="">
            <div class="absolute inset-0 bg-gray-900 bg-opacity-50"></div>
            <div class="flex justify-between relative pr-10 md:-mb-20">
                <img src="../img/logo.png" class=" w-56 -mt-20 md:w-96 md:-mt-40 -ml-10  " alt="">
                <div>
                    <div class="flex space-x-5 mt-5 ">
                        <a href="#"><img class="md:w-6 w-4" src="../img/calendar.png" alt=""></a>
                        <a href="#"><img class="md:w-6 w-4" src="../img/sun.png" alt=""></a>
                        <a href="#"><img class="md:w-6 w-4" src="../img/moon.png" alt=""></a>
                        <a href="#"><img class="md:w-6 w-4" src="../img/settings.png" alt=""></a>
                        <a href="#"><img class="md:w-6 w-4 " src="../img/account.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="relative md:-mt-24 ">
                <ul class="flex justify-center items-center -mt-20">
                    <li class="md:mx-10 my-4 md:my-0  text-white hover:text-green-400 duration-100"><a href="#" class ="font-semibold lg:text-2xl md:text-xl mx-5  sm:text-sm duration-500 ">Home</a></li>
                    <li class="md:mx-10 my-4 md:my-0 text-white hover:text-green-400 duration-100"><a href="#" class ="font-semibold lg:text-2xl md:text-xl mx-5 sm:text-sm  duration-500">Events</a></li>
                    <li class="md:mx-10 my-4 md:my-0 text-white hover:text-green-400 duration-100"><a href="#" class ="font-semibold lg:text-2xl md:text-xl mx-5 sm:text-sm duration-500">About Us</a></li>
                    <li class="md:mx-10 my-4 md:my-0 text-white hover:text-green-400 duration-100"><a href="#" class ="font-semibold lg:text-2xl md:text-xl mx-5 sm:text-sm duration-500">Contact  Us</a></li>
                </ul>
            </div>
            <div class="lg:text-5xl text-2xl text-center relative font-bold text-green-400  lg:mt-20 mt-10">Welcome to our contact</div>
            <!--Search-->
            <div>
                <form> 
                    <div class="relative lg:mt-14 mt-10 w-full md:ml-44 md:pr-80 ml-10 pr-20 mb-10">
                        <button class="inset-y-0 left-0 absolute flex items-center justify-center pl-3 px-4 border-l">
                            <svg aria-hidden="true" class="lg:w-5 lg:h-5 w-3 h-3 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </button>
                        <input type="search" id="default-search" class="w-full lg:h-15 h-10 p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for Events " required>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Header-->

    <!--Footer-->
    <div class=" bg-green-400 m-auto items-center mt-5 ">
        <div>
            <h1 class="text-center text-5xl font-bold pt-5 text-white ">Our Partner</h1>
        </div>
        <div class="grid lg:grid-cols-5 grid-cols-3 mt-0  p-10   ">
            <img src="../img/cadt.png" alt="" class="w-20  lg:ml-20 ml-10  bg-white rounded-full">
            <img src="../img/rupp.png" alt="" class="w-20 lg:ml-20 ml-10">
            <img src="../img/aupp.png" alt="" class="w-20 lg:ml-20 ml-10 bg-white rounded-full">
            <img src="../img/itc.png" alt="" class="w-20 lg:ml-20 ml-10 bg-white rounded-full">
            <img src="../img/paragon.png" alt="" class="w-28 h-20 lg:ml-20 ml-10 bg-white ">
        </div><hr>
        <div class="m-auto items-center  grid md:grid-cols-4 grid-cols-2    text-white  ">
            <div class="space-y-5 lg:ml-10  m-10 text-start  lg:pl-32">
                <h1 class="text-2xl font-bold">Explore</h1>
                <ul class="space-y-5">
                    <li>Home</li>
                    <li>Event</li>
                    <li>About Us</li>
                    <li>Contact Us</li>
                </ul>
            </div>
            <div class=" lg:m-5 m-5 space-y-5 text-start lg:pl-20">
                <h1 class="text-2xl font-bold">Quick link</h1>
                <ul class="space-y-10">
                    <li>About us</li>
                    <li>Our Team</li>
                    <li>Find map</li>
                </ul>
            </div>
            <div class="space-y-5 lg:ml-0 ml-10 lg:mt-0 -mt-20  text-start lg:pl-20">
                <h1 class="text-2xl font-bold ">Categories</h1>
                <ul class="space-y-10">
                    <li>Technology</li>
                    <li>Health Care</li>
                    <li>Science</li>
                </ul>
            </div>
            <div class="lg:mr-10 m-5 space-y-5 ">
                <h1 class="text-2xl font-bold">Contact Us</h1>
                <ul class="space-y-5">
                    <li class="flex">
                        <img src="../img/map.png" alt="" class="w-10 h-10 mr-5 mt-5">
                        <span class="mr-5 justify-start ">Brige2, National Road 6A, Sanngkat Prek Leap, Khan Chroy Changva, Phnom
                        Penh</span>
                    </li>
                    <li class="flex">
                        <img src="../img/phone.png" alt="" class="w-6 h- mr-10 ">
                        <span>097 685 423</span>
                    </li>
                    <li class="flex">
                        <img src="../img/gmail.png" alt="" class="w-6 h- mr-10 ">
                        <span>preteke.content@gmail.com</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="lg:ml-20 lg:mt-5 mt-10 flex space-x-5 ">
            <h1 class="ml-16 font-bold text-white -mt-10">Follow Us</h1>
            <div class="space-x-3 -mt-9 flex"> 
                <img src="../img/facebook.png" alt="" class="w-6 h-5">
                <img src="../img/telegram .png" alt="" class="w-6 h-5">
                <img src="../img/instagram.png" alt="" class="w-6 h-5">
                <img src="../img/youtube.png" alt="" class="w-6 h-5">
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