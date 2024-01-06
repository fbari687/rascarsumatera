@extends('main.layouts.main')

@section('content')
{{-- Head Start --}}
<div class="w-full mt-[70px] sm:mt-[90px] pt-5 px-5 sm:px-10 lg:px-[80px] 2xl:px-40 flex flex-col">
  <div class="w-full flex flex-col p-5 gap-1 border border-main-green rounded-xl">
    <span class="text-lg text-main-green sm:text-2xl sm:block">Hubungi Kami</span>
    <span class="text-main-green text-base lg:text-lg italic">Jejaring Sosial dan Alamat Kami</span>
  </div>
</div>
{{-- Head End --}}

{{-- Contact & Address Start --}}
<div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-5 p-5 sm:p-10 lg:px-[80px] 2xl:px-40">
  <div class="w-full flex flex-col gap-3 sm:justify-center">
    @foreach ($contacts as $contact)
    <a href="{{ $contact->link }}" class="w-full flex items-center justify-between py-2.5 pl-2.5 pr-5 bg-white rounded-xl shadow-shadowBold transition-all duration-150 hover:shadow-shadowLight">
      <div class="w-fit flex gap-3 sm:gap-5 items-center">
        <div class="p-[8px] rounded-full border border-fourth-white">
          <div class="flex items-center justify-center self-center">
            {!! $contact->socmed->icon !!}
          </div>
        </div>
        <div class="flex flex-col justify-center">
          <span class="text-base text-main-green capitalize font-bold sm:text-lg">{{ $contact->socmed->name }}</span>
          <p class="text-sm sm:text-lg">{{ $contact->content }}</p>
        </div>
      </div>
      <div class="">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-[30px] aspect-square" width="30" height="30" viewBox="0 0 30 30" fill="none">
          <path d="M15 13.75V10L20 15L15 20V16.25H10V13.75H15ZM15 2.5C21.9 2.5 27.5 8.1 27.5 15C27.5 21.9 21.9 27.5 15 27.5C8.1 27.5 2.5 21.9 2.5 15C2.5 8.1 8.1 2.5 15 2.5ZM15 25C20.525 25 25 20.525 25 15C25 9.475 20.525 5 15 5C9.475 5 5 9.475 5 15C5 20.525 9.475 25 15 25Z" fill="#1F9F2E"/>
        </svg>
      </div>
    </a>
    @endforeach
    
  </div>
  <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3983.558894447086!2d104.65201637497147!3d-3.2098527967653308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zM8KwMTInMzUuNSJTIDEwNMKwMzknMTYuNSJF!5e0!3m2!1sen!2sid!4v1704445032636!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full h-[320px] lg:h-full rounded-lg"></iframe>
</div>
{{-- Contact & Address End --}}

<div class="w-full px-5 flex items-center justify-center sm:px-10 lg:px-[80px]">
  <div class="w-full h-[1px] bg-main-green"></div>
</div>

<div class="w-full p-5 sm:p-10 lg:px-[80px] 2xl:px-40 flex flex-col gap-5 sm:gap-10">
  <span class="w-full text-center text-base font-bold sm:text-xl">TINGGALKAN KAMI PESAN</span>
  <div class="w-full grid grid-cols-1 sm:grid-cols-2 gap-x-5">
    <div class="hidden sm:flex w-full bg-cover bg-center bg-no-repeat rounded-xl items-center justify-center p-10" style="background-image: url('{{ asset('img/bg send email.png') }}')">
      <span class="w-full text-center text-main-yellow font-bold text-2xl " style="text-shadow: 1.5px 2px 10px rgba(0, 0, 0, 0.50);">Kirimkan Pesan Lewat Email</span>
    </div>
    <div class="flex flex-col gap-5">
      @if (session()->has('success'))
      <div class="bg-teal-50 border-t-2 border-teal-500 rounded-lg p-4" role="alert">
        <div class="flex">
          <div class="flex-shrink-0">
            <!-- Icon -->
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full border-4 border-teal-100 bg-teal-200 text-teal-800">
              <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/><path d="m9 12 2 2 4-4"/></svg>
            </span>
            <!-- End Icon -->
          </div>
          <div class="ms-3">
            <h3 class="text-gray-800 font-semibold">
              Pesan Berhasil Dikirim.
            </h3>
            <p class="text-sm text-gray-700">
              Mohon menunggu, Kami akan menghubungi anda secepatnya.
            </p>
          </div>
        </div>
      </div>
      @endif
      <form action="/email" method="POST" class="w-full flex flex-col gap-5">
        @csrf
        <div class="w-full flex flex-col gap-3">
          <span class="text-sm font-bold sm:text-base">Nama<span class="text-red-500">*</span></span>
          <div class="w-full flex flex-col gap-1">
            <div class="w-full p-2.5 border border-fourth-white rounded">
              <input type="text" class="w-full outline-none text-sec-black text-sm" name="name" placeholder="Nama Anda">
            </div>
            @error('name')
            <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="w-full flex flex-col gap-3">
          <span class="text-sm font-bold sm:text-base">Nomor WhatsApp<span class="text-red-500">*</span></span>
          <div class="w-full flex flex-col gap-1">
            <div class="w-full p-2.5 border border-fourth-white rounded">
              <input type="text" class="w-full outline-none text-sec-black text-sm" name="telp" placeholder="08xxx">
            </div>
            @error('telp')
            <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="w-full flex flex-col gap-3">
          <span class="text-sm font-bold sm:text-base">Email<span class="text-red-500">*</span></span>
          <div class="w-full flex flex-col gap-1">
            <div class="w-full p-2.5 border border-fourth-white rounded">
              <input type="email" class="w-full outline-none text-sec-black text-sm" name="email" placeholder="example@gmail.com">
            </div>
            @error('email')
            <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="w-full flex flex-col gap-3">
          <span class="text-sm font-bold sm:text-base">Pesan<span class="text-red-500">*</span></span>
          <div class="w-full flex flex-col gap-1">
            <textarea name="message" id="" class="w-full h-[200px] p-2.5 border border-fourth-white rounded text-sm resize-none"></textarea>
            @error('message')
            <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <button type="submit" id="submitEmail" class="w-full bg-main-green px-5 py-2.5 rounded-full text-main-white font-bold text-sm sm:text-base flex items-center justify-center gap-2 transition duration-150 hover:bg-green-700">
          <span>Kirim</span>
          <div class="hidden animate-spin inline-block w-6 h-6 border-[3px] border-current border-t-transparent text-main-white rounded-full" id="loaderSubmit" role="status" aria-label="loading">
            <span class="sr-only">Loading...</span>
          </div>
        </button>
      </form>
    </div>
  </div>
</div>
@endsection

@section('script')
<script>
  const submitEmail = document.getElementById('submitEmail');
  const loaderSubmit = document.getElementById('loaderSubmit');

  submitEmail.addEventListener('click', function () {
    loaderSubmit.classlist.remove('hidden');
  })
</script>
@endsection