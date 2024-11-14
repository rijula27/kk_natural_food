document.addEventListener("DOMContentLoaded", function () {
  if (typeof phpData === "undefined") {
    console.error("PHP data is not defined.");
    return;
  }

  const unitPrice = parseFloat(phpData.unitPrice);
  const qtyElement = document.querySelector(".total-qty");
  const plusBtn = document.querySelector(".fa-plus");
  const minusBtn = document.querySelector(".fa-minus");
  const priceElement = document.querySelector(".quantity-final-price");

  if (isNaN(unitPrice)) {
    console.error("Unit price is not a valid number.");
    return;
  }

  let qty = 1; // Initial quantity
  let totalPrice = unitPrice;

  qtyElement.textContent = `Qty ${qty}`;
  priceElement.textContent = `₹ ${totalPrice.toFixed(2)}`;

  // Increment quantity
  plusBtn.addEventListener("click", function () {
    qty++;
    updateDisplay();
  });

  // Decrement quantity
  minusBtn.addEventListener("click", function () {
    if (qty > 1) {
      // Prevents quantity from going below 1
      qty--;
      updateDisplay();
    }
  });

  function updateDisplay() {
    qtyElement.textContent = `Qty ${qty}`;
    totalPrice = unitPrice * qty;
    priceElement.textContent = `₹ ${totalPrice.toFixed(2)}`;
  }
});
