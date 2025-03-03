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
        <!-- Step 1: Office Info --> Step:{{$step}}
        @if ($step == 1)
            {{-- First Line --}}
            <div class="mb-8">
                <div class="flex justify-between gap-2">
                    <div class="w-1/3 text-left">

                        <div class="flex justify-between gap-2">
                            <div class="mb-4 w-1/2">
                                <label for="studentdb_id" class="block text-gray-700">StudentDB Id:</label>
                                <input disabled type="text" wire:model="studentdb_id" id="studentdb_id" class="w-full px-4 py-2 border rounded-lg">
                                @error('studentdb_id') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-4 w-1/2">
                                <label for="student_uuid" class="block text-gray-700">UUID:</label>
                                <input disabled type="text" wire:model="student_uuid" id="student_uuid" class="w-full px-4 py-2 border rounded-lg">
                                @error('student_uuid') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        
                    </div>
                    <div class="w-1/3 text-left">
                        <div class="flex justify-between gap-2">
                            <div class="mb-4 w-1/2">
                                <label for="adm_book_no" class="block text-gray-700">Adm Book No:</label>
                                <select wire:model="adm_book_no" id="adm_book_no" class="w-full px-4 py-2 border rounded-lg">                                
                                    <option value="">Select One</option>
                                    <option value="book1">Book 1 </option>
                                    <option value="book2">Book 2</option>
                                    <option value="book3">Book 3</option>                                    
                                    <option value="Other">Other</option>
                                </select>
                                {{-- <input type="text" wire:model="adm_book_no" id="adm_book_no" class="w-full px-4 py-2 border rounded-lg"> --}}
                                @error('adm_book_no') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-4 w-1/2">
                                <label for="adm_book_slno" class="block text-gray-700">Adm Book Sl No:</label>
                                <input type="text" wire:model="adm_book_slno" id="adm_book_slno" class="w-full px-4 py-2 border rounded-lg">
                                @error('adm_book_slno') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        
                    </div>
                    <div class="w-1/3 text-left">
                        <div class="flex justify-between gap-2">
                            <div class="mb-4 w-1/2">
                                <label for="adm_class" class="block text-gray-700">Adm Class:</label>
                                <select wire:model="adm_class" id="adm_class" class="w-full px-4 py-2 border rounded-lg">                                
                                    <option value="">Select One</option>
                                    <option value="babyland">Baby Land</option>
                                    <option value="lkg">LKG</option>
                                    <option value="ukg">UKG</option>
                                    <option value="class1">Class 1</option>
                                    <option value="class2">Class 2</option>
                                    <option value="class3">Class 3</option>
                                    <option value="class4">Class 4</option>
                                    <option value="class5">Class 5</option>
                                    <option value="Other">Other</option>
                                </select>
                                {{-- <input type="text" wire:model="adm_class" id="adm_class" class="w-full px-4 py-2 border rounded-lg"> --}}
                                @error('adm_class') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-4 w-1/2">
                                <label for="adm_section" class="block text-gray-700">Adm Section:</label>
                                <select wire:model="adm_section" id="adm_section" class="w-full px-4 py-2 border rounded-lg">                                
                                    <option value="">Select One</option>
                                    <option value="AB+">Section A</option>
                                    <option value="AB+">Section B</option>
                                    <option value="AB+">Section C</option>                                    
                                    <option value="Other">Other</option>
                                </select>
                                {{-- <input type="text" wire:model="adm_section" id="adm_section" class="w-full px-4 py-2 border rounded-lg"> --}}
                                @error('adm_section') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>

            {{-- Second Line --}}
            <div class="flex justify-between gap-2">
                <div class="w-1/3 text-left">                        
                    <div class="mb-4">
                        <label for="student_name" class="block text-gray-700">Student Name:</label>
                        <input type="text" wire:model="student_name" id="student_name" class="w-full px-4 py-2 border rounded-lg">
                        @error('student_name') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>                                            
                </div>

                <div class="w-1/3 text-left">
                    <div class="flex justify-between gap-2">                    
                        <div class="mb-4 w-1/2">
                            <label for="student_gender" class="block text-gray-700">Gender:</label>
                            <select wire:model="student_gender" id="student_gender" class="w-full px-4 py-2 border rounded-lg">
                                <option value="">Select One</option>
                                <option value="male">Boy</option>
                                <option value="female">Girl</option>
                                <option value="others">Others</option>
                            </select>
                            @error('student_gender') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-4 w-1/2">
                            <label for="student_dob" class="block text-gray-700">Date of Birth:</label>
                            <input type="date" wire:model="student_dob" id="student_dob" class="w-full px-4 py-2 border rounded-lg">
                            @error('student_dob') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        
                    </div>
                </div>

                <div class="w-1/3 text-left">
                    <div class="flex justify-between gap-2">
                        <div class="mb-4 w-1/2">
                            <label for="student_aadhar" class="block text-gray-700">Aadhar No:</label>
                            <input type="text" wire:model="student_aadhar" id="student_aadhar" class="w-full px-4 py-2 border rounded-lg">
                            @error('student_aadhar') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-4 w-1/2">
                            <label for="student_blood_grp" class="block text-gray-700">Blood Group::</label>
                            <select wire:model="student_blood_grp" id="student_blood_grp" class="w-full px-4 py-2 border rounded-lg">                                
                                <option value="">Select One</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="Other">Other</option>
                            </select>
                            {{-- <input type="text" wire:model="student_blood_grp" id="student_blood_grp" class="w-full px-4 py-2 border rounded-lg"> --}}
                            @error('student_blood_grp') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>

                </div>    
            </div>

            {{-- Third Line --}}
            <div class="mb-8">
                <div class="flex justify-between gap-2">
                    <div class="w-1/3 text-left">

                        <div class="flex justify-between gap-2">
                            <div class="mb-4 w-1/2">
                                <label for="student_religion" class="block text-gray-700">Religion:</label>
                                <select wire:model="student_religion" id="student_religion" class="w-full px-4 py-2 border rounded-lg">                                
                                    <option value="">Select One</option>
                                    <option value="Hindu">Hinduism</option>
                                    <option value="Muslim">Islam</option>
                                    <option value="Christian">Christian</option>
                                    <option value="Jain">Jain</option>
                                    <option value="Sikh">Sikh</option>                                    
                                    <option value="Other">Other</option>
                                </select>
                                {{-- <input type="text" wire:model="student_religion" id="student_religion" class="w-full px-4 py-2 border rounded-lg"> --}}
                                @error('student_religion') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-4 w-1/2">
                                <label for="student_caste" class="block text-gray-700">Caste:</label>
                                <select wire:model="student_caste" id="student_caste" class="w-full px-4 py-2 border rounded-lg">                                
                                    <option value="">Select One</option>
                                    <option value="General">General</option>
                                    <option value="ObcA">OBC A</option>
                                    <option value="ObcB">OBC B</option>
                                    <option value="SC">Schedule Caste</option>
                                    <option value="ST">Schedule Tribe</option>
                                    <option value="EC">Exempted Category</option>                                    
                                    <option value="Other">Other</option>
                                </select>
                                {{-- <input type="text" wire:model="student_caste" id="student_caste" class="w-full px-4 py-2 border rounded-lg"> --}}
                                @error('student_caste') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        
                    </div>
                    <div class="w-1/3 text-left">
                        <div class="flex justify-between gap-2">
                            <div class="mb-4">
                                <label for="adm_book_no" class="block text-gray-700">Option 1:</label>
                                <input disabled type="text" wire:model="adm_no" id="adm" class="w-full px-4 py-2 border rounded-lg">
                                @error('adm_book_no') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-4">
                                <label for="adm_book_slno" class="block text-gray-700">Option 2:</label>
                                <input disabled type="text" wire:model="adm_bono" id="adm" class="w-full px-4 py-2 border rounded-lg">
                                @error('adm_book_slno') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        
                    </div>
                    <div class="w-1/3 text-left">
                        <div class="flex justify-between gap-2">
                            <div class="mb-4">
                                <label for="adm_class" class="block text-gray-700">Option 3:</label>
                                <input disabled type="text" wire:model="adm_cl" id="adm" class="w-full px-4 py-2 border rounded-lg">
                                @error('adm_class') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-4">
                                <label for="adm_section" class="block text-gray-700">Option 4:</label>
                                <input disabled type="text" wire:model="adm_ion" id="adm" class="w-full px-4 py-2 border rounded-lg">
                                @error('adm_section') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>

        @endif

        <!-- Step 2: Student Info -->
        @if ($step == 2)            
                
            {{-- First Line info --}}
            <div class="mb-8">

                <div class="flex justify-between gap-2">
                    <div class="w-1/2 text-left">       
                        <div class="flex justify-between gap-2">                 
                            <div class="mb-4 w-2/3">
                                <label for="father_name" class="block text-gray-700">Father Name:</label>
                                <input type="text" wire:model="father_name" id="father_name" class="w-full px-4 py-2 border rounded-lg">
                                @error('father_name') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div> 
                            <div class="mb-4 w-1/3">
                                <label for="father_aadhar" class="block text-gray-700">Father Aadhar:</label>
                                <input type="text" wire:model="father_aadhar" id="father_aadhar" class="w-full px-4 py-2 border rounded-lg">
                                @error('father_aadhar') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>                        
                    </div>

                    <div class="w-1/2 text-left">       
                        <div class="flex justify-between gap-2">                 
                            <div class="mb-4 w-2/3">
                                <label for="mother_name" class="block text-gray-700">Mother Name:</label>
                                <input type="text" wire:model="mother_name" id="mother_name" class="w-full px-4 py-2 border rounded-lg">
                                @error('mother_name') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div> 
                            <div class="mb-4 w-1/3">
                                <label for="mother_aadhar" class="block text-gray-700">Mother Aadhar:</label>
                                <input type="text" wire:model="mother_aadhar" id="mother_aadhar" class="w-full px-4 py-2 border rounded-lg">
                                @error('mother_aadhar') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>                        
                    </div>

                </div>
            </div>            

            {{-- Second Line info --}}
            <div class="mb-2">
                <div class="flex justify-between gap-2">

                    <div class="w-1/2 text-left">
                        <div class="mb-2">
                            <label for="addr_line1" class="block text-gray-700">Address Line 1:</label>
                            <input type="text" wire:model="addr_line1" id="addr_line1" class="w-full px-4 py-2 border rounded-lg">
                            @error('addr_line1') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>                        
                    </div>

                    <div class="w-1/2 text-left">
                        <div class="mb-2">
                            <label for="addr_line2" class="block text-gray-700">Address Line 2:</label>
                            <input type="text" wire:model="addr_line2" id="addr_line2" class="w-full px-4 py-2 border rounded-lg">
                            @error('addr_line2') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>

                </div>
            </div>

            {{-- Third Line info --}}
            <div class="mb-2">
                <div class="flex justify-between gap-2">

                    <div class="w-1/4 text-left">
                        <div class="mb-1">
                            <label for="addr_po" class="block text-gray-700">Post Office:</label>
                            <input type="text" wire:model="addr_po" id="addr_po" class="w-full px-4 py-2 border rounded-lg">
                            @error('addr_po') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="w-1/4 text-left">
                        <div class="mb-1">
                            <label for="addr_ps" class="block text-gray-700">Police Station:</label>
                            <input type="text" wire:model="addr_ps" id="addr_ps" class="w-full px-4 py-2 border rounded-lg">
                            @error('addr_ps') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>                        
                    </div>

                    <div class="w-1/4 text-left">
                        <div class="mb-1">
                            <label for="addr_dist" class="block text-gray-700">District:</label>
                            <input type="text" wire:model="addr_dist" id="addr_dist" class="w-full px-4 py-2 border rounded-lg">
                            @error('addr_dist') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="w-1/4 text-left">
                        <div class="mb-1">
                            <label for="addr_pin" class="block text-gray-700">Pin:</label>
                            <input type="text" wire:model="addr_pin" id="addr_pin" class="w-full px-4 py-2 border rounded-lg">
                            @error('addr_pin') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>                        
                    </div>
                    
                </div>
            </div>

            {{-- Fourth Line info --}}
            <div class="mb-8">
                <div class="flex justify-between gap-2">

                    <div class="w-1/4 text-left">
                        <div class="mb-1">
                            <label for="addr_state" class="block text-gray-700">State:</label>
                            <input type="text" wire:model="addr_state" id="addr_state" class="w-full px-4 py-2 border rounded-lg">
                            @error('addr_state') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="w-1/4 text-left">
                        <div class="mb-1">
                            <label for="addr_nation" class="block text-gray-700">Nationality:</label>
                            <input type="text" wire:model="addr_nation" id="addr_nation" class="w-full px-4 py-2 border rounded-lg">
                            @error('addr_nation') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>                        
                    </div>
                    
                    <div class="w-1/4 text-left">
                        <div class="mb-1">
                            <label for="addr_mobile1" class="block text-gray-700">Mobile 1:</label>
                            <input type="text" wire:model="addr_mobile1" id="addr_mobile1" class="w-full px-4 py-2 border rounded-lg">
                            @error('addr_mobile1') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="w-1/4 text-left">
                        <div class="mb-1">
                            <label for="addr_mobile2" class="block text-gray-700">Mobile 2:</label>
                            <input type="text" wire:model="addr_mobile2" id="addr_mobile2" class="w-full px-4 py-2 border rounded-lg">
                            @error('addr_mobile2') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>                        
                    </div>

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