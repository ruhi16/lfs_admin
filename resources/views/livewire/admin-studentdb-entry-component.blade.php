{{-- <div>
    A good traveler has no fixed plans and is not intent upon arriving.
</div> --}}
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Student Data Entry Form</h1>

    <!-- Progress Bar -->
    <div class="mb-8">
        <div class="flex justify-between">
            <div class="w-1/3 text-center">
                <span class="inline-block px-4 py-2 rounded-full {{ $step >= 1 ? 'bg-blue-500 text-white' : 'bg-gray-300 text-gray-700' }}">Step 1: Office Info</span>
            </div>
            <div class="w-1/3 text-center">
                <span class="inline-block px-4 py-2 rounded-full {{ $step >= 2 ? 'bg-blue-500 text-white' : 'bg-gray-300 text-gray-700' }}">Step 2: Student Info</span>
            </div>
            <div class="w-1/3 text-center">
                <span class="inline-block px-4 py-2 rounded-full {{ $step >= 3 ? 'bg-blue-500 text-white' : 'bg-gray-300 text-gray-700' }}">Step 3: Payment Info</span>
            </div>
        </div>
    </div>

    <!-- Form -->
    <form wire:submit.prevent="{{ $step == 3 ? 'submit' : 'nextStep' }}" class="bg-white p-6 rounded-lg shadow-md">
        <!-- Step 1: Office Info -->
        @if ($step == 1)
            <div>
                <h2 class="text-xl font-semibold mb-4">Office Information</h2>
                <div class="mb-4">
                    <label for="office_name" class="block text-gray-700">Office Name</label>
                    <input type="text" wire:model="office_name" id="office_name" class="w-full px-4 py-2 border rounded-lg">
                    @error('office_name') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="mb-4">
                    <label for="office_address" class="block text-gray-700">Office Address</label>
                    <input type="text" wire:model="office_address" id="office_address" class="w-full px-4 py-2 border rounded-lg">
                    {{-- @error('office_address') <span class="text-red-500">{{ $message }}</span> @enderror --}}
                </div>
            </div>
        @endif

        <!-- Step 2: Student Info -->
        @if ($step == 2)
            <div>
                <h2 class="text-xl font-semibold mb-4">Student Information</h2>
                <div class="mb-4">
                    <label for="student_name" class="block text-gray-700">Student Name</label>
                    <input type="text" wire:model="student_name" id="student_name" class="w-full px-4 py-2 border rounded-lg">
                    @error('student_name') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="mb-4">
                    <label for="student_email" class="block text-gray-700">Student Email</label>
                    <input type="email" wire:model="student_email" id="student_email" class="w-full px-4 py-2 border rounded-lg">
                    {{-- @error('student_email') <span class="text-red-500">{{ $message }}</span> @enderror --}}
                </div>
            </div>
        @endif

        <!-- Step 3: Payment Info -->
        @if ($step == 3)
            <div>
                <h2 class="text-xl font-semibold mb-4">Payment Information</h2>
                <div class="mb-4">
                    <label for="payment_method" class="block text-gray-700">Payment Method</label>
                    <select wire:model="payment_method" id="payment_method" class="w-full px-4 py-2 border rounded-lg">
                        <option value="credit_card">Credit Card</option>
                        <option value="paypal">PayPal</option>
                        <option value="bank_transfer">Bank Transfer</option>
                    </select>
                    @error('payment_method') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="mb-4">
                    <label for="amount" class="block text-gray-700">Amount</label>
                    <input type="number" wire:model="amount" id="amount" class="w-full px-4 py-2 border rounded-lg">
                    {{-- @error('amount') <span class="text-red-500">{{ $message }}</span> @enderror --}}
                </div>
            </div>
        @endif

        <!-- Navigation Buttons -->
        <div class="flex justify-between mt-6">
            @if ($step > 1)
                <button type="button" wire:click="previousStep" class="bg-gray-500 text-white px-4 py-2 rounded-lg">Previous</button>
            @else
                <div></div> <!-- Empty div for spacing -->
            @endif

            @if ($step < 3)
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Next</button>
            @else
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-lg">Submit</button>
            @endif
        </div>
    </form>

    <!-- Success Message -->
    @if (session()->has('message'))
        <div class="mt-4 p-4 bg-green-100 text-green-700 rounded-lg">
            {{ session('message') }}
        </div>
    @endif
</div>