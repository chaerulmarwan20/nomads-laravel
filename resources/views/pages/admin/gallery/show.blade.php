@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Detail Data Paket Travel {{ $item->title }}</h1>
  </div>

  <table class="table">
    <tbody>
      <tr>
        <th scope="row">Title</th>
        <td>{{ $item->title }}</td>
      </tr>
      <tr>
        <th scope="row">Location</th>
        <td>{{ $item->location }}</td>
      </tr>
      <tr>
        <th scope="row">About</th>
        <td>{{ $item->about }}</td>
      </tr>
      <tr>
        <th scope="row">Featured Event</th>
        <td>{{ $item->featured_event }}</td>
      </tr>
      <tr>
        <th scope="row">Language</th>
        <td>{{ $item->language }}</td>
      </tr>
      <tr>
        <th scope="row">Foods</th>
        <td>{{ $item->foods }}</td>
      </tr>
      <tr>
        <th scope="row">Departure Date</th>
        <td>{{ $item->departure_date }}</td>
      </tr>
      <tr>
        <th scope="row">Duration</th>
        <td>{{ $item->duration }}</td>
      </tr>
      <tr>
        <th scope="row">Type</th>
        <td>{{ $item->type }}</td>
      </tr>
      <tr>
        <th scope="row">Price</th>
        <td>{{ $item->price }}</td>
      </tr>
    </tbody>
  </table>

  <a href="{{ route('gallery.index') }}" class="btn btn-sm btn-primary shadow-sm">Kembali</a>

</div>
<!-- /.container-fluid -->
@endsection