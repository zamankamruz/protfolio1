@extends('admin.master')

@section('contand')

<style>
     .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h1 {
            font-size: 1.8rem;
            color: #333333;
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555555;
            font-size: 0.9rem;
        }

        input[type="text"], input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #dddddd;
            border-radius: 5px;
            font-size: 0.95rem;
        }

        input[type="text"]:focus, input[type="file"]:focus {
            outline: none;
            border-color: #007BFF;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
        }

        button {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #007BFF;
            color: #ffffff;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        @media (max-width: 576px) {
            .form-container {
                padding: 20px;
            }

            h1 {
                font-size: 1.5rem;
            }

            button {
                font-size: 0.9rem;
                padding: 10px;
            }
        }
</style>

@foreach ($heroaction as $heroSection)

<div class="form-container">
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <form action="{{ route('hero.update' ) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Hero Section Change</h1>

        <label for="person-name">Person Name</label>
        <input type="text" id="person-name" name="person_name" value="{{ $heroSection->person_name }}">

        <label for="person-about">Person About</label>
        <input type="text" id="person-about" name="person_about" value="{{ $heroSection->person_about }}">

        <label for="background_image">Background Image</label>
        <input type="file" name="background_image">

        <button type="submit">Update Hero</button>
    </form>
</div>
@endforeach



@endsection