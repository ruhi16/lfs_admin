<div>
    <style id="myStyle">
        .button-container {
            display: flex;
            justify-content: center;
            gap: 1.25rem;
            margin-top: 2rem;
        }

        @media print {

            .button-container,
            .no-print {
                display: none !important;
            }
        }

        .print-button,
        .pdf-button {
            color: #ffffff;
            font-weight: 700;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 1rem;
            padding-right: 1rem;
            border-radius: 0.25rem;
            transition: background-color 300ms;
            border: none;
            cursor: pointer;
        }

        .outer-container {
            background-color: #f3f4f6;
            padding: 1.25rem;
            color: #1f2937;
        }

        .print-container {
            max-width: 72rem;
            margin-left: auto;
            margin-right: auto;
            background-color: #ffffff;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            border-radius: 0.375rem;
            padding: 2rem;
        }

        .header-center {
            text-align: center;
            margin-bottom: 0.5rem;
        }

        .school-name {
            font-size: 1.25rem;
            line-height: 1.75rem;
            font-weight: 700;
            margin-bottom: 0.25rem;
        }

        .school-details {
            font-size: 0.875rem;
            line-height: 1.25rem;
            margin-bottom: 0.25rem;
        }

        .school-type {
            font-size: 1rem;
            line-height: 1.5rem;
        }

        .divider {
            border-top-width: 2px;
            border-color: #d1d5db;
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .receipt-title {
            text-align: center;
            font-size: 1.125rem;
            line-height: 1.75rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .student-info-grid {
            display: grid;
            grid-template-columns: repeat(1, minmax(0, 1fr));
            gap: 0;
            margin-bottom: 1rem;
        }

        @media (min-width: 640px) {
            .student-info-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        .info-item {
            display: flex;
        }

        .uppercase {
            text-transform: uppercase;
        }

        .label {
            font-weight: 700;
            width: 12rem;
        }

        .bg-slate-100 {
            background-color: #f1f5f9;
        }

        .colon {
            margin-left: 0.5rem;
            margin-right: 0.5rem;
        }

        .fee-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 1rem;
        }

        .table-header {
            border: 1px solid #d1d5db;
            background-color: #e5e7eb;
            font-weight: 700;
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
            padding-left: 0.5rem;
            padding-right: 0.5rem;
            text-align: left;
        }

        .text-right {
            text-align: right;
        }

        .table-data {
            border: 1px solid #d1d5db;
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
            padding-left: 0.5rem;
            padding-right: 0.5rem;
        }

        .table-footer {
            border: 1px solid #d1d5db;
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
            padding-left: 0.5rem;
            padding-right: 0.5rem;
            font-weight: 700;
        }

        .notes {
            font-size: 0.875rem;
            line-height: 1.25rem;
            margin-bottom: 2rem;
        }

        .notes-title {
            display: block;
            margin-bottom: 0.25rem;
        }

        .note-item {
            margin-bottom: 0.25rem;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 1.25rem;
            margin-top: 2rem;
        }

        .print-button,
        .pdf-button {
            color: #ffffff;
            font-weight: 700;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 1rem;
            padding-right: 1rem;
            border-radius: 0.25rem;
            transition: background-color 300ms;
            border: none;
            cursor: pointer;
        }

        .print-button {
            background-color: #22c55e;
        }

        .print-button:hover {
            background-color: #15803d;
        }

        .pdf-button {
            background-color: #3b82f6;
        }

        .pdf-button:hover {
            background-color: #1d4ed8;
        }

        .no-print {
            /* This class remains for print-specific styles */
        }
    </style>

    {{-- Livewire component content starts here --}}


    <div>
        <div class="outer-container">
            <div class="print-container" id="receiptContainer">
                <div class="header-center">
                    <div class="school-name">{{ $school->name }}</div>
                    <div class="school-details">
                        <strong> {{ $school->details }}, {{ $school->ps }}, {{ $school->dist }}, Phone:
                            123456789</strong>
                    </div>
                    <div class="school-type">
                        <strong>An English Medium Pre-Primary School </strong>
                    </div>
                </div>

                <hr class="divider">

                <div class="receipt-title">
                    ONLINE FEE RECEIPT FOR THE ACADEMIC YEAR : {{ $session->name }}, Month: , 2025
                </div>
                <hr class="divider">

                <div class="student-info-grid">
                    <div class="info-item uppercase">
                        <span class="label bg-slate-100">Student Name</span>
                        <span class="colon">:</span>
                        <span class="value">{{ $receiptStudentcr->studentdb->name ?? 'XXX'}}, {{
                            $receiptStudentcr->studentdb->ssex ?? 'XXX' }}</span>
                    </div>
                    <div class="info-item">
                        <span class="label">Receipt No</span>
                        <span class="colon">:</span>
                        <span class="value">{{ $receiptStudentcr->id ?? 'XXX' }}</span>
                    </div>

                    <div class="info-item">
                        <span class="label">Class Section & Roll</span>
                        <span class="colon">:</span>
                        <span class="value">{{ $receiptStudentcr->myclass->name ?? 'XXX' }}-{{
                            $receiptStudentcr->section->name ?? 'XXX' }}, {{ $receiptStudentcr->roll_no ?? 'XXX'
                            }}</span>
                    </div>
                    <div class="info-item">
                        <span class="label">Payment Date</span>
                        <span class="colon">:</span>
                        <span class="value">{{ now()->format('d-m-Y') }}</span>
                    </div>

                    <div class="info-item">
                        <span class="label">Fathers name</span>
                        <span class="colon">:</span>
                        <span class="value">{{ $receiptStudentcr->studentdb->fname ?? 'XXX' }}</span>
                    </div>
                    <div class="info-item">
                        <span class="label">Admission No</span>
                        <span class="colon">:</span>
                        <span class="value">{{ $receiptStudentcr->studentdb->uuid_auto ?? 'XXX' }}</span>
                    </div>

                    <div class="info-item">
                        <span class="label">Mothers name</span>
                        <span class="colon">:</span>
                        <span class="value">{{ $receiptStudentcr->studentdb->mname ?? 'XXX' }}</span>
                    </div>
                    <div class="info-item">
                        <span class="label">Father's Mobile No</span>
                        <span class="colon">:</span>
                        <span class="value">{{ $receiptStudentcr->studentdb->mobl1 ?? 'XXX' }}</span>
                    </div>
                </div>

                <table class="fee-table">
                    <thead>
                        <tr>
                            <th class="table-header">Sl</th>
                            <th class="table-header">Fee Category</th>
                            <th class="table-header">Particulars</th>
                            <th class="table-header text-right">Amount (Rs)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($receiptFeeCollection->feeCollectionDetails as $feeCollection)
                        <tr>
                            <td class="table-data">{{ $feeCollection->id }}</td>
                            <td class="table-data">{{ $feeCollection->feeCategory->name }}</td>
                            <td class="table-data text-right">{{ $feeCollection->feeParticular->name }}</td>
                            <td class="table-data text-right">{{ $feeCollection->amount }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="table-footer" colspan="3">Total Amount in Words : [ Rupees Seven Hundred Ninty
                                Five Only]</td>
                            <td class="table-footer text-right">
                                {{ number_format($receiptFeeCollection->feeCollectionDetails->sum('amount'), 2 ) }}</td>
                        </tr>
                    </tfoot>
                </table>

                <div class="notes">
                    <strong class="notes-title">NOTE:</strong>
                    <p class="note-item">1. This is a Computer Generated Fee Payment Receipt, 'No Signature' is
                        required.</p>
                    <p class="note-item">2. Parents are advised to keep the receipt securely as it cannot be issued by
                        School, if misplaced.</p>
                    <p class="note-item">3. Due to Pandemic, Fees Revision has not taken place since 2019-2020. The fees
                        is subject to Revision as and when advised by the Concerned Authorities and is payable by
                        Parent. The Revision of fees will be notified.</p>
                    <p class="note-item">4. Admission Fee is not Refundable.</p>
                </div>



            </div> {{-- End of print: receipt-container --}}

            @if(!$isCaptchaVerified)
            @livewire('admin-captcha-component')
            @endif
            <div class="button-container no-print">
                {{ $isCaptchaVerified ? 'True' : 'False' }}

                <button class="pdf-button" id="myButton">
                    Print/Download PDF {{ $isCaptchaVerified ? 'True' : '(Captcha Required)' }}
                </button>

            </div>

        </div>
    </div>



</div> {{-- End of root Livewire component div --}}


<script>
    function openCompactPrintWindow() {
        const receiptContainer = document.getElementById('receiptContainer');
        const myStyle = document.getElementById('myStyle');
        // Create a new window for printing
        const printWindow = window.open('', '_blank', 'width=700,height=800');
        printWindow.document.write('<html><head><title>Print Receipt</title><head><style>');
        // printWindow.document.write('<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">');
        // printWindow.document.write('<style>body{font-family: Arial, sans-serif; margin: 20px;} .print-container{max-width: 800px; margin: auto; padding: 20px; border: 1px solid #ccc;}</style>');
        printWindow.document.write(myStyle.innerHTML);
        printWindow.document.write('</style></head><body>');
        // printWindow.document.write(`<div class="outer-container">`);
        printWindow.document.write(receiptContainer.innerHTML);

        printWindow.document.write('</div>');
        printWindow.document.write('<div class="button-container no-print">');
        printWindow.document.write('<button class="print-button" onclick="window.print()">Print Receipt</button>');
        // printWindow.document.write('<button class="pdf-button" id="myButton" onclick="openCompactPrintWindow()">Print/Download PDF</button>');
        printWindow.document.write('</div>');
        
        printWindow.document.write('</body></html>');
        // printWindow.document.close();
        printWindow.focus();
        // printWindow.print();
    }
    document.getElementById('myButton').addEventListener('click', function() {
        openCompactPrintWindow();
    });
       
</script>