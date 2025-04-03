<!DOCTYPE html>
<html>

<head>
    {{-- <title>{{ $data['title'] }}</title> --}}
    <title>Student List</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            padding: 20px;
        }

        /* Table Container */
        .table-container {
            overflow-x: auto;
            margin: 20px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            background: #fff;
        }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        table th,
        table td {
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        /* Responsive Table */
        @media screen and (max-width: 600px) {
            table {
                display: block;
                overflow-x: auto;
            }

            table th,
            table td {
                padding: 8px;
            }

            table th {
                font-size: 14px;
            }

            table td {
                font-size: 12px;
            }
        }
    </style>
    <style>
        .letterhead {
            max-width: 800px;
            margin: 0 auto;
            border: 1px solid #ccc;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header-left {
            text-align: left;
        }

        .header h1 {
            font-size: 24px;
            color: #2c3e50;
            font-family: 'Times New Roman', Times, serif;
        }

        .header .motto {
            font-size: 12px;
            color: #7f8c8d;
            font-style: italic;
        }

        .header-right {
            flex-shrink: 0;
        }

        .logo {
            max-width: 100px;
            height: auto;
        }

        .address {
            text-align: right;
            margin-bottom: 20px;
            font-size: 12px;
            color: #333;
        }

        .content {
            margin-bottom: 40px;
            line-height: 1.5;
            color: #444;
        }

        .footer {
            border-top: 2px solid #2c3e50;
            padding-top: 10px;
        }

        .ref-date {
            font-size: 12px;
            color: #7f8c8d;
            text-align: right;
        }
    </style>
</head>

<body>
    <div class="letterhead">
        <div class="header">
            <div class="header-left">
                <h1>Bright Futures Academy</h1>
                <p class="motto">Empowering Minds, Shaping Futures</p>
            </div>
            <div class="header-right">
                <img src="logo-placeholder.png" alt="School Logo" class="logo">
            </div>
        </div>

        <div class="address">
            <p>123 Education Lane</p>
            <p>Springfield, ST 45678</p>
            <p>Phone: (555) 123-4567</p>
            <p>Email: info@brightfuturesacademy.edu</p>
        </div>

        <div class="content">
            <p>[Your Letter Content Goes Here]</p>
        </div>

        <div class="footer">
            <div class="ref-date">
                <p>Ref: BFA/2023/001</p>
                <p>Date: October 15, 2023</p>
            </div>
        </div>
    </div>
    {{-- {{ $data['content'] }} --}}
    {{-- Class:{{ $myclassSection->myclass->name }}, Section:{{ $myclassSection->section->name }}<br /> --}}

    {{-- @foreach($myclassSubjects as $myclassSubject)
    {{ $myclassSubject->subject->name }}<br />
    @endforeach --}}
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>DOB & Aadhaar</th>
                    <th>Cl-Sec-Roll</th>
                    <th>Address</th>
                    <th>Remarks</th>
                </tr>
            </thead>
            <tbody>
                @foreach($studentcrs as $studentcr)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <b>{{ $studentcr->studentdb->name }}</b>
                        ({{ $studentcr->studentdb->ssex }})</b><br />{{ $studentcr->studentdb->fname }}<br />{{
                        $studentcr->studentdb->mname }}
                        {{-- {{ $studentcr->studentdb_id }}-{{ $studentcr->id }} --}}

                    </td>
                    <td>{{ $studentcr->studentdb->dob ?? 'x'}}<br />{{ $studentcr->studentdb->adhaar ?? 'x'}}</td>
                    <td>
                        {{ $studentcr->myclass->name ?? 'x'}}-{{ $studentcr->section->name ?? 'x'}}: {{
                        $studentcr->roll_no ?? 'x'}}
                    </td>
                    <td>
                        {{ $studentcr->studentdb->vill }}, {{ $studentcr->studentdb->post }}<br />
                        {{ $studentcr->studentdb->pstn }}, {{ $studentcr->studentdb->dist }}, {{
                        $studentcr->studentdb->pin }}<br />
                        {{ $studentcr->studentdb->mobl }}
                    </td>
                    <td>

                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>


    {{-- {{ $data['content'] }} --}}
    {{-- @foreach($studentcrs as $studentcr)
    {{ $loop->iteration }}--
    {{ $studentcr->studentdb->name }}-

    @endforeach --}}

    {{-- @foreach($markentries as $markentry)
    {{ $loop->iteration }}--
    {{ $markentry->studentcr->studentdb->name }}-
    {{ $markentry->studentcr->roll_no }}-
    @if($myclassSection->myclass->id > 4)
    {{ $markentry->total/2 }}
    @endif
    <br />
    @endforeach --}}


</body>

</html>