<x-app-layout>
    <div class="flex h-screen bg-gray-800 " :class="{ 'overflow-hidden': isSideMenuOpen }">
        @include('layouts.dashboard-nav')
        <div class="flex flex-col flex-1 w-full overflow-y-auto">
            <x-admin-dashboard.nav-header />
            <main class="">

                <div class="grid mb-4 pb-10 px-8 mx-4 rounded-3xl bg-gray-100 border-4 border-green-400">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="grid grid-cols-12 col-span-12 gap-6 xxl:col-span-9">
                            <div class="col-span-12 mt-8">
                                <div class="flex items-center h-10 intro-y">
                                    <h2 class="mr-5 text-lg font-medium truncate">Create Skate Spot</h2>
                                </div>
                                <section class=" p-6 mx-auto bg-indigo-600 rounded-md shadow-md dark:bg-gray-800 mt-5">
                                    <h1 class="text-xl font-bold text-white capitalize dark:text-white">Skate Spot
                                    </h1>
                                    <form action="{{ route('admin.skate-spots.store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                                            <div>
                                                <label class="text-white dark:text-gray-200"
                                                    for="title">Title</label>
                                                <input id="title" type="text" name="title" value=""
                                                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                                @if ($errors->has('title'))
                                                    <div class="error text-red-400 text-sm">
                                                        {{ $errors->first('title') }}</div>
                                                @endif
                                            </div>

                                            <div>
                                                <label class="text-white dark:text-gray-200" for="lat">Lat</label>
                                                <input id="lat" type="text" value="" name="lat"
                                                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                                @if ($errors->has('lat'))
                                                    <div class="error text-red-400 text-sm">{{ $errors->first('lat') }}
                                                    </div>
                                                @endif
                                            </div>

                                            <div>
                                                <label class="text-white dark:text-gray-200" for="lng">Lng</label>
                                                <input id="lng" type="text" name="lng" value=""
                                                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                                @if ($errors->has('lng'))
                                                    <div class="error text-red-400 text-sm">{{ $errors->first('lng') }}
                                                    </div>
                                                @endif
                                            </div>

                                            <div>
                                                <label class="text-white dark:text-gray-200"
                                                    for="description">Description</label>
                                                <input id="description" type="text" name="description"
                                                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                                @if ($errors->has('description'))
                                                    <div class="error text-red-400 text-sm">
                                                        {{ $errors->first('descriptions') }}</div>
                                                @endif
                                            </div>
                                            <div>
                                                <label class="text-white dark:text-gray-200"
                                                    for="features">Color</label>
                                                <input id="features" type="text" name="features"
                                                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                            </div>
                                            <div>
                                                <label class="text-white dark:text-gray-200"
                                                    for="passwordConfirmation">Select</label>
                                                <select
                                                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                                    <option>Surabaya</option>
                                                    <option>Jakarta</option>
                                                    <option>Tangerang</option>
                                                    <option>Bandung</option>
                                                </select>
                                            </div>
                                            <div>
                                                <label class="text-white dark:text-gray-200"
                                                    for="passwordConfirmation">Range</label>
                                                <input id="range" type="range"
                                                    class="block w-full py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                            </div>
                                            <div>
                                                <label class="text-white dark:text-gray-200"
                                                    for="passwordConfirmation">Date</label>
                                                <input id="date" type="date"
                                                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                            </div>
                                            <div>
                                                <label class="text-white dark:text-gray-200"
                                                    for="passwordConfirmation">Text Area</label>
                                                <textarea id="textarea" type="textarea"
                                                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></textarea>
                                            </div>
                                            <div>
                                                <label class="block text-sm font-medium text-white">
                                                    Image
                                                </label>
                                                <div
                                                    class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                                    <div class="space-y-1 text-center">
                                                        <svg class="mx-auto h-12 w-12 text-white" stroke="currentColor"
                                                            fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                            <path
                                                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                                stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                        <div class="flex text-sm text-gray-600">
                                                            <label for="file-upload"
                                                                class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                                <span class="">Upload a file</span>
                                                                <input id="file-upload" name="file-upload"
                                                                    type="file" class="sr-only">
                                                            </label>
                                                            <p class="pl-1 text-white">or drag and drop</p>
                                                        </div>
                                                        <p class="text-xs text-white">
                                                            PNG, JPG, GIF up to 10MB
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- @if ($user->roles->pluck('name')->first() == 'skater')
                                                <div>
                                                    <label class="text-white dark:text-gray-200"
                                                        for="username">Stance</label>
                                                    <input id="username" type="text" value=""
                                                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                                </div>

                                                <div>
                                                    <label class="text-white dark:text-gray-200"
                                                        for="emailAddress">Skill Level</label>
                                                    <input id="emailAddress" type="email" value=""
                                                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                                </div>
                                                <div>
                                                    <label class="text-white dark:text-gray-200"
                                                        for="username">Deck Size</label>
                                                    <input id="username" type="text" value=""
                                                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                                </div>

                                                <div>
                                                    <label class="text-white dark:text-gray-200"
                                                        for="emailAddress">Location</label>
                                                    <input id="emailAddress" type="email"
                                                        value=""
                                                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                                </div>
                                                <div>
                                                    <label class="text-white dark:text-gray-200"
                                                        for="emailAddress">DOB</label>
                                                    <input id="emailAddress" type="email"
                                                        value=""
                                                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                                </div>
                                                <div>
                                                    <label class="text-white dark:text-gray-200"
                                                        for="emailAddress">Style</label>
                                                    <input id="emailAddress" type="email"
                                                        value=""
                                                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                                </div>
                                                <div>
                                                    <label class="text-white dark:text-gray-200"
                                                        for="emailAddress">Type</label>
                                                    <input id="emailAddress" type="email"
                                                        value=""
                                                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                                </div>
                                            @endif --}}
                                        </div>

                                        <div class="flex justify-end mt-6">
                                            <button type="submit"
                                                class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-pink-500 rounded-md hover:bg-pink-700 focus:outline-none focus:bg-gray-600">Create</button>
                                        </div>
                                    </form>
                                </section>

                            </div>
                        </div>
                    </div>
            </main>
        </div>
    </div>
    <script>
        function data() {

            return {

                isSideMenuOpen: false,
                toggleSideMenu() {
                    this.isSideMenuOpen = !this.isSideMenuOpen
                },
                closeSideMenu() {
                    this.isSideMenuOpen = false
                },
                isNotificationsMenuOpen: false,
                toggleNotificationsMenu() {
                    this.isNotificationsMenuOpen = !this.isNotificationsMenuOpen
                },
                closeNotificationsMenu() {
                    this.isNotificationsMenuOpen = false
                },
                isProfileMenuOpen: false,
                toggleProfileMenu() {
                    this.isProfileMenuOpen = !this.isProfileMenuOpen
                },
                closeProfileMenu() {
                    this.isProfileMenuOpen = false
                },
                isPagesMenuOpen: false,
                togglePagesMenu() {
                    this.isPagesMenuOpen = !this.isPagesMenuOpen
                },

            }
        }
    </script>

</x-app-layout>
