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
</head>

<body>
    {{-- {{ $data['content'] }} --}}
    {{-- Class:{{ $myclassSection->myclass->name }}, Section:{{ $myclassSection->section->name }}<br/> --}}

    {{-- @foreach($myclassSubjects as $myclassSubject)
        {{ $myclassSubject->subject->name }}<br/>
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
                        ({{ $studentcr->studentdb->ssex }})</b><br/>{{ $studentcr->studentdb->fname }}<br/>{{ $studentcr->studentdb->mname }}
                        {{-- {{ $studentcr->studentdb_id }}-{{ $studentcr->id }} --}}

                    </td>
                    <td>{{ $studentcr->studentdb->dob ?? 'x'}}<br/>{{ $studentcr->studentdb->adhaar ?? 'x'}}</td>
                    <td>
                        {{ $studentcr->myclass->name ?? 'x'}}-{{ $studentcr->section->name ?? 'x'}}: {{ $studentcr->roll_no ?? 'x'}}
                    </td>
                    <td>
                        {{ $studentcr->studentdb->vill }}, {{ $studentcr->studentdb->post }}<br/> 
                        {{ $studentcr->studentdb->pstn }}, {{ $studentcr->studentdb->dist }}, {{ $studentcr->studentdb->pin }}<br/>
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
        <br/>
    @endforeach --}}


</body>

</html>