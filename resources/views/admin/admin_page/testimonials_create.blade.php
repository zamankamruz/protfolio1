@extends('admin.master')

@section('contand')

<style>


  .testimonial-form-container {
    max-width: 800px;
    margin: 50px auto;
    padding: 40px;
    background-color: #ffffff;
    border-radius: 12px;
    transition: all 0.3s ease-in-out;
  }



  .testimonial-form-container h2 {
    text-align: center;
    color: #333;
    font-size: 24px;
    margin-bottom: 30px;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 1px;
  }


  .testimonial-form-container .form-group {
    margin-bottom: 20px;
  }

  .testimonial-form-container label {
    display: block;
    font-weight: bold;
    margin-bottom: 10px;
    color: #444;
    font-size: 16px;
    text-transform: uppercase;
  }


  .testimonial-form-container input,
  .testimonial-form-container textarea {
    width: 100%;
    padding: 12px 15px;
    border: 1px solid #ddd;
    border-radius: 10px;
    font-size: 16px;
    background-color: #f7f7f7;
  }

  .testimonial-form-container input:focus,
  .testimonial-form-container textarea:focus {
    border-color: #007bff;
    box-shadow: 0 0 8px rgba(0, 123, 255, 0.2);
    outline: none;
  }

  .testimonial-form-container textarea {
    resize: vertical;
  }


  .testimonial-form-container input[type="file"] {
    padding: 10px;
    background-color: #fff;
    border: 1px dashed #ddd;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
  }

  .testimonial-form-container input[type="file"]:hover {
    border-color: #007bff;
    background-color: #f1f1f1;
  }


  .testimonial-form-container button {
    width: 100%;
    padding: 15px;
    font-size: 18px;
    font-weight: bold;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    letter-spacing: 1px;
    text-transform: uppercase;
  }

  .testimonial-form-container button:hover {
    background-color: #0056b3;
    box-shadow: 0 8px 16px rgba(0, 123, 255, 0.3);
  }


  @media (max-width: 768px) {
    .testimonial-form-container {
      padding: 25px;
    }
    
    .testimonial-form-container button {
      font-size: 16px;
    }
  }


</style>

<div class="testimonial-form-container">
    <h2>Add Testimonial</h2>
  <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" class="form-control" required>
    </div>
    
    <div class="form-group">
      <label for="position">Position (e.g., CEO & Founder)</label>
      <input type="text" id="position" name="position" class="form-control" required>
    </div>
    
    <div class="form-group">
      <label for="testimonial">Testimonial</label>
      <textarea id="testimonial" name="testimonial" class="form-control" rows="5" required></textarea>
    </div>
    
    <div class="form-group">
      <label for="image">Upload Image</label>
      <input type="file" id="image" name="image" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit Testimonial</button>
  </form>
</div>

@endsection
