document.addEventListener('DOMContentLoaded', function() {

    let totalPrice = 0;


    function updateTotalPrice() {

        var totalPrices = document.querySelectorAll('.total-price');

        totalPrice = 0;

        totalPrices.forEach(function(priceElement) {
            totalPrice += parseFloat(priceElement.textContent.replace(' DH', ''));
        });

        var totalPriceElement = document.getElementById('totalPrice');


        if (totalPriceElement) {
            totalPriceElement.textContent = totalPrice.toFixed(2) + ' DH';
        }
    }

    updateTotalPrice();

});
