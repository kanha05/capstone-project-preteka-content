<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="dark:bg-black dark:text-white bg-white">
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
    <div class=" relative">
        <!-- header -->
        <!-- <nav class="fixed top-0 left-0 w-full py-6">
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
    </nav> -->
        <!-- slide show -->
        <section class="relative">
            <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>

            <article x-data="slider" class="relative w-full flex flex-shrink-0 overflow-hidden shadow-2xl">
                <div class="rounded-full bg-gray-600 text-white absolute top-5 right-5 text-sm px-2 text-center z-10">
                    <span x-text="currentIndex"></span>/
                    <span x-text="images.length"></span>
                </div>

                <template x-for="(image, index) in images">
                    <figure class=" h-48 md:h-60 lg:h-80" x-show="currentIndex == index + 1"
                        x-transition:enter="transition transform duration-300" x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100" x-transition:leave="transition transform duration-300"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                        <img :src="image" alt="Image"
                            class="absolute inset-0 z-10 h-full w-full object-cover opacity-70" />
                        <figcaption
                            class="absolute inset-x-0 bottom-1 z-20 w-96 mx-auto p-4 font-light text-sm text-center tracking-widest leading-snug bg-opacity-25">
                        </figcaption>
                    </figure>
                </template>

                <button @click="back()"
                    class="absolute left-14 top-1/2 -translate-y-1/2 w-11 h-11 flex justify-center items-center rounded-full shadow-md z-10 bg-gray-100 hover:bg-gray-200">
                    <svg class=" w-8 h-8 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 hover:-translate-x-0.5"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                </button>

                <button @click="next()"
                    class="absolute right-14 top-1/2 translate-y-1/2 w-11 h-11 flex justify-center items-center rounded-full shadow-md z-10 bg-gray-100 hover:bg-gray-200">
                    <svg class=" w-8 h-8 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 hover:translate-x-0.5"
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
            <div class="grid md:grid-cols-3 gap-4 lg:mx-20 md:mx-16 sm:mx-10 mx-5 mt-12">
                <div class="shadow-2xl dark:shadow-slate-500 dark:shadow-md">
                    <h1 class=" font-bold text-xl lg:text-2xl text-green-600 dark:text-green-400 text-center">Latest
                    </h1>
                    <div class="flex md:block space-x-2 md:space-y-3">
                        <a href="detail">
                            <div
                                class="shadow-xl rounded-md transition-colors duration-500 hover:bg-green-200 dark:shadow-slate-500 dark:hover:bg-green-800 dark:shadow-md">
                                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg"
                                    alt="" class="rounded-t-md hover:bg-green-200 dark:hover:bg-green-800">
                                <div class="mx-5 h-36">
                                    <h1 class=" font-semibold text-sm sm:text-sm md:text-sm lg:text-lg">This is the
                                        title</h1>
                                    <!-- <h2>Category</h2> -->
                                    <div>
                                        <span class="flex items-center mt-1 text-xs sm:text-sm md:text-sm lg:text-base">
                                            <img class=" w-6"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABj0lEQVR4nO1YwU7CQBDd/8AABzWe9NTqzWTrReLH8RFcSAWBhJvlIhztemjskq4XvdpEmnJes1WJtqR2sGFLnJe8pFmS9+Z1Z6YJhCAQ28eNM20NnOmLYv/27lK3DhiJ6WQmEzqzZ906YKxMP6lbZy2W5+ZebBl2bBlRbJnyO9PG6d+LcvCrjhHF1OwtLk4PCLh4aoTrTCOaNVZn0OJBOtQIl/SsVjjAx5tfL+YdH2WM1Rk0AFiHml1IgEzbfNFp1jPGTqMODgDWoeYbIECecUMOr0cr06E9kpNmY4MAcB1SRgB1zePWVWKoqJ69k81aaAzUKSWAGjRlrt6gonredIg9oE4pAXSSYABrR26AcSGrSIIBON6ArEQLtTv9Hyz7nGEAjjcgK91CDL8DArdQLnCIOxUf4vauf8gYbiGBW+h/z0AbAwjcQrnQvS7Zn2fAFwvdxbI0/aD4n7suD3raC+YZ2oUDPDw+HTIuXitQtFR0eRDee8F+4QBJG83nNdcXXa3t5CfeNrh4BAKBINvCO+WE9Ir/r6VFAAAAAElFTkSuQmCC">
                                            : Sun, Apr9, 2023, 10pm
                                        </span>
                                    </div>
                                    <div>
                                        <span class="flex items-center mt-1 text-xs sm:text-sm md:text-sm lg:text-base">
                                            <img class=" w-6"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADT0lEQVR4nO2X3UsUURjGX4uCUrspqIuCNAW7CAqhIs/sWJa3WUT/QEnSdWaIsEFBUOiMVkJQF3UhhTflBxVIfmzknlmFJLsI6aI7Q8ywcs8R841zdlFbd2Z2Z7ezS8wDDwyz877n+c2ec2YGwJcvX77+G6EOO5BAPRJ4gRp8QgI/pWPH4txFrIHtkG/CU1CIGlxHAj9QA3TxPBIIYiVshXwQarAHCYynEDzRE6hBSW7DEyhFDb56CB8zgemcQeAxKEYNPnoOvwrxAXUoUg9A4FbG4bUViBtqw+uwCzVYcAj0HAnocnELV0E1atDjAPELj8BOdQAELjuEb3Koa3aAaFAHoMFLuzufQm2vTW2/mvSxEJ9tQuiutQE4blM7pRIg+fxPYTeJ715J1wGoEhKY8wxwGLbZAMyq/AdCSUNUQXUKtSdsAEJq0sdCtNiE6HGtJdBnU9ui8jmwGwks2SzG5rTBCSyJnsoAZJjY67Hdnt4rdxsdiqTFtLG/8yh6KQ0vATSozdqrhAa1ygHiEINZCB/KSXgJUAUkYwDi/vD7txBOc9s9fF9Ow0uAAJQjAeYBgKMOFZAPQg1u5v03gJPwKGyxfcFL7i/iOwFyqeAkbm4PL1YalNebFm991floeDlQ4BpeXPO68+GQqDEorxc9RC8loY1Rtt+grMmgLGRQtmhaHNd6oumSK8DEtYa/akyLY6wXGzHD7KoYI6uhg4gb2iLsnAidOHCi772dw7kzZbbhv9eV4P3QrGMPU5qNGBY7i4gFGYVvH4vuMy027D7gqp91D+NyYOP6qaNvwO6nAyn3MYUpH2yzoqWewneEoyWGxafTGjDuSPDKOoBIsDHtPqaEYDOt49GytAHknPQyoMXx7rt5nDl/YCW8OBbnvPYzKBvyArDgdUDhx/2TyE8W42JNIT7pfe+5jxlbEwtpAwjqzAblYruUzrSPYfE36QOMRvd6XQNZNWUzYjNJG2ANxEDuANiIOcrKIROJvdgIs7psTKmUpwxlQ+0Rdjrj50CiOsZYhWGxRglDGc9iYCb2fNFbjAEq9GAMN7Vb/JAZ5hcMyu+YlHXJpzXlU2LtGBb7ZlL2W1gcy/UkfpPXsC6T8tvx2oOil5LQvnz58gXZ1h8JC/UEAA50vAAAAABJRU5ErkJggg==">:
                                            National Road number5

                                        </span>
                                    </div>
                                    <p class=" text-xs sm:text-sm line-clamp-1 md:text-sm lg:text-base">At Innovation
                                        Festival you will learn and connect
                                        with experienced researchers, developers, and industry leaders in a
                                        community-based way.</p>
                                    <!-- <div class="flex place-content-end">
                                    <a href="detail"><button class="h-8 px-2 m-2 text-white bg-green-600 transition-colors duration-500 border-solid border-green-600 border-2 rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">More Detail</button></a>
                                </div> -->
                                </div>
                            </div>
                        </a>

                        <a href="detail">
                            <div
                                class="shadow-xl rounded-md transition-colors duration-500 hover:bg-green-200 dark:shadow-slate-500 dark:hover:bg-green-800 dark:shadow-md">
                                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg"
                                    alt="" class="rounded-t-md">
                                <div class="mx-5 h-36">
                                    <h1 class=" font-semibold text-sm sm:text-sm md:text-sm lg:text-lg">This is the
                                        title</h1>
                                    <!-- <h2>Category</h2> -->
                                    <div>
                                        <span class="flex items-center mt-1 text-xs sm:text-sm md:text-sm lg:text-base">
                                            <img class=" w-6"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABj0lEQVR4nO1YwU7CQBDd/8AABzWe9NTqzWTrReLH8RFcSAWBhJvlIhztemjskq4XvdpEmnJes1WJtqR2sGFLnJe8pFmS9+Z1Z6YJhCAQ28eNM20NnOmLYv/27lK3DhiJ6WQmEzqzZ906YKxMP6lbZy2W5+ZebBl2bBlRbJnyO9PG6d+LcvCrjhHF1OwtLk4PCLh4aoTrTCOaNVZn0OJBOtQIl/SsVjjAx5tfL+YdH2WM1Rk0AFiHml1IgEzbfNFp1jPGTqMODgDWoeYbIECecUMOr0cr06E9kpNmY4MAcB1SRgB1zePWVWKoqJ69k81aaAzUKSWAGjRlrt6gonredIg9oE4pAXSSYABrR26AcSGrSIIBON6ArEQLtTv9Hyz7nGEAjjcgK91CDL8DArdQLnCIOxUf4vauf8gYbiGBW+h/z0AbAwjcQrnQvS7Zn2fAFwvdxbI0/aD4n7suD3raC+YZ2oUDPDw+HTIuXitQtFR0eRDee8F+4QBJG83nNdcXXa3t5CfeNrh4BAKBINvCO+WE9Ir/r6VFAAAAAElFTkSuQmCC">
                                            : Sun, Apr9, 2023, 10pm
                                        </span>
                                    </div>
                                    <div>
                                        <span class="flex items-center mt-1 text-xs sm:text-sm md:text-sm lg:text-base">
                                            <img class=" w-6"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADT0lEQVR4nO2X3UsUURjGX4uCUrspqIuCNAW7CAqhIs/sWJa3WUT/QEnSdWaIsEFBUOiMVkJQF3UhhTflBxVIfmzknlmFJLsI6aI7Q8ywcs8R841zdlFbd2Z2Z7ezS8wDDwyz877n+c2ec2YGwJcvX77+G6EOO5BAPRJ4gRp8QgI/pWPH4txFrIHtkG/CU1CIGlxHAj9QA3TxPBIIYiVshXwQarAHCYynEDzRE6hBSW7DEyhFDb56CB8zgemcQeAxKEYNPnoOvwrxAXUoUg9A4FbG4bUViBtqw+uwCzVYcAj0HAnocnELV0E1atDjAPELj8BOdQAELjuEb3Koa3aAaFAHoMFLuzufQm2vTW2/mvSxEJ9tQuiutQE4blM7pRIg+fxPYTeJ715J1wGoEhKY8wxwGLbZAMyq/AdCSUNUQXUKtSdsAEJq0sdCtNiE6HGtJdBnU9ui8jmwGwks2SzG5rTBCSyJnsoAZJjY67Hdnt4rdxsdiqTFtLG/8yh6KQ0vATSozdqrhAa1ygHiEINZCB/KSXgJUAUkYwDi/vD7txBOc9s9fF9Ow0uAAJQjAeYBgKMOFZAPQg1u5v03gJPwKGyxfcFL7i/iOwFyqeAkbm4PL1YalNebFm991floeDlQ4BpeXPO68+GQqDEorxc9RC8loY1Rtt+grMmgLGRQtmhaHNd6oumSK8DEtYa/akyLY6wXGzHD7KoYI6uhg4gb2iLsnAidOHCi772dw7kzZbbhv9eV4P3QrGMPU5qNGBY7i4gFGYVvH4vuMy027D7gqp91D+NyYOP6qaNvwO6nAyn3MYUpH2yzoqWewneEoyWGxafTGjDuSPDKOoBIsDHtPqaEYDOt49GytAHknPQyoMXx7rt5nDl/YCW8OBbnvPYzKBvyArDgdUDhx/2TyE8W42JNIT7pfe+5jxlbEwtpAwjqzAblYruUzrSPYfE36QOMRvd6XQNZNWUzYjNJG2ANxEDuANiIOcrKIROJvdgIs7psTKmUpwxlQ+0Rdjrj50CiOsZYhWGxRglDGc9iYCb2fNFbjAEq9GAMN7Vb/JAZ5hcMyu+YlHXJpzXlU2LtGBb7ZlL2W1gcy/UkfpPXsC6T8tvx2oOil5LQvnz58gXZ1h8JC/UEAA50vAAAAABJRU5ErkJggg==">:
                                            National Road number5

                                        </span>
                                    </div>
                                    <p class=" text-xs sm:text-sm line-clamp-1 md:text-sm lg:text-base">At Innovation
                                        Festival you will learn and connect
                                        with experienced researchers, developers, and industry leaders in a
                                        community-based way.</p>
                                    <!-- <div class="flex place-content-end">
                                    <a href="detail"><button class="h-8 px-2 m-2 text-white bg-green-600 transition-colors duration-500 border-solid border-green-600 border-2 rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">More Detail</button></a>
                                </div> -->
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="flex place-content-end">
                        <a href="detail" class=" hover:text-green-600 text-end m-4"> See more > </a>
                    </div>
                </div>
                <div class="shadow-2xl dark:shadow-slate-500 dark:shadow-md">
                    <h1 class=" font-bold text-xl lg:text-2xl text-green-600 dark:text-green-400 text-center">Up coming
                    </h1>
                    <div class="flex md:block space-x-2 md:space-y-3">
                        <a href="detail">
                            <div
                                class="shadow-xl rounded-md transition-colors duration-500 hover:bg-green-200 dark:shadow-slate-500 dark:hover:bg-green-800 dark:shadow-md">
                                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg"
                                    alt="" class="rounded-t-md">
                                <div class="mx-5 h-36">
                                    <h1 class=" font-semibold text-sm sm:text-sm md:text-sm lg:text-lg">This is the
                                        title</h1>
                                    <!-- <h2>Category</h2> -->
                                    <div>
                                        <span class="flex items-center mt-1 text-xs sm:text-sm md:text-sm lg:text-base">
                                            <img class=" w-6"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABj0lEQVR4nO1YwU7CQBDd/8AABzWe9NTqzWTrReLH8RFcSAWBhJvlIhztemjskq4XvdpEmnJes1WJtqR2sGFLnJe8pFmS9+Z1Z6YJhCAQ28eNM20NnOmLYv/27lK3DhiJ6WQmEzqzZ906YKxMP6lbZy2W5+ZebBl2bBlRbJnyO9PG6d+LcvCrjhHF1OwtLk4PCLh4aoTrTCOaNVZn0OJBOtQIl/SsVjjAx5tfL+YdH2WM1Rk0AFiHml1IgEzbfNFp1jPGTqMODgDWoeYbIECecUMOr0cr06E9kpNmY4MAcB1SRgB1zePWVWKoqJ69k81aaAzUKSWAGjRlrt6gonredIg9oE4pAXSSYABrR26AcSGrSIIBON6ArEQLtTv9Hyz7nGEAjjcgK91CDL8DArdQLnCIOxUf4vauf8gYbiGBW+h/z0AbAwjcQrnQvS7Zn2fAFwvdxbI0/aD4n7suD3raC+YZ2oUDPDw+HTIuXitQtFR0eRDee8F+4QBJG83nNdcXXa3t5CfeNrh4BAKBINvCO+WE9Ir/r6VFAAAAAElFTkSuQmCC">
                                            : Sun, Apr9, 2023, 10pm
                                        </span>
                                    </div>
                                    <div>
                                        <span class="flex items-center mt-1 text-xs sm:text-sm md:text-sm lg:text-base">
                                            <img class=" w-6"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADT0lEQVR4nO2X3UsUURjGX4uCUrspqIuCNAW7CAqhIs/sWJa3WUT/QEnSdWaIsEFBUOiMVkJQF3UhhTflBxVIfmzknlmFJLsI6aI7Q8ywcs8R841zdlFbd2Z2Z7ezS8wDDwyz877n+c2ec2YGwJcvX77+G6EOO5BAPRJ4gRp8QgI/pWPH4txFrIHtkG/CU1CIGlxHAj9QA3TxPBIIYiVshXwQarAHCYynEDzRE6hBSW7DEyhFDb56CB8zgemcQeAxKEYNPnoOvwrxAXUoUg9A4FbG4bUViBtqw+uwCzVYcAj0HAnocnELV0E1atDjAPELj8BOdQAELjuEb3Koa3aAaFAHoMFLuzufQm2vTW2/mvSxEJ9tQuiutQE4blM7pRIg+fxPYTeJ715J1wGoEhKY8wxwGLbZAMyq/AdCSUNUQXUKtSdsAEJq0sdCtNiE6HGtJdBnU9ui8jmwGwks2SzG5rTBCSyJnsoAZJjY67Hdnt4rdxsdiqTFtLG/8yh6KQ0vATSozdqrhAa1ygHiEINZCB/KSXgJUAUkYwDi/vD7txBOc9s9fF9Ow0uAAJQjAeYBgKMOFZAPQg1u5v03gJPwKGyxfcFL7i/iOwFyqeAkbm4PL1YalNebFm991floeDlQ4BpeXPO68+GQqDEorxc9RC8loY1Rtt+grMmgLGRQtmhaHNd6oumSK8DEtYa/akyLY6wXGzHD7KoYI6uhg4gb2iLsnAidOHCi772dw7kzZbbhv9eV4P3QrGMPU5qNGBY7i4gFGYVvH4vuMy027D7gqp91D+NyYOP6qaNvwO6nAyn3MYUpH2yzoqWewneEoyWGxafTGjDuSPDKOoBIsDHtPqaEYDOt49GytAHknPQyoMXx7rt5nDl/YCW8OBbnvPYzKBvyArDgdUDhx/2TyE8W42JNIT7pfe+5jxlbEwtpAwjqzAblYruUzrSPYfE36QOMRvd6XQNZNWUzYjNJG2ANxEDuANiIOcrKIROJvdgIs7psTKmUpwxlQ+0Rdjrj50CiOsZYhWGxRglDGc9iYCb2fNFbjAEq9GAMN7Vb/JAZ5hcMyu+YlHXJpzXlU2LtGBb7ZlL2W1gcy/UkfpPXsC6T8tvx2oOil5LQvnz58gXZ1h8JC/UEAA50vAAAAABJRU5ErkJggg==">:
                                            National Road number5

                                        </span>
                                    </div>
                                    <p class=" text-xs sm:text-sm line-clamp-1 md:text-sm lg:text-base">At Innovation
                                        Festival you will learn and connect
                                        with experienced researchers, developers, and industry leaders in a
                                        community-based way.</p>
                                    <!-- <div class="flex place-content-end">
                                    <a href="detail"><button class="h-8 px-2 m-2 text-white bg-green-600 transition-colors duration-500 border-solid border-green-600 border-2 rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">More Detail</button></a>
                                </div> -->
                                </div>
                            </div>
                        </a>

                        <a href="detail">
                            <div
                                class="shadow-xl rounded-md transition-colors duration-500 hover:bg-green-200 dark:shadow-slate-500 dark:hover:bg-green-800 dark:shadow-md">
                                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg"
                                    alt="" class="rounded-t-md">
                                <div class="mx-5 h-36">
                                    <h1 class=" font-semibold text-sm sm:text-sm md:text-sm lg:text-lg">This is the
                                        title</h1>
                                    <!-- <h2>Category</h2> -->
                                    <div>
                                        <span class="flex items-center mt-1 text-xs sm:text-sm md:text-sm lg:text-base">
                                            <img class=" w-6"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABj0lEQVR4nO1YwU7CQBDd/8AABzWe9NTqzWTrReLH8RFcSAWBhJvlIhztemjskq4XvdpEmnJes1WJtqR2sGFLnJe8pFmS9+Z1Z6YJhCAQ28eNM20NnOmLYv/27lK3DhiJ6WQmEzqzZ906YKxMP6lbZy2W5+ZebBl2bBlRbJnyO9PG6d+LcvCrjhHF1OwtLk4PCLh4aoTrTCOaNVZn0OJBOtQIl/SsVjjAx5tfL+YdH2WM1Rk0AFiHml1IgEzbfNFp1jPGTqMODgDWoeYbIECecUMOr0cr06E9kpNmY4MAcB1SRgB1zePWVWKoqJ69k81aaAzUKSWAGjRlrt6gonredIg9oE4pAXSSYABrR26AcSGrSIIBON6ArEQLtTv9Hyz7nGEAjjcgK91CDL8DArdQLnCIOxUf4vauf8gYbiGBW+h/z0AbAwjcQrnQvS7Zn2fAFwvdxbI0/aD4n7suD3raC+YZ2oUDPDw+HTIuXitQtFR0eRDee8F+4QBJG83nNdcXXa3t5CfeNrh4BAKBINvCO+WE9Ir/r6VFAAAAAElFTkSuQmCC">
                                            : Sun, Apr9, 2023, 10pm
                                        </span>
                                    </div>
                                    <div>
                                        <span class="flex items-center mt-1 text-xs sm:text-sm md:text-sm lg:text-base">
                                            <img class=" w-6"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADT0lEQVR4nO2X3UsUURjGX4uCUrspqIuCNAW7CAqhIs/sWJa3WUT/QEnSdWaIsEFBUOiMVkJQF3UhhTflBxVIfmzknlmFJLsI6aI7Q8ywcs8R841zdlFbd2Z2Z7ezS8wDDwyz877n+c2ec2YGwJcvX77+G6EOO5BAPRJ4gRp8QgI/pWPH4txFrIHtkG/CU1CIGlxHAj9QA3TxPBIIYiVshXwQarAHCYynEDzRE6hBSW7DEyhFDb56CB8zgemcQeAxKEYNPnoOvwrxAXUoUg9A4FbG4bUViBtqw+uwCzVYcAj0HAnocnELV0E1atDjAPELj8BOdQAELjuEb3Koa3aAaFAHoMFLuzufQm2vTW2/mvSxEJ9tQuiutQE4blM7pRIg+fxPYTeJ715J1wGoEhKY8wxwGLbZAMyq/AdCSUNUQXUKtSdsAEJq0sdCtNiE6HGtJdBnU9ui8jmwGwks2SzG5rTBCSyJnsoAZJjY67Hdnt4rdxsdiqTFtLG/8yh6KQ0vATSozdqrhAa1ygHiEINZCB/KSXgJUAUkYwDi/vD7txBOc9s9fF9Ow0uAAJQjAeYBgKMOFZAPQg1u5v03gJPwKGyxfcFL7i/iOwFyqeAkbm4PL1YalNebFm991floeDlQ4BpeXPO68+GQqDEorxc9RC8loY1Rtt+grMmgLGRQtmhaHNd6oumSK8DEtYa/akyLY6wXGzHD7KoYI6uhg4gb2iLsnAidOHCi772dw7kzZbbhv9eV4P3QrGMPU5qNGBY7i4gFGYVvH4vuMy027D7gqp91D+NyYOP6qaNvwO6nAyn3MYUpH2yzoqWewneEoyWGxafTGjDuSPDKOoBIsDHtPqaEYDOt49GytAHknPQyoMXx7rt5nDl/YCW8OBbnvPYzKBvyArDgdUDhx/2TyE8W42JNIT7pfe+5jxlbEwtpAwjqzAblYruUzrSPYfE36QOMRvd6XQNZNWUzYjNJG2ANxEDuANiIOcrKIROJvdgIs7psTKmUpwxlQ+0Rdjrj50CiOsZYhWGxRglDGc9iYCb2fNFbjAEq9GAMN7Vb/JAZ5hcMyu+YlHXJpzXlU2LtGBb7ZlL2W1gcy/UkfpPXsC6T8tvx2oOil5LQvnz58gXZ1h8JC/UEAA50vAAAAABJRU5ErkJggg==">:
                                            National Road number5

                                        </span>
                                    </div>
                                    <p class=" text-xs sm:text-sm line-clamp-1 md:text-sm lg:text-base">At Innovation
                                        Festival you will learn and connect
                                        with experienced researchers, developers, and industry leaders in a
                                        community-based way.</p>
                                    <!-- <div class="flex place-content-end">
                                    <a href="detail"><button class="h-8 px-2 m-2 text-white bg-green-600 transition-colors duration-500 border-solid border-green-600 border-2 rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">More Detail</button></a>
                                </div> -->
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="flex place-content-end">
                        <a href="detail" class=" hover:text-green-600 text-end m-4"> See more > </a>
                    </div>
                </div>
                <div class="shadow-2xl dark:shadow-slate-500 dark:shadow-md">
                    <h1 class=" font-bold text-xl lg:text-2xl text-green-600 dark:text-green-400 text-center">Popular
                    </h1>
                    <div class="flex md:block space-x-2 md:space-y-3">
                        <a href="detail">
                            <div
                                class="shadow-xl rounded-md transition-colors duration-500 hover:bg-green-200 dark:shadow-slate-500 dark:hover:bg-green-800 dark:shadow-md">
                                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg"
                                    alt="" class="rounded-t-md">
                                <div class="mx-5 h-36">
                                    <h1 class=" font-semibold text-sm sm:text-sm md:text-sm lg:text-lg">This is the
                                        title</h1>
                                    <!-- <h2>Category</h2> -->
                                    <div>
                                        <span class="flex items-center mt-1 text-xs sm:text-sm md:text-sm lg:text-base">
                                            <img class=" w-6"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABj0lEQVR4nO1YwU7CQBDd/8AABzWe9NTqzWTrReLH8RFcSAWBhJvlIhztemjskq4XvdpEmnJes1WJtqR2sGFLnJe8pFmS9+Z1Z6YJhCAQ28eNM20NnOmLYv/27lK3DhiJ6WQmEzqzZ906YKxMP6lbZy2W5+ZebBl2bBlRbJnyO9PG6d+LcvCrjhHF1OwtLk4PCLh4aoTrTCOaNVZn0OJBOtQIl/SsVjjAx5tfL+YdH2WM1Rk0AFiHml1IgEzbfNFp1jPGTqMODgDWoeYbIECecUMOr0cr06E9kpNmY4MAcB1SRgB1zePWVWKoqJ69k81aaAzUKSWAGjRlrt6gonredIg9oE4pAXSSYABrR26AcSGrSIIBON6ArEQLtTv9Hyz7nGEAjjcgK91CDL8DArdQLnCIOxUf4vauf8gYbiGBW+h/z0AbAwjcQrnQvS7Zn2fAFwvdxbI0/aD4n7suD3raC+YZ2oUDPDw+HTIuXitQtFR0eRDee8F+4QBJG83nNdcXXa3t5CfeNrh4BAKBINvCO+WE9Ir/r6VFAAAAAElFTkSuQmCC">
                                            : Sun, Apr9, 2023, 10pm
                                        </span>
                                    </div>
                                    <div>
                                        <span class="flex items-center mt-1 text-xs sm:text-sm md:text-sm lg:text-base">
                                            <img class=" w-6"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADT0lEQVR4nO2X3UsUURjGX4uCUrspqIuCNAW7CAqhIs/sWJa3WUT/QEnSdWaIsEFBUOiMVkJQF3UhhTflBxVIfmzknlmFJLsI6aI7Q8ywcs8R841zdlFbd2Z2Z7ezS8wDDwyz877n+c2ec2YGwJcvX77+G6EOO5BAPRJ4gRp8QgI/pWPH4txFrIHtkG/CU1CIGlxHAj9QA3TxPBIIYiVshXwQarAHCYynEDzRE6hBSW7DEyhFDb56CB8zgemcQeAxKEYNPnoOvwrxAXUoUg9A4FbG4bUViBtqw+uwCzVYcAj0HAnocnELV0E1atDjAPELj8BOdQAELjuEb3Koa3aAaFAHoMFLuzufQm2vTW2/mvSxEJ9tQuiutQE4blM7pRIg+fxPYTeJ715J1wGoEhKY8wxwGLbZAMyq/AdCSUNUQXUKtSdsAEJq0sdCtNiE6HGtJdBnU9ui8jmwGwks2SzG5rTBCSyJnsoAZJjY67Hdnt4rdxsdiqTFtLG/8yh6KQ0vATSozdqrhAa1ygHiEINZCB/KSXgJUAUkYwDi/vD7txBOc9s9fF9Ow0uAAJQjAeYBgKMOFZAPQg1u5v03gJPwKGyxfcFL7i/iOwFyqeAkbm4PL1YalNebFm991floeDlQ4BpeXPO68+GQqDEorxc9RC8loY1Rtt+grMmgLGRQtmhaHNd6oumSK8DEtYa/akyLY6wXGzHD7KoYI6uhg4gb2iLsnAidOHCi772dw7kzZbbhv9eV4P3QrGMPU5qNGBY7i4gFGYVvH4vuMy027D7gqp91D+NyYOP6qaNvwO6nAyn3MYUpH2yzoqWewneEoyWGxafTGjDuSPDKOoBIsDHtPqaEYDOt49GytAHknPQyoMXx7rt5nDl/YCW8OBbnvPYzKBvyArDgdUDhx/2TyE8W42JNIT7pfe+5jxlbEwtpAwjqzAblYruUzrSPYfE36QOMRvd6XQNZNWUzYjNJG2ANxEDuANiIOcrKIROJvdgIs7psTKmUpwxlQ+0Rdjrj50CiOsZYhWGxRglDGc9iYCb2fNFbjAEq9GAMN7Vb/JAZ5hcMyu+YlHXJpzXlU2LtGBb7ZlL2W1gcy/UkfpPXsC6T8tvx2oOil5LQvnz58gXZ1h8JC/UEAA50vAAAAABJRU5ErkJggg==">:
                                            National Road number5

                                        </span>
                                    </div>
                                    <p class=" text-xs sm:text-sm line-clamp-1 md:text-sm lg:text-base">At Innovation
                                        Festival you will learn and connect
                                        with experienced researchers, developers, and industry leaders in a
                                        community-based way.</p>
                                    <!-- <div class="flex place-content-end">
                                    <a href="detail"><button class="h-8 px-2 m-2 text-white bg-green-600 transition-colors duration-500 border-solid border-green-600 border-2 rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">More Detail</button></a>
                                </div> -->
                                </div>
                            </div>
                        </a>

                        <a href="detail">
                            <div
                                class="shadow-xl rounded-md transition-colors duration-500 hover:bg-green-200 dark:shadow-slate-500 dark:hover:bg-green-800 dark:shadow-md">
                                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg"
                                    alt="" class="rounded-t-md">
                                <div class="mx-5 h-36">
                                    <h1 class=" font-semibold text-sm sm:text-sm md:text-sm lg:text-lg">This is the
                                        title</h1>
                                    <!-- <h2>Category</h2> -->
                                    <div>
                                        <span class="flex items-center mt-1 text-xs sm:text-sm md:text-sm lg:text-base">
                                            <img class=" w-6"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABj0lEQVR4nO1YwU7CQBDd/8AABzWe9NTqzWTrReLH8RFcSAWBhJvlIhztemjskq4XvdpEmnJes1WJtqR2sGFLnJe8pFmS9+Z1Z6YJhCAQ28eNM20NnOmLYv/27lK3DhiJ6WQmEzqzZ906YKxMP6lbZy2W5+ZebBl2bBlRbJnyO9PG6d+LcvCrjhHF1OwtLk4PCLh4aoTrTCOaNVZn0OJBOtQIl/SsVjjAx5tfL+YdH2WM1Rk0AFiHml1IgEzbfNFp1jPGTqMODgDWoeYbIECecUMOr0cr06E9kpNmY4MAcB1SRgB1zePWVWKoqJ69k81aaAzUKSWAGjRlrt6gonredIg9oE4pAXSSYABrR26AcSGrSIIBON6ArEQLtTv9Hyz7nGEAjjcgK91CDL8DArdQLnCIOxUf4vauf8gYbiGBW+h/z0AbAwjcQrnQvS7Zn2fAFwvdxbI0/aD4n7suD3raC+YZ2oUDPDw+HTIuXitQtFR0eRDee8F+4QBJG83nNdcXXa3t5CfeNrh4BAKBINvCO+WE9Ir/r6VFAAAAAElFTkSuQmCC">
                                            : Sun, Apr9, 2023, 10pm
                                        </span>
                                    </div>
                                    <div>
                                        <span class="flex items-center mt-1 text-xs sm:text-sm md:text-sm lg:text-base">
                                            <img class=" w-6"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADT0lEQVR4nO2X3UsUURjGX4uCUrspqIuCNAW7CAqhIs/sWJa3WUT/QEnSdWaIsEFBUOiMVkJQF3UhhTflBxVIfmzknlmFJLsI6aI7Q8ywcs8R841zdlFbd2Z2Z7ezS8wDDwyz877n+c2ec2YGwJcvX77+G6EOO5BAPRJ4gRp8QgI/pWPH4txFrIHtkG/CU1CIGlxHAj9QA3TxPBIIYiVshXwQarAHCYynEDzRE6hBSW7DEyhFDb56CB8zgemcQeAxKEYNPnoOvwrxAXUoUg9A4FbG4bUViBtqw+uwCzVYcAj0HAnocnELV0E1atDjAPELj8BOdQAELjuEb3Koa3aAaFAHoMFLuzufQm2vTW2/mvSxEJ9tQuiutQE4blM7pRIg+fxPYTeJ715J1wGoEhKY8wxwGLbZAMyq/AdCSUNUQXUKtSdsAEJq0sdCtNiE6HGtJdBnU9ui8jmwGwks2SzG5rTBCSyJnsoAZJjY67Hdnt4rdxsdiqTFtLG/8yh6KQ0vATSozdqrhAa1ygHiEINZCB/KSXgJUAUkYwDi/vD7txBOc9s9fF9Ow0uAAJQjAeYBgKMOFZAPQg1u5v03gJPwKGyxfcFL7i/iOwFyqeAkbm4PL1YalNebFm991floeDlQ4BpeXPO68+GQqDEorxc9RC8loY1Rtt+grMmgLGRQtmhaHNd6oumSK8DEtYa/akyLY6wXGzHD7KoYI6uhg4gb2iLsnAidOHCi772dw7kzZbbhv9eV4P3QrGMPU5qNGBY7i4gFGYVvH4vuMy027D7gqp91D+NyYOP6qaNvwO6nAyn3MYUpH2yzoqWewneEoyWGxafTGjDuSPDKOoBIsDHtPqaEYDOt49GytAHknPQyoMXx7rt5nDl/YCW8OBbnvPYzKBvyArDgdUDhx/2TyE8W42JNIT7pfe+5jxlbEwtpAwjqzAblYruUzrSPYfE36QOMRvd6XQNZNWUzYjNJG2ANxEDuANiIOcrKIROJvdgIs7psTKmUpwxlQ+0Rdjrj50CiOsZYhWGxRglDGc9iYCb2fNFbjAEq9GAMN7Vb/JAZ5hcMyu+YlHXJpzXlU2LtGBb7ZlL2W1gcy/UkfpPXsC6T8tvx2oOil5LQvnz58gXZ1h8JC/UEAA50vAAAAABJRU5ErkJggg==">:
                                            National Road number5

                                        </span>
                                    </div>
                                    <p class=" text-xs sm:text-sm line-clamp-1 md:text-sm lg:text-base">At Innovation
                                        Festival you will learn and connect
                                        with experienced researchers, developers, and industry leaders in a
                                        community-based way.</p>
                                    <!-- <div class="flex place-content-end">
                                    <a href="detail"><button class="h-8 px-2 m-2 text-white bg-green-600 transition-colors duration-500 border-solid border-green-600 border-2 rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">More Detail</button></a>
                                </div> -->
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="flex place-content-end">
                        <a href="detail" class=" hover:text-green-600 text-end m-4"> See more > </a>
                    </div>
                </div>
            </div>
    </div>
    </div>
    </section><br>
    <!-- end event box -->
    <div class="relative">
        <h1 class="text-3xl font-bold text-center m-8 mt-12">Event(s) Today</h1>
    </div>
    <!-- Event today -->
    <section>

        <div class="relative mx-auto ">
            <div class="slide relative">
                <img class="w-full  " src="./img/B2.jpg">
                <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">Welcome to ur source
                    of
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

            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }

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