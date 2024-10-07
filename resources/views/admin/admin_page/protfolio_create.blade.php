@extends('admin.master')

@section('contand')

<style>
    /* Form Container */
.portfolio-form {
    width: 100%;
    max-width: 600px;
    margin: 50px auto;
    background: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
}

/* Form Group Styles */
.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: #333;
}

/* Input and Select Styles */
.form-input, .form-select {
    width: 100%;
    padding: 10px 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
    color: #333;
    transition: border-color 0.3s ease;
}

.form-input:focus, .form-select:focus {
    border-color: #007bff;
    outline: none;
}

/* Textarea Styling */
textarea.form-input {
    resize: vertical;
    height: 150px;
}

/* Button Styling */
.submit-btn {
    width: 100%;
    padding: 12px 0;
    font-size: 16px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.submit-btn:hover {
    background-color: #0056b3;
}


.alert-success {
    background-color: #d4edda;
    color: #155724;
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid #c3e6cb;
    border-radius: 5px;
    font-size: 16px;
}
</style>


@if(session('success'))
    <div id="success-message" class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data" class="portfolio-form">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" required class="form-input">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea id="description" name="description" required class="form-input"></textarea>
    </div>

    <div class="form-group">
        <label for="category">Category</label>
        <select name="category" id="category" required class="form-select">
            <option value="App">App</option>
            <option value="Product">Product</option>
            <option value="Branding">Branding</option>
            <option value="Books">Books</option>
        </select>
    </div>

    <div class="form-group">
        <label for="image">Upload Image</label>
        <input type="file" id="image" name="image" required class="form-input">
    </div>

    <button type="submit" class="submit-btn">Add Portfolio</button>
</form>


<script>

    document.addEventListener('DOMContentLoaded', function() {
        const successMessage = document.getElementById('success-message');
        if (successMessage) {
            setTimeout(() => {
                successMessage.style.transition = 'opacity 0.5s ease';
                successMessage.style.opacity = '0';
                setTimeout(() => successMessage.remove(), 500); // Remove the element after fade-out
            }, 2000);
        }
    });
</script>



@endsection