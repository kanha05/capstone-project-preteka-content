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
                    <div class=" flex lg:mx-20 md:mx-16 sm:mx-8">
                        <!-- Profile image -->
                        <div>
                            <img src="img/pf1.png" alt="#"
                                class=" lg:w-32 md:w-40 w-56 rounded-full outline outline-black object-cover -mt-10 lg:-mt-16 mx-6">
                        </div>
                        <div class=" pl-10">
                            <!-- Username -->
                            <h1 class=" font-bold lg:text-3xl md:text-2xl sm:text-xl  font-poppins"> @Kanha23</h1>
                            <!-- Profile bio -->
                            <p class=" break-words lg:text-base md:text-sm text-sm text-slate-700 dark:text-slate-400">
                                Be the brightest star. Your time is limited, so don't waste it
                                living someone
                                else's life. Don't be trapped by dogma – which is living with the results of
                                other people's thinking. -Steve Jobs</p>
                        </div>
                    </div>
                    <div class=" flex flex-row-reverse lg:mx-20 md:mx-16 sm:mx-8">
                        <!-- Edit account -->
                        <div>
                            <button
                                class=" rounded-md outline outline-green-500 lg:w-36 lg:h-9 w-24 h-7 m-1 text-xs lg:text-sm">
                                <div class=" flex place-content-center">
                                    <img class=" w-6 h-6 m-1"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAzUlEQVR4nGNgQAP/V4Wy/V3r2Pl3ndOzv2sdn/5d59gBEmMgFvxd59jxb53Tf2QMEiPBAKdnmAY4PSfegLWOT7G44AllXljr1E60Af9BgbjOsQMcgOQE4sCAVVf+sy18/Llz4ZPPzxY9+fIfG1745PPThU8+d4DUYhiw8MnnDnQNcbPu/o+ccgebQR0fGwUbPjYKINLGQiw2S/ofA2N08dMbaj5/ahL8D8JwQxZhcTI2A05tbgZrRGCBeqINwKmZGAPwaiYGUKQZ1QBMzQDQ+2zcIvymWAAAAABJRU5ErkJggg==">
                                    <p class=" text-center mt-2">Edit profile</p>

                                </div>
                            </button>
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
                <div class=" lg:flex lg:mx-20 md:mx-16 sm:mx-8">
                    <!-- sart left container  -->
                    <div class=" lg:w-1/3 m-3">
                        <!-- start Into -->
                        <div class=" bg-slate-100 dark:bg-slate-950 rounded-md h-72">
                            <h1 class=" font-bold lg:text-2xl text-center md:text-xl text-lg py-3">Intro</h1>
                            <hr class="h-px my-0.5 bg-green-500 border-0">
                            <div class=" flex m-3">

                                <img class=" w-6 h-6"
                                    src="data:image/png;base64,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">
                                <p class=" pl-3 text-xs md:text-sm lg:text-sm ">Studies Computer Science at Cambodia
                                    Academy of
                                    Digital Technology -
                                    CADT</p>

                            </div>
                            <div class=" flex m-3">
                                <img class=" w-6 h-6"
                                    src="data:image/png;base64,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">
                                <p class=" pl-3 text-xs md:text-sm lg:text-sm">Work at ABA bank</p>

                            </div>
                            <div class=" flex m-3">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                                    viewBox="0 0 48 48">
                                    <path fill="#4caf50" d="M45,16.2l-5,2.75l-5,4.75L35,40h7c1.657,0,3-1.343,3-3V16.2z">
                                    </path>
                                    <path fill="#1e88e5" d="M3,16.2l3.614,1.71L13,23.7V40H6c-1.657,0-3-1.343-3-3V16.2z">
                                    </path>
                                    <polygon fill="#e53935"
                                        points="35,11.2 24,19.45 13,11.2 12,17 13,23.7 24,31.95 35,23.7 36,17">
                                    </polygon>
                                    <path fill="#c62828"
                                        d="M3,12.298V16.2l10,7.5V11.2L9.876,8.859C9.132,8.301,8.228,8,7.298,8h0C4.924,8,3,9.924,3,12.298z">
                                    </path>
                                    <path fill="#fbc02d"
                                        d="M45,12.298V16.2l-10,7.5V11.2l3.124-2.341C38.868,8.301,39.772,8,40.702,8h0 C43.076,8,45,9.924,45,12.298z">
                                    </path>
                                </svg>
                                <p class=" pl-3 text-xs md:text-sm lg:text-sm">Kanhasongeam@gmail.com</p>

                            </div>
                            <div class=" flex pl-10">
                                <p class=" font-italic text-green-600 text-xs mx-2 mt-2">Follow me on </p>
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                                        viewBox="0 0 48 48">
                                        <path fill="#039be5" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z"></path>
                                        <path fill="#fff"
                                            d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z">
                                        </path>
                                    </svg>
                                </a>
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                                        viewBox="0 0 48 48">
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
                                            <path fill="none" stroke="#fff" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"
                                                d="M30,11H18c-3.9,0-7,3.1-7,7v12c0,3.9,3.1,7,7,7h12c3.9,0,7-3.1,7-7V18C37,14.1,33.9,11,30,11z">
                                            </path>
                                            <circle cx="31" cy="16" r="1" fill="#fff"></circle>
                                        </g>
                                        <g>
                                            <circle cx="24" cy="24" r="6" fill="none" stroke="#fff"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                                stroke-width="2"></circle>
                                        </g>
                                    </svg>
                                </a>
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                                        viewBox="0 0 48 48">
                                        <path fill="#0288D1"
                                            d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5V37z">
                                        </path>
                                        <path fill="#FFF"
                                            d="M12 19H17V36H12zM14.485 17h-.028C12.965 17 12 15.888 12 14.499 12 13.08 12.995 12 14.514 12c1.521 0 2.458 1.08 2.486 2.499C17 15.887 16.035 17 14.485 17zM36 36h-5v-9.099c0-2.198-1.225-3.698-3.192-3.698-1.501 0-2.313 1.012-2.707 1.99C24.957 25.543 25 26.511 25 27v9h-5V19h5v2.616C25.721 20.5 26.85 19 29.738 19c3.578 0 6.261 2.25 6.261 7.274L36 36 36 36z">
                                        </path>
                                    </svg>
                                </a>

                            </div>

                        </div>
                        <!-- end intro -->

                        <!-- start reminder -->
                        <div class=" bg-slate-100 dark:bg-slate-950 rounded-md">
                            <h1 class="font-bold text-xl m-3">Event Reminder</h1>
                        </div>
                        <!-- end reminder -->

                    </div>

                    <!-- end left container -->

                    <!-- start right container -->
                    <div class=" lg:w-2/3 bg-slate-100 dark:bg-slate-950 rounded-md m-3">
                        <!-- start event post header -->
                        <div class=" flex">
                            <div>
                                <h1 class=" font-bold lg:text-2xl text-center md:text-xl text-lg py-3">Event</h1>
                            </div>

                            <div class=" flex justify-items-end">

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
                        <div class=" m-4 p-3 border border-gray-500 shadow-slate-400 shadow-md ">

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
                                <div class=" place-content-end">
                                    <svg class=" w-8 " fill="none" stroke="currentColor" stroke-width="1.5"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z">
                                        </path>
                                    </svg>
                                </div>

                            </div>

                            <!--  -->
                            <div class="lg:flex md:flex space-x-4">
                                <!-- event poster -->
                                <div class=" lg:basis-1/2 md:basis-1/2 bg-slate-300 dark:bg-slate-900">
                                    <img src="img/event-poster1.jpg">
                                    <div class=" flex lg:mt-5 md:mt-5 sm:mt-3 mt-3 place-content-center align-middle">
                                        <div class=" flex mx-2">
                                            <img class=" w-8 h-8"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABCUlEQVR4nO2ZPW7CUBCEN5ESiSpVyrQUtG7Q2zdd7kUJuUFyAsvb5wJR2hSuaCkgEacwMg2QP8mAsl5lPmlKrJ3dGckyIoQQ0ktGNrpGpQ+5Su8wbZy0gqVZO0tnA+0PHQdvDpVmnQ04b77ZV7b0ccQF/AfHnmgAvIAyQp34HJn6df2nwrlLHN4AWGJlif93B+roBsASK0vs2gH31+k6ugGwxMoLdMI7MmAHzH/r2GkZOkLZ0jSqgdUJnxZ/eXCli1zmofQZ/HTOSucocSd9B99n8S1bvpUI4OvmX+6tuJEo4GDz+jy28UAigV1hy+KpuJJoYBub9CgTuZSIoP1XpJEL7zkIIUR6zQbP5nJiMZY/owAAAABJRU5ErkJggg==">
                                            <p class=" text-sm mt-1">Comment</p>
                                        </div>
                                        <div>

                                        </div>
                                        <div class=" flex mx-2">
                                            <img class=" w-8 h-8"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAABUElEQVR4nOWUsUoDQRCGrxIECy0MaGcl+ATJZYZrZoxg7QOIvoQPID6GcMmMcI22VoIBFbXSwthK7AXTK7vZO8zlYs7Vg4ADU+wO83+7M7MbBP/aSOCSFO85btQqAbDALSt+kMBjJZCtBJZZ4cFCFJ5abVyZfci2wBIJ7LLCGSn2SGFgxDMXvPMSrif1eVY8YIG3EcG8TwKQ4A0rXBXGNFw1iakICZyT4H6rHa5zjGu2ydOanSYXiZPAy7DG2CNpQpYTN2qlxCcBbFnSkwteRMfR4kiOi5Ua0yKArbmbjry4i1+Xfmh5gJmWtKFfy+JtecBwFNE29NfihQDFU7vXwb1KACz4bNZmFCsCwLtZR0m0UA1AsWu+Yw+drvGpgL86aGYs+GoCmycYBp7GHWi6R9kfDyocffuJ6Y/8cAywk2zMWYi7iZcL9o240fKtwuzZJ8HuOy9uoNT3AAAAAElFTkSuQmCC">
                                            <p class=" text-sm mt-1">Share</p>
                                        </div>
                                    </div>


                                </div>
                                <!--  -->
                                <!-- event post info -->
                                <div class=" lg:basis-1/2 md:basis-1/2 mt-3">
                                    <!-- title -->
                                    <p class=" font-bold text-sm">Explore, learn how to start technology company</p>
                                    <!-- description -->
                                    <p class=" text-sm line-clamp-2">At Innovation Festival you will learn and connect
                                        with experienced researchers, developers, and industry leaders in a
                                        community-based way.</p>

                                    <div class=" mt-2">
                                        <div class=" flex ">
                                            <img class=" w-6 h-6 m-1"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABj0lEQVR4nO1YwU7CQBDd/8AABzWe9NTqzWTrReLH8RFcSAWBhJvlIhztemjskq4XvdpEmnJes1WJtqR2sGFLnJe8pFmS9+Z1Z6YJhCAQ28eNM20NnOmLYv/27lK3DhiJ6WQmEzqzZ906YKxMP6lbZy2W5+ZebBl2bBlRbJnyO9PG6d+LcvCrjhHF1OwtLk4PCLh4aoTrTCOaNVZn0OJBOtQIl/SsVjjAx5tfL+YdH2WM1Rk0AFiHml1IgEzbfNFp1jPGTqMODgDWoeYbIECecUMOr0cr06E9kpNmY4MAcB1SRgB1zePWVWKoqJ69k81aaAzUKSWAGjRlrt6gonredIg9oE4pAXSSYABrR26AcSGrSIIBON6ArEQLtTv9Hyz7nGEAjjcgK91CDL8DArdQLnCIOxUf4vauf8gYbiGBW+h/z0AbAwjcQrnQvS7Zn2fAFwvdxbI0/aD4n7suD3raC+YZ2oUDPDw+HTIuXitQtFR0eRDee8F+4QBJG83nNdcXXa3t5CfeNrh4BAKBINvCO+WE9Ir/r6VFAAAAAElFTkSuQmCC">
                                            <p class=" text-green-600 md:text-sm text-xs mt-1 md:mt-2 lg:mt-2">
                                                : Sun, Apr 9, 2023 10:00 PM
                                            </p>
                                        </div>

                                        <div class=" flex">
                                            <img class=" w-6 h-6 m-1"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADT0lEQVR4nO2X3UsUURjGX4uCUrspqIuCNAW7CAqhIs/sWJa3WUT/QEnSdWaIsEFBUOiMVkJQF3UhhTflBxVIfmzknlmFJLsI6aI7Q8ywcs8R841zdlFbd2Z2Z7ezS8wDDwyz877n+c2ec2YGwJcvX77+G6EOO5BAPRJ4gRp8QgI/pWPH4txFrIHtkG/CU1CIGlxHAj9QA3TxPBIIYiVshXwQarAHCYynEDzRE6hBSW7DEyhFDb56CB8zgemcQeAxKEYNPnoOvwrxAXUoUg9A4FbG4bUViBtqw+uwCzVYcAj0HAnocnELV0E1atDjAPELj8BOdQAELjuEb3Koa3aAaFAHoMFLuzufQm2vTW2/mvSxEJ9tQuiutQE4blM7pRIg+fxPYTeJ715J1wGoEhKY8wxwGLbZAMyq/AdCSUNUQXUKtSdsAEJq0sdCtNiE6HGtJdBnU9ui8jmwGwks2SzG5rTBCSyJnsoAZJjY67Hdnt4rdxsdiqTFtLG/8yh6KQ0vATSozdqrhAa1ygHiEINZCB/KSXgJUAUkYwDi/vD7txBOc9s9fF9Ow0uAAJQjAeYBgKMOFZAPQg1u5v03gJPwKGyxfcFL7i/iOwFyqeAkbm4PL1YalNebFm991floeDlQ4BpeXPO68+GQqDEorxc9RC8loY1Rtt+grMmgLGRQtmhaHNd6oumSK8DEtYa/akyLY6wXGzHD7KoYI6uhg4gb2iLsnAidOHCi772dw7kzZbbhv9eV4P3QrGMPU5qNGBY7i4gFGYVvH4vuMy027D7gqp91D+NyYOP6qaNvwO6nAyn3MYUpH2yzoqWewneEoyWGxafTGjDuSPDKOoBIsDHtPqaEYDOt49GytAHknPQyoMXx7rt5nDl/YCW8OBbnvPYzKBvyArDgdUDhx/2TyE8W42JNIT7pfe+5jxlbEwtpAwjqzAblYruUzrSPYfE36QOMRvd6XQNZNWUzYjNJG2ANxEDuANiIOcrKIROJvdgIs7psTKmUpwxlQ+0Rdjrj50CiOsZYhWGxRglDGc9iYCb2fNFbjAEq9GAMN7Vb/JAZ5hcMyu+YlHXJpzXlU2LtGBb7ZlL2W1gcy/UkfpPXsC6T8tvx2oOil5LQvnz58gXZ1h8JC/UEAA50vAAAAABJRU5ErkJggg==">
                                            <p class=" text-xs md:text-sm font-normal mt-1 md:mt-2 lg:mt-2">: online</p>
                                        </div>

                                        <div class=" flex">
                                            <img class=" w-6 h-6 m-1"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAACzUlEQVR4nO2V30tTYRjHDwRB4HWXXfVndFkzprWEBhEEmeR0us0lxoza2Zw/lkOFsDshiNlQwzHzjDnT2pnnTNuULvrplYWCF4ZpYWZz33jf5X60c3acSyHYA9+r8zzf7+c85907hilVqf7HMnU8bzPYAusNVi7RaOUSRltgrbl9quVIwpvsQaHByoHI1BZEi5NHa7cAC1Wk41DDzY5J2154c8c0Wl1ijiz3hcqiQhCuPIOwehm8ahe8Ko6Zi+8QvnaKPDPaJ77svblUOAVwidNKPvLh4oXTCKl+IXQW4FXA7FUgdhNYqJvFsPZYo9WfIAB07TIArS5xU8knz9tXPKVDoXNAtBqYr08rqlM3skkAS7dsODkLG0o+8gAh9Vs6OKPJHkrqltGW/ATkwMluoFucUvLJtwEvHRQv5w5GdWqzY9pKAG47Q7IAd1xChZKPLIDL+7F/N3QeEC5lDa3OOTa6xrc1eF130tHj/WSySx9C9yNPmPT0eN/35vORDNcPIXLdDfSNLeIrX43vc03YjFoQm3kCZ2ALk1M+7MQMP4lRYOgB+vp9YHt5qoGBUXwIttOQ7Zgp3j+2APvIItZe5vrY/CDKvi+MI+gk4foh+jBHwovHSMxekfqekkrM60EgiGedjCfLIX1f1HqwTpotY7mNDwOfAb4cePXXaVbQVtQMg+cbhbD4JAD8oPcFrWo3EqSR5XIbl/i7oAdqXlcQAJFv4hkFMIxIAmwm0xmGIU1EUqva4av+ANQXrCWxk/rWeqS99wVA139AgB9RM/W9MagAUDOIOGm8Ny4BQG+0gwEQyb0c68dyCmDvJ2gePToAG4euNMAwyghEjRtxApG5iRQA+TP5FwAcVlgOTnYYx1MA+SoFENn/PZCpfYXkK/Dl8SyIQjYR060wxRYETSQFUKiEKrF4gDfaMgqRuQlFqXbpjKg9UTRAqUrFHHL9BhuJ+qS8IRA/AAAAAElFTkSuQmCC">
                                            <p class=" text-xs md:text-sm font-normal mt-1 md:mt-2 lg:mt-2">: 100 seats
                                            </p>
                                        </div>

                                        <div class=" flex">
                                            <p class=" font-semibold text-xs md:text-sm lg:text-base m-0.5">Agenda</p>
                                            <a href="#"
                                                class=" hover:text-green-500 text-xs md:text-sm lg:text-base m-0.5">:
                                                www.djfskaljfk.pdf</a>

                                        </div>

                                        <div class=" flex">
                                            <div class=" mt-2 flex">
                                                <p class=" font-semibold text-xs md:text-sm lg:text-base m-1 ">Price:
                                                </p>
                                                <p class=" font-bold text-red-600 text-sm md:text-sm lg:text-base m-1">
                                                    $0.00</p>
                                            </div>
                                            <div class="flex ml-3">
                                                <a href="detail"><button
                                                        class="h-8 px-2 m-2 text-white bg-green-600 transition-colors duration-500 border-solid border-green-600 border-2 rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">
                                                        Register</button></a>
                                            </div>

                                        </div>
                                        <!-- <div class=" pl-10 mb-3">
                                            <button
                                                class=" text-center align-middle outline outline-green-500 bg-green-500 w-20 h-5 hover:bg-green-700 text-xs lg:text-sm">Register</button>
                                        </div> -->

                                        <div class=" flex">
                                            <p class=" font-light text-sm mx-2">Rate </p>

                                            <img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAABbklEQVR4nJ2ST0oDUQzGR+sf3GtVcO8BPEBFqAnibIS5giAuPcCsbRERdegkFUEFcdwIYkvSQhHBblzo0o0eQPECLiqZOrWC02IDgffyy/e9vDfjOD1CgnzW0hk0hKCojIXBxEE+K4TvcQ4yhTIWhHBfGQ+UcPtf4ka4OikMbxXCuWoIs32neAgXRqtlmBdGV3l5SxhrdvLPNHDYrsXMtV7TtO9KUBTGT2V8EYIbYditMW5UjnCq+z2sZkwZKsr4ahrTOlHkZZThTAir9zveRL/rRZE3JoxXynDZmSKKvIwQniiB9DKp7OG4Ml4L40VHnERiIgR1W3fALw51JTj9i8dR56VpZfhwUsJY43hlJo07GmJOGO6Sve/7w5bJ3liNYTHVQAg2lbDUbkZXCJ7iZHTjAwhL1tPLIFCGc2FoKuFjbGL/RryGZswIgvQrENx+f+P17odqtZwhLaMnDM/Wk27AsNbwcyNp3Jj1dBe/AIzL3evAGdmbAAAAAElFTkSuQmCC">
                                            <img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAABbklEQVR4nJ2ST0oDUQzGR+sf3GtVcO8BPEBFqAnibIS5giAuPcCsbRERdegkFUEFcdwIYkvSQhHBblzo0o0eQPECLiqZOrWC02IDgffyy/e9vDfjOD1CgnzW0hk0hKCojIXBxEE+K4TvcQ4yhTIWhHBfGQ+UcPtf4ka4OikMbxXCuWoIs32neAgXRqtlmBdGV3l5SxhrdvLPNHDYrsXMtV7TtO9KUBTGT2V8EYIbYditMW5UjnCq+z2sZkwZKsr4ahrTOlHkZZThTAir9zveRL/rRZE3JoxXynDZmSKKvIwQniiB9DKp7OG4Ml4L40VHnERiIgR1W3fALw51JTj9i8dR56VpZfhwUsJY43hlJo07GmJOGO6Sve/7w5bJ3liNYTHVQAg2lbDUbkZXCJ7iZHTjAwhL1tPLIFCGc2FoKuFjbGL/RryGZswIgvQrENx+f+P17odqtZwhLaMnDM/Wk27AsNbwcyNp3Jj1dBe/AIzL3evAGdmbAAAAAElFTkSuQmCC">
                                            <img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAABbklEQVR4nJ2ST0oDUQzGR+sf3GtVcO8BPEBFqAnibIS5giAuPcCsbRERdegkFUEFcdwIYkvSQhHBblzo0o0eQPECLiqZOrWC02IDgffyy/e9vDfjOD1CgnzW0hk0hKCojIXBxEE+K4TvcQ4yhTIWhHBfGQ+UcPtf4ka4OikMbxXCuWoIs32neAgXRqtlmBdGV3l5SxhrdvLPNHDYrsXMtV7TtO9KUBTGT2V8EYIbYditMW5UjnCq+z2sZkwZKsr4ahrTOlHkZZThTAir9zveRL/rRZE3JoxXynDZmSKKvIwQniiB9DKp7OG4Ml4L40VHnERiIgR1W3fALw51JTj9i8dR56VpZfhwUsJY43hlJo07GmJOGO6Sve/7w5bJ3liNYTHVQAg2lbDUbkZXCJ7iZHTjAwhL1tPLIFCGc2FoKuFjbGL/RryGZswIgvQrENx+f+P17odqtZwhLaMnDM/Wk27AsNbwcyNp3Jj1dBe/AIzL3evAGdmbAAAAAElFTkSuQmCC">
                                            <img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAABbklEQVR4nJ2ST0oDUQzGR+sf3GtVcO8BPEBFqAnibIS5giAuPcCsbRERdegkFUEFcdwIYkvSQhHBblzo0o0eQPECLiqZOrWC02IDgffyy/e9vDfjOD1CgnzW0hk0hKCojIXBxEE+K4TvcQ4yhTIWhHBfGQ+UcPtf4ka4OikMbxXCuWoIs32neAgXRqtlmBdGV3l5SxhrdvLPNHDYrsXMtV7TtO9KUBTGT2V8EYIbYditMW5UjnCq+z2sZkwZKsr4ahrTOlHkZZThTAir9zveRL/rRZE3JoxXynDZmSKKvIwQniiB9DKp7OG4Ml4L40VHnERiIgR1W3fALw51JTj9i8dR56VpZfhwUsJY43hlJo07GmJOGO6Sve/7w5bJ3liNYTHVQAg2lbDUbkZXCJ7iZHTjAwhL1tPLIFCGc2FoKuFjbGL/RryGZswIgvQrENx+f+P17odqtZwhLaMnDM/Wk27AsNbwcyNp3Jj1dBe/AIzL3evAGdmbAAAAAElFTkSuQmCC">
                                            <img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAABbklEQVR4nJ2ST0oDUQzGR+sf3GtVcO8BPEBFqAnibIS5giAuPcCsbRERdegkFUEFcdwIYkvSQhHBblzo0o0eQPECLiqZOrWC02IDgffyy/e9vDfjOD1CgnzW0hk0hKCojIXBxEE+K4TvcQ4yhTIWhHBfGQ+UcPtf4ka4OikMbxXCuWoIs32neAgXRqtlmBdGV3l5SxhrdvLPNHDYrsXMtV7TtO9KUBTGT2V8EYIbYditMW5UjnCq+z2sZkwZKsr4ahrTOlHkZZThTAir9zveRL/rRZE3JoxXynDZmSKKvIwQniiB9DKp7OG4Ml4L40VHnERiIgR1W3fALw51JTj9i8dR56VpZfhwUsJY43hlJo07GmJOGO6Sve/7w5bJ3liNYTHVQAg2lbDUbkZXCJ7iZHTjAwhL1tPLIFCGc2FoKuFjbGL/RryGZswIgvQrENx+f+P17odqtZwhLaMnDM/Wk27AsNbwcyNp3Jj1dBe/AIzL3evAGdmbAAAAAElFTkSuQmCC">
                                            <!-- <div class=" flex ml-32">
                                                <button>
                                                    <svg class=" lg:w-5 w-5 hover:fill-green-500" fill="none"
                                                        stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155">
                                                        </path>
                                                    </svg>
                                                </button>

                                                <button>
                                                    <svg class=" lg:w-5 w-5 hover:fill-green-500" fill="none"
                                                        stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </div> -->
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <!--  -->
                        </div>


                        <!-- end event post container -->

                        <!-- start event post container -->
                        <div class=" m-4 p-3 border border-gray-500 shadow-slate-400 shadow-md ">

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
                                <div class=" place-content-end">
                                    <svg class=" w-8 " fill="none" stroke="currentColor" stroke-width="1.5"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z">
                                        </path>
                                    </svg>
                                </div>

                            </div>

                            <!--  -->
                            <div class="lg:flex md:flex space-x-4">
                                <!-- event poster -->
                                <div class=" lg:basis-1/2 md:basis-1/2 bg-slate-300 dark:bg-slate-900">
                                    <img src="img/event-poster1.jpg">
                                    <div class=" flex lg:mt-5 md:mt-5 sm:mt-3 mt-3 place-content-center align-middle">
                                        <div class=" flex mx-2">
                                            <img class=" w-8 h-8"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABCUlEQVR4nO2ZPW7CUBCEN5ESiSpVyrQUtG7Q2zdd7kUJuUFyAsvb5wJR2hSuaCkgEacwMg2QP8mAsl5lPmlKrJ3dGckyIoQQ0ktGNrpGpQ+5Su8wbZy0gqVZO0tnA+0PHQdvDpVmnQ04b77ZV7b0ccQF/AfHnmgAvIAyQp34HJn6df2nwrlLHN4AWGJlif93B+roBsASK0vs2gH31+k6ugGwxMoLdMI7MmAHzH/r2GkZOkLZ0jSqgdUJnxZ/eXCli1zmofQZ/HTOSucocSd9B99n8S1bvpUI4OvmX+6tuJEo4GDz+jy28UAigV1hy+KpuJJoYBub9CgTuZSIoP1XpJEL7zkIIUR6zQbP5nJiMZY/owAAAABJRU5ErkJggg==">
                                            <p class=" text-sm mt-1">Comment</p>
                                        </div>
                                        <div>

                                        </div>
                                        <div class=" flex mx-2">
                                            <img class=" w-8 h-8"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAABUElEQVR4nOWUsUoDQRCGrxIECy0MaGcl+ATJZYZrZoxg7QOIvoQPID6GcMmMcI22VoIBFbXSwthK7AXTK7vZO8zlYs7Vg4ADU+wO83+7M7MbBP/aSOCSFO85btQqAbDALSt+kMBjJZCtBJZZ4cFCFJ5abVyZfci2wBIJ7LLCGSn2SGFgxDMXvPMSrif1eVY8YIG3EcG8TwKQ4A0rXBXGNFw1iakICZyT4H6rHa5zjGu2ydOanSYXiZPAy7DG2CNpQpYTN2qlxCcBbFnSkwteRMfR4kiOi5Ua0yKArbmbjry4i1+Xfmh5gJmWtKFfy+JtecBwFNE29NfihQDFU7vXwb1KACz4bNZmFCsCwLtZR0m0UA1AsWu+Yw+drvGpgL86aGYs+GoCmycYBp7GHWi6R9kfDyocffuJ6Y/8cAywk2zMWYi7iZcL9o240fKtwuzZJ8HuOy9uoNT3AAAAAElFTkSuQmCC">
                                            <p class=" text-sm mt-1">Share</p>
                                        </div>
                                    </div>


                                </div>
                                <!--  -->
                                <!-- event post info -->
                                <div class=" lg:basis-1/2 md:basis-1/2 mt-3">
                                    <!-- title -->
                                    <p class=" font-bold text-sm">Explore, learn how to start technology company</p>
                                    <!-- description -->
                                    <p class=" text-sm line-clamp-2">At Innovation Festival you will learn and connect
                                        with experienced researchers, developers, and industry leaders in a
                                        community-based way.</p>

                                    <div class=" mt-2">
                                        <div class=" flex ">
                                            <img class=" w-6 h-6 m-1"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABj0lEQVR4nO1YwU7CQBDd/8AABzWe9NTqzWTrReLH8RFcSAWBhJvlIhztemjskq4XvdpEmnJes1WJtqR2sGFLnJe8pFmS9+Z1Z6YJhCAQ28eNM20NnOmLYv/27lK3DhiJ6WQmEzqzZ906YKxMP6lbZy2W5+ZebBl2bBlRbJnyO9PG6d+LcvCrjhHF1OwtLk4PCLh4aoTrTCOaNVZn0OJBOtQIl/SsVjjAx5tfL+YdH2WM1Rk0AFiHml1IgEzbfNFp1jPGTqMODgDWoeYbIECecUMOr0cr06E9kpNmY4MAcB1SRgB1zePWVWKoqJ69k81aaAzUKSWAGjRlrt6gonredIg9oE4pAXSSYABrR26AcSGrSIIBON6ArEQLtTv9Hyz7nGEAjjcgK91CDL8DArdQLnCIOxUf4vauf8gYbiGBW+h/z0AbAwjcQrnQvS7Zn2fAFwvdxbI0/aD4n7suD3raC+YZ2oUDPDw+HTIuXitQtFR0eRDee8F+4QBJG83nNdcXXa3t5CfeNrh4BAKBINvCO+WE9Ir/r6VFAAAAAElFTkSuQmCC">
                                            <p class=" text-green-600 md:text-sm text-xs mt-1 md:mt-2 lg:mt-2">
                                                : Sun, Apr 9, 2023 10:00 PM
                                            </p>
                                        </div>

                                        <div class=" flex">
                                            <img class=" w-6 h-6 m-1"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADT0lEQVR4nO2X3UsUURjGX4uCUrspqIuCNAW7CAqhIs/sWJa3WUT/QEnSdWaIsEFBUOiMVkJQF3UhhTflBxVIfmzknlmFJLsI6aI7Q8ywcs8R841zdlFbd2Z2Z7ezS8wDDwyz877n+c2ec2YGwJcvX77+G6EOO5BAPRJ4gRp8QgI/pWPH4txFrIHtkG/CU1CIGlxHAj9QA3TxPBIIYiVshXwQarAHCYynEDzRE6hBSW7DEyhFDb56CB8zgemcQeAxKEYNPnoOvwrxAXUoUg9A4FbG4bUViBtqw+uwCzVYcAj0HAnocnELV0E1atDjAPELj8BOdQAELjuEb3Koa3aAaFAHoMFLuzufQm2vTW2/mvSxEJ9tQuiutQE4blM7pRIg+fxPYTeJ715J1wGoEhKY8wxwGLbZAMyq/AdCSUNUQXUKtSdsAEJq0sdCtNiE6HGtJdBnU9ui8jmwGwks2SzG5rTBCSyJnsoAZJjY67Hdnt4rdxsdiqTFtLG/8yh6KQ0vATSozdqrhAa1ygHiEINZCB/KSXgJUAUkYwDi/vD7txBOc9s9fF9Ow0uAAJQjAeYBgKMOFZAPQg1u5v03gJPwKGyxfcFL7i/iOwFyqeAkbm4PL1YalNebFm991floeDlQ4BpeXPO68+GQqDEorxc9RC8loY1Rtt+grMmgLGRQtmhaHNd6oumSK8DEtYa/akyLY6wXGzHD7KoYI6uhg4gb2iLsnAidOHCi772dw7kzZbbhv9eV4P3QrGMPU5qNGBY7i4gFGYVvH4vuMy027D7gqp91D+NyYOP6qaNvwO6nAyn3MYUpH2yzoqWewneEoyWGxafTGjDuSPDKOoBIsDHtPqaEYDOt49GytAHknPQyoMXx7rt5nDl/YCW8OBbnvPYzKBvyArDgdUDhx/2TyE8W42JNIT7pfe+5jxlbEwtpAwjqzAblYruUzrSPYfE36QOMRvd6XQNZNWUzYjNJG2ANxEDuANiIOcrKIROJvdgIs7psTKmUpwxlQ+0Rdjrj50CiOsZYhWGxRglDGc9iYCb2fNFbjAEq9GAMN7Vb/JAZ5hcMyu+YlHXJpzXlU2LtGBb7ZlL2W1gcy/UkfpPXsC6T8tvx2oOil5LQvnz58gXZ1h8JC/UEAA50vAAAAABJRU5ErkJggg==">
                                            <p class=" text-xs md:text-sm font-normal mt-1 md:mt-2 lg:mt-2">: online</p>
                                        </div>

                                        <div class=" flex">
                                            <img class=" w-6 h-6 m-1"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAACzUlEQVR4nO2V30tTYRjHDwRB4HWXXfVndFkzprWEBhEEmeR0us0lxoza2Zw/lkOFsDshiNlQwzHzjDnT2pnnTNuULvrplYWCF4ZpYWZz33jf5X60c3acSyHYA9+r8zzf7+c85907hilVqf7HMnU8bzPYAusNVi7RaOUSRltgrbl9quVIwpvsQaHByoHI1BZEi5NHa7cAC1Wk41DDzY5J2154c8c0Wl1ijiz3hcqiQhCuPIOwehm8ahe8Ko6Zi+8QvnaKPDPaJ77svblUOAVwidNKPvLh4oXTCKl+IXQW4FXA7FUgdhNYqJvFsPZYo9WfIAB07TIArS5xU8knz9tXPKVDoXNAtBqYr08rqlM3skkAS7dsODkLG0o+8gAh9Vs6OKPJHkrqltGW/ATkwMluoFucUvLJtwEvHRQv5w5GdWqzY9pKAG47Q7IAd1xChZKPLIDL+7F/N3QeEC5lDa3OOTa6xrc1eF130tHj/WSySx9C9yNPmPT0eN/35vORDNcPIXLdDfSNLeIrX43vc03YjFoQm3kCZ2ALk1M+7MQMP4lRYOgB+vp9YHt5qoGBUXwIttOQ7Zgp3j+2APvIItZe5vrY/CDKvi+MI+gk4foh+jBHwovHSMxekfqekkrM60EgiGedjCfLIX1f1HqwTpotY7mNDwOfAb4cePXXaVbQVtQMg+cbhbD4JAD8oPcFrWo3EqSR5XIbl/i7oAdqXlcQAJFv4hkFMIxIAmwm0xmGIU1EUqva4av+ANQXrCWxk/rWeqS99wVA139AgB9RM/W9MagAUDOIOGm8Ny4BQG+0gwEQyb0c68dyCmDvJ2gePToAG4euNMAwyghEjRtxApG5iRQA+TP5FwAcVlgOTnYYx1MA+SoFENn/PZCpfYXkK/Dl8SyIQjYR060wxRYETSQFUKiEKrF4gDfaMgqRuQlFqXbpjKg9UTRAqUrFHHL9BhuJ+qS8IRA/AAAAAElFTkSuQmCC">
                                            <p class=" text-xs md:text-sm font-normal mt-1 md:mt-2 lg:mt-2">: 100 seats
                                            </p>
                                        </div>

                                        <div class=" flex">
                                            <p class=" font-semibold text-xs md:text-sm lg:text-base m-0.5">Agenda</p>
                                            <a href="#"
                                                class=" hover:text-green-500 text-xs md:text-sm lg:text-base m-0.5">:
                                                www.djfskaljfk.pdf</a>

                                        </div>

                                        <div class=" flex">
                                            <div class=" mt-2 flex">
                                                <p class=" font-semibold text-xs md:text-sm lg:text-base m-1 ">Price:
                                                </p>
                                                <p class=" font-bold text-red-600 text-sm md:text-sm lg:text-base m-1">
                                                    $0.00</p>
                                            </div>
                                            <div class="flex ml-3">
                                                <a href="detail"><button
                                                        class="h-8 px-2 m-2 text-white bg-green-600 transition-colors duration-500 border-solid border-green-600 border-2 rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">
                                                        Register</button></a>
                                            </div>

                                        </div>
                                        <!-- <div class=" pl-10 mb-3">
                <button
                    class=" text-center align-middle outline outline-green-500 bg-green-500 w-20 h-5 hover:bg-green-700 text-xs lg:text-sm">Register</button>
            </div> -->

                                        <div class=" flex">
                                            <p class=" font-light text-sm mx-2">Rate </p>

                                            <img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAABbklEQVR4nJ2ST0oDUQzGR+sf3GtVcO8BPEBFqAnibIS5giAuPcCsbRERdegkFUEFcdwIYkvSQhHBblzo0o0eQPECLiqZOrWC02IDgffyy/e9vDfjOD1CgnzW0hk0hKCojIXBxEE+K4TvcQ4yhTIWhHBfGQ+UcPtf4ka4OikMbxXCuWoIs32neAgXRqtlmBdGV3l5SxhrdvLPNHDYrsXMtV7TtO9KUBTGT2V8EYIbYditMW5UjnCq+z2sZkwZKsr4ahrTOlHkZZThTAir9zveRL/rRZE3JoxXynDZmSKKvIwQniiB9DKp7OG4Ml4L40VHnERiIgR1W3fALw51JTj9i8dR56VpZfhwUsJY43hlJo07GmJOGO6Sve/7w5bJ3liNYTHVQAg2lbDUbkZXCJ7iZHTjAwhL1tPLIFCGc2FoKuFjbGL/RryGZswIgvQrENx+f+P17odqtZwhLaMnDM/Wk27AsNbwcyNp3Jj1dBe/AIzL3evAGdmbAAAAAElFTkSuQmCC">
                                            <img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAABbklEQVR4nJ2ST0oDUQzGR+sf3GtVcO8BPEBFqAnibIS5giAuPcCsbRERdegkFUEFcdwIYkvSQhHBblzo0o0eQPECLiqZOrWC02IDgffyy/e9vDfjOD1CgnzW0hk0hKCojIXBxEE+K4TvcQ4yhTIWhHBfGQ+UcPtf4ka4OikMbxXCuWoIs32neAgXRqtlmBdGV3l5SxhrdvLPNHDYrsXMtV7TtO9KUBTGT2V8EYIbYditMW5UjnCq+z2sZkwZKsr4ahrTOlHkZZThTAir9zveRL/rRZE3JoxXynDZmSKKvIwQniiB9DKp7OG4Ml4L40VHnERiIgR1W3fALw51JTj9i8dR56VpZfhwUsJY43hlJo07GmJOGO6Sve/7w5bJ3liNYTHVQAg2lbDUbkZXCJ7iZHTjAwhL1tPLIFCGc2FoKuFjbGL/RryGZswIgvQrENx+f+P17odqtZwhLaMnDM/Wk27AsNbwcyNp3Jj1dBe/AIzL3evAGdmbAAAAAElFTkSuQmCC">
                                            <img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAABbklEQVR4nJ2ST0oDUQzGR+sf3GtVcO8BPEBFqAnibIS5giAuPcCsbRERdegkFUEFcdwIYkvSQhHBblzo0o0eQPECLiqZOrWC02IDgffyy/e9vDfjOD1CgnzW0hk0hKCojIXBxEE+K4TvcQ4yhTIWhHBfGQ+UcPtf4ka4OikMbxXCuWoIs32neAgXRqtlmBdGV3l5SxhrdvLPNHDYrsXMtV7TtO9KUBTGT2V8EYIbYditMW5UjnCq+z2sZkwZKsr4ahrTOlHkZZThTAir9zveRL/rRZE3JoxXynDZmSKKvIwQniiB9DKp7OG4Ml4L40VHnERiIgR1W3fALw51JTj9i8dR56VpZfhwUsJY43hlJo07GmJOGO6Sve/7w5bJ3liNYTHVQAg2lbDUbkZXCJ7iZHTjAwhL1tPLIFCGc2FoKuFjbGL/RryGZswIgvQrENx+f+P17odqtZwhLaMnDM/Wk27AsNbwcyNp3Jj1dBe/AIzL3evAGdmbAAAAAElFTkSuQmCC">
                                            <img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAABbklEQVR4nJ2ST0oDUQzGR+sf3GtVcO8BPEBFqAnibIS5giAuPcCsbRERdegkFUEFcdwIYkvSQhHBblzo0o0eQPECLiqZOrWC02IDgffyy/e9vDfjOD1CgnzW0hk0hKCojIXBxEE+K4TvcQ4yhTIWhHBfGQ+UcPtf4ka4OikMbxXCuWoIs32neAgXRqtlmBdGV3l5SxhrdvLPNHDYrsXMtV7TtO9KUBTGT2V8EYIbYditMW5UjnCq+z2sZkwZKsr4ahrTOlHkZZThTAir9zveRL/rRZE3JoxXynDZmSKKvIwQniiB9DKp7OG4Ml4L40VHnERiIgR1W3fALw51JTj9i8dR56VpZfhwUsJY43hlJo07GmJOGO6Sve/7w5bJ3liNYTHVQAg2lbDUbkZXCJ7iZHTjAwhL1tPLIFCGc2FoKuFjbGL/RryGZswIgvQrENx+f+P17odqtZwhLaMnDM/Wk27AsNbwcyNp3Jj1dBe/AIzL3evAGdmbAAAAAElFTkSuQmCC">
                                            <img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAABbklEQVR4nJ2ST0oDUQzGR+sf3GtVcO8BPEBFqAnibIS5giAuPcCsbRERdegkFUEFcdwIYkvSQhHBblzo0o0eQPECLiqZOrWC02IDgffyy/e9vDfjOD1CgnzW0hk0hKCojIXBxEE+K4TvcQ4yhTIWhHBfGQ+UcPtf4ka4OikMbxXCuWoIs32neAgXRqtlmBdGV3l5SxhrdvLPNHDYrsXMtV7TtO9KUBTGT2V8EYIbYditMW5UjnCq+z2sZkwZKsr4ahrTOlHkZZThTAir9zveRL/rRZE3JoxXynDZmSKKvIwQniiB9DKp7OG4Ml4L40VHnERiIgR1W3fALw51JTj9i8dR56VpZfhwUsJY43hlJo07GmJOGO6Sve/7w5bJ3liNYTHVQAg2lbDUbkZXCJ7iZHTjAwhL1tPLIFCGc2FoKuFjbGL/RryGZswIgvQrENx+f+P17odqtZwhLaMnDM/Wk27AsNbwcyNp3Jj1dBe/AIzL3evAGdmbAAAAAElFTkSuQmCC">
                                            <!-- <div class=" flex ml-32">
                    <button>
                        <svg class=" lg:w-5 w-5 hover:fill-green-500" fill="none"
                            stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155">
                            </path>
                        </svg>
                    </button>

                    <button>
                        <svg class=" lg:w-5 w-5 hover:fill-green-500" fill="none"
                            stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z">
                            </path>
                        </svg>
                    </button>
                </div> -->
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <!--  -->
                        </div>


                        <!-- end event post container -->

                        <!-- start event post container -->
                        <div class=" m-4 p-3 border border-gray-500 shadow-slate-400 shadow-md ">

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
                                <div class=" place-content-end">
                                    <svg class=" w-8 " fill="none" stroke="currentColor" stroke-width="1.5"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z">
                                        </path>
                                    </svg>
                                </div>

                            </div>

                            <!--  -->
                            <div class="lg:flex md:flex space-x-4">
                                <!-- event poster -->
                                <div class=" lg:basis-1/2 md:basis-1/2 bg-slate-300 dark:bg-slate-900">
                                    <img src="img/event-poster1.jpg">
                                    <div class=" flex lg:mt-5 md:mt-5 sm:mt-3 mt-3 place-content-center align-middle">
                                        <div class=" flex mx-2">
                                            <img class=" w-8 h-8"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABCUlEQVR4nO2ZPW7CUBCEN5ESiSpVyrQUtG7Q2zdd7kUJuUFyAsvb5wJR2hSuaCkgEacwMg2QP8mAsl5lPmlKrJ3dGckyIoQQ0ktGNrpGpQ+5Su8wbZy0gqVZO0tnA+0PHQdvDpVmnQ04b77ZV7b0ccQF/AfHnmgAvIAyQp34HJn6df2nwrlLHN4AWGJlif93B+roBsASK0vs2gH31+k6ugGwxMoLdMI7MmAHzH/r2GkZOkLZ0jSqgdUJnxZ/eXCli1zmofQZ/HTOSucocSd9B99n8S1bvpUI4OvmX+6tuJEo4GDz+jy28UAigV1hy+KpuJJoYBub9CgTuZSIoP1XpJEL7zkIIUR6zQbP5nJiMZY/owAAAABJRU5ErkJggg==">
                                            <p class=" text-sm mt-1">Comment</p>
                                        </div>
                                        <div>

                                        </div>
                                        <div class=" flex mx-2">
                                            <img class=" w-8 h-8"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAABUElEQVR4nOWUsUoDQRCGrxIECy0MaGcl+ATJZYZrZoxg7QOIvoQPID6GcMmMcI22VoIBFbXSwthK7AXTK7vZO8zlYs7Vg4ADU+wO83+7M7MbBP/aSOCSFO85btQqAbDALSt+kMBjJZCtBJZZ4cFCFJ5abVyZfci2wBIJ7LLCGSn2SGFgxDMXvPMSrif1eVY8YIG3EcG8TwKQ4A0rXBXGNFw1iakICZyT4H6rHa5zjGu2ydOanSYXiZPAy7DG2CNpQpYTN2qlxCcBbFnSkwteRMfR4kiOi5Ua0yKArbmbjry4i1+Xfmh5gJmWtKFfy+JtecBwFNE29NfihQDFU7vXwb1KACz4bNZmFCsCwLtZR0m0UA1AsWu+Yw+drvGpgL86aGYs+GoCmycYBp7GHWi6R9kfDyocffuJ6Y/8cAywk2zMWYi7iZcL9o240fKtwuzZJ8HuOy9uoNT3AAAAAElFTkSuQmCC">
                                            <p class=" text-sm mt-1">Share</p>
                                        </div>
                                    </div>


                                </div>
                                <!--  -->
                                <!-- event post info -->
                                <div class=" lg:basis-1/2 md:basis-1/2 mt-3">
                                    <!-- title -->
                                    <p class=" font-bold text-sm">Explore, learn how to start technology company</p>
                                    <!-- description -->
                                    <p class=" text-sm line-clamp-2">At Innovation Festival you will learn and connect
                                        with experienced researchers, developers, and industry leaders in a
                                        community-based way.</p>

                                    <div class=" mt-2">
                                        <div class=" flex ">
                                            <img class=" w-6 h-6 m-1"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABj0lEQVR4nO1YwU7CQBDd/8AABzWe9NTqzWTrReLH8RFcSAWBhJvlIhztemjskq4XvdpEmnJes1WJtqR2sGFLnJe8pFmS9+Z1Z6YJhCAQ28eNM20NnOmLYv/27lK3DhiJ6WQmEzqzZ906YKxMP6lbZy2W5+ZebBl2bBlRbJnyO9PG6d+LcvCrjhHF1OwtLk4PCLh4aoTrTCOaNVZn0OJBOtQIl/SsVjjAx5tfL+YdH2WM1Rk0AFiHml1IgEzbfNFp1jPGTqMODgDWoeYbIECecUMOr0cr06E9kpNmY4MAcB1SRgB1zePWVWKoqJ69k81aaAzUKSWAGjRlrt6gonredIg9oE4pAXSSYABrR26AcSGrSIIBON6ArEQLtTv9Hyz7nGEAjjcgK91CDL8DArdQLnCIOxUf4vauf8gYbiGBW+h/z0AbAwjcQrnQvS7Zn2fAFwvdxbI0/aD4n7suD3raC+YZ2oUDPDw+HTIuXitQtFR0eRDee8F+4QBJG83nNdcXXa3t5CfeNrh4BAKBINvCO+WE9Ir/r6VFAAAAAElFTkSuQmCC">
                                            <p class=" text-green-600 md:text-sm text-xs mt-1 md:mt-2 lg:mt-2">
                                                : Sun, Apr 9, 2023 10:00 PM
                                            </p>
                                        </div>

                                        <div class=" flex">
                                            <img class=" w-6 h-6 m-1"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADT0lEQVR4nO2X3UsUURjGX4uCUrspqIuCNAW7CAqhIs/sWJa3WUT/QEnSdWaIsEFBUOiMVkJQF3UhhTflBxVIfmzknlmFJLsI6aI7Q8ywcs8R841zdlFbd2Z2Z7ezS8wDDwyz877n+c2ec2YGwJcvX77+G6EOO5BAPRJ4gRp8QgI/pWPH4txFrIHtkG/CU1CIGlxHAj9QA3TxPBIIYiVshXwQarAHCYynEDzRE6hBSW7DEyhFDb56CB8zgemcQeAxKEYNPnoOvwrxAXUoUg9A4FbG4bUViBtqw+uwCzVYcAj0HAnocnELV0E1atDjAPELj8BOdQAELjuEb3Koa3aAaFAHoMFLuzufQm2vTW2/mvSxEJ9tQuiutQE4blM7pRIg+fxPYTeJ715J1wGoEhKY8wxwGLbZAMyq/AdCSUNUQXUKtSdsAEJq0sdCtNiE6HGtJdBnU9ui8jmwGwks2SzG5rTBCSyJnsoAZJjY67Hdnt4rdxsdiqTFtLG/8yh6KQ0vATSozdqrhAa1ygHiEINZCB/KSXgJUAUkYwDi/vD7txBOc9s9fF9Ow0uAAJQjAeYBgKMOFZAPQg1u5v03gJPwKGyxfcFL7i/iOwFyqeAkbm4PL1YalNebFm991floeDlQ4BpeXPO68+GQqDEorxc9RC8loY1Rtt+grMmgLGRQtmhaHNd6oumSK8DEtYa/akyLY6wXGzHD7KoYI6uhg4gb2iLsnAidOHCi772dw7kzZbbhv9eV4P3QrGMPU5qNGBY7i4gFGYVvH4vuMy027D7gqp91D+NyYOP6qaNvwO6nAyn3MYUpH2yzoqWewneEoyWGxafTGjDuSPDKOoBIsDHtPqaEYDOt49GytAHknPQyoMXx7rt5nDl/YCW8OBbnvPYzKBvyArDgdUDhx/2TyE8W42JNIT7pfe+5jxlbEwtpAwjqzAblYruUzrSPYfE36QOMRvd6XQNZNWUzYjNJG2ANxEDuANiIOcrKIROJvdgIs7psTKmUpwxlQ+0Rdjrj50CiOsZYhWGxRglDGc9iYCb2fNFbjAEq9GAMN7Vb/JAZ5hcMyu+YlHXJpzXlU2LtGBb7ZlL2W1gcy/UkfpPXsC6T8tvx2oOil5LQvnz58gXZ1h8JC/UEAA50vAAAAABJRU5ErkJggg==">
                                            <p class=" text-xs md:text-sm font-normal mt-1 md:mt-2 lg:mt-2">: online</p>
                                        </div>

                                        <div class=" flex">
                                            <img class=" w-6 h-6 m-1"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAACzUlEQVR4nO2V30tTYRjHDwRB4HWXXfVndFkzprWEBhEEmeR0us0lxoza2Zw/lkOFsDshiNlQwzHzjDnT2pnnTNuULvrplYWCF4ZpYWZz33jf5X60c3acSyHYA9+r8zzf7+c85907hilVqf7HMnU8bzPYAusNVi7RaOUSRltgrbl9quVIwpvsQaHByoHI1BZEi5NHa7cAC1Wk41DDzY5J2154c8c0Wl1ijiz3hcqiQhCuPIOwehm8ahe8Ko6Zi+8QvnaKPDPaJ77svblUOAVwidNKPvLh4oXTCKl+IXQW4FXA7FUgdhNYqJvFsPZYo9WfIAB07TIArS5xU8knz9tXPKVDoXNAtBqYr08rqlM3skkAS7dsODkLG0o+8gAh9Vs6OKPJHkrqltGW/ATkwMluoFucUvLJtwEvHRQv5w5GdWqzY9pKAG47Q7IAd1xChZKPLIDL+7F/N3QeEC5lDa3OOTa6xrc1eF130tHj/WSySx9C9yNPmPT0eN/35vORDNcPIXLdDfSNLeIrX43vc03YjFoQm3kCZ2ALk1M+7MQMP4lRYOgB+vp9YHt5qoGBUXwIttOQ7Zgp3j+2APvIItZe5vrY/CDKvi+MI+gk4foh+jBHwovHSMxekfqekkrM60EgiGedjCfLIX1f1HqwTpotY7mNDwOfAb4cePXXaVbQVtQMg+cbhbD4JAD8oPcFrWo3EqSR5XIbl/i7oAdqXlcQAJFv4hkFMIxIAmwm0xmGIU1EUqva4av+ANQXrCWxk/rWeqS99wVA139AgB9RM/W9MagAUDOIOGm8Ny4BQG+0gwEQyb0c68dyCmDvJ2gePToAG4euNMAwyghEjRtxApG5iRQA+TP5FwAcVlgOTnYYx1MA+SoFENn/PZCpfYXkK/Dl8SyIQjYR060wxRYETSQFUKiEKrF4gDfaMgqRuQlFqXbpjKg9UTRAqUrFHHL9BhuJ+qS8IRA/AAAAAElFTkSuQmCC">
                                            <p class=" text-xs md:text-sm font-normal mt-1 md:mt-2 lg:mt-2">: 100 seats
                                            </p>
                                        </div>

                                        <div class=" flex">
                                            <p class=" font-semibold text-xs md:text-sm lg:text-base m-0.5">Agenda</p>
                                            <a href="#"
                                                class=" hover:text-green-500 text-xs md:text-sm lg:text-base m-0.5">:
                                                www.djfskaljfk.pdf</a>

                                        </div>

                                        <div class=" flex">
                                            <div class=" mt-2 flex">
                                                <p class=" font-semibold text-xs md:text-sm lg:text-base m-1 ">Price:
                                                </p>
                                                <p class=" font-bold text-red-600 text-sm md:text-sm lg:text-base m-1">
                                                    $0.00</p>
                                            </div>
                                            <div class="flex ml-3">
                                                <a href="detail"><button
                                                        class="h-8 px-2 m-2 text-white bg-green-600 transition-colors duration-500 border-solid border-green-600 border-2 rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">
                                                        Register</button></a>
                                            </div>

                                        </div>
                                        <!-- <div class=" pl-10 mb-3">
                <button
                    class=" text-center align-middle outline outline-green-500 bg-green-500 w-20 h-5 hover:bg-green-700 text-xs lg:text-sm">Register</button>
            </div> -->

                                        <div class=" flex">
                                            <p class=" font-light text-sm mx-2">Rate </p>

                                            <img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAABbklEQVR4nJ2ST0oDUQzGR+sf3GtVcO8BPEBFqAnibIS5giAuPcCsbRERdegkFUEFcdwIYkvSQhHBblzo0o0eQPECLiqZOrWC02IDgffyy/e9vDfjOD1CgnzW0hk0hKCojIXBxEE+K4TvcQ4yhTIWhHBfGQ+UcPtf4ka4OikMbxXCuWoIs32neAgXRqtlmBdGV3l5SxhrdvLPNHDYrsXMtV7TtO9KUBTGT2V8EYIbYditMW5UjnCq+z2sZkwZKsr4ahrTOlHkZZThTAir9zveRL/rRZE3JoxXynDZmSKKvIwQniiB9DKp7OG4Ml4L40VHnERiIgR1W3fALw51JTj9i8dR56VpZfhwUsJY43hlJo07GmJOGO6Sve/7w5bJ3liNYTHVQAg2lbDUbkZXCJ7iZHTjAwhL1tPLIFCGc2FoKuFjbGL/RryGZswIgvQrENx+f+P17odqtZwhLaMnDM/Wk27AsNbwcyNp3Jj1dBe/AIzL3evAGdmbAAAAAElFTkSuQmCC">
                                            <img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAABbklEQVR4nJ2ST0oDUQzGR+sf3GtVcO8BPEBFqAnibIS5giAuPcCsbRERdegkFUEFcdwIYkvSQhHBblzo0o0eQPECLiqZOrWC02IDgffyy/e9vDfjOD1CgnzW0hk0hKCojIXBxEE+K4TvcQ4yhTIWhHBfGQ+UcPtf4ka4OikMbxXCuWoIs32neAgXRqtlmBdGV3l5SxhrdvLPNHDYrsXMtV7TtO9KUBTGT2V8EYIbYditMW5UjnCq+z2sZkwZKsr4ahrTOlHkZZThTAir9zveRL/rRZE3JoxXynDZmSKKvIwQniiB9DKp7OG4Ml4L40VHnERiIgR1W3fALw51JTj9i8dR56VpZfhwUsJY43hlJo07GmJOGO6Sve/7w5bJ3liNYTHVQAg2lbDUbkZXCJ7iZHTjAwhL1tPLIFCGc2FoKuFjbGL/RryGZswIgvQrENx+f+P17odqtZwhLaMnDM/Wk27AsNbwcyNp3Jj1dBe/AIzL3evAGdmbAAAAAElFTkSuQmCC">
                                            <img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAABbklEQVR4nJ2ST0oDUQzGR+sf3GtVcO8BPEBFqAnibIS5giAuPcCsbRERdegkFUEFcdwIYkvSQhHBblzo0o0eQPECLiqZOrWC02IDgffyy/e9vDfjOD1CgnzW0hk0hKCojIXBxEE+K4TvcQ4yhTIWhHBfGQ+UcPtf4ka4OikMbxXCuWoIs32neAgXRqtlmBdGV3l5SxhrdvLPNHDYrsXMtV7TtO9KUBTGT2V8EYIbYditMW5UjnCq+z2sZkwZKsr4ahrTOlHkZZThTAir9zveRL/rRZE3JoxXynDZmSKKvIwQniiB9DKp7OG4Ml4L40VHnERiIgR1W3fALw51JTj9i8dR56VpZfhwUsJY43hlJo07GmJOGO6Sve/7w5bJ3liNYTHVQAg2lbDUbkZXCJ7iZHTjAwhL1tPLIFCGc2FoKuFjbGL/RryGZswIgvQrENx+f+P17odqtZwhLaMnDM/Wk27AsNbwcyNp3Jj1dBe/AIzL3evAGdmbAAAAAElFTkSuQmCC">
                                            <img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAABbklEQVR4nJ2ST0oDUQzGR+sf3GtVcO8BPEBFqAnibIS5giAuPcCsbRERdegkFUEFcdwIYkvSQhHBblzo0o0eQPECLiqZOrWC02IDgffyy/e9vDfjOD1CgnzW0hk0hKCojIXBxEE+K4TvcQ4yhTIWhHBfGQ+UcPtf4ka4OikMbxXCuWoIs32neAgXRqtlmBdGV3l5SxhrdvLPNHDYrsXMtV7TtO9KUBTGT2V8EYIbYditMW5UjnCq+z2sZkwZKsr4ahrTOlHkZZThTAir9zveRL/rRZE3JoxXynDZmSKKvIwQniiB9DKp7OG4Ml4L40VHnERiIgR1W3fALw51JTj9i8dR56VpZfhwUsJY43hlJo07GmJOGO6Sve/7w5bJ3liNYTHVQAg2lbDUbkZXCJ7iZHTjAwhL1tPLIFCGc2FoKuFjbGL/RryGZswIgvQrENx+f+P17odqtZwhLaMnDM/Wk27AsNbwcyNp3Jj1dBe/AIzL3evAGdmbAAAAAElFTkSuQmCC">
                                            <img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAABbklEQVR4nJ2ST0oDUQzGR+sf3GtVcO8BPEBFqAnibIS5giAuPcCsbRERdegkFUEFcdwIYkvSQhHBblzo0o0eQPECLiqZOrWC02IDgffyy/e9vDfjOD1CgnzW0hk0hKCojIXBxEE+K4TvcQ4yhTIWhHBfGQ+UcPtf4ka4OikMbxXCuWoIs32neAgXRqtlmBdGV3l5SxhrdvLPNHDYrsXMtV7TtO9KUBTGT2V8EYIbYditMW5UjnCq+z2sZkwZKsr4ahrTOlHkZZThTAir9zveRL/rRZE3JoxXynDZmSKKvIwQniiB9DKp7OG4Ml4L40VHnERiIgR1W3fALw51JTj9i8dR56VpZfhwUsJY43hlJo07GmJOGO6Sve/7w5bJ3liNYTHVQAg2lbDUbkZXCJ7iZHTjAwhL1tPLIFCGc2FoKuFjbGL/RryGZswIgvQrENx+f+P17odqtZwhLaMnDM/Wk27AsNbwcyNp3Jj1dBe/AIzL3evAGdmbAAAAAElFTkSuQmCC">
                                            <!-- <div class=" flex ml-32">
                    <button>
                        <svg class=" lg:w-5 w-5 hover:fill-green-500" fill="none"
                            stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155">
                            </path>
                        </svg>
                    </button>

                    <button>
                        <svg class=" lg:w-5 w-5 hover:fill-green-500" fill="none"
                            stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z">
                            </path>
                        </svg>
                    </button>
                </div> -->
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