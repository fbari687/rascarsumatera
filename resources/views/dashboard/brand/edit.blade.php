@extends('dashboard.layouts.index')

@section('content')
<div class="bg-white">
  <div class="col-lg-8 p-5 d-flex flex-column gap-4">
    <h4>Edit {{ $title }}</h4>
    <form action="/admin/dashboard/brand/{{ $brand->slug }}" method="POST" class="d-flex flex-column gap-2">
      @csrf
      @method('put')
      <div class="d-flex flex-column">
        <input type="hidden" hidden name="oldName" value="{{ $brand->name }}">
        <label for="name" class="fw-bold">Nama</label>
        <div class="input-group input-group-outline my-3">
          <input type="text" class="form-control" id="name" name="name" placeholder="Nama" value="{{ $brand->name }}">
        </div>
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <input type="text" class="form-control" id="slug" name="slug" placeholder="slug" value="{{ $brand->slug }}" hidden>
      <button type="submit" class="col-lg-2 btn btn-info align-self-end">Edit</button>
    </form>
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

  //   function previewImage() {
  //       const preview = document.getElementById('imagePreview');
  //       const fileInput = document.getElementById('image');
  //       const file = fileInput.files[0];
  //       const reader = new FileReader();

  //       reader.onloadend = function () {
  //           preview.src = reader.result;
  //       }

  //       if (file) {
  //           reader.readAsDataURL(file);
  //       } else {
  //           preview.src = "";
  //       }
  //   }
  </script>
@endsection