@extends('admin.master')

@section('contand')

<style>
    .container {
        margin-top: 40px;
        font-family: 'Arial', sans-serif;
    }

    .education-table {
        width: 100%;
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 16px;
        text-align: left;
        background-color: #f9f9f9;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .education-table th, .education-table td {
        padding: 14px 18px;
        border: 1px solid #ddd;
    }

    .education-table thead tr {
        background-color: #4CAF50;
        color: #ffffff;
        text-align: left;
        font-weight: bold;
    }

    .education-table tbody tr {
        border-bottom: 1px solid #ddd;
        transition: background-color 0.2s ease-in;
    }

    .education-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .education-table tbody tr:hover {
        background-color: #f1f1f1;
        cursor: pointer;
    }

    /* Style the delete button */
    .delete-button {
        background-color: #e74c3c;
        color: white;
        padding: 8px 12px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
        transition: background-color 0.3s ease;
    }

    .delete-button:hover {
        background-color: #c0392b;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .education-table thead {
            display: none;
        }

        .education-table, .education-table tbody, .education-table tr, .education-table td {
            display: block;
            width: 100%;
        }

        .education-table tr {
            margin-bottom: 15px;
            border: none;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .education-table td {
            padding: 12px;
            text-align: right;
            position: relative;
        }

        .education-table td:before {
            content: attr(data-label);
            position: absolute;
            left: 12px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .delete-button {
            width: 100%;
            box-sizing: border-box;
        }
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid #c3e6cb;
    }





    /* experincess all code here start  */

    .experience-table {
        width: 100%;
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 16px;
        text-align: left;
        background-color: #f9f9f9;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .experience-table th, .experience-table td {
        padding: 14px 18px;
        border: 1px solid #ddd;
    }

    .experience-table thead tr {
        background-color: #3498db;
        color: #ffffff;
        text-align: left;
        font-weight: bold;
    }

    .experience-table tbody tr {
        border-bottom: 1px solid #ddd;
        transition: background-color 0.2s ease-in;
    }

    .experience-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .experience-table tbody tr:hover {
        background-color: #f1f1f1;
        cursor: pointer;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .experience-table thead {
            display: none;
        }

        .experience-table, .experience-table tbody, .experience-table tr, .experience-table td {
            display: block;
            width: 100%;
        }

        .experience-table tr {
            margin-bottom: 15px;
            border: none;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .experience-table td {
            padding: 12px;
            text-align: right;
            position: relative;
        }

        .experience-table td:before {
            content: attr(data-label);
            position: absolute;
            left: 12px;
            font-weight: bold;
            text-transform: uppercase;
        }
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid #c3e6cb;
    }



</style>

<div class="container">
    <h3>Education Details</h3>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <table class="education-table">
        <thead>
            <tr>
                <th>Degree</th>
                <th>Start Year</th>
                <th>End Year</th>
                <th>Institution</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($educations as $education)
            <tr>
                <td data-label="Degree">{{ $education->degree }}</td>
                <td data-label="Start Year">{{ $education->start_year }}</td>
                <td data-label="End Year">{{ $education->end_year }}</td>
                <td data-label="Institution">{{ $education->institution }}</td>
                <td data-label="Action">
                    <form action="{{ route('education.destroy', $education->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-button">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



<div class="container">
    <h3>Professional Experience</h3>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <table class="experience-table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Company</th>
                <th>Start Year</th>
                <th>End Year</th>
                <th>Description</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach($experices as $experience)
            <tr>
                <td data-label="Title">{{ $experience->title }}</td>
                <td data-label="Company">{{ $experience->company}}</td>
                <td data-label="Start Year">{{ $experience->start_year}}</td>
                <td data-label="End Year">{{ $experience->end_year}}</td>
                <td data-label="Description">{{ $experience->description }}</td>
                <td data-label="Action">
                    <form action="{{ route('experience.destroy', $experience->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-button">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
