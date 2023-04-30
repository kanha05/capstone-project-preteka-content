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
        <!--Contact-->
        <div class="w-full mx-auto md:flex justify-between  bg-green-300 ">
            <img class="pl-20 lg:w-2/5 md:w-1/2 sm:w-full" src="https://ecomexpress.in/wp-content/uploads/2021/02/contact-us-banner-img.png" alt="" >
            <div class="lg:w-3/5 md:w-1/2 w-full">
                <h1 class="font-bold text-5xl pt-10 text-center text-white ">Contact Us</h1>
                <p class=" text-center md:text-3xl text-2xl md:mr-10 mr-0 mt-10 ">Please feel free to reach out to us if you have questions or requests
                about our website. As quickly as we can, we will get back to you.</p>
            </div>
        </div>
        <!--Contact imformation and get in touch-->
        <div class="lg:flex">
            <!--Contact imformation-->
            <div class=" lg:w-1/3 md:w-1/2 sm:w-full bg-green-400 rounded-3xl h-72 space-y-5 mx-10 my-10">
                <h1 class="text-white font-bold text-2xl p-5 text-center space-y-10 ">Contact Information</h1>
                <div class="flex">
                    <img src="../img/gmail.png" alt="" class="w-6 h- ml-5 ">
                    <span class="ml-10">PretekaContent@gmail.com</span>
                </div>
                <div class="flex">
                    <img src="../img/phone.png" alt="" class="w-6 h- ml-5 ">
                    <span class="ml-10">+885 235 599 779</span>
                </div>
                <div class=" flex">
                    <img src="../img/map.png" alt="" class="w-10 h-10 ml-5 mt-0 ">
                    <span class="ml-5 justify-start ">Brige2, National Road 6A, Sanngkat Prek Leap, Khan Chroy Changva, Phnom
                    Penh</span>
                </div>
                <div class="space-x-10 -mt-9 flex justify-center"> 
                    <img src="../img/facebook.png" alt="" class="w-6 h-5">
                    <img src="../img/telegram .png" alt="" class="w-6 h-5">
                    <img src="../img/instagram.png" alt="" class="w-6 h-5">
                    <img src="../img/youtube.png" alt="" class="w-6 h-5">
                </div>
            </div>
            <!--Get in touch-->
            <div class="lg:w-2/3 md:w-1/2 sm:w-full mx-10 my-10">
                <h1 class="text-green-400 font-bold text-3xl text-center">Get In Toch</h1>
                <form>
                    <div class="grid gap-6 md:grid-cols-2">
                        <div class="mt-10">
                        <input type="text" id="first_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Your full name" required>
                        </div>
                        <div class="mt-10">
                        <input type="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="john.doe@company.com" required>
                        </div>
                    </div>
                    <div class="mt-10">
                        <textarea id="message" rows="4"
                          class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                          placeholder="Write your thoughts here..."></textarea>
                    </div>
                    <button type="submit"
                    class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 justify-center mt-5">Send
                    </button>
                </form>
            </div>
        </div>
        <!--Find google map-->
        <div>
            <h1 class="text-green-400 font-bold text-3xl text-center">Find us on Google map</h1>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3907.582574541624!2d104.90911947339235!3d11.653065142416086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109516bdea989b3%3A0x372d2c5e0e14b706!2sCambodia%20Academy%20of%20Digital%20Technology!5e0!3m2!1sen!2skh!4v1682465866943!5m2!1sen!2skh"
              style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
              class="px-5 mt-5 lg:w-full w-full" height="450px"></iframe>
        </div>
    </div>
    <!--footer-->
</body>
</html>