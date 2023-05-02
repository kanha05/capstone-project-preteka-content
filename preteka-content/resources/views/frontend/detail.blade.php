@extends('frontend.layout')
@section('content')
<body class="dark:bg-black dark:text-white bg-white font-inter">
    <h1 class="text-2xl font-bold text-slate-950 grid place-content-center dark:text-white">
    Begin your Tai Chi journey: Traditional 
    </h1>
    <div class="p-8">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 lg:gap-8">
        <div class="p-4 block">
          <div class="block">
            <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg" alt="poster">
            <div class="h-2 flex place-content-around">
            <button class="h-8 px-2 m-2 text-green-700 transition-colors duration-500 border-solid border-green-700 border-2 rounded-lg focus:shadow-outline hover:bg-green-700 hover:text-white sm:flex flex">
              <svg class="w-5 inline-block" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 01-.923 1.785A5.969 5.969 0 006 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337z"></path>
                </svg>
                Comment
            </button>
          <p class="h-8 px-2 m-2 text-green-700 border-solid border-green-700 border-2 rounded-lg sm:flex flex">Rating: 
          <svg class="w-5 inline-block cursor-pointer" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
        </svg>
        <svg class="w-5 inline-block cursor-pointer" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
        </svg>
        <svg class="w-5 inline-block cursor-pointer" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
        </svg>
        <svg class="w-5 inline-block cursor-pointer" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
        </svg>
        <svg class="w-5 inline-block cursor-pointer" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
        </svg>
          </p>
          <div class="h-8 px-2 m-2 text-green-700 transition-colors duration-500 border-solid border-green-700 border-2 rounded-lg focus:shadow-outline hover:bg-green-700 hover:text-white sm:flex flex">
            <svg class="w-5 inline-block" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z"></path></svg>
            Share
          </div>
      </div>
      </div>
      <br><br>
      <hr>
      <p class="m-2">Rating: 
          <svg class="w-5 inline-block cursor-pointer" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
        </svg>
        <svg class="w-5 inline-block cursor-pointer" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
        </svg>
        <svg class="w-5 inline-block cursor-pointer" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
        </svg>
        <svg class="w-5 inline-block cursor-pointer" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
        </svg>
        <svg class="w-5 inline-block cursor-pointer" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
        </svg>
          </p>
          <div class="flex">
            <img src="https://eitrawmaterials.eu/wp-content/uploads/2016/09/person-icon.png" alt="" class="rounded-full w-12">
            <input class="m-1 px-4 bg-gray-300 placeholder:italic rounded-lg placeholder:text-slate-600 placeholder-gray-500 outline-0 dark:text-black" type="text" name="" placeholder="Write a comment">
            <div class="h-8 px-2 m-2 border-solid rounded-lg bg-green-600 text-white cursor-pointer transition-colors duration-500 hover:bg-green-700 sm:flex flex">
                    <svg class="w-5 inline-block" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                <span class="m-1">Post</span>
              </div>
          </div>
          <p>All Comments</p>
          <div>
            <div class="flex mt-2">
                <div>
                    <img src="https://eitrawmaterials.eu/wp-content/uploads/2016/09/person-icon.png" alt="" class="rounded-full w-12 ">
                </div>
                <div class="ml-2">
                    <div class="font-bold">@kimlang17 <span class="text-xs text-slate-600">2:00pm</span></div>
                    <span class="">This is good event to join for IT</span><br>
                    <a href="" class="text-xs pr-2">Like</a>
                    <a href="" class="text-xs pr-2">Dislike</a>
                    <a href="" class="text-xs pr-2">Reply</a>
                </div>
            </div>
                <hr class="mt-2">
          </div>
          <div>
            <div class="flex mt-2">
                <div>
                    <img src="https://eitrawmaterials.eu/wp-content/uploads/2016/09/person-icon.png" alt="" class="rounded-full w-12">
                </div>
                <div class="ml-2">
                    <div class="font-bold">@kimlang17 <span class="text-xs text-slate-600">2:00pm</span></div>
                    <span class="">This is good event to join for IT</span><br>
                    <a href="" class="text-xs pr-2">Like</a>
                    <a href="" class="text-xs pr-2">Dislike</a>
                    <a href="" class="text-xs pr-2">Reply</a>
                </div>
            </div>
                <hr class="mt-2">
          </div>
          <span id="dots"></span>
          <div id="more" class="hidden">
            <div>
                <div class="flex mt-2">
                    <div>
                        <img src="https://eitrawmaterials.eu/wp-content/uploads/2016/09/person-icon.png" alt="" class="rounded-full w-12">
                    </div>
                    <div class="ml-2">
                        <div class="font-bold">@kanha168 <span class="text-xs text-slate-600">2:00pm</span></div>
                        <span class="">This is good event to join for IT</span><br>
                        <a href="" class="text-xs pr-2">Like</a>
                        <a href="" class="text-xs pr-2">Dislike</a>
                        <a href="" class="text-xs pr-2">Reply</a>
                    </div>
                </div>
                    <hr class="mt-2">
              </div>
              <div>
                <div class="flex mt-2">
                    <div>
                        <img src="https://eitrawmaterials.eu/wp-content/uploads/2016/09/person-icon.png" alt="" class="rounded-full w-12">
                    </div>
                    <div class="ml-2">
                        <div class="font-bold">@laksey111 <span class="text-xs text-slate-600">2:00pm</span></div>
                        <span class="">This is good event to join for IT</span><br>
                        <a href="" class="text-xs pr-2">Like</a>
                        <a href="" class="text-xs pr-2">Dislike</a>
                        <a href="" class="text-xs pr-2">Reply</a>
                    </div>
                </div>
                    <hr class="mt-2">
              </div>
              <div>
                <div class="flex mt-2">
                    <div>
                        <img src="https://eitrawmaterials.eu/wp-content/uploads/2016/09/person-icon.png" alt="" class="rounded-full w-12">
                    </div>
                    <div class="ml-2">
                        <div class="font-bold">@seka222 <span class="text-xs text-slate-600">yesterday</span></div>
                        <span class="">This is good event to join for IT</span><br>
                        <a href="" class="text-xs pr-2">Like</a>
                        <a href="" class="text-xs pr-2">Dislike</a>
                        <a href="" class="text-xs pr-2">Reply</a>
                    </div>
                </div>
                    <hr class="mt-2">
              </div>
          </div>
          <button onclick="toggleText()" id="button" class="text-red-600 italic text-sm">See More</button>
      </div>
    <div class="">
        <div class="flex m-4">
            <div>
              <img class="w-6 m-2" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABj0lEQVR4nO1YwU7CQBDd/8AABzWe9NTqzWTrReLH8RFcSAWBhJvlIhztemjskq4XvdpEmnJes1WJtqR2sGFLnJe8pFmS9+Z1Z6YJhCAQ28eNM20NnOmLYv/27lK3DhiJ6WQmEzqzZ906YKxMP6lbZy2W5+ZebBl2bBlRbJnyO9PG6d+LcvCrjhHF1OwtLk4PCLh4aoTrTCOaNVZn0OJBOtQIl/SsVjjAx5tfL+YdH2WM1Rk0AFiHml1IgEzbfNFp1jPGTqMODgDWoeYbIECecUMOr0cr06E9kpNmY4MAcB1SRgB1zePWVWKoqJ69k81aaAzUKSWAGjRlrt6gonredIg9oE4pAXSSYABrR26AcSGrSIIBON6ArEQLtTv9Hyz7nGEAjjcgK91CDL8DArdQLnCIOxUf4vauf8gYbiGBW+h/z0AbAwjcQrnQvS7Zn2fAFwvdxbI0/aD4n7suD3raC+YZ2oUDPDw+HTIuXitQtFR0eRDee8F+4QBJG83nNdcXXa3t5CfeNrh4BAKBINvCO+WE9Ir/r6VFAAAAAElFTkSuQmCC">
            </div>
            <div class="text-green-600 font-bold m-2">: Sun, Apr 9, 2023 </div>
        </div>
        <div class="flex m-4">
            <div>
                <img class="w-6 m-2" src="data:image/png;base64,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">
            </div>
            <div class="text-green-600 font-bold m-2">: 10:00 PM</div>
        </div>
        <div class="flex m-4">
            <div>
            <img class="w-6 m-2" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADT0lEQVR4nO2X3UsUURjGX4uCUrspqIuCNAW7CAqhIs/sWJa3WUT/QEnSdWaIsEFBUOiMVkJQF3UhhTflBxVIfmzknlmFJLsI6aI7Q8ywcs8R841zdlFbd2Z2Z7ezS8wDDwyz877n+c2ec2YGwJcvX77+G6EOO5BAPRJ4gRp8QgI/pWPH4txFrIHtkG/CU1CIGlxHAj9QA3TxPBIIYiVshXwQarAHCYynEDzRE6hBSW7DEyhFDb56CB8zgemcQeAxKEYNPnoOvwrxAXUoUg9A4FbG4bUViBtqw+uwCzVYcAj0HAnocnELV0E1atDjAPELj8BOdQAELjuEb3Koa3aAaFAHoMFLuzufQm2vTW2/mvSxEJ9tQuiutQE4blM7pRIg+fxPYTeJ715J1wGoEhKY8wxwGLbZAMyq/AdCSUNUQXUKtSdsAEJq0sdCtNiE6HGtJdBnU9ui8jmwGwks2SzG5rTBCSyJnsoAZJjY67Hdnt4rdxsdiqTFtLG/8yh6KQ0vATSozdqrhAa1ygHiEINZCB/KSXgJUAUkYwDi/vD7txBOc9s9fF9Ow0uAAJQjAeYBgKMOFZAPQg1u5v03gJPwKGyxfcFL7i/iOwFyqeAkbm4PL1YalNebFm991floeDlQ4BpeXPO68+GQqDEorxc9RC8loY1Rtt+grMmgLGRQtmhaHNd6oumSK8DEtYa/akyLY6wXGzHD7KoYI6uhg4gb2iLsnAidOHCi772dw7kzZbbhv9eV4P3QrGMPU5qNGBY7i4gFGYVvH4vuMy027D7gqp91D+NyYOP6qaNvwO6nAyn3MYUpH2yzoqWewneEoyWGxafTGjDuSPDKOoBIsDHtPqaEYDOt49GytAHknPQyoMXx7rt5nDl/YCW8OBbnvPYzKBvyArDgdUDhx/2TyE8W42JNIT7pfe+5jxlbEwtpAwjqzAblYruUzrSPYfE36QOMRvd6XQNZNWUzYjNJG2ANxEDuANiIOcrKIROJvdgIs7psTKmUpwxlQ+0Rdjrj50CiOsZYhWGxRglDGc9iYCb2fNFbjAEq9GAMN7Vb/JAZ5hcMyu+YlHXJpzXlU2LtGBb7ZlL2W1gcy/UkfpPXsC6T8tvx2oOil5LQvnz58gXZ1h8JC/UEAA50vAAAAABJRU5ErkJggg==">
            </div>
            <div class="font-bold m-2">: Online</div>
        </div>
        <div class="flex m-4">
            <div class="mr-4">
                Agenda:
            </div>
            <a href="www.sjdfhiaufhlsnf.pdf" class="underline">
                www.sjdfhiaufhlsnf.pdf
            </a>
        </div>
        <div class="flex m-4">
            <button class="h-8 px-2 m-2 text-green-700 transition-colors duration-500 border-solid border-green-700 border-2 rounded-lg focus:shadow-outline hover:bg-green-700 hover:text-white">Register</button>
        </div>
        <div class="font-bold m-4">Available Seats: 100 Seats</div>
        <div class="font-bold m-4">Organizer: Smart Company</div>
        <div class="font-bold m-4">Description: </div>
        <p class="m-4">You enjoy interacting with and helping people. You are open to new ideas and procedures. Although you are calm and controlled you still project enthusiasm and optimism. Your natural supportive, listening and empathetic behavior makes you a good coach. Someone people turn to when they need help or advice.</p>
    </div>
      </div>
    </div>

    <!-- Javascript code -->
    <script>
        function toggleText() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var button = document.getElementById("button");

            if (dots.classList.contains("hidden")) {
                // Show the dots
                dots.classList.remove("hidden");

                // Hide the more text
                moreText.classList.add("hidden");

                // change text of the button
                button.innerHTML = "See more";
            } else {
                // Hide the dots
                dots.classList.add("hidden");

                // hide the more text
                moreText.classList.remove("hidden");

                // change text of the button
                button.innerHTML = "See less";
            }
      }
    </script>
@endsection