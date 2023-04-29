<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>

<body class="text-black font-sans">
  <div class="relative">
    <!-- header -->
    <nav class="fixed top-0 left-0 w-full py-6">
      <div class="mx-auto container flex justify-between">
        <img src="./img/logo.jpg" width="10%" class="animate-bounce md:w-28 md:ml-20 mt-5">
        <ul class="text-sm tracking-wide items-center flex gap-x-8">
          <li class="hover:scale-125 duration-300 py-1 hover:text-teal-200">
            <a class="cursor-pointer" href="#">Home</a>
          </li>
          <li class="hover:scale-125 duration-300 py-1 hover:text-teal-200">
            <a class="cursor-pointer">Events</a>
          </li>
          <li class="hover:scale-125 duration-300 py-1 hover:text-teal-200">
            <a class="cursor-pointer">Contact Us</a>
          </li>
          <li class="hover:scale-125 duration-300 py-1 hover:text-teal-200">
            <a class="cursor-pointer">About Us</a>
          </li>
          <button class="bg-red-900 rounded-xl tracking-wide py-3 text-xs hover:scale-110 duration-300">
            Sign in
          </button>
        </ul>
      </div>
    </nav>
    <!-- slide show -->
    <section class="relative">
      <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>

      <article x-data="slider" class="relative w-full flex flex-shrink-0 overflow-hidden shadow-2xl">
        <div class="rounded-full bg-gray-600 text-white absolute top-5 right-5 text-sm px-2 text-center z-10">
          <span x-text="currentIndex"></span>/
          <span x-text="images.length"></span>
        </div>

        <template x-for="(image, index) in images">
          <figure class="h-96" x-show="currentIndex == index + 1" x-transition:enter="transition transform duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition transform duration-300" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0">
            <img :src="image" alt="Image" class="absolute inset-0 z-10 h-full w-full object-cover opacity-70" />
            <figcaption
              class="absolute inset-x-0 bottom-1 z-20 w-96 mx-auto p-4 font-light text-sm text-center tracking-widest leading-snug bg-opacity-25">
            </figcaption>
          </figure>
        </template>

        <button @click="back()"
          class="absolute left-14 top-1/2 -translate-y-1/2 w-11 h-11 flex justify-center items-center rounded-full shadow-md z-10 bg-gray-100 hover:bg-gray-200">
          <svg
            class=" w-8 h-8 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 hover:-translate-x-0.5"
            fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7">
            </path>
          </svg>
        </button>

        <button @click="next()"
          class="absolute right-14 top-1/2 translate-y-1/2 w-11 h-11 flex justify-center items-center rounded-full shadow-md z-10 bg-gray-100 hover:bg-gray-200">
          <svg
            class=" w-8 h-8 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 hover:translate-x-0.5"
            fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
          </svg>
        </button>
      </article>

      <script>
        document.addEventListener('alpine:init', () => {
          Alpine.data('slider', () => ({
            currentIndex: 1,
            images: [
              'https://source.unsplash.com/1600x900/?content',
              'https://source.unsplash.com/1600x900/?technology',
              'https://source.unsplash.com/1600x900/?robot',
              'https://source.unsplash.com/1600x900/?health',
              'https://source.unsplash.com/1600x900/?textures&patterns'
            ],
            back() {
              if (this.currentIndex > 1) {
                this.currentIndex = this.currentIndex - 1;
              }
            },
            next() {
              if (this.currentIndex < this.images.length) {
                this.currentIndex = this.currentIndex + 1;
              } else if (this.currentIndex <= this.images.length) {
                this.currentIndex = this.images.length - this.currentIndex + 1
              }
            },
          }))
        })
      </script>

    </section>
    <br>
    <section>
      <div class="grid md:grid-cols-3 gap-4">
        <div class="bg-blue-100 rounded-md p-4">
          <h1>Latest</h1>
          <div class="flex md:block">
            <div class="border-solid border-red-100 border-2 mt-2  bg-red-100">
              <img src="./img/B1.jpg" alt="">
              <div>
                <h1>This is the title</h1>
                <h2>Category</h2>
                <div>
                  <span class="flex items-center mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                    </svg> : Sun, Apr9, 2023, 10pm
                  </span>
                </div>
                <div>
                  <span class="flex items-center mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>: National Road number5

                  </span><br><br>
                  <span class="bg-red-700 px-2 py-0.5 rounded-md text-sm text-white ">
                    see more
                  </span>
                </div>
              </div>
            </div>
            <div class="border-solid border-red-100 border-2 mt-2  bg-red-100">
              <img src="./img/B1.jpg" alt="">
              <div>
                <h1>This is the title</h1>
                <h2>Category</h2>
                <div><span class="flex items-center mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                    </svg> : Sun, Apr9, 2023, 10pm
                  </span>
                </div>
                <div>
                  <span class="flex items-center mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>: National Road number5

                  </span><br><br>
                  <span class="bg-red-700 px-2 py-0.5 rounded-md text-sm text-white ">
                    see more
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-blue-100 rounded-md p-4">
          <h1>Up Coming</h1>
          <div class="flex md:block">
            <div class="border-solid border-red-100 border-2 mt-2  bg-red-100">
              <img src="./img/B1.jpg" alt="">
              <div>
                <h1>This is the title</h1>
                <h2>Category</h2>
                <div>
                  <span class="flex items-center mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                    </svg> : Sun, Apr9, 2023, 10pm
                  </span>
                </div>
                <div>
                  <span class="flex items-center mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>: National Road number5

                  </span><br><br>
                  <span class="bg-red-700 px-2 py-0.5 rounded-md text-sm text-white ">
                    see more
                  </span>
                </div>
              </div>
            </div>
            <div class="border-solid border-red-100 border-2 bg-red-100 mt-2">
              <img src="./img/B1.jpg" alt="">
              <div>
                <h1>This is the title</h1>
                <h2>Category</h2>
                <div>
                  <span class="flex items-center mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                    </svg> : Sun, Apr9, 2023, 10pm
                  </span>
                </div>
                <div>
                  <span class="flex items-center mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>: National Road number5

                  </span><br><br>
                  <span class="bg-red-700 px-2 py-0.5 rounded-md text-sm text-white ">
                    see more
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-blue-100 rounded-md p-4">
          <h1>Recently</h1>
          <div class="flex md:block">
            <div class="border-solid border-red-100 border-2 bg-red-100 mt-2">
              <img src="./img/B1.jpg" alt="">
              <div>
                <h1>This is the title</h1>
                <h2>Category</h2>
                <div>
                  <span class="flex items-center mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                    </svg> : Sun, Apr9, 2023, 10pm
                  </span>
                </div>
                <div>
                  <span class="flex items-center mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>: National Road number5

                  </span><br><br>
                  <span class="bg-red-700 px-2 py-0.5 rounded-md text-sm text-white ">
                    see more
                  </span>
                </div>
              </div>
            </div>
            <div class="border-solid border-red-100 border-2 bg-red-100 mt-2">
              <img src="./img/B1.jpg" alt="">
              <div>
                <h1>This is the title</h1>
                <h2>Category</h2>
                <div>
                  <span class="flex items-center mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                    </svg> : Sun, Apr9, 2023, 10pm
                  </span>
                </div>
                <div>
                  <span class="flex items-center mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>: National Road number5

                  </span><br><br>
                  <span class="bg-red-700 px-2 py-0.5 rounded-md text-sm text-white ">
                    see more
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><br>
    <!-- end event box -->
      <div class="relative">
        <h1 class="text-3xl font-bold font-sans">Event(s) Today</h1>
      </div>
    <!-- Event today -->
    <section>
      
      <div class="relative mx-auto ">
        <div class="slide relative">
          <img class="w-full  " src="./img/B2.jpg">
          <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">Welcome to ur source of
            education</div>
        </div>

        <div class="slide relative">
          <img class="w-full  " src="./img/B3.jpg">
          <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">Join us now</div>
        </div>

        <div class="slide relative">
          <img class="w-full " src="./img/B1.jpg">
          <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">Start now
          </div>
        </div>

        <!-- The previous button -->
        <a class="absolute left-0 top-1/2 p-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white hover:text-amber-500 cursor-pointer"
          onclick="moveSlide(-1)">❮</a>

        <!-- The next button -->
        <a class="absolute right-0 top-1/2 p-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white hover:text-amber-500 cursor-pointer"
          onclick="moveSlide(1)">❯</a>

      </div>
      <br>

      <!-- The dots -->
      <div class="flex justify-center items-center space-x-5">
        <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(1)"></div>
        <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(2)"></div>
        <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(3)"></div>
      </div>

      <!-- Javascript code -->
      <script>
        // set the default active slide to the first one
        let slideIndex = 1;
        showSlide(slideIndex);

        // change slide with the prev/next button
        function moveSlide(moveStep) {
          showSlide(slideIndex += moveStep);
        }

        // change slide with the dots
        function currentSlide(n) {
          showSlide(slideIndex = n);
        }

        function showSlide(n) {
          let i;
          const slides = document.getElementsByClassName("slide");
          const dots = document.getElementsByClassName('dot');

          if (n > slides.length) { slideIndex = 1 }
          if (n < 1) { slideIndex = slides.length }

          // hide all slides
          for (i = 0; i < slides.length; i++) {
            slides[i].classList.add('hidden');
          }

          // remove active status from all dots
          for (i = 0; i < dots.length; i++) {
            dots[i].classList.remove('bg-yellow-500');
            dots[i].classList.add('bg-green-600');
          }

          // show the active slide
          slides[slideIndex - 1].classList.remove('hidden');

          // highlight the active dot
          dots[slideIndex - 1].classList.remove('bg-green-600');
          dots[slideIndex - 1].classList.add('bg-yellow-500');
        }
      </script>
    </section>
  </div>
</body>

</html>