<div>
    @livewire('admin-shop-sale-cart-component')

    
    <div class="bg-gray-100">

        <div class="container mx-auto">
            {{-- Because she competes with no one, no one can compete with her. --}}

            <div id="flash-message">
                {{-- class="fixed top-0 left-1/2 transform -translate-x-1/2 w-full max-w-md p-4 bg-white shadow-lg
                rounded-lg z-50 transition-opacity duration-500" --}}
                @if(session('sale_dashboard_success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('sale_dashboard_success') }}</span>
                </div>
                @endif
                @if(session('sale_dashboard_error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                    <strong class="font-bold">Error!</strong>
                    <span class="block sm:inline">{{ session('sale_dashboard_error') }}</span>
                </div>
                @endif
            </div>
            <h2 class="text-4xl font-extrabold text-gray-800 text-center mb-12 animate-fade-in">Our Featured Products
            </h2>

            <!-- Product Grid Container -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">



                @foreach($products as $product)

                <!-- Product Card 1 -->
                <div
                    class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 overflow-hidden group">
                    <div class="relative w-full h-48 sm:h-56 overflow-hidden">
                        <img src="https://placehold.co/600x400/{{ $product->color_bk }}/244D4D?text=Product+{{ $product->id }}"
                            alt="Wireless Headphones"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"
                            onerror="this.onerror=null;this.src='https://placehold.co/600x400/CCCCCC/333333?text=Image+Not+Found';">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center p-4">
                            <span class="text-white text-lg font-bold">{{ $product->tag ?? 'X' }}</span>
                        </div>
                    </div>
                    <div class="px-4 py-4">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2 truncate">{{ $product->item->name ?? 'X'
                            }}-{{ $product->category->name ?? 'X' }}</h3>
                        <p class="text-gray-600 text-sm mb-2 line-clamp-2 h-[3rem]">
                            {{ $product->item->description ?? 'No Descriptioncription No Description No Description No
                            Description No Description No Description '}}
                        </p>

                        <div class="flex flex-col items-center justify-center space-y-2 gap-2 bg-slate-200">
                            <div class="flex flex-col sm:flex-row items-center justify-between w-full">
                                <div class="flex items-center space-x-2">
                                    <!-- Integrated Quantity Control -->
                                    <div class="flex items-center border border-gray-300 rounded-md overflow-hidden">
                                        <button onclick="changeQuantity(this, -1)"
                                            class="px-3 py-1 bg-gray-100 text-gray-700 hover:bg-gray-200 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">-</button>
                                        <input type="number" min="1" value="1" readonly
                                            class="w-16 text-center text-base py-1 px-0 border-none focus:outline-none focus:ring-0 bg-white">
                                        <button onclick="changeQuantity(this, 1)"
                                            class="px-3 py-1 bg-gray-100 text-gray-700 hover:bg-gray-200 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">+</button>
                                    </div>
                                </div>
                                <span class="text-2xl font-bold text-green-600 mb-0 sm:mb-0">₹ {{ $product->price ??
                                    '0.00' }}</span>
                            </div>

                            <button wire:click="addToCart({{ $product->id }})"
                                class="w-full bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition-colors duration-200 shadow-md">
                                {{-- @if($curtProducts->where('id', $product->id)->count() == 0) --}}
                                Add to Cart
                                {{-- @else --}}
                                {{-- Product Added --}}
                                {{-- @endif --}}
                                {{-- Add to Cart {{ $user->name }} --}}
                            </button>
                        </div>

                    </div>
                </div>


                @endforeach
                <!-- Add more product cards here following the same structure -->

            </div>
        </div>
    </div>
    <script>
        const flashMessage = document.getElementById('flash-message');
    
    // Hide after 5 seconds (5000ms)
    setTimeout(() => {
        flashMessage.classList.add('opacity-0');
        // Remove from DOM after fade-out
        setTimeout(() => flashMessage.remove(), 500);
    }, 5000);
    </script>
</div>