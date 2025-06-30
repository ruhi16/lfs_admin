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

            <div class="flex justify-around items-center mb-2 p-2 bg-purple-300 rounded-lg shadow-lg">
                <h2 class="text-lg font-semibold text-gray-800">Product Available List as on: {{ \Carbon\Carbon::now()->format('F d, Y') }}</h2>
                
            </div>
            <div class="mb-6">
                            

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
                        <tbody>
                            @foreach($purchases as $purchase)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-2 border-b border-gray-300">{{ $loop->iteration }}</td>
                                <td class="px-4 py-2 border-b border-gray-300">{{ $purchase->id }}</td>
                                <td class="px-4 py-2 border-b border-gray-300">{{ $purchase->id }}</td>
                                
                                <td class="px-4 py-2 border-b border-gray-300">
                                    <table class="w-full text-xs text-left text-gray-700 border border-gray-300">
                                        <thead class="text-gray-600 uppercase bg-gray-100">
                                            <tr>
                                                <th class="px-4 py-0 border-b border-gray-300">ID</th>
                                                <th class="px-4 py-0 border-b border-gray-300">Product</th>
                                                <th class="px-4 py-0 border-b border-gray-300">Unit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($purchase->purchaseProducts as $purchaseProduct)
                                            <tr class="hover:bg-gray-50">
                                                <td class="px-4 py-0 border-b border-gray-300">{{ $purchaseProduct->id }}</td>
                                                <td class="px-4 py-0 border-b border-gray-300">{{ $purchaseProduct->product_id }}</td>
                                                <td class="px-4 py-0 border-b border-gray-300">{{ $purchaseProduct->purchaseUnit->name }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{-- @foreach($purchase->purchaseProducts as $purchaseProduct)
                                    {{ $purchaseProduct->id }}<br>
                                    @endforeach --}}
                                </td>
                                {{-- <td class="px-4 py-2 border-b border-gray-300">{{ $purchase->category->name }}</td> --}}
                                {{-- <td class="px-4 py-2 border-b border-gray-300">{{ $purchase->id }}</td> --}}
                                {{-- <td class="px-4 py-2 border-b border-gray-300">{{ $purchase->unit }}</td> --}}
                                {{-- <td class="px-4 py-2 border-b border-gray-300">{{ $purchase->quantity }}</td> --}}
                                {{-- <td class="px-4 py-2 border-b border-gray-300">{{ $purchase->rate }}</td>
                                <td class="px-4 py-2 border-b border-gray-300">{{ $purchase->amount }}</td> --}}
                                <td class="px-4 py-2 border-b border-gray-300">
                                    {{-- <button wire:click="editPurchase({{ $purchase->id }})" class="text-blue-600 hover:text-blue-800">Edit</button>
                                    <button wire:click="deletePurchase({{ $purchase->id }})" class="text-red-600 hover:text-red-800">Delete</button> --}}
                                </td>   


                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>            