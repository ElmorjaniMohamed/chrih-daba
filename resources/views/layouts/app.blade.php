<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chrih-daba</title>

    {{-- font Lora --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Shrikhand&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Shrikhand&display=swap"
        rel="stylesheet">

    {{-- Css Tailwind --}}
    @vite('resources/css/app.css')

    {{-- Alpine JS --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.5/dist/cdn.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"
        integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body x-data="{ open: false }" @keydown.window.escape="open = false" class="bg-slate-50">

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
                                <div x-data="{ isOpen: false }" class="relative inline-block ">
                                    <!-- Dropdown toggle button -->
                                    <button @click="isOpen = !isOpen"
                                        class="relative z-10 flex items-center p-2 text-sm text-gray-600 outline-none bg-transparent rounded-md focus:border-rose-500 border-transparent focus:ring-opacity-40 dark:focus:ring-opacity-40 focus:ring-rose-300 focus:outline-none">
                                        <span class="mx-1">
                                            @if (Auth::check())
                                                <div>Welcome👋, <span
                                                        class="text-rose-500 font-medium text-sm font-readex">{{ Auth::user()->name }}!</span>
                                                </div>
                                            @endif
                                        </span>
                                        <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 15.713L18.01 9.70299L16.597 8.28799L12 12.888L7.40399 8.28799L5.98999 9.70199L12 15.713Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </button>

                                    <!-- Dropdown menu -->
                                    <div x-show="isOpen" @click.away="isOpen = false"
                                        x-transition:enter="transition ease-out duration-100"
                                        x-transition:enter-start="opacity-0 scale-90"
                                        x-transition:enter-end="opacity-100 scale-100"
                                        x-transition:leave="transition ease-in duration-100"
                                        x-transition:leave-start="opacity-100 scale-100"
                                        x-transition:leave-end="opacity-0 scale-90"
                                        class="absolute right-0 z-20 w-56 py-2 mt-2 origin-top-right bg-white rounded-md shadow-xl">

                                        <a href="#"
                                            class="flex items-center p-3 -mt-2 text-sm text-slate-800 transition-colors duration-300 transform hover:bg-slate-100">
                                            <img class="flex-shrink-0 object-cover mx-1 rounded-full w-9 h-9"
                                                src="{{ Voyager::image(Auth::user()->avatar) }}" alt="jane avatar">
                                            <div class="mx-1">
                                                <h1 class="text-sm font-semibold  text-slate-800">
                                                    @if (Auth::check())
                                                        <div>{{ Auth::user()->name }}</div>
                                                    @endif
                                                </h1>
                                                <p class="text-sm  text-slate-800 ">
                                                    @if (Auth::check())
                                                        <div>{{ Auth::user()->email }}</div>
                                                    @endif
                                                </p>
                                            </div>
                                        </a>

                                        <hr class="border-slate-400 ">

                                        <div
                                            class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform  hover:bg-slate-100 ">
                                            <div>
                                                <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="#F43F5E"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7 8C7 5.23858 9.23858 3 12 3C14.7614 3 17 5.23858 17 8C17 10.7614 14.7614 13 12 13C9.23858 13 7 10.7614 7 8ZM12 11C13.6569 11 15 9.65685 15 8C15 6.34315 13.6569 5 12 5C10.3431 5 9 6.34315 9 8C9 9.65685 10.3431 11 12 11Z"
                                                        fill="#F43F5E"></path>
                                                    <path
                                                        d="M6.34315 16.3431C4.84285 17.8434 4 19.8783 4 22H6C6 20.4087 6.63214 18.8826 7.75736 17.7574C8.88258 16.6321 10.4087 16 12 16C13.5913 16 15.1174 16.6321 16.2426 17.7574C17.3679 18.8826 18 20.4087 18 22H20C20 19.8783 19.1571 17.8434 17.6569 16.3431C16.1566 14.8429 14.1217 14 12 14C9.87827 14 7.84344 14.8429 6.34315 16.3431Z"
                                                        fill="#F43F5E"></path>
                                                </svg>
                                            </div>

                                            <a class="mx-1  text-slate-800" href="{{ route('profile.edit') }}"> View
                                                Profile</a>

                                        </div>

                                        <a href="#"
                                            class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform  hover:bg-slate-100 ">
                                            <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="#F43F5E"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 22C6.47967 21.9939 2.00606 17.5203 2 12V11.8C2.10993 6.30452 6.63459 1.92794 12.1307 2.00087C17.6268 2.07379 22.0337 6.56887 21.9978 12.0653C21.9619 17.5618 17.4966 21.9989 12 22ZM11.984 20H12C16.4167 19.9956 19.9942 16.4127 19.992 11.996C19.9898 7.57928 16.4087 3.99999 11.992 3.99999C7.57528 3.99999 3.99421 7.57928 3.992 11.996C3.98979 16.4127 7.56729 19.9956 11.984 20ZM13 18H11V16H13V18ZM13 15H11C10.9684 13.6977 11.6461 12.4808 12.77 11.822C13.43 11.316 14 10.88 14 9.99999C14 8.89542 13.1046 7.99999 12 7.99999C10.8954 7.99999 10 8.89542 10 9.99999H8V9.90999C8.01608 8.48093 8.79333 7.16899 10.039 6.46839C11.2846 5.76778 12.8094 5.78493 14.039 6.51339C15.2685 7.24184 16.0161 8.57093 16 9.99999C15.9284 11.079 15.3497 12.0602 14.44 12.645C13.6177 13.1612 13.0847 14.0328 13 15Z"
                                                    fill="#F43F5E">

                                                </path>
                                            </svg>

                                            <span class="mx-1">
                                                Help
                                            </span>
                                        </a>


                                        <div
                                            class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform  hover:bg-slate-100">
                                            <div>
                                                <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="#F43F5E"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19 21H10C8.89543 21 8 20.1046 8 19V15H10V19H19V5H10V9H8V5C8 3.89543 8.89543 3 10 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21ZM12 16V13H3V11H12V8L17 12L12 16Z"
                                                        fill="#F43F5E"></path>
                                                </svg>
                                            </div>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <a class="mx-1" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                     this.closest('form').submit();">
                                                    {{ __('Log Out') }}</a>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            @else
                                <a href="{{ route('login') }}"
                                    class="text-sm font-medium text-slate-900 hover:text-rose-500">Log in</a>
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
                                    <img class="h-8 w-auto" src="{{ asset('img/Asset.svg') }}" alt="">
                                </a>
                            </div>

                            <div class="hidden h-full lg:flex">
                                <!-- Flyout menus -->
                                <div class="inset-x-0 bottom-0 px-4" x-data="Components.popoverGroup()" x-init="init()">
                                    <div class="flex h-full justify-center space-x-8">
                                        <a href=""
                                            class="flex items-center text-sm font-medium text-white">Home</a>

                                        <a href=""
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
                                        <a href="{{ route('cart.show') }}" class="group -m-2 flex items-center p-2">
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

    <main class=" bg-slate-50">
        @yield('content')
    </main>


    {{-- Footer --}}
    <footer aria-labelledby="footer-heading" class="bg-slate-50">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <hr class="border-slate-300 ">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="py-20 xl:grid xl:grid-cols-3 xl:gap-8">
                <div class="grid grid-cols-2 gap-8 xl:col-span-2">
                    <div class="space-y-12 md:grid md:grid-cols-2 md:gap-8 md:space-y-0">
                        <div>
                            <h3 class="text-sm font-medium text-slate-800 ">Shop</h3>
                            <ul role="list" class="mt-6 space-y-6">

                                <li class="text-sm">
                                    <a href="#" class="text-slate-800 hover:text-rose-500">Bags</a>
                                    slate-800
                                <li class="text-sm">
                                    <a href="#" class="text-slate-800 hover:text-rose-500">Tees</a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-slate-800 hover:text-rose-500">Objects</a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-slate-800 hover:text-rose-500">Home Goods</a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-slate-800 hover:text-rose-500">Accessories</a>
                                </li>

                            </ul>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium  text-slate-800">Company</h3>
                            <ul role="list" class="mt-6 space-y-6">

                                <li class="text-sm">
                                    <a href="#" class="text-slate-800 hover:text-">Who we are</a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-slate-800 hover:text-">Sustainability</a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-slate-800 hover:text-rose-500">Press</a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-slate-800 hover:text-rose-500">Careers</a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-slate-800 hover:text-rose-500">Terms &amp;
                                        Conditions</a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-slate-800 hover:text-rose-500">Privacy</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="space-y-12 md:grid md:grid-cols-2 md:gap-8 md:space-y-0">
                        <div>
                            <h3 class="text-sm font-medium  text-slate-800">Account</h3>
                            <ul role="list" class="mt-6 space-y-6">

                                <li class="text-sm">
                                    <a href="#" class="text-slate-800 hover:text-rose-500">Manage Account</a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-slate-800 hover:text-rose-500">Returns &amp;
                                        Exchanges</a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-slate-800 hover:text-rose-500">Redeem a Gift
                                        Card</a>
                                </li>

                            </ul>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium  text-slate-800">Connect</h3>
                            <ul role="list" class="mt-6 space-y-6">

                                <li class="text-sm">
                                    <a href="#" class="text-slate-800 hover:text-rose-500">Contact Us</a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-slate-800 hover:text-rose-500">Twitter</a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-slate-800 hover:text-rose-500">Instagram</a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-slate-800 hover:text-rose-500">Pinterest</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mt-12 md:mt-16 xl:mt-0">
                    <h3 class="text-sm font-medium text-slate-800">Sign up for our newsletter</h3>
                    <p class="mt-6 text-sm text-gray-400">The latest deals and savings, sent to your inbox weekly.</p>
                    <form class="mt-2 flex sm:max-w-md">
                        <label for="email-address" class="sr-only">Email address</label>
                        <input id="email-address" type="text" autocomplete="email" required=""
                            placeholder="Your Email"
                            class="w-full min-w-0 appearance-none rounded-full border border-rose-500 bg-slate-50 py-2 px-4 text-base text-slate-900 placeholder-gray-500 shadow-sm outline-none">
                        <div class="ml-4 flex-shrink-0">
                            <button type="submit"
                                class="flex w-full items-center justify-center rounded-full border border-transparent bg-rose-500 py-2 px-4 text-base font-medium text-white shadow-sm hover:bg-rose-600 focus:outline-none ">Sign
                                up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <hr class=" border-gray-400 sm:mx-auto">

        <div class="text-center w-full flex items-center py-6 px-32 justify-between bg-rose-500">
            <div class="">
                <p class="lg:text-sm text-xs text-slate-50">Copyright © 2024 Chrih-Daba</p>
            </div>
            <div>
                <ul class="flex justify-center space-x-3 lg:space-x-5">
                    <li>
                        <a href="#" class="text-slate-50 hover:text-gray-900">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-slate-50 hover:text-gray-900">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <a href="#" class="text-slate-50 hover:text-gray-900 ">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>
                    </li>
                    <li>
                        <a href="#" class="text-slate-50 hover:text-gray-900 ">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-slate-50 hover:text-gray-900 ">
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
