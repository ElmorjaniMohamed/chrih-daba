@section('content')
    <style>
        /* HTML: <div class="ribbon">Your text content</div> */
        .ribbon {
            font-size: 16px;
            font-weight: bold;
            color: #fff;
        }

        .ribbon {
            --f: .5em;
            /* control the folded part */

            position: absolute;
            top: 0;
            right: 0;
            line-height: 1.8;
            padding-inline: 1lh;
            padding-bottom: var(--f);
            border-image: conic-gradient(#0008 0 0) 51%/var(--f);
            clip-path: polygon(100% calc(100% - var(--f)), 100% 100%, calc(100% - var(--f)) calc(100% - var(--f)), var(--f) calc(100% - var(--f)), 0 100%, 0 calc(100% - var(--f)), 999px calc(100% - var(--f) - 999px), calc(100% - 999px) calc(100% - var(--f) - 999px));
            transform: translate(calc((1 - cos(45deg))*100%), -100%) rotate(45deg);
            transform-origin: 0% 100%;
            background-color: #F43F5E;
            /* the main color  */
        }

        /* HTML: <div class="ribbon">Your text content</div> */
        .header {
            font-size: 40px;
            font-weight: bold;
            color: #fff;
        }

        .header {
            --c: #F43F5E;
            /* control the cutout part (adjust each variable to understand what it does) */
            --r: .8em;
            --a: 60deg;
            /* from 0 to 90deg */
            --d: .9em;

            padding-inline: .3em;
            margin: calc(.5lh + var(--r)) calc(1.2lh + var(--d)) 0;
            line-height: 1.75;
            background: var(--c);
            width: fit-content;
            position: relative;
            white-space: nowrap;
        }

        .header:before,
        .header:after {
            content: "";
            position: absolute;
            width: calc(1lh + var(--d));
            height: calc(1.5lh + var(--r));
            bottom: 0;
            border: solid var(--c);
            box-sizing: border-box;
        }

        .header:before {
            left: 99%;
            border-width: 0 1lh 1lh 0;
            border-radius: 0 0 999px 0;
            clip-path: polygon(calc(999px*cos(var(--a))) calc(100% - 1lh - var(--d) + 999px*sin(var(--a))), 999px 0, 100% 0, calc(50% + var(--d)/2) var(--r), var(--d) 0, 0 0, 0 calc(100% - 1lh - var(--d)));
            transform-origin: 0 calc(100% - 1lh - var(--d));
            rotate: calc(90deg - var(--a));
        }

        .header:after {
            right: 99%;
            border-width: 0 0 1lh 1lh;
            border-radius: 0 0 0 999px;
            clip-path: polygon(calc(100% - 999px*cos(var(--a))) calc(100% - 1lh - var(--d) + 999px*sin(var(--a))), -999px 0, 0 0, calc(50% - var(--d)/2) var(--r), calc(100% - var(--d)) 0, 100% 0, 100% calc(100% - 1lh - var(--d)));
            transform-origin: 100% calc(100% - 1lh - var(--d));
            rotate: calc(var(--a) - 90deg);
        }
    </style>
    <section>
        <!-- Hero section -->
        <div class="relative group bg-slate-50 py-14">
            <!-- Decorative image and overlay -->
            <img src="{{ asset('img/off.svg') }}" class="w-48 h-48 z-40 animate-bounce absolute top-24 left-32" alt="">
            <div aria-hidden="true" class="absolute inset-0 overflow-hidden opacity-95 sm:h-auto">
                <img src="{{ asset('img/shop.jpg') }}" alt="" class="h-screen w-full object-cover object-center">
            </div>

            <div
                class="relative pt-40 -mb-6 mx-auto flex flex-col items-center justify-between px-6 text-center sm:pt-96 sm:pb-4 lg:px-0">
                <div>
                    <div class="header text-2xl font-bold font-Roboto tracking-tight text-slate-50 lg:text-6xl">Welcome to
                        CHRIH-DABA
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#"
                        class="inline-block rounded-full border font-roboto border-transparent bg-rose-600 lg:py-3 p-2 lg:px-8 px-6 lg:text-base text-sm  lg:first-line:font-medium text-slate-50 hover:text-rose-500 hover:border-2 hover:border-red-500 hover:bg-slate-50">Shop
                        New Arrivals</a>
                </div>
            </div>
        </div>
    </section>

    <section aria-labelledby="perks-heading" class=" bg-slate-50">

        <div class="mx-auto max-w-7xl py-14 px-4 sm:px-6 sm:py-22 lg:px-8">
            <div class="grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 lg:gap-x-8 lg:gap-y-0">

                <div class="text-center md:flex md:items-start md:text-left lg:block lg:text-center">
                    <div class="md:flex-shrink-0">
                        <div class="flow-root">
                            <img class="-my-1 mx-auto h-24 w-auto" src="{{ asset('img/3.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="mt-6 md:mt-0 md:ml-4 lg:mt-6 lg:ml-0">
                        <h3 class="text-base font-medium text-gray-900">Free returns</h3>
                        <p class="mt-3 text-sm text-gray-500">Not what you expected? Place it back in the parcel and attach
                            the pre-paid postage stamp.</p>
                    </div>
                </div>

                <div class="text-center md:flex md:items-start md:text-left lg:block lg:text-center">
                    <div class="md:flex-shrink-0">
                        <div class="flow-root">
                            <img class="-my-1 mx-auto h-24 w-auto" src="{{ asset('img/1.svg') }}" alt="">

                        </div>
                    </div>
                    <div class="mt-6 md:mt-0 md:ml-4 lg:mt-6 lg:ml-0">
                        <h3 class="text-base font-medium text-gray-900">Same day delivery</h3>
                        <p class="mt-3 text-sm text-gray-500">We offer a delivery service that has never been done before.
                            Checkout today and receive your products within hours.</p>
                    </div>
                </div>

                <div class="text-center md:flex md:items-start md:text-left lg:block lg:text-center">
                    <div class="md:flex-shrink-0">
                        <div class="flow-root">
                            <img class="-my-1 mx-auto h-24 w-auto" src="{{ asset('img/2.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="mt-6 md:mt-0 md:ml-4 lg:mt-6 lg:ml-0">
                        <h3 class="text-base font-medium text-gray-900">All year discount</h3>
                        <p class="mt-3 text-sm text-gray-500">Looking for a deal? You can use the code "ALLYEAR" at
                            checkout and get money off all year round.</p>
                    </div>
                </div>

                <div class="text-center md:flex md:items-start md:text-left lg:block lg:text-center">
                    <div class="md:flex-shrink-0">
                        <div class="flow-root">
                            <img class="-my-1 mx-auto h-24 w-auto" src="{{ asset('img/4.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="mt-6 md:mt-0 md:ml-4 lg:mt-6 lg:ml-0">
                        <h3 class="text-base font-medium text-gray-900">For the planet</h3>
                        <p class="mt-3 text-sm text-gray-500">We’ve pledged 1% of sales to the preservation and restoration
                            of the natural environment.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class=" bg-slate-50">
        <div class="flex items-center justify-between px-16 ">
            <div class="font-bold text-2xl font-roboto">
                <h2>New Arrivals</h2>
            </div>
            <div class="flex items-center justify-center">
                <a class="font-medium text-sm font-roboto text-rose-500" href="">See More</a>
                <span>
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#F43F5E">
                        <path
                            d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z">
                        </path>
                    </svg>
                </span>
            </div>
        </div>
        <div class="bg-slate-50 flex items-center justify-center gap-7 py-10">
            <div class="relative bg-white text-gray-700 w-72 min-h-[10rem] shadow-lg rounded-lg overflow-hidden">
                <img class="w-full h-full object-cover" src="{{ asset('img/headphone.jpg') }}" alt="">

                <button
                    class="absolute start-4 top-4 z-10 bg-white p-1.5 bg-rose-500/95 hover:bg-rose-600/90 px-3 py-0.5 rounded-md text-white font-sm font-readex tracking-wider transition ">
                    New
                </button>
                <div class="p-5 flex flex-col gap-3">

                    {{-- badge --}}
                    <div class="flex items-center gap-2">
                        <span class="px-3 py-1 rounded-full text-xs bg-slate-100 ">stock read</span>
                        <span class="px-3 py-1 rounded-full text-xs bg-slate-100 ">officiel store</span>
                    </div>

                    {{-- product title --}}
                    <h2 class="font-semibold font-roboto text-2xl overflow-ellipsis overflow-hidden whitespace-nowrap">
                        Best Headphone Ever
                    </h2>

                    {{-- product price --}}
                    <div>
                        <span class="text-xl font-bold font-roboto">
                            199.00 DH
                        </span>
                    </div>
                    <div class="flex items-center gap-2 mt-1">
                        <span class="text-sm font-roboto line-through opacity-50">
                            499.00 DH
                        </span>
                        <span class="bg-green-400 px-1.5 py-0.5 rounded-md text-xs text-white">
                            save 55%
                        </span>
                    </div>

                    {{-- product rating --}}
                    <span class="flex items-center mt-1">
                        <img src="{{ asset('img/star.svg') }}" alt="">
                        <img src="{{ asset('img/star.svg') }}" alt="">
                        <img src="{{ asset('img/star.svg') }}" alt="">
                        <img src="{{ asset('img/star-half-fill.svg') }}" alt="">
                        <img src="{{ asset('img/star-no-fill.svg') }}" alt="">
                        <span class="text-xs ml-2 text-gray-500"> 2k reviews </span>
                    </span>

                    {{-- product action button --}}
                    <div class="mt-5 flex gap-2">
                        <button
                            class="bg-rose-500/95 hover:bg-rose-600/90 px-6 py-2 rounded-md text-white font-roboto font-medium tracking-wider transition ">
                            Add to cart
                        </button>

                        <button
                            class="flex-grow flex items-center justify-center bg-gray-300/60 hover:bg-gray-300/80 transition rounded-md ">
                            <img class="opacity-50 " src="{{ asset('img/love.svg') }}" alt="">
                        </button>
                        <button
                            class="flex-grow flex items-center justify-center bg-gray-300/60 hover:bg-gray-300/80 transition rounded-md ">
                            <img class="opacity-50 " src="{{ asset('img/eye.svg') }}" alt="">
                        </button>
                    </div>

                </div>


            </div>

            <div class="relative bg-white text-gray-700 w-72 min-h-[10rem] shadow-lg rounded-lg overflow-hidden">
                <div class="ribbon bg-rose-500 text-white font-bold text-lg relative" style="--f: .5em;">
                    New
                </div>

                <img class="w-full h-full object-cover" src="{{ asset('img/headphone.jpg') }}" alt="">
                <div class="p-5 flex flex-col gap-3">

                    {{-- badge --}}
                    <div class="flex items-center gap-2">
                        <span class="px-3 py-1 rounded-full text-xs bg-slate-100 ">stock read</span>
                        <span class="px-3 py-1 rounded-full text-xs bg-slate-100 ">officiel store</span>
                    </div>

                    {{-- product title --}}
                    <h2 class="font-semibold font-roboto text-2xl overflow-ellipsis overflow-hidden whitespace-nowrap">
                        Best Headphone Ever
                    </h2>

                    {{-- product price --}}
                    <div>
                        <span class="text-xl font-bold font-roboto">
                            199.00 DH
                        </span>
                    </div>
                    <div class="flex items-center gap-2 mt-1">
                        <span class="text-sm font-roboto line-through opacity-50">
                            499.00 DH
                        </span>
                        <span class="bg-green-400 px-1.5 py-0.5 rounded-md text-xs text-white">
                            save 55%
                        </span>
                    </div>

                    {{-- product rating --}}
                    <span class="flex items-center mt-1">
                        <img src="{{ asset('img/star.svg') }}" alt="">
                        <img src="{{ asset('img/star.svg') }}" alt="">
                        <img src="{{ asset('img/star.svg') }}" alt="">
                        <img src="{{ asset('img/star-half-fill.svg') }}" alt="">
                        <img src="{{ asset('img/star-no-fill.svg') }}" alt="">
                        <span class="text-xs ml-2 text-gray-500"> 2k reviews </span>
                    </span>

                    {{-- product action button --}}
                    <div class="mt-5 flex gap-2">
                        <button
                            class="bg-rose-500/95 hover:bg-rose-600/90 px-6 py-2 rounded-md text-white font-roboto font-medium tracking-wider transition ">
                            Add to cart
                        </button>

                        <button
                            class="flex-grow flex items-center justify-center bg-gray-300/60 hover:bg-gray-300/80 transition rounded-md ">
                            <img class="opacity-50 " src="{{ asset('img/love.svg') }}" alt="">
                        </button>
                        <button
                            class="flex-grow flex items-center justify-center bg-gray-300/60 hover:bg-gray-300/80 transition rounded-md ">
                            <img class="opacity-50 " src="{{ asset('img/eye.svg') }}" alt="">
                        </button>
                    </div>

                </div>


            </div>

            <div class="relative bg-white text-gray-700 w-72 min-h-[10rem] shadow-lg rounded-lg overflow-hidden">
                <img class="w-full h-full object-cover" src="{{ asset('img/headphone.jpg') }}" alt="">

                <div class="p-5 flex flex-col gap-3">

                    {{-- badge --}}
                    <div class="flex items-center gap-2">
                        <span class="px-3 py-1 rounded-full text-xs bg-slate-100 ">stock read</span>
                        <span class="px-3 py-1 rounded-full text-xs bg-slate-100 ">officiel store</span>
                    </div>

                    {{-- product title --}}
                    <h2 class="font-semibold font-roboto text-2xl overflow-ellipsis overflow-hidden whitespace-nowrap">
                        Best Headphone Ever
                    </h2>

                    {{-- product price --}}
                    <div>
                        <span class="text-xl font-bold font-roboto">
                            199.00 DH
                        </span>
                    </div>
                    <div class="flex items-center gap-2 mt-1">
                        <span class="text-sm font-roboto line-through opacity-50">
                            499.00 DH
                        </span>
                        <span class="bg-green-400 px-1.5 py-0.5 rounded-md text-xs text-white">
                            save 55%
                        </span>
                    </div>

                    {{-- product rating --}}
                    <span class="flex items-center mt-1">
                        <img src="{{ asset('img/star.svg') }}" alt="">
                        <img src="{{ asset('img/star.svg') }}" alt="">
                        <img src="{{ asset('img/star.svg') }}" alt="">
                        <img src="{{ asset('img/star-half-fill.svg') }}" alt="">
                        <img src="{{ asset('img/star-no-fill.svg') }}" alt="">
                        <span class="text-xs ml-2 text-gray-500"> 2k reviews </span>
                    </span>

                    {{-- product action button --}}
                    <div class="mt-5 flex gap-2">
                        <button
                            class="bg-rose-500/95 hover:bg-rose-600/90 px-6 py-2 rounded-md text-white font-roboto font-medium tracking-wider transition ">
                            Add to cart
                        </button>

                        <button
                            class="flex-grow flex items-center justify-center bg-gray-300/60 hover:bg-gray-300/80 transition rounded-md ">
                            <img class="opacity-50 " src="{{ asset('img/love.svg') }}" alt="">
                        </button>
                        <button
                            class="flex-grow flex items-center justify-center bg-gray-300/60 hover:bg-gray-300/80 transition rounded-md ">
                            <img class="opacity-50 " src="{{ asset('img/eye.svg') }}" alt="">
                        </button>
                    </div>

                </div>
            </div>

            <div class="relative bg-white text-gray-700 w-72 min-h-[10rem] shadow-lg rounded-lg overflow-hidden">
                <img class="w-full h-full object-cover" src="{{ asset('img/headphone.jpg') }}" alt="">

                <button
                    class="absolute start-0 top-0 z-10 p-1.5 py-2 bg-rose-600 px-3 rounded-br-md text-white font-sm font-readex tracking-wider transition ">
                    hot
                </button>
                <div class="p-5 flex flex-col gap-3">

                    {{-- badge --}}
                    <div class="flex items-center gap-2">
                        <span class="px-3 py-1 rounded-full text-xs bg-slate-100 ">stock read</span>
                        <span class="px-3 py-1 rounded-full text-xs bg-slate-100 ">officiel store</span>
                    </div>

                    {{-- product title --}}
                    <h2 class="font-semibold font-roboto text-2xl overflow-ellipsis overflow-hidden whitespace-nowrap">
                        Best Headphone Ever
                    </h2>

                    {{-- product price --}}
                    <div>
                        <span class="text-xl font-bold font-roboto">
                            199.00 DH
                        </span>
                    </div>
                    <div class="flex items-center gap-2 mt-1">
                        <span class="text-sm font-roboto line-through opacity-50">
                            499.00 DH
                        </span>
                        <span class="bg-green-400 px-1.5 py-0.5 rounded-md text-xs text-white">
                            save 55%
                        </span>
                    </div>

                    {{-- product rating --}}
                    <span class="flex items-center mt-1">
                        <img src="{{ asset('img/star.svg') }}" alt="">
                        <img src="{{ asset('img/star.svg') }}" alt="">
                        <img src="{{ asset('img/star.svg') }}" alt="">
                        <img src="{{ asset('img/star-half-fill.svg') }}" alt="">
                        <img src="{{ asset('img/star-no-fill.svg') }}" alt="">
                        <span class="text-xs ml-2 text-gray-500"> 2k reviews </span>
                    </span>

                    {{-- product action button --}}
                    <div class="mt-5 flex gap-2">
                        <button
                            class="bg-rose-500/95 hover:bg-rose-600/90 px-6 py-2 rounded-md text-white font-roboto font-medium tracking-wider transition ">
                            Add to cart
                        </button>

                        <button
                            class="flex-grow flex items-center justify-center bg-gray-300/60 hover:bg-gray-300/80 transition rounded-md ">
                            <img class="opacity-50 " src="{{ asset('img/love.svg') }}" alt="">
                        </button>
                        <button
                            class="flex-grow flex items-center justify-center bg-gray-300/60 hover:bg-gray-300/80 transition rounded-md ">
                            <img class="opacity-50 " src="{{ asset('img/eye.svg') }}" alt="">
                        </button>
                    </div>

                </div>

            </div>
        </div>

    </section>

    <section class="overflow-hidden bg-slate-50 rounded-lg px-22 m-16 h-fit shadow-2xl md:grid md:grid-cols-3">
        <div>
            <img class="w-[50rem] h-96" alt="" src="{{ asset('img/woman (2).jpg') }}"
                class="h-32 w-full object-cover md:h-full" />
        </div>

        <div class="p-4 text-center sm:p-6 md:col-span-2 lg:p-8">
            <p class="text-sm font-semibold text-slate-700 uppercase tracking-widest">Run with the pack</p>

            <h2 class="mt-6 font-black uppercase">
                <span class="text-4xl font-black sm:text-5xl lg:text-6xl text-rose-500"> Get 20% off </span>

                <span class="mt-2 block text-slate-700 text-sm">On your next order over $50</span>
            </h2>

            <a class="mt-8 inline-block w-full bg-rose-500 py-4 text-sm rounded-md font-bold uppercase tracking-widest text-white"
                href="#">
                Get Discount
            </a>

            <p class="mt-8 text-xs font-medium uppercase text-gray-400">
                Offer valid until 24th March, 2024
            </p>
        </div>
    </section>

    {{-- <section>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <header>
                <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Product Collection</h2>

                <p class="mt-4 max-w-md text-gray-500">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque praesentium cumque iure
                    dicta incidunt est ipsam, officia dolor fugit natus?
                </p>
            </header>

            <div class="mt-8 sm:flex sm:items-center sm:justify-between">
                <div class="block sm:hidden">
                    <button
                        class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600">
                        <span class="text-sm font-medium"> Filters & Sorting </span>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-4 rtl:rotate-180">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </div>

                <div class="hidden sm:flex sm:gap-4">
                    <div class="relative">
                        <details class="group [&_summary::-webkit-details-marker]:hidden">
                            <summary
                                class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600">
                                <span class="text-sm font-medium"> Availability </span>

                                <span class="transition group-open:-rotate-180">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </span>
                            </summary>

                            <div
                                class="z-50 group-open:absolute group-open:top-auto group-open:mt-2 ltr:group-open:start-0">
                                <div class="w-96 rounded border border-gray-200 bg-white">
                                    <header class="flex items-center justify-between p-4">
                                        <span class="text-sm text-gray-700"> 0 Selected </span>

                                        <button type="button" class="text-sm text-gray-900 underline underline-offset-4">
                                            Reset
                                        </button>
                                    </header>

                                    <ul class="space-y-1 border-t border-gray-200 p-4">
                                        <li>
                                            <label for="FilterInStock" class="inline-flex items-center gap-2">
                                                <input type="checkbox" id="FilterInStock"
                                                    class="size-5 rounded border-gray-300" />

                                                <span class="text-sm font-medium text-gray-700"> In Stock (5+) </span>
                                            </label>
                                        </li>

                                        <li>
                                            <label for="FilterPreOrder" class="inline-flex items-center gap-2">
                                                <input type="checkbox" id="FilterPreOrder"
                                                    class="size-5 rounded border-gray-300" />

                                                <span class="text-sm font-medium text-gray-700"> Pre Order (3+) </span>
                                            </label>
                                        </li>

                                        <li>
                                            <label for="FilterOutOfStock" class="inline-flex items-center gap-2">
                                                <input type="checkbox" id="FilterOutOfStock"
                                                    class="size-5 rounded border-gray-300" />

                                                <span class="text-sm font-medium text-gray-700"> Out of Stock (10+) </span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </details>
                    </div>

                    <div class="relative">
                        <details class="group [&_summary::-webkit-details-marker]:hidden">
                            <summary
                                class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600">
                                <span class="text-sm font-medium"> Price </span>

                                <span class="transition group-open:-rotate-180">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </span>
                            </summary>

                            <div
                                class="z-50 group-open:absolute group-open:top-auto group-open:mt-2 ltr:group-open:start-0">
                                <div class="w-96 rounded border border-gray-200 bg-white">
                                    <header class="flex items-center justify-between p-4">
                                        <span class="text-sm text-gray-700"> The highest price is $600 </span>

                                        <button type="button" class="text-sm text-gray-900 underline underline-offset-4">
                                            Reset
                                        </button>
                                    </header>

                                    <div class="border-t border-gray-200 p-4">
                                        <div class="flex justify-between gap-4">
                                            <label for="FilterPriceFrom" class="flex items-center gap-2">
                                                <span class="text-sm text-gray-600">$</span>

                                                <input type="number" id="FilterPriceFrom" placeholder="From"
                                                    class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                                            </label>

                                            <label for="FilterPriceTo" class="flex items-center gap-2">
                                                <span class="text-sm text-gray-600">$</span>

                                                <input type="number" id="FilterPriceTo" placeholder="To"
                                                    class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </details>
                    </div>
                </div>

                <div class="hidden sm:block">
                    <label for="SortBy" class="sr-only">SortBy</label>

                    <select id="SortBy" class="h-10 rounded border-gray-300 text-sm">
                        <option>Sort By</option>
                        <option value="Title, DESC">Title, DESC</option>
                        <option value="Title, ASC">Title, ASC</option>
                        <option value="Price, DESC">Price, DESC</option>
                        <option value="Price, ASC">Price, ASC</option>
                    </select>
                </div>
            </div>

            <ul class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <li>
                    <a href="#" class="group relative block overflow-hidden">
                        <button
                            class="absolute end-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
                            <span class="sr-only">Wishlist</span>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                        </button>

                        <img src="https://images.unsplash.com/photo-1599481238640-4c1288750d7a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2664&q=80"
                            alt=""
                            class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72" />

                        <div class="relative border border-gray-100 bg-white p-6">
                            <span class="whitespace-nowrap bg-yellow-400 px-3 py-1.5 text-xs font-medium"> New </span>

                            <h3 class="mt-4 text-lg font-medium text-gray-900">Robot Toy</h3>

                            <p class="mt-1.5 text-sm text-gray-700">$14.99</p>

                            <form class="mt-4">
                                <button
                                    class="block w-full rounded bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105">
                                    Add to Cart
                                </button>
                            </form>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="group relative block overflow-hidden">
                        <button
                            class="absolute end-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
                            <span class="sr-only">Wishlist</span>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                        </button>

                        <img src="https://images.unsplash.com/photo-1599481238640-4c1288750d7a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2664&q=80"
                            alt=""
                            class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72" />

                        <div class="relative border border-gray-100 bg-white p-6">
                            <span class="whitespace-nowrap bg-yellow-400 px-3 py-1.5 text-xs font-medium"> New </span>

                            <h3 class="mt-4 text-lg font-medium text-gray-900">Robot Toy</h3>

                            <p class="mt-1.5 text-sm text-gray-700">$14.99</p>

                            <form class="mt-4">
                                <button
                                    class="block w-full rounded bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105">
                                    Add to Cart
                                </button>
                            </form>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="group relative block overflow-hidden">
                        <button
                            class="absolute end-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
                            <span class="sr-only">Wishlist</span>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                        </button>

                        <img src="https://images.unsplash.com/photo-1599481238640-4c1288750d7a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2664&q=80"
                            alt=""
                            class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72" />

                        <div class="relative border border-gray-100 bg-white p-6">
                            <span class="whitespace-nowrap bg-yellow-400 px-3 py-1.5 text-xs font-medium"> New </span>

                            <h3 class="mt-4 text-lg font-medium text-gray-900">Robot Toy</h3>

                            <p class="mt-1.5 text-sm text-gray-700">$14.99</p>

                            <form class="mt-4">
                                <button
                                    class="block w-full rounded bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105">
                                    Add to Cart
                                </button>
                            </form>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="group relative block overflow-hidden">
                        <button
                            class="absolute end-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
                            <span class="sr-only">Wishlist</span>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                        </button>

                        <img src="https://images.unsplash.com/photo-1599481238640-4c1288750d7a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2664&q=80"
                            alt=""
                            class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72" />

                        <div class="relative border border-gray-100 bg-white p-6">
                            <span class="whitespace-nowrap bg-yellow-400 px-3 py-1.5 text-xs font-medium"> New </span>

                            <h3 class="mt-4 text-lg font-medium text-gray-900">Robot Toy</h3>

                            <p class="mt-1.5 text-sm text-gray-700">$14.99</p>

                            <form class="mt-4">
                                <button
                                    class="block w-full rounded bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105">
                                    Add to Cart
                                </button>
                            </form>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section> --}}
@endsection
@include('layouts.app')
