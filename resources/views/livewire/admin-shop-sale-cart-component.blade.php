<div>
    <nav class="bg-white shadow-sm mb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Left side - Title/Logo -->
                <div class="flex items-center">
                    <a href="" class="text-xl font-semibold text-gray-900">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <!-- Right side - User & Cart -->
                <div class="flex items-center space-x-4">
                    <!-- Cart with badge -->
                    {{-- @livewire('admin-shop-sale-cart-component') --}}

                    <!-- Cart with badge -->
                    <div class="relative ">
                        {{-- <div class="absolute top-0 right-0 mt-4 mr-4"> --}}
                        <a href="#" class="text-gray-500 hover:text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <!-- Badge -->
                            
                            <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs font-bold rounded-full h-5 w-5 flex items-center justify-center">
                                {{ $saleProducts->count() ?? 'X' }}
                            </span>
                        </a>    
                        {{-- </div> --}}
                    </div>

                    
                    <!-- User profile -->
                    <div class="flex items-center space-x-2">
                        <span class="text-sm font-medium text-gray-700">
                            {{ Auth::user()->name }}
                        </span>
                        <!-- Profile image -->
                        <div class="relative">
                            @if(Auth::user()->profile_photo_path)
                            <img class="h-8 w-8 rounded-full object-cover"
                                src="{{ asset(Auth::user()->profile_photo_path) }}" alt="{{ Auth::user()->name }}">
                            @else
                            <div
                                class="h-8 w-8 rounded-full bg-gray-300 flex items-center justify-center text-gray-600">
                                {{ substr(Auth::user()->name, 0, 1) }}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
        
    
    <!-- Cart Details -->
    {{-- <div class="absolute right-0 mt-2 w-64 bg-white rounded-lg shadow-lg z-10">
        <div class="p-4">
            <h3 class="text-lg font-semibold mb-2">Cart Details</h3>
            <ul class="space-y-2">
                @foreach($saleProducts as $detail)
                    <li class="flex justify-between items-center">
                        <span class="text-sm">{{ $detail->product->item->name ?? 'X' }} - {{ $detail->product->category->name ?? 'X' }}</span>
                        <span class="text-sm text-gray-600">₹ {{ $detail->price ?? '0.00' }}</span>
                    </li>
                @endforeach
            </ul>
            <div class="mt-4">          
                <span class="font-semibold">Total: </span>
                <span class="text-lg text-green-600">₹ {{ $userSale->total ?? '0.00' }}</span>
            </div>
        </div>
    </div> --}}


</div>
