@extends('admin.master')

@section('contand')

<style>

form {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    border-radius: 8px;
}

.section-title {
    margin-bottom: 30px;
}

.section-title label,
.profile-info label {
    display: block;
    font-size: 1.1rem;
    margin-bottom: 10px;
    font-weight: bold;
}

.section-title input,
.section-title textarea,
.profile-info input,
.profile-info textarea {
    width: 95%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 6px;
    margin-bottom: 20px;
    font-size: 1rem;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.section-title input:focus,
.section-title textarea:focus,
.profile-info input:focus,
.profile-info textarea:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    outline: none;
}

.profile-info {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
    margin-bottom: 30px;
}

.profile-info > div,
.additional-info {
    flex: 1;
    min-width: 300px;
}

/* .additional-info {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    
} */


.additional-info input{
    width: 350px;
}


.profile-summary {
    width: 80%;
    margin: 0 auto;
}

.profile-summary label {
    font-weight: bold;
    display: block;
    margin-bottom: 10px;
    font-size: 1.1rem;
}

.profile-summary textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: 1rem;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.profile-summary textarea:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    outline: none;
}

.btn {
    display: inline-block;
    padding: 12px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 6px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-top: 20px;
}

.btn:hover {
    background-color: #0056b3;
}

/* Responsive Design */
@media (max-width: 768px) {
    .profile-info {
        flex-direction: column;
    }

    .profile-summary {
        width: 100%;
    }
}

</style>



@foreach ($abouts as $about)
<form action="{{route('about.update', $about->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- Section Title -->
     
    <div class="section-title">
        <label for="title">Section Title</label>
        <!-- Use existing data for title -->
        <input type="text" name="title" id="title" class="form-control" value="{{ $about->title }}" placeholder="Enter Section Title">

        <label for="description">Section Description</label>
        <!-- Use existing data for description -->
        <textarea name="description" id="description" class="form-control" rows="4" placeholder="Enter Section Description">{{ $about->description }}</textarea>
    </div>

    <!-- Profile Information -->
    <div class="profile-info">
        <label for="profile_image">Profile Image</label>
        <input type="file" name="profile_image" id="profile_image" class="form-control">

        <label for="name">Profile Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $about->name }}" placeholder="Enter Profile Name">

        <label for="about">Profile About</label>
        <textarea name="about" id="about" class="form-control" rows="4" placeholder="Enter About Text">{{ $about->about }}</textarea>

        <!-- Additional Information -->
        <div class="additional-info">
            <label for="birthday">Birthday</label>
            <input type="text" name="birthday" id="birthday" class="form-control" value="{{ $about->birthday }}" placeholder="Enter Birthday">

            <label for="website">Website</label>
            <input type="text" name="website" id="website" class="form-control" value="{{ $about->website }}" placeholder="Enter Website URL">

            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ $about->phone }}" placeholder="Enter Phone Number">

            <label for="city">City</label>
            <input type="text" name="city" id="city" class="form-control" value="{{ $about->city }}" placeholder="Enter City">

            <label for="age">Age</label>
            <input type="number" name="age" id="age" class="form-control" value="{{ $about->age }}" placeholder="Enter Age">

            <label for="degree">Degree</label>
            <input type="text" name="degree" id="degree" class="form-control" value="{{ $about->degree }}" placeholder="Enter Degree">

            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $about->email }}" placeholder="Enter Email">

            <label for="freelance">Freelance Status</label>
            <input type="text" name="freelance" id="freelance" class="form-control" value="{{ $about->freelance }}" placeholder="Freelance Status">
        </div>

        <!-- Profile Summary -->
        <label for="summary">Profile Summary</label>
        <textarea name="summary" id="summary" class="form-control" rows="4" placeholder="Enter Profile Summary">{{ $about->summary }}</textarea>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
@endforeach



@endsection