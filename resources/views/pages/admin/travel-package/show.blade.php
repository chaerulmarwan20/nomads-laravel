@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Detail Paket Travel {{ $item->title }}</h1>
  </div>

  <div class="card shadow">
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>Title</th>
          <td>{{ $item->title }}</td>
        </tr>
        <tr>
          <th>Location</th>
          <td>{{ $item->location }}</td>
        </tr>
        <tr>
          <th>About</th>
          <td>{{ $item->about }}</td>
        </tr>
        <tr>
          <th>Featured Event</th>
          <td>{{ $item->featured_event }}</td>
        </tr>
        <tr>
          <th>Language</th>
          <td>{{ $item->language }}</td>
        </tr>
        <tr>
          <th>Foods</th>
          <td>{{ $item->foods }}</td>
        </tr>
        <tr>
          <th>Departure Date</th>
          <td>{{ $item->departure_date }}</td>
        </tr>
        <tr>
          <th>Duration</th>
          <td>{{ $item->duration }}</td>
        </tr>
        <tr>
          <th>Type</th>
          <td>{{ $item->type }}</td>
        </tr>
        <tr>
          <th>Price</th>
          <td>{{ $item->price }}</td>
        </tr>
      </table>
    </div>
  </div>

  <a href="{{ route('travel-package.index') }}" class="btn btn-sm btn-primary shadow-sm mt-4 mb-5">Kembali</a>

</div>
<!-- /.container-fluid -->
@endsection