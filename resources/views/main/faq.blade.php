@extends('main.layouts.main')

@section('content')
  <div class="w-full mt-[70px] sm:mt-[90px] pt-5 px-5 sm:px-10 lg:px-[80px] 2xl:px-40 flex flex-col">
    <div class="w-full flex flex-col p-5 gap-1 border border-main-green rounded-xl">
      <span class="text-main-green text-base sm:hidden">FAQ</span>
      <span class="hidden text-main-green text-2xl sm:block">Frequently Asked Questions</span>
      <span class="text-main-green text-base lg:text-lg italic">Pertanyaan yang Sering Ditanyakan</span>
    </div>
  </div>
  <div class="w-full px-5 pt-5 pb-10 sm:px-10 lg:px-[80px] 2xl:px-40 flex flex-col">
    <div class="w-full flex flex-col gap-5">
      <div class="hs-accordion-group">
        @foreach ($faqs as $faq)
        <div class="hs-accordion hs-accordion-active:border-gray-200 bg-white border border-transparent rounded-xl overflow-hidden" id="hs-active-bordered-heading-{{ $loop->iteration }}">
          <button class="hs-accordion-toggle hs-accordion-active:text-main-green inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-main-black py-4 px-5 text-sm sm:text-base lg:text-lg border-b border-b-main-green hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none" aria-controls="hs-basic-active-bordered-collapse-{{ $loop->iteration }}">
            {{ $faq->question }}
            <svg class="hs-accordion-active:hidden block w-3.5 h-3.5 text-main-green" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
            <svg class="hs-accordion-active:block hidden w-3.5 h-3.5 text-main-green" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
          </button>
          <div id="hs-basic-active-bordered-collapse-{{ $loop->iteration }}" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300 bg-main-green" aria-labelledby="hs-active-bordered-heading-{{ $loop->iteration }}">
            <div class="p-5 text-sm font-semibold sm:text-base lg:text-lg sm:font-bold">
              <p class="text-white">
                {{ $faq->answer }}
              </p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection