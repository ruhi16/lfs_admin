<div>
    <div class="bg-gray-100 flex items-center justify-center ">
        <div class="container mx-auto p-4">
            @if(session('purchase_success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('purchase_success') }}</span>
            </div>
            @endif
            @if(session('purchase_error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                <strong class="font-bold">Error!</strong>
                <span class="block sm:inline">{{ session('purchase_error') }}</span>
            </div>
            @endif

            <div class="flex justify-around items-center mb-4 p-2 bg-purple-300 rounded-lg shadow-lg">
                <h2 class="text-lg font-semibold text-gray-800">Purchase Entry Table V2: {{ \Carbon\Carbon::now()->format('F d, Y') }}</h2>
                {{-- <button onclick="handleAdd()" class="px-3 py-1.5 text-sm font-semibold text-white bg-green-500 rounded hover:bg-green-600 transition-colors">
                    Add Purchas
                </button> --}}
            </div>

            
            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                <div class="relative overflow-x-auto shadow-md rounded-lg">

                    <div class="p-4 md:p-5 space-y-4">
                        {{-- First Line --}}
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Vendor Name: {{ $selectedVendor }}</label>
                                <select wire:model="selectedVendor" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required>
                                    <option value="">Select Vendor </option>
                                    @foreach($vendors as $vendor)                                    
                                    <option value="{{ $vendor['id'] }}">{{$vendor['id']}}-{{ $vendor['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Invoice No: {{ $invoiceNo }}</label>
                                <input wire:model="invoiceNo" type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Invoice Date: {{ $invoiceDate }}</label>
                                <input wire:model="invoiceDate" type="date" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required>
                            </div>
                        </div>
                        {{-- Second Line     --}}

                        <!-- Product Details Section -->
                        <div class="mb-6">
                            <div class="flex items-center justify-between mb-4">
                                <h4 class="text-lg font-medium text-gray-800">Product Details</h4>
                                <button {{-- wire:click="openProductModal"  --}} {{-- @if($selectedVendor == null || $invoiceNo == null || $invoiceDate == null)
                                        '' @else 'disabled' @endif  --}} 
                                        wire:click="addProductRow" type="button" onclick="addProductRow()" class="px-3 py-1 text-sm font-medium text-white bg-blue-500 rounded hover:bg-blue-600 transition-colors">
                                    Add Product
                                </button>
                            </div>

                            <div class="overflow-x-auto">
                                <table class="w-full text-sm text-left text-gray-700 border border-gray-300">
                                    <thead class="text-gray-600 uppercase bg-gray-100">
                                        <tr>
                                            <th class="px-4 py-2 border-b border-gray-300">Category</th>
                                            <th class="px-4 py-2 border-b border-gray-300">Name</th>
                                            <th class="px-4 py-2 border-b border-gray-300">Unit</th>
                                            <th class="px-4 py-2 border-b border-gray-300">Quantity</th>
                                            <th class="px-4 py-2 border-b border-gray-300">Rate</th>
                                            <th class="px-4 py-2 border-b border-gray-300">Amount</th>
                                            <th class="px-4 py-2 border-b border-gray-300">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="productTableBody">
                                        @foreach($productDetails as $index => $productDetail)
                                        <tr class="border-b border-gray-200">
                                            <td class="px-4 py-3">
                                                <select 
                                                    wire:model="productDetails.{{ $index }}.category_id" 
                                                    wire:change="updateProductOptions({{ $index }})" 
                                                    
                                                    class="w-full px-2 py-1 border border-gray-300 rounded text-xs focus:outline-none focus:ring-1 focus:ring-blue-500" required>
                                                    <option value="">Select Category</option>
                                                    @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('productDetails.{{ $index }}.category_id')
                                                {{ $error->message }}
                                                @enderror
                                            </td>


                                            <td class="px-4 py-3">
                                                <select 
                                                    wire:model="productDetails.{{ $index }}.item_id" 
                                                    
                                                    class="w-full px-2 py-1 border border-gray-300 rounded text-xs focus:outline-none focus:ring-1 focus:ring-blue-500" required>
                                                    <option value="">Select Item</option>
                                                    @foreach($items as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('productDetails.{{ $index }}.item_id')
                                                {{ $error->message }}
                                                @enderror
                                            </td>

                                            <td class="px-4 py-3">
                                                <select wire:model="productDetails.{{ $index }}.purchase_unit_id" class="w-full px-2 py-1 border border-gray-300 rounded text-xs focus:outline-none focus:ring-1 focus:ring-blue-500" required>
                                                    <option value="">Select Purchase Unit</option>
                                                    @foreach($purchaseUnits as $purchaseUnit)
                                                    <option value="{{ $purchaseUnit->id }}">{{ $purchaseUnit->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('productDetails.{{ $index }}.purchase_unit_id')
                                                {{ $error->message }}
                                                @enderror
                                            </td>

                                            <td class="px-4 py-3">
                                                <input wire:model="productDetails.{{ $index }}.quantity" wire:change="calculateAmount({{ $index }})" type="number" class="w-full px-2 py-1 border border-gray-300 rounded text-xs focus:outline-none focus:ring-1 focus:ring-blue-500" min="0" step="0.01" required>
                                                @error('productDetails.{{ $index }}.quantity')
                                                {{ $error->message }}
                                                @enderror
                                            </td>

                                            <td class="px-4 py-3">
                                                <input wire:model="productDetails.{{ $index }}.rate" wire:change="calculateAmount({{ $index }})" type="number" class="w-full px-2 py-1 border border-gray-300 rounded text-xs focus:outline-none focus:ring-1 focus:ring-blue-500" min="0" step="0.01" required>
                                                @error('productDetails.{{ $index }}.rate')
                                                {{ $error->message }}
                                                @enderror
                                            </td>

                                            <td class="px-4 py-3">
                                                <input wire:model="productDetails.{{ $index }}.amount" type="number" class="w-full px-2 py-1 border border-gray-300 rounded text-xs bg-gray-100" readonly>
                                                @error('productDetails.{{ $index }}.amount')
                                                {{ $error->message }}
                                                @enderror

                                            </td>

                                            <td class="px-4 py-3">
                                                <button type="button" wire:click="removeProductRow({{ $index }})" class="px-2 py-1 text-xs font-medium text-white bg-red-500 rounded hover:bg-red-600 transition-colors">
                                                    Remove
                                                </button>
                                            </td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        {{-- Third Line --}}
                        {{-- This div makes the summary table align right and control its width --}}
                        <div class="mt-6 w-full md:w-2/3 lg:w-2/3 ml-auto"> 
                            <table class="w-full text-sm text-gray-700 border border-gray-300 align-right">
                                <tbody class="bg-white">
                                    <tr>
                                        <td class="px-4 py-2 font-semibold text-right border-b border-gray-200">Total Amount:</td>
                                        <td class="px-4 py-2 font-semibold text-right border-b border-gray-200">Total Amount:</td>
                                        <td class="px-4 py-2 text-right border-b border-gray-200">
                                            {{-- ₹ {{ number_format($totalAmount ?? 0, 2) }} --}}
                                            ₹ {{ number_format($this->getTotalAmount() ?? 0, 2) }}
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold text-right border-b border-gray-200">Discount:</td>
                                        <td class="px-4 py-2 text-right border-b border-gray-200">
                                            <input wire:model.live="discount" type="number" class="w-full text-right px-2 py-1 border border-gray-300 rounded text-xs focus:outline-none focus:ring-1 focus:ring-blue-500" min="0" step="0.01" placeholder="0.00">
                                            @error('discount')
                                            <span class="text-red-500 text-xs">{{ $error->message }}</span>
                                            @enderror
                                        </td>
                                        <td class="px-4 py-2 text-right border-b border-gray-200">₹ 0.00
                                            {{-- {{ $this->discount }} --}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold text-right border-b border-gray-200">Coupon:</td>
                                        <td class="px-4 py-2 text-right border-b border-gray-200">
                                            <input wire:model.live="coupon" type="text" class="w-full text-right px-2 py-1 border border-gray-300 rounded text-xs focus:outline-none focus:ring-1 focus:ring-blue-500" placeholder="Enter coupon code">
                                            @error('coupon')
                                            <span class="text-red-500 text-xs">{{ $error->message }}</span>
                                            @enderror
                                        </td>
                                        <td class="px-4 py-2 font-semibold text-right border-b border-gray-200">₹ </td>
                                    </tr>
                                    <tr class="bg-gray-100">
                                        <td class="px-4 py-3 font-bold text-right">Amount Payable:</td>
                                        <td class="px-4 py-3 font-bold text-right"></td>
                                        <td class="px-4 py-3 font-bold text-right text-lg text-blue-700">
                                             ₹ {{ number_format($this->getTotalAmount() ?? 0, 2) }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        {{-- Fourth Line --}}
                        <div class="mt-6 flex justify-end">
                            <button wire:click="saveProductDetails" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 ">
                                Save Product Details
                            </button>
                        </div>

                        {{-- Fifth Line --}}
                        {{-- <div class="mt-6 flex justify-start">
                            <div class="mt-4 text-xs text-gray-500">
                            <h3 class="font-bold text-gray-700 mb-3">Privacy Policy</h3>
                            <p>Your privacy is important to us. We handle your personal data in accordance with our <a href="#" class="text-blue-600 hover:underline">Privacy Policy</a>, which outlines how we collect, use, and protect your information.</p>
                            </div>
                        </div> --}}

                        {{-- Sixth Line --}}
                        {{-- <div class="mt-4 text-xs text-gray-500">
                            <h3 class="font-bold text-gray-700 mb-3">Contact Information</h3>
                            <p>Have questions or need assistance?</p>
                            <ul class="space-y-2 mt-2">
                                <li><strong>Email:</strong> <a href="mailto:support@yourcompany.com" class="text-blue-600 hover:underline">support@yourcompany.com</a></li>
                                <li><strong>Phone:</strong> +91 XXXXXXXXXX</li>
                                <li><strong>Address:</strong> [Your Full Address Here], Jiaganj, West Bengal, India</li>
                                <li><strong>Operating Hours:</strong> Monday - Friday, 9:00 AM - 6:00 PM IST</li>
                            </ul>
                        </div> --}}

                    </div>

                    <div class="text-center mt-8 pt-4 border-t border-gray-200 text-xs text-gray-500">
                        <p>&copy; {{ date('Y') }} [Your Company Name]. All rights reserved.</p>
                    </div>
                </div>
            </div>
        
        
        
        </div>            
    </div>
</div>