function addToCart(productId) {
    let productName = document.querySelector(`.product:nth-child(${productId}) h2`).textContent;
    let productPrice = document.querySelector(`.product:nth-child(${productId}) p`).textContent;
    let cartItem = document.createElement('li');
    cartItem.textContent = `${productName} - ${productPrice}`;
    document.getElementById('cart-items').appendChild(cartItem);
}
function placeOrder() {
    
    document.getElementById('order-confirmation').style.display = 'block';
}
