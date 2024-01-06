@extends('dashboard.layouts.index')

@section('content')
<div class="bg-white">
  <div class="col-lg-8 p-5 d-flex flex-column gap-4">
    <h4>Tambah {{ $title }}</h4>
    <form action="/admin/dashboard/gallery" method="POST" enctype="multipart/form-data" class="d-flex flex-column gap-2">
      @csrf
      <div class="d-flex flex-column gap-5">
        <div class="form-group">
          <label for="image" class="d-block fw-bold">Pilih Gambar (bisa lebih dari 1)</label>
          <img src="" class="img-preview img-fluid mb-3 col-sm-5 d-block" id="imagePreview">
          <input type="file" id="images" name="images[]" multiple>
          <div id="previewContainer" class="border p-2 d-flex flex-wrap gap-2">
    
          </div>
          @error('images')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>
      <button type="submit" class="col-lg-2 btn btn-info align-self-end">Create</button>
    </form>
  </div>
</div>
@endsection

@section('scriptjs')
  <script>
    function handleFileInputChange(e) {
      const files = e.target.files;
      const previewContainer = document.getElementById("previewContainer");
      previewContainer.innerHTML = "";

      for (let i = 0; i < files.length; i++) {
        const file = files[i];
        const reader = new FileReader();

        reader.onload = function(e) {
          const img = document.createElement("img");
          img.src = e.target.result;
          img.style.maxWidth = "200px";
          previewContainer.appendChild(img);
        };

        reader.readAsDataURL(file);
      }
    }
    document.getElementById("images").addEventListener("change", handleFileInputChange);

  </script>
@endsection