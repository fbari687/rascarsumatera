@extends('dashboard.layouts.index')

@section('content')
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
          <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($banners as $banner)
        <tr class="border-bottom">
          <td>
            <div class="d-flex px-2">
              <p class="px-2 text-sm font-weight-normal mb-0">{{ $loop->iteration }}</p>
            </div>
          </td>
          <td>
            <img src="{{ asset('/storage/'.$banner->image) }}" width="200px"></img>
          </td>
          <td>
            <button type="button" class="btn btn-info mt-3" data-bs-toggle="modal" data-bs-target="#image{{ $banner->id }}">
              <i class="fa-solid fa-pen-to-square"></i>
            </button>
            <div class="modal fade" id="image{{ $banner->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <form action="/admin/dashboard/banner/{{ $banner->id }}" method="POST" class="modal-content" enctype="multipart/form-data">
                  @csrf
                  @method('put')
                  <div class="modal-header">
                    <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Ganti Banner</h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <input type="hidden" hidden name="oldImage" value="{{ $banner->image }}">
                    <div class="">Upload Gambar Baru </div>
                    <img src="" class="img-preview img-fluid mb-3 col-sm-5 d-block" id="imagePreview">
                    <input type="file" id="image" name="image" onchange="previewImage()">
                    @error('image')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn bg-gradient-primary">Ganti</button>
                  </div>
                </form>
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
  function previewImage() {
        const preview = document.getElementById('imagePreview');
        const fileInput = document.getElementById('image');
        const file = fileInput.files[0];
        const reader = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = "";
        }
    }
</script>
@endsection