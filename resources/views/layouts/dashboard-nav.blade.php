 <!-- Desktop sidebar -->
 <aside class="z-20 flex-shrink-0 hidden w-60 pl-2 overflow-y-auto bg-gray-800 md:block">
    <div>
        <div class="text-white">
            <div class="flex p-2 justify-center bg-gray-800">
                <div class="flex py-3 px-2 items-center">
                    <p class="text-2xl text-green-500 font-semibold">SKATELIFY</p>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="">
                    <img class="hidden h-24 w-24 rounded-full sm:block object-cover mr-2 border-4 border-green-400"
                        src="https://image.flaticon.com/icons/png/512/149/149071.png" alt="">
                    <p class="font-bold text-base  text-gray-400 pt-2 text-center w-24">{{ Auth::user()->name }}</p>
                </div>
            </div>
            <div>
                <ul class="mt-6 leading-10">
                    <li class="relative px-2 py-1 ">
                        <a class="inline-flex items-center w-full text-sm font-semibold text-white transition-colors duration-150 cursor-pointer hover:text-green-500" 
                            href="{{ route('dashboard') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            <span class="ml-4">DASHBOARD</span>
                        </a>
                    </li>
                    <li class="relative px-2 py-1" x-data="{ Open : false  }">
                        <div class="inline-flex items-center justify-between w-full text-base font-semibold transition-colors duration-150 text-gray-500  hover:text-yellow-400 cursor-pointer"
                            x-on:click="Open = !Open">
                            <span
                                class="inline-flex items-center  text-sm font-semibold text-white hover:text-green-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20" />
                                </svg>
                                <span class="ml-4">Users</span>
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" x-show="!Open"
                                class="ml-1  text-white w-4 h-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" style="display: none;">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" x-show="Open"
                                class="ml-1  text-white w-4 h-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" style="display: none;">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>

                        <div x-show.transition="Open" style="display:none;">
                            <ul x-transition:enter="transition-all ease-in-out duration-300"
                                x-transition:enter-start="opacity-25 max-h-0"
                                x-transition:enter-end="opacity-100 max-h-xl"
                                x-transition:leave="transition-all ease-in-out duration-300"
                                x-transition:leave-start="opacity-100 max-h-xl"
                                x-transition:leave-end="opacity-0 max-h-0"
                                class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium  rounded-md shadow-inner  bg-green-400"
                                aria-label="submenu">

                                <li class="px-2 py-1 text-white transition-colors duration-150">
                                    <div class="px-1 hover:text-gray-800 hover:bg-gray-100 rounded-md">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="-1 0 20 20">
                                                <g id="user-5" transform="translate(-3 -2)">
                                                  <path id="secondary" fill="#2ca9bc" d="M9,13a5,5,0,0,0-5,5H4v1s2,2,8,2,8-2,8-2V18h0a5,5,0,0,0-5-5Z"/>
                                                  <path id="primary" d="M15,13a5,5,0,0,1,5,5h0v1s-2,2-8,2-8-2-8-2V18H4a5,5,0,0,1,5-5ZM12,3a5,5,0,1,0,5,5A5,5,0,0,0,12,3Z" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                                </g>
                                              </svg>
                                            <a href="{{ route('admin.users') }}"
                                                class="w-full ml-2  text-sm font-semibold text-white hover:text-gray-800">View All Users</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="px-2 py-1 text-white transition-colors duration-150">
                                    <div class="px-1 hover:text-gray-800 hover:bg-gray-100 rounded-md">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20">
                                                <g id="add-user-left-7" transform="translate(-2 -2)">
                                                  <path id="secondary" fill="#2ca9bc" d="M17.29,13.19a6,6,0,0,1-8.58,0A5,5,0,0,0,5,18v1s2,2,8,2,8-2,8-2V18a5,5,0,0,0-3.71-4.81Z"/>
                                                  <path id="primary" d="M7,5H3M5,3V7" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                                  <path id="primary-2" data-name="primary" d="M7.35,11A6,6,0,1,0,13,3a5.8,5.8,0,0,0-2,.35" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                                  <path id="primary-3" data-name="primary" d="M17.29,13.19A5,5,0,0,1,21,18v1s-2,2-8,2-8-2-8-2V18a5,5,0,0,1,3.71-4.81" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                                </g>
                                              </svg>
                                            <a href="{{ route('admin.users.create') }}"
                                                class="w-full ml-2  text-sm font-semibold text-white hover:text-gray-800">Create New User</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="relative px-2 py-1" x-data="{ Open : false  }">
                        <div class="inline-flex items-center justify-between w-full text-base font-semibold transition-colors duration-150 text-gray-500  hover:text-yellow-400 cursor-pointer"
                            x-on:click="Open = !Open">
                            <span
                                class="inline-flex items-center  text-sm font-semibold text-white hover:text-green-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20" />
                                </svg>
                                <span class="ml-4">Skate Spots</span>
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" x-show="!Open"
                                class="ml-1  text-white w-4 h-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" style="display: none;">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" x-show="Open"
                                class="ml-1  text-white w-4 h-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" style="display: none;">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>

                        <div x-show.transition="Open" style="display:none;">
                            <ul x-transition:enter="transition-all ease-in-out duration-300"
                                x-transition:enter-start="opacity-25 max-h-0"
                                x-transition:enter-end="opacity-100 max-h-xl"
                                x-transition:leave="transition-all ease-in-out duration-300"
                                x-transition:leave-start="opacity-100 max-h-xl"
                                x-transition:leave-end="opacity-0 max-h-0"
                                class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium  rounded-md shadow-inner  bg-green-400"
                                aria-label="submenu">

                                <li class="px-2 py-1 text-white transition-colors duration-150">
                                    <div class="px-1 hover:text-gray-800 hover:bg-gray-100 rounded-md">
                                        <div class="flex items-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 1024 1024" class="icon" version="1.1"><path d="M360.369321 953.683424s-148.049163 100.821274-266.940238-17.659123S-4.312112 737.256493 205.133306 527.811076L686.241749 47.729325s170.225736-59.753546 237.166135 7.186853c0 0 156.05737 180.28733 12.320318 324.02438" fill="#C7DB6F"/><path d="M809.342267 439.227984l69.691936-69.691935 69.712469 69.691935-69.712469 69.691936zM519.055025 148.879141l69.691936-69.691936 69.71247 69.691936-69.71247 69.691936z" fill="#FFFFFF"/><path d="M956.056728 403.581196l-45.790518-45.790518a39.630358 39.630358 0 0 0-55.852111 0l-17.453785 17.453785-188.706214-188.706214-28.952749 28.952749 188.706214 188.706214-13.757689 13.757689a39.630358 39.630358 0 0 0 0 55.852111l45.585179 46.201195a39.630358 39.630358 0 0 0 55.852112 0l60.164222-60.164223a39.630358 39.630358 0 0 0 0.205339-56.262788z m-88.295617 86.036892l-43.531793-43.531793 58.110837-58.110836 43.531792 43.531792z" fill="#141E3E"/><path d="M665.707885 113.232353l-45.790518-44.969163a39.630358 39.630358 0 0 0-55.852111 0l-60.164223 60.164222a39.630358 39.630358 0 0 0 0 55.852112l45.790518 45.790517a39.630358 39.630358 0 0 0 55.852111 0l60.164223-60.164222a39.630358 39.630358 0 0 0 0-56.673466z m-88.295617 86.036892L533.880475 155.737452l58.110837-58.110836 43.531792 43.531792z" fill="#141E3E"/><path d="M635.728443 126.374026l24.22996-24.22996c67.145737-67.145737 196.714421-87.474262 269.814979-14.579044l6.160159 6.160159c73.100557 73.100557 52.566693 202.669242-14.579044 269.814979l-24.22996 24.22996 28.952749 29.568765 24.22996-24.22996c91.170358-91.170358 97.946533-244.352987 14.579044-328.541831l-6.16016-6.160159c-83.36749-83.36749-236.550118-76.591314-328.541831 14.579043l-24.22996 24.22996zM830.389478 454.50518L363.4494 921.445257c-67.145737 67.145737-196.714421 87.474262-269.814978 14.579044l-6.16016-6.16016c-73.100557-73.100557-52.566693-202.669242 14.579044-269.814978L568.993383 193.109085 540.040635 164.156337 73.100557 630.891075c-91.170358 91.170358-97.946533 244.352987-14.579043 328.541831l6.160159 6.160159c83.36749 83.36749 236.550118 76.591314 328.541831-14.579043L860.36892 483.457928z" fill="#19264A"/><path d="M373.469926 874.812851l69.691936-69.691936 69.691936 69.691936-69.691936 69.691936zM83.182685 584.464008l69.691936-69.691936 69.691936 69.691936-69.691936 69.691935z" fill="#FFFFFF"/><path d="M520.328125 839.10446l-45.790518-45.790517a39.630358 39.630358 0 0 0-55.852111 0l-17.453785 17.453785-188.706214-188.090199-29.774104 28.542072 188.706215 188.706214-13.75769 13.757689a39.630358 39.630358 0 0 0 0 55.852111l45.790518 45.790518a39.630358 39.630358 0 0 0 55.852111 0l60.164223-60.164223a39.630358 39.630358 0 0 0 0.821355-56.05745z m-88.295617 86.036892l-43.94247-43.531792 58.110836-58.110837 43.531793 43.531793z" fill="#141E3E"/><path d="M229.979282 548.755617l-45.790518-45.790517a39.630358 39.630358 0 0 0-55.852111 0l-60.164223 60.164222a39.630358 39.630358 0 0 0 0 55.852112l45.790518 45.790517a39.630358 39.630358 0 0 0 55.852111 0l60.164223-60.164222a39.630358 39.630358 0 0 0 0-55.852112z m-88.295617 86.036892l-43.531793-43.531792 58.110836-58.110837 43.531793 43.531793z" fill="#141E3E"/></svg>
                                            <a href="{{ route('admin.skate-spots') }}"
                                                class="w-full ml-2  text-sm font-semibold text-white hover:text-gray-800">View All Skate Spots</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="px-2 py-1 text-white transition-colors duration-150">
                                    <div class="px-1 hover:text-gray-800 hover:bg-gray-100 rounded-md">
                                        <div class="flex items-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 1024 1024" class="icon" version="1.1"><path d="M360.369321 953.683424s-148.049163 100.821274-266.940238-17.659123S-4.312112 737.256493 205.133306 527.811076L686.241749 47.729325s170.225736-59.753546 237.166135 7.186853c0 0 156.05737 180.28733 12.320318 324.02438" fill="#C7DB6F"/><path d="M809.342267 439.227984l69.691936-69.691935 69.712469 69.691935-69.712469 69.691936zM519.055025 148.879141l69.691936-69.691936 69.71247 69.691936-69.71247 69.691936z" fill="#FFFFFF"/><path d="M956.056728 403.581196l-45.790518-45.790518a39.630358 39.630358 0 0 0-55.852111 0l-17.453785 17.453785-188.706214-188.706214-28.952749 28.952749 188.706214 188.706214-13.757689 13.757689a39.630358 39.630358 0 0 0 0 55.852111l45.585179 46.201195a39.630358 39.630358 0 0 0 55.852112 0l60.164222-60.164223a39.630358 39.630358 0 0 0 0.205339-56.262788z m-88.295617 86.036892l-43.531793-43.531793 58.110837-58.110836 43.531792 43.531792z" fill="#141E3E"/><path d="M665.707885 113.232353l-45.790518-44.969163a39.630358 39.630358 0 0 0-55.852111 0l-60.164223 60.164222a39.630358 39.630358 0 0 0 0 55.852112l45.790518 45.790517a39.630358 39.630358 0 0 0 55.852111 0l60.164223-60.164222a39.630358 39.630358 0 0 0 0-56.673466z m-88.295617 86.036892L533.880475 155.737452l58.110837-58.110836 43.531792 43.531792z" fill="#141E3E"/><path d="M635.728443 126.374026l24.22996-24.22996c67.145737-67.145737 196.714421-87.474262 269.814979-14.579044l6.160159 6.160159c73.100557 73.100557 52.566693 202.669242-14.579044 269.814979l-24.22996 24.22996 28.952749 29.568765 24.22996-24.22996c91.170358-91.170358 97.946533-244.352987 14.579044-328.541831l-6.16016-6.160159c-83.36749-83.36749-236.550118-76.591314-328.541831 14.579043l-24.22996 24.22996zM830.389478 454.50518L363.4494 921.445257c-67.145737 67.145737-196.714421 87.474262-269.814978 14.579044l-6.16016-6.16016c-73.100557-73.100557-52.566693-202.669242 14.579044-269.814978L568.993383 193.109085 540.040635 164.156337 73.100557 630.891075c-91.170358 91.170358-97.946533 244.352987-14.579043 328.541831l6.160159 6.160159c83.36749 83.36749 236.550118 76.591314 328.541831-14.579043L860.36892 483.457928z" fill="#19264A"/><path d="M373.469926 874.812851l69.691936-69.691936 69.691936 69.691936-69.691936 69.691936zM83.182685 584.464008l69.691936-69.691936 69.691936 69.691936-69.691936 69.691935z" fill="#FFFFFF"/><path d="M520.328125 839.10446l-45.790518-45.790517a39.630358 39.630358 0 0 0-55.852111 0l-17.453785 17.453785-188.706214-188.090199-29.774104 28.542072 188.706215 188.706214-13.75769 13.757689a39.630358 39.630358 0 0 0 0 55.852111l45.790518 45.790518a39.630358 39.630358 0 0 0 55.852111 0l60.164223-60.164223a39.630358 39.630358 0 0 0 0.821355-56.05745z m-88.295617 86.036892l-43.94247-43.531792 58.110836-58.110837 43.531793 43.531793z" fill="#141E3E"/><path d="M229.979282 548.755617l-45.790518-45.790517a39.630358 39.630358 0 0 0-55.852111 0l-60.164223 60.164222a39.630358 39.630358 0 0 0 0 55.852112l45.790518 45.790517a39.630358 39.630358 0 0 0 55.852111 0l60.164223-60.164222a39.630358 39.630358 0 0 0 0-55.852112z m-88.295617 86.036892l-43.531793-43.531792 58.110836-58.110837 43.531793 43.531793z" fill="#141E3E"/></svg>
                                            <a href="{{ route('admin.skate-spots.create') }}"
                                                class="w-full ml-2  text-sm font-semibold text-white hover:text-gray-800">Add Skate Spots</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="relative px-2 py-1" x-data="{ Open : false  }">
                        <div class="inline-flex items-center justify-between w-full text-base font-semibold transition-colors duration-150 text-gray-500  hover:text-yellow-400 cursor-pointer"
                            x-on:click="Open = !Open">
                            <span
                                class="inline-flex items-center  text-sm font-semibold text-white hover:text-green-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20" />
                                </svg>
                                <span class="ml-4">Contact Messages</span>
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" x-show="!Open"
                                class="ml-1  text-white w-4 h-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" style="display: none;">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" x-show="Open"
                                class="ml-1  text-white w-4 h-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" style="display: none;">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>

                        <div x-show.transition="Open" style="display:none;">
                            <ul x-transition:enter="transition-all ease-in-out duration-300"
                                x-transition:enter-start="opacity-25 max-h-0"
                                x-transition:enter-end="opacity-100 max-h-xl"
                                x-transition:leave="transition-all ease-in-out duration-300"
                                x-transition:leave-start="opacity-100 max-h-xl"
                                x-transition:leave-end="opacity-0 max-h-0"
                                class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium  rounded-md shadow-inner  bg-green-400"
                                aria-label="submenu">

                                <li class="px-2 py-1 text-white transition-colors duration-150">
                                    <div class="px-1 hover:text-gray-800 hover:bg-gray-100 rounded-md">
                                        <div class="flex items-center">
<x-svgs.skateboard class="w-5 h-5" />
                                            <a href="{{ route('admin.skate-spots') }}"
                                                class="w-full ml-2  text-sm font-semibold text-white hover:text-gray-800">View All Messages</a>
                                        </div>
                                    </div>
                                </li>
                       
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>

<!-- Mobile sidebar -->
<!-- Backdrop -->
<div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>

<aside
    class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto  bg-gray-900 dark:bg-gray-800 md:hidden"
    x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
    @keydown.escape="closeSideMenu">
    <div>
        <div class="text-white">
            <div class="flex p-2  bg-gray-800">
                <div class="flex py-3 px-2 items-center">
                    <p class="text-2xl text-green-500 font-semibold">SA</p> <p class="ml-2 font-semibold italic">
                    DASHBOARD</p>
                </div>
            </div>
            <div>
                <ul class="mt-6 leading-10">
                    <li class="relative px-2 py-1 ">
                        <a class="inline-flex items-center w-full text-sm font-semibold text-white transition-colors duration-150 cursor-pointer hover:text-green-500"
                            href="{{ route('dashboard') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            <span class="ml-4">DASHBOARD</span>
                        </a>
                    </li>
                    <li class="relative px-2 py-1" x-data="{ Open : false  }">
                        <div class="inline-flex items-center justify-between w-full text-base font-semibold transition-colors duration-150 text-gray-500  hover:text-yellow-400 cursor-pointer"
                            x-on:click="Open = !Open">
                            <span
                                class="inline-flex items-center  text-sm font-semibold text-white hover:text-green-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20" />
                                </svg>
                                <span class="ml-4">Users</span>
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" x-show="!Open"
                                class="ml-1  text-white w-4 h-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" style="display: none;">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" x-show="Open"
                                class="ml-1  text-white w-4 h-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" style="display: none;">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>

                        <div x-show.transition="Open" style="display:none;">
                            <ul x-transition:enter="transition-all ease-in-out duration-300"
                                x-transition:enter-start="opacity-25 max-h-0"
                                x-transition:enter-end="opacity-100 max-h-xl"
                                x-transition:leave="transition-all ease-in-out duration-300"
                                x-transition:leave-start="opacity-100 max-h-xl"
                                x-transition:leave-end="opacity-0 max-h-0"
                                class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium  rounded-md shadow-inner  bg-green-400"
                                aria-label="submenu">

                                <li class="px-2 py-1 text-white transition-colors duration-150">
                                    <div class="px-1 hover:text-gray-800 hover:bg-gray-100 rounded-md">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                            </svg>
                                            <a href="#"
                                                class="w-full ml-2  text-sm font-semibold text-white hover:text-gray-800">Item
                                                1</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="px-2 py-1 text-white transition-colors duration-150">
                                    <div class="px-1 hover:text-gray-800 hover:bg-gray-100 rounded-md">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                            </svg>
                                            <a href="#"
                                                class="w-full ml-2  text-sm font-semibold text-white hover:text-gray-800">Item
                                                1</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>
