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
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABj0lEQVR4nO1YwU7CQBDd/8AABzWe9NTqzWTrReLH8RFcSAWBhJvlIhztemjskq4XvdpEmnJes1WJtqR2sGFLnJe8pFmS9+Z1Z6YJhCAQ28eNM20NnOmLYv/27lK3DhiJ6WQmEzqzZ906YKxMP6lbZy2W5+ZebBl2bBlRbJnyO9PG6d+LcvCrjhHF1OwtLk4PCLh4aoTrTCOaNVZn0OJBOtQIl/SsVjjAx5tfL+YdH2WM1Rk0AFiHml1IgEzbfNFp1jPGTqMODgDWoeYbIECecUMOr0cr06E9kpNmY4MAcB1SRgB1zePWVWKoqJ69k81aaAzUKSWAGjRlrt6gonredIg9oE4pAXSSYABrR26AcSGrSIIBON6ArEQLtTv9Hyz7nGEAjjcgK91CDL8DArdQLnCIOxUf4vauf8gYbiGBW+h/z0AbAwjcQrnQvS7Zn2fAFwvdxbI0/aD4n7suD3raC+YZ2oUDPDw+HTIuXitQtFR0eRDee8F+4QBJG83nNdcXXa3t5CfeNrh4BAKBINvCO+WE9Ir/r6VFAAAAAElFTkSuQmCC">
                    </div>
                    <div class="text-green-600 font-bold">: Sun, Apr 9, 2023 10:00 PM +07 + 1 more event</div>
                </div>
                <div class="flex mt-2">
                    <div>
                    <img class="w-8" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADT0lEQVR4nO2X3UsUURjGX4uCUrspqIuCNAW7CAqhIs/sWJa3WUT/QEnSdWaIsEFBUOiMVkJQF3UhhTflBxVIfmzknlmFJLsI6aI7Q8ywcs8R841zdlFbd2Z2Z7ezS8wDDwyz877n+c2ec2YGwJcvX77+G6EOO5BAPRJ4gRp8QgI/pWPH4txFrIHtkG/CU1CIGlxHAj9QA3TxPBIIYiVshXwQarAHCYynEDzRE6hBSW7DEyhFDb56CB8zgemcQeAxKEYNPnoOvwrxAXUoUg9A4FbG4bUViBtqw+uwCzVYcAj0HAnocnELV0E1atDjAPELj8BOdQAELjuEb3Koa3aAaFAHoMFLuzufQm2vTW2/mvSxEJ9tQuiutQE4blM7pRIg+fxPYTeJ715J1wGoEhKY8wxwGLbZAMyq/AdCSUNUQXUKtSdsAEJq0sdCtNiE6HGtJdBnU9ui8jmwGwks2SzG5rTBCSyJnsoAZJjY67Hdnt4rdxsdiqTFtLG/8yh6KQ0vATSozdqrhAa1ygHiEINZCB/KSXgJUAUkYwDi/vD7txBOc9s9fF9Ow0uAAJQjAeYBgKMOFZAPQg1u5v03gJPwKGyxfcFL7i/iOwFyqeAkbm4PL1YalNebFm991floeDlQ4BpeXPO68+GQqDEorxc9RC8loY1Rtt+grMmgLGRQtmhaHNd6oumSK8DEtYa/akyLY6wXGzHD7KoYI6uhg4gb2iLsnAidOHCi772dw7kzZbbhv9eV4P3QrGMPU5qNGBY7i4gFGYVvH4vuMy027D7gqp91D+NyYOP6qaNvwO6nAyn3MYUpH2yzoqWewneEoyWGxafTGjDuSPDKOoBIsDHtPqaEYDOt49GytAHknPQyoMXx7rt5nDl/YCW8OBbnvPYzKBvyArDgdUDhx/2TyE8W42JNIT7pfe+5jxlbEwtpAwjqzAblYruUzrSPYfE36QOMRvd6XQNZNWUzYjNJG2ANxEDuANiIOcrKIROJvdgIs7psTKmUpwxlQ+0Rdjrj50CiOsZYhWGxRglDGc9iYCb2fNFbjAEq9GAMN7Vb/JAZ5hcMyu+YlHXJpzXlU2LtGBb7ZlL2W1gcy/UkfpPXsC6T8tvx2oOil5LQvnz58gXZ1h8JC/UEAA50vAAAAABJRU5ErkJggg==">
                    </div>
                    <div class="font-bold m-1">: Online</div>
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
    
            <div class="shadow-xl rounded-md transition-colors duration-500 hover:bg-gray-200 dark:shadow-slate-500 dark:hover:bg-slate-800 dark:shadow-md">
                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg" alt="" class="rounded-t-md">
                <div class="px-2">
                    <h1 class="font-bold text-1xl ">Begin your Tai Cai journey: Traditional</h1>
                <div class="flex mt-2">
                    <div>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABj0lEQVR4nO1YwU7CQBDd/8AABzWe9NTqzWTrReLH8RFcSAWBhJvlIhztemjskq4XvdpEmnJes1WJtqR2sGFLnJe8pFmS9+Z1Z6YJhCAQ28eNM20NnOmLYv/27lK3DhiJ6WQmEzqzZ906YKxMP6lbZy2W5+ZebBl2bBlRbJnyO9PG6d+LcvCrjhHF1OwtLk4PCLh4aoTrTCOaNVZn0OJBOtQIl/SsVjjAx5tfL+YdH2WM1Rk0AFiHml1IgEzbfNFp1jPGTqMODgDWoeYbIECecUMOr0cr06E9kpNmY4MAcB1SRgB1zePWVWKoqJ69k81aaAzUKSWAGjRlrt6gonredIg9oE4pAXSSYABrR26AcSGrSIIBON6ArEQLtTv9Hyz7nGEAjjcgK91CDL8DArdQLnCIOxUf4vauf8gYbiGBW+h/z0AbAwjcQrnQvS7Zn2fAFwvdxbI0/aD4n7suD3raC+YZ2oUDPDw+HTIuXitQtFR0eRDee8F+4QBJG83nNdcXXa3t5CfeNrh4BAKBINvCO+WE9Ir/r6VFAAAAAElFTkSuQmCC">
                    </div>
                    <div class="text-green-600 font-bold">: Sun, Apr 9, 2023 10:00 PM +07 + 1 more event</div>
                </div>
                <div class="flex mt-2">
                    <div>
                    <img class="w-8" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADT0lEQVR4nO2X3UsUURjGX4uCUrspqIuCNAW7CAqhIs/sWJa3WUT/QEnSdWaIsEFBUOiMVkJQF3UhhTflBxVIfmzknlmFJLsI6aI7Q8ywcs8R841zdlFbd2Z2Z7ezS8wDDwyz877n+c2ec2YGwJcvX77+G6EOO5BAPRJ4gRp8QgI/pWPH4txFrIHtkG/CU1CIGlxHAj9QA3TxPBIIYiVshXwQarAHCYynEDzRE6hBSW7DEyhFDb56CB8zgemcQeAxKEYNPnoOvwrxAXUoUg9A4FbG4bUViBtqw+uwCzVYcAj0HAnocnELV0E1atDjAPELj8BOdQAELjuEb3Koa3aAaFAHoMFLuzufQm2vTW2/mvSxEJ9tQuiutQE4blM7pRIg+fxPYTeJ715J1wGoEhKY8wxwGLbZAMyq/AdCSUNUQXUKtSdsAEJq0sdCtNiE6HGtJdBnU9ui8jmwGwks2SzG5rTBCSyJnsoAZJjY67Hdnt4rdxsdiqTFtLG/8yh6KQ0vATSozdqrhAa1ygHiEINZCB/KSXgJUAUkYwDi/vD7txBOc9s9fF9Ow0uAAJQjAeYBgKMOFZAPQg1u5v03gJPwKGyxfcFL7i/iOwFyqeAkbm4PL1YalNebFm991floeDlQ4BpeXPO68+GQqDEorxc9RC8loY1Rtt+grMmgLGRQtmhaHNd6oumSK8DEtYa/akyLY6wXGzHD7KoYI6uhg4gb2iLsnAidOHCi772dw7kzZbbhv9eV4P3QrGMPU5qNGBY7i4gFGYVvH4vuMy027D7gqp91D+NyYOP6qaNvwO6nAyn3MYUpH2yzoqWewneEoyWGxafTGjDuSPDKOoBIsDHtPqaEYDOt49GytAHknPQyoMXx7rt5nDl/YCW8OBbnvPYzKBvyArDgdUDhx/2TyE8W42JNIT7pfe+5jxlbEwtpAwjqzAblYruUzrSPYfE36QOMRvd6XQNZNWUzYjNJG2ANxEDuANiIOcrKIROJvdgIs7psTKmUpwxlQ+0Rdjrj50CiOsZYhWGxRglDGc9iYCb2fNFbjAEq9GAMN7Vb/JAZ5hcMyu+YlHXJpzXlU2LtGBb7ZlL2W1gcy/UkfpPXsC6T8tvx2oOil5LQvnz58gXZ1h8JC/UEAA50vAAAAABJRU5ErkJggg==">
                    </div>
                    <div class="font-bold m-1">: Online</div>
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
    
            <div class="shadow-xl rounded-md transition-colors duration-500 hover:bg-gray-200 dark:shadow-slate-500 dark:hover:bg-slate-800 dark:shadow-md">
                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg" alt="" class="rounded-t-md">
                <div class="px-2">
                    <h1 class="font-bold text-1xl ">Begin your Tai Cai journey: Traditional</h1>
                <div class="flex mt-2">
                    <div>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABj0lEQVR4nO1YwU7CQBDd/8AABzWe9NTqzWTrReLH8RFcSAWBhJvlIhztemjskq4XvdpEmnJes1WJtqR2sGFLnJe8pFmS9+Z1Z6YJhCAQ28eNM20NnOmLYv/27lK3DhiJ6WQmEzqzZ906YKxMP6lbZy2W5+ZebBl2bBlRbJnyO9PG6d+LcvCrjhHF1OwtLk4PCLh4aoTrTCOaNVZn0OJBOtQIl/SsVjjAx5tfL+YdH2WM1Rk0AFiHml1IgEzbfNFp1jPGTqMODgDWoeYbIECecUMOr0cr06E9kpNmY4MAcB1SRgB1zePWVWKoqJ69k81aaAzUKSWAGjRlrt6gonredIg9oE4pAXSSYABrR26AcSGrSIIBON6ArEQLtTv9Hyz7nGEAjjcgK91CDL8DArdQLnCIOxUf4vauf8gYbiGBW+h/z0AbAwjcQrnQvS7Zn2fAFwvdxbI0/aD4n7suD3raC+YZ2oUDPDw+HTIuXitQtFR0eRDee8F+4QBJG83nNdcXXa3t5CfeNrh4BAKBINvCO+WE9Ir/r6VFAAAAAElFTkSuQmCC">
                    </div>
                    <div class="text-green-600 font-bold">: Sun, Apr 9, 2023 10:00 PM +07 + 1 more event</div>
                </div>
                <div class="flex mt-2">
                    <div>
                    <img class="w-8" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADT0lEQVR4nO2X3UsUURjGX4uCUrspqIuCNAW7CAqhIs/sWJa3WUT/QEnSdWaIsEFBUOiMVkJQF3UhhTflBxVIfmzknlmFJLsI6aI7Q8ywcs8R841zdlFbd2Z2Z7ezS8wDDwyz877n+c2ec2YGwJcvX77+G6EOO5BAPRJ4gRp8QgI/pWPH4txFrIHtkG/CU1CIGlxHAj9QA3TxPBIIYiVshXwQarAHCYynEDzRE6hBSW7DEyhFDb56CB8zgemcQeAxKEYNPnoOvwrxAXUoUg9A4FbG4bUViBtqw+uwCzVYcAj0HAnocnELV0E1atDjAPELj8BOdQAELjuEb3Koa3aAaFAHoMFLuzufQm2vTW2/mvSxEJ9tQuiutQE4blM7pRIg+fxPYTeJ715J1wGoEhKY8wxwGLbZAMyq/AdCSUNUQXUKtSdsAEJq0sdCtNiE6HGtJdBnU9ui8jmwGwks2SzG5rTBCSyJnsoAZJjY67Hdnt4rdxsdiqTFtLG/8yh6KQ0vATSozdqrhAa1ygHiEINZCB/KSXgJUAUkYwDi/vD7txBOc9s9fF9Ow0uAAJQjAeYBgKMOFZAPQg1u5v03gJPwKGyxfcFL7i/iOwFyqeAkbm4PL1YalNebFm991floeDlQ4BpeXPO68+GQqDEorxc9RC8loY1Rtt+grMmgLGRQtmhaHNd6oumSK8DEtYa/akyLY6wXGzHD7KoYI6uhg4gb2iLsnAidOHCi772dw7kzZbbhv9eV4P3QrGMPU5qNGBY7i4gFGYVvH4vuMy027D7gqp91D+NyYOP6qaNvwO6nAyn3MYUpH2yzoqWewneEoyWGxafTGjDuSPDKOoBIsDHtPqaEYDOt49GytAHknPQyoMXx7rt5nDl/YCW8OBbnvPYzKBvyArDgdUDhx/2TyE8W42JNIT7pfe+5jxlbEwtpAwjqzAblYruUzrSPYfE36QOMRvd6XQNZNWUzYjNJG2ANxEDuANiIOcrKIROJvdgIs7psTKmUpwxlQ+0Rdjrj50CiOsZYhWGxRglDGc9iYCb2fNFbjAEq9GAMN7Vb/JAZ5hcMyu+YlHXJpzXlU2LtGBb7ZlL2W1gcy/UkfpPXsC6T8tvx2oOil5LQvnz58gXZ1h8JC/UEAA50vAAAAABJRU5ErkJggg==">
                    </div>
                    <div class="font-bold m-1">: Online</div>
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

            <div class="shadow-xl rounded-md transition-colors duration-500 hover:bg-gray-200 dark:shadow-slate-500 dark:hover:bg-slate-800 dark:shadow-md">
                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg" alt="" class="rounded-t-md">
                <div class="px-2">
                    <h1 class="font-bold text-1xl ">Begin your Tai Cai journey: Traditional</h1>
                <div class="flex mt-2">
                    <div>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABj0lEQVR4nO1YwU7CQBDd/8AABzWe9NTqzWTrReLH8RFcSAWBhJvlIhztemjskq4XvdpEmnJes1WJtqR2sGFLnJe8pFmS9+Z1Z6YJhCAQ28eNM20NnOmLYv/27lK3DhiJ6WQmEzqzZ906YKxMP6lbZy2W5+ZebBl2bBlRbJnyO9PG6d+LcvCrjhHF1OwtLk4PCLh4aoTrTCOaNVZn0OJBOtQIl/SsVjjAx5tfL+YdH2WM1Rk0AFiHml1IgEzbfNFp1jPGTqMODgDWoeYbIECecUMOr0cr06E9kpNmY4MAcB1SRgB1zePWVWKoqJ69k81aaAzUKSWAGjRlrt6gonredIg9oE4pAXSSYABrR26AcSGrSIIBON6ArEQLtTv9Hyz7nGEAjjcgK91CDL8DArdQLnCIOxUf4vauf8gYbiGBW+h/z0AbAwjcQrnQvS7Zn2fAFwvdxbI0/aD4n7suD3raC+YZ2oUDPDw+HTIuXitQtFR0eRDee8F+4QBJG83nNdcXXa3t5CfeNrh4BAKBINvCO+WE9Ir/r6VFAAAAAElFTkSuQmCC">
                    </div>
                    <div class="text-green-600 font-bold">: Sun, Apr 9, 2023 10:00 PM +07 + 1 more event</div>
                </div>
                <div class="flex mt-2">
                    <div>
                    <img class="w-8" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADT0lEQVR4nO2X3UsUURjGX4uCUrspqIuCNAW7CAqhIs/sWJa3WUT/QEnSdWaIsEFBUOiMVkJQF3UhhTflBxVIfmzknlmFJLsI6aI7Q8ywcs8R841zdlFbd2Z2Z7ezS8wDDwyz877n+c2ec2YGwJcvX77+G6EOO5BAPRJ4gRp8QgI/pWPH4txFrIHtkG/CU1CIGlxHAj9QA3TxPBIIYiVshXwQarAHCYynEDzRE6hBSW7DEyhFDb56CB8zgemcQeAxKEYNPnoOvwrxAXUoUg9A4FbG4bUViBtqw+uwCzVYcAj0HAnocnELV0E1atDjAPELj8BOdQAELjuEb3Koa3aAaFAHoMFLuzufQm2vTW2/mvSxEJ9tQuiutQE4blM7pRIg+fxPYTeJ715J1wGoEhKY8wxwGLbZAMyq/AdCSUNUQXUKtSdsAEJq0sdCtNiE6HGtJdBnU9ui8jmwGwks2SzG5rTBCSyJnsoAZJjY67Hdnt4rdxsdiqTFtLG/8yh6KQ0vATSozdqrhAa1ygHiEINZCB/KSXgJUAUkYwDi/vD7txBOc9s9fF9Ow0uAAJQjAeYBgKMOFZAPQg1u5v03gJPwKGyxfcFL7i/iOwFyqeAkbm4PL1YalNebFm991floeDlQ4BpeXPO68+GQqDEorxc9RC8loY1Rtt+grMmgLGRQtmhaHNd6oumSK8DEtYa/akyLY6wXGzHD7KoYI6uhg4gb2iLsnAidOHCi772dw7kzZbbhv9eV4P3QrGMPU5qNGBY7i4gFGYVvH4vuMy027D7gqp91D+NyYOP6qaNvwO6nAyn3MYUpH2yzoqWewneEoyWGxafTGjDuSPDKOoBIsDHtPqaEYDOt49GytAHknPQyoMXx7rt5nDl/YCW8OBbnvPYzKBvyArDgdUDhx/2TyE8W42JNIT7pfe+5jxlbEwtpAwjqzAblYruUzrSPYfE36QOMRvd6XQNZNWUzYjNJG2ANxEDuANiIOcrKIROJvdgIs7psTKmUpwxlQ+0Rdjrj50CiOsZYhWGxRglDGc9iYCb2fNFbjAEq9GAMN7Vb/JAZ5hcMyu+YlHXJpzXlU2LtGBb7ZlL2W1gcy/UkfpPXsC6T8tvx2oOil5LQvnz58gXZ1h8JC/UEAA50vAAAAABJRU5ErkJggg==">
                    </div>
                    <div class="font-bold m-1">: Online</div>
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
    
            <!-- row2 -->
    
            <div class="shadow-xl rounded-md transition-colors duration-500 hover:bg-gray-200 dark:shadow-slate-500 dark:hover:bg-slate-800 dark:shadow-md">
                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg" alt="" class="rounded-t-md">
                <div class="px-2">
                    <h1 class="font-bold text-1xl ">Begin your Tai Cai journey: Traditional</h1>
                <div class="flex mt-2">
                    <div>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABj0lEQVR4nO1YwU7CQBDd/8AABzWe9NTqzWTrReLH8RFcSAWBhJvlIhztemjskq4XvdpEmnJes1WJtqR2sGFLnJe8pFmS9+Z1Z6YJhCAQ28eNM20NnOmLYv/27lK3DhiJ6WQmEzqzZ906YKxMP6lbZy2W5+ZebBl2bBlRbJnyO9PG6d+LcvCrjhHF1OwtLk4PCLh4aoTrTCOaNVZn0OJBOtQIl/SsVjjAx5tfL+YdH2WM1Rk0AFiHml1IgEzbfNFp1jPGTqMODgDWoeYbIECecUMOr0cr06E9kpNmY4MAcB1SRgB1zePWVWKoqJ69k81aaAzUKSWAGjRlrt6gonredIg9oE4pAXSSYABrR26AcSGrSIIBON6ArEQLtTv9Hyz7nGEAjjcgK91CDL8DArdQLnCIOxUf4vauf8gYbiGBW+h/z0AbAwjcQrnQvS7Zn2fAFwvdxbI0/aD4n7suD3raC+YZ2oUDPDw+HTIuXitQtFR0eRDee8F+4QBJG83nNdcXXa3t5CfeNrh4BAKBINvCO+WE9Ir/r6VFAAAAAElFTkSuQmCC">
                    </div>
                    <div class="text-green-600 font-bold">: Sun, Apr 9, 2023 10:00 PM +07 + 1 more event</div>
                </div>
                <div class="flex mt-2">
                    <div>
                    <img class="w-8" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADT0lEQVR4nO2X3UsUURjGX4uCUrspqIuCNAW7CAqhIs/sWJa3WUT/QEnSdWaIsEFBUOiMVkJQF3UhhTflBxVIfmzknlmFJLsI6aI7Q8ywcs8R841zdlFbd2Z2Z7ezS8wDDwyz877n+c2ec2YGwJcvX77+G6EOO5BAPRJ4gRp8QgI/pWPH4txFrIHtkG/CU1CIGlxHAj9QA3TxPBIIYiVshXwQarAHCYynEDzRE6hBSW7DEyhFDb56CB8zgemcQeAxKEYNPnoOvwrxAXUoUg9A4FbG4bUViBtqw+uwCzVYcAj0HAnocnELV0E1atDjAPELj8BOdQAELjuEb3Koa3aAaFAHoMFLuzufQm2vTW2/mvSxEJ9tQuiutQE4blM7pRIg+fxPYTeJ715J1wGoEhKY8wxwGLbZAMyq/AdCSUNUQXUKtSdsAEJq0sdCtNiE6HGtJdBnU9ui8jmwGwks2SzG5rTBCSyJnsoAZJjY67Hdnt4rdxsdiqTFtLG/8yh6KQ0vATSozdqrhAa1ygHiEINZCB/KSXgJUAUkYwDi/vD7txBOc9s9fF9Ow0uAAJQjAeYBgKMOFZAPQg1u5v03gJPwKGyxfcFL7i/iOwFyqeAkbm4PL1YalNebFm991floeDlQ4BpeXPO68+GQqDEorxc9RC8loY1Rtt+grMmgLGRQtmhaHNd6oumSK8DEtYa/akyLY6wXGzHD7KoYI6uhg4gb2iLsnAidOHCi772dw7kzZbbhv9eV4P3QrGMPU5qNGBY7i4gFGYVvH4vuMy027D7gqp91D+NyYOP6qaNvwO6nAyn3MYUpH2yzoqWewneEoyWGxafTGjDuSPDKOoBIsDHtPqaEYDOt49GytAHknPQyoMXx7rt5nDl/YCW8OBbnvPYzKBvyArDgdUDhx/2TyE8W42JNIT7pfe+5jxlbEwtpAwjqzAblYruUzrSPYfE36QOMRvd6XQNZNWUzYjNJG2ANxEDuANiIOcrKIROJvdgIs7psTKmUpwxlQ+0Rdjrj50CiOsZYhWGxRglDGc9iYCb2fNFbjAEq9GAMN7Vb/JAZ5hcMyu+YlHXJpzXlU2LtGBb7ZlL2W1gcy/UkfpPXsC6T8tvx2oOil5LQvnz58gXZ1h8JC/UEAA50vAAAAABJRU5ErkJggg==">
                    </div>
                    <div class="font-bold m-1">: Online</div>
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
    
            <div class="shadow-xl rounded-md transition-colors duration-500 hover:bg-gray-200 dark:shadow-slate-500 dark:hover:bg-slate-800 dark:shadow-md">
                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg" alt="" class="rounded-t-md">
                <div class="px-2">
                    <h1 class="font-bold text-1xl ">Begin your Tai Cai journey: Traditional</h1>
                <div class="flex mt-2">
                    <div>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABj0lEQVR4nO1YwU7CQBDd/8AABzWe9NTqzWTrReLH8RFcSAWBhJvlIhztemjskq4XvdpEmnJes1WJtqR2sGFLnJe8pFmS9+Z1Z6YJhCAQ28eNM20NnOmLYv/27lK3DhiJ6WQmEzqzZ906YKxMP6lbZy2W5+ZebBl2bBlRbJnyO9PG6d+LcvCrjhHF1OwtLk4PCLh4aoTrTCOaNVZn0OJBOtQIl/SsVjjAx5tfL+YdH2WM1Rk0AFiHml1IgEzbfNFp1jPGTqMODgDWoeYbIECecUMOr0cr06E9kpNmY4MAcB1SRgB1zePWVWKoqJ69k81aaAzUKSWAGjRlrt6gonredIg9oE4pAXSSYABrR26AcSGrSIIBON6ArEQLtTv9Hyz7nGEAjjcgK91CDL8DArdQLnCIOxUf4vauf8gYbiGBW+h/z0AbAwjcQrnQvS7Zn2fAFwvdxbI0/aD4n7suD3raC+YZ2oUDPDw+HTIuXitQtFR0eRDee8F+4QBJG83nNdcXXa3t5CfeNrh4BAKBINvCO+WE9Ir/r6VFAAAAAElFTkSuQmCC">
                    </div>
                    <div class="text-green-600 font-bold">: Sun, Apr 9, 2023 10:00 PM +07 + 1 more event</div>
                </div>
                <div class="flex mt-2">
                    <div>
                    <img class="w-8" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADT0lEQVR4nO2X3UsUURjGX4uCUrspqIuCNAW7CAqhIs/sWJa3WUT/QEnSdWaIsEFBUOiMVkJQF3UhhTflBxVIfmzknlmFJLsI6aI7Q8ywcs8R841zdlFbd2Z2Z7ezS8wDDwyz877n+c2ec2YGwJcvX77+G6EOO5BAPRJ4gRp8QgI/pWPH4txFrIHtkG/CU1CIGlxHAj9QA3TxPBIIYiVshXwQarAHCYynEDzRE6hBSW7DEyhFDb56CB8zgemcQeAxKEYNPnoOvwrxAXUoUg9A4FbG4bUViBtqw+uwCzVYcAj0HAnocnELV0E1atDjAPELj8BOdQAELjuEb3Koa3aAaFAHoMFLuzufQm2vTW2/mvSxEJ9tQuiutQE4blM7pRIg+fxPYTeJ715J1wGoEhKY8wxwGLbZAMyq/AdCSUNUQXUKtSdsAEJq0sdCtNiE6HGtJdBnU9ui8jmwGwks2SzG5rTBCSyJnsoAZJjY67Hdnt4rdxsdiqTFtLG/8yh6KQ0vATSozdqrhAa1ygHiEINZCB/KSXgJUAUkYwDi/vD7txBOc9s9fF9Ow0uAAJQjAeYBgKMOFZAPQg1u5v03gJPwKGyxfcFL7i/iOwFyqeAkbm4PL1YalNebFm991floeDlQ4BpeXPO68+GQqDEorxc9RC8loY1Rtt+grMmgLGRQtmhaHNd6oumSK8DEtYa/akyLY6wXGzHD7KoYI6uhg4gb2iLsnAidOHCi772dw7kzZbbhv9eV4P3QrGMPU5qNGBY7i4gFGYVvH4vuMy027D7gqp91D+NyYOP6qaNvwO6nAyn3MYUpH2yzoqWewneEoyWGxafTGjDuSPDKOoBIsDHtPqaEYDOt49GytAHknPQyoMXx7rt5nDl/YCW8OBbnvPYzKBvyArDgdUDhx/2TyE8W42JNIT7pfe+5jxlbEwtpAwjqzAblYruUzrSPYfE36QOMRvd6XQNZNWUzYjNJG2ANxEDuANiIOcrKIROJvdgIs7psTKmUpwxlQ+0Rdjrj50CiOsZYhWGxRglDGc9iYCb2fNFbjAEq9GAMN7Vb/JAZ5hcMyu+YlHXJpzXlU2LtGBb7ZlL2W1gcy/UkfpPXsC6T8tvx2oOil5LQvnz58gXZ1h8JC/UEAA50vAAAAABJRU5ErkJggg==">
                    </div>
                    <div class="font-bold m-1">: Online</div>
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
    
            <div class="shadow-xl rounded-md transition-colors duration-500 hover:bg-gray-200 dark:shadow-slate-500 dark:hover:bg-slate-800 dark:shadow-md">
                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg" alt="" class="rounded-t-md">
                <div class="px-2">
                    <h1 class="font-bold text-1xl ">Begin your Tai Cai journey: Traditional</h1>
                <div class="flex mt-2">
                    <div>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABj0lEQVR4nO1YwU7CQBDd/8AABzWe9NTqzWTrReLH8RFcSAWBhJvlIhztemjskq4XvdpEmnJes1WJtqR2sGFLnJe8pFmS9+Z1Z6YJhCAQ28eNM20NnOmLYv/27lK3DhiJ6WQmEzqzZ906YKxMP6lbZy2W5+ZebBl2bBlRbJnyO9PG6d+LcvCrjhHF1OwtLk4PCLh4aoTrTCOaNVZn0OJBOtQIl/SsVjjAx5tfL+YdH2WM1Rk0AFiHml1IgEzbfNFp1jPGTqMODgDWoeYbIECecUMOr0cr06E9kpNmY4MAcB1SRgB1zePWVWKoqJ69k81aaAzUKSWAGjRlrt6gonredIg9oE4pAXSSYABrR26AcSGrSIIBON6ArEQLtTv9Hyz7nGEAjjcgK91CDL8DArdQLnCIOxUf4vauf8gYbiGBW+h/z0AbAwjcQrnQvS7Zn2fAFwvdxbI0/aD4n7suD3raC+YZ2oUDPDw+HTIuXitQtFR0eRDee8F+4QBJG83nNdcXXa3t5CfeNrh4BAKBINvCO+WE9Ir/r6VFAAAAAElFTkSuQmCC">
                    </div>
                    <div class="text-green-600 font-bold">: Sun, Apr 9, 2023 10:00 PM +07 + 1 more event</div>
                </div>
                <div class="flex mt-2">
                    <div>
                    <img class="w-8" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADT0lEQVR4nO2X3UsUURjGX4uCUrspqIuCNAW7CAqhIs/sWJa3WUT/QEnSdWaIsEFBUOiMVkJQF3UhhTflBxVIfmzknlmFJLsI6aI7Q8ywcs8R841zdlFbd2Z2Z7ezS8wDDwyz877n+c2ec2YGwJcvX77+G6EOO5BAPRJ4gRp8QgI/pWPH4txFrIHtkG/CU1CIGlxHAj9QA3TxPBIIYiVshXwQarAHCYynEDzRE6hBSW7DEyhFDb56CB8zgemcQeAxKEYNPnoOvwrxAXUoUg9A4FbG4bUViBtqw+uwCzVYcAj0HAnocnELV0E1atDjAPELj8BOdQAELjuEb3Koa3aAaFAHoMFLuzufQm2vTW2/mvSxEJ9tQuiutQE4blM7pRIg+fxPYTeJ715J1wGoEhKY8wxwGLbZAMyq/AdCSUNUQXUKtSdsAEJq0sdCtNiE6HGtJdBnU9ui8jmwGwks2SzG5rTBCSyJnsoAZJjY67Hdnt4rdxsdiqTFtLG/8yh6KQ0vATSozdqrhAa1ygHiEINZCB/KSXgJUAUkYwDi/vD7txBOc9s9fF9Ow0uAAJQjAeYBgKMOFZAPQg1u5v03gJPwKGyxfcFL7i/iOwFyqeAkbm4PL1YalNebFm991floeDlQ4BpeXPO68+GQqDEorxc9RC8loY1Rtt+grMmgLGRQtmhaHNd6oumSK8DEtYa/akyLY6wXGzHD7KoYI6uhg4gb2iLsnAidOHCi772dw7kzZbbhv9eV4P3QrGMPU5qNGBY7i4gFGYVvH4vuMy027D7gqp91D+NyYOP6qaNvwO6nAyn3MYUpH2yzoqWewneEoyWGxafTGjDuSPDKOoBIsDHtPqaEYDOt49GytAHknPQyoMXx7rt5nDl/YCW8OBbnvPYzKBvyArDgdUDhx/2TyE8W42JNIT7pfe+5jxlbEwtpAwjqzAblYruUzrSPYfE36QOMRvd6XQNZNWUzYjNJG2ANxEDuANiIOcrKIROJvdgIs7psTKmUpwxlQ+0Rdjrj50CiOsZYhWGxRglDGc9iYCb2fNFbjAEq9GAMN7Vb/JAZ5hcMyu+YlHXJpzXlU2LtGBb7ZlL2W1gcy/UkfpPXsC6T8tvx2oOil5LQvnz58gXZ1h8JC/UEAA50vAAAAABJRU5ErkJggg==">
                    </div>
                    <div class="font-bold m-1">: Online</div>
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
    
            <div class="shadow-xl rounded-md transition-colors duration-500 hover:bg-gray-200 dark:shadow-slate-500 dark:hover:bg-slate-800 dark:shadow-md">
                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg" alt="" class="rounded-t-md">
                <div class="px-2">
                    <h1 class="font-bold text-1xl ">Begin your Tai Cai journey: Traditional</h1>
                <div class="flex mt-2">
                    <div>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABj0lEQVR4nO1YwU7CQBDd/8AABzWe9NTqzWTrReLH8RFcSAWBhJvlIhztemjskq4XvdpEmnJes1WJtqR2sGFLnJe8pFmS9+Z1Z6YJhCAQ28eNM20NnOmLYv/27lK3DhiJ6WQmEzqzZ906YKxMP6lbZy2W5+ZebBl2bBlRbJnyO9PG6d+LcvCrjhHF1OwtLk4PCLh4aoTrTCOaNVZn0OJBOtQIl/SsVjjAx5tfL+YdH2WM1Rk0AFiHml1IgEzbfNFp1jPGTqMODgDWoeYbIECecUMOr0cr06E9kpNmY4MAcB1SRgB1zePWVWKoqJ69k81aaAzUKSWAGjRlrt6gonredIg9oE4pAXSSYABrR26AcSGrSIIBON6ArEQLtTv9Hyz7nGEAjjcgK91CDL8DArdQLnCIOxUf4vauf8gYbiGBW+h/z0AbAwjcQrnQvS7Zn2fAFwvdxbI0/aD4n7suD3raC+YZ2oUDPDw+HTIuXitQtFR0eRDee8F+4QBJG83nNdcXXa3t5CfeNrh4BAKBINvCO+WE9Ir/r6VFAAAAAElFTkSuQmCC">
                    </div>
                    <div class="text-green-600 font-bold">: Sun, Apr 9, 2023 10:00 PM +07 + 1 more event</div>
                </div>
                <div class="flex mt-2">
                    <div>
                    <img class="w-8" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADT0lEQVR4nO2X3UsUURjGX4uCUrspqIuCNAW7CAqhIs/sWJa3WUT/QEnSdWaIsEFBUOiMVkJQF3UhhTflBxVIfmzknlmFJLsI6aI7Q8ywcs8R841zdlFbd2Z2Z7ezS8wDDwyz877n+c2ec2YGwJcvX77+G6EOO5BAPRJ4gRp8QgI/pWPH4txFrIHtkG/CU1CIGlxHAj9QA3TxPBIIYiVshXwQarAHCYynEDzRE6hBSW7DEyhFDb56CB8zgemcQeAxKEYNPnoOvwrxAXUoUg9A4FbG4bUViBtqw+uwCzVYcAj0HAnocnELV0E1atDjAPELj8BOdQAELjuEb3Koa3aAaFAHoMFLuzufQm2vTW2/mvSxEJ9tQuiutQE4blM7pRIg+fxPYTeJ715J1wGoEhKY8wxwGLbZAMyq/AdCSUNUQXUKtSdsAEJq0sdCtNiE6HGtJdBnU9ui8jmwGwks2SzG5rTBCSyJnsoAZJjY67Hdnt4rdxsdiqTFtLG/8yh6KQ0vATSozdqrhAa1ygHiEINZCB/KSXgJUAUkYwDi/vD7txBOc9s9fF9Ow0uAAJQjAeYBgKMOFZAPQg1u5v03gJPwKGyxfcFL7i/iOwFyqeAkbm4PL1YalNebFm991floeDlQ4BpeXPO68+GQqDEorxc9RC8loY1Rtt+grMmgLGRQtmhaHNd6oumSK8DEtYa/akyLY6wXGzHD7KoYI6uhg4gb2iLsnAidOHCi772dw7kzZbbhv9eV4P3QrGMPU5qNGBY7i4gFGYVvH4vuMy027D7gqp91D+NyYOP6qaNvwO6nAyn3MYUpH2yzoqWewneEoyWGxafTGjDuSPDKOoBIsDHtPqaEYDOt49GytAHknPQyoMXx7rt5nDl/YCW8OBbnvPYzKBvyArDgdUDhx/2TyE8W42JNIT7pfe+5jxlbEwtpAwjqzAblYruUzrSPYfE36QOMRvd6XQNZNWUzYjNJG2ANxEDuANiIOcrKIROJvdgIs7psTKmUpwxlQ+0Rdjrj50CiOsZYhWGxRglDGc9iYCb2fNFbjAEq9GAMN7Vb/JAZ5hcMyu+YlHXJpzXlU2LtGBb7ZlL2W1gcy/UkfpPXsC6T8tvx2oOil5LQvnz58gXZ1h8JC/UEAA50vAAAAABJRU5ErkJggg==">
                    </div>
                    <div class="font-bold m-1">: Online</div>
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
            <div class="shadow-xl rounded-md transition-colors duration-500 hover:bg-gray-200 dark:shadow-slate-500 dark:hover:bg-slate-800 dark:shadow-md">
                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg" alt="" class="rounded-t-md">
                <div class="px-2">
                    <h1 class="font-bold text-1xl ">Begin your Tai Cai journey: Traditional</h1>
                <div class="flex mt-2">
                    <div>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABj0lEQVR4nO1YwU7CQBDd/8AABzWe9NTqzWTrReLH8RFcSAWBhJvlIhztemjskq4XvdpEmnJes1WJtqR2sGFLnJe8pFmS9+Z1Z6YJhCAQ28eNM20NnOmLYv/27lK3DhiJ6WQmEzqzZ906YKxMP6lbZy2W5+ZebBl2bBlRbJnyO9PG6d+LcvCrjhHF1OwtLk4PCLh4aoTrTCOaNVZn0OJBOtQIl/SsVjjAx5tfL+YdH2WM1Rk0AFiHml1IgEzbfNFp1jPGTqMODgDWoeYbIECecUMOr0cr06E9kpNmY4MAcB1SRgB1zePWVWKoqJ69k81aaAzUKSWAGjRlrt6gonredIg9oE4pAXSSYABrR26AcSGrSIIBON6ArEQLtTv9Hyz7nGEAjjcgK91CDL8DArdQLnCIOxUf4vauf8gYbiGBW+h/z0AbAwjcQrnQvS7Zn2fAFwvdxbI0/aD4n7suD3raC+YZ2oUDPDw+HTIuXitQtFR0eRDee8F+4QBJG83nNdcXXa3t5CfeNrh4BAKBINvCO+WE9Ir/r6VFAAAAAElFTkSuQmCC">
                    </div>
                    <div class="text-green-600 font-bold">: Sun, Apr 9, 2023 10:00 PM +07 + 1 more event</div>
                </div>
                <div class="flex mt-2">
                    <div>
                    <img class="w-8" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADT0lEQVR4nO2X3UsUURjGX4uCUrspqIuCNAW7CAqhIs/sWJa3WUT/QEnSdWaIsEFBUOiMVkJQF3UhhTflBxVIfmzknlmFJLsI6aI7Q8ywcs8R841zdlFbd2Z2Z7ezS8wDDwyz877n+c2ec2YGwJcvX77+G6EOO5BAPRJ4gRp8QgI/pWPH4txFrIHtkG/CU1CIGlxHAj9QA3TxPBIIYiVshXwQarAHCYynEDzRE6hBSW7DEyhFDb56CB8zgemcQeAxKEYNPnoOvwrxAXUoUg9A4FbG4bUViBtqw+uwCzVYcAj0HAnocnELV0E1atDjAPELj8BOdQAELjuEb3Koa3aAaFAHoMFLuzufQm2vTW2/mvSxEJ9tQuiutQE4blM7pRIg+fxPYTeJ715J1wGoEhKY8wxwGLbZAMyq/AdCSUNUQXUKtSdsAEJq0sdCtNiE6HGtJdBnU9ui8jmwGwks2SzG5rTBCSyJnsoAZJjY67Hdnt4rdxsdiqTFtLG/8yh6KQ0vATSozdqrhAa1ygHiEINZCB/KSXgJUAUkYwDi/vD7txBOc9s9fF9Ow0uAAJQjAeYBgKMOFZAPQg1u5v03gJPwKGyxfcFL7i/iOwFyqeAkbm4PL1YalNebFm991floeDlQ4BpeXPO68+GQqDEorxc9RC8loY1Rtt+grMmgLGRQtmhaHNd6oumSK8DEtYa/akyLY6wXGzHD7KoYI6uhg4gb2iLsnAidOHCi772dw7kzZbbhv9eV4P3QrGMPU5qNGBY7i4gFGYVvH4vuMy027D7gqp91D+NyYOP6qaNvwO6nAyn3MYUpH2yzoqWewneEoyWGxafTGjDuSPDKOoBIsDHtPqaEYDOt49GytAHknPQyoMXx7rt5nDl/YCW8OBbnvPYzKBvyArDgdUDhx/2TyE8W42JNIT7pfe+5jxlbEwtpAwjqzAblYruUzrSPYfE36QOMRvd6XQNZNWUzYjNJG2ANxEDuANiIOcrKIROJvdgIs7psTKmUpwxlQ+0Rdjrj50CiOsZYhWGxRglDGc9iYCb2fNFbjAEq9GAMN7Vb/JAZ5hcMyu+YlHXJpzXlU2LtGBb7ZlL2W1gcy/UkfpPXsC6T8tvx2oOil5LQvnz58gXZ1h8JC/UEAA50vAAAAABJRU5ErkJggg==">
                    </div>
                    <div class="font-bold m-1">: Online</div>
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
    
            <div class="shadow-xl rounded-md transition-colors duration-500 hover:bg-gray-200 dark:shadow-slate-500 dark:hover:bg-slate-800 dark:shadow-md">
                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg" alt="" class="rounded-t-md">
                <div class="px-2">
                    <h1 class="font-bold text-1xl ">Begin your Tai Cai journey: Traditional</h1>
                <div class="flex mt-2">
                    <div>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABj0lEQVR4nO1YwU7CQBDd/8AABzWe9NTqzWTrReLH8RFcSAWBhJvlIhztemjskq4XvdpEmnJes1WJtqR2sGFLnJe8pFmS9+Z1Z6YJhCAQ28eNM20NnOmLYv/27lK3DhiJ6WQmEzqzZ906YKxMP6lbZy2W5+ZebBl2bBlRbJnyO9PG6d+LcvCrjhHF1OwtLk4PCLh4aoTrTCOaNVZn0OJBOtQIl/SsVjjAx5tfL+YdH2WM1Rk0AFiHml1IgEzbfNFp1jPGTqMODgDWoeYbIECecUMOr0cr06E9kpNmY4MAcB1SRgB1zePWVWKoqJ69k81aaAzUKSWAGjRlrt6gonredIg9oE4pAXSSYABrR26AcSGrSIIBON6ArEQLtTv9Hyz7nGEAjjcgK91CDL8DArdQLnCIOxUf4vauf8gYbiGBW+h/z0AbAwjcQrnQvS7Zn2fAFwvdxbI0/aD4n7suD3raC+YZ2oUDPDw+HTIuXitQtFR0eRDee8F+4QBJG83nNdcXXa3t5CfeNrh4BAKBINvCO+WE9Ir/r6VFAAAAAElFTkSuQmCC">
                    </div>
                    <div class="text-green-600 font-bold">: Sun, Apr 9, 2023 10:00 PM +07 + 1 more event</div>
                </div>
                <div class="flex mt-2">
                    <div>
                    <img class="w-8" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADT0lEQVR4nO2X3UsUURjGX4uCUrspqIuCNAW7CAqhIs/sWJa3WUT/QEnSdWaIsEFBUOiMVkJQF3UhhTflBxVIfmzknlmFJLsI6aI7Q8ywcs8R841zdlFbd2Z2Z7ezS8wDDwyz877n+c2ec2YGwJcvX77+G6EOO5BAPRJ4gRp8QgI/pWPH4txFrIHtkG/CU1CIGlxHAj9QA3TxPBIIYiVshXwQarAHCYynEDzRE6hBSW7DEyhFDb56CB8zgemcQeAxKEYNPnoOvwrxAXUoUg9A4FbG4bUViBtqw+uwCzVYcAj0HAnocnELV0E1atDjAPELj8BOdQAELjuEb3Koa3aAaFAHoMFLuzufQm2vTW2/mvSxEJ9tQuiutQE4blM7pRIg+fxPYTeJ715J1wGoEhKY8wxwGLbZAMyq/AdCSUNUQXUKtSdsAEJq0sdCtNiE6HGtJdBnU9ui8jmwGwks2SzG5rTBCSyJnsoAZJjY67Hdnt4rdxsdiqTFtLG/8yh6KQ0vATSozdqrhAa1ygHiEINZCB/KSXgJUAUkYwDi/vD7txBOc9s9fF9Ow0uAAJQjAeYBgKMOFZAPQg1u5v03gJPwKGyxfcFL7i/iOwFyqeAkbm4PL1YalNebFm991floeDlQ4BpeXPO68+GQqDEorxc9RC8loY1Rtt+grMmgLGRQtmhaHNd6oumSK8DEtYa/akyLY6wXGzHD7KoYI6uhg4gb2iLsnAidOHCi772dw7kzZbbhv9eV4P3QrGMPU5qNGBY7i4gFGYVvH4vuMy027D7gqp91D+NyYOP6qaNvwO6nAyn3MYUpH2yzoqWewneEoyWGxafTGjDuSPDKOoBIsDHtPqaEYDOt49GytAHknPQyoMXx7rt5nDl/YCW8OBbnvPYzKBvyArDgdUDhx/2TyE8W42JNIT7pfe+5jxlbEwtpAwjqzAblYruUzrSPYfE36QOMRvd6XQNZNWUzYjNJG2ANxEDuANiIOcrKIROJvdgIs7psTKmUpwxlQ+0Rdjrj50CiOsZYhWGxRglDGc9iYCb2fNFbjAEq9GAMN7Vb/JAZ5hcMyu+YlHXJpzXlU2LtGBb7ZlL2W1gcy/UkfpPXsC6T8tvx2oOil5LQvnz58gXZ1h8JC/UEAA50vAAAAABJRU5ErkJggg==">
                    </div>
                    <div class="font-bold m-1">: Online</div>
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
    
            <div class="shadow-xl rounded-md transition-colors duration-500 hover:bg-gray-200 dark:shadow-slate-500 dark:hover:bg-slate-800 dark:shadow-md">
                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg" alt="" class="rounded-t-md">
                <div class="px-2">
                    <h1 class="font-bold text-1xl ">Begin your Tai Cai journey: Traditional</h1>
                <div class="flex mt-2">
                    <div>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABj0lEQVR4nO1YwU7CQBDd/8AABzWe9NTqzWTrReLH8RFcSAWBhJvlIhztemjskq4XvdpEmnJes1WJtqR2sGFLnJe8pFmS9+Z1Z6YJhCAQ28eNM20NnOmLYv/27lK3DhiJ6WQmEzqzZ906YKxMP6lbZy2W5+ZebBl2bBlRbJnyO9PG6d+LcvCrjhHF1OwtLk4PCLh4aoTrTCOaNVZn0OJBOtQIl/SsVjjAx5tfL+YdH2WM1Rk0AFiHml1IgEzbfNFp1jPGTqMODgDWoeYbIECecUMOr0cr06E9kpNmY4MAcB1SRgB1zePWVWKoqJ69k81aaAzUKSWAGjRlrt6gonredIg9oE4pAXSSYABrR26AcSGrSIIBON6ArEQLtTv9Hyz7nGEAjjcgK91CDL8DArdQLnCIOxUf4vauf8gYbiGBW+h/z0AbAwjcQrnQvS7Zn2fAFwvdxbI0/aD4n7suD3raC+YZ2oUDPDw+HTIuXitQtFR0eRDee8F+4QBJG83nNdcXXa3t5CfeNrh4BAKBINvCO+WE9Ir/r6VFAAAAAElFTkSuQmCC">
                    </div>
                    <div class="text-green-600 font-bold">: Sun, Apr 9, 2023 10:00 PM +07 + 1 more event</div>
                </div>
                <div class="flex mt-2">
                    <div>
                    <img class="w-8" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADT0lEQVR4nO2X3UsUURjGX4uCUrspqIuCNAW7CAqhIs/sWJa3WUT/QEnSdWaIsEFBUOiMVkJQF3UhhTflBxVIfmzknlmFJLsI6aI7Q8ywcs8R841zdlFbd2Z2Z7ezS8wDDwyz877n+c2ec2YGwJcvX77+G6EOO5BAPRJ4gRp8QgI/pWPH4txFrIHtkG/CU1CIGlxHAj9QA3TxPBIIYiVshXwQarAHCYynEDzRE6hBSW7DEyhFDb56CB8zgemcQeAxKEYNPnoOvwrxAXUoUg9A4FbG4bUViBtqw+uwCzVYcAj0HAnocnELV0E1atDjAPELj8BOdQAELjuEb3Koa3aAaFAHoMFLuzufQm2vTW2/mvSxEJ9tQuiutQE4blM7pRIg+fxPYTeJ715J1wGoEhKY8wxwGLbZAMyq/AdCSUNUQXUKtSdsAEJq0sdCtNiE6HGtJdBnU9ui8jmwGwks2SzG5rTBCSyJnsoAZJjY67Hdnt4rdxsdiqTFtLG/8yh6KQ0vATSozdqrhAa1ygHiEINZCB/KSXgJUAUkYwDi/vD7txBOc9s9fF9Ow0uAAJQjAeYBgKMOFZAPQg1u5v03gJPwKGyxfcFL7i/iOwFyqeAkbm4PL1YalNebFm991floeDlQ4BpeXPO68+GQqDEorxc9RC8loY1Rtt+grMmgLGRQtmhaHNd6oumSK8DEtYa/akyLY6wXGzHD7KoYI6uhg4gb2iLsnAidOHCi772dw7kzZbbhv9eV4P3QrGMPU5qNGBY7i4gFGYVvH4vuMy027D7gqp91D+NyYOP6qaNvwO6nAyn3MYUpH2yzoqWewneEoyWGxafTGjDuSPDKOoBIsDHtPqaEYDOt49GytAHknPQyoMXx7rt5nDl/YCW8OBbnvPYzKBvyArDgdUDhx/2TyE8W42JNIT7pfe+5jxlbEwtpAwjqzAblYruUzrSPYfE36QOMRvd6XQNZNWUzYjNJG2ANxEDuANiIOcrKIROJvdgIs7psTKmUpwxlQ+0Rdjrj50CiOsZYhWGxRglDGc9iYCb2fNFbjAEq9GAMN7Vb/JAZ5hcMyu+YlHXJpzXlU2LtGBb7ZlL2W1gcy/UkfpPXsC6T8tvx2oOil5LQvnz58gXZ1h8JC/UEAA50vAAAAABJRU5ErkJggg==">
                    </div>
                    <div class="font-bold m-1">: Online</div>
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

            <div class="shadow-xl rounded-md transition-colors duration-500 hover:bg-gray-200 dark:shadow-slate-500 dark:hover:bg-slate-800 dark:shadow-md">
                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg" alt="" class="rounded-t-md">
                <div class="px-2">
                    <h1 class="font-bold text-1xl ">Begin your Tai Cai journey: Traditional</h1>
                <div class="flex mt-2">
                    <div>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABj0lEQVR4nO1YwU7CQBDd/8AABzWe9NTqzWTrReLH8RFcSAWBhJvlIhztemjskq4XvdpEmnJes1WJtqR2sGFLnJe8pFmS9+Z1Z6YJhCAQ28eNM20NnOmLYv/27lK3DhiJ6WQmEzqzZ906YKxMP6lbZy2W5+ZebBl2bBlRbJnyO9PG6d+LcvCrjhHF1OwtLk4PCLh4aoTrTCOaNVZn0OJBOtQIl/SsVjjAx5tfL+YdH2WM1Rk0AFiHml1IgEzbfNFp1jPGTqMODgDWoeYbIECecUMOr0cr06E9kpNmY4MAcB1SRgB1zePWVWKoqJ69k81aaAzUKSWAGjRlrt6gonredIg9oE4pAXSSYABrR26AcSGrSIIBON6ArEQLtTv9Hyz7nGEAjjcgK91CDL8DArdQLnCIOxUf4vauf8gYbiGBW+h/z0AbAwjcQrnQvS7Zn2fAFwvdxbI0/aD4n7suD3raC+YZ2oUDPDw+HTIuXitQtFR0eRDee8F+4QBJG83nNdcXXa3t5CfeNrh4BAKBINvCO+WE9Ir/r6VFAAAAAElFTkSuQmCC">
                    </div>
                    <div class="text-green-600 font-bold">: Sun, Apr 9, 2023 10:00 PM +07 + 1 more event</div>
                </div>
                <div class="flex mt-2">
                    <div>
                    <img class="w-8" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADT0lEQVR4nO2X3UsUURjGX4uCUrspqIuCNAW7CAqhIs/sWJa3WUT/QEnSdWaIsEFBUOiMVkJQF3UhhTflBxVIfmzknlmFJLsI6aI7Q8ywcs8R841zdlFbd2Z2Z7ezS8wDDwyz877n+c2ec2YGwJcvX77+G6EOO5BAPRJ4gRp8QgI/pWPH4txFrIHtkG/CU1CIGlxHAj9QA3TxPBIIYiVshXwQarAHCYynEDzRE6hBSW7DEyhFDb56CB8zgemcQeAxKEYNPnoOvwrxAXUoUg9A4FbG4bUViBtqw+uwCzVYcAj0HAnocnELV0E1atDjAPELj8BOdQAELjuEb3Koa3aAaFAHoMFLuzufQm2vTW2/mvSxEJ9tQuiutQE4blM7pRIg+fxPYTeJ715J1wGoEhKY8wxwGLbZAMyq/AdCSUNUQXUKtSdsAEJq0sdCtNiE6HGtJdBnU9ui8jmwGwks2SzG5rTBCSyJnsoAZJjY67Hdnt4rdxsdiqTFtLG/8yh6KQ0vATSozdqrhAa1ygHiEINZCB/KSXgJUAUkYwDi/vD7txBOc9s9fF9Ow0uAAJQjAeYBgKMOFZAPQg1u5v03gJPwKGyxfcFL7i/iOwFyqeAkbm4PL1YalNebFm991floeDlQ4BpeXPO68+GQqDEorxc9RC8loY1Rtt+grMmgLGRQtmhaHNd6oumSK8DEtYa/akyLY6wXGzHD7KoYI6uhg4gb2iLsnAidOHCi772dw7kzZbbhv9eV4P3QrGMPU5qNGBY7i4gFGYVvH4vuMy027D7gqp91D+NyYOP6qaNvwO6nAyn3MYUpH2yzoqWewneEoyWGxafTGjDuSPDKOoBIsDHtPqaEYDOt49GytAHknPQyoMXx7rt5nDl/YCW8OBbnvPYzKBvyArDgdUDhx/2TyE8W42JNIT7pfe+5jxlbEwtpAwjqzAblYruUzrSPYfE36QOMRvd6XQNZNWUzYjNJG2ANxEDuANiIOcrKIROJvdgIs7psTKmUpwxlQ+0Rdjrj50CiOsZYhWGxRglDGc9iYCb2fNFbjAEq9GAMN7Vb/JAZ5hcMyu+YlHXJpzXlU2LtGBb7ZlL2W1gcy/UkfpPXsC6T8tvx2oOil5LQvnz58gXZ1h8JC/UEAA50vAAAAABJRU5ErkJggg==">
                    </div>
                    <div class="font-bold m-1">: Online</div>
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
    
            <!-- row2 -->
    
            <div class="shadow-xl rounded-md transition-colors duration-500 hover:bg-gray-200 dark:shadow-slate-500 dark:hover:bg-slate-800 dark:shadow-md">
                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg" alt="" class="rounded-t-md">
                <div class="px-2">
                    <h1 class="font-bold text-1xl ">Begin your Tai Cai journey: Traditional</h1>
                <div class="flex mt-2">
                    <div>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABj0lEQVR4nO1YwU7CQBDd/8AABzWe9NTqzWTrReLH8RFcSAWBhJvlIhztemjskq4XvdpEmnJes1WJtqR2sGFLnJe8pFmS9+Z1Z6YJhCAQ28eNM20NnOmLYv/27lK3DhiJ6WQmEzqzZ906YKxMP6lbZy2W5+ZebBl2bBlRbJnyO9PG6d+LcvCrjhHF1OwtLk4PCLh4aoTrTCOaNVZn0OJBOtQIl/SsVjjAx5tfL+YdH2WM1Rk0AFiHml1IgEzbfNFp1jPGTqMODgDWoeYbIECecUMOr0cr06E9kpNmY4MAcB1SRgB1zePWVWKoqJ69k81aaAzUKSWAGjRlrt6gonredIg9oE4pAXSSYABrR26AcSGrSIIBON6ArEQLtTv9Hyz7nGEAjjcgK91CDL8DArdQLnCIOxUf4vauf8gYbiGBW+h/z0AbAwjcQrnQvS7Zn2fAFwvdxbI0/aD4n7suD3raC+YZ2oUDPDw+HTIuXitQtFR0eRDee8F+4QBJG83nNdcXXa3t5CfeNrh4BAKBINvCO+WE9Ir/r6VFAAAAAElFTkSuQmCC">
                    </div>
                    <div class="text-green-600 font-bold">: Sun, Apr 9, 2023 10:00 PM +07 + 1 more event</div>
                </div>
                <div class="flex mt-2">
                    <div>
                    <img class="w-8" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADT0lEQVR4nO2X3UsUURjGX4uCUrspqIuCNAW7CAqhIs/sWJa3WUT/QEnSdWaIsEFBUOiMVkJQF3UhhTflBxVIfmzknlmFJLsI6aI7Q8ywcs8R841zdlFbd2Z2Z7ezS8wDDwyz877n+c2ec2YGwJcvX77+G6EOO5BAPRJ4gRp8QgI/pWPH4txFrIHtkG/CU1CIGlxHAj9QA3TxPBIIYiVshXwQarAHCYynEDzRE6hBSW7DEyhFDb56CB8zgemcQeAxKEYNPnoOvwrxAXUoUg9A4FbG4bUViBtqw+uwCzVYcAj0HAnocnELV0E1atDjAPELj8BOdQAELjuEb3Koa3aAaFAHoMFLuzufQm2vTW2/mvSxEJ9tQuiutQE4blM7pRIg+fxPYTeJ715J1wGoEhKY8wxwGLbZAMyq/AdCSUNUQXUKtSdsAEJq0sdCtNiE6HGtJdBnU9ui8jmwGwks2SzG5rTBCSyJnsoAZJjY67Hdnt4rdxsdiqTFtLG/8yh6KQ0vATSozdqrhAa1ygHiEINZCB/KSXgJUAUkYwDi/vD7txBOc9s9fF9Ow0uAAJQjAeYBgKMOFZAPQg1u5v03gJPwKGyxfcFL7i/iOwFyqeAkbm4PL1YalNebFm991floeDlQ4BpeXPO68+GQqDEorxc9RC8loY1Rtt+grMmgLGRQtmhaHNd6oumSK8DEtYa/akyLY6wXGzHD7KoYI6uhg4gb2iLsnAidOHCi772dw7kzZbbhv9eV4P3QrGMPU5qNGBY7i4gFGYVvH4vuMy027D7gqp91D+NyYOP6qaNvwO6nAyn3MYUpH2yzoqWewneEoyWGxafTGjDuSPDKOoBIsDHtPqaEYDOt49GytAHknPQyoMXx7rt5nDl/YCW8OBbnvPYzKBvyArDgdUDhx/2TyE8W42JNIT7pfe+5jxlbEwtpAwjqzAblYruUzrSPYfE36QOMRvd6XQNZNWUzYjNJG2ANxEDuANiIOcrKIROJvdgIs7psTKmUpwxlQ+0Rdjrj50CiOsZYhWGxRglDGc9iYCb2fNFbjAEq9GAMN7Vb/JAZ5hcMyu+YlHXJpzXlU2LtGBb7ZlL2W1gcy/UkfpPXsC6T8tvx2oOil5LQvnz58gXZ1h8JC/UEAA50vAAAAABJRU5ErkJggg==">
                    </div>
                    <div class="font-bold m-1">: Online</div>
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
    
            <div class="shadow-xl rounded-md transition-colors duration-500 hover:bg-gray-200 dark:shadow-slate-500 dark:hover:bg-slate-800 dark:shadow-md">
                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg" alt="" class="rounded-t-md">
                <div class="px-2">
                    <h1 class="font-bold text-1xl ">Begin your Tai Cai journey: Traditional</h1>
                <div class="flex mt-2">
                    <div>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABj0lEQVR4nO1YwU7CQBDd/8AABzWe9NTqzWTrReLH8RFcSAWBhJvlIhztemjskq4XvdpEmnJes1WJtqR2sGFLnJe8pFmS9+Z1Z6YJhCAQ28eNM20NnOmLYv/27lK3DhiJ6WQmEzqzZ906YKxMP6lbZy2W5+ZebBl2bBlRbJnyO9PG6d+LcvCrjhHF1OwtLk4PCLh4aoTrTCOaNVZn0OJBOtQIl/SsVjjAx5tfL+YdH2WM1Rk0AFiHml1IgEzbfNFp1jPGTqMODgDWoeYbIECecUMOr0cr06E9kpNmY4MAcB1SRgB1zePWVWKoqJ69k81aaAzUKSWAGjRlrt6gonredIg9oE4pAXSSYABrR26AcSGrSIIBON6ArEQLtTv9Hyz7nGEAjjcgK91CDL8DArdQLnCIOxUf4vauf8gYbiGBW+h/z0AbAwjcQrnQvS7Zn2fAFwvdxbI0/aD4n7suD3raC+YZ2oUDPDw+HTIuXitQtFR0eRDee8F+4QBJG83nNdcXXa3t5CfeNrh4BAKBINvCO+WE9Ir/r6VFAAAAAElFTkSuQmCC">
                    </div>
                    <div class="text-green-600 font-bold">: Sun, Apr 9, 2023 10:00 PM +07 + 1 more event</div>
                </div>
                <div class="flex mt-2">
                    <div>
                    <img class="w-8" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADT0lEQVR4nO2X3UsUURjGX4uCUrspqIuCNAW7CAqhIs/sWJa3WUT/QEnSdWaIsEFBUOiMVkJQF3UhhTflBxVIfmzknlmFJLsI6aI7Q8ywcs8R841zdlFbd2Z2Z7ezS8wDDwyz877n+c2ec2YGwJcvX77+G6EOO5BAPRJ4gRp8QgI/pWPH4txFrIHtkG/CU1CIGlxHAj9QA3TxPBIIYiVshXwQarAHCYynEDzRE6hBSW7DEyhFDb56CB8zgemcQeAxKEYNPnoOvwrxAXUoUg9A4FbG4bUViBtqw+uwCzVYcAj0HAnocnELV0E1atDjAPELj8BOdQAELjuEb3Koa3aAaFAHoMFLuzufQm2vTW2/mvSxEJ9tQuiutQE4blM7pRIg+fxPYTeJ715J1wGoEhKY8wxwGLbZAMyq/AdCSUNUQXUKtSdsAEJq0sdCtNiE6HGtJdBnU9ui8jmwGwks2SzG5rTBCSyJnsoAZJjY67Hdnt4rdxsdiqTFtLG/8yh6KQ0vATSozdqrhAa1ygHiEINZCB/KSXgJUAUkYwDi/vD7txBOc9s9fF9Ow0uAAJQjAeYBgKMOFZAPQg1u5v03gJPwKGyxfcFL7i/iOwFyqeAkbm4PL1YalNebFm991floeDlQ4BpeXPO68+GQqDEorxc9RC8loY1Rtt+grMmgLGRQtmhaHNd6oumSK8DEtYa/akyLY6wXGzHD7KoYI6uhg4gb2iLsnAidOHCi772dw7kzZbbhv9eV4P3QrGMPU5qNGBY7i4gFGYVvH4vuMy027D7gqp91D+NyYOP6qaNvwO6nAyn3MYUpH2yzoqWewneEoyWGxafTGjDuSPDKOoBIsDHtPqaEYDOt49GytAHknPQyoMXx7rt5nDl/YCW8OBbnvPYzKBvyArDgdUDhx/2TyE8W42JNIT7pfe+5jxlbEwtpAwjqzAblYruUzrSPYfE36QOMRvd6XQNZNWUzYjNJG2ANxEDuANiIOcrKIROJvdgIs7psTKmUpwxlQ+0Rdjrj50CiOsZYhWGxRglDGc9iYCb2fNFbjAEq9GAMN7Vb/JAZ5hcMyu+YlHXJpzXlU2LtGBb7ZlL2W1gcy/UkfpPXsC6T8tvx2oOil5LQvnz58gXZ1h8JC/UEAA50vAAAAABJRU5ErkJggg==">
                    </div>
                    <div class="font-bold m-1">: Online</div>
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
    
            <div class="shadow-xl rounded-md transition-colors duration-500 hover:bg-gray-200 dark:shadow-slate-500 dark:hover:bg-slate-800 dark:shadow-md">
                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg" alt="" class="rounded-t-md">
                <div class="px-2">
                    <h1 class="font-bold text-1xl ">Begin your Tai Cai journey: Traditional</h1>
                <div class="flex mt-2">
                    <div>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABj0lEQVR4nO1YwU7CQBDd/8AABzWe9NTqzWTrReLH8RFcSAWBhJvlIhztemjskq4XvdpEmnJes1WJtqR2sGFLnJe8pFmS9+Z1Z6YJhCAQ28eNM20NnOmLYv/27lK3DhiJ6WQmEzqzZ906YKxMP6lbZy2W5+ZebBl2bBlRbJnyO9PG6d+LcvCrjhHF1OwtLk4PCLh4aoTrTCOaNVZn0OJBOtQIl/SsVjjAx5tfL+YdH2WM1Rk0AFiHml1IgEzbfNFp1jPGTqMODgDWoeYbIECecUMOr0cr06E9kpNmY4MAcB1SRgB1zePWVWKoqJ69k81aaAzUKSWAGjRlrt6gonredIg9oE4pAXSSYABrR26AcSGrSIIBON6ArEQLtTv9Hyz7nGEAjjcgK91CDL8DArdQLnCIOxUf4vauf8gYbiGBW+h/z0AbAwjcQrnQvS7Zn2fAFwvdxbI0/aD4n7suD3raC+YZ2oUDPDw+HTIuXitQtFR0eRDee8F+4QBJG83nNdcXXa3t5CfeNrh4BAKBINvCO+WE9Ir/r6VFAAAAAElFTkSuQmCC">
                    </div>
                    <div class="text-green-600 font-bold">: Sun, Apr 9, 2023 10:00 PM +07 + 1 more event</div>
                </div>
                <div class="flex mt-2">
                    <div>
                    <img class="w-8" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADT0lEQVR4nO2X3UsUURjGX4uCUrspqIuCNAW7CAqhIs/sWJa3WUT/QEnSdWaIsEFBUOiMVkJQF3UhhTflBxVIfmzknlmFJLsI6aI7Q8ywcs8R841zdlFbd2Z2Z7ezS8wDDwyz877n+c2ec2YGwJcvX77+G6EOO5BAPRJ4gRp8QgI/pWPH4txFrIHtkG/CU1CIGlxHAj9QA3TxPBIIYiVshXwQarAHCYynEDzRE6hBSW7DEyhFDb56CB8zgemcQeAxKEYNPnoOvwrxAXUoUg9A4FbG4bUViBtqw+uwCzVYcAj0HAnocnELV0E1atDjAPELj8BOdQAELjuEb3Koa3aAaFAHoMFLuzufQm2vTW2/mvSxEJ9tQuiutQE4blM7pRIg+fxPYTeJ715J1wGoEhKY8wxwGLbZAMyq/AdCSUNUQXUKtSdsAEJq0sdCtNiE6HGtJdBnU9ui8jmwGwks2SzG5rTBCSyJnsoAZJjY67Hdnt4rdxsdiqTFtLG/8yh6KQ0vATSozdqrhAa1ygHiEINZCB/KSXgJUAUkYwDi/vD7txBOc9s9fF9Ow0uAAJQjAeYBgKMOFZAPQg1u5v03gJPwKGyxfcFL7i/iOwFyqeAkbm4PL1YalNebFm991floeDlQ4BpeXPO68+GQqDEorxc9RC8loY1Rtt+grMmgLGRQtmhaHNd6oumSK8DEtYa/akyLY6wXGzHD7KoYI6uhg4gb2iLsnAidOHCi772dw7kzZbbhv9eV4P3QrGMPU5qNGBY7i4gFGYVvH4vuMy027D7gqp91D+NyYOP6qaNvwO6nAyn3MYUpH2yzoqWewneEoyWGxafTGjDuSPDKOoBIsDHtPqaEYDOt49GytAHknPQyoMXx7rt5nDl/YCW8OBbnvPYzKBvyArDgdUDhx/2TyE8W42JNIT7pfe+5jxlbEwtpAwjqzAblYruUzrSPYfE36QOMRvd6XQNZNWUzYjNJG2ANxEDuANiIOcrKIROJvdgIs7psTKmUpwxlQ+0Rdjrj50CiOsZYhWGxRglDGc9iYCb2fNFbjAEq9GAMN7Vb/JAZ5hcMyu+YlHXJpzXlU2LtGBb7ZlL2W1gcy/UkfpPXsC6T8tvx2oOil5LQvnz58gXZ1h8JC/UEAA50vAAAAABJRU5ErkJggg==">
                    </div>
                    <div class="font-bold m-1">: Online</div>
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
    
            <div class="shadow-xl rounded-md transition-colors duration-500 hover:bg-gray-200 dark:shadow-slate-500 dark:hover:bg-slate-800 dark:shadow-md">
                <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-abstract-shapes_1361-1316.jpg" alt="" class="rounded-t-md">
                <div class="px-2">
                    <h1 class="font-bold text-1xl ">Begin your Tai Cai journey: Traditional</h1>
                <div class="flex mt-2">
                    <div>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABj0lEQVR4nO1YwU7CQBDd/8AABzWe9NTqzWTrReLH8RFcSAWBhJvlIhztemjskq4XvdpEmnJes1WJtqR2sGFLnJe8pFmS9+Z1Z6YJhCAQ28eNM20NnOmLYv/27lK3DhiJ6WQmEzqzZ906YKxMP6lbZy2W5+ZebBl2bBlRbJnyO9PG6d+LcvCrjhHF1OwtLk4PCLh4aoTrTCOaNVZn0OJBOtQIl/SsVjjAx5tfL+YdH2WM1Rk0AFiHml1IgEzbfNFp1jPGTqMODgDWoeYbIECecUMOr0cr06E9kpNmY4MAcB1SRgB1zePWVWKoqJ69k81aaAzUKSWAGjRlrt6gonredIg9oE4pAXSSYABrR26AcSGrSIIBON6ArEQLtTv9Hyz7nGEAjjcgK91CDL8DArdQLnCIOxUf4vauf8gYbiGBW+h/z0AbAwjcQrnQvS7Zn2fAFwvdxbI0/aD4n7suD3raC+YZ2oUDPDw+HTIuXitQtFR0eRDee8F+4QBJG83nNdcXXa3t5CfeNrh4BAKBINvCO+WE9Ir/r6VFAAAAAElFTkSuQmCC">
                    </div>
                    <div class="text-green-600 font-bold">: Sun, Apr 9, 2023 10:00 PM +07 + 1 more event</div>
                </div>
                <div class="flex mt-2">
                    <div>
                    <img class="w-8" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADT0lEQVR4nO2X3UsUURjGX4uCUrspqIuCNAW7CAqhIs/sWJa3WUT/QEnSdWaIsEFBUOiMVkJQF3UhhTflBxVIfmzknlmFJLsI6aI7Q8ywcs8R841zdlFbd2Z2Z7ezS8wDDwyz877n+c2ec2YGwJcvX77+G6EOO5BAPRJ4gRp8QgI/pWPH4txFrIHtkG/CU1CIGlxHAj9QA3TxPBIIYiVshXwQarAHCYynEDzRE6hBSW7DEyhFDb56CB8zgemcQeAxKEYNPnoOvwrxAXUoUg9A4FbG4bUViBtqw+uwCzVYcAj0HAnocnELV0E1atDjAPELj8BOdQAELjuEb3Koa3aAaFAHoMFLuzufQm2vTW2/mvSxEJ9tQuiutQE4blM7pRIg+fxPYTeJ715J1wGoEhKY8wxwGLbZAMyq/AdCSUNUQXUKtSdsAEJq0sdCtNiE6HGtJdBnU9ui8jmwGwks2SzG5rTBCSyJnsoAZJjY67Hdnt4rdxsdiqTFtLG/8yh6KQ0vATSozdqrhAa1ygHiEINZCB/KSXgJUAUkYwDi/vD7txBOc9s9fF9Ow0uAAJQjAeYBgKMOFZAPQg1u5v03gJPwKGyxfcFL7i/iOwFyqeAkbm4PL1YalNebFm991floeDlQ4BpeXPO68+GQqDEorxc9RC8loY1Rtt+grMmgLGRQtmhaHNd6oumSK8DEtYa/akyLY6wXGzHD7KoYI6uhg4gb2iLsnAidOHCi772dw7kzZbbhv9eV4P3QrGMPU5qNGBY7i4gFGYVvH4vuMy027D7gqp91D+NyYOP6qaNvwO6nAyn3MYUpH2yzoqWewneEoyWGxafTGjDuSPDKOoBIsDHtPqaEYDOt49GytAHknPQyoMXx7rt5nDl/YCW8OBbnvPYzKBvyArDgdUDhx/2TyE8W42JNIT7pfe+5jxlbEwtpAwjqzAblYruUzrSPYfE36QOMRvd6XQNZNWUzYjNJG2ANxEDuANiIOcrKIROJvdgIs7psTKmUpwxlQ+0Rdjrj50CiOsZYhWGxRglDGc9iYCb2fNFbjAEq9GAMN7Vb/JAZ5hcMyu+YlHXJpzXlU2LtGBb7ZlL2W1gcy/UkfpPXsC6T8tvx2oOil5LQvnz58gXZ1h8JC/UEAA50vAAAAABJRU5ErkJggg==">
                    </div>
                    <div class="font-bold m-1">: Online</div>
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