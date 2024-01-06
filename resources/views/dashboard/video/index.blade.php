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
          <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">Video</th>
          <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($projectVideos as $projectvideo)
        <tr class="border-bottom">
          <td>
            <div class="d-flex px-2">
              <p class="px-2 text-sm font-weight-normal mb-0">{{ $loop->iteration }}</p>
            </div>
          </td>
          <td>
            <video src="{{ asset('/storage/'.$projectvideo->video) }}" width="200px" loop autoplay controls muted></video>
          </td>
          <td>
            <button type="button" class="btn btn-info mt-3" data-bs-toggle="modal" data-bs-target="#video{{ $projectvideo->id }}">
              <i class="fa-solid fa-pen-to-square"></i>
            </button>
            <div class="modal fade" id="video{{ $projectvideo->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <form action="/admin/dashboard/video/{{ $projectvideo->id }}" method="POST" class="modal-content" enctype="multipart/form-data">
                  @csrf
                  @method('put')
                  <div class="modal-header">
                    <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Ganti Video</h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <input type="hidden" hidden name="id" value="{{ $projectvideo->id }}">
                    <div class="">Upload File Video Baru (max: 10mb, mp4. ratio:16/9)</div>
                    <input type='file'  id='videoUpload' name="video"/>
                    <video width="320" height="240" style="display:none" id="video" controls autoplay>
                      Your browser does not support the video tag.
                    </video>
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
  document.getElementById("videoUpload").onchange = function(event) {
  let file = event.target.files[0];
  let blobURL = URL.createObjectURL(file);
  document.querySelector("#video").style.display = 'block';
  document.querySelector("#video").src = blobURL;
}
</script>
@endsection