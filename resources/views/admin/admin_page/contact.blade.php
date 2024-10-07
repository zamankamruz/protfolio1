@extends('admin.master')

@section('contand')

<style>
    .container {
    max-width: 600px; /* Limit the width of the container */
    margin: 0 auto; /* Center the container */
    padding: 20px; /* Add padding */
    border-radius: 8px; /* Rounded corners */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Box shadow for depth */
    background-color: #ffffff; /* White background */
}

h2 {
    color: #333; /* Dark gray color for the heading */
}

.form-group {
    margin-bottom: 15px; /* Space between form elements */
}

label {
    font-weight: bold; /* Bold labels */
}

input.form-control {
    border: 1px solid #ddd; /* Light gray border */
    border-radius: 4px; /* Slightly rounded corners */
    padding: 10px; /* Padding inside inputs */
    transition: border-color 0.3s; /* Smooth transition for border color */
}

input.form-control:focus {
    border-color: #007bff; /* Border color on focus */
    outline: none; /* Remove outline */
}

.btn-primary {
    background-color: #007bff; /* Blue background */
    border: none; /* Remove border */
    padding: 10px 20px; /* Padding inside button */
    border-radius: 4px; /* Slightly rounded corners */
    color: #ffffff; /* White text */
    cursor: pointer; /* Pointer cursor */
    transition: background-color 0.3s; /* Smooth transition for background color */
}

.btn-primary:hover {
    background-color: #0056b3; /* Darker blue on hover */
}

.alert {
    margin-top: 20px; /* Space above the success message */
    padding: 10px; /* Padding inside the alert */
    border-radius: 4px; /* Rounded corners */
}

.alert-success {
    padding: 15px;
    background-color: #28a745;
    color: white;
    border-radius: 5px;
    margin-bottom: 20px;
    text-align: center;
    font-size: 18px;
}

</style>


<div class="container">
    <h2>Contact Us</h2>

    <!-- Success message -->
    @if (session('success'))
    <div id="successMessage" class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    @foreach ($contact as $contacts)
    

    <!-- Assume $contact contains the single contact object -->
    <form action="{{ route('contact.update', $contacts->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Include this to use the PUT method -->

        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" id="address" name="address" value="{{ $contacts->address }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="phone">Call Us</label>
            <input type="tel" id="phone" name="phone" value="{{ $contacts->phone }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email Us</label>
            <input type="email" id="email" name="email" value="{{ $contacts->email }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endforeach


<script>

 
    setTimeout(function() {
        var successMessage = document.getElementById('successMessage');
        if (successMessage) {
            successMessage.style.display = 'none';
        }
    }, 2000); 


</script>
@endsection