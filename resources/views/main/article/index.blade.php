@extends('main.layouts.main')

@section('content')
{{-- Head Start --}}
<div class="w-full mt-[70px] sm:mt-[90px] pt-5 px-5 sm:px-10 lg:px-[80px] 2xl:px-40 flex flex-col">
  <div class="w-full flex flex-col p-5 gap-1 border border-main-green rounded-xl">
    <span class="text-lg text-main-green sm:text-2xl sm:block">ARTIKEL</span>
    <span class="text-main-green text-base lg:text-lg italic">Informasi Seputar Otomotif</span>
  </div>
</div>
{{-- Head End --}}

{{-- List Start --}}
<div class="w-full p-5 sm:p-10 lg:px-[80px] 2xl:px-40">
  @foreach ($articles as $article)
  <a href="{{ route('artikel.detail', ['article' => $article->slug]) }}" class="w-full flex flex-col gap-5 group">
    <div class="w-full min-w-[300px] flex items-start justify-center gap-3 pb-5 sm:pb-10 border-b border-b-main-green transition duration-150 group-hover:bg-transparent-hover">
      <div class="w-[100px] sm:w-[200px] lg:w-[180px] xl:w-[200px] h-[100px] sm:h-[150px] lg:h-[135px] xl:h-[150px] bg-center bg-cover bg-no-repeat flex-none rounded-xl" style="background-image: url('{{ asset('/storage/'.$article->image) }}')"></div>
      <div class="flex flex-col justify-center self-stretch flex-1 gap-1">
        <h4 class="text-main-black font-bold text-base line-clamp-2 sm:text-xl lg:text-2xl">{{ $article->title }}</h4>
        <p class="text-sec-black font-normal text-sm text-justify sm:text-base line-clamp-2 sm:line-clamp-3 lg:line-clamp-2 xl:line-clamp-3 lg:text-base">{{ $article->excerpt }}</p>
      </div>
    </div>
  </a>
  @endforeach
</div>
{{-- List End --}}

{{ $articles->links('pagination.default') }}
@endsection