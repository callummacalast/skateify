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
                                    <h2 class="mr-5 text-lg font-medium truncate">Users</h2>
                                </div>
                                <div class="col-span-12 mt-5">
                                    <div class="grid gap-2 grid-cols-1 lg:grid-cols-1">
                                        <div class="bg-white p-4 shadow-lg rounded-lg">
                                            <h1 class="font-bold text-base">Users</h1>
                                            <div class="mt-4">
                                                <div class="flex flex-col">
                                                    <div class="-my-2 overflow-x-auto">
                                                        <div class="py-2 align-middle inline-block min-w-full">
                                                            <div
                                                                class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">
                                                                <table class="min-w-full divide-y divide-gray-200">
                                                                    <thead>
                                                                        <tr>
                                                                            <th
                                                                                class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                                <div class="flex cursor-pointer">
                                                                                    <span class="mr-2">User
                                                                                        Name</span>
                                                                                </div>
                                                                            </th>
                                                                            <th
                                                                                class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                                <div class="flex cursor-pointer">
                                                                                    <span class="mr-2">Role</span>
                                                                                </div>
                                                                            </th>
                                                                            <th
                                                                                class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                                <div class="flex cursor-pointer">
                                                                                    <span class="mr-2">STATUS</span>
                                                                                </div>
                                                                            </th>
                                                                            <th
                                                                                class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                                <div class="flex cursor-pointer">
                                                                                    <span class="mr-2">ACTION</span>
                                                                                </div>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="bg-white divide-y divide-gray-200">
                                                                        @foreach ($users as $user)
                                                                            <tr>
                                                                                <td
                                                                                    class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                                    <p>{{ $user->name }}</p>
                                                                                    <p class="text-xs text-gray-400">
                                                                                        {{$user->email}}
                                                                                    </p>
                                                                                </td>
                                                                                <td
                                                                                    class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                                    <p>{{ $user->roles->pluck('name')->first() }}</p>
                                                                                </td>
                                                                                <td
                                                                                    class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                                    <div class="flex text-green-500">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            class="w-5 h-5 mr-1"
                                                                                            fill="none"
                                                                                            viewBox="0 0 24 24"
                                                                                            stroke="currentColor">
                                                                                            <path stroke-linecap="round"
                                                                                                stroke-linejoin="round"
                                                                                                stroke-width="2"
                                                                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                                        </svg>
                                                                                        <p>Active</p>
                                                                                    </div>
                                                                                </td>
                                                                                <td
                                                                                    class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                                    <div class="flex space-x-4">
                                                                                        <a href="{{ route('admin.users.edit', $user) }}"
                                                                                            class="text-blue-500 hover:text-blue-600">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                class="w-5 h-5 mr-1"
                                                                                                fill="none"
                                                                                                viewBox="0 0 24 24"
                                                                                                stroke="currentColor">
                                                                                                <path
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    stroke-width="2"
                                                                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                                                            </svg>
                                                                                            <p>Edit</p>
                                                                                        </a>
                                                                                        <a href=""
                                                                                            class="text-red-500 hover:text-red-600">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                class="w-5 h-5 mr-1 ml-3"
                                                                                                fill="none"
                                                                                                viewBox="0 0 24 24"
                                                                                                stroke="currentColor">
                                                                                                <path
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    stroke-width="2"
                                                                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                                            </svg>
                                                                                            <p>Delete</p>
                                                                                        </a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
