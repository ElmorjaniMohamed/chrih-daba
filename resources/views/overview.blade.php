@section('content')
    <section >
        <div class="bg-slate-50">
            <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">

                @php
                    $imageArray = json_decode($product->image);
                    $firstImage = $imageArray[0];
                @endphp

                <div class="lg:grid lg:grid-cols-2 lg:items-start lg:gap-x-8">

                    <!-- Image gallery -->
                    <div class="flex flex-col-reverse" x-data="Components.tabs()" @tab-click.window="onTabClick"
                        @tab-keydown.window="onTabKeydown">
                        <!-- Image selector -->
                        <div class="mx-auto mt-6 hidden w-full max-w-2xl sm:block lg:max-w-none">
                            <div class="grid grid-cols-4 gap-6" aria-orientation="horizontal" role="tablist">

                                @foreach($imageArray as $index => $image)
                                    <button
                                        class="image-button relative flex h-24 cursor-pointer items-center justify-center rounded-md bg-white text-sm font-medium uppercase text-gray-900 shadow hover:bg-gray-50 focus:outline-none focus:ring-rose-400 focus:ring focus:ring-opacity-50 focus:ring-offset-4"
                                        type="button" data-image="{{ asset('storage/' . $image) }}">
                                        <span class="absolute inset-0 rounded-md ">
                                            <img class="rounded-md h-full w-full object-cover object-center"
                                                src="{{ asset('storage/' . $image) }}" alt="">
                                        </span>
                                    </button>
                                @endforeach

                            </div>
                        </div>
                        <div class="rounded-md border border-slate-200 ">
                            <div id="displayedImage">
                                <img src="{{ asset('storage/' . $firstImage) }}"
                                    alt="Angled front view with bag zipped and handles upright."
                                    class="h-full w-full object-cover object-center sm:rounded-lg">
                            </div>
                        </div>
                    </div>

                    <!-- Product info -->
                    <div class="mt-10 px-4 sm:mt-16 sm:px-0 lg:mt-0">
                        <h1 class="text-3xl font-bold tracking-tight text-gray-900 font-roboto">{{ $product->name }}</h1>

                        <div class="mt-3">
                            <p class="text-2xl tracking-tight font-semibold text-rose-500 font-readex ">
                                {{ $product->price }}DH</p>
                        </div>

                        <!-- Reviews -->
                        <div class="flex items-center gap-2 mt-2">
                            <span class="text-sm font-roboto line-through opacity-50">
                                499.00 DH
                            </span>
                            <span class="bg-green-400 px-1.5 py-0.5 rounded-md text-xs text-white">
                                save 55%
                            </span>
                        </div>

                        <div class="mt-3">
                            <h3 class="sr-only">Reviews</h3>
                            <span class="flex items-center mt-1">
                                <img src="{{ asset('img/star.svg') }}" alt="">
                                <img src="{{ asset('img/star.svg') }}" alt="">
                                <img src="{{ asset('img/star.svg') }}" alt="">
                                <img src="{{ asset('img/star-half-fill.svg') }}" alt="">
                                <img src="{{ asset('img/star-no-fill.svg') }}" alt="">
                                <span class="text-xs ml-2 text-gray-500"> 2k reviews </span>
                            </span>
                        </div>


                        <div class="mt-6">

                            <div class="space-y-6 text-base text-gray-700 font-roboto">
                                <p>
                                    {!! nl2br($product->description) !!}
                                </p>
                            </div>
                        </div>

                        <form class="mt-6">
                            <!-- Colors -->
                            <div class="flex items-center justify-start gap-2">
                                <h2 class="text-lg font-roboto font-medium">Brand:</h2>
                                <span
                                    class="text-sm text-slate-50 font-readex font-normal rounded-full px-2 py-0.5 bg-amber-500 ">{{ $product->brand }}</span>
                            </div>

                            <div class="mt-10 flex gap-2 w-full">

                                <button type="submit"
                                    class="flex max-w-xs flex-1 items-center justify-center  rounded-md border border-transparent bg-rose-500 font-roboto py-3 px-8 text-base font-medium text-white hover:bg-slate-50 hover:border-rose-500 hover:border-2 hover:text-rose-500 focus:outline-none sm:w-full">Add
                                    to Cart
                                </button>

                                <button
                                    class="w-12 flex items-center justify-center bg-gray-300/60 hover:bg-gray-300/80 transition rounded-md ">
                                    <img class="opacity-50 " src="{{ asset('img/love.svg') }}" alt="">
                                </button>

                            </div>
                        </form>

                        <section aria-labelledby="details-heading" class="mt-12">

                            <div class="divide-y divide-gray-200 border-t">

                                <div x-data="{ open: flase }">
                                    <h3>
                                        <button type="button" x-description="Expand/collapse question button"
                                            class="group relative flex w-full items-center justify-between py-6 text-left"
                                            aria-controls="disclosure-1" @click="open = !open" aria-expanded="false"
                                            x-bind:aria-expanded="open.toString()">
                                            <span class="text-gray-900 text-lg font-roboto font-semibold" x-state:on="Open"
                                                x-state:off="Closed"
                                                :class="{ 'text-rose-500': open, 'text-gray-900': !(open) }">Features</span>
                                            <span class="ml-6 flex items-center">
                                                <svg class="block h-6 w-6 text-gray-400 group-hover:text-gray-500"
                                                    x-state:on="Open" x-state:off="Closed"
                                                    :class="{ 'hidden': open, 'block': !(open) }"
                                                    x-description="Heroicon name: outline/plus"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 4.5v15m7.5-7.5h-15"></path>
                                                </svg>
                                                <svg class="hidden h-6 w-6 text-rose-400 group-hover:text-rose-500"
                                                    x-state:on="Open" x-state:off="Closed"
                                                    :class="{ 'block': open, 'hidden': !(open) }"
                                                    x-description="Heroicon name: outline/minus"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15">
                                                    </path>
                                                </svg>
                                            </span>
                                        </button>
                                    </h3>
                                    <div class="prose prose-sm pb-6" id="disclosure-1" x-show="open">
                                        <ul role="list">

                                            <li>Multiple strap configurations Lorem ipsum dolor sit amet consectetur,
                                                adipisicing elit. Rem voluptatum voluptate quibusdam fuga aliquam alias,
                                                distinctio facere consequatur tempore ullam ex esse dolorem delectus
                                                dignissimos. Placeat nam perferendis aliquid eum.</li>

                                        </ul>
                                    </div>
                                </div>

                                <div x-data="{ open: false }">
                                    <h3>
                                        <button type="button" x-description="Expand/collapse question button"
                                            class="group relative flex w-full items-center justify-between py-6 text-left"
                                            aria-controls="disclosure-1" @click="open = !open" aria-expanded="false"
                                            x-bind:aria-expanded="open.toString()">
                                            <span class="text-gray-900 text-lg font-roboto font-semibold""
                                                x-state:on="Open" x-state:off="Closed"
                                                :class="{ 'text-rose-500': open, 'text-gray-900': !(open) }">Care</span>
                                            <span class="ml-6 flex items-center">
                                                <svg class="block h-6 w-6 text-gray-400 group-hover:text-gray-500"
                                                    x-state:on="Open" x-state:off="Closed"
                                                    :class="{ 'hidden': open, 'block': !(open) }"
                                                    x-description="Heroicon name: outline/plus"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 4.5v15m7.5-7.5h-15"></path>
                                                </svg>
                                                <svg class="hidden h-6 w-6 text-rose-400 group-hover:text-rose-500"
                                                    x-state:on="Open" x-state:off="Closed"
                                                    :class="{ 'block': open, 'hidden': !(open) }"
                                                    x-description="Heroicon name: outline/minus"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15">
                                                    </path>
                                                </svg>
                                            </span>
                                        </button>
                                    </h3>
                                    <div class="prose prose-sm pb-6" id="disclosure-1" x-show="open">
                                        <ul role="list">

                                            <li>Spot clean as needed Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Quos, corrupti natus architecto nostrum at sequi minima eum eius
                                                labore quam temporibus unde hic! Sint fuga iste quibusdam enim perspiciatis
                                                fugiat?</li>

                                        </ul>
                                    </div>
                                </div>

                                <div x-data="{ open: false }">
                                    <h3>
                                        <button type="button" x-description="Expand/collapse question button"
                                            class="group relative flex w-full items-center justify-between py-6 text-left"
                                            aria-controls="disclosure-1" @click="open = !open" aria-expanded="false"
                                            x-bind:aria-expanded="open.toString()">
                                            <span class="text-gray-900 text-lg font-roboto font-semibold""
                                                x-state:on="Open" x-state:off="Closed"
                                                :class="{ 'text-rose-500': open, 'text-gray-900': !(open) }">Shipping</span>
                                            <span class="ml-6 flex items-center">
                                                <svg class="block h-6 w-6 text-gray-400 group-hover:text-gray-500"
                                                    x-state:on="Open" x-state:off="Closed"
                                                    :class="{ 'hidden': open, 'block': !(open) }"
                                                    x-description="Heroicon name: outline/plus"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 4.5v15m7.5-7.5h-15"></path>
                                                </svg>
                                                <svg class="hidden h-6 w-6 text-rose-400 group-hover:text-rose-500"
                                                    x-state:on="Open" x-state:off="Closed"
                                                    :class="{ 'block': open, 'hidden': !(open) }"
                                                    x-description="Heroicon name: outline/minus"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15">
                                                    </path>
                                                </svg>
                                            </span>
                                        </button>
                                    </h3>
                                    <div class="prose prose-sm pb-6" id="disclosure-1" x-show="open">
                                        <ul role="list">

                                            <li>Free shipping on orders over $300 Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit. Voluptatem provident assumenda, veniam quos perferendis et
                                                quis maiores magnam ullam nobis rem amet maxime commodi minima sapiente
                                                pariatur iure deleniti reiciendis.</li>

                                        </ul>
                                    </div>
                                </div>

                                <div x-data="{ open: false }">
                                    <h3>
                                        <button type="button" x-description="Expand/collapse question button"
                                            class="group relative flex w-full items-center justify-between py-6 text-left"
                                            aria-controls="disclosure-1" @click="open = !open" aria-expanded="false"
                                            x-bind:aria-expanded="open.toString()">
                                            <span class="text-gray-900 text-lg font-roboto font-semibold""
                                                x-state:on="Open" x-state:off="Closed"
                                                :class="{ 'text-rose-500': open, 'text-gray-900': !(open) }">Returns</span>
                                            <span class="ml-6 flex items-center">
                                                <svg class="block h-6 w-6 text-gray-400 group-hover:text-gray-500"
                                                    x-state:on="Open" x-state:off="Closed"
                                                    :class="{ 'hidden': open, 'block': !(open) }"
                                                    x-description="Heroicon name: outline/plus"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 4.5v15m7.5-7.5h-15"></path>
                                                </svg>
                                                <svg class="hidden h-6 w-6 text-rose-400 group-hover:text-rose-500"
                                                    x-state:on="Open" x-state:off="Closed"
                                                    :class="{ 'block': open, 'hidden': !(open) }"
                                                    x-description="Heroicon name: outline/minus"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15">
                                                    </path>
                                                </svg>
                                            </span>
                                        </button>
                                    </h3>
                                    <div class="prose prose-sm pb-6" id="disclosure-1" x-show="open">
                                        <ul role="list">

                                            <li>Easy return requests Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Itaque accusantium dolores animi illum beatae fuga quas dolore fugiat.
                                                Et qui fugit consectetur? Corrupti, possimus ducimus? Id consectetur quod
                                                eos explicabo.</li>

                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </section>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.image-button').click(function() {
                var imageUrl = $(this).data('image');
                $('#displayedImage').html('<img src="' + imageUrl + '" alt="" class="h-full w-full object-cover object-center sm:rounded-lg">');
            });
        });
    </script>
@endsection
@include('layouts.app')
