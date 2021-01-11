@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Gallery</h1>
  </div>

  <div class="card shadow">
    <div class="card-body">
      <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="travel_packages_id">Paket Travel</label>
          <select name="travel_packages_id" class="form-control @error('travel_packages_id') is-invalid @enderror">
            <option value="">Pilih Paket Travel</option>
            @foreach ($travel_packages as $travel_package)
            <option value="{{ $travel_package->id }}">{{ $travel_package->title }}</option>
            @endforeach
          </select>
          @error('travel_packages_id')
          <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>
        <div class="form-group">
          <label for="image">Image</label>
          <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" placeholder="Image">
          @error('image')
          <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-block">
          Simpan
        </button>
      </form>
    </div>
  </div>

</div>
<!-- /.container-fluid -->
@endsection