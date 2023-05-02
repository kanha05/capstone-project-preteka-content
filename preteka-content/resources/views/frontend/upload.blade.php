@extends('frontend.layout')
@section('content')
<body>
    <div class="w-full lg:h-screen md:overflow-auto">
        <div class="w-5/6 lg:h-screen md:overflow-auto flex mx-auto  border-t-2 border-gray-400">

            <div class="w-32 drop-shadow-lg bg-white  ">
                <div class="w-3/4 h-24 mx-auto mt-4">
                    <img class=" w-36" src="img/logo1.png" alt="">
                </div>
            </div>

            <div class="grow drop-shadow-lg  bg-white lg:grid-cols-2  lg:flex">
                <div class="lg:w-1/2 md:full drop-shadow-lg bg-black-200 grid grid-rows-7 gap-4 p-4">

                    <div class=" grid grid-rows-2">
                        <div class=" h-10 ">
                           <h1 class=" font-bold lg:text-3xl mg:text-3xl sm:text-2xl  text-1xl ">Basic info</h1> 
                        </div>
                        <div class=" h-10 lg:-mt-4 md:-mt-1 sm:-mt-1 -mt-3  text-gray-600 ">
                            <p class="lg:text-base md:text-base sm:text-base text-sm">Tell event-goers why they should come. Add details that highlight what make it unique.</p>
                        </div>
                    </div>
                    <div class=" lg:-mt-7 md:mt-2 sm:mt-2 mt-2 ">
                        <input class=" hover:border-green-600 focus:ring-green-600 focus:border-green-600  lg:p-3 md:p-2  p-1 flix items-center w-full lg:text-lg md:text-base lg:placeholder:text-lg placeholder:text-base border-2" type="text" placeholder="Event Title" >
                        <p class=" text-gray-600 pt-2 lg:text-base md:text-base text-sm">* Be clear and desoriptive</p>
                    </div>
                    <div class=" lg:-mt-9 md:mt-1">
                        <input class=" hover:border-green-600 focus:ring-green-600 focus:border-green-600  lg:p-3 md:p-2  p-1 flix items-center w-full lg:text-lg md:text-base lg:placeholder:text-lg placeholder:text-base border-2" type="text" placeholder="Organization" >
                        <p class=" text-gray-600 pt-2 lg:text-base md:text-base text-sm">* Tell attendeeswho is organizing this event</p>
                    </div>

                    <div class=" lg:-mt-10 md:mt-1 -mt-1 grid grid-rows-3 gap-5">
                        <div class="grid grid-cols-3 gap-4 place-items-left">
                            <div class="  text-gray-600 ">Option1</div>
                            <div class=" text-gray-600 ">Option2</div>
                            <div class=" text-gray-600 ">Picture</div>
                        </div>
                        <div class="grid grid-cols-3  lg:gap-4  lg:-mt-7 md:gap-3 md:-mt-4 -mt-4 gap-2">
                            <div class="">     
                                <select  id="countries_disabled" class=" flix items-center w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  lg:p-3 sm:p-3 md:p-3 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                              </select>
                            </div>            
                            <div class="">     
                                <select  id="countries_disabled" class=" flix items-center w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  lg:p-3 sm:p-3 md:p-3 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                            </select>
                            </div>               
                            <div class="">     
                                  <select  id="countries_disabled" class=" flix items-center w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  lg:p-3 sm:p-3 md:p-3 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                  <option value="US">United States</option>
                                  <option value="CA">Canada</option>
                                  <option value="FR">France</option>
                                  <option value="DE">Germany</option>
                                </select>
                        </div>                  
                        </div>
                        <div class=" lg:-mt-11 md:-mt-4 -mt-4"> <p class=" text-gray-600 pt-2">* Select category</p></div>
                    </div>

                    <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-5 lg:-mt-[65px] md:-mt-5 -mt-5">
                        <div class=" grid grid-rows-2">
                            <div class=" text-gray-600 ">Price</div>
                            <div class="  lg:-mt-5 md:-mt-2 -mt-1"> <input class=" hover:border-green-600 focus:ring-green-600 focus:border-green-600   lg:p-3 md:p-2  p-1 flix items-center w-full lg:text-lg md:text-base lg:placeholder:text-lg placeholder:text-base border-2" type="text" placeholder="Price" ></div>                       
                         </div>
                         <div class="grid grid-rows-2 ">
                            <div class="  text-gray-600 ">Agenda</div>
                            <div class="  text-gray-600 lg:-mt-5 md:-mt-2 sm:-mt-2 mt-1 lg:text-xs md:text-xs text-xs ">
                                <input type="file">
                            </div>
                         </div>
                    </div>
                   
                    <div class=" row-span-2  grid grid-rows-2 lg:-mt-6 md:mt-1">
                        <div class="  text-gray-600 ">Description</div>
                        <div class=" lg:-mt-7 md:-mt-3  -mt-3  grow pt-1"> <input class=" hover:border-green-600 focus:ring-green-600 focus:border-green-600  p-3 w-full h-full text-lg placeholder:text-lg border-2" type="text" placeholder="More detail.." ></div>                       
                    </div>

                </div>


                {{-- ?date and time location --}}

                <div class="lg:w-1/2 md:full  drop-shadow-lg bg- grid grblack-200 id-rows-7 gap-4 p-4">
                    <div class=" grid grid-rows-2">
                        <div class=" h-10 ">
                           <h1 class=" font-bold lg:text-3xl mg:text-3xl sm:text-2xl  text-1xl ">Date and time</h1> 
                        </div>
                        <div class=" h-10 lg:-mt-4 md:-mt-1 -mt-2 text-gray-600 ">
                            <p class="lg:text-base md:text-base sm:text-base text-sm">Tell event-goers when your even starts and ends so they can make plan to attend.</p>
                        </div>
                    </div>
                    <div class=" lg:-mt-7 md:mt-1 mt-1 grid grid-cols-2 lg:gap-5 md:gap-4 sm:gap-3 gap-1" >
                      <div>
                        <input class=" hover:border-green-600 focus:ring-green-600 focus:border-green-600 lg:p-3 md:p-2 flix items-center w-full lg:text-lg md:text-base lg:placeholder:text-lg md:placeholder:text-base border-2" type="date" placeholder="Event Title" >
                        <p class=" text-gray-600 pt-2 lg:text-base md:text-base text-sm">Event Starts *</p>
                      </div>
                      <div>
                        <input class=" hover:border-green-600 focus:ring-green-600 focus:border-green-600 lg:p-3 md:p-2 flix items-center w-full ld:text-lg md:text-base lg:placeholder:text-lg md:placeholder:text-base  border-2" type="time" placeholder="Event Title" >
                        <p class="  text-gray-600 pt-2 lg:text-base md:text-base text-sm">Start Time *</p>
                      </div>
                    </div>
                    <div class=" lg:-mt-10 md:mt-1  grid grid-cols-2 lg:gap-5 md:gap-4 sm:gap-3 gap-1">
                        <div>
                            <input class=" hover:border-green-600 focus:ring-green-600 focus:border-green-600  lg:p-3 md:p-2 flix items-center w-full lg:text-lg md:text-base lg:placeholder:text-lg md:placeholder:text-base border-2" type="date" placeholder="Event Title" >
                            <p class=" text-gray-600 pt-2 lg:text-base md:text-base text-sm">Event Starts *</p>
                          </div>
                          <div>
                            <input class=" hover:border-green-600 focus:ring-green-600 focus:border-green-600  lg:p-3 md:p-2 flix items-center w-full ld:text-lg md:text-base lg:placeholder:text-lg md:placeholder:text-base  border-2" type="time" placeholder="Event Title" >
                            <p class=" text-gray-600 pt-2 lg:text-base md:text-base text-sm">Start Time *</p>
                          </div>
                    </div>

                    {{-- location --}}
                    <div class=" grid grid-rows-2 lg:-mt-10 md:-mt-2 ">
                        <div class=" h-10 ">
                           <h1 class=" font-bold lg:text-3xl mg:text-3xl sm:text-2xl  text-1xl  ">Location</h1> 
                        </div>
                        <div class=" h-10 lg:-mt-4 md:-mt-1 -mt-2 text-gray-600 ">
                            <p class="lg:text-base md:text-base sm:text-base text-sm">Help people in the area discover your event and let attendees know where to show up. </p>
                        </div>
                    </div>
                    <div class= "grid grid-cols-4 lg:gap-3 md:gap-3 sm:gap-3 gap-6 lg:-mt-4 md:mt-1 mt-4">
                     
                       <div class="">
                        
                            <div class="flex items-center mb-4">
                                <input id="default-radio-1" type="radio" value="" name="default-radio" class=" hover:border-green-600 focus:ring-green-600 focus:border-green-600 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-1" class=" hover:border-green-600 focus:ring-green-600 focus:border-green-600 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Online</label>
                            </div>
                            <div class="flex items-center">
                                <input checked id="default-radio-2" type="radio" value="" name="default-radio" class=" hover:border-green-600 focus:ring-green-600 focus:border-green-600  w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Venue</label>
                            </div>

                       </div>
                       <div class="col-span-3">
                         <input class=" hover:border-green-600 focus:ring-green-600 focus:border-green-600  lg:p-3 md:p-2 flix items-center w-full lg:text-lg md:text-base pl-4 lg:placeholder:text-lg md:placeholder:text-base border-2" type="text" placeholder="Address" >
                       </div>
                     
                    </div>
                   
                    <div class="w-full lg:-mt-6  md:mt-4 mt-4  grid grid-cols-2   ">
                        <div class="flex justify-center  lg:h-1/2">
                            <button class="lg:px-10 py-2 md:px-7 px-7 lg:text-2xl md:text-1xl  lg:h-12 md:h-10 sm:h-8 h-8  sm:px-4  m-2 text-white bg-green-600 transition-colors duration-500 border-solid border-green-600 border-2 rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">Back</button>
                        </div>
                        <div class="flex item-center justify-center lg:h-1/2">
                            <button class="   lg:px-10 py-2 md:px-7 px-7 lg:text-2xl md:text-1xl  lg:h-12 md:h-10 sm:h-8 h-8  sm:px-4  m-2 text-white bg-green-600 transition-colors duration-500 border-solid border-green-600 border-2 rounded-lg focus:ring-green-400 hover:bg-green-700 hover:text-white">Post</button>
                        </div>
                   </div>
                   
                  

                </div>
            </div>
        </div>
    </div>
    @endsection