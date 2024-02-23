// update price

document.addEventListener("DOMContentLoaded", function () {
    var quantityInputs = document.querySelectorAll(".quantity-input");

    quantityInputs.forEach(function (input) {
        input.addEventListener("change", function () {
            updateTotal(this);
            updateTotalPrice();
        });

        var decrementBtn = input.previousElementSibling;
        var incrementBtn = input.nextElementSibling;

        decrementBtn.addEventListener("click", function () {
            var currentValue = parseInt(input.value);
            if (currentValue > 1) {
                input.value = currentValue - 1;
                updateTotal(input);
                updateTotalPrice();
            }
        });

        incrementBtn.addEventListener("click", function () {
            var currentValue = parseInt(input.value);
            input.value = currentValue + 1;
            updateTotal(input);
            updateTotalPrice();
        });
    });

    function updateTotal(input) {
        var quantity = parseInt(input.value);
        var pricePerItem = parseFloat(input.dataset.price);
        var itemId = input.dataset.itemId;
        var totalPrice = quantity * pricePerItem;
        var totalElementId = "total_" + itemId;
        var totalElement = document.getElementById(totalElementId);
        if (totalElement) {
            totalElement.textContent = totalPrice.toFixed(2) + " DH";
        }
    }

    function updateTotalPrice() {
        var totalPrices = document.querySelectorAll(".total-price");
        var totalPrice = 0;
        totalPrices.forEach(function (priceElement) {
            totalPrice += parseFloat(
                priceElement.textContent.replace(" DH", "")
            );
        });
        var totalPriceElement = document.getElementById("totalPrice");
        if (totalPriceElement) {
            totalPriceElement.textContent = totalPrice.toFixed(2) + " DH";
        }
    }


    // delete Product
    var deleteButtons = document.querySelectorAll(".delete-product-btn");
    deleteButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            var productId = this.getAttribute("data-product-id");
            deleteProduct(productId);
            updateTotalPrice();
        });
    });


    // delete product
    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    function deleteProduct(productId) {
        fetch(`/cart/${productId}`, {
            method: "DELETE",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": csrfToken,
            },
        })
            .then((response) => {
                console.log(response);
                if (!response.ok) {
                    throw new Error("Failed to delete product from cart.");
                }
                return response.json();
                console.log(response.json());
            })
            .then((data) => {
                location.reload();
            })
            .catch((error) => {
                console.error("Error:", error);
                alert(
                    "Failed to delete product from cart. Please try again later."
                );
            });
    }
});
