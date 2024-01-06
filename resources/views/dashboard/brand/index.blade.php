@extends('dashboard.layouts.index')

@section('content')
<div class="col-md-4">
  <button type="button" class="btn btn-block btn-success mb-3 mx-4" data-bs-toggle="modal" data-bs-target="#modal-form"><i class="fa-solid fa-plus"></i> Tambah Merk Baru</button>
  <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-body p-0">
          <div class="card card-plain">
            <div class="card-header pb-0 text-left">
              <h5 class="">Tambah Merk Baru</h5>
              <p class="mb-0">Masukkan Nama Merk</p>
            </div>
            <div class="card-body">
              <form role="form text-left" action="/admin/dashboard/brand" method="POST">
                @csrf
                <div class="input-group input-group-outline my-0">
                  <label class="form-label">Merk</label>
                  <input type="text" class="form-control" name="name" id="name">
                </div>
                <input type="text" class="form-control" id="slug" name="slug" placeholder="slug" hidden>
                <div class="text-center">
                  <button type="submit" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Tambah</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
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
          <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($brands as $brand)
        <tr class="border-bottom">
          <td>
            <div class="d-flex px-2">
              <p class="px-2 text-sm font-weight-normal mb-0">{{ $loop->iteration }}</p>
            </div>
          </td>
          <td>
            <p class="text-sm font-weight-bold mb-0">{{ $brand->name }}</p>
          </td>
          <td>
            <a href="/admin/dashboard/brand/{{ $brand->slug }}/edit" class="btn btn-info mt-3"><i class="fa-solid fa-pen-to-square"></i></a>
            <button type="button" class="btn bg-gradient-danger mt-3" data-bs-toggle="modal" data-bs-target="#{{ $brand->slug }}">
              <i class="fa-solid fa-trash"></i>
            </button>
            <div class="modal fade" id="{{ $brand->slug }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title font-weight-normal" id="exampleModalLabel">HAPUS</h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Anda ingin menghapus Merk <strong>{{ $brand->name }}</strong> ?
                  </div>
                  <form action="/admin/dashboard/brand/{{ $brand->slug }}" method="POST" class="modal-footer">
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

@section('scriptjs')
<script>
  const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    name.addEventListener('input', function() {
      fetch('/admin/dashboard/brand/slug/checkSlug?name=' + name.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
    })
</script>
@endsection