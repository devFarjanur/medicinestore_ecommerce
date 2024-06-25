<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <!-- Link to Font Awesome CSS without integrity attribute -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<!--cart section start-->
<section class="cart-section ptb-120">
    <div class="container">
        <div class="select-all d-flex align-items-center justify-content-between bg-white rounded p-4">
            <div class="d-inline-flex gap-2 align-items-center">
                <div class="theme-checkbox">
                    <input type="checkbox" id="select-all">
                    <span class="checkbox-field"><i class="fa-solid fa-check"></i></span>
                </div>
                <label for="select-all">Select All(03 ITEMS)</label>
            </div>
            <a href="#" class="text-gray"><span class="me-2"><i class="fa-solid fa-trash-can"></i></span>Delete</a>
        </div>
        <div class="rounded-2 overflow-hidden">
            <table class="cart-table w-100 mt-4 bg-white">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="cart-items">
                    <!-- Cart items will be dynamically generated here -->
                </tbody>
            </table>
        </div>
        <div class="row g-4">
            <div class="col-xl-7">
                <div class="voucher-box py-7 px-5 position-relative z-1 overflow-hidden bg-white rounded mt-4">
                    <img src="{{ asset('backend/assets/images/shapes/circle-half.png') }}" alt="circle shape"
                        class="position-absolute end-0 top-0 z--1">
                    <h4 class="mb-3">What would you like to do next?</h4>
                    <p class="mb-7">Choose if you have a discount code or reward points you want to use<br> or would
                        like to estimate your delivery cost.</p>
                    <form class="d-flex align-items-center" action="#">
                        <input type="text" placeholder="Enter Your Voucher Code" class="theme-input w-100">
                        <button type="submit" class="btn btn-secondary flex-shrink-0">Apply Voucher</button>
                    </form>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="cart-summery bg-white rounded-2 pt-4 pb-6 px-5 mt-4">
                    <table class="w-100">
                        <tr>
                            <td class="py-3">
                                <h5 class="mb-0 fw-medium">Subtotal</h5>
                            </td>
                            <td class="py-3">
                                <h5 class="mb-0 fw-semibold text-end" id="subtotal">$1138,00</h5>
                            </td>
                        </tr>
                        <tr class="border-top">
                            <td class="py-3">
                                <h5 class="mb-0">Total</h5>
                            </td>
                            <td class="text-end py-3">
                                <h5 class="mb-0" id="total">$918,00</h5>
                            </td>
                        </tr>
                    </table>
                    <p class="mb-5 mt-2">Shipping options will be updated during checkout.</p>
                    <div class="btns-group d-flex gap-3">
                        <button type="submit" class="btn btn-primary btn-md rounded-1">Confirm Order</button>
                        <button type="button"
                            class="btn btn-outline-secondary border-secondary btn-md rounded-1">Continue
                            Shopping</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--cart section end-->


<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Function to render cart items
        function renderCartItems() {
            const cartItemsContainer = document.getElementById('cart-items');
            cartItemsContainer.innerHTML = ''; // Clear previous items

            let cart = JSON.parse(localStorage.getItem('cart')) || [];

            cart.forEach(item => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td><img src="${item.photo}" alt="${item.name}" style="width: 50px; height: 50px;"></td>
                    <td>${item.name}</td>
                    <td>
                        <button class="btn btn-sm btn-secondary decrease-quantity" data-id="${item.id}">-</button>
                        <span>${item.quantity}</span>
                        <button class="btn btn-sm btn-secondary increase-quantity" data-id="${item.id}">+</button>
                    </td>
                    <td>TK. ${item.price}</td>
                    <td>TK. ${item.quantity * item.price}</td>
                    <td><button class="btn btn-sm btn-danger delete-item" data-id="${item.id}">Delete</button></td>
                `;
                cartItemsContainer.appendChild(row);
            });

            // Update subtotal and total
            const subtotal = cart.reduce((acc, item) => acc + item.price * item.quantity, 0);
            const total = subtotal; // Assuming no additional costs for now

            document.getElementById('subtotal').textContent = `TK. ${subtotal.toFixed(2)}`;
            document.getElementById('total').textContent = `TK. ${total.toFixed(2)}`;

            // Add event listeners to delete buttons
            document.querySelectorAll('.delete-item').forEach(button => {
                button.addEventListener('click', () => {
                    const id = button.dataset.id;
                    cart = cart.filter(item => item.id !== id);
                    localStorage.setItem('cart', JSON.stringify(cart));
                    renderCartItems(); // Re-render cart items after deletion
                });
            });

            // Add event listeners to increase quantity buttons
            document.querySelectorAll('.increase-quantity').forEach(button => {
                button.addEventListener('click', () => {
                    const id = button.dataset.id;
                    const item = cart.find(item => item.id === id);
                    if (item) {
                        item.quantity++;
                        localStorage.setItem('cart', JSON.stringify(cart));
                        renderCartItems(); // Re-render cart items after quantity update
                    }
                });
            });

            // Add event listeners to decrease quantity buttons
            document.querySelectorAll('.decrease-quantity').forEach(button => {
                button.addEventListener('click', () => {
                    const id = button.dataset.id;
                    const item = cart.find(item => item.id === id);
                    if (item && item.quantity > 1) {
                        item.quantity--;
                        localStorage.setItem('cart', JSON.stringify(cart));
                        renderCartItems(); // Re-render cart items after quantity update
                    }
                });
            });
        }

        renderCartItems(); // Render cart items on page load
    });
</script>

</body>
</html>

