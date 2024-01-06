@extends('dashboard.layouts.index')

@section('content')
<a href="/admin/dashboard/article/create" class="btn btn-success mx-4"><i class="fa-solid fa-plus"></i> Tambah Artikel Baru</a>
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
          <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">Gambar</th>
          <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">Title</th>
          <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">Tanggal</th>
          <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($articles as $article)
        <tr class="border-bottom">
          <td>
            <div class="d-flex px-2">
              <p class="px-2 text-sm font-weight-normal mb-0">{{ $loop->iteration }}</p>
            </div>
          </td>
          <td>
            <img src="{{ asset('storage/'.$article->image) }}" alt="" width="200px">
          </td>
          <td>
            <p class="text-sm font-weight-bold mb-0">{{ $article->title }}</p>
          </td>
          <td>
            <p class="text-sm font-weight-bold mb-0">{{ $article->tanggal }}</p>
          </td>
          <td>
            <a href="/admin/dashboard/article/{{ $article->slug }}" class="btn btn-warning mt-3"><i class="fa-solid fa-eye"></i></a>
            <a href="/admin/dashboard/article/{{ $article->slug }}/edit" class="btn btn-info mt-3"><i class="fa-solid fa-pen-to-square"></i></a>
            <button type="button" class="btn bg-gradient-danger mt-3" data-bs-toggle="modal" data-bs-target="#{{ $article->slug }}">
              <i class="fa-solid fa-trash"></i>
            </button>
            <div class="modal fade" id="{{ $article->slug }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title font-weight-normal" id="exampleModalLabel">HAPUS</h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" style="overflow-x: scroll">
                    <p>Anda ingin menghapus Artikel</p>
                    <p>{{ $article->title }}?</p>
                  </div>
                  <form action="/admin/dashboard/article/{{ $article->slug }}" method="POST" class="modal-footer">
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