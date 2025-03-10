<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Cards</title>
    <link rel="stylesheet" href="styles.css">
</head>
    
    {{-- <link rel="stylesheet" href="styles.css"> --}}
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
    background-color: #f0f0f0; /* Adjust as per the image */
}

.page {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

.id-card {
    background-color: #fff;
    background: linear-gradient(135deg, #e0f7fa, #6e7f82);
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
}

.header {
    margin-bottom: 15px;
}

.header img.logo {
    width: 50px;
    height: auto;
    margin-bottom: 10px;
    border-radius: 10%;
    border: 1px solid #ccc;
}

.header h1 {
    margin: 0;
    font-size: 18px;
    color: #333;
}

.header h2 {
    margin: 5px 0;
    font-size: 14px;
    color: #555;
}

.header h3 {
    margin: 5px 0;
    font-size: 12px;
    color: #777;
}

.contact-info {
    margin: 2px 0;
    font-size: 12px;
    color: #444;
}

.student-info {
    text-align: left;
    font-size: 12px;
    color: #333;
}

.student-info img.student-photo {
    width: 80px;
    height: auto;
    float: right;
    margin-left: 10px;
}

.student-info img.student-qrcode {
    width: 60px;
    height: auto;
    float: right;
    vertical-align: bottom;
    margin-left: 10px;
}

.student-info p {
    margin: 5px 0;
}

.footer {
    margin-top: 10px;
    font-size: 10px;
    color: #666;
}


    </style>

<body>
    <div class="page">
        <div class="id-card">
            <div class="header">
                <h1>Little Flower School</h1>
                <h2>(A English Medium Primary School)</h2>
                <h3>Affiliated to Board of WBPSCB</h3>
                <img src="{{ asset('logo.jpg')}}" alt="College Logo" class="logo">
            </div>
            <div class="contact-info">
                <p>Mb: 03482-256257</p>
                <p>www.littleflowerschool.co.in</p>
            </div>
            <div class="student-info">
                <img src="{{ asset('profile.jpg')}}" alt="Student Photo" class="student-photo">
                <img src="{{ asset('qr.png')}}" alt="Student Photo" class="student-qrcode">
                <p><strong>Name:</strong> Ram Charan Saha</p>
                {{-- <p><strong>Subject:</strong> Bengali</p> --}}
                <p><strong>C/O:</strong> Dasarath Saha</p>
                <p><strong>Contact Number:</strong> 9900100127</p>
                <p><strong>Address:</strong> VILL. SULTAN PUR, P.O. BAHADUR PUR, P.O. BHAGWANGOLA, DIST. MURSHIDABAD, PIN. 742135, SULTAN PUR, WEST BENGAL, INDIA</p>
            </div>
            <div class="footer">
                <p>Date: 20 Feb 2025, 9:37 am</p>
            </div>
        </div>                
        <!-- Repeat the above .id-card block for each student -->

        <div class="id-card">
            <div class="header">
                <h1>Little Flower School</h1>
                <h2>(A English Medium Primary School)</h2>
                <h3>Affiliated to Board of WBPSCB</h3>
                <img src="{{ asset('logo.jpg')}}" alt="College Logo" class="logo">
            </div>
            <div class="contact-info">
                <p>Mb: 03482-256257</p>
                <p>www.littleflowerschool.co.in</p>
            </div>
            <div class="student-info">
                <img src="{{ asset('profile.jpg')}}" alt="Student Photo" class="student-photo">
                <img src="{{ asset('qr.png')}}" alt="Student Photo" class="student-qrcode">
                <p><strong>Name:</strong> Ram Charan Saha</p>
                {{-- <p><strong>Subject:</strong> Bengali</p> --}}
                <p><strong>C/O:</strong> Dasarath Saha</p>
                <p><strong>Contact Number:</strong> 9900100127</p>
                <p><strong>Address:</strong> VILL. SULTAN PUR, P.O. BAHADUR PUR, P.O. BHAGWANGOLA, DIST. MURSHIDABAD, PIN. 742135, SULTAN PUR, WEST BENGAL, INDIA</p>
            </div>
            <div class="footer">
                <p>Date: 20 Feb 2025, 9:37 am</p>
            </div>
        </div>                
        <!-- Repeat the above .id-card block for each student -->

        <div class="id-card">
            <div class="header">
                <h1>Little Flower School</h1>
                <h2>(A English Medium Primary School)</h2>
                <h3>Affiliated to Board of WBPSCB</h3>
                <img src="{{ asset('logo.jpg')}}" alt="College Logo" class="logo">
            </div>
            <div class="contact-info">
                <p>Mb: 03482-256257</p>
                <p>www.littleflowerschool.co.in</p>
            </div>
            <div class="student-info">
                <img src="{{ asset('profile.jpg')}}" alt="Student Photo" class="student-photo">
                <img src="{{ asset('qr.png')}}" alt="Student Photo" class="student-qrcode">
                <p><strong>Name:</strong> Ram Charan Saha</p>
                {{-- <p><strong>Subject:</strong> Bengali</p> --}}
                <p><strong>C/O:</strong> Dasarath Saha</p>
                <p><strong>Contact Number:</strong> 9900100127</p>
                <p><strong>Address:</strong> VILL. SULTAN PUR, P.O. BAHADUR PUR, P.O. BHAGWANGOLA, DIST. MURSHIDABAD, PIN. 742135, SULTAN PUR, WEST BENGAL, INDIA</p>
            </div>
            <div class="footer">
                <p>Date: 20 Feb 2025, 9:37 am</p>
            </div>
        </div>                
        <!-- Repeat the above .id-card block for each student -->

        <div class="id-card">
            <div class="header">
                <h1>Little Flower School</h1>
                <h2>(A English Medium Primary School)</h2>
                <h3>Affiliated to Board of WBPSCB</h3>
                <img src="{{ asset('logo.jpg')}}" alt="College Logo" class="logo">
            </div>
            <div class="contact-info">
                <p>Mb: 03482-256257</p>
                <p>www.littleflowerschool.co.in</p>
            </div>
            <div class="student-info">
                <img src="{{ asset('profile.jpg')}}" alt="Student Photo" class="student-photo">
                <img src="{{ asset('qr.png')}}" alt="Student Photo" class="student-qrcode">
                <p><strong>Name:</strong> Ram Charan Saha</p>
                {{-- <p><strong>Subject:</strong> Bengali</p> --}}
                <p><strong>C/O:</strong> Dasarath Saha</p>
                <p><strong>Contact Number:</strong> 9900100127</p>
                <p><strong>Address:</strong> VILL. SULTAN PUR, P.O. BAHADUR PUR, P.O. BHAGWANGOLA, DIST. MURSHIDABAD, PIN. 742135, SULTAN PUR, WEST BENGAL, INDIA</p>
            </div>
            <div class="footer">
                <p>Date: 20 Feb 2025, 9:37 am</p>
            </div>
        </div>                
        <!-- Repeat the above .id-card block for each student -->

        <div class="id-card">
            <div class="header">
                <h1>Little Flower School</h1>
                <h2>(A English Medium Primary School)</h2>
                <h3>Affiliated to Board of WBPSCB</h3>
                <img src="{{ asset('logo.jpg')}}" alt="College Logo" class="logo">
            </div>
            <div class="contact-info">
                <p>Mb: 03482-256257</p>
                <p>www.littleflowerschool.co.in</p>
            </div>
            <div class="student-info">
                <img src="{{ asset('profile.jpg')}}" alt="Student Photo" class="student-photo">
                <img src="{{ asset('qr.png')}}" alt="Student Photo" class="student-qrcode">
                <p><strong>Name:</strong> Ram Charan Saha</p>
                {{-- <p><strong>Subject:</strong> Bengali</p> --}}
                <p><strong>C/O:</strong> Dasarath Saha</p>
                <p><strong>Contact Number:</strong> 9900100127</p>
                <p><strong>Address:</strong> VILL. SULTAN PUR, P.O. BAHADUR PUR, P.O. BHAGWANGOLA, DIST. MURSHIDABAD, PIN. 742135, SULTAN PUR, WEST BENGAL, INDIA</p>
            </div>
            <div class="footer">
                <p>Date: 20 Feb 2025, 9:37 am</p>
            </div>
        </div>                
        <!-- Repeat the above .id-card block for each student -->

        <div class="id-card">
            <div class="header">
                <h1>Little Flower School</h1>
                <h2>(A English Medium Primary School)</h2>
                <h3>Affiliated to Board of WBPSCB</h3>
                <img src="{{ asset('logo.jpg')}}" alt="College Logo" class="logo">
            </div>
            <div class="contact-info">
                <p>Mb: 03482-256257</p>
                <p>www.littleflowerschool.co.in</p>
            </div>
            <div class="student-info">
                <img src="{{ asset('profile.jpg')}}" alt="Student Photo" class="student-photo">
                <img src="{{ asset('qr.png')}}" alt="Student Photo" class="student-qrcode">
                <p><strong>Name:</strong> Ram Charan Saha</p>
                {{-- <p><strong>Subject:</strong> Bengali</p> --}}
                <p><strong>C/O:</strong> Dasarath Saha</p>
                <p><strong>Contact Number:</strong> 9900100127</p>
                <p><strong>Address:</strong> VILL. SULTAN PUR, P.O. BAHADUR PUR, P.O. BHAGWANGOLA, DIST. MURSHIDABAD, PIN. 742135, SULTAN PUR, WEST BENGAL, INDIA</p>
            </div>
            <div class="footer">
                <p>Date: 20 Feb 2025, 9:37 am</p>
            </div>
        </div>                
        <!-- Repeat the above .id-card block for each student -->


    </div>
</body>
</html>


