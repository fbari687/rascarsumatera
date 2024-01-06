@extends('dashboard.layouts.index')

@section('content')
<a href="/admin/dashboard/product/create" class="btn btn-success mx-4"><i class="fa-solid fa-plus"></i> Tambah Produk Baru</a>
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible text-white fade show" role="alert">
  <span class="alert-icon align-middle">
    <span class="material-icons text-md">
    thumb_up_off_alt
    </span>
  </span>
  <span class="alert-text"><strong>Berhasil!</strong> {{ session('success') }}</span>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<div class="card">
  <div class="table-responsive">
    <table class="table table-striped align-items-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7">#</th>
          <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">Nama</th>
          <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">Gambar</th>
          <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">Jenis</th>
          <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">Brand</th>
          <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
        <tr class="border-bottom">
          <td>
            <div class="d-flex px-2">
              <p class="px-2 text-sm font-weight-normal mb-0">{{ $loop->iteration }}</p>
            </div>
          </td>
          <td>
            <p class="text-sm font-weight-bold mb-0">{{ $product->name }}</p>
          </td>
          <td>
            <img src="{{ asset('/storage/'.$product->image) }}" alt="" width="200px">
          </td>
          <td>
            <p class="text-sm font-weight-bold mb-0">{{ $product->type->name }}</p>
          </td>
          <td>
            <p class="text-sm font-weight-bold mb-0">{{ $product->brand->name }}</p>
          </td>
          <td>
            <a href="/admin/dashboard/product/{{ $product->slug }}/edit" class="btn btn-info mt-3"><i class="fa-solid fa-pen-to-square"></i></a>
            <button type="button" class="btn bg-gradient-danger mt-3" data-bs-toggle="modal" data-bs-target="#{{ $product->slug }}">
              <i class="fa-solid fa-trash"></i>
            </button>
            <div class="modal fade" id="{{ $product->slug }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title font-weight-normal" id="exampleModalLabel">HAPUS</h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Anda ingin menghapus Produk <br> <strong>{{ $product->name }}</strong> ?
                  </div>
                  <form action="/admin/dashboard/product/{{ $product->slug }}" method="POST" class="modal-footer">
                    @csrf
                    @method('delete')
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn bg-gradient-primary">Hapus</button>
                  </form>
                </div>
              </div>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  </div>
@endsection