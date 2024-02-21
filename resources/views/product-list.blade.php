@section('content')
<div class="bg-white">
    <div x-data="{ open: false }" @keydown.window.escape="open = false">
        <!-- Mobile filter dialog -->

        <div x-show="open" class="relative z-40 lg:hidden"
            x-description="Off-canvas filters for mobile, show/hide based on off-canvas filters state." x-ref="dialog"
            aria-modal="true">

            <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                x-description="Off-canvas menu backdrop, show/hide based on off-canvas menu state."
                class="fixed inset-0 bg-black bg-opacity-25"></div>


            <div class="fixed inset-0 z-40 flex">

                <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform"
                    x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                    x-transition:leave="transition ease-in-out duration-300 transform"
                    x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                    x-description="Off-canvas menu, show/hide based on off-canvas menu state."
                    class="relative ml-auto flex h-full w-full max-w-xs flex-col overflow-y-auto bg-white py-4 pb-12 shadow-xl"
                    @click.away="open = false">
                    <div class="flex items-center justify-between px-4">
                        <h2 class="text-lg font-medium text-gray-900">Filters</h2>
                        <button type="button"
                            class="-mr-2 flex h-10 w-10 items-center justify-center rounded-md bg-white p-2 text-gray-400"
                            @click="open = false">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" x-description="Heroicon name: outline/x-mark"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Filters -->
                    <form class="mt-4 border-t border-gray-200">
                        <h3 class="sr-only">Categories</h3>

                        <div x-data="{ open: false }" class="border-t border-gray-200 px-4 py-6">
                            <h3 class="-mx-2 -my-3 flow-root">
                                <button type="button" x-description="Expand/collapse section button"
                                    class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500"
                                    aria-controls="filter-section-mobile-0" @click="open = !open" aria-expanded="false"
                                    x-bind:aria-expanded="open.toString()">
                                    <span class="font-medium text-gray-900">Color</span>
                                    <span class="ml-6 flex items-center">
                                        <svg class="h-5 w-5" x-description="Expand icon, show/hide based on section open state.

Heroicon name: mini/plus" x-show="!(open)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path
                                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z">
                                            </path>
                                        </svg>
                                        <svg class="h-5 w-5" x-description="Collapse icon, show/hide based on section open state.

Heroicon name: mini/minus" x-show="open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                </button>
                            </h3>
                            <div class="pt-6" x-description="Filter section, show/hide based on section state."
                                id="filter-section-mobile-0" x-show="open">
                                <div class="space-y-6">

                                    <div class="flex items-center">
                                        <input id="filter-mobile-color-0" name="color[]" value="white" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-color-0"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">White</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-mobile-color-1" name="color[]" value="beige" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-color-1"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">Beige</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-mobile-color-2" name="color[]" value="blue" type="checkbox"
                                            checked=""
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-color-2"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">Blue</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-mobile-color-3" name="color[]" value="brown" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-color-3"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">Brown</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-mobile-color-4" name="color[]" value="green" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-color-4"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">Green</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-mobile-color-5" name="color[]" value="purple" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-color-5"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">Purple</label>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div x-data="{ open: false }" class="border-t border-gray-200 px-4 py-6">
                            <h3 class="-mx-2 -my-3 flow-root">
                                <button type="button" x-description="Expand/collapse section button"
                                    class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500"
                                    aria-controls="filter-section-mobile-1" @click="open = !open" aria-expanded="false"
                                    x-bind:aria-expanded="open.toString()">
                                    <span class="font-medium text-gray-900">Category</span>
                                    <span class="ml-6 flex items-center">
                                        <svg class="h-5 w-5" x-description="Expand icon, show/hide based on section open state.

Heroicon name: mini/plus" x-show="!(open)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path
                                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z">
                                            </path>
                                        </svg>
                                        <svg class="h-5 w-5" x-description="Collapse icon, show/hide based on section open state.

Heroicon name: mini/minus" x-show="open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                </button>
                            </h3>
                            <div class="pt-6" x-description="Filter section, show/hide based on section state."
                                id="filter-section-mobile-1" x-show="open">
                                <div class="space-y-6">

                                    <div class="flex items-center">
                                        <input id="filter-mobile-category-0" name="category[]" value="new-arrivals"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-category-0"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">Product List</label>
                                    </div>
                                    
                                    <div class="flex items-center">
                                        <input id="filter-mobile-category-1" name="category[]" value="sale"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-category-1"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">Sale</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-mobile-category-2" name="category[]" value="travel"
                                            type="checkbox" checked=""
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-category-2"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">Travel</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-mobile-category-3" name="category[]" value="organization"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-category-3"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">Organization</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-mobile-category-4" name="category[]" value="accessories"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-category-4"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">Accessories</label>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div x-data="{ open: false }" class="border-t border-gray-200 px-4 py-6">
                            <h3 class="-mx-2 -my-3 flow-root">
                                <button type="button" x-description="Expand/collapse section button"
                                    class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500"
                                    aria-controls="filter-section-mobile-2" @click="open = !open" aria-expanded="false"
                                    x-bind:aria-expanded="open.toString()">
                                    <span class="font-medium text-gray-900">Size</span>
                                    <span class="ml-6 flex items-center">
                                        <svg class="h-5 w-5" x-description="Expand icon, show/hide based on section open state.

Heroicon name: mini/plus" x-show="!(open)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path
                                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z">
                                            </path>
                                        </svg>
                                        <svg class="h-5 w-5" x-description="Collapse icon, show/hide based on section open state.

Heroicon name: mini/minus" x-show="open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                </button>
                            </h3>
                            <div class="pt-6" x-description="Filter section, show/hide based on section state."
                                id="filter-section-mobile-2" x-show="open">
                                <div class="space-y-6">

                                    <div class="flex items-center">
                                        <input id="filter-mobile-size-0" name="size[]" value="2l" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-size-0"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">2L</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-mobile-size-1" name="size[]" value="6l" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-size-1"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">6L</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-mobile-size-2" name="size[]" value="12l" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-size-2"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">12L</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-mobile-size-3" name="size[]" value="18l" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-size-3"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">18L</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-mobile-size-4" name="size[]" value="20l" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-size-4"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">20L</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-mobile-size-5" name="size[]" value="40l" type="checkbox"
                                            checked=""
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-size-5"
                                            class="ml-3 min-w-0 flex-1 text-gray-500">40L</label>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>


        <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex items-baseline justify-between border-b border-gray-200 pt-24 pb-6">
                <h1 class="text-4xl font-bold tracking-tight text-gray-900  font-roboto">Product List</h1>
                <div class="relative">
                                    <label for="Search" class="sr-only "> Search </label>

                                    <input
                                        type="text"
                                        id="Search"
                                        placeholder="Search for..."
                                        class="w-80 rounded-lg border border-slate-400 py-2.5 px-4 pe-10 shadow-sm sm:text-sm focus:outline-none focus:ring-slate-400 focus:border-slate-400"
                                    />

                                    <span class="absolute inset-y-0 end-0 grid w-10 place-content-center">
                                        <button type="button" class="text-rose-500 hover:text-rose-500">
                                        <span class="sr-only ">Search</span>

                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="h-4 w-4"
                                        >
                                            <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"
                                            />
                                        </svg>
                                        </button>
                                    </span>
                                    </div>
 
                <div class="flex items-center">
                    
                    <div x-data="Components.menu({ open: false })" x-init="init()"
                        @keydown.escape.stop="open = false; focusButton()" @click.away="onClickAway($event)"
                        class="relative inline-block text-left outline-none">
                        <div class="hidden sm:block ">
                            <label for="SortBy" class="sr-only">Sort By</label>

                            <select id="SortBy" class="h-10 px-1  rounded-sm border-none text-sm outline-none">
                                <option>Sort By</option>
                                <option class="py-1  " value="Title, DESC">Title, DESC</option>
                                <option class="py-1" value="Title, ASC">Title, ASC</option>
                                <option class="py-1" value="Price, DESC">Price, DESC</option>
                                <option class="py-1" value="Price, ASC">Price, ASC</option>
                            </select>
                        </div>


                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none"
                            x-ref="menu-items" x-description="Dropdown menu, show/hide based on menu state."
                            x-bind:aria-activedescendant="activeDescendant" role="menu" aria-orientation="vertical"
                            aria-labelledby="menu-button" tabindex="-1" @keydown.arrow-up.prevent="onArrowUp()"
                            @keydown.arrow-down.prevent="onArrowDown()" @keydown.tab="open = false"
                            @keydown.enter.prevent="open = false; focusButton()"
                            @keyup.space.prevent="open = false; focusButton()">
                            <div class="py-1" role="none">

                                <a href="#" class="font-medium text-gray-900 block px-4 py-2 text-sm"
                                    x-state:on="Active" x-state:off="Not Active" x-state:on:option.current="Selected"
                                    x-state:off:option.current="Not Selected"
                                    x-state-description="Selected: &quot;font-medium text-gray-900&quot;, Not Selected: &quot;text-gray-500&quot;"
                                    :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1"
                                    id="menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1"
                                    @click="open = false; focusButton()">Most Popular</a>

                                <a href="#" class="text-gray-500 block px-4 py-2 text-sm"
                                    x-state-description="undefined: &quot;font-medium text-gray-900&quot;, undefined: &quot;text-gray-500&quot;"
                                    :class="{ 'bg-gray-100': activeIndex === 1 }" role="menuitem" tabindex="-1"
                                    id="menu-item-1" @mouseenter="activeIndex = 1" @mouseleave="activeIndex = -1"
                                    @click="open = false; focusButton()">Best Rating</a>

                                <a href="#" class="text-gray-500 block px-4 py-2 text-sm"
                                    x-state-description="undefined: &quot;font-medium text-gray-900&quot;, undefined: &quot;text-gray-500&quot;"
                                    :class="{ 'bg-gray-100': activeIndex === 2 }" role="menuitem" tabindex="-1"
                                    id="menu-item-2" @mouseenter="activeIndex = 2" @mouseleave="activeIndex = -1"
                                    @click="open = false; focusButton()">Newest</a>

                                <a href="#" class="text-gray-500 block px-4 py-2 text-sm"
                                    x-state-description="undefined: &quot;font-medium text-gray-900&quot;, undefined: &quot;text-gray-500&quot;"
                                    :class="{ 'bg-gray-100': activeIndex === 3 }" role="menuitem" tabindex="-1"
                                    id="menu-item-3" @mouseenter="activeIndex = 3" @mouseleave="activeIndex = -1"
                                    @click="open = false; focusButton()">Price: Low to High</a>

                                <a href="#" class="text-gray-500 block px-4 py-2 text-sm"
                                    x-state-description="undefined: &quot;font-medium text-gray-900&quot;, undefined: &quot;text-gray-500&quot;"
                                    :class="{ 'bg-gray-100': activeIndex === 4 }" role="menuitem" tabindex="-1"
                                    id="menu-item-4" @mouseenter="activeIndex = 4" @mouseleave="activeIndex = -1"
                                    @click="open = false; focusButton()">Price: High to Low</a>

                            </div>
                        </div>

                    </div>

                    <button type="button" class="-m-2 ml-5 p-2 text-gray-400 hover:text-gray-500 sm:ml-7">
                        <span class="sr-only">View grid</span>
                        <svg class="h-5 w-5" aria-hidden="true" x-description="Heroicon name: mini/squares-2x2"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M4.25 2A2.25 2.25 0 002 4.25v2.5A2.25 2.25 0 004.25 9h2.5A2.25 2.25 0 009 6.75v-2.5A2.25 2.25 0 006.75 2h-2.5zm0 9A2.25 2.25 0 002 13.25v2.5A2.25 2.25 0 004.25 18h2.5A2.25 2.25 0 009 15.75v-2.5A2.25 2.25 0 006.75 11h-2.5zm9-9A2.25 2.25 0 0011 4.25v2.5A2.25 2.25 0 0013.25 9h2.5A2.25 2.25 0 0018 6.75v-2.5A2.25 2.25 0 0015.75 2h-2.5zm0 9A2.25 2.25 0 0011 13.25v2.5A2.25 2.25 0 0013.25 18h2.5A2.25 2.25 0 0018 15.75v-2.5A2.25 2.25 0 0015.75 11h-2.5z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <button type="button" class="-m-2 ml-4 p-2 text-gray-400 hover:text-gray-500 sm:ml-6 lg:hidden"
                        @click="open = true">
                        <span class="sr-only">Filters</span>
                        <svg class="h-5 w-5" aria-hidden="true" x-description="Heroicon name: mini/funnel"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 01.628.74v2.288a2.25 2.25 0 01-.659 1.59l-4.682 4.683a2.25 2.25 0 00-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 018 18.25v-5.757a2.25 2.25 0 00-.659-1.591L2.659 6.22A2.25 2.25 0 012 4.629V2.34a.75.75 0 01.628-.74z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <section aria-labelledby="products-heading" class="pt-6 pb-24">
                <h2 id="products-heading" class="sr-only">Products</h2>

                <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
                    <!-- Filters -->
                    <form class="hidden lg:block">
                        <h3 class="sr-only">Categories</h3>



                        <div x-data="{ open: false }" class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                                <button type="button" x-description="Expand/collapse section button"
                                    class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                                    aria-controls="filter-section-0" @click="open = !open" aria-expanded="false"
                                    x-bind:aria-expanded="open.toString()">
                                    <span class="font-medium text-gray-900">CATEGORY</span>
                                    <span class="ml-6 flex items-center">
                                        <svg class="h-5 w-5" x-description="Expand icon, show/hide based on section open state.

Heroicon name: mini/plus" x-show="!(open)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path
                                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z">
                                            </path>
                                        </svg>
                                        <svg class="h-5 w-5" x-description="Collapse icon, show/hide based on section open state.

Heroicon name: mini/minus" x-show="open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                </button>
                            </h3>
                            <div class="pt-6" x-description="Filter section, show/hide based on section state."
                                id="filter-section-0" x-show="open">
                                <div class="space-y-4">

                                    <div class="flex items-center">
                                        <input id="filter-color-0" name="color[]" value="white" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-color-0" class="ml-3 text-sm text-gray-600">White</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-color-1" name="color[]" value="beige" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-color-1" class="ml-3 text-sm text-gray-600">Beige</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-color-2" name="color[]" value="blue" type="checkbox"
                                            checked=""
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-color-2" class="ml-3 text-sm text-gray-600">Blue</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-color-3" name="color[]" value="brown" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-color-3" class="ml-3 text-sm text-gray-600">Brown</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-color-4" name="color[]" value="green" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-color-4" class="ml-3 text-sm text-gray-600">Green</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-color-5" name="color[]" value="purple" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-color-5" class="ml-3 text-sm text-gray-600">Purple</label>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div x-data="{ open: false }" class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                                <button type="button" x-description="Expand/collapse section button"
                                    class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                                    aria-controls="filter-section-1" @click="open = !open" aria-expanded="false"
                                    x-bind:aria-expanded="open.toString()">
                                    <span class="font-medium text-gray-900">BRAND</span>
                                    <span class="ml-6 flex items-center">
                                        <svg class="h-5 w-5" x-description="Expand icon, show/hide based on section open state.

Heroicon name: mini/plus" x-show="!(open)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path
                                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z">
                                            </path>
                                        </svg>
                                        <svg class="h-5 w-5" x-description="Collapse icon, show/hide based on section open state.

Heroicon name: mini/minus" x-show="open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                </button>
                            </h3>
                            <div class="pt-6" x-description="Filter section, show/hide based on section state."
                                id="filter-section-1" x-show="open">
                                <div class="space-y-4">

                                    <div class="flex items-center">
                                        <input id="filter-category-0" name="category[]" value="new-arrivals"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-category-0" class="ml-3 text-sm text-gray-600">New
                                            Arrivals</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-category-1" name="category[]" value="sale" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-category-1" class="ml-3 text-sm text-gray-600">Sale</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-category-2" name="category[]" value="travel" type="checkbox"
                                            checked=""
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-category-2" class="ml-3 text-sm text-gray-600">Travel</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-category-3" name="category[]" value="organization"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-category-3"
                                            class="ml-3 text-sm text-gray-600">Organization</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-category-4" name="category[]" value="accessories"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-category-4"
                                            class="ml-3 text-sm text-gray-600">Accessories</label>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div x-data="{ open: false }" class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                                <button type="button" x-description="Expand/collapse section button"
                                    class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                                    aria-controls="filter-section-2" @click="open = !open" aria-expanded="false"
                                    x-bind:aria-expanded="open.toString()">
                                    <span class="font-medium text-gray-900">PRICE</span>
                                    <span class="ml-6 flex items-center">
                                        <svg class="h-5 w-5" x-description="Expand icon, show/hide based on section open state.

Heroicon name: mini/plus" x-show="!(open)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path
                                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z">
                                            </path>
                                        </svg>
                                        <svg class="h-5 w-5" x-description="Collapse icon, show/hide based on section open state.

Heroicon name: mini/minus" x-show="open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                </button>
                            </h3>
                            <div class="pt-6" x-description="Filter section, show/hide based on section state."
                                id="filter-section-2" x-show="open">
                                <div class="space-y-4">

                                    <div class="flex items-center">
                                        <input id="filter-size-0" name="size[]" value="2l" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-size-0" class="ml-3 text-sm text-gray-600">2L</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-size-1" name="size[]" value="6l" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-size-1" class="ml-3 text-sm text-gray-600">6L</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-size-2" name="size[]" value="12l" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-size-2" class="ml-3 text-sm text-gray-600">12L</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-size-3" name="size[]" value="18l" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-size-3" class="ml-3 text-sm text-gray-600">18L</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-size-4" name="size[]" value="20l" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-size-4" class="ml-3 text-sm text-gray-600">20L</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-size-5" name="size[]" value="40l" type="checkbox" checked=""
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-size-5" class="ml-3 text-sm text-gray-600">40L</label>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </form>

                    <!-- Product grid -->
                    <div class="lg:col-span-3 w-full">
                        <!-- Replace with your content -->
                        <div
                            class="h-96 w-full rounded-lg border-4 border-dashed border-gray-200 lg:h-full lg:max-w-full">
                            <div class="grid grid-cols-3 gap-7 p-6">
                                <div class="">
                                    <!-- Première carte -->
                                    <div
                                        class="relative lg:col-span-1 bg-white text-gray-700 min-h-[10rem] border border-slate-200 rounded-lg overflow-hidden">
                                        <img class="w-full h-full object-cover" src="{{ asset('img/headphone.jpg') }}"
                                            alt="">

                                        <div class="p-5 flex flex-col gap-3">

                                            {{-- badge --}}
                                            <div class="flex items-center gap-2">
                                                <span class="px-3 py-1 rounded-full text-xs bg-slate-100 ">stock
                                                    read</span>
                                                <span class="px-3 py-1 rounded-full text-xs bg-slate-100 ">officiel
                                                    store</span>
                                            </div>

                                            {{-- product title --}}
                                            <h2
                                                class="font-semibold font-roboto text-2xl overflow-ellipsis overflow-hidden whitespace-nowrap">
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
                                <div class="">
                                    <!-- Première carte -->
                                    <div
                                        class="relative lg:col-span-1 bg-white text-gray-700 min-h-[10rem] border border-slate-200 rounded-lg overflow-hidden">
                                        <img class="w-full h-full object-cover" src="{{ asset('img/headphone.jpg') }}"
                                            alt="">

                                        <div class="p-5 flex flex-col gap-3">

                                            {{-- badge --}}
                                            <div class="flex items-center gap-2">
                                                <span class="px-3 py-1 rounded-full text-xs bg-slate-100 ">stock
                                                    read</span>
                                                <span class="px-3 py-1 rounded-full text-xs bg-slate-100 ">officiel
                                                    store</span>
                                            </div>

                                            {{-- product title --}}
                                            <h2
                                                class="font-semibold font-roboto text-2xl overflow-ellipsis overflow-hidden whitespace-nowrap">
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
                                <div class="">
                                    <!-- Première carte -->
                                    <div
                                        class="relative lg:col-span-1 bg-white text-gray-700 min-h-[10rem] border border-slate-200 rounded-lg overflow-hidden">
                                        <img class="w-full h-full object-cover" src="{{ asset('img/headphone.jpg') }}"
                                            alt="">

                                        <div class="p-5 flex flex-col gap-3">

                                            {{-- badge --}}
                                            <div class="flex items-center gap-2">
                                                <span class="px-3 py-1 rounded-full text-xs bg-slate-100 ">stock
                                                    read</span>
                                                <span class="px-3 py-1 rounded-full text-xs bg-slate-100 ">officiel
                                                    store</span>
                                            </div>

                                            {{-- product title --}}
                                            <h2
                                                class="font-semibold font-roboto text-2xl overflow-ellipsis overflow-hidden whitespace-nowrap">
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

                            </div>
                            <div class="grid grid-cols-3 gap-7 p-4">
                                <div class="">
                                    <!-- Première carte -->
                                    <div
                                        class="relative lg:col-span-1 bg-white text-gray-700 min-h-[10rem] border border-slate-200 rounded-lg overflow-hidden">
                                        <img class="w-full h-full object-cover" src="{{ asset('img/headphone.jpg') }}"
                                            alt="">

                                        <div class="p-5 flex flex-col gap-3">

                                            {{-- badge --}}
                                            <div class="flex items-center gap-2">
                                                <span class="px-3 py-1 rounded-full text-xs bg-slate-100 ">stock
                                                    read</span>
                                                <span class="px-3 py-1 rounded-full text-xs bg-slate-100 ">officiel
                                                    store</span>
                                            </div>

                                            {{-- product title --}}
                                            <h2
                                                class="font-semibold font-roboto text-2xl overflow-ellipsis overflow-hidden whitespace-nowrap">
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
                                <div class="">
                                    <!-- Première carte -->
                                    <div
                                        class="relative lg:col-span-1 bg-white text-gray-700 min-h-[10rem] border border-slate-200 rounded-lg overflow-hidden">
                                        <img class="w-full h-full object-cover" src="{{ asset('img/headphone.jpg') }}"
                                            alt="">

                                        <div class="p-5 flex flex-col gap-3">

                                            {{-- badge --}}
                                            <div class="flex items-center gap-2">
                                                <span class="px-3 py-1 rounded-full text-xs bg-slate-100 ">stock
                                                    read</span>
                                                <span class="px-3 py-1 rounded-full text-xs bg-slate-100 ">officiel
                                                    store</span>
                                            </div>

                                            {{-- product title --}}
                                            <h2
                                                class="font-semibold font-roboto text-2xl overflow-ellipsis overflow-hidden whitespace-nowrap">
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
                                <div class="">
                                    <!-- Première carte -->
                                    <div
                                        class="relative lg:col-span-1 bg-white text-gray-700 min-h-[10rem] border border-slate-200 rounded-lg overflow-hidden">
                                        <img class="w-full h-full object-cover" src="{{ asset('img/headphone.jpg') }}"
                                            alt="">

                                        <div class="p-5 flex flex-col gap-3">

                                            {{-- badge --}}
                                            <div class="flex items-center gap-2">
                                                <span class="px-3 py-1 rounded-full text-xs bg-slate-100 ">stock
                                                    read</span>
                                                <span class="px-3 py-1 rounded-full text-xs bg-slate-100 ">officiel
                                                    store</span>
                                            </div>

                                            {{-- product title --}}
                                            <h2
                                                class="font-semibold font-roboto text-2xl overflow-ellipsis overflow-hidden whitespace-nowrap">
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

                            </div>

                            <ol class="flex justify-center gap-1 text-xs font-medium font-roboto py-5">
                                <li>
                                    <a href="#"
                                        class="inline-flex size-8 items-center justify-center rounded border border-gray-100 bg-white text-gray-900 rtl:rotate-180">
                                        <span class="sr-only">Prev Page</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </li>

                                <li>
                                    <a href="#"
                                        class="block size-8 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900">
                                        1
                                    </a>
                                </li>

                                <li
                                    class="block size-8 rounded border-rose-500 bg-rose-500 text-center leading-8 text-white">
                                    2
                                </li>

                                <li>
                                    <a href="#"
                                        class="block size-8 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900">
                                        3
                                    </a>
                                </li>

                                <li>
                                    <a href="#"
                                        class="block size-8 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900">
                                        4
                                    </a>
                                </li>

                                <li>
                                    <a href="#"
                                        class="inline-flex size-8 items-center justify-center rounded border border-gray-100 bg-white text-gray-900 rtl:rotate-180">
                                        <span class="sr-only">Next Page</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </li>
                            </ol>
                        </div>


                    </div>
                    <!-- /End replace -->
                </div>
            </section>
        </main>
    </div>
</div>
@endsection
@include('layouts.app')