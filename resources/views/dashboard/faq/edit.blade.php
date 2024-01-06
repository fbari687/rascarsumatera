@extends('dashboard.layouts.index')

@section('content')
<div class="bg-white">
  <div class="col-lg-8 p-5 d-flex flex-column gap-4">
    <h4>Edit {{ $title }}</h4>
    <form action="/admin/dashboard/faq/{{ $faq->id }}" method="POST" class="d-flex flex-column gap-2">
      @csrf
      @method('put')
      <div class="d-flex flex-column">
        <label class="font-weight-bold">Pertanyaan</label>
        <div class="input-group input-group-dynamic mb-2">
          <textarea class="form-control" rows="3" placeholder="Tulis Pertanyaan Disini" name="question">{{ $faq->question }}</textarea>
        </div>
        <label class="font-weight-bold">Jawaban</label>
        <div class="input-group input-group-dynamic">
          <textarea class="form-control" rows="3" placeholder="Tulis Jawaban Disini" name="answer">{{ $faq->answer }}</textarea>
        </div>
      </div>
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
      fetch('/admin/dashboard/type/slug/checkSlug?name=' + name.value)
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