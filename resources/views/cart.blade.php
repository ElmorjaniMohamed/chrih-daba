@section('content')
    <style>
        .scrollbar-custom-style::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 0.7px rgba(0, 0, 0, 0.2);
            /* Légère ombre */
            border-radius: 10px;
            background-color: #F5F5F5;
        }

        .scrollbar-custom-style::-webkit-scrollbar {
            width: 12px;
            background-color: #F5F5F5;
        }

        .scrollbar-custom-style::-webkit-scrollbar-thumb {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 0.7px rgba(0, 0, 0, 0.2);
            /* Légère ombre */
            background-color: rgb(226 232 240);
            /* Utilisation de la couleur #F43F5E */
        }
    </style>
    <section>
        <div class="container mx-auto mt-10">
            <div class="flex  my-10 p-8 gap-5">
                <div
                    class="scrollbar-custom-style w-3/4 bg-slate-50 max-h-[40rem] px-10 py-10 rounded-lg border overflow-x-hidden border-slate-300">
                    <div class="flex justify-between ">
                        <h1 class="font-semibold text-2xl font-roboto pb-2">Shopping Cart</h1>
                    </div>
                    <hr class="border-1 border-slate-300">
                    <div class="flex mt-10 mb-5 py-3 px-4 bg-slate-200">
                        <h3 class="font-bold font-roboto text-slate-800 text-sm uppercase w-2/5">Product Details</h3>
                        <h3 class="font-bold font-roboto text-slate-800 text-sm uppercase w-2/5 text-center">Quantity</h3>
                        <h3 class="font-bold font-roboto text-slate-800 text-sm uppercase w-2/5 text-center">Total Price</h3>
                    </div>

                    <div id="cartContainer">
                        <!-- Boucle pour afficher chaque produit dans le panier -->
                        @foreach ($cartItems as $item)

                            {{-- @php
                                $imageArray = json_decode($item->image);
                                $firstImage = $imageArray[0];
                            @endphp --}}

                            <div class="flex items-center rounded-md border-2 hover:bg-gray-100 mx-1.5 my-5 px-6 py-5">
                                <div class="flex w-2/5"> <!-- product -->
                                    <div class="w-20">
                                        <img class="h-24" src="{{ $item['image'] }}" alt="{{ $item['name'] }}">
                                    </div>
                                    <div class="flex flex-col justify-between ml-4">
                                        <span class="font-bold text-sm font-roboto text-slate-900">{{ $item['name'] }}</span>
                                        <span class="text-slate-900 font-medium text-xs text-center rounded-full bg-amber-500 py-0.5 px-1">{{ $item['brand'] }}</span>
                                        <span class="text-lg font-semibold text-rose-500 font-readex">{{ $item['price'] }} DH</span>
                                    </div>
                                </div>
                                <div class="flex justify-center w-2/5">
                                    <div>
                                        <div class="flex items-center gap-1">
                                            <button type="button" class="size-10 leading-10 text-gray-600 transition hover:opacity-75">
                                                &minus;
                                            </button>
                                            <input type="number" id="Quantity"
                                                class="h-7 w-14 rounded outline-rose-500 border-slate-300 border-2 px-0.5 sm:text-base text-center font-xs font-readex" />
                                            <button type="button" class="size-10 leading-10 text-gray-600 transition hover:opacity-75">
                                                &plus;
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-center w-2/5 text-xl font-semibold text-rose-500 font-readex"> DH</span>
                                <div>
                                    <button class="inline-block p-3 text-gray-700 hover:text-rose-600 focus:relative" title="Delete Product">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>



                    <a href="#"
                        class="flex font-semibold text-slate-50 bg-rose-500 hover:bg-gradient-to-r from-rose-500 to-yellow-500 w-fit font-roboto px-3 py-2  rounded-md text-sm mt-10 ">

                        <svg class="fill-current mr-2 text-slate-50 w-4" viewBox="0 0 448 512">
                            <path
                                d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z" />
                        </svg>
                        Continue Shopping
                    </a>
                </div>

                <div id="summary" class="w-1/4 h-fit px-8 py-10 rounded-lg border border-slate-300">
                    <h1 class="font-semibold text-2xl uppercase font-roboto pb-2">Order Summary</h1>
                    <hr class="border-1 border-slate-300">
                    <div class="flex justify-between items-center mt-10 mb-5">
                        <span
                            class="font-medium text-sm text-slate-50 font-roboto rounded-full px-2 py-1 bg-green-500 ">Items
                            3</span>
                        <span class="text-lg font-semibold text-rose-500 font-readex">499 DH</span>
                    </div>
                    <hr class="border-1 border-slate-300">
                    <div class="flex justify-between items-center mt-3 mb-3">
                        <span class="text-base font-normal text-slate-800 font-roboto">Delivery</span>
                        <span class="text-base font-normal text-slate-800 font-roboto">Free</span>
                    </div>
                    <div class="flex justify-between items-center mt-3 mb-3">
                        <span class="font-normal text-base text-slate-800 font-roboto">Tax</span>
                        <span class="text-base font-normal text-slate-800 font-roboto">Free</span>
                    </div>
                    <hr class="border-1 border-slate-300">
                    <div class="flex justify-between items-center mt-3 mb-3">
                        <span class="text-base  font-bold text-slate-900 font-roboto">Total</span>
                        <span class="text-base  font-bold text-slate-000 font-readex">499 DH</span>
                    </div>
                    <div class="pb-4 pt-2">
                        <div class="relative">
                            <input type="text" id="promo" placeholder="Enter coupon"
                                class="p-2 text-sm w-3/4 rounded-tl-md rounded-bl-md border-2 border-rose-500 outline-none">
                            <button
                                class="bg-rose-500 absolute top-0 right-0 bottom-0 hover:bg-rose-600 px-5 py-2 text-sm w-1/4 font-roboto text-white uppercase rounded-tr-md rounded-br-md ">Apply</button>
                        </div>
                    </div>
                    <hr class="border-1 border-slate-300">
                    <div class=" mt-3">
                        <button
                            class="bg-rose-500 font-semibold hover:bg-slate-50 hover:border-2 hover:border-rose-500 rounded-md py-3 text-sm text-white hover:text-rose-500 uppercase w-full">Checkout</button>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
@include('layouts.app')
