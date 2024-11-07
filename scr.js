document.addEventListener("DOMContentLoaded", function() {
    const seatType = document.getElementById("seat-type");
    const priceField = document.getElementById("price");

    function updatePrice() {
        let price = 0;

        switch (seatType.value) {
            case "vip":
                price = 1500;
                break;
            case "regular":
                price = 1000;
                break;
            case "economy":
                price = 500;
                break;
            default:
                price = 0;
        }

        priceField.value = `₹${price}`;
    }

    seatType.addEventListener("change", updatePrice);
});