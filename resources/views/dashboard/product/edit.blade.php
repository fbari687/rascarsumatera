@extends('dashboard.layouts.index')

@section('content')
<form action="/admin/dashboard/product/{{ $product->slug }}" method="POST" enctype="multipart/form-data" class="bg-white row">
  @csrf
  @method('put')
  <h4 class="p-5">Edit {{ $title }}</h4>
  <div class="col-lg-6 px-5 d-flex flex-column gap-4">
    <div class="d-flex flex-column gap-2">
      
      <div class="d-flex flex-column">
        <label for="name" class="fw-bold">Nama</label>
        <div class="input-group input-group-outline my-3">
          <input type="text" class="form-control" id="name" name="name" placeholder="Nama" value="{{ $product->name }}">
        </div>
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <input type="text" class="form-control" id="slug" name="slug" placeholder="slug" hidden value="{{ $product->slug }}">
      <div class="d-flex flex-column">
        <label for="seo" class="fw-bold">SEO</label>
        <div class="input-group input-group-outline my-3">
          <input type="text" class="form-control" id="seo" name="seo" placeholder="SEO" value="{{ $product->seo }}">
        </div>
        @error('seo')
            <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="d-flex flex-column">
        <label for="name" class="fw-bold">Brand</label>
        <div class="input-group input-group-static mb-4">
          <select class="form-control" name="brand_id">
            <option disabled>Pilih Brand</option>
            @foreach ($brands as $brand)
            @if ($brand->id === $product->brand_id)
            <option value="{{ $brand->id }}" selected>{{ $brand->name }}</option>
            @else
            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
            @endif
            @endforeach
          </select>
        </div>
        @error('brand_id')
            <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="d-flex flex-column">
        <label for="name" class="fw-bold">Jenis</label>
        <div class="input-group input-group-static mb-4">
          <select class="form-control" name="type_id">
            <option disabled selected>Pilih Jenis</option>
            @foreach ($types as $type)
            @if ($type->id === $product->type_id)
            <option value="{{ $type->id }}" selected>{{ $type->name }}</option>
            @else
            <option value="{{ $type->id }}">{{ $type->name }}</option>
            @endif
            @endforeach
          </select>
        </div>
        @error('type_id')
            <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="d-flex flex-column gap-2 border">
        <div class="form-group">
          <h6 class="d-block fw-bold">Pilih Gambar Utama</h6>
          <img src="{{ asset('/storage/'.$product->image) }}" class="img-preview img-fluid mb-3 col-sm-2 d-block" id="imagePreview">
          <input type="hidden" hidden name="oldImage" value="{{ $product->image }}">
          <input type="file" id="image" name="image" onchange="previewImage(this)">
          @error('image')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="d-flex align-items-center gap-5">
          <h6>Gambar Tambahan</h6>
          <button type="button" class="btn btn-info" onclick="addGambarTambahan(this)"><i class="fa-solid fa-plus"></i></button>
        </div>
        <div class="d-flex flex-column gap-2">
          @foreach ($product->images as $image)
          <input type="hidden" hidden name="oldImagesOri[]" value="{{ $image->image }}">
          <div class="form-group border">
            <label for="">Pilih Gambar Tambahan</label>
            <input type="hidden" hidden name="oldImages[]" value="{{ $image->image }}">
            <img src="{{ asset('/storage/'.$image->image) }}" class="img-preview img-fluid mb-3 col-sm-2 d-block" id="imagePreview">
            <input type="file" id="images" name="images[]" onchange="previewImage(this)">
            @error('images')
              <div class="text-danger">{{ $message }}</div>
            @enderror
            <button type="button" class="btn btn-danger" onclick="hapusElement(this)"><i class="fa-solid fa-x"></i></button>
          </div>
          @endforeach
        </div>
      </div>
      <div class="d-flex flex-column">
        <label for="name" class="fw-bold">Informasi Tambahan</label>
        <div class="d-flex gap-2 border p-2 position-relative">
          <div class="input-group input-group-outline">
            <input type="text" class="form-control" placeholder="Judul" name="keys[]" value="{{ $product->additional_informations[0]->key }}">
          </div>
          <div class="input-group input-group-outline">
            <input type="text" class="form-control" placeholder="Isi" name="values[]" value="{{ $product->additional_informations[0]->value }}">
          </div>
        </div>
        @foreach ($product->additional_informations->skip(1) as $additional_information)
        <div class="d-flex gap-2 border p-2 position-relative">
          <div class="input-group input-group-outline">
            <input type="text" class="form-control" placeholder="Judul" name="keys[]" value="{{ $additional_information->key }}">
          </div>
          <div class="input-group input-group-outline">
            <input type="text" class="form-control" placeholder="Isi" name="values[]" value="{{ $additional_information->value }}">
          </div>
          <button type="button" class="badge badge-pill bg-gradient-primary rounded-circle position-absolute" style="right: 0px; top: 0px" onclick="hapusElement(this)"><i class="fa-solid fa-x fa-sm"></i></button>
        </div>
        @endforeach
        <button type="button" class="btn btn-info my-2" onclick="tambahElement(this)"><i class="fa-solid fa-plus"></i></button>
      </div>
    </div>
  </div>
  <div class="col-lg-6 px-5 d-flex flex-column gap-2">
    <div class="mt-3">
      <label for="">Deskripsi</label>
      <input type="hidden" name="description" hidden value="{{ $product->description }}">
      <div id="editor" style="height: 400px;">{!! $product->description !!}</div>
    </div>
    <button type="submit" class="col-lg-2 btn btn-info align-self-end">Simpan</button>
  </div>
</form>
@endsection

@section('scriptjs')
  <script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    name.addEventListener('input', function() {
      fetch('/admin/dashboard/product/slug/checkSlug?name=' + name.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
    })

    function previewImage(e) {
        const preview = e.previousElementSibling;
        const fileInput = e;
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

    function addGambarTambahan(e) { 
      e.parentElement.nextElementSibling.insertAdjacentHTML('beforeend', `<div class="form-group border">
            <label for="">Pilih Gambar Tambahan</label>
            <img src="" class="img-preview img-fluid mb-3 col-sm-2 d-block" id="imagePreview">
            <input type="file" id="images" name="images[]" onchange="previewImage(this)">
            @error('images')
              <div class="text-danger">{{ $message }}</div>
            @enderror
            <button type="button" class="btn btn-danger" onclick="hapusElement(this)"><i class="fa-solid fa-x"></i></button>
          </div>`);
    }

    // function handleFileInputChange(e) {
    //   const files = e.target.files;
    //   const previewContainer = document.getElementById("previewContainer");
    //   previewContainer.innerHTML = "";

    //   for (let i = 0; i < files.length; i++) {
    //     const file = files[i];
    //     const reader = new FileReader();

    //     reader.onload = function(e) {
    //       const img = document.createElement("img");
    //       img.src = e.target.result;
    //       img.style.maxWidth = "200px";
    //       previewContainer.appendChild(img);
    //     };

    //     reader.readAsDataURL(file);
    //   }
    // }
    // document.getElementById("images").addEventListener("change", handleFileInputChange);

    function hapusElement(e) {
      e.parentElement.remove();
    }

    function tambahElement(e) {
      e.insertAdjacentHTML('beforebegin', `<div class="d-flex gap-2 border p-2 position-relative">
          <div class="input-group input-group-outline">
            <input type="text" class="form-control" placeholder="Judul" name="keys[]">
          </div>
          <div class="input-group input-group-outline">
            <input type="text" class="form-control" placeholder="Isi" name="values[]">
          </div>
          <button type="button" class="badge badge-pill bg-gradient-primary rounded-circle position-absolute" style="right: 0px; top: 0px" onclick="hapusElement(this)"><i class="fa-solid fa-x fa-sm"></i></button>
        </div>`);
    }
  </script>
  <script src="{{ asset('js/quill-custom.js') }}"></script>
@endsection