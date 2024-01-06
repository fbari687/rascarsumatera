@extends('dashboard.layouts.index')

@section('content')
<div class="bg-white">
  <div class="col-lg-8 p-5 d-flex flex-column gap-4">
    <h4>Edit {{ $title }}</h4>
    <form action="/admin/dashboard/contact/{{ $contact->id }}" method="POST" class="d-flex flex-column gap-2">
      @csrf
      @method('put')
      <div class="d-flex flex-column">
        <input type="hidden" hidden name="oldName" value="{{ $contact->content }}">
        <label for="name" class="fw-bold">Sosmed</label>
        <div class="input-group input-group-dynamic mb-2">
          <select class="form-control" name="socmed_id" id="">
            <option disabled>Pilih Sosmed</option>
            @foreach ($socmeds as $socmed)
            @if ($socmed->id == $contact->socmed_id)
            <option value="{{ $socmed->id }}" selected>{{ $socmed->name }}</option>
            @endif
            <option value="{{ $socmed->id }}">{{ $socmed->name }}</option>
            @endforeach
          </select>
          @error('socmed_id')
            <div class="">{{ $message }}</div>
          @enderror
        </div>
        @error('socmed_id')
            <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="d-flex flex-column">
        <input type="hidden" hidden name="oldName" value="{{ $contact->content }}">
        <label for="name" class="fw-bold">Kontak</label>
        <div class="input-group input-group-outline my-3">
          <input type="text" class="form-control" id="name" name="content" placeholder="content" value="{{ $contact->content }}">
        </div>
        @error('content')
            <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="d-flex flex-column">
        <label for="name" class="fw-bold">Link</label>
        <div class="input-group input-group-outline my-3">
          <input type="text" class="form-control" id="name" name="link" placeholder="https://" value="{{ $contact->link }}">
        </div>
        @error('link')
            <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <button type="submit" class="col-lg-2 btn btn-info align-self-end">Edit</button>
      </div>
    </form>
  </div>
</div>
@endsection

@section('scriptjs')
  <script>
  </script>
@endsection