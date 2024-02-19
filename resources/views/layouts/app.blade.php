<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chrih-daba</title>

    {{-- font Lora --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Shrikhand&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Shrikhand&display=swap" rel="stylesheet">

    {{-- Css Tailwind --}}
    @vite('resources/css/app.css')

    {{-- Alpine JS --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.5/dist/cdn.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"
        integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body x-data="{ open: false }" @keydown.window.escape="open = false" class="bg-white">

    {{-- Menu Mobile --}}
    <div x-show="open" class="relative z-40 lg:hidden"
        x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." x-ref="dialog"
        aria-modal="true">

        <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            x-description="Off-canvas menu backdrop, show/hide based on off-canvas menu state."
            class="fixed inset-0 bg-black bg-opacity-25"></div>


        <div class="fixed inset-0 z-40 flex">

            <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform"
                x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                x-transition:leave="transition ease-in-out duration-300 transform"
                x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
                x-description="Off-canvas menu, show/hide based on off-canvas menu state."
                class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl"
                @click.away="open = false">
                <div class="flex px-4 pt-5 pb-2">
                    <button type="button"
                        class="-m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400"
                        @click="open = false">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" x-description="Heroicon name: outline/x-mark"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <!-- Links -->
                <div class="mt-2" x-data="Components.tabs()" @tab-click.window="onTabClick"
                    @tab-keydown.window="onTabKeydown">
                    <div class="border-b border-gray-200">
                        <div class="-mb-px flex space-x-8 px-4" aria-orientation="horizontal" role="tablist">

                            <button id="tabs-1-tab-1"
                                class="text-gray-900 border-transparent flex-1 whitespace-nowrap border-b-2 py-4 px-1 text-base font-medium"
                                x-state:on="Selected" x-state:off="Not Selected"
                                :class="{
                                    'text-indigo-600 border-indigo-600': selected,
                                    'text-gray-900 border-transparent': !(
                                        selected)
                                }"
                                x-data="Components.tab(0)" aria-controls="tabs-1-panel-1" role="tab"
                                x-init="init()" @click="onClick" @keydown="onKeydown"
                                @tab-select.window="onTabSelect" :tabindex="selected ? 0 : -1"
                                :aria-selected="selected ? 'true' : 'false'" type="button">Women</button>

                            <button id="tabs-1-tab-2"
                                class="text-gray-900 border-transparent flex-1 whitespace-nowrap border-b-2 py-4 px-1 text-base font-medium"
                                x-state:on="Selected" x-state:off="Not Selected"
                                :class="{
                                    'text-indigo-600 border-indigo-600': selected,
                                    'text-gray-900 border-transparent': !(
                                        selected)
                                }"
                                x-data="Components.tab(0)" aria-controls="tabs-1-panel-2" role="tab"
                                x-init="init()" @click="onClick" @keydown="onKeydown"
                                @tab-select.window="onTabSelect" :tabindex="selected ? 0 : -1"
                                :aria-selected="selected ? 'true' : 'false'" type="button">Men</button>

                        </div>
                    </div>


                    <div id="tabs-1-panel-1" class="space-y-12 px-4 py-6"
                        x-description="'Women' tab panel, show/hide based on tab state." x-data="Components.tabPanel(0)"
                        aria-labelledby="tabs-1-tab-1" x-init="init()" x-show="selected"
                        @tab-select.window="onTabSelect" role="tabpanel" tabindex="0">
                        <div class="grid grid-cols-2 gap-x-4 gap-y-10">

                            <div class="group relative">
                                <div
                                    class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg"
                                        alt="Models sitting back to back, wearing Basic Tee in black and bone."
                                        class="object-cover object-center">
                                </div>
                                <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                    New Arrivals
                                </a>
                                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                            </div>

                            <div class="group relative">
                                <div
                                    class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg"
                                        alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees."
                                        class="object-cover object-center">
                                </div>
                                <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                    Basic Tees
                                </a>
                                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                            </div>

                            <div class="group relative">
                                <div
                                    class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-03.jpg"
                                        alt="Model wearing minimalist watch with black wristband and white watch face."
                                        class="object-cover object-center">
                                </div>
                                <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                    Accessories
                                </a>
                                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                            </div>

                            <div class="group relative">
                                <div
                                    class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-04.jpg"
                                        alt="Model opening tan leather long wallet with credit card pockets and cash pouch."
                                        class="object-cover object-center">
                                </div>
                                <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                    Carry
                                </a>
                                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                            </div>

                        </div>
                    </div>

                    <div id="tabs-1-panel-2" class="space-y-12 px-4 py-6"
                        x-description="'Men' tab panel, show/hide based on tab state." x-data="Components.tabPanel(0)"
                        aria-labelledby="tabs-1-tab-2" x-init="init()" x-show="selected"
                        @tab-select.window="onTabSelect" role="tabpanel" tabindex="0">
                        <div class="grid grid-cols-2 gap-x-4 gap-y-10">

                            <div class="group relative">
                                <div
                                    class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-01.jpg"
                                        alt="Hats and sweaters on wood shelves next to various colors of t-shirts on hangers."
                                        class="object-cover object-center">
                                </div>
                                <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                    New Arrivals
                                </a>
                                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                            </div>

                            <div class="group relative">
                                <div
                                    class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-02.jpg"
                                        alt="Model wearing light heather gray t-shirt."
                                        class="object-cover object-center">
                                </div>
                                <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                    Basic Tees
                                </a>
                                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                            </div>

                            <div class="group relative">
                                <div
                                    class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-03.jpg"
                                        alt="Grey 6-panel baseball hat with black brim, black mountain graphic on front, and light heather gray body."
                                        class="object-cover object-center">
                                </div>
                                <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                    Accessories
                                </a>
                                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                            </div>

                            <div class="group relative">
                                <div
                                    class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-04.jpg"
                                        alt="Model putting folded cash into slim card holder olive leather wallet with hand stitching."
                                        class="object-cover object-center">
                                </div>
                                <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                    Carry
                                </a>
                                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                            </div>

                        </div>
                    </div>


                </div>

                <div class="space-y-6 border-t border-gray-200 py-6 px-4">

                    <div class="flow-root">
                        <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Company</a>
                    </div>

                    <div class="flow-root">
                        <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Stores</a>
                    </div>

                </div>

                <div class="space-y-6 border-t border-gray-200 py-6 px-4">
                    <div class="flow-root">
                        <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Create an account</a>
                    </div>
                    <div class="flow-root">
                        <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Sign in</a>
                    </div>
                </div>

                <div class="space-y-6 border-t border-gray-200 py-6 px-4">
                    <!-- Currency selector -->
                    <form>
                        <div class="inline-block">
                            <label for="mobile-currency" class="sr-only">Currency</label>
                            <div
                                class="group relative -ml-2 rounded-md border-transparent focus-within:ring-2 focus-within:ring-white">
                                <select id="mobile-currency" name="currency"
                                    class="flex items-center rounded-md border-transparent bg-none py-0.5 pl-2 pr-5 text-sm font-medium text-gray-700 focus:border-transparent focus:outline-none focus:ring-0 group-hover:text-gray-800">

                                    <option>CAD</option>

                                    <option>USD</option>

                                    <option>AUD</option>

                                    <option>EUR</option>

                                    <option>GBP</option>

                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center">
                                    <svg class="h-5 w-5 text-gray-500"
                                        x-description="Heroicon name: mini/chevron-down"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!-- Navigation -->
    <header class=" w-full top-0 relative z-10">
        <nav aria-label="Top">
            <!-- Top navigation -->
            <div class="bg-white">
                <div class="mx-auto flex h-10 max-w-7xl items-center justify-between px-4 p-7 sm:px-6 lg:px-8">
                    <!-- Currency selector -->
                    <form>
                        <div>
                            <label for="desktop-currency" class="sr-only">Currency</label>
                            <div class="group relative -ml-2 rounded-full outline-none border-none ">
                                <select id="desktop-currency" name="currency"
                                    class="flex items-center rounded-full outline-none border-transparent bg-transparent bg-none py-0.5 pl-2 pr-5 text-sm font-medium text-slate-900">

                                    <option>CAD</option>

                                    <option>USD</option>

                                    <option>AUD</option>

                                    <option>EUR</option>

                                    <option>GBP</option>

                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center">
                                    <svg class="h-5 w-5 text-slate-900"
                                        x-description="Heroicon name: mini/chevron-down"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </form>
                    @if (Route::has('login'))
                    <div class="flex items-center">
                    @auth
                    <div x-data="{ isOpen: true }" class="relative inline-block ">
    <!-- Dropdown toggle button -->
    <button @click="isOpen = !isOpen" class="relative z-10 flex items-center p-2 text-sm text-gray-600 bg-white border border-transparent rounded-md focus:border-blue-500 focus:ring-opacity-40 dark:focus:ring-opacity-40 focus:ring-blue-300 dark:focus:ring-blue-400 focus:ring dark:text-white dark:bg-gray-800 focus:outline-none">
        <span class="mx-1">@if(Auth::check())
                    <div >Welcome👋, <span class="text-rose-500 font-medium text-sm font-readex">{{ Auth::user()->name }}!</span></div>
                @endif</span>
        <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 15.713L18.01 9.70299L16.597 8.28799L12 12.888L7.40399 8.28799L5.98999 9.70199L12 15.713Z" fill="currentColor"></path>
        </svg>
    </button>

    <!-- Dropdown menu -->
    <div x-show="isOpen"
        @click.away="isOpen = false"
        x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-100"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
        class="absolute right-0 z-20 w-56 py-2 mt-2 origin-top-right bg-white rounded-md shadow-xl dark:bg-gray-800"
    >

        <a href="#" class="flex items-center p-3 -mt-2 text-sm text-gray-600 transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
            <img class="flex-shrink-0 object-cover mx-1 rounded-full w-9 h-9" src="https://images.unsplash.com/photo-1523779917675-b6ed3a42a561?ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8d29tYW4lMjBibHVlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=face&w=500&q=200" alt="jane avatar">
            <div class="mx-1">
                <h1 class="text-sm font-semibold text-gray-700 dark:text-gray-200">@if(Auth::check())
                    <div>{{ Auth::user()->name }}</div>
                @endif</h1>
                <p class="text-sm text-gray-500 dark:text-gray-400">@if(Auth::check())
                    <div>{{ Auth::user()->email }}</div>
                @endif</p>
            </div>
        </a>

        <div class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
            <div>
            <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 8C7 5.23858 9.23858 3 12 3C14.7614 3 17 5.23858 17 8C17 10.7614 14.7614 13 12 13C9.23858 13 7 10.7614 7 8ZM12 11C13.6569 11 15 9.65685 15 8C15 6.34315 13.6569 5 12 5C10.3431 5 9 6.34315 9 8C9 9.65685 10.3431 11 12 11Z" fill="currentColor"></path>
                <path d="M6.34315 16.3431C4.84285 17.8434 4 19.8783 4 22H6C6 20.4087 6.63214 18.8826 7.75736 17.7574C8.88258 16.6321 10.4087 16 12 16C13.5913 16 15.1174 16.6321 16.2426 17.7574C17.3679 18.8826 18 20.4087 18 22H20C20 19.8783 19.1571 17.8434 17.6569 16.3431C16.1566 14.8429 14.1217 14 12 14C9.87827 14 7.84344 14.8429 6.34315 16.3431Z" fill="currentColor"></path>
            </svg>
            </div>

                    <a class="mx-1" href="{{route('profile.edit')}}"> View Profile</a>

        </div>

        <a href="#" class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
            <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.8199 22H10.1799C9.71003 22 9.30347 21.673 9.20292 21.214L8.79592 19.33C8.25297 19.0921 7.73814 18.7946 7.26092 18.443L5.42392 19.028C4.97592 19.1709 4.48891 18.9823 4.25392 18.575L2.42992 15.424C2.19751 15.0165 2.27758 14.5025 2.62292 14.185L4.04792 12.885C3.98312 12.2961 3.98312 11.7019 4.04792 11.113L2.62292 9.816C2.27707 9.49837 2.19697 8.98372 2.42992 8.576L4.24992 5.423C4.48491 5.0157 4.97192 4.82714 5.41992 4.97L7.25692 5.555C7.50098 5.37416 7.75505 5.20722 8.01792 5.055C8.27026 4.91269 8.52995 4.78385 8.79592 4.669L9.20392 2.787C9.30399 2.32797 9.71011 2.00049 10.1799 2H13.8199C14.2897 2.00049 14.6958 2.32797 14.7959 2.787L15.2079 4.67C15.4887 4.79352 15.7622 4.93308 16.0269 5.088C16.2739 5.23081 16.5126 5.38739 16.7419 5.557L18.5799 4.972C19.0276 4.82967 19.514 5.01816 19.7489 5.425L21.5689 8.578C21.8013 8.98548 21.7213 9.49951 21.3759 9.817L19.9509 11.117C20.0157 11.7059 20.0157 12.3001 19.9509 12.889L21.3759 14.189C21.7213 14.5065 21.8013 15.0205 21.5689 15.428L19.7489 18.581C19.514 18.9878 19.0276 19.1763 18.5799 19.034L16.7419 18.449C16.5093 18.6203 16.2677 18.7789 16.0179 18.924C15.7557 19.0759 15.4853 19.2131 15.2079 19.335L14.7959 21.214C14.6954 21.6726 14.2894 21.9996 13.8199 22ZM7.61992 16.229L8.43992 16.829C8.62477 16.9652 8.81743 17.0904 9.01692 17.204C9.20462 17.3127 9.39788 17.4115 9.59592 17.5L10.5289 17.909L10.9859 20H13.0159L13.4729 17.908L14.4059 17.499C14.8132 17.3194 15.1998 17.0961 15.5589 16.833L16.3799 16.233L18.4209 16.883L19.4359 15.125L17.8529 13.682L17.9649 12.67C18.0141 12.2274 18.0141 11.7806 17.9649 11.338L17.8529 10.326L19.4369 8.88L18.4209 7.121L16.3799 7.771L15.5589 7.171C15.1997 6.90671 14.8132 6.68175 14.4059 6.5L13.4729 6.091L13.0159 4H10.9859L10.5269 6.092L9.59592 6.5C9.39772 6.58704 9.20444 6.68486 9.01692 6.793C8.81866 6.90633 8.62701 7.03086 8.44292 7.166L7.62192 7.766L5.58192 7.116L4.56492 8.88L6.14792 10.321L6.03592 11.334C5.98672 11.7766 5.98672 12.2234 6.03592 12.666L6.14792 13.678L4.56492 15.121L5.57992 16.879L7.61992 16.229ZM11.9959 16C9.78678 16 7.99592 14.2091 7.99592 12C7.99592 9.79086 9.78678 8 11.9959 8C14.2051 8 15.9959 9.79086 15.9959 12C15.9932 14.208 14.2039 15.9972 11.9959 16ZM11.9959 10C10.9033 10.0011 10.0138 10.8788 9.99815 11.9713C9.98249 13.0638 10.8465 13.9667 11.9386 13.9991C13.0307 14.0315 13.9468 13.1815 13.9959 12.09V12.49V12C13.9959 10.8954 13.1005 10 11.9959 10Z" fill="currentColor"></path>
            </svg>

            <span class="mx-1">
                Settings
            </span>
        </a>

        <a href="#" class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
            <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21 19H3C1.89543 19 1 18.1046 1 17V16H3V7C3 5.89543 3.89543 5 5 5H19C20.1046 5 21 5.89543 21 7V16H23V17C23 18.1046 22.1046 19 21 19ZM5 7V16H19V7H5Z" fill="currentColor"></path>
            </svg>

            <span class="mx-1">
                Keyboard shortcuts
            </span>
        </a>

        <hr class="border-gray-200 dark:border-gray-700 ">

        <a href="#" class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
            <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 22C15.8082 21.9947 14.0267 20.2306 14 18.039V16H9.99996V18.02C9.98892 20.2265 8.19321 22.0073 5.98669 22C3.78017 21.9926 1.99635 20.1999 2.00001 17.9934C2.00367 15.7868 3.79343 14 5.99996 14H7.99996V9.99999H5.99996C3.79343 9.99997 2.00367 8.21315 2.00001 6.00663C1.99635 3.8001 3.78017 2.00736 5.98669 1.99999C8.19321 1.99267 9.98892 3.77349 9.99996 5.97999V7.99999H14V5.99999C14 3.79085 15.7908 1.99999 18 1.99999C20.2091 1.99999 22 3.79085 22 5.99999C22 8.20913 20.2091 9.99999 18 9.99999H16V14H18C20.2091 14 22 15.7909 22 18C22 20.2091 20.2091 22 18 22ZM16 16V18C16 19.1046 16.8954 20 18 20C19.1045 20 20 19.1046 20 18C20 16.8954 19.1045 16 18 16H16ZM5.99996 16C4.89539 16 3.99996 16.8954 3.99996 18C3.99996 19.1046 4.89539 20 5.99996 20C6.53211 20.0057 7.04412 19.7968 7.42043 19.4205C7.79674 19.0442 8.00563 18.5321 7.99996 18V16H5.99996ZM9.99996 9.99999V14H14V9.99999H9.99996ZM18 3.99999C17.4678 3.99431 16.9558 4.2032 16.5795 4.57952C16.2032 4.95583 15.9943 5.46784 16 5.99999V7.99999H18C18.5321 8.00567 19.0441 7.79678 19.4204 7.42047C19.7967 7.04416 20.0056 6.53215 20 5.99999C20.0056 5.46784 19.7967 4.95583 19.4204 4.57952C19.0441 4.2032 18.5321 3.99431 18 3.99999ZM5.99996 3.99999C5.4678 3.99431 4.95579 4.2032 4.57948 4.57952C4.20317 4.95583 3.99428 5.46784 3.99996 5.99999C3.99428 6.53215 4.20317 7.04416 4.57948 7.42047C4.95579 7.79678 5.4678 8.00567 5.99996 7.99999H7.99996V5.99999C8.00563 5.46784 7.79674 4.95583 7.42043 4.57952C7.04412 4.2032 6.53211 3.99431 5.99996 3.99999Z" fill="currentColor"></path>
            </svg>

            <span class="mx-1">
                Company profile
            </span>
        </a>

        <a href="#" class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
            <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 3C6.23858 3 4 5.23858 4 8C4 10.7614 6.23858 13 9 13C11.7614 13 14 10.7614 14 8C14 5.23858 11.7614 3 9 3ZM6 8C6 6.34315 7.34315 5 9 5C10.6569 5 12 6.34315 12 8C12 9.65685 10.6569 11 9 11C7.34315 11 6 9.65685 6 8Z" fill="currentColor"></path>
                <path d="M16.9084 8.21828C16.6271 8.07484 16.3158 8.00006 16 8.00006V6.00006C16.6316 6.00006 17.2542 6.14956 17.8169 6.43645C17.8789 6.46805 17.9399 6.50121 18 6.5359C18.4854 6.81614 18.9072 7.19569 19.2373 7.65055C19.6083 8.16172 19.8529 8.75347 19.9512 9.37737C20.0496 10.0013 19.9987 10.6396 19.8029 11.2401C19.6071 11.8405 19.2719 12.3861 18.8247 12.8321C18.3775 13.2782 17.8311 13.6119 17.2301 13.8062C16.6953 13.979 16.1308 14.037 15.5735 13.9772C15.5046 13.9698 15.4357 13.9606 15.367 13.9496C14.7438 13.8497 14.1531 13.6038 13.6431 13.2319L13.6421 13.2311L14.821 11.6156C15.0761 11.8017 15.3717 11.9248 15.6835 11.9747C15.9953 12.0247 16.3145 12.0001 16.615 11.903C16.9155 11.8059 17.1887 11.639 17.4123 11.416C17.6359 11.193 17.8035 10.9202 17.9014 10.62C17.9993 10.3198 18.0247 10.0006 17.9756 9.68869C17.9264 9.37675 17.8041 9.08089 17.6186 8.82531C17.4331 8.56974 17.1898 8.36172 16.9084 8.21828Z" fill="currentColor"></path>
                <path d="M19.9981 21C19.9981 20.475 19.8947 19.9551 19.6938 19.47C19.4928 18.9849 19.1983 18.5442 18.8271 18.1729C18.4558 17.8017 18.0151 17.5072 17.53 17.3062C17.0449 17.1053 16.525 17.0019 16 17.0019V15C16.6821 15 17.3584 15.1163 18 15.3431C18.0996 15.3783 18.1983 15.4162 18.2961 15.4567C19.0241 15.7583 19.6855 16.2002 20.2426 16.7574C20.7998 17.3145 21.2417 17.9759 21.5433 18.7039C21.5838 18.8017 21.6217 18.9004 21.6569 19C21.8837 19.6416 22 20.3179 22 21H19.9981Z" fill="currentColor"></path>
                <path d="M16 21H14C14 18.2386 11.7614 16 9 16C6.23858 16 4 18.2386 4 21H2C2 17.134 5.13401 14 9 14C12.866 14 16 17.134 16 21Z" fill="currentColor"></path>
            </svg>

            <span class="mx-1">Team</span>
        </a>

        <a href="#" class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
            <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 19H2C2 15.6863 4.68629 13 8 13C11.3137 13 14 15.6863 14 19H12C12 16.7909 10.2091 15 8 15C5.79086 15 4 16.7909 4 19ZM19 16H17V13H14V11H17V8H19V11H22V13H19V16ZM8 12C5.79086 12 4 10.2091 4 8C4 5.79086 5.79086 4 8 4C10.2091 4 12 5.79086 12 8C11.9972 10.208 10.208 11.9972 8 12ZM8 6C6.9074 6.00111 6.01789 6.87885 6.00223 7.97134C5.98658 9.06383 6.85057 9.9667 7.94269 9.99912C9.03481 10.0315 9.95083 9.1815 10 8.09V8.49V8C10 6.89543 9.10457 6 8 6Z" fill="currentColor"></path>
            </svg>

            <span class="mx-1">
                Invite colleagues
            </span>
        </a>

        <hr class="border-gray-200 dark:border-gray-700 ">

        <a href="#" class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
            <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 22C6.47967 21.9939 2.00606 17.5203 2 12V11.8C2.10993 6.30452 6.63459 1.92794 12.1307 2.00087C17.6268 2.07379 22.0337 6.56887 21.9978 12.0653C21.9619 17.5618 17.4966 21.9989 12 22ZM11.984 20H12C16.4167 19.9956 19.9942 16.4127 19.992 11.996C19.9898 7.57928 16.4087 3.99999 11.992 3.99999C7.57528 3.99999 3.99421 7.57928 3.992 11.996C3.98979 16.4127 7.56729 19.9956 11.984 20ZM13 18H11V16H13V18ZM13 15H11C10.9684 13.6977 11.6461 12.4808 12.77 11.822C13.43 11.316 14 10.88 14 9.99999C14 8.89542 13.1046 7.99999 12 7.99999C10.8954 7.99999 10 8.89542 10 9.99999H8V9.90999C8.01608 8.48093 8.79333 7.16899 10.039 6.46839C11.2846 5.76778 12.8094 5.78493 14.039 6.51339C15.2685 7.24184 16.0161 8.57093 16 9.99999C15.9284 11.079 15.3497 12.0602 14.44 12.645C13.6177 13.1612 13.0847 14.0328 13 15Z" fill="currentColor">
                    
                </path>
            </svg>

            <span class="mx-1">
                Help
            </span>
        </a>
        
        
        <div class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
            <div>
            <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19 21H10C8.89543 21 8 20.1046 8 19V15H10V19H19V5H10V9H8V5C8 3.89543 8.89543 3 10 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21ZM12 16V13H3V11H12V8L17 12L12 16Z" fill="currentColor"></path>
            </svg>
            </div>
        <form method="POST" action="{{ route('logout') }}">
                @csrf
                    <a class="mx-1" href="{{route('logout')}}" onclick="event.preventDefault();
                         this.closest('form').submit();"> {{ __('Log Out') }}</a>
                           
            </form>
        </div>
        
    </div>
</div>

                    @else
                        <a href="{{ route('login') }}" class="text-sm font-medium text-slate-900 hover:text-rose-500">Log in</a>
                        <span class="text-lg font-medium text-slate-900 hover:text-rose-500 px-1">/</span>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" 
                             class="text-sm font-medium text-slate-900 hover:text-rose-500">Sign up</a>
                             @endif
                    @endauth
                    </div>
                    @endif
                </div>
            </div>

            <!-- Secondary navigation -->
            <div class="bg-rose-500 ">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div>
                        <div class="flex h-16 items-center justify-between">
                            <!-- Logo (lg+) -->
                            <div class="hidden lg:flex lg:flex-1 lg:items-center">
                                <a href="#">
                                    <span class="sr-only">Your Company</span>
                                    <img class="h-8 w-auto" src="{{ asset('storage/pages/Asset.svg') }}"
                                        alt="">
                                </a>
                            </div>

                            <div class="hidden h-full lg:flex">
                                <!-- Flyout menus -->
                                <div class="inset-x-0 bottom-0 px-4" x-data="Components.popoverGroup()" x-init="init()">
                                    <div class="flex h-full justify-center space-x-8">
                                        <a href="#"
                                            class="flex items-center text-sm font-medium text-white">Home</a>

                                        <a href="#"
                                            class="flex items-center text-sm font-medium text-white">Store</a>

                                        <a href="#"
                                            class="flex items-center text-sm font-medium text-white">About</a>
                                        <a href="#"
                                            class="flex items-center text-sm font-medium text-white">Contact</a>

                                    </div>
                                </div>
                            </div>

                            <!-- Mobile menu and search (lg-) -->
                            <div class="flex flex-1 items-center lg:hidden">
                                <button type="button"
                                    x-description="Mobile menu toggle, controls the 'mobileMenuOpen' state."
                                    class="-ml-2 p-2 text-white" @click="open = true">
                                    <span class="sr-only">Open menu</span>
                                    <svg class="h-6 w-6" x-description="Heroicon name: outline/bars-3"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                                    </svg>
                                </button>

                                <!-- Search -->
                                <a href="#" class="ml-2 p-2 text-white">
                                    <span class="sr-only">Search</span>
                                    <svg class="h-6 w-6" x-description="Heroicon name: outline/magnifying-glass"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z">
                                        </path>
                                    </svg>
                                </a>
                            </div>

                            <!-- Logo (lg-) -->
                            <a href="#" class="lg:hidden">
                                <span class="sr-only">Your Company</span>
                                <img src="{{ asset('storage/pages/Asset.svg') }}" alt="" class="h-8 w-auto">
                            </a>

                            <div class="flex flex-1 items-center justify-end">
                                <div class="relative mt-4 md:mt-0 hidden lg:block  ">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                        <svg class="w-5 h-5 text-rose-500" viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                    <input type="text"
                                        class="w-full py-1.5 pl-10 pr-4 text-slate-900 bg-white border rounded-full placeholder:text-slate-400 focus:border-rose-400 dark:focus:border-rose-300 focus:outline-none focus:ring focus:ring-opacity-40 focus:ring-rose-300"
                                        placeholder="Search">
                                </div>


                                <div class="flex items-center lg:ml-8">
                                    <!-- Help -->
                                    <a href="#" class="p-2 text-white lg:hidden">
                                        <span class="sr-only">Help</span>
                                        <svg class="h-6 w-6"
                                            x-description="Heroicon name: outline/question-mark-circle"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z">
                                            </path>
                                        </svg>
                                    </a>
                                    <a href="#" class="hidden text-sm font-medium text-white lg:block">Help</a>

                                    <!-- Cart -->
                                    <div class="ml-4 flow-root lg:ml-8">
                                        <a href="#" class="group -m-2 flex items-center p-2">
                                            <svg class="h-6 w-6 flex-shrink-0 text-white"
                                                x-description="Heroicon name: outline/shopping-bag"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z">
                                                </path>
                                            </svg>
                                            <span class="ml-2 text-sm font-medium text-white">0</span>
                                            <span class="sr-only">items in cart, view bag</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>



    {{-- Footer --}}
    <footer aria-labelledby="footer-heading" class="bg-gray-900">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="py-20 xl:grid xl:grid-cols-3 xl:gap-8">
                <div class="grid grid-cols-2 gap-8 xl:col-span-2">
                    <div class="space-y-12 md:grid md:grid-cols-2 md:gap-8 md:space-y-0">
                        <div>
                            <h3 class="text-sm font-medium text-white">Shop</h3>
                            <ul role="list" class="mt-6 space-y-6">

                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">Bags</a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">Tees</a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">Objects</a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">Home Goods</a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">Accessories</a>
                                </li>

                            </ul>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-white">Company</h3>
                            <ul role="list" class="mt-6 space-y-6">

                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">Who we are</a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">Sustainability</a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">Press</a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">Careers</a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">Terms &amp;
                                        Conditions</a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">Privacy</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="space-y-12 md:grid md:grid-cols-2 md:gap-8 md:space-y-0">
                        <div>
                            <h3 class="text-sm font-medium text-white">Account</h3>
                            <ul role="list" class="mt-6 space-y-6">

                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">Manage Account</a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">Returns &amp;
                                        Exchanges</a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">Redeem a Gift Card</a>
                                </li>

                            </ul>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-white">Connect</h3>
                            <ul role="list" class="mt-6 space-y-6">

                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">Contact Us</a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">Twitter</a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">Instagram</a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-300 hover:text-white">Pinterest</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mt-12 md:mt-16 xl:mt-0">
                    <h3 class="text-sm font-medium text-white">Sign up for our newsletter</h3>
                    <p class="mt-6 text-sm text-gray-300">The latest deals and savings, sent to your inbox weekly.</p>
                    <form class="mt-2 flex sm:max-w-md">
                        <label for="email-address" class="sr-only">Email address</label>
                        <input id="email-address" type="text" autocomplete="email" required="" placeholder="Your Email"
                            class="w-full min-w-0 appearance-none rounded-full border border-white bg-white py-2 px-4 text-base text-slate-900 placeholder-gray-500 shadow-sm outline-none">
                        <div class="ml-4 flex-shrink-0">
                            <button type="submit"
                                class="flex w-full items-center justify-center rounded-full border border-transparent bg-rose-500 py-2 px-4 text-base font-medium text-white shadow-sm hover:bg-rose-600 focus:outline-none ">Sign
                                up</button>
                        </div>
                    </form>
                </div>
            </div>
            <hr class=" border-gray-200 sm:mx-auto dark:border-gray-700">

            <div class="text-center flex items-center py-8 justify-between">
                <div class="">
                    <p class="lg:text-sm text-xs text-gray-400">Copyright © 2024 Chrih-Daba</p>
                </div>
                <div>
                    <ul class="flex justify-center space-x-3 lg:space-x-5">
                        <li>
                            <a href="#"
                                class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
    </footer>

</body>

</html>
