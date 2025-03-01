let cart = [];
let totalPrice = 0;

function addToCart(productName, productPrice) {
    cart.push({ name: productName, price: productPrice });
    totalPrice += productPrice;
    updateCart();
}

function updateCart() {
    const cartItems = document.getElementById('cart-items');
    cartItems.innerHTML = '';

    cart.forEach(item => {
        const li = document.createElement('li');
        li.textContent = `${item.name} - Rp ${item.price}`;
        cartItems.appendChild(li);
    });

    document.getElementById('total-price').textContent = totalPrice;
}

function checkout() {
    if (cart.length === 0) {
        alert('Keranjang Anda kosong!');
    } else {
        alert('Terima kasih telah berbelanja di Unggasku! Total belanja Anda adalah Rp ' + totalPrice);
        cart = [];
        totalPrice = 0;
        updateCart();
    }
}