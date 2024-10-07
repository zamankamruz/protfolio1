@extends('admin.master')

@section('contand')

<style>
    /* Form Styling */
    form {
        width: 100%;
        margin: 0 auto;
        background-color: #fff;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease-in-out;
    }

    form:hover {
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
    }

    h3 {
        margin-bottom: 20px;
        font-size: 1.8rem;
        color: #333;
        border-left: 5px solid #007bff;
        padding-left: 10px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: bold;
        background-color: #f9f9f9;
        padding: 10px;
        border-radius: 5px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: #333;
    }

    input[type="text"],
    input[type="email"],
    textarea {
        width: 100%;
        padding: 14px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        background-color: #f7f8fa;
        font-size: 1rem;
        transition: border 0.3s ease, box-shadow 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    textarea:focus {
        border-color: #007bff;
        background-color: #fff;
        outline: none;
        box-shadow: 0 0 10px rgba(0, 123, 255, 0.2);
    }

    textarea {
        height: 140px;
        resize: vertical;
    }

    button {
        padding: 15px 30px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 6px;
        font-size: 1.1rem;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.3s ease;
        display: block;
        width: 100%;
        text-transform: uppercase;
    }

    button:hover {
        background-color: #0056b3;
        transform: translateY(-3px);
    }

    button:active {
        transform: translateY(0);
    }

    .form-section {
        margin-bottom: 40px;
    }

    .form-section:last-child {
        margin-bottom: 0;
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        form {
            padding: 30px;
        }

        h3 {
            font-size: 1.6rem;
        }
    }

    @media (max-width: 768px) {
        form {
            padding: 20px;
        }

        h3 {
            font-size: 1.4rem;
        }

        button {
            width: 100%;
        }
    }

    @media (max-width: 480px) {
        form {
            width: 100%;
            padding: 15px;
        }

        h3 {
            font-size: 1.2rem;
        }
    }
</style>

<div class="resumeinformation">

@foreach ($resume as $resmes)

    <form action="{{ route('storeResume') }}" method="POST">
        @csrf
        <div class="form-section">
            <h3>Resume</h3>
            <textarea id="resumeintro" name="resumeintro" >{{$resmes->resumeintro}}</textarea>
            
            <label for="summary">Summary</label>
            <input id="summary" value="{{$resmes->summary}}" name="summary" >

            <label for="Summaryintro">Summary Introduction</label>
            <textarea id="introdaction" name="introdaction" >{{$resmes->introduction}}</textarea>

            <label for="address">Address</label>
            <input type="text" id="address" value="{{$resmes->address}}" name="address" required>
            
            <label for="phone">Phone</label>
            <input type="text" id="phone" value="{{$resmes->phone}}" name="phone" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" value="{{$resmes->email}}" name="email" required>

            <button type="submit">Submit</button>

        </div>
    </form>

    @endforeach

   
    
    <form action="{{ route('storeEducation') }}" method="POST">
        @csrf
        <div class="form-section">
            <h3>Education</h3>
            <label for="degree">Degree</label>
            <input type="text" id="degree"  name="degree" placeholder="Degree Name">

            <label for="start_year">Start Year</label>
            <input type="text" id="start_year"  name="start_year" required>

            <label for="end_year">End Year</label>
            <input type="text" id="end_year"  name="end_year" required>

            <label for="institution">Institution</label>
            <input type="text" id="institution"  name="institution" required>

            <button type="submit">Submit</button>

        </div>
    </form>




    
    <form action="{{ route('storeExperience') }}" method="POST">
        @csrf
        <div class="form-section">
            <h3>Professional Experience</h3>
            <label for="experience_title">Title</label>
            <input type="text" id="experience_title" name="experience_title" required>

            <label for="experience_company">Company</label>
            <input type="text"  id="experience_company" name="experience_company" required>

            <label for="experience_start_year">Start Year</label>
            <input type="text"  id="experience_start_year" name="experience_start_year" required>

            <label for="experience_end_year">End Year</label>
            <input type="text"  id="experience_end_year" name="experience_end_year" required>

            <label for="experience_description">Description</label>
            <textarea id="experience_description"  name="experience_description" required></textarea>
        </div>

        <button type="submit">Submit</button>

    </form>



</div>

@endsection
