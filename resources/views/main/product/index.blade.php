@extends('main.layouts.mainWithoutFooter')

@section('content')
{{-- Start Chips --}}
<div class="w-full mt-[70px] sm:mt-[90px] py-5 px-5 sm:px-10 lg:px-[80px] 2xl:px-40 flex flex-col items-start">
  <section id="chip-carousel" class="splide w-full" aria-label="Beautiful Images">
    <form action="" class="splide__track" id="filterForm" method="GET">
      <ul class="splide__list">
        <li class="splide__slide">
          <div data-isi="" class="px-3 py-[5px] filterChip sm:px-[15px] sm:py-2.5 flex items-center justify-center bg-sec-white cursor-pointer rounded-full text-main-black {{ !Request::query('filter') ? 'border border-main-green text-main-green' : 'text-main-black' }}">
            <span class="font-bold text-sm sm:text-base">All</span>
          </div>
        </li>
        @foreach ($chips as $chip)
        <li class="splide__slide">
          <div data-isi="{{ $chip->slug }}" class="px-3 py-[5px] filterChip sm:px-[15px] sm:py-2.5 flex items-center justify-center bg-sec-white cursor-pointer rounded-full text-main-black {{ Request::query('filter') == $chip->slug ? 'border border-main-green text-main-green' : 'text-main-black' }}">
            <span class="font-bold text-sm sm:text-base">{{ $chip->name }}</span>
          </div>
        </li>
        @endforeach
      </ul>
      <input type="hidden" hidden name="by" value="{{ Request::query('by') }}">
      <input type="text" hidden name="filter" id="filter" value="">
    </form>
  </section>
  {{-- <div class="w-full flex flex-start items-center gap-2">
    <div class="px-3 py-[5px] flex items-center justify-center bg-sec-white rounded-full">
      <span class="font-bold text-sm">All</span>
    </div>
    <div class="px-3 py-[5px] flex items-center justify-center bg-sec-white rounded-full border border-main-green">
      <span class="font-bold text-sm">Bumper Belakang</span>
    </div>
  </div> --}}
</div>
<div class="w-full px-5 sm:px-10 lg:px-[80px] flex items-center justify-center">
  <div class="w-full h-[1px] bg-main-green"></div>
</div>
{{-- End Chips --}}
{{-- Start List Product --}}
<div class="w-full grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 xl:gap-10 p-5 sm:p-10 lg:px-[80px] 2xl:px-40">
  @foreach ($products as $product)
  <a href="{{ route('produk.detail', ['product' => $product->slug]) }}" class="flex flex-col items-center rounded overflow-hidden border-[0.4px] border-third-white shadow-shadowCard transition duration-150 hover:bg-transparent-hover">
    <div class="w-full h-[150px] bg-center bg-cover bg-no-repeat lg:h-[200px]" style="background-image: url('{{ asset('storage/'.$product->image) }}')"></div>
      <div class="w-full p-2.5 sm:p-5 flex flex-col gap-1">
      <span class="uppercase text-xs sm:text-sm font-normal text-main-black truncateNew lg:text-base">{{ $product->name }}</span>
      <div class="w-full flex gap-1 items-center">
        <span class="text-[10px] sm:text-xs font-normal text-main-green lg:text-sm">{{ $product->type->name }}</span>
        <span class="text-[10px] sm:text-xs font-normal lg:text-sm">,</span>
        <span class="text-[10px] sm:text-xs font-normal text-main-green lg:text-sm">{{ $product->brand->name }}</span>
      </div>
    </div>
  </a>
  @endforeach
</div>
{{-- End List Product --}}
{{-- Start Pagination --}}
{{ $products->links("pagination.default") }}
{{-- End Pagination --}}
@endsection

@section('script')
<script>
  const filterChips = document.querySelectorAll('.filterChip');
  const filterInput = document.getElementById('filter');
  const filterForm = document.getElementById('filterForm');

  filterChips.forEach(filterChip => {
    filterChip.addEventListener('click', function (e) {
      filterInput.value = this.dataset.isi;
      submitFilterValue();
    });
  });

  const submitFilterValue = () => {
    filterForm.submit();
  };
</script>
@endsection