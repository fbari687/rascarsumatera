@extends('main.layouts.main')

@section('customcss')
<link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
@endsection
@section('content')
{{-- Start Hero --}}
<div class="mt-[70px] sm:mt-[90px] w-full h-[220px] sm:h-[400px] lg:h-[720px] xl:h-[1080px] px-5 sm:px-10 lg:px-20 2xl:px-40 flex flex-col gap-3 items-center justify-center bg-center bg-cover bg-no-repeat" style="background-image: url('{{ asset('/storage/'. $banner->image) }}')">
  <div class="w-full flex flex-col text-main-white">
    <h4 class="font-semibold text-sm align-middle sm:text-xl lg:text-4xl xl:text-5xl">Saatnya serahkan pada ahlinya!</h4>
    <h3 class="text-xl font-bold text-main-yellow sm:text-[32px] sm:pb-2 lg:text-5xl xl:text-[64px]">Selamat datang di</h3>
    <h3 class="text-xl font-bold text-main-yellow sm:text-[32px] lg:text-5xl xl:text-[64px]">RASCAR SUMATERA</h3>
    <h4 class="font-semibold text-sm align-middle sm:text-xl lg:text-4xl xl:text-5xl">Manufaktur Spesialis Variasi Mobil</h4>
  </div>
  <a href="{{ $whatsapp->link }}?text=Halo, saya pengunjung website https://rascarsumatera.co.id ingin info lebih lanjut terkait produk rascar sumatera" class="bg-main-yellow py-[5px] sm:py-2.5 pl-2.5 pr-[8px] sm:pl-5 sm:pr-[18px] flex items-center gap-1 rounded-full self-start border border-main-white transition duration-150 hover:bg-yellow-500">
    <div class="text-xs sm:text-sm lg:text-xl font-bold">Hubungi Kami!</div>
    <div class="">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-[14px] h-[14px] sm:w-[18px] sm:h-[18px] lg:w-[30px] lg:h-[30px]" viewBox="0 0 14 14" fill="none">
      <g clip-path="url(#clip0_145_34)">
        <path d="M9.43371 6.41666L6.30471 3.28766L7.12954 2.46283L11.6667 7L7.12954 11.5372L6.30471 10.7123L9.43371 7.58333H2.33337V6.41666H9.43371Z" fill="#1E1E1E"/>
      </g>
      <defs>
        <clipPath id="clip0_145_34">
          <rect width="14" height="14" fill="white"/>
        </clipPath>
      </defs>
    </svg>
  </div>
  </a>
</div>
{{-- End Hero --}}
{{-- Start KerjaSama --}}
<div class="w-full p-5 sm:p-10 lg:px-20 2xl:px-40 flex flex-col gap-5 sm:gap-10 items-center bg-sec-black text-main-white text-base font-bold text-center">
  <h3 class="w-full text-base sm:text-2xl">Kami Telah Bekerjasama Dengan</h3>
  <div class="w-full flex justify-center gap-5 flex-wrap">
    <img src="{{ asset('img/zoomlion.png') }}" alt="" class="h-10 sm:h-[60px] lg:h-[80px]">
    <img src="{{ asset('img/bnpb.png') }}" alt="" class="h-10 sm:h-[60px] lg:h-[80px]">
  </div>
</div>
{{-- End KerjaSama --}}
{{-- Start Feature --}}
<div class="w-full px-5 py-10 sm:px-10 lg:px-20 2xl:px-40 flex flex-col items-center">
  <div class="w-full grid grid-cols-2 gap-5">
    {{-- Benefit --}}
    <div class="flex flex-col p-2.5 lg:p-5 gap-2 shadow-shadowLight rounded-xl lg:items-center">
      <div class="">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
          <g clip-path="url(#clip0_145_46)">
            <path d="M3.24339 15.5259C2.37339 15.2359 2.36506 14.7675 3.26006 14.4692L35.0717 3.86586C35.9534 3.57252 36.4584 4.06586 36.2117 4.92919L27.1217 36.7392C26.8717 37.6209 26.3634 37.6509 25.9901 36.8142L20.0001 23.3342L30.0001 10.0009L16.6667 20.0009L3.24339 15.5259Z" fill="#1F9F2E"/>
          </g>
          <defs>
            <clipPath id="clip0_145_46">
              <rect width="40" height="40" fill="white" transform="translate(0 0.000854492)"/>
            </clipPath>
          </defs>
        </svg>
      </div>
      <h5 class="font-bold text-sm lg:text-lg">Pengiriman Ke Seluruh Indonesia</h5>
      <p class="hidden lg:block text-center">Rascar Sumatera memberikan layanan pengiriman pesanan melalui Ekspedisi Kargo ke Seluruh Indonesia.</p>
    </div>
    <div class="flex flex-col p-2.5 lg:p-5 gap-2 shadow-shadowLight rounded-xl lg:items-center">
      <div class="">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
          <g clip-path="url(#clip0_145_53)">
            <path d="M10.6367 9.94752C13.2929 7.8193 16.5963 6.66209 20 6.66752C23.5417 6.66752 26.7967 7.89419 29.3633 9.94752L31.785 7.52585L34.1417 9.88252L31.72 12.3042C33.4828 14.5111 34.5868 17.1709 34.9047 19.9775C35.2226 22.7841 34.7416 25.6234 33.5171 28.1688C32.2926 30.7141 30.3743 32.8619 27.983 34.3652C25.5917 35.8684 22.8246 36.6659 20 36.6659C17.1755 36.6659 14.4083 35.8684 12.017 34.3652C9.62568 32.8619 7.70739 30.7141 6.48288 28.1688C5.25837 25.6234 4.7774 22.7841 5.09533 19.9775C5.41326 17.1709 6.51717 14.5111 8.28001 12.3042L5.85834 9.88419L8.21501 7.52752L10.6367 9.94919V9.94752ZM21.6667 20.0009V12.4925L13.3333 23.3342H18.3333V30.8342L26.6667 20.0009H21.6667ZM13.3333 1.66752H26.6667V5.00085H13.3333V1.66752Z" fill="#1F9F2E"/>
          </g>
          <defs>
            <clipPath id="clip0_145_53">
              <rect width="40" height="40" fill="white" transform="translate(0 0.000854492)"/>
            </clipPath>
          </defs>
        </svg>
      </div>
      <h5 class="font-bold text-sm lg:text-lg">Project Custom Proses Cepat</h5>
      <p class="hidden lg:block text-center">Produk Rascar Sumatera dibuat dengan kualitas bahan yang terjamin, sehingga menghasilkan produk terbaik.</p>
    </div>
    <div class="flex flex-col p-2.5 lg:p-5 gap-2 shadow-shadowLight rounded-xl lg:items-center">
      <div class="">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
          <path d="M20 1.66752L33.695 4.71085C34.4567 4.88085 35 5.55585 35 6.33752V22.9825C35 26.3258 33.3283 29.4492 30.5467 31.3025L20 38.3342L9.45333 31.3025C6.67 29.4475 5 26.3258 5 22.9842V6.33752C5 5.55585 5.54333 4.88085 6.305 4.71085L20 1.66752ZM27.42 13.7042L19.17 21.9525L14.4567 17.2392L12.1 19.5958L19.1717 26.6675L29.7783 16.0609L27.42 13.7042Z" fill="#1F9F2E"/>
        </svg>
      </div>
      <h5 class="font-bold text-sm lg:text-lg">Produk Berkualitas Tinggi</h5>
      <p class="hidden lg:block text-center">Rascar Sumatera menerima project Custom dalam waktu pengerjaan yang cepat ± 7-10 hari kerja.</p>
    </div>
    <div class="flex flex-col p-2.5 lg:p-5 gap-2 shadow-shadowLight rounded-xl lg:items-center">
      <div class="">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
          <path d="M20 11.6675C23.5362 11.6675 26.9276 13.0723 29.428 15.5728C31.9285 18.0732 33.3333 21.4646 33.3333 25.0009C33.3333 28.5371 31.9285 31.9285 29.428 34.4289C26.9276 36.9294 23.5362 38.3342 20 38.3342C16.4637 38.3342 13.0724 36.9294 10.5719 34.4289C8.07138 31.9285 6.66663 28.5371 6.66663 25.0009C6.66663 21.4646 8.07138 18.0732 10.5719 15.5728C13.0724 13.0723 16.4637 11.6675 20 11.6675ZM20 17.5009L17.795 21.9675L12.8666 22.6842L16.4333 26.1592L15.5916 31.0692L20 28.7509L24.4083 31.0675L23.5666 26.1592L27.1333 22.6825L22.205 21.9659L20 17.5009ZM21.6666 3.33252L30 3.33419V8.33419L27.7283 10.2309C25.8432 9.24182 23.7851 8.62557 21.6666 8.41585V3.33419V3.33252ZM18.3333 3.33252V8.41585C16.2155 8.62526 14.158 9.24094 12.2733 10.2292L9.99996 8.33419V3.33419L18.3333 3.33252Z" fill="#1F9F2E"/>
        </svg>
      </div>
      <h5 class="font-bold text-sm lg:text-lg">Pengalaman lebih dari 20 Tahun</h5>
      <p class="hidden lg:block text-center">Rascar Sumatera telah melakukan aktivitas produksi sejak tahun 2003 dan masih konsisten hingga sekarang.</p>
    </div>
    {{-- Benefit --}}
  </div>
</div>
{{-- End Feature --}}
{{-- Start Product --}}
<div class="w-full p-5 sm:p-10 lg:px-20 2xl:px-40 flex flex-col gap-5">
  {{-- Start Produk Terbaru --}}
  <div class="w-full flex flex-col items-center gap-5">
    <div class="w-full text-start">
      <span class="text-base font-bold sm:text-xl lg:text-2xl">PRODUK TERBARU</span>
    </div>
    <div class="w-full">
      <div id="produk-carousel" class="splide" role="group">
        <div class="splide__track">
          <ul class="splide__list">
              {{-- start  --}}
              @foreach ($newProducts as $product) 
              <li class="splide__slide">
                <a href="{{ route('produk.detail', ['product' => $product->slug]) }}" class="min-w-[180px] w-[180px] sm:w-[240px] lg:w-[300px] h-full flex flex-col items-center rounded overflow-hidden border-[0.4px] border-third-white shadow-shadowCard transition duration-150 hover:bg-transparent-hover">
                  <div class="w-full h-[150px] bg-center bg-cover bg-no-repeat lg:h-[200px]" style="background-image: url('{{ asset('/storage/'.$product->image) }}')"></div>
                    <div class="w-full p-2.5 sm:p-5 flex flex-col gap-1">
                    <span class="uppercase text-xs sm:text-sm font-normal text-main-black truncateNew lg:text-base">{{ $product->name }}</span>
                    <div class="w-full flex gap-1 items-center">
                      <span class="text-[10px] sm:text-xs font-normal text-main-green lg:text-sm">{{ $product->type->name }}</span>
                      <span class="text-[10px] sm:text-xs font-normal lg:text-sm">,</span>
                      <span class="text-[10px] sm:text-xs font-normal text-main-green lg:text-sm">{{ $product->brand->name }}</span>
                    </div>
                  </div>
                </a>
              </li>
              @endforeach
              <li class="splide__slide">
                <a href="/product?by=jenis" class="w-[180px] h-full flex flex-col items-center justify-center rounded overflow-hidden group">
                  <div class="w-full flex flex-col gap-2.5 items-center justify-center">
                    <div class="p-2.5 rounded-full bg-sec-white flex items-center justify-center transition duration-150 group-hover:bg-transparent-hover">
                      <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                      <g clip-path="url(#clip0_216_6502)">
                        <path d="M13.9773 9.66664L9.50732 5.19664L10.6857 4.01831L17.1673 10.5L10.6857 16.9816L9.50732 15.8033L13.9773 11.3333H3.83398V9.66664H13.9773Z" fill="#1E1E1E"/>
                      </g>
                      <defs>
                        <clipPath id="clip0_216_6502">
                          <rect width="20" height="20" fill="white" transform="translate(0.5 0.5)"/>
                        </clipPath>
                      </defs>
                      </svg>
                    </div>
                    <h4>Lihat Lainnya</h4>
                  </div>
                </a>
              </li>
            {{-- end --}}
          </ul>
        </div>
      </div>
    </div>
  </div>
  {{-- End Produk Terbaru --}}
  {{-- Start Merk --}}
  <div class="w-full flex flex-col items-center gap-5">
    <div class="w-full flex items-center justify-between">
      <span class="text-base font-bold sm:text-xl lg:text-2xl">MERK</span>
      <select id="" name="" class="bg-main-green text-main-white text-sm px-3 rounded-full py-1 outline-none font-bold cursor-pointer sm:text-base" onchange="getProductByBrand(this)">
        @foreach ($brands as $brand)
        @if ($brand->id == 1)
        <option value="{{ $brand->slug }}" selected>{{ $brand->name }}</option>
        @else
        <option value="{{ $brand->slug }}">{{ $brand->name }}</option>
        @endif
        @endforeach
      </select>
    </div>
    <div class="w-full">
      <div id="merk-carousel" class="splide" role="group">
        <div class="splide__track">
          <ul class="splide__list" id="insideMerkCarousel">
              {{-- start  --}}
              @foreach ($brandProducts as $product) 
                <li class="splide__slide">
                  <a href="{{ route('produk.detail', ['product' => $product->slug]) }}" class="min-w-[180px] w-[180px] sm:w-[240px] lg:w-[300px] flex flex-col items-center rounded overflow-hidden border-[0.4px] border-third-white shadow-shadowCard transition duration-150 hover:bg-transparent-hover">
                    <div class="w-full h-[150px] bg-center bg-cover bg-no-repeat lg:h-[200px]" style="background-image: url('{{ asset('/storage/'.$product->image) }}')"></div>
                      <div class="w-full p-2.5 sm:p-5 flex flex-col gap-1">
                      <span class="uppercase text-xs sm:text-sm font-normal text-main-black truncateNew lg:text-base">{{ $product->name }}</span>
                      <div class="w-full flex gap-1 items-center">
                        <span class="text-[10px] sm:text-xs font-normal text-main-green lg:text-sm">{{ $product->type->name }}</span>
                        <span class="text-[10px] sm:text-xs font-normal lg:text-sm">,</span>
                        <span class="text-[10px] sm:text-xs font-normal text-main-green lg:text-sm">{{ $product->brand->name }}</span>
                      </div>
                    </div>
                  </a>
                </li>
              @endforeach
              <li class="splide__slide">
                <a href="/product?by=merk&filter={{ $brandProducts[0]->brand->slug }}" class="w-[180px] h-full flex flex-col items-center justify-center rounded overflow-hidden group">
                  <div class="w-full flex flex-col gap-2.5 items-center justify-center">
                    <div class="p-2.5 rounded-full bg-sec-white flex items-center justify-center transition duration-150 group-hover:bg-transparent-hover">
                      <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                      <g clip-path="url(#clip0_216_6502)">
                        <path d="M13.9773 9.66664L9.50732 5.19664L10.6857 4.01831L17.1673 10.5L10.6857 16.9816L9.50732 15.8033L13.9773 11.3333H3.83398V9.66664H13.9773Z" fill="#1E1E1E"/>
                      </g>
                      <defs>
                        <clipPath id="clip0_216_6502">
                          <rect width="20" height="20" fill="white" transform="translate(0.5 0.5)"/>
                        </clipPath>
                      </defs>
                      </svg>
                    </div>
                    <h4>Lihat Lainnya</h4>
                  </div>
                </a>
              </li>
            {{-- end --}}
          </ul>
        </div>
      </div>
    </div>
  </div>
  {{-- End Merk --}}
</div>
{{-- End Product --}}
{{-- Start Proyek --}}
<div class="w-full flex flex-col p-5 sm:p-10 lg:px-20 2xl:px-40 gap-5 sm:gap-10 items-start" style="background: linear-gradient(0deg, rgba(31, 159, 46, 0.40) 0.01%, rgba(71, 71, 71, 0.00) 100%);">
  @if ($galleries->isNotEmpty() && $projectvideo)
  <span class="text-base font-bold text-start sm:text-xl lg:text-2xl">PROYEK</span>
  @endif
  <div class="w-full grid grid-cols-1 xl:grid-cols-2 items-start gap-5">
    @if ($galleries->isNotEmpty())
    <div class="w-full flex flex-col gap-3">
      <section id="main-carousel" class="splide w-full">
        <div class="splide__track">
          <ul class="splide__list">
            @foreach ($galleries as $gallery)
            <li class="splide__slide">
              <a href="{{ asset('/storage/'.$gallery->image) }}" data-lightbox="image-{{ $loop->iteration }}">
                <img src="{{ asset('/storage/'.$gallery->image) }}" alt="" class="rounded">
              </a>
            </li>
            @endforeach
          </ul>
        </div>
      </section>
      <section id="thumbnail-carousel" class="splide">
        <div class="splide__track">
          <ul class="splide__list ">
            @foreach ($galleries as $gallery)
            <li class="splide__slide">
              <img src="{{ asset('/storage/'.$gallery->image) }}" alt="" class="rounded">
            </li>
            @endforeach
          </ul>
        </div>
      </section>
    </div>
    @endif
    @if ($projectvideo)
    <div class="w-full flex flex-col items-center gap-1 md:gap-4">
      <div class="w-full aspect-video bg-sec-black rounded-xl overflow-hidden">
        <video src="{{ asset('/storage/'.$projectvideo->video) }}" class="w-full" loop autoplay controls muted></video>
      </div>
      <div class="w-full flex flex-col gap-2">
        <span class="text-center text-lg font-bold md:text-2xl">Konsultasikan Kebutuhan Anda Sekarang Juga!!!</span>
        <a href="{{ $whatsapp->link }}?text=Halo, saya pengunjung website https://rascarsumatera.co.id ingin info lebih lanjut terkait produk rascar sumatera transition duration-150 hover:bg-green-700" target="_blank" class="w-full flex items-center gap-3 sm:gap-5 animate__animated animate__headShake animate__infinite">
          <h3 class="w-full bg-main-green text-center py-3 text-base sm:text-2xl font-bold uppercase text-white rounded-xl">Hubungi Kami</h3>
        </a>
      </div>
    </div>
    @endif
  </div>
</div>
{{-- End Proyek --}}
{{-- Start Artikel --}}
<div class="w-full flex flex-col p-5 sm:p-10 lg:px-20 2xl:px-40 gap-5 sm:gap-10 items-start" style="background: rgba(31, 159, 46, 0.40);">
  <span class="text-start font-bold text-base sm:text-xl lg:text-2xl">ARTIKEL</span>
  <div class="w-full grid grid-cols-1 xl:grid-cols-2 flex-col gap-5 sm:gap-10">
    @foreach ($articles as $article)
    <a href="{{ route('artikel.detail', ['article' => $article->slug]) }}" class="w-full min-w-[300px] flex items-start justify-center gap-3 pb-5 sm:pb-10 border-b border-b-main-green transition duration-150 hover:bg-transparent-hover">
      <div class="w-[100px] sm:w-[200px] lg:w-[180px] xl:w-[200px] h-[100px] sm:h-[150px] lg:h-[135px] xl:h-[150px] bg-center bg-cover bg-no-repeat flex-none rounded-xl" style="background-image: url('{{ asset('/storage/'.$article->image) }}')"></div>
      <div class="flex flex-col justify-center self-stretch flex-1 gap-1">
        <h4 class="text-main-black font-bold text-base line-clamp-2 sm:text-xl lg:text-2xl">{{ $article->title }}</h4>
        <p class="text-sec-black font-normal text-justify text-sm sm:text-base line-clamp-2 sm:line-clamp-3 lg:line-clamp-2 xl:line-clamp-3 lg:text-base">{{ $article->excerpt }}</p>
      </div>
    </a>
    @endforeach
  </div>
</div>
{{-- End Artikel --}}
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script>
  const merkCarousel = document.getElementById("merk-carousel");
    let merkSplide = new Splide("#merk-carousel", {
        perPage: 1,
        arrows: false,
        pagination: false,
        gap: "20px",
        autoWidth: true,
    }).mount();
  
    const insideMerkCarousel = document.getElementById("insideMerkCarousel");
function getProductByBrand(e) {
    let url = `/sort?slug=${e.value}`;
    let allLi = insideMerkCarousel.querySelectorAll('li');
    let indexOfLi = [];

    for (let i = 0; i < allLi.length; i++) {
      indexOfLi.push(i);
    }
    merkSplide.remove(indexOfLi);
    fetch(url)
        .then((response) => response.json())
        .then((response) => {
            const products = response.data;
            products.forEach((product) => {
            let productCards = "";
                productCards += `<li class="splide__slide">
                  <a href="/product/${
                      product.slug
                  }" class="min-w-[180px] w-[180px] sm:w-[240px] lg:w-[300px] flex flex-col items-center rounded overflow-hidden border-[0.4px] border-third-white shadow-shadowCard transition duration-150 hover:bg-transparent-hover">
                    <div class="w-full h-[150px] bg-center bg-cover bg-no-repeat lg:h-[200px]" style="background-image: url('${
                        document.URL + "storage/" + product.images
                    }')"></div>
                      <div class="w-full p-2.5 sm:p-5 flex flex-col gap-1">
                      <span class="uppercase text-xs sm:text-sm font-normal text-main-black truncateNew lg:text-base">${
                          product.name
                      }</span>
                      <div class="w-full flex gap-1 items-center">
                        <span class="text-[10px] sm:text-xs font-normal text-main-green lg:text-sm">${
                            product.type.name
                        }</span>
                        <span class="text-[10px] sm:text-xs font-normal lg:text-sm">,</span>
                        <span class="text-[10px] sm:text-xs font-normal text-main-green lg:text-sm">${
                            product.brand.name
                        }</span>
                      </div>
                    </div>
                  </a>
                </li>`;
                merkSplide.add(productCards);
            });
            let productCards = '';
            productCards += `<li class="splide__slide">
                <a href="/product?by=merk&filter=${e.value}" class="w-[180px] h-full flex flex-col items-center justify-center rounded overflow-hidden group">
                  <div class="w-full flex flex-col gap-2.5 items-center justify-center">
                    <div class="p-2.5 rounded-full bg-sec-white flex items-center justify-center transition duration-150 group-hover:bg-transparent-hover">
                      <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                      <g clip-path="url(#clip0_216_6502)">
                        <path d="M13.9773 9.66664L9.50732 5.19664L10.6857 4.01831L17.1673 10.5L10.6857 16.9816L9.50732 15.8033L13.9773 11.3333H3.83398V9.66664H13.9773Z" fill="#1E1E1E"/>
                      </g>
                      <defs>
                        <clipPath id="clip0_216_6502">
                          <rect width="20" height="20" fill="white" transform="translate(0.5 0.5)"/>
                        </clipPath>
                      </defs>
                      </svg>
                    </div>
                    <h4>Lihat Lainnya</h4>
                  </div>
                </a>
              </li>`;
              merkSplide.add(productCards);
        });
}

</script>
@endsection