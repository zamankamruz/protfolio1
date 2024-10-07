@extends('admin.master')

@section('contand')

<style>
.services {

  min-width: 600px;
  padding: 60px 0;
  padding-right: 10px;
  background-color: #f4f4f9;
}

.section-title h2 {
  font-size: 36px;
  font-weight: 700;
  color: #333;
  text-align: center;
}

.section-title p {
  font-size: 18px;
  color: #666;
  text-align: center;
  margin-bottom: 40px;
}

.container {
  max-width: 900px;
  margin: 0 auto;
}

.service-form,
.service-description-form {
  background-color: #fff;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.05);
  margin-bottom: 30px;
}

.form-group {
  margin-bottom: 20px;
}

.form-group label {
  font-size: 16px;
  color: #333;
  margin-bottom: 8px;
  display: block;
}

.form-control {
  width: 95%;
  padding: 12px;
  border-radius: 5px;
  border: 1px solid #ddd;
  font-size: 16px;
  transition: border-color 0.3s ease;
}

.form-control:focus {
  border-color: #007bff;
  box-shadow: 0 0 8px rgba(0, 123, 255, 0.3);
  outline: none;
}

textarea.form-control {
  resize: none;
}

.btn-primary {
  padding: 12px 30px;
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.btn-primary:hover {
  background-color: #0056b3;
}

.alert-success {
  padding: 15px;
  background-color: #d4edda;
  color: #155724;
  border: 1px solid #c3e6cb;
  border-radius: 5px;
  margin-bottom: 20px;
}

</style>

<section id="services" class="services section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Services</h2>
    <p>Insert your new services below:</p>
  </div>

  <div class="container">


  @if(session('sucess'))
      <div class="alert alert-success" id="sucess-alert">
         {{ session('sucess') }}
      </div>
     @endif



@foreach ($Services_description as $service)

<form action="{{ route('service_description.update', $service->id) }}" method="POST" class="service-description-form">
    @csrf
    <div class="form-group">
        <label for="descrivetion">Services</label>
        <textarea name="description" id="descrivetion" class="form-control" rows="5" placeholder="Describe your service...">{{ $service->description }}</textarea>
    </div>

    <button type="submit" class="btn-primary">Submit</button>
</form>

@endforeach


    @if(session('success'))
      <div class="alert alert-success" id="success-alert">
         {{ session('success') }}
      </div>
     @endif

    <form action="{{ route('services.store') }}" method="POST" class="service-form">
      @csrf

      <div class="form-group">
        <label for="title">Service Title:</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Enter service title" required>
      </div>

      <div class="form-group">
        <label for="icon">Icon (e.g., bi bi-briefcase):</label>
        <input type="text" name="icon" id="icon" class="form-control" placeholder="Enter icon class (e.g., bi bi-briefcase)" required>
      </div>

      <div class="form-group">
        <label for="description">Description:</label>
        <textarea name="description" id="description" class="form-control" rows="4" placeholder="Provide a description..." required></textarea>
      </div>

      <button type="submit" class="btn-primary">Add Service</button>
    </form>
  </div>
</section>



<script>

  document.addEventListener('DOMContentLoaded', function() {
      var successAlert = document.getElementById('success-alert');
      if (successAlert) {
          setTimeout(function() {
              successAlert.style.display = 'none';
          }, 2000); 
      }
  });


  document.addEventListener('DOMContentLoaded', function() {
      var successAlert = document.getElementById('sucess-alert');
      if (successAlert) {
          setTimeout(function() {
              successAlert.style.display = 'none';
          }, 2000); 
      }
  });




</script>



@endsection