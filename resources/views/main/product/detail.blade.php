@extends('main.layouts.mainWithoutFooter')

@section('seo')
  <meta name="description" content="{{ $product->seo }}">
@endsection

@section('content')
{{-- Header Detail Start --}}
  <div class="w-full mt-[70px] sm:mt-[90px] flex flex-col p-5 sm:p-10 lg:px-20 2xl:px-40 gap-5 bg-sec-black lg:flex-row lg:gap-10">
    <div class="splide w-full lg:w-[66.90%] 2xl:w-[45%]" id="product-image">
      <div class="splide__track">
        <ul class="splide__list">
          <li class="splide__slide">
            <a href="{{ asset('/storage/'.$product->image) }}" data-lightbox="{{ $product->image }}">
              <img src="{{ asset('/storage/'.$product->image) }}" alt="" class="rounded-xl w-full">
            </a>
          </li>
          @foreach ($product->images as $image)
          <li class="splide__slide">
            <a href="{{ asset('/storage/'.$image->image) }}" data-lightbox="{{ $image->image }}">
              <img src="{{ asset('/storage/'.$image->image) }}" alt="" class="rounded-xl w-full">
            </a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
    <div class="w-full flex flex-col justify-between gap-10 lg:w-[33.10%] 2xl:w-[55%]">
      <div class="w-full lg:flex flex-col gap-10">
        <div class="w-full flex flex-col gap-3 sm:gap-5">
          <span class="font-bold text-main-white uppercase sm:text-2xl 2xl:text-3xl">{{ $product->name }}</span>
          <div class="w-full flex gap-1 items-center text-sm sm:text-base lg:text-lg">
            <span class="text-main-white">Kategori : </span>
            <div class="flex gap-0.5 items-center">
              <span class="text-main-green">{{ $product->type->name }}</span>
              <span class="text-main-white">,</span>
              <span class="text-main-green">{{ $product->brand->name }}</span>
            </div>
          </div>
        </div>
        <div class="hidden w-full lg:flex flex-col gap-3">
          @foreach ($product->additional_informations as $additional_information)
          <div class="w-full flex items-center pl-5 border-l-2 border-l-main-green text-white">
            <h4 class="w-1/2">{{ $additional_information->key }}</h4>
            <h4 class="w-1/2">{{ $additional_information->value }}</h4>
          </div>
          @endforeach
        </div>
      </div>
      <a href="{{ $whatsapp->link }}?text=Halo, saya pengunjung website https://rascarsumatera.co.id ingin memesan {{ $product->name }}, apakah produk tersedia ?" target="_blank" class="hidden w-full lg:flex py-2.5 items-center justify-center gap-3 bg-main-green text-white rounded-xl transition duration-150 hover:bg-green-700">
        <span class="font-bold text-base 2xl:text-xl">Pesan Sekarang</span>
        <div class="">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
            <g clip-path="url(#clip0_216_6849)">
              <path d="M2.00401 22.5L3.35601 17.532C2.46515 16.0049 1.99711 14.268 2.00001 12.5C2.00001 6.977 6.47701 2.5 12 2.5C17.523 2.5 22 6.977 22 12.5C22 18.023 17.523 22.5 12 22.5C10.2328 22.5029 8.49667 22.0352 6.97001 21.145L2.00401 22.5ZM8.39101 7.808C8.26188 7.81602 8.13569 7.85003 8.02001 7.908C7.91153 7.96943 7.81251 8.04622 7.72601 8.136C7.60601 8.249 7.53801 8.347 7.46501 8.442C7.09542 8.923 6.89662 9.51342 6.90001 10.12C6.90201 10.61 7.03001 11.087 7.23001 11.533C7.63901 12.435 8.31201 13.39 9.20101 14.275C9.41501 14.488 9.62401 14.702 9.84901 14.901C10.9524 15.8725 12.2673 16.573 13.689 16.947L14.258 17.034C14.443 17.044 14.628 17.03 14.814 17.021C15.1053 17.006 15.3896 16.9271 15.647 16.79C15.813 16.702 15.891 16.658 16.03 16.57C16.03 16.57 16.073 16.542 16.155 16.48C16.29 16.38 16.373 16.309 16.485 16.192C16.568 16.106 16.64 16.005 16.695 15.89C16.773 15.727 16.851 15.416 16.883 15.157C16.907 14.959 16.9 14.851 16.897 14.784C16.893 14.677 16.804 14.566 16.707 14.519L16.125 14.258C16.125 14.258 15.255 13.879 14.724 13.637C14.668 13.6126 14.608 13.5987 14.547 13.596C14.4786 13.589 14.4095 13.5967 14.3443 13.6186C14.2791 13.6405 14.2193 13.6761 14.169 13.723V13.721C14.164 13.721 14.097 13.778 13.374 14.654C13.3325 14.7098 13.2754 14.7519 13.2098 14.7751C13.1443 14.7982 13.0733 14.8013 13.006 14.784C12.9409 14.7666 12.877 14.7445 12.815 14.718C12.691 14.666 12.648 14.646 12.563 14.609L12.558 14.607C11.9859 14.3572 11.4562 14.0198 10.988 13.607C10.862 13.497 10.745 13.377 10.625 13.261C10.2316 12.8842 9.88873 12.458 9.60501 11.993L9.54601 11.898C9.50364 11.8342 9.46937 11.7653 9.44401 11.693C9.40601 11.546 9.50501 11.428 9.50501 11.428C9.50501 11.428 9.74801 11.162 9.86101 11.018C9.9551 10.8983 10.0429 10.7738 10.124 10.645C10.242 10.455 10.279 10.26 10.217 10.109C9.93701 9.425 9.64701 8.744 9.34901 8.068C9.29001 7.934 9.11501 7.838 8.95601 7.819C8.90201 7.813 8.84801 7.807 8.79401 7.803C8.65972 7.79633 8.52515 7.79766 8.39101 7.807V7.808Z" fill="white"/>
            </g>
            <defs>
              <clipPath id="clip0_216_6849">
                <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
              </clipPath>
            </defs>
          </svg>
        </div>
      </a>
    </div>
  </div>
{{-- Header Detail End --}}
{{-- Desc Start --}}
  <div class="w-full p-5 sm:p-10 lg:px-20 2xl:px-40 flex flex-col gap-5 sm:gap-10">
    <div class="w-full flex flex-col gap-3 sm:flex-row sm:gap-5">
      <label for="descRadio" class="w-fit px-2.5 pt-[5px] pb-[7px] sm:px-[15px] sm:py-[10px] border border-main-green rounded cursor-pointer">
        <input type="radio" hidden class="hidden" id="descRadio" name="show">
        <span class="text-main-green 2xl:text-xl select-none">Deskripsi</span>
      </label>
      <label for="infoRadio" class="w-fit px-2.5 pt-[5px] pb-[7px] sm:px-[15px] sm:py-[10px] border border-fourth-white rounded cursor-pointer lg:hidden">
        <input type="radio" hidden class="hidden" id="infoRadio" name="show">
        <span class="text-main-black 2xl:text-xl select-none">Informasi Tambahan</span>
      </label>
    </div>
    {{-- Separator Start --}}
    <div class="w-full flex items-center justify-center">
      <div class="w-full h-[1px] bg-main-green"></div>
    </div>
    {{-- Separator End--}}
    {{-- Isi Desc Start --}}
    <div class="w-full prose mb-36 max-w-none" id="descContent">
      {!! $product->description !!}
    </div>
    {{-- Isi Desc End --}}
    {{-- Info Tambahan Start --}}
    <div class="hidden w-full mb-36" id="infoContent">
      <div class="w-full flex flex-col gap-3">
        @foreach ($product->additional_informations as $additional_information)
        <div class="w-full flex items-center pl-5 border-l-2 border-l-main-green">
          <h4 class="w-1/2">{{ $additional_information->key }}</h4>
          <h4 class="w-1/2">{{ $additional_information->value }}</h4>
        </div>
          @endforeach
      </div>
    </div>
    {{-- Info Tambahan End --}}
  </div>
{{-- Desc End --}}
{{-- Separator Start --}}
<div class="w-full px-5 flex items-center justify-center sm:px-10 lg:px-[80px] 2xl:px-40">
  <div class="w-full h-[1px] bg-main-green"></div>
</div>
{{-- Separator End--}}
{{-- Related Products Start --}}
@if ($relatedProducts->isNotEmpty())
<div class="w-full flex flex-col gap-5 px-5 pt-5 pb-10 sm:p-10 lg:px-20 2xl:px-40 lg:gap-10">
  <span class="w-full text-center text-base font-bold sm:text-2xl">Produk Terkait</span>
  <div class="w-full grid grid-cols-2 sm:grid-cols-2 xl:grid-cols-4 gap-5 xl:gap-10">
    @foreach ($relatedProducts as $relate)
    <a href="/product/{{ $relate->slug }}" class="flex flex-col items-center rounded overflow-hidden border-[0.4px] border-third-white shadow-shadowCard transition duration-150 hover:bg-transparent-hover">
      <div class="w-full h-[150px] bg-center bg-cover bg-no-repeat lg:h-[200px]" style="background-image: url('{{ asset('/storage/'.$relate->image) }}')"></div>
        <div class="w-full p-2.5 sm:p-5 flex flex-col gap-1">
        <span class="uppercase text-xs sm:text-sm font-normal text-main-black truncateNew lg:text-base">{{ $relate->name }}</span>
        <div class="w-full flex gap-1 items-center">
          <span class="text-[10px] sm:text-xs font-normal text-main-green lg:text-sm">{{ $relate->type->name }}</span>
          <span class="text-[10px] sm:text-xs font-normal lg:text-sm">,</span>
          <span class="text-[10px] sm:text-xs font-normal text-main-green lg:text-sm">{{ $relate->brand->name }}</span>
        </div>
      </div>
    </a>
    @endforeach
  </div>
</div>
@endif
{{-- Related Products End --}}
{{-- Minta Penawaran Mobile Start --}}
<div class="fixed w-full bg-main-white px-4 py-6 bottom-0 left-0 flex items-center justify-center shadow-shadowBold lg:hidden">
  <a href="{{ $whatsapp->link }}?text=Halo, saya pengunjung website https://rascarsumatera.co.id ingin memesan {{ $product->name }}, apakah produk tersedia ?" target="_blank" class="w-full px-5 py-4 flex items-center justify-center gap-2 text-main-white bg-main-green rounded-xl transition duration-150 hover:bg-green-700">
    <span class="text-lg font-bold sm:text-xl">Pesan Sekarang</span>
    <div class="">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-[25px] h-[25px] sm:w-[28px] sm:h-[28px]" width="28" height="28" viewBox="0 0 20 20" fill="none">
        <g clip-path="url(#clip0_253_2859)">
          <path d="M1.66985 18.3334L2.79652 14.1934C2.05413 12.9208 1.6641 11.4734 1.66652 10.0001C1.66652 5.39758 5.39735 1.66675 9.99985 1.66675C14.6023 1.66675 18.3332 5.39758 18.3332 10.0001C18.3332 14.6026 14.6023 18.3334 9.99985 18.3334C8.52716 18.3358 7.0804 17.9461 5.80818 17.2042L1.66985 18.3334ZM6.99235 6.09008C6.88473 6.09676 6.77958 6.12511 6.68318 6.17341C6.59278 6.22461 6.51026 6.2886 6.43818 6.36341C6.33818 6.45758 6.28152 6.53925 6.22068 6.61841C5.91269 7.01924 5.74702 7.51126 5.74985 8.01675C5.75151 8.42508 5.85818 8.82258 6.02485 9.19425C6.36568 9.94591 6.92652 10.7417 7.66735 11.4792C7.84568 11.6567 8.01985 11.8351 8.20735 12.0009C9.12684 12.8105 10.2226 13.3943 11.4073 13.7059L11.8815 13.7784C12.0357 13.7867 12.1898 13.7751 12.3448 13.7676C12.5875 13.7551 12.8245 13.6893 13.039 13.5751C13.1773 13.5017 13.2423 13.4651 13.3582 13.3917C13.3582 13.3917 13.394 13.3684 13.4623 13.3167C13.5748 13.2334 13.644 13.1742 13.7373 13.0767C13.8065 13.0051 13.8665 12.9209 13.9123 12.8251C13.9773 12.6892 14.0423 12.4301 14.069 12.2142C14.089 12.0492 14.0832 11.9592 14.0807 11.9034C14.0773 11.8142 14.0032 11.7217 13.9223 11.6826L13.4373 11.4651C13.4373 11.4651 12.7123 11.1492 12.2698 10.9476C12.2232 10.9272 12.1732 10.9157 12.1223 10.9134C12.0653 10.9076 12.0077 10.914 11.9534 10.9322C11.8991 10.9505 11.8493 10.9802 11.8073 11.0192V11.0176C11.8032 11.0176 11.7473 11.0651 11.1448 11.7951C11.1103 11.8415 11.0626 11.8767 11.008 11.896C10.9534 11.9153 10.8943 11.9178 10.8382 11.9034C10.7839 11.8889 10.7307 11.8705 10.679 11.8484C10.5757 11.8051 10.5398 11.7884 10.469 11.7576L10.4648 11.7559C9.98811 11.5478 9.5467 11.2666 9.15651 10.9226C9.05151 10.8309 8.95401 10.7309 8.85401 10.6342C8.52616 10.3203 8.24044 9.96509 8.00401 9.57758L7.95485 9.49841C7.91953 9.44522 7.89098 9.38783 7.86985 9.32758C7.83818 9.20508 7.92068 9.10675 7.92068 9.10675C7.92068 9.10675 8.12318 8.88508 8.21735 8.76508C8.29576 8.66535 8.36891 8.5616 8.43651 8.45425C8.53485 8.29592 8.56568 8.13341 8.51401 8.00758C8.28068 7.43758 8.03901 6.87008 7.79068 6.30675C7.74151 6.19508 7.59568 6.11508 7.46318 6.09925C7.41818 6.09425 7.37318 6.08925 7.32818 6.08591C7.21627 6.08035 7.10413 6.08147 6.99235 6.08925V6.09008Z" fill="white"/>
        </g>
        <defs>
          <clipPath id="clip0_253_2859">
            <rect width="20" height="20" fill="white"/>
          </clipPath>
        </defs>
      </svg>
    </div>
  </a>
</div>
{{-- Minta Penawaran Mobile End --}}
@endsection

@section('script')
<script>
  // Mendapatkan elemen-elemen yang diperlukan
const descRadio = document.getElementById('descRadio');
const infoRadio = document.getElementById('infoRadio');
const descContent = document.getElementById('descContent');
const infoContent = document.getElementById('infoContent');

// Mendengarkan perubahan pada radio button descRadio
descRadio.addEventListener('change', function() {
  if (descRadio.checked) {
    // Jika descRadio dicentang, tampilkan descContent dan sembunyikan infoContent
    descContent.classList.remove('hidden');
    descRadio.parentElement.classList.replace('border-fourth-white', 'border-main-green');
    descRadio.nextElementSibling.classList.replace('text-main-black', 'text-main-green');
    infoRadio.parentElement.classList.replace('border-main-green', 'border-fourth-white');
    infoRadio.nextElementSibling.classList.replace('text-main-green', 'text-main-black');
    infoContent.classList.add('hidden');
  }
});

// Mendengarkan perubahan pada radio button infoRadio
infoRadio.addEventListener('change', function() {
  if (infoRadio.checked) {
    // Jika infoRadio dicentang, tampilkan infoContent dan sembunyikan descContent
    infoContent.classList.remove('hidden');
    infoRadio.parentElement.classList.replace('border-fourth-white', 'border-main-green');
    infoRadio.nextElementSibling.classList.replace('text-main-black', 'text-main-green');
    descRadio.parentElement.classList.replace('border-main-green', 'border-fourth-white');
    descRadio.nextElementSibling.classList.replace('text-main-green', 'text-main-black');
    descContent.classList.add('hidden');
  }
});

</script>
@endsection

