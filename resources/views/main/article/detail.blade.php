@extends('main.layouts.main')

@section('seo')
  <meta name="description" content="{{ $article->seo }}">
@endsection

@section('content')
{{-- Title & Photo Start --}}
<div class="w-full mt-[70px] sm:mt-[90px] flex flex-col p-5 gap-3 sm:p-10 sm:gap-5 lg:px-[80px] 2xl:px-40">
  <div class="w-full flex flex-col gap-1">
    <span class="w-full font-bold text-2xl sm:text-[32px] lg:text-5xl">{{ $article->title }}</span>
    <span class="w-full text-sm sm:text-base lg:text-xl">{{ $articleDate }}</span>
  </div>
  <img src="{{ asset('/storage/'.$article->image) }}" alt="" class="self-center w-full rounded-lg xl:w-2/3">
</div>
{{-- Title & Photo End --}}
{{-- Separator Start --}}
<div class="w-full px-5 flex items-center justify-center sm:px-10 lg:px-[80px] 2xl:px-40">
  <div class="w-full h-[1px] bg-main-green"></div>
</div>
{{-- Separator End--}}
{{-- Content Article Start --}}
<div class="w-full p-5 sm:p-10 text-base text-main-black text-justify sm:text-lg lg:text-xl xl:text-2xl lg:px-[80px] 2xl:px-40">
  <article class="prose w-full max-w-none">
    {!! $article->body !!}
  </article>
</div>
{{-- Content Article End --}}
{{-- Separator Start --}}
<div class="w-full px-5 flex items-center justify-center sm:px-10 lg:px-[80px] 2xl:px-40">
  <div class="w-full h-[1px] bg-main-green"></div>
</div>
{{-- Separator End--}}
{{-- Writer Start --}}
<div class="w-full p-5 flex flex-col gap-3 sm:px-10 sm:gap-5 lg:px-[80px] 2xl:px-40">
  <span class="font-bold text-lg sm:text-xl">Ditulis Oleh</span>
  <div class="w-full flex items-center gap-3">
    <div class="">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-[40px] h-[40px] sm:w-[50px] sm:h-[50px]" viewBox="0 0 60 60" fill="none">
        <g clip-path="url(#clip0_156_7056)">
          <path d="M30 0C46.56 0 60 13.44 60 30C60 46.56 46.56 60 30 60C13.44 60 0 46.56 0 30C0 13.44 13.44 0 30 0ZM12.069 40.248C16.473 46.818 23.085 51 30.48 51C37.872 51 44.487 46.821 48.888 40.248C43.8952 35.5818 37.3138 32.9904 30.48 33C23.6451 32.9897 17.0625 35.5811 12.069 40.248ZM30 27C32.3869 27 34.6761 26.0518 36.364 24.364C38.0518 22.6761 39 20.3869 39 18C39 15.6131 38.0518 13.3239 36.364 11.636C34.6761 9.94821 32.3869 9 30 9C27.6131 9 25.3239 9.94821 23.636 11.636C21.9482 13.3239 21 15.6131 21 18C21 20.3869 21.9482 22.6761 23.636 24.364C25.3239 26.0518 27.6131 27 30 27Z" fill="#1E1E1E"/>
        </g>
        <defs>
          <clipPath id="clip0_156_7056">
            <rect width="60" height="60" fill="white"/>
          </clipPath>
        </defs>
      </svg>
    </div>
    <span class="font-bold text-base sm:text-lg">{{ $article->user->username }}</span>
  </div>
</div>
{{-- Writer End --}}
{{-- Separator Start --}}
<div class="w-full px-5 flex items-center justify-center sm:px-10 lg:px-[80px] 2xl:px-40">
  <div class="w-full h-[2px] bg-main-green"></div>
</div>
{{-- Separator End--}}
{{-- Article terkait Start --}}
@if ($articles->isNotEmpty())
<div class="w-full flex flex-col p-5 sm:p-10 gap-5 lg:gap-10 items-center lg:px-[80px] 2xl:px-40">
  <span class="font-bold text-lg lg:text-2xl">Artikel Lainnya</span>
  @foreach ($articles as $article)
  <a href="{{ route('artikel.detail', ['article' => $article->slug]) }}" class="w-full flex flex-col gap-5 group">
    <div class="w-full min-w-[300px] flex items-start justify-center gap-3 pb-5 sm:pb-10 border-b border-b-main-green transition duration-150 group-hover:bg-transparent-hover">
      <div class="w-[100px] sm:w-[200px] lg:w-[180px] xl:w-[200px] h-[100px] sm:h-[150px] lg:h-[135px] xl:h-[150px] bg-center bg-cover bg-no-repeat flex-none rounded-xl" style="background-image: url('{{ asset('/storage/'.$article->image) }}')"></div>
      <div class="flex flex-col justify-center self-stretch flex-1 gap-1">
        <h4 class="text-main-black font-bold text-base line-clamp-2 sm:text-xl lg:text-2xl">{{ $article->title }}</h4>
        <p class="text-sec-black font-normal text-sm sm:text-base line-clamp-2 sm:line-clamp-3 lg:line-clamp-2 xl:line-clamp-3 lg:text-base">{{ $article->excerpt }}</p>
      </div>
    </div>
  </a>
  @endforeach
</div>
@endif
{{-- Article terkait end --}}
@endsection
