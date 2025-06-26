<div>
    @livewire('admin-shop-sale-cart-component')

    <div class="bg-gray-50">
        <div class="min-h-screen max-w-full mx-auto px-3 py-4">
            <!-- Header -->
            <div class="text-center mb-4">
                <h1 class="text-2xl font-bold text-gray-800 bg-slate-300">Checkout: for {{ auth()->user()->name }}</h1>
            </div>
            <!-- Flash Messages -->
            <div id="flash-message">
                @if(session('sale_cart_checkout_success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('sale_cart_checkout_success') }}</span>
                </div>
                @endif
                @if(session('sale_cart_checkout_error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                    <strong class="font-bold">Error!</strong>
                    <span class="block sm:inline">{{ session('sale_cart_checkout_error') }}</span>
                </div>
                @endif
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-5 gap-4">
                <!-- Main Form -->
                <div class="lg:col-span-3 space-y-4 bg-red-300 p-4 rounded-lg shadow">
                    <!-- Customer Info -->
                    <div class="flex flex-row justify-start items-start mb-4 gap-2">
                        <div class="bg-white rounded-lg shadow p-4 w-1/2">
                            <h2 class="text-lg font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-user mr-2 text-green-500 text-sm"></i>
                                Customer Details
                            </h2>
                            <div class="grid grid-cols-2 gap-3">
                                Name: {{ auth()->user()->name }}
                                {{-- <input type="text" id="firstName" placeholder="First Name"
                                    class="px-3 py-2 border border-gray-300 rounded text-sm focus:ring-1 focus:ring-green-500 focus:outline-none">
                                <input type="text" id="lastName" placeholder="Last Name"
                                    class="px-3 py-2 border border-gray-300 rounded text-sm focus:ring-1 focus:ring-green-500 focus:outline-none">
                                <input type="email" id="email" placeholder="Email"
                                    class="col-span-2 px-3 py-2 border border-gray-300 rounded text-sm focus:ring-1 focus:ring-green-500 focus:outline-none">
                                <input type="tel" id="phone" placeholder="Phone"
                                    class="col-span-2 px-3 py-2 border border-gray-300 rounded text-sm focus:ring-1 focus:ring-green-500 focus:outline-none">
                                --}}
                            </div>
                        </div>

                        <!-- Shipping -->
                        <div class="bg-white rounded-lg shadow p-4 w-1/2">
                            <h2 class="text-lg font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-truck mr-2 text-green-500 text-sm"></i>
                                Shipping Address
                            </h2>
                            <div class="space-y-3">
                                <input type="text" id="address" placeholder="Street Address"
                                    class="w-full px-3 py-2 border border-gray-300 rounded text-sm focus:ring-1 focus:ring-green-500 focus:outline-none">
                                <div class="grid grid-cols-3 gap-3">
                                    <input type="text" id="city" placeholder="City"
                                        class="px-3 py-2 border border-gray-300 rounded text-sm focus:ring-1 focus:ring-green-500 focus:outline-none">
                                    <input type="text" id="state" placeholder="State"
                                        class="px-3 py-2 border border-gray-300 rounded text-sm focus:ring-1 focus:ring-green-500 focus:outline-none">
                                    <input type="text" id="pincode" placeholder="PIN"
                                        class="px-3 py-2 border border-gray-300 rounded text-sm focus:ring-1 focus:ring-green-500 focus:outline-none">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-row justify-start items-start mb-4 gap-2">
                        <!-- Payment -->
                        <div class="bg-white rounded-lg shadow p-4 w-1/2">
                            <h2 class="text-lg font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-credit-card mr-2 text-green-500 text-sm"></i>
                                Payment
                            </h2>
                            <div class="space-y-2">
                                <label
                                    class="flex items-center p-2 border border-gray-300 rounded cursor-pointer hover:bg-gray-50 text-sm">
                                    <input type="radio" name="payment" value="cod" class="mr-2" checked>
                                    <i class="fas fa-money-bill-wave mr-2 text-orange-500 text-xs"></i>
                                    Cash on Delivery
                                </label>
                                <label
                                    class="flex items-center p-2 border border-gray-300 rounded cursor-pointer hover:bg-gray-50 text-sm">
                                    <input type="radio" name="payment" value="upi" class="mr-2">
                                    <i class="fab fa-google-pay mr-2 text-blue-500 text-xs"></i>
                                    UPI Payment
                                </label>
                            </div>
                        </div>

                        <!-- Captcha -->
                        <div class="bg-white rounded-lg shadow p-4 w-1/2">
                            <h2 class="text-lg font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-shield-alt mr-2 text-green-500 text-sm"></i>
                                Verification
                            </h2>
                            <div class="bg-gray-100 p-3 rounded border">
                                <div class="flex items-center justify-between mb-2">
                                    <span
                                        class="text-lg font-mono font-bold text-gray-700 bg-white px-2 py-1 rounded border select-none"
                                        id="captchaText">ABC123</span>
                                    <button onclick="generateCaptcha()" class="p-1 text-gray-500 hover:text-gray-700">
                                        <i class="fas fa-refresh text-sm"></i>
                                    </button>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <input type="text" id="captchaInput" placeholder="Enter captcha"
                                        class="flex-1 px-2 py-1 border border-gray-300 rounded text-sm focus:ring-1 focus:ring-green-500 focus:outline-none">
                                    <div id="captchaStatus" class="w-5 h-5"></div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-lg shadow p-4 sticky top- ">
                        <h2 class="text-lg font-semibold text-gray-800 mb-3 flex items-center">
                            <i class="fas fa-shopping-cart mr-2 text-green-500 text-sm"></i>
                            Order Summary
                        </h2>

                        <!-- Cart Items - Scrollable -->
                        <div class="space-y-2 mb-4 max-h-96 overflow-y-auto">
                            <div class="flex items-center space-x-2 p-2 bg-gray-50 rounded text-sm">
                                <img src="https://placehold.co/40x40/4CAF50/FFFFFF?text=P1" alt="Product"
                                    class="w-16 h-16 rounded object-cover">
                                <div class="flex-1 min-w-0 ">
                                    <h4 class="font-medium text-gray-800 truncate">Wireless Headphones</h4>
                                    <div class="flex items-center mt-1 space-x-2">
                                        <!-- Quantity controls -->
                                        <div class="flex border border-gray-300 rounded-md">
                                            <button
                                                class="w-6 h-6 flex items-center justify-center rounded-l bg-gray-100 text-gray-600 hover:bg-gray-200 focus:outline-none transition-colors">
                                                - </button>
                                            <span
                                                class="w-8 h-6 flex items-center justify-center bg-white text-xs text-gray-800">2</span>
                                            <button
                                                class="w-6 h-6 flex items-center justify-center rounded-r bg-gray-100 text-gray-600 hover:bg-gray-200 focus:outline-none transition-colors">+</button>
                                        </div>
                                        <p class="text-xs text-gray-500">(In stock)</p>
                                    </div>
                                </div>
                                <span class="font-semibold text-gray-800">₹2,999</span>
                            </div>

                            <div class="flex items-center space-x-2 p-2 bg-gray-50 rounded text-sm">
                                <img src="https://placehold.co/40x40/4CAF50/FFFFFF?text=P1" alt="Product"
                                    class="w-8 h-8 rounded object-cover">
                                <div class="flex-1 min-w-0">
                                    <h4 class="font-medium text-gray-800 truncate">Wireless Headphones</h4>
                                    <p class="text-xs text-gray-600">Qty: 2</p>
                                </div>
                                <span class="font-semibold text-gray-800 text-xs">₹2,999</span>
                            </div>
                            <div class="flex items-center space-x-2 p-2 bg-gray-50 rounded text-sm">
                                <img src="https://placehold.co/40x40/2196F3/FFFFFF?text=P2" alt="Product"
                                    class="w-8 h-8 rounded object-cover">
                                <div class="flex-1 min-w-0">
                                    <h4 class="font-medium text-gray-800 truncate">Smartphone Case Pro Max</h4>
                                    <p class="text-xs text-gray-600">Qty: 1</p>
                                </div>
                                <span class="font-semibold text-gray-800 text-xs">₹599</span>
                            </div>
                            <div class="flex items-center space-x-2 p-2 bg-gray-50 rounded text-sm">
                                <img src="https://placehold.co/40x40/FF9800/FFFFFF?text=P3" alt="Product"
                                    class="w-8 h-8 rounded object-cover">
                                <div class="flex-1 min-w-0">
                                    <h4 class="font-medium text-gray-800 truncate">USB Cable Lightning</h4>
                                    <p class="text-xs text-gray-600">Qty: 3</p>
                                </div>
                                <span class="font-semibold text-gray-800 text-xs">₹450</span>
                            </div>
                        </div>

                        <!-- Price Details -->
                        <div class="border-t pt-3 space-y-1 text-sm">
                            <div class="flex justify-between text-gray-600">
                                <span>Subtotal</span>
                                <span>₹4,048</span>
                            </div>
                            <div class="flex justify-between text-gray-600">
                                <span>Shipping</span>
                                <span class="text-green-600">Free</span>
                            </div>
                            <div class="flex justify-between text-gray-600">
                                <span>Tax (18%)</span>
                                <span>₹729</span>
                            </div>
                            <div class="flex justify-between font-semibold text-gray-800 text-base pt-2 border-t">
                                <span>Total</span>
                                <span class="text-green-600">₹4,777</span>
                            </div>
                        </div>

                        <!-- Place Order Button -->
                        <button onclick="placeOrder()" id="placeOrderBtn"
                            class="w-full bg-green-500 text-white py-3 rounded-lg font-semibold mt-4 hover:bg-green-600 transition-colors disabled:bg-gray-400 disabled:cursor-not-allowed text-sm">
                            <i class="fas fa-lock mr-1"></i>
                            Place Order ₹4,777
                        </button>
                    </div>
                </div>

            </div>





        </div>


        <!-- Success Modal -->
        <div id="successModal"
            class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
            <div class="bg-white rounded-xl p-6 max-w-sm mx-4 text-center">
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-check text-xl text-green-500"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Order Confirmed!</h3>
                <p class="text-gray-600 text-sm mb-3">Your order has been placed successfully.</p>
                <p class="text-xs text-gray-500 mb-4">Order ID: <span class="font-mono font-semibold"
                        id="orderId">ORD-2025-001</span></p>
                <button onclick="closeModal()"
                    class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition-colors text-sm">
                    Continue Shopping
                </button>
            </div>
        </div>

 
{{-- <script>
    let captchaVerified = false;
        
        function generateCaptcha() {
            const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            let captcha = '';
            for (let i = 0; i < 6; i++) {
                captcha += chars.charAt(Math.floor(Math.random() * chars.length));
            }
            document.getElementById('captchaText').textContent = captcha;
            document.getElementById('captchaInput').value = '';
            captchaVerified = false;
            updateCaptchaStatus();
            updatePlaceOrderButton();
        }

        document.getElementById('captchaInput').addEventListener('input', function() {
            const captchaText = document.getElementById('captchaText').textContent;
            const captchaInput = this.value.toUpperCase();
            
            captchaVerified = captchaInput === captchaText;
            updateCaptchaStatus();
            updatePlaceOrderButton();
        });

        function updateCaptchaStatus() {
            const statusElement = document.getElementById('captchaStatus');
            statusElement.innerHTML = captchaVerified 
                ? '<i class="fas fa-check-circle text-green-500 text-sm"></i>' 
                : '<i class="fas fa-times-circle text-red-500 text-sm"></i>';
        }

        function updatePlaceOrderButton() {
            const btn = document.getElementById('placeOrderBtn');
            const isValid = captchaVerified && validateForm();
            btn.disabled = !isValid;
            btn.className = `w-full py-3 rounded-lg font-semibold mt-4 transition-colors text-sm ${
                isValid ? 'bg-green-500 text-white hover:bg-green-600' : 'bg-gray-400 text-white cursor-not-allowed'
            }`;
        }

        function validateForm() {
            const required = ['firstName', 'lastName', 'email', 'phone', 'address', 'city', 'state', 'pincode'];
            return required.every(field => document.getElementById(field).value.trim() !== '');
        }

        ['firstName', 'lastName', 'email', 'phone', 'address', 'city', 'state', 'pincode'].forEach(field => {
            document.getElementById(field).addEventListener('input', updatePlaceOrderButton);
        });

        function placeOrder() {
            if (!captchaVerified || !validateForm()) return;

            const btn = document.getElementById('placeOrderBtn');
            btn.innerHTML = '<i class="fas fa-spinner fa-spin mr-1"></i>Processing...';
            btn.disabled = true;

            setTimeout(() => {
                const orderId = 'ORD-' + new Date().getFullYear() + '-' + Math.floor(Math.random() * 10000).toString().padStart(4, '0');
                document.getElementById('orderId').textContent = orderId;
                document.getElementById('successModal').classList.remove('hidden');
                btn.innerHTML = '<i class="fas fa-lock mr-1"></i>Place Order ₹4,777';
                btn.disabled = false;
            }, 1500);
        }

        function closeModal() {
            document.getElementById('successModal').classList.add('hidden');
        }

        // Initialize
        generateCaptcha();
        updatePlaceOrderButton();
</script> --}}

</div>