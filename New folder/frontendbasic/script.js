// Sample JavaScript for handling cart functionality
document.addEventListener("DOMContentLoaded", function () {
    const orderButton = document.querySelector(".order-btn");
    const cartItems = document.querySelector(".cart-items");
  
    // Example shoe data (you can replace this with your actual data)
    const shoes = [
      { name: "Nike Air Max", price: 120 },
      { name: "Adidas Ultraboost", price: 150 },
      // Add more shoes as needed
    ];
  
    // Handle clicking on a shoe to add it to the cart
    document.querySelectorAll(".shoe-item").forEach((shoeItem, index) => {
      shoeItem.addEventListener("click", function () {
        const selectedShoe = shoes[index];
        addToCart(selectedShoe);
      });
    });
  
    // Add shoe to the cart
    function addToCart(shoe) {
      const cartItem = document.createElement("li");
      cartItem.innerHTML = `
        <span>${shoe.name}</span>
        <span>$${shoe.price}</span>
      `;
      cartItems.appendChild(cartItem);
    }
  
    // Handle placing the order
    orderButton.addEventListener("click", function () {
      alert("Order placed! Thank you for shopping with S KICKS!");
      // Additional logic for order processing can be added here
      // For a complete e-commerce solution, server-side logic is required
      // This is just a basic example
    });
  });
 