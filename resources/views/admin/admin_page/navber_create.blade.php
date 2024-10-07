@extends('admin.master')

@section('contand')

<style>
    /* Container styling */
    .profile-update-container {
        max-width: 800px;
        padding: 3rem;
        background-color: #fff;
        margin-left: 150px;
      
       
    }

    /* Heading styling */
    .profile-heading {
        text-align: center;
        font-size: 2.5rem;
        font-weight: 600;
        color: #343a40;
        margin-bottom: 3rem;
        letter-spacing: 0.5px;
    }

    /* Form styling */
    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-label {
        display: block;
        margin-bottom: 0.75rem;
        font-weight: 600;
        font-size: 1.1rem;
        color: #555;
    }

    .form-control {
        width: 100%;
        padding: 0.9rem;
        font-size: 1rem;
        border: 1px solid #ced4da;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 6px rgba(0, 123, 255, 0.4);
    }

    .form-control[type="file"] {
        padding: 0.5rem;
    }

    /* Button styling */
    .update-btn {
        display: block;
        width: 100%;
        padding: 1rem;
        font-size: 1.2rem;
        font-weight: 600;
        color: #fff;
        background-color: #17a2b8;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .update-btn:hover {
        background-color: #138496;
        transform: translateY(-3px);
    }

    /* Responsive design */
    @media (max-width: 576px) {
        .profile-update-container {
            padding: 2rem;
        }

        .profile-heading {
            font-size: 2rem;
        }

        .update-btn {
            font-size: 1rem;
        }
    }
</style>

<div class="container profile-update-container">
    <h2 class="profile-heading">Update Profile</h2>

    @foreach ($Settings as $Setting)
        <form action="{{ route('navber.update', $Setting->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="profile_image" class="form-label">Profile Image</label>
                <input type="file" class="form-control" id="profile_image" name="profile_image">
            </div>

            <div class="form-group">
                <label for="site_name" class="form-label">Site Name</label>
                <input type="text" class="form-control" id="site_name" name="site_name" value="{{ $Setting->site_name }}">
            </div>

            <div class="form-group">
                <label for="twitter" class="form-label">Twitter Link</label>
                <input type="url" class="form-control" id="twitter" name="twitter" value="{{ $Setting->twitter }}">
            </div>

            <div class="form-group">
                <label for="facebook" class="form-label">Facebook Link</label>
                <input type="url" class="form-control" id="facebook" name="facebook" value="{{ $Setting->facebook }}">
            </div>

            <div class="form-group">
                <label for="instagram" class="form-label">Instagram Link</label>
                <input type="url" class="form-control" id="instagram" name="instagram" value="{{ $Setting->instagram }}">
            </div>

            <div class="form-group">
                <label for="google_plus" class="form-label">Google Plus Link</label>
                <input type="url" class="form-control" id="google_plus" name="google_plus" value="{{ $Setting->google_plus }}">
            </div>

            <div class="form-group">
                <label for="linkedin" class="form-label">LinkedIn Link</label>
                <input type="url" class="form-control" id="linkedin" name="linkedin" value="{{ $Setting->linkedin }}">
            </div>

            <button type="submit" class="update-btn">Update Navbar</button>
        </form>
    @endforeach
</div>

@endsection
