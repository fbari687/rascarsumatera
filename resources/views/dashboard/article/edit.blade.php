@extends('dashboard.layouts.index')

@section('content')
<div class="bg-white">
  <div class="col-lg-8 p-5 d-flex flex-column gap-4">
    <h4>Edit {{ $title }}</h4>
    <form action="/admin/dashboard/article/{{ $article->slug }}" method="POST" enctype="multipart/form-data" class="d-flex flex-column gap-2">
      @csrf
      @method('put')
      <div class="d-flex flex-column">
        <label for="title" class="fw-bold">Title</label>
        <div class="input-group input-group-outline my-3">
          <input type="text" class="form-control" id="title" name="title" placeholder="Judul" value="{{ $article->title }}">
        </div>
        @error('title')
            <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <input type="text" class="form-control" id="slug" name="slug" placeholder="slug" hidden value="{{ $article->slug }}">
      <div class="d-flex flex-column">
        <label for="seo" class="fw-bold">SEO</label>
        <div class="input-group input-group-outline my-3">
          <input type="text" class="form-control" id="seo" name="seo" placeholder="SEO" value="{{ $article->seo }}">
        </div>
        @error('seo')
            <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      @error('slug')
        <span>{{ $message }}</span>
      @enderror
      <div class="d-flex flex-column gap-5">
        <div class="form-group">
          <label for="image" class="d-block fw-bold">Pilih Gambar</label>
          <input type="hidden" hidden name="oldImage" value="{{ $article->image }}">
          <img src="{{ asset('/storage/'. $article->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block" id="imagePreview">
          <input type="file" id="image" name="image" onchange="previewImage()">
          @error('image')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>
    <div class="mt-3">
      <label for="">Konten</label>
      <input type="hidden" name="body" hidden value="{{ $article->body }}">
      <div id="editor" style="height: 400px;">{!! $article->body !!}</div>
    </div>
      <button type="submit" class="col-lg-2 btn btn-info align-self-end">Edit</button>
    </form>
  </div>
</div>
@endsection

@section('scriptjs')
  <script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('input', function() {
      fetch('/admin/dashboard/article/slug/checkSlug?title=' + title.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
    })

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
    var quill = new Quill("#editor", {
    modules: {
      toolbar: [
            [{ header: [1, 2, 3, 4, 5, 6, false] }],
            [{ font: [] }],
            ["bold", "italic"],
            ["link", "blockquote", "code-block", { align: [] }],
            [{ list: "ordered" }, { list: "bullet" }],
            [{ script: "sub" }, { script: "super" }],
            [{ color: [] }, { background: [] }],
        ],
    },
    theme: "snow",
});

quill.on("text-change", function (delta, oldDelta, source) {
    document.querySelector("input[name='body']").value =
        quill.root.innerHTML;
});
  </script>
@endsection