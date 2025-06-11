<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fee Receipt - D.A.V. Public School</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f5f5f5;
            padding: 20px;
            color: #333;
        }
        
        .receipt-container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 5px;
        }
        
        .school-header {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .school-name {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .school-address {
            font-size: 14px;
            margin-bottom: 5px;
        }
        
        hr {
            border: none;
            border-top: 2px solid #ddd;
            margin: 20px 0;
        }
        
        .receipt-title {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 25px;
        }
        
        .student-info {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 15px;
            margin-bottom: 25px;
        }
        
        .info-row {
            display: flex;
        }
        
        .info-label {
            font-weight: bold;
            min-width: 120px;
        }
        
        .info-separator {
            margin: 0 5px;
        }
        
        .fees-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 25px;
        }
        
        .fees-table th, .fees-table td {
            border: 1px solid #ddd;
            padding: 8px 12px;
            text-align: left;
        }
        
        .fees-table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        
        .fees-table td:last-child, .fees-table th:last-child {
            text-align: right;
        }
        
        .total-amount {
            text-align: right;
            margin-bottom: 25px;
        }
        
        .amount-in-words {
            font-style: italic;
            font-size: 14px;
        }
        
        .amount-figure {
            font-size: 20px;
            font-weight: bold;
        }
        
        .notes {
            font-size: 12px;
            margin-bottom: 30px;
        }
        
        .notes strong {
            display: block;
            margin-bottom: 5px;
        }
        
        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }
        
        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        
        .btn-preview {
            background-color: #4CAF50;
            color: white;
        }
        
        .btn-print {
            background-color: #2196F3;
            color: white;
        }
        
        .btn:hover {
            opacity: 0.9;
        }
        
        @media print {
            body {
                background-color: white;
                padding: 0;
            }
            
            .receipt-container {
                box-shadow: none;
                padding: 0;
                max-width: 100%;
            }
            
            .action-buttons {
                display: none;
            }
        }
        
        @media (max-width: 600px) {
            .student-info {
                grid-template-columns: 1fr;
            }
            
            .receipt-container {
                padding: 15px;
            }
            
            .action-buttons {
                flex-direction: column;
                gap: 10px;
            }
            
            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="receipt-container">
        <!-- School Header -->
        <div class="school-header">
            <div class="school-name">D.A.V. PUBLIC SCHOOL, VELACHERY</div>
            <div class="school-address">
                <strong>Main School :</strong> 19, Sitaram Nagar, Velachery, Chennai 42. <strong>Phone No. :</strong> 044-6606 9806
            </div>
            <div class="school-address">
                <strong>Pre Primary (Vatika) :</strong> Plot No. 131 & 132, Bhuvaneswari Nagar, Velachery, Chennai 42. <strong>Phone No. :</strong> 044-4862 9009
            </div>
        </div>

        <hr>

        <!-- Receipt Title -->
        <div class="receipt-title">
            ONLINE FEE RECEIPT FOR THE ACADEMIC YEAR : 2022-2023
        </div>

        <!-- Student Information -->
        <div class="student-info">
            <div class="info-row">
                <span class="info-label">Student Name</span>
                <span class="info-separator">:</span>
                <span>ADDHARSH SIVABALAN</span>
            </div>
            <div class="info-row">
                <span class="info-label">Admission No</span>
                <span class="info-separator">:</span>
                <span>KG-2022-006</span>
            </div>
            <div class="info-row">
                <span class="info-label">Payment Date</span>
                <span class="info-separator">:</span>
                <span>06-06-2022</span>
            </div>
            <div class="info-row">
                <span class="info-label">Receipt No</span>
                <span class="info-separator">:</span>
                <span>647</span>
            </div>
            <div class="info-row">
                <span class="info-label">Fathers name</span>
                <span class="info-separator">:</span>
                <span>RAMKUMAR</span>
            </div>
            <div class="info-row">
                <span class="info-label">Class and Section</span>
                <span class="info-separator">:</span>
                <span>LKG - B</span>
            </div>
            <div class="info-row">
                <span class="info-label">Mothers name</span>
                <span class="info-separator">:</span>
                <span>KIRTHANA</span>
            </div>
            <div class="info-row">
                <span class="info-label">Father's Mobile No</span>
                <span class="info-separator">:</span>
                <span>9176757905</span>
            </div>
        </div>

        <!-- Fees Table -->
        <table class="fees-table">
            <thead>
                <tr>
                    <th>Particulars</th>
                    <th>Due</th>
                    <th>Paid (Rs)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tuition Fee Term-II (Oct - Jan)</td>
                    <td>9400.00</td>
                    <td>9400.00</td>
                </tr>
                <tr>
                    <td>Tuition Fee Term-III (Feb - May)</td>
                    <td>9400.00</td>
                    <td>9400.00</td>
                </tr>
                <tr>
                    <td>Transport Fees Term I (June - Sep)</td>
                    <td>8800.00</td>
                    <td>8800.00</td>
                </tr>
            </tbody>
        </table>

        <!-- Total Amount -->
        <div class="total-amount">
            <div class="amount-in-words">Total Amount in Words : [ Rupees Twenty Seven Thousand Six Hundred Only]</div>
            <div class="amount-figure">Rs.27600.00</div>
        </div>

        <hr>

        <!-- Notes -->
        <div class="notes">
            <strong>NOTE:</strong>
            <p>1. This is a Computer Generated Fee Payment Receipt, 'No Signature' is required.</p>
            <p>2. Parents are advised to keep the receipt securely as it cannot be issued by School, if misplaced.</p>
            <p>3. Due to Pandemic, Fees Revision has not taken place since 2019-2020. The fees is subject to Revision as and when advised by the Concerned Authorities and is payable by Parent. The Revision of fees will be notified.</p>
            <p>4. Admission Fee is not Refundable.</p>
        </div>

        <!-- Action Buttons -->
        <div class="action-buttons">
            <button class="btn btn-preview" onclick="window.print()">Print Receipt</button>
            <button class="btn btn-print" onclick="previewReceipt()">Preview Receipt</button>
        </div>
    </div>

    <script>
        function previewReceipt() {
            // Open a new window with the receipt content for preview
            const previewWindow = window.open('', '', 'width=800,height=600');
            const receiptContent = document.querySelector('.receipt-container').innerHTML;
            
            previewWindow.document.write(`
                <!DOCTYPE html>
                <html>
                <head>
                    <title>Receipt Preview</title>
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            padding: 20px;
                        }
                        .receipt-container {
                            max-width: 800px;
                            margin: 0 auto;
                        }
                        .fees-table {
                            width: 100%;
                            border-collapse: collapse;
                        }
                        .fees-table th, .fees-table td {
                            border: 1px solid #ddd;
                            padding: 8px;
                        }
                        .fees-table th {
                            background-color: #f2f2f2;
                        }
                        .action-buttons {
                            display: none;
                        }
                    </style>
                </head>
                <body>
                    <div class="receipt-container">
                        ${receiptContent}
                    </div>
                    <script>
                        window.onload = function() {
                            setTimeout(function() {
                                window.print();
                            }, 500);
                        };
                    </script>
                </body>
                </html>
            `);
            previewWindow.document.close();
        }
    </script>
</body>
</html>