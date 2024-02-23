document.getElementById("Search").addEventListener("keyup", function () {
    var searchInput = this.value;
    var x = new XMLHttpRequest();
    var url = "/search?search_string=" + searchInput;
    var csrfToken = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");

    x.open("GET", url, true);

    // Ajouter les en-têtes dans la méthode open
    x.setRequestHeader("Content-Type", "application/json");
    x.setRequestHeader("X-CSRF-TOKEN", csrfToken);

    x.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            var response = JSON.parse(this.responseText);

            var parent = document.getElementById("productsContainer");
            parent.innerHTML = "";
            response.forEach(function (product) {
                var image = JSON.parse(product.image);
                image = image[0];
                var productDiv = document.createElement("div");
                console.log(productDiv);
                productDiv.classList.add(
                    "relative",
                    "text-gray-700",
                    "w-72",
                    "min-h-[10rem]",
                    "border",
                    "border-gray-200",
                    "rounded-lg",
                    "overflow-hidden"
                );
                productDiv.innerHTML = `

                            <img class="w-full h-56 object-cover" src=" http://127.0.0.1:8000/storage/${image}" alt="${product.name}">
                            <button class="absolute start-4 top-4 z-10 p-1.5 bg-rose-500/95 hover:bg-rose-600/90 px-3 py-0.5 rounded-md text-white font-sm font-readex tracking-wider transition">New</button>
                            <div class="p-5 flex flex-col gap-3">
                                <div class="flex items-center gap-2">
                                    <span class="px-3 py-1 rounded-full text-xs bg-slate-100">stock read</span>
                                    <span class="px-3 py-1 rounded-full text-xs bg-slate-100">officiel store</span>
                                </div>
                                <h2 class="font-semibold font-roboto text-2xl overflow-ellipsis overflow-hidden whitespace-nowrap">${product.name}</h2>
                                <div><span class="text-xl font-bold font-roboto">${product.price} DH</span></div>
                                <div class="flex items-center gap-2 mt-1">
                                    <span class="text-sm font-roboto line-through opacity-50">499.00 DH</span>
                                    <span class="bg-green-400 px-1.5 py-0.5 rounded-md text-xs text-white">save 55%</span>
                                </div>
                                <span class="flex items-center mt-1">
                                    <img src="{{ asset('img/star.svg') }}" alt="">
                                    <img src="{{ asset('img/star.svg') }}" alt="">
                                    <img src="{{ asset('img/star.svg') }}" alt="">
                                    <img src="{{ asset('img/star-half-fill.svg') }}" alt="">
                                    <img src="{{ asset('img/star-no-fill.svg') }}" alt="">
                                    <span class="text-xs ml-2 text-gray-500"> 2k reviews </span>
                                </span>
                                <div class="mt-5 flex gap-2">
                                    <button class="bg-rose-500/95 hover:bg-rose-600/90 px-6 py-2 rounded-md text-white font-roboto font-medium tracking-wider transition add-to-cart-btn" data-product-id="${product.id}">Add to cart</button>
                                    <button class="flex-grow flex items-center justify-center bg-gray-300/60 hover:bg-gray-300/80 transition rounded-md "><img class="opacity-50" src="{{ asset('img/love.svg') }}" alt=""></button>
                                    <a href="" class="flex-grow flex items-center justify-center bg-gray-300/60 hover:bg-gray-300/80 transition rounded-md "><img class="opacity-50" src="{{ asset('img/eye.svg') }}" alt=""></a>
                                </div>
                            </div>
                        `;
                parent.appendChild(productDiv);
            });
        } else {
            console.log("Erreur lors de la requête AJAX");
        }
    };
    x.send();
});
