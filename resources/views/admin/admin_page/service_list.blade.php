@extends('admin.master')

@section('contand')


<style>
  .service {
    margin: 50px auto;
    padding: 20px;
    max-width: 900px;
    border-radius: 8px;
    background-color: #f9f9f9;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .service h2 {
    text-align: center;
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin: 0 auto;
  }

  table, th, td {
    border: 1px solid #ddd;
  }

  th, td {
    padding: 12px;
    text-align: center;
    color: #333;
  }

  th {
    background-color: #007bff;
    color: white;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  .action-btn {
    background-color: #ff4d4d;
    color: white;
    border: none;
    padding: 8px 12px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .action-btn:hover {
    background-color: #ff3333;
  }

  .icon img {
    width: 30px;
    height: 30px;
  }
</style>

<div class="service">
  <h2>Service All List</h2>
  <table>
    <tr>
      <th>Title</th>
      <th>Icon</th>
      <th>Description</th>
      <th>Action</th>
    </tr>

    @foreach ($services as $service )
    
    <tr>
      <td>{{$service->title}}</td>
      <td class="icon">{{$service->icon}}</td>
      <td>{{$service->description}}</td>
      <td>
       <form action="{{ route('services.destroy', $service->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this service?');">
          @csrf
          @method('DELETE')
          <button class="action-btn" type="submit">Delete</button>
        </form>
      </td>
    </tr>

    @endforeach

  </table>
</div>



@endsection