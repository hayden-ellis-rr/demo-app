<div x-data="{ openSidebar: false }" x-on:click.away="openSidebar = false" class="fixed top-16 w-64 h-full text-white">
    <button type="button" x-on:click="openSidebar = !openSidebar" class="absolute left-2 top-2 p-2 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="rgb(240, 240, 240)" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
    </button>

    <aside x-cloak x-transition:enter="transition-transform transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition-transform transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" 
        :class="{'block': openSidebar, 'hidden': !openSidebar}" 
        class="h-full bg-gray-200 z-40 lg:relative lg:block lg:translate-x-0" aria-label="Sidebar"
        >
        <div class="px-3 py-4 overflow-y-auto lg:border-r border-gray-200">
            <ul class="space-y-4 font-medium">
                <li>
                    <x-side-nav-link :active="request()->routeIs('home')" :href="route('home')">
                        <svg class="w-5 h-5 transition duration-75 dark:text-gray-400 group-hover:text-gray-700 dark:group-hover:text-gray-700" aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M543.8 287.6c17 0 32-14 32-32.1c1-9-3-17-11-24L512 185l0-121c0-17.7-14.3-32-32-32l-32 0c-17.7 0-32 14.3-32 32l0 36.7L309.5 7c-6-5-14-7-21-7s-15 1-22 8L10 231.5c-7 7-10 15-10 24c0 18 14 32.1 32 32.1l32 0 0 69.7c-.1 .9-.1 1.8-.1 2.8l0 112c0 22.1 17.9 40 40 40l16 0c1.2 0 2.4-.1 3.6-.2c1.5 .1 3 .2 4.5 .2l31.9 0 24 0c22.1 0 40-17.9 40-40l0-24 0-64c0-17.7 14.3-32 32-32l64 0c17.7 0 32 14.3 32 32l0 64 0 24c0 22.1 17.9 40 40 40l24 0 32.5 0c1.4 0 2.8 0 4.2-.1c1.1 .1 2.2 .1 3.3 .1l16 0c22.1 0 40-17.9 40-40l0-16.2c.3-2.6 .5-5.3 .5-8.1l-.7-160.2 32 0z" />
                        </svg>
                        <span class="ms-3">Home</span>
                    </x-side-nav-link>
                </li>

                <!-- Marketing Dropdown -->
                <x-side-dropdown :active="request()->routeIs('*marketing*')">
                    <x-slot name="trigger">
                        <button type="button" class="flex items-center w-full p-2 text-base text-gray-700 transition duration-75 rounded-lg group hover:text-gray-700 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-700 dark:text-gray-400 dark:group-hover:text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64L0 400c0 44.2 35.8 80 80 80l400 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L80 416c-8.8 0-16-7.2-16-16L64 64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z" />
                            </svg>
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap"> Marketing</span>
                            <svg x-bind:class="{ 'rotate-180': open }" class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-side-dropdown-link :href="route('marketing.summary')" :active="request()->routeIs('marketing.summary')"  wire:navigate>
                            {{ __('Summary') }}
                        </x-side-dropdown-link>
                
                        <x-side-dropdown-link  :active="request()->routeIs('marketing.digital')"  wire:navigate>
                            {{ __('Digital') }}
                        </x-side-dropdown-link>
                    
                        <x-side-dropdown-link  :active="request()->routeIs('marketing.assets')"  wire:navigate>
                            {{ __('Assets') }}
                        </x-side-dropdown-link>
                    
                        <x-side-dropdown-link  :active="request()->routeIs('marketing.call-form-detail')"  wire:navigate>
                            {{ __('Call & Form Detail') }}
                        </x-side-dropdown-link>
                    
                    </x-slot>
                </x-side-dropdown>

                <!-- Call Disposition Dropdown -->
                <x-side-dropdown :active="request()->routeIs('*disposition*')">
                    <x-slot name="trigger">
                        <button x-on:click=" open = !" type="button" class="flex items-center w-full p-2 text-base text-gray-700 transition duration-75 rounded-lg group hover:text-gray-700 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-700 dark:text-gray-400 dark:group-hover:text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                            </svg>
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap"> Call Disposition</span>
                            <svg x-bind:class="{ 'rotate-180': open }" class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-side-dropdown-link :href="route('disposition.summary')" :active="request()->routeIs('disposition.summary')" wire:navigate>
                            {{ __('Summary') }}
                        </x-side-dropdown-link>
                    
                        <x-side-dropdown-link  :active="request()->routeIs('disposition.dashboard')" wire:navigate>
                            {{ __('Dashboard') }}
                        </x-side-dropdown-link>
                
                        <x-side-dropdown-link  :active="request()->routeIs('disposition.analysis')" wire:navigate>
                            {{ __('Disposition Analysis') }}
                        </x-side-dropdown-link>
                    
                        <x-side-dropdown-link  :active="request()->routeIs('disposition.specifics')" wire:navigate>
                            {{ __('Call Specifics') }}
                        </x-side-dropdown-link>
                    
                        <x-side-dropdown-link  :active="request()->routeIs('disposition.recruiter')" wire:navigate>
                            {{ __('Recruiter Breakdown') }}
                        </x-side-dropdown-link>
                    </x-slot>
                </x-side-dropdown>



                <!-- Lead Management Dropdown -->
                <x-side-dropdown :active="request()->routeIs('*lead-management*')">
                    <x-slot name="trigger">
                        <button x-on:click=" open = !" type="button" class="flex items-center w-full p-2 text-base text-gray-700 transition duration-75 rounded-lg group hover:text-gray-700 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-700 dark:text-gray-400 dark:group-hover:text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path d="M256 96c38.4 0 73.7 13.5 101.3 36.1l-32.6 32.6c-4.6 4.6-5.9 11.5-3.5 17.4s8.3 9.9 14.8 9.9l112 0c8.8 0 16-7.2 16-16l0-112c0-6.5-3.9-12.3-9.9-14.8s-12.9-1.1-17.4 3.5l-34 34C363.4 52.6 312.1 32 256 32c-10.9 0-21.5 .8-32 2.3l0 64.9c10.3-2.1 21-3.2 32-3.2zM132.1 154.7l32.6 32.6c4.6 4.6 11.5 5.9 17.4 3.5s9.9-8.3 9.9-14.8l0-112c0-8.8-7.2-16-16-16L64 48c-6.5 0-12.3 3.9-14.8 9.9s-1.1 12.9 3.5 17.4l34 34C52.6 148.6 32 199.9 32 256c0 10.9 .8 21.5 2.3 32l64.9 0c-2.1-10.3-3.2-21-3.2-32c0-38.4 13.5-73.7 36.1-101.3zM477.7 224l-64.9 0c2.1 10.3 3.2 21 3.2 32c0 38.4-13.5 73.7-36.1 101.3l-32.6-32.6c-4.6-4.6-11.5-5.9-17.4-3.5s-9.9 8.3-9.9 14.8l0 112c0 8.8 7.2 16 16 16l112 0c6.5 0 12.3-3.9 14.8-9.9s1.1-12.9-3.5-17.4l-34-34C459.4 363.4 480 312.1 480 256c0-10.9-.8-21.5-2.3-32zM256 416c-38.4 0-73.7-13.5-101.3-36.1l32.6-32.6c4.6-4.6 5.9-11.5 3.5-17.4s-8.3-9.9-14.8-9.9L64 320c-8.8 0-16 7.2-16 16l0 112c0 6.5 3.9 12.3 9.9 14.8s12.9 1.1 17.4-3.5l34-34C148.6 459.4 199.9 480 256 480c10.9 0 21.5-.8 32-2.3l0-64.9c-10.3 2.1-21 3.2-32 3.2z" />
                            </svg>
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap"> Lead Management </span>
                            <svg x-bind:class="{ 'rotate-180': open }" class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-side-dropdown-link :href="route('lead-management.profiles')" :active="request()->routeIs('lead-management.profiles')" wire:navigate>
                            {{ __('Profiles') }}
                        </x-side-dropdown-link>
                        <x-side-dropdown-link :href="route('lead-management.jobs.index')" :active="request()->routeIs('lead-management.jobs.index')" wire:navigate>
                            {{ __('Jobs') }}
                        </x-side-dropdown-link>
                        <x-side-dropdown-link :href="route('lead-management.reporting')" :active="request()->routeIs('lead-management.reporting')" wire:navigate>
                            {{ __('Reporting') }}
                        </x-side-dropdown-link>
                    </x-slot>
                </x-side-dropdown>
                <!--                 <li>
                    <a href="#" class="flex items-center p-2 text-gray-700 rounded-lg hover:text-gray-700 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-700 dark:group-hover:text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Inbox</span>
                        <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                    </a>
                </li> -->
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-700 rounded-lg hover:text-gray-700 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-700 dark:group-hover:text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
                    </a>
                </li>
                <!--                 <li>
                    <a href="#" class="flex items-center p-2 text-gray-700 rounded-lg hover:text-gray-700 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-700 dark:group-hover:text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Sign In</span>
                    </a>
                </li> -->
            </ul>
        </div>
    </aside>


</div>