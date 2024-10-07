@extends('admin.master')

@section('contand')

<style>
      .stats-form-container {
            background-color: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .stats-form-container h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .stats-form-container label {
            display: block;
            color: #555;
            font-size: 14px;
            margin-bottom: 5px;
        }
        .stats-form-container input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            margin-bottom: 15px;
            transition: border 0.3s ease-in-out;
        }
        .stats-form-container input:focus {
            border-color: #007bff;
            outline: none;
        }
        .stats-form-container button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }
        .stats-form-container button:hover {
            background-color: #0056b3;
        }
        @media (max-width: 576px) {
            .stats-form-container {
                padding: 20px;
            }
            .stats-form-container input, .stats-form-container button {
                font-size: 14px;
            }
        }
</style>


<div class="stats-form-container">
    <h2>Update Stats</h2>
    @foreach ($stats as $statas)
    
    <form action="{{ route('stats.store' , $statas->id ) }}" method="POST">
        @csrf
        <label for="happy_clients">Happy Clients:</label>
        <input type="number" name="happy_clients" value="{{$statas->happy_clients }}" id="happy_clients" required>

        <label for="projects">Projects:</label>
        <input type="number" name="projects" value="{{$statas->projects }}"  id="projects" required>

        <label for="hours_of_support">Hours of Support:</label>
        <input type="number" name="hours_of_support" value="{{$statas->hours_of_support }}"  id="hours_of_support" required>

        <label for="hard_workers">Hard Workers:</label>
        <input type="number" name="hard_workers" value="{{$statas->hard_workers }}" id="hard_workers" required>

        <button type="submit">Save Stats</button>
    </form>

    @endforeach

</div>


@endsection