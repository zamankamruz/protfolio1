@extends('admin.master')

@section('contand')

<style>
    .forms-container {
        display: flex;
        justify-content: space-between;
        gap: 20px; /* Adds space between the forms */
    }

    .skillabout {
        flex: 1; /* Ensures both forms take equal space */
        padding: 20px;
        background-color: #f4f4f9;
        border-radius: 8px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    }

    .skillabout form {
        display: flex;
        flex-direction: column;
    }

    .skillabout h1 {
        font-size: 24px;
        margin-bottom: 20px;
        font-weight: 600;
        color: #333;
        text-align: center;
    }

    .skillabout label {
        font-size: 16px;
        margin-bottom: 8px;
        font-weight: 500;
        color: #555;
    }

    .skillabout textarea {
        min-width: 400px;

    }

    .skillabout input[type="text"],
    .skillabout textarea {
        padding: 12px;
        font-size: 16px;
        border: 1px solid #ddd;
        border-radius: 6px;
        margin-bottom: 20px;
        transition: border-color 0.3s ease;
    }

    .skillabout textarea {
        min-height: 120px;
    }

    .skillabout input[type="text"]:focus,
    .skillabout textarea:focus {
        border-color: #3498db;
        outline: none;
    }

    .skillabout button {
        padding: 12px;
        background-color: #3498db;
        color: white;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-size: 16px;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .skillabout button:hover {
        background-color: #2980b9;
    }

    @media (max-width: 768px) {
        .forms-container {
            flex-direction: column;
        }

        .skillabout {
            margin-bottom: 20px;
        }
    }


    #skillpercent{
        height: 30px;
        margin-bottom: 37px;
    }


    .showdata {
        margin: 20px; /* Add margin around the table */
        margin-top: 60px;
        padding: 20px;
        background-color: #ffffff; /* White background for contrast */
        border-radius: 8px; /* Rounded corners */
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Shadow for depth */
    }

    table {
        width: 100%; /* Full width table */
        border-collapse: collapse; /* Remove space between cells */
    }

    th, td {
        padding: 12px; /* Padding inside cells */
        text-align: left; /* Align text to the left */
        border-bottom: 1px solid #ddd; /* Light border below cells */
    }

    th {
        background-color: #3498db; /* Header background color */
        color: white; /* Header text color */
        font-weight: bold; /* Bold text */
    }

    tr:hover {
        background-color: #f2f2f2; /* Change background on hover */
    }

    .delete-btn {
        padding: 6px 12px; /* Padding for button */
        background-color: #e74c3c; /* Red background for delete button */
        color: white; /* White text color */
        border: none; /* No border */
        border-radius: 4px; /* Rounded corners */
        cursor: pointer; /* Pointer cursor on hover */
        transition: background-color 0.3s ease; /* Smooth transition */
    }

    .delete-btn:hover {
        background-color: #c0392b; /* Darker red on hover */
    }


</style>

<div class="forms-container">

    @foreach ($skillabout as $skillabouts)
    <div class="skillabout">
        <form action="{{route('skillsabout.store')}}" method="POST" >
            @csrf
            <h1>{{$skillabouts->skills}}</h1>
            <label for="skillabout">About</label>
            <textarea name="skillabout" id="skillabout" placeholder="Describe the skill...">{{$skillabouts->skill_about}}</textarea>
            <button type="submit">Change Skill About</button>
        </form>
    </div>
    @endforeach


    <div class="skillabout">
    <form action="{{ route('skills.store') }}" method="POST">
        @csrf
        <h1>Add Skills</h1>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Skills name" required>

        <input type="text" hidden name="percentage" value="%" >
        
        <label for="skillpercent">Add skill %</label>
        <input type="number" id="skillpercent" name="number" placeholder="Skill percentage" required min="0" max="100">
        
        <button type="submit">Add Skill</button>
    </form>
   </div>

</div>

<div class="showdata">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Percentage</th>
                <th>Number</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody> 
            @foreach ($skilldatas as $skilldata)
            <tr>
                <td>{{$skilldata->name}}</td>
                <td>{{$skilldata->percentage}}</td>
                <td>{{$skilldata->number}}</td>

                <td>
                    <form action="{{ route('skills.destroy', $skilldata->id) }}" method="POST">
                        @csrf
                        @method('DELETE') 
                        <button class="delete-btn">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>






@endsection