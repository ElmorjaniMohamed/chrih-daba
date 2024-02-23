document.addEventListener('DOMContentLoaded', function() {
    var cartItemCountElement = document.getElementById('cartItemCount');

    if (cartItemCountElement) {
        updateCartItemCount();
        console.log(updateCartItemCount());
    } else {
        console.error("Element with ID 'cartItemCount' not found.");
    }

    function updateCartItemCount() {
        var cart = JSON.parse(localStorage.getItem('cart')) || [];
        var cartItemCount = 0;

        cart.forEach(function(item) {
            cartItemCount += item.quantity;
        });

        cartItemCountElement.textContent = cartItemCount;
    }
});
