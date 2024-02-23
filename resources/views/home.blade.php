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

    <div class="flex absolute z-50 w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-md  right-4 bottom-5">
        <div class="flex items-center justify-center w-12 bg-emerald-500">
            <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z" />
            </svg>
        </div>

        <div class="px-4 py-2 -mx-3">
            <div class="mx-3">
                <span class="font-semibold text-emerald-500 dark:text-emerald-400">Success</span>
                <p class="text-sm text-gray-600 dark:text-gray-200">Your account was registered!</p>
            </div>
        </div>
    </div>
    <section>
        <!-- Hero section -->
        <div class="relative group bg-slate-50 py-14">
            <!-- Decorative image and overlay -->
            <img src="{{ asset('img/off.svg') }}" class="w-48 h-48 z-40 animate-bounce absolute top-24 left-32"
                alt="">
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
        <div id="productsContainer" class="bg-slate-50 flex items-center justify-center gap-7 py-10">
            @foreach ($products as $product)
                @php

                    $imageArray = json_decode($product->image);
                    $firstImage = $imageArray[0];
                @endphp

                <div class="relative bg-white text-gray-700 w-72 min-h-[10rem] shadow-lg rounded-lg overflow-hidden">
                    <img class="w-full h-56 object-cover" src="{{ asset('storage/' . $firstImage) }}" alt="">

                    <button
                        class="absolute start-4 top-4 z-10 p-1.5 bg-rose-500/95 hover:bg-rose-600/90 px-3 py-0.5 rounded-md text-white font-sm font-readex tracking-wider transition ">
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
                            {{ $product->name }}
                        </h2>

                        {{-- product price --}}
                        <div>
                            <span class="text-xl font-bold font-roboto">
                                {{ $product->price }} DH
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
                                class="bg-rose-500/95 hover:bg-rose-600/90 px-6 py-2 rounded-md text-white font-roboto font-medium tracking-wider transition add-to-cart-btn"
                                data-product-id="{{ $product->id }}">
                                Add to cart
                            </button>

                            <button
                                class="flex-grow flex items-center justify-center bg-gray-300/60 hover:bg-gray-300/80 transition rounded-md ">
                                <img class="opacity-50 " src="{{ asset('img/love.svg') }}" alt="">
                            </button>
                            <a href="{{ route('overview', $product->id) }}"
                                class="flex-grow flex items-center justify-center bg-gray-300/60 hover:bg-gray-300/80 transition rounded-md ">
                                <img class="opacity-50 " src="{{ asset('img/eye.svg') }}" alt="">
                            </a>
                        </div>

                    </div>


                </div>
            @endforeach
        </div>

    </section>

    <section class="overflow-hidden bg-slate-50 rounded-lg px-22 m-16 h-fit shadow-lg md:grid md:grid-cols-3">
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

            <a class="mt-8 inline-block w-full bg-rose-500 hover:bg-gradient-to-r from-rose-500 to-yellow-500 font-roboto py-4 text-sm rounded-md font-bold uppercase tracking-widest text-white"
                href="#">
                Get Discount
            </a>

            <p class="mt-8 text-xs font-medium uppercase text-gray-400">
                Offer valid until 24th March, 2024
            </p>
        </div>
    </section>

    <section>
        <div class="bg-slate-50">
            <div
                class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-12 lg:gap-x-8 lg:py-32 lg:px-8">
                <div class="lg:col-span-4">
                    <h2 class="text-2xl font-bold tracking-tight text-slate-900 font-roboto">Customer Reviews</h2>

                    <div class="mt-3 flex items-center">
                        <div>
                            <div class="flex items-center">

                                <svg class="flex-shrink-0 h-5 w-5 text-yellow-400" x-state:on="Active"
                                    x-state:off="Default"
                                    x-state-description="Active: &quot;text-yellow-400&quot;, Default: &quot;text-gray-300&quot;"
                                    x-description="Heroicon name: mini/star" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <svg class="flex-shrink-0 h-5 w-5 text-yellow-400"
                                    x-state-description="undefined: &quot;text-yellow-400&quot;, undefined: &quot;text-gray-300&quot;"
                                    x-description="Heroicon name: mini/star" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <svg class="flex-shrink-0 h-5 w-5 text-yellow-400"
                                    x-state-description="undefined: &quot;text-yellow-400&quot;, undefined: &quot;text-gray-300&quot;"
                                    x-description="Heroicon name: mini/star" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <svg class="flex-shrink-0 h-5 w-5 text-yellow-400"
                                    x-state-description="undefined: &quot;text-yellow-400&quot;, undefined: &quot;text-gray-300&quot;"
                                    x-description="Heroicon name: mini/star" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <svg class="flex-shrink-0 h-5 w-5 text-gray-300"
                                    x-state-description="undefined: &quot;text-yellow-400&quot;, undefined: &quot;text-gray-300&quot;"
                                    x-description="Heroicon name: mini/star" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>

                            </div>
                            <p class="sr-only">4 out of 5 stars</p>
                        </div>
                        <p class="ml-2 text-sm text-slate-900 font-roboto">Based on 1624 reviews</p>
                    </div>

                    <div class="mt-6">
                        <h3 class="sr-only">Review data</h3>

                        <dl class="space-y-3">

                            <div class="flex items-center text-sm">
                                <dt class="flex flex-1 items-center">
                                    <p class="w-3 font-medium font-roboto text-gray-900">5<span class="sr-only"> star
                                            reviews</span>
                                    </p>
                                    <div aria-hidden="true" class="ml-1 flex flex-1 items-center">
                                        <svg class="flex-shrink-0 h-5 w-5 text-yellow-400"
                                            x-description="Heroicon name: mini/star" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd"></path>
                                        </svg>

                                        <div class="relative ml-3 flex-1">
                                            <div class="h-3 rounded-full border border-gray-200 bg-gray-100"></div>

                                            <div style="width: calc(1019 / 1624 * 100%)"
                                                class="absolute inset-y-0 rounded-full border border-yellow-400 bg-yellow-400">
                                            </div>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="ml-3 w-10 text-right text-sm tabular-nums text-gray-900 font-roboto">63%</dd>
                            </div>

                            <div class="flex items-center text-sm">
                                <dt class="flex flex-1 items-center">
                                    <p class="w-3 font-medium text-gray-900 font-roboto">4<span class="sr-only"> star
                                            reviews</span>
                                    </p>
                                    <div aria-hidden="true" class="ml-1 flex flex-1 items-center">
                                        <svg class="flex-shrink-0 h-5 w-5 text-yellow-400"
                                            x-description="Heroicon name: mini/star" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd"></path>
                                        </svg>

                                        <div class="relative ml-3 flex-1">
                                            <div class="h-3 rounded-full border border-gray-200 bg-gray-100"></div>

                                            <div style="width: calc(162 / 1624 * 100%)"
                                                class="absolute inset-y-0 rounded-full border border-yellow-400 bg-yellow-400">
                                            </div>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="ml-3 w-10 text-right text-sm tabular-nums text-gray-900 font-roboto">10%</dd>
                            </div>

                            <div class="flex items-center text-sm">
                                <dt class="flex flex-1 items-center">
                                    <p class="w-3 font-medium text-gray-900 font-roboto">3<span class="sr-only"> star
                                            reviews</span>
                                    </p>
                                    <div aria-hidden="true" class="ml-1 flex flex-1 items-center">
                                        <svg class="flex-shrink-0 h-5 w-5 text-yellow-400"
                                            x-description="Heroicon name: mini/star" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd"></path>
                                        </svg>

                                        <div class="relative ml-3 flex-1">
                                            <div class="h-3 rounded-full border border-gray-200 bg-gray-100"></div>

                                            <div style="width: calc(97 / 1624 * 100%)"
                                                class="absolute inset-y-0 rounded-full border border-yellow-400 bg-yellow-400">
                                            </div>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="ml-3 w-10 text-right text-sm tabular-nums text-gray-900 font-roboto">6%</dd>
                            </div>

                            <div class="flex items-center text-sm">
                                <dt class="flex flex-1 items-center">
                                    <p class="w-3 font-medium text-gray-900 font-roboto">2<span class="sr-only"> star
                                            reviews</span>
                                    </p>
                                    <div aria-hidden="true" class="ml-1 flex flex-1 items-center">
                                        <svg class="flex-shrink-0 h-5 w-5 text-yellow-400"
                                            x-description="Heroicon name: mini/star" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd"></path>
                                        </svg>

                                        <div class="relative ml-3 flex-1">
                                            <div class="h-3 rounded-full border border-gray-200 bg-gray-100"></div>

                                            <div style="width: calc(199 / 1624 * 100%)"
                                                class="absolute inset-y-0 rounded-full border border-yellow-400 bg-yellow-400">
                                            </div>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="ml-3 w-10 text-right text-sm tabular-nums text-gray-900 font-roboto">12%</dd>
                            </div>

                            <div class="flex items-center text-sm">
                                <dt class="flex flex-1 items-center">
                                    <p class="w-3 font-medium text-gray-900 font-roboto">1<span class="sr-only"> star
                                            reviews</span>
                                    </p>
                                    <div aria-hidden="true" class="ml-1 flex flex-1 items-center">
                                        <svg class="flex-shrink-0 h-5 w-5 text-yellow-400"
                                            x-description="Heroicon name: mini/star" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd"></path>
                                        </svg>

                                        <div class="relative ml-3 flex-1">
                                            <div class="h-3 rounded-full border border-gray-200 bg-gray-100"></div>

                                            <div style="width: calc(147 / 1624 * 100%)"
                                                class="absolute inset-y-0 rounded-full border border-yellow-400 bg-yellow-400">
                                            </div>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="ml-3 w-10 text-right text-sm tabular-nums font-roboto text-gray-900">9%</dd>
                            </div>

                        </dl>
                    </div>

                    <div class="mt-10">
                        <h3 class="text-lg font-medium text-gray-900 font-roboto">Share your thoughts</h3>
                        <p class="mt-1 text-sm text-gray-600 font-roboto">If you’ve used this product, share your thoughts
                            with other
                            customers</p>

                        <a href="#"
                            class="mt-6 inline-flex w-full items-center justify-center rounded-md hover:border-2 hover:border-rose-500 bg-rose-500 hover:bg-slate-50 font-roboto py-3 px-8 text-lg font-medium text-slate-50 hover:text-rose-500 sm:w-auto lg:w-full">Write
                            a review</a>
                    </div>
                </div>

                <div class="mt-16 lg:col-span-7 lg:col-start-6 lg:mt-0">
                    <h3 class="sr-only">Recent reviews</h3>

                    <div class="flow-root">
                        <div class="-my-12 divide-y divide-gray-200">

                            <div class="py-12">
                                <div class="flex items-center">
                                    <img src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=256&amp;h=256&amp;q=80"
                                        alt="Emily Selman." class="h-12 w-12 rounded-full">
                                    <div class="ml-4">
                                        <h4 class="text-sm font-bold text-gray-900">Emily Selman</h4>
                                        <div class="mt-1 flex items-center">

                                            <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" x-state:on="Active"
                                                x-state:off="Default"
                                                x-state-description="Active: &quot;text-yellow-400&quot;, Default: &quot;text-gray-300&quot;"
                                                x-description="Heroicon name: mini/star"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                    clip-rule="evenodd"></path>
                                            </svg>

                                            <svg class="text-yellow-400 h-5 w-5 flex-shrink-0"
                                                x-state-description="undefined: &quot;text-yellow-400&quot;, undefined: &quot;text-gray-300&quot;"
                                                x-description="Heroicon name: mini/star"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                    clip-rule="evenodd"></path>
                                            </svg>

                                            <svg class="text-yellow-400 h-5 w-5 flex-shrink-0"
                                                x-state-description="undefined: &quot;text-yellow-400&quot;, undefined: &quot;text-gray-300&quot;"
                                                x-description="Heroicon name: mini/star"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                    clip-rule="evenodd"></path>
                                            </svg>

                                            <svg class="text-yellow-400 h-5 w-5 flex-shrink-0"
                                                x-state-description="undefined: &quot;text-yellow-400&quot;, undefined: &quot;text-gray-300&quot;"
                                                x-description="Heroicon name: mini/star"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                    clip-rule="evenodd"></path>
                                            </svg>

                                            <svg class="text-yellow-400 h-5 w-5 flex-shrink-0"
                                                x-state-description="undefined: &quot;text-yellow-400&quot;, undefined: &quot;text-gray-300&quot;"
                                                x-description="Heroicon name: mini/star"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                    clip-rule="evenodd"></path>
                                            </svg>

                                        </div>
                                        <p class="sr-only">5 out of 5 stars</p>
                                    </div>
                                </div>

                                <div class="mt-4 space-y-6 text-base italic font-lora text-gray-600">
                                    <p>This is the bag of my dreams. I took it on my last vacation and was able to fit an
                                        absurd amount of snacks for the many long and hungry flights.</p>
                                </div>
                            </div>

                            <div class="py-12">
                                <div class="flex items-center">
                                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=256&amp;h=256&amp;q=80"
                                        alt="Hector Gibbons." class="h-12 w-12 rounded-full">
                                    <div class="ml-4">
                                        <h4 class="text-sm font-bold text-gray-900 font-roboto">Hector Gibbons</h4>
                                        <div class="mt-1 flex items-center">

                                            <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" x-state:on="Active"
                                                x-state:off="Default"
                                                x-state-description="Active: &quot;text-yellow-400&quot;, Default: &quot;text-gray-300&quot;"
                                                x-description="Heroicon name: mini/star"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                    clip-rule="evenodd"></path>
                                            </svg>

                                            <svg class="text-yellow-400 h-5 w-5 flex-shrink-0"
                                                x-state-description="undefined: &quot;text-yellow-400&quot;, undefined: &quot;text-gray-300&quot;"
                                                x-description="Heroicon name: mini/star"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                    clip-rule="evenodd"></path>
                                            </svg>

                                            <svg class="text-yellow-400 h-5 w-5 flex-shrink-0"
                                                x-state-description="undefined: &quot;text-yellow-400&quot;, undefined: &quot;text-gray-300&quot;"
                                                x-description="Heroicon name: mini/star"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                    clip-rule="evenodd"></path>
                                            </svg>

                                            <svg class="text-yellow-400 h-5 w-5 flex-shrink-0"
                                                x-state-description="undefined: &quot;text-yellow-400&quot;, undefined: &quot;text-gray-300&quot;"
                                                x-description="Heroicon name: mini/star"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                    clip-rule="evenodd"></path>
                                            </svg>

                                            <svg class="text-yellow-400 h-5 w-5 flex-shrink-0"
                                                x-state-description="undefined: &quot;text-yellow-400&quot;, undefined: &quot;text-gray-300&quot;"
                                                x-description="Heroicon name: mini/star"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                    clip-rule="evenodd"></path>
                                            </svg>

                                        </div>
                                        <p class="sr-only">5 out of 5 stars</p>
                                    </div>
                                </div>

                                <div class="mt-4 space-y-6 text-base italic text-gray-600 font-lora">
                                    <p>Before getting the Ruck Snack, I struggled my whole life with pulverized snacks,
                                        endless crumbs, and other heartbreaking snack catastrophes. Now, I can stow my
                                        snacks with confidence and style!</p>
                                </div>
                            </div>

                            <div class="py-12">
                                <div class="flex items-center">
                                    <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&amp;ixqx=oilqXxSqey&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                        alt="Mark Edwards." class="h-12 w-12 rounded-full">
                                    <div class="ml-4">
                                        <h4 class="text-sm font-bold text-gray-900 font-roboto">Mark Edwards</h4>
                                        <div class="mt-1 flex items-center">

                                            <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" x-state:on="Active"
                                                x-state:off="Default"
                                                x-state-description="Active: &quot;text-yellow-400&quot;, Default: &quot;text-gray-300&quot;"
                                                x-description="Heroicon name: mini/star"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                    clip-rule="evenodd"></path>
                                            </svg>

                                            <svg class="text-yellow-400 h-5 w-5 flex-shrink-0"
                                                x-state-description="undefined: &quot;text-yellow-400&quot;, undefined: &quot;text-gray-300&quot;"
                                                x-description="Heroicon name: mini/star"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                    clip-rule="evenodd"></path>
                                            </svg>

                                            <svg class="text-yellow-400 h-5 w-5 flex-shrink-0"
                                                x-state-description="undefined: &quot;text-yellow-400&quot;, undefined: &quot;text-gray-300&quot;"
                                                x-description="Heroicon name: mini/star"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                    clip-rule="evenodd"></path>
                                            </svg>

                                            <svg class="text-yellow-400 h-5 w-5 flex-shrink-0"
                                                x-state-description="undefined: &quot;text-yellow-400&quot;, undefined: &quot;text-gray-300&quot;"
                                                x-description="Heroicon name: mini/star"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                    clip-rule="evenodd"></path>
                                            </svg>

                                            <svg class="text-gray-300 h-5 w-5 flex-shrink-0"
                                                x-state-description="undefined: &quot;text-yellow-400&quot;, undefined: &quot;text-gray-300&quot;"
                                                x-description="Heroicon name: mini/star"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                    clip-rule="evenodd"></path>
                                            </svg>

                                        </div>
                                        <p class="sr-only">4 out of 5 stars</p>
                                    </div>
                                </div>

                                <div class="mt-4 space-y-6 text-base italic text-gray-600 font-lora">
                                    <p>I love how versatile this bag is. It can hold anything ranging from cookies that come
                                        in trays to cookies that come in tins.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');

            addToCartButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const productId = this.getAttribute('data-product-id');
                    addToCart(productId);
                });
            });

            function addToCart(productId) {
                fetch(`/cart/${productId}`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            productId: productId
                        })
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Failed to add product to cart.');
                        }
                        return response.json();
                    })
                    .then(data => {
                        Toastify({
                            text: data.message,
                            duration: 5000,
                            backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                            className: "info",
                        }).showToast();
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        Toastify({
                            text: 'Failed to add product to cart. Please try again later.',
                            duration: 5000,
                            backgroundColor: "linear-gradient(to right, #ff416c, #ff4b2b)",
                            className: "error",
                        }).showToast();
                    });
            }
        });
    </script>
@endsection

@include('layouts.app')

