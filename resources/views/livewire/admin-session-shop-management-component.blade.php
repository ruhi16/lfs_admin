<div>


    <div>
        <h1 class="text-2xl font-bold text-center my-4">Shop Management Dashboard</h1>

        <!-- Livewire Component for Admin Session -->
        <div class="bg-gray-100 font-sans">
            <div class="flex h-screen">
                <!-- Sidebar -->
                <div class="w-64 bg-slate-800 text-white shadow-xl">
                    <div class="p-4 border-b border-slate-700">
                        <h1 class="text-xl font-bold text-blue-400">Shop Manager</h1>
                    </div>

                    <nav class="mt-4">
                        <div
                            class="px-4 py-2 hover:bg-slate-700 cursor-pointer transition-colors duration-200 border-l-4 border-blue-500 bg-slate-700">
                            <div class="flex items-center">
                                <div class="w-5 h-5 bg-blue-500 rounded mr-3"></div>
                                <span class="font-medium">Dashboard</span>
                            </div>
                        </div>

                        @foreach($items as $itemIndex => $item)
                        <div class="mt-2">
                            <div class="px-4 py-2 text-gray-300 text-sm font-semibold">
                                {{ strtoupper($item['name']) }}
                            </div>
                            @foreach($item['subitems'] as $subitemIndex => $subitem)

                            <div wire:click="setActive('{{ $itemIndex }}', '{{ $subitemIndex }}')"
                                class="px-8 py-2 hover:bg-slate-700 cursor-pointer transition-colors duration-200 {{ $subitem['active'] ? 'bg-slate-700 border-l-4 border-blue-500' : '' }}">
                                <span>{{ $subitem['title'] }}</span>
                                <i class="{{ $subitem['icon'] }} ml-2"></i>
                                @if(isset($subitem['badge']))
                                <span class="bg-red-500 text-xs px-2 py-1 rounded-full animate-pulse-slow">{{
                                    $subitem['badge'] }}</span>
                                @endif
                            </div>

                            @endforeach
                        </div>
                        @endforeach

                    </nav>
                </div>

                <!-- Main Content Area -->
                <div class="flex-1 flex flex-col">
                    <!-- Header -->
                    <header class="bg-white shadow-sm border-b p-4">
                        <div class="flex justify-between items-center">
                            <h2 class="text-2xl font-bold text-gray-800">Dashboard Overview</h2>
                            <div class="flex items-center space-x-4">
                                <div class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">
                                    Today: June 07, 2025
                                </div>
                                <div class="w-8 h-8 bg-blue-500 rounded-full"></div>
                            </div>
                        </div>
                    </header>
                    <main class="flex-1 p-6 bg-yellow-50 w-full">
                        <div class="mb-4">
                            @if (session()->has('message'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded relative"
                                role="alert">
                                <strong class="font-bold">Success!</strong>
                                <span class="block sm:inline">{{ session('message') }}</span>
                            </div>
                            @endif

                            @if (session()->has('error'))
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded relative"
                                role="alert">
                                <strong class="font-bold">Error!</strong>
                                <span class="block sm:inline">{{ session('error') }}</span>
                            </div>
                            @endif
                        </div>

                        <!-- Key Metrics Cards -->
                        {{-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                            <div
                                class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-green-500 hover:shadow-md transition-shadow duration-200">
                                <h3 class="text-sm font-medium text-gray-600">{{ $items[$activeItem]['name'] }}-{{
                                    $items[$activeItem]['subitems'][$activeSubitem]['title'] }}</h3>
                                <p class="text-3xl font-bold text-green-600 mt-2">₹15,240</p>
                                <p class="text-sm text-green-500 mt-1">↗ +12% from yesterday</p>
                            </div>
                        </div> --}}



                        <!-- Charts and Tables -->
                        {{-- <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6"> --}}
                            @if($activeItem === 'item1' && $activeSubitem === 'subitem1') {{-- Category --}}
                            @livewire('admin-shop-category-component')
                            @elseif($activeItem === 'item1' && $activeSubitem === 'subitem2') {{-- Item --}}
                            @livewire('admin-shop-item-component')
                            @elseif($activeItem === 'item1' && $activeSubitem === 'subitem3') {{-- Product --}}
                            {{-- @livewire('admin-shop-order-component') --}}


                            @elseif($activeItem === 'item2' && $activeSubitem === 'subitem1') {{-- Suppliers --}}
                            {{-- @livewire('admin-shop-category-component') --}}
                            @elseif($activeItem === 'item2' && $activeSubitem === 'subitem2') {{-- purchase Order --}}
                            {{-- @livewire('admin-shop-item-component') --}}
                            @elseif($activeItem === 'item2' && $activeSubitem === 'subitem3') {{-- Purchase Products --}}
                            @livewire('admin-shop-purchase-component')



                            @endif


                            {{-- </div> --}}
                    </main>



                </div>
                <!-- End of Main Dashboard Content -->


            </div>




            <div class="space-y-4 p-6">

            </div>

            <body class="bg-gray-100 font-sans">
                <div class="flex h-screen">
                    <!-- Sidebar -->
                    <div class="w-64 bg-slate-800 text-white shadow-xl">
                        <div class="p-4 border-b border-slate-700">
                            <h1 class="text-xl font-bold text-blue-400">ShopManager Pro</h1>
                        </div>

                        <nav class="mt-4">
                            <div
                                class="px-4 py-2 hover:bg-slate-700 cursor-pointer transition-colors duration-200 border-l-4 border-blue-500 bg-slate-700">
                                <div class="flex items-center">
                                    <div class="w-5 h-5 bg-blue-500 rounded mr-3"></div>
                                    <span class="font-medium">Dashboard</span>
                                </div>
                            </div>

                            <div class="mt-2">
                                <div class="px-4 py-2 text-gray-300 text-sm font-semibold">INVENTORY</div>
                                <div class="px-8 py-2 hover:bg-slate-700 cursor-pointer transition-colors duration-200">
                                    <span>Products</span>
                                </div>
                                <div class="px-8 py-2 hover:bg-slate-700 cursor-pointer transition-colors duration-200">
                                    <span>Categories</span>
                                </div>
                                <div
                                    class="px-8 py-2 hover:bg-slate-700 cursor-pointer transition-colors duration-200 flex justify-between">
                                    <span>Stock Levels</span>
                                    <span class="bg-red-500 text-xs px-2 py-1 rounded-full animate-pulse-slow">5</span>
                                </div>
                            </div>

                            <div class="mt-2">
                                <div class="px-4 py-2 text-gray-300 text-sm font-semibold">PURCHASE</div>
                                <div class="px-8 py-2 hover:bg-slate-700 cursor-pointer transition-colors duration-200">
                                    <span>Purchase Orders</span>
                                </div>
                                <div class="px-8 py-2 hover:bg-slate-700 cursor-pointer transition-colors duration-200">
                                    <span>Suppliers</span>
                                </div>
                                <div class="px-8 py-2 hover:bg-slate-700 cursor-pointer transition-colors duration-200">
                                    <span>Category Purchase</span>
                                </div>
                            </div>

                            <div class="mt-2">
                                <div class="px-4 py-2 text-gray-300 text-sm font-semibold">SALES</div>
                                <div class="px-8 py-2 hover:bg-slate-700 cursor-pointer transition-colors duration-200">
                                    <span>Point of Sale</span>
                                </div>
                                <div class="px-8 py-2 hover:bg-slate-700 cursor-pointer transition-colors duration-200">
                                    <span>Sales History</span>
                                </div>
                                <div class="px-8 py-2 hover:bg-slate-700 cursor-pointer transition-colors duration-200">
                                    <span>Customers</span>
                                </div>
                            </div>

                            <div class="mt-2">
                                <div class="px-4 py-2 text-gray-300 text-sm font-semibold">FINANCE</div>
                                <div
                                    class="px-8 py-2 hover:bg-slate-700 cursor-pointer transition-colors duration-200 flex justify-between">
                                    <span>Cash Flow</span>
                                    <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></div>
                                </div>
                                <div class="px-8 py-2 hover:bg-slate-700 cursor-pointer transition-colors duration-200">
                                    <span>Payment Tracking</span>
                                </div>
                                <div class="px-8 py-2 hover:bg-slate-700 cursor-pointer transition-colors duration-200">
                                    <span>P&L Reports</span>
                                </div>
                            </div>

                            <div class="mt-2">
                                <div class="px-4 py-2 hover:bg-slate-700 cursor-pointer transition-colors duration-200">
                                    <div class="flex items-center">
                                        <div class="w-5 h-5 bg-purple-500 rounded mr-3"></div>
                                        <span>Reports & Analytics</span>
                                    </div>
                                </div>
                                <div class="px-4 py-2 hover:bg-slate-700 cursor-pointer transition-colors duration-200">
                                    <div class="flex items-center">
                                        <div class="w-5 h-5 bg-gray-500 rounded mr-3"></div>
                                        <span>Settings</span>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>







                    <!-- Main Content Area -->
                    <div class="flex-1 flex flex-col">
                        <!-- Header -->
                        <header class="bg-white shadow-sm border-b p-4">
                            <div class="flex justify-between items-center">
                                <h2 class="text-2xl font-bold text-gray-800">Dashboard Overview</h2>
                                <div class="flex items-center space-x-4">
                                    <div class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">
                                        Today: June 07, 2025
                                    </div>
                                    <div class="w-8 h-8 bg-blue-500 rounded-full"></div>
                                </div>
                            </div>
                        </header>

                        <!-- Main Dashboard Content -->
                        <main class="flex-1 p-6 bg-gray-50 overflow-auto">
                            <!-- Key Metrics Cards -->
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                                <div
                                    class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-green-500 hover:shadow-md transition-shadow duration-200">
                                    <h3 class="text-sm font-medium text-gray-600">Today's Revenue</h3>
                                    <p class="text-3xl font-bold text-green-600 mt-2">₹15,240</p>
                                    <p class="text-sm text-green-500 mt-1">↗ +12% from yesterday</p>
                                </div>

                                <div
                                    class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-blue-500 hover:shadow-md transition-shadow duration-200">
                                    <h3 class="text-sm font-medium text-gray-600">Total Stock Value</h3>
                                    <p class="text-3xl font-bold text-blue-600 mt-2">₹2,85,600</p>
                                    <p class="text-sm text-gray-500 mt-1">Across 450 items</p>
                                </div>

                                <div
                                    class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-red-500 hover:shadow-md transition-shadow duration-200">
                                    <h3 class="text-sm font-medium text-gray-600">Low Stock Items</h3>
                                    <p class="text-3xl font-bold text-red-600 mt-2">5</p>
                                    <p class="text-sm text-red-500 mt-1">Require immediate attention</p>
                                </div>

                                <div
                                    class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-purple-500 hover:shadow-md transition-shadow duration-200">
                                    <h3 class="text-sm font-medium text-gray-600">Cash in Hand</h3>
                                    <p class="text-3xl font-bold text-purple-600 mt-2">₹45,120</p>
                                    <p class="text-sm text-gray-500 mt-1">+ Bank: ₹1,25,000</p>
                                </div>
                            </div>

                            <!-- Quick Actions -->
                            <div class="bg-white rounded-lg shadow-sm mb-8 p-6">
                                <h3 class="text-lg font-semibold text-gray-800 mb-4">Quick Actions</h3>
                                <div class="grid grid-cols-2 lg:grid-cols-5 gap-4">
                                    <button
                                        class="flex flex-col items-center p-4 border-2 border-dashed border-gray-300 rounded-lg hover:border-blue-500 hover:bg-blue-50 transition-all duration-200">
                                        <div
                                            class="w-12 h-12 bg-green-500 rounded-full mb-2 flex items-center justify-center">
                                            <div class="w-6 h-6 bg-white rounded"></div>
                                        </div>
                                        <span class="text-sm font-medium">Quick Sale</span>
                                    </button>

                                    <button
                                        class="flex flex-col items-center p-4 border-2 border-dashed border-gray-300 rounded-lg hover:border-blue-500 hover:bg-blue-50 transition-all duration-200">
                                        <div
                                            class="w-12 h-12 bg-blue-500 rounded-full mb-2 flex items-center justify-center">
                                            <div class="w-6 h-6 bg-white rounded"></div>
                                        </div>
                                        <span class="text-sm font-medium">Add Product</span>
                                    </button>

                                    <button
                                        class="flex flex-col items-center p-4 border-2 border-dashed border-gray-300 rounded-lg hover:border-blue-500 hover:bg-blue-50 transition-all duration-200">
                                        <div
                                            class="w-12 h-12 bg-orange-500 rounded-full mb-2 flex items-center justify-center">
                                            <div class="w-6 h-6 bg-white rounded"></div>
                                        </div>
                                        <span class="text-sm font-medium">Record Purchase</span>
                                    </button>

                                    <button
                                        class="flex flex-col items-center p-4 border-2 border-dashed border-gray-300 rounded-lg hover:border-blue-500 hover:bg-blue-50 transition-all duration-200">
                                        <div
                                            class="w-12 h-12 bg-purple-500 rounded-full mb-2 flex items-center justify-center">
                                            <div class="w-6 h-6 bg-white rounded"></div>
                                        </div>
                                        <span class="text-sm font-medium">Update Stock</span>
                                    </button>

                                    <button
                                        class="flex flex-col items-center p-4 border-2 border-dashed border-gray-300 rounded-lg hover:border-blue-500 hover:bg-blue-50 transition-all duration-200">
                                        <div
                                            class="w-12 h-12 bg-teal-500 rounded-full mb-2 flex items-center justify-center">
                                            <div class="w-6 h-6 bg-white rounded"></div>
                                        </div>
                                        <span class="text-sm font-medium">Cash Entry</span>
                                    </button>
                                </div>
                            </div>

                            <!-- Bottom Widgets -->
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                                <!-- Recent Sales -->
                                <div class="bg-white rounded-lg shadow-sm p-6">
                                    <div class="flex justify-between items-center mb-4">
                                        <h3 class="text-lg font-semibold text-gray-800">Recent Sales</h3>
                                        <span class="text-sm text-blue-600 cursor-pointer hover:underline">View
                                            All</span>
                                    </div>
                                    <div class="space-y-3">
                                        <div class="flex justify-between items-center p-3 bg-gray-50 rounded">
                                            <div>
                                                <p class="font-medium">Invoice #1234</p>
                                                <p class="text-sm text-gray-600">2 items • 10:30 AM</p>
                                            </div>
                                            <span class="font-semibold text-green-600">₹450</span>
                                        </div>
                                        <div class="flex justify-between items-center p-3 bg-gray-50 rounded">
                                            <div>
                                                <p class="font-medium">Invoice #1235</p>
                                                <p class="text-sm text-gray-600">5 items • 11:15 AM</p>
                                            </div>
                                            <span class="font-semibold text-green-600">₹1,250</span>
                                        </div>
                                        <div class="flex justify-between items-center p-3 bg-gray-50 rounded">
                                            <div>
                                                <p class="font-medium">Invoice #1236</p>
                                                <p class="text-sm text-gray-600">1 item • 12:00 PM</p>
                                            </div>
                                            <span class="font-semibold text-green-600">₹320</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Low Stock Alerts & Cash Summary -->
                                <div class="space-y-6">
                                    <!-- Low Stock Alerts -->
                                    <div class="bg-white rounded-lg shadow-sm p-6">
                                        <div class="flex justify-between items-center mb-4">
                                            <h3 class="text-lg font-semibold text-gray-800">Low Stock Alerts</h3>
                                            <span class="bg-red-100 text-red-800 px-2 py-1 rounded-full text-xs">5
                                                items</span>
                                        </div>
                                        <div class="space-y-2">
                                            <div class="flex justify-between items-center">
                                                <span class="text-sm">Wheat Flour (5kg)</span>
                                                <span class="text-red-600 text-sm font-medium">2 left</span>
                                            </div>
                                            <div class="flex justify-between items-center">
                                                <span class="text-sm">Rice Basmati (1kg)</span>
                                                <span class="text-red-600 text-sm font-medium">3 left</span>
                                            </div>
                                            <div class="flex justify-between items-center">
                                                <span class="text-sm">Cooking Oil (1L)</span>
                                                <span class="text-red-600 text-sm font-medium">1 left</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Today's Cash Summary -->
                                    <div class="bg-white rounded-lg shadow-sm p-6">
                                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Today's Cash Flow</h3>
                                        <div class="space-y-3">
                                            <div class="flex justify-between">
                                                <span class="text-green-600">Cash Sales</span>
                                                <span class="font-medium text-green-600">+₹12,500</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span class="text-blue-600">Digital Sales</span>
                                                <span class="font-medium text-blue-600">+₹2,740</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span class="text-red-600">Purchases</span>
                                                <span class="font-medium text-red-600">-₹8,200</span>
                                            </div>
                                            <hr>
                                            <div class="flex justify-between font-semibold">
                                                <span>Net Cash Flow</span>
                                                <span class="text-green-600">+₹7,040</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>



                    {{-- <script>
                        function navigateToRoute() {
                // Use Livewire's built-in JavaScript to navigate to the route
                Livewire.emit('navigateToRoute');
            }
                    </script> --}}
                </div>
            </body>

        </div>

    </div>
</div>