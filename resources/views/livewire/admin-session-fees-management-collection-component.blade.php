<div>

    <div class="flex gap-2">

        <aside class="">

        </aside>

        <main class="flex-1 gap-2 flex flex-col">

            <div class="bg-slate-100 h-max-screen flex-1 p-4 rounded-md">
                <h1>Fee Collection </h1>
                <div>
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                    @elseif (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif
                </div>






                <h3>For Class: {{ $myclasses->where('id', 1)->first()->name }}</h3>
                <table class="min-w-full text-sm text-left border border-gray-300" id="dataTable">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-3 py-2 font-medium text-gray-900 border-b border-gray-300 cursor-pointer">ID </th>
                            <th class="px-3 py-2 font-medium text-gray-900 border-b border-gray-300 cursor-pointer">Name</th>
                            <th class="px-3 py-2 font-medium text-gray-900 border-b border-gray-300 cursor-pointer">Section-Roll</th>
                            <th class="px-3 py-2 font-medium text-gray-900 border-b border-gray-300 cursor-pointer">Schedules</th>
                            <th class="px-3 py-2 font-medium text-gray-900 border-b border-gray-300 cursor-pointer">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($studentcrs as $studentcr)
                        <tr class="border-b border-gray-300">
                            <td class="px-3 py-2">{{ $studentcr->id }}</td>
                            <td class="px-3 py-2">{{ $studentcr->studentdb->name }}</td>
                            <td class="px-3 py-2">{{ $studentcr->section->name }}-{{ $studentcr->roll_no }}</td>
                            <td class="px-3 py-2">
                                {{-- {{ json_encode($myclasses->where('id', $studentcr->myclass_id)->first()->mandates->first()->mandateDates ) }} --}}
                                @php 
                                    $mandateFeeMonthly = $myclasses->where('id', $studentcr->myclass_id)->first()->mandates->first();
                                    $mandateFeeMonthlyDates = $mandateFeeMonthly->mandateDates;

                                    // $hasMandateDates = $mandateDates->isNotEmpty();
                                    // $hasMandateDates = $hasMandateDates ? $hasMandateDates : false;

                                @endphp
                                @foreach($mandateFeeMonthlyDates as $scheduleDate)
                                    <button 
                                        wire:click="collectFees({{ $studentcr->id }}, {{ $mandateFeeMonthly->id }}, {{ $scheduleDate->id }})" 
                                        class="inline-block bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs font-semibold mr-2 mb-2">
                                        {{ \Carbon\Carbon::parse($scheduleDate->schedule_date)->format('d-m-Y') }}
                                    </button>
                                @endforeach
                            </td>
                            <td class="px-3 py-2">
                                {{ $mandateFeeMonthly->id }}
                                {{-- <button wire:click="collectFees({{ $studentcr->id }})" class="bg-blue-500 text-white px-4 py-2 rounded">Collect Fees</button> --}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

            <div class="bg-slate-100 h-max-screen flex-1 p-4 rounded-md">
                <h1>Student's Fee Details </h1>
                <div>
                    @if (session()->has('fee_collection_message'))
                    <div class="alert alert-success">
                        {{ session('fee_collection_message') }}
                    </div>
                    @elseif (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif
                </div>

                <div>
                    
                    


                </div>

            </div>
            {{-- @livewire('admin-session-fees-management-receipt-component') --}}

            @if($isReceiptVisible)
            {{-- @php dd($receiptFeeMandateId, $receiptFeeMandateDateId, $receiptStudentcrId); @endphp --}}
            {{-- dd($mandateFeeMonthlyDateId); --}}
                @livewire('admin-session-fees-management-receipt-component', ['receiptStudentcrId' => $receiptStudentcrId, 'receiptFeeMandateId' => $receiptFeeMandateId, 'receiptFeeMandateDateId' => $receiptFeeMandateDateId])
            @endif

            {{-- @livewire('admin-session-fees-management-receipt-component', ['studentcrId' => $studentcr, 'mandateId' => $mandateFeeMonthly, 'mandateDateId' => $scheduleDate]) --}}
        </main>
    </div>