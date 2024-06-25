<div class="checkout-section ptb-120">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-8">
                <div class="checkout-steps">
                    <div class="d-flex justify-content-between">
                        <h4 class="mb-5">Shipment Address</h4>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#addAddressModal" class="fw-semibold"><i
                                class="fas fa-plus me-1"></i> Add Address</a>
                    </div>

                    <div class="row g-4">
                        @foreach ($addresses as $address)
                            <div class="col-lg-6 col-sm-6">
                                <div class="tt-address-content">
                                    <input type="radio" class="tt-custom-radio" name="shipment_address"
                                        id="shipment-address-{{ $loop->index }}" value="{{ $address->id }}" {{ $loop->first ? 'checked' : '' }}>
                                    <label for="shipment-address-{{ $loop->index }}"
                                        class="tt-address-info bg-white rounded p-4 position-relative"
                                        data-address-id="{{ $address->id }}">
                                        <strong class="shipment-address">{{ $address->shipment_address }}</strong>
                                        <address class="fs-sm mb-0 shipment-state">{{ $address->shipment_state }}</address>
                                        <a href="#" class="tt-edit-address checkout-radio-link position-absolute">Edit</a>
                                    </label>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Payment Method Section -->
                    <h4 class="mt-8">Payment Method</h4>

                    <div class="checkout-form mt-4 py-7 px-5 bg-white rounded-2">
                        <!-- Cash On Delivery Option -->
                        <div class="mb-5 radio-left d-inline-flex align-items-center">
                            <div class="theme-radio">
                                <!-- Cash on Delivery radio button -->
                                <input type="radio" id="cashondelivery" name="payment_method" value="cashondelivery"
                                    checked>
                                <span class="custom-radio"></span>
                            </div>
                            <label for="cashondelivery" class="ms-2 h6 mb-0">Cash On Delivery</label>
                        </div>

                        <!-- Credit Card or Debit Card Option -->
                        <div class="mt-5 form-title d-flex align-items-center mb-5">
                            <div class="theme-radio">
                                <!-- Credit Card or Debit Card radio button -->
                                <input type="radio" id="shipment" name="payment_method" value="card">
                                <span class="custom-radio"></span>
                            </div>
                            <label class="h6 mb-0 ms-2" for="shipment">Credit Card or Debit Card</label>
                        </div>

                        <!-- Payment Form (for Credit Card or Debit Card) -->
                        <form>
                            <!-- Form fields for credit card or debit card payment -->
                            <div class="row g-4">
                                <!-- Your form fields here -->
                                <div class="col-sm-12">
                                    <div class="label-input-field mt-0">
                                        <input type="text" placeholder="****  **** **** 7898">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="label-input-field mt-0">
                                        <input type="text" placeholder="12 / 24">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="label-input-field mt-0">
                                        <input type="text" placeholder="****">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="label-input-field mt-0">
                                        <input type="tel" placeholder="478958">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="label-input-field">
                                        <label>City</label>
                                        <input type="text" placeholder="City">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="label-input-field">
                                        <label>State</label>
                                        <input type="text" placeholder="State">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="label-input-field">
                                        <label>Zip Code</label>
                                        <input type="text" placeholder="Dhaka-1230">
                                    </div>
                                </div>
                            </div>

                            <!-- Additional options or checkboxes -->
                            <div class="d-flex align-items-center gap-2 mt-4 flex-wrap">
                                <div class="checkbox d-flex align-items-center gap-2 me-3">
                                    <div class="theme-checkbox flex-shrink-0">
                                        <input type="checkbox" id="save-card">
                                        <span class="checkbox-field"><i class="fa-solid fa-check"></i></span>
                                    </div>
                                    <label for="save-card">Save this Credit Card for later use</label>
                                </div>
                                <div class="checkbox d-flex align-items-center gap-2">
                                    <div class="theme-checkbox flex-shrink-0">
                                        <input type="checkbox" id="billing-info">
                                        <span class="checkbox-field"><i class="fa-solid fa-check"></i></span>
                                    </div>
                                    <label for="billing-info">Billing same as Shipping address</label>
                                </div>
                            </div>

                            <!-- Submit and cancel buttons -->
                            <div class="mt-6 d-flex">
                                <button type="submit" class="btn btn-secondary btn-md me-3">Use this Card</button>
                                <button type="button"
                                    class="btn btn-outline-secondary border-secondary btn-md">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!--add address modal start-->
                <!-- Modal -->
                <div class="modal fade" id="addAddressModal">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close float-end" data-bs-dismiss="modal"
                                    aria-label="Close"></button>

                                <div class="gstore-product-quick-view bg-white rounded-3 py-6 px-4">
                                    <h2 class="modal-title fs-5 mb-3">Add New Address</h2>
                                    <div class="row align-items-center g-4 mt-3">
                                        <form action="{{ route('address.add') }}" method="POST">
                                            @csrf <!-- CSRF token for security -->
                                            <div class="row g-4">
                                                <div class="col-sm-6">
                                                    <div class="label-input-field">
                                                        <label>First Name</label>
                                                        <input type="text" name="firstname" placeholder="First Name"
                                                            value="{{ $profileData->firstname }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="label-input-field">
                                                        <label>Last Name</label>
                                                        <input type="text" name="lastname" placeholder="Last Name"
                                                            value="{{ $profileData->lastname }}" required>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="label-input-field">
                                                        <label>Mobile</label>
                                                        <input type="tel" name="phone" placeholder="Phone Number"
                                                            value="{{ $profileData->phone }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="label-input-field">
                                                        <label>Email</label>
                                                        <input type="email" name="email" placeholder="Your Email"
                                                            value="{{ $profileData->email }}" required>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="label-input-field">
                                                        <label>State</label>
                                                        <input type="text" name="shipment_state" placeholder="State"
                                                            required>
                                                    </div>
                                                </div>

                                                <div class="col-sm-8">
                                                    <div class="label-input-field">
                                                        <label>Shipment Address</label>
                                                        <input type="text" name="shipment_address"
                                                            placeholder="Shipment Address" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-6 d-flex">
                                                <button type="submit" class="btn btn-secondary btn-md me-3">Use this
                                                    Address</button>
                                                <button type="button"
                                                    class="btn btn-outline-secondary border-secondary btn-md"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--add address modal end-->
            </div>
            <div class="col-xl-4">
                <div class="checkout-sidebar">
                    <div class="sidebar-widget checkout-sidebar py-6 px-4 bg-white rounded-2">
                        <div class="widget-title d-flex">
                            <h5 class="mb-0 flex-shrink-0">Order Summary</h5>
                            <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
                        </div>
                        <table class="sidebar-table w-100 mt-5">
                            <tr>
                                <td id="total-cart-items">Items(0):</td>
                                <td id="total-item-price" class="text-end">TK. 0.00</td>
                            </tr>
                            <tr>
                                <td>Delivery Charge:</td>
                                <td class="text-end" id="delivery-charge">TK. 0.00</td>
                            </tr>
                            <tr>
                                <td>Total:</td>
                                <td class="text-end" id="grand-total">TK. 0.00</td>
                            </tr>
                        </table>
                        <span class="sidebar-spacer d-block my-4 opacity-50"></span>


                        <!-- Order Form Integration -->
                        <form action="{{ route('order.store') }}" method="POST" id="orderForm">
                            @csrf
                            <input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">
                            <input type="hidden" name="address_id" id="address_id" value="">
                            <input type="hidden" name="total_price" id="total_price" value="">
                            <input type="hidden" name="payment_method" value="cashondelivery">

                            <!-- Dynamic Items -->
                            <div id="dynamic-items"></div>

                            <button type="submit" class="btn btn-primary btn-md rounded mt-6 w-100">Place Order</button>
                            <p class="mt-3 mb-0 fs-xs">By placing your order you agree to our company <a
                                    href="#">Privacy-policy</a></p>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript code -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.tt-edit-address').forEach(function (button) {
            button.addEventListener('click', function (event) {
                event.preventDefault();

                // Get address data
                const addressElement = this.closest('.tt-address-info'); // Retrieve the closest parent with class 'tt-address-info'
                if (!addressElement) {
                    console.error("Address info element not found.");
                    return;
                }

                // Select address elements
                const addressId = addressElement.dataset.addressId;
                const firstnameElement = addressElement.querySelector('.firstname');
                const lastnameElement = addressElement.querySelector('.lastname');
                const phoneElement = addressElement.querySelector('.phone');
                const emailElement = addressElement.querySelector('.email');
                const shipmentStateElement = addressElement.querySelector('.shipment_state');
                const shipmentAddressElement = addressElement.querySelector('.shipment_address');

                // Check if any required elements are missing
                if (!firstnameElement || !lastnameElement || !phoneElement || !emailElement || !shipmentStateElement || !shipmentAddressElement) {
                    console.error("One or more address elements are missing.");
                    return;
                }

                // Extract text content from elements
                const firstname = firstnameElement.innerText.trim();
                const lastname = lastnameElement.innerText.trim();
                const phone = phoneElement.innerText.trim();
                const email = emailElement.innerText.trim();
                const shipment_state = shipmentStateElement.innerText.trim();
                const shipment_address = shipmentAddressElement.innerText.trim();

                // Populate modal form fields
                document.getElementById('edit_address_id').value = addressId;
                document.querySelector('#editAddressForm input[name="firstname"]').value = firstname;
                document.querySelector('#editAddressForm input[name="lastname"]').value = lastname;
                document.querySelector('#editAddressForm input[name="phone"]').value = phone;
                document.querySelector('#editAddressForm input[name="email"]').value = email;
                document.querySelector('#editAddressForm input[name="shipment_state"]').value = shipment_state;
                document.querySelector('#editAddressForm input[name="shipment_address"]').value = shipment_address;

                // Show modal
                var editModal = new bootstrap.Modal(document.getElementById('editAddressModal'));
                editModal.show();
            });
        });
    });
</script>




<script>
    document.addEventListener('DOMContentLoaded', function () {
        const orderForm = document.getElementById('orderForm');

        function calculateTotals() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            let totalItems = 0;
            let totalItemPrice = 0;

            // Calculate total items and total item price
            cart.forEach(item => {
                totalItems += parseInt(item.quantity);
                totalItemPrice += parseFloat(item.price) * parseInt(item.quantity);
            });

            const deliveryCharge = 120; // Assuming delivery charge is 120

            // Update HTML elements
            document.getElementById('total-cart-items').textContent = `Items(${totalItems}):`;
            document.getElementById('total-item-price').textContent = `TK. ${totalItemPrice.toFixed(2)}`;
            document.getElementById('delivery-charge').textContent = `TK. ${deliveryCharge.toFixed(2)}`;

            // Calculate and display grand total
            const grandTotal = totalItemPrice + deliveryCharge;
            document.getElementById('grand-total').textContent = `TK. ${grandTotal.toFixed(2)}`;

            // Set the values in the form
            document.getElementById('total_price').value = grandTotal.toFixed(2);
        }

        // Populate dynamic items in the form
        function populateDynamicItems() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const dynamicItemsContainer = document.getElementById('dynamic-items');
            dynamicItemsContainer.innerHTML = ''; // Clear previous items

            cart.forEach((item, index) => {
                console.log(`Adding item to form: ${JSON.stringify(item)}`); // Log the item data
                const productIdField = document.createElement('input');
                productIdField.type = 'hidden';
                productIdField.name = `items[${index}][product_id]`;
                productIdField.value = item.id; // Use item.id to correctly set the product ID

                const quantityField = document.createElement('input');
                quantityField.type = 'hidden';
                quantityField.name = `items[${index}][quantity]`;
                quantityField.value = item.quantity;

                const unitPriceField = document.createElement('input');
                unitPriceField.type = 'hidden';
                unitPriceField.name = `items[${index}][unit_price]`;
                unitPriceField.value = item.price;

                dynamicItemsContainer.appendChild(productIdField);
                dynamicItemsContainer.appendChild(quantityField);
                dynamicItemsContainer.appendChild(unitPriceField);
            });

            console.log('Populated dynamic items:', dynamicItemsContainer.innerHTML); // Log dynamic items
        }

        // Update address_id when a different address is selected
        document.querySelectorAll('input[name="shipment_address"]').forEach(radio => {
            radio.addEventListener('change', function () {
                document.getElementById('address_id').value = this.value;
            });
        });

        // Set initial address_id
        const initialSelectedAddress = document.querySelector('input[name="shipment_address"]:checked');
        if (initialSelectedAddress) {
            document.getElementById('address_id').value = initialSelectedAddress.value;
        }

        // Calculate totals on page load
        calculateTotals();

        // Populate dynamic items on page load
        populateDynamicItems();

        // Recalculate totals and populate dynamic items before form submission
        orderForm.addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent the default form submission

            calculateTotals();
            populateDynamicItems();

            // Create a FormData object and populate it
            const formData = new FormData(orderForm);

            // Log form data for debugging
            for (const [key, value] of formData.entries()) {
                console.log(`${key}: ${value}`);
            }

            // Send the form data using fetch
            fetch(orderForm.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Clear the cart in local storage
                    localStorage.removeItem('cart');

                    // Redirect or show success message
                    window.location.href = data.redirect || '/';
                } else {
                    console.error('Order creation failed:', data.message);
                    alert('Order creation failed. Please try again.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while placing the order. Please try again.');
            });
        });
    });
</script>













<script src="{{ asset('backend/assets/cart.js') }}"></script>