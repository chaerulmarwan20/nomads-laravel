@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Transaksi {{ $item->title }}</h1>
  </div>

  <div class="card shadow">
    <div class="card-body">
      <form action="{{ route('transaction.update', $item->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="transaction_status">Status</label>
          <select name="transaction_status" class="form-control @error('transaction_status') is-invalid @enderror">
            <option value="{{ $item->transaction_status }}">
              Jangan Ubah ({{ $item->transaction_status }})
            </option>
            <option value="IN_CART">In Cart</option>
            <option value="PENDING">Pending</option>
            <option value="SUCCESS">Success</option>
            <option value="CANCEL">Cancel</option>
            <option value="FAILED">Failed</option>
          </select>
          @error('transaction_status')
          <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-block">
          Ubah
        </button>
      </form>
    </div>
  </div>

</div>
<!-- /.container-fluid -->
@endsection