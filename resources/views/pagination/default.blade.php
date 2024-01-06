  <div class="w-full px-5 pb-5">
  <div class="w-full p-5 flex items-center justify-center gap-2">
    @if ($paginator->onFirstPage())
    <a href="javascript:void(0)" class="aspect-square w-[40px] bg-fourth-white flex items-center justify-center rounded-full">
      <div class="">
        <svg xmlns="http://www.w3.org/2000/svg" class="aspect-square w-[20px] sm:w-[24px]" viewBox="0 0 20 20" fill="none">
          <g clip-path="url(#clip0_651_816)">
            <path d="M6.66663 10L11.6666 15V5L6.66663 10Z" fill="white"/>
          </g>
          <defs>
            <clipPath id="clip0_651_816">
              <rect width="20" height="20" fill="white" transform="matrix(-1 0 0 1 20 0)"/>
            </clipPath>
          </defs>
        </svg>
      </div>
    </a>
    @else
    <a href="{{ $paginator->previousPageUrl() }}" class="aspect-square w-[40px] bg-main-green flex items-center justify-center rounded-full">
      <div class="">
        <svg xmlns="http://www.w3.org/2000/svg" class="aspect-square w-[20px] sm:w-[24px]" viewBox="0 0 20 20" fill="none">
          <g clip-path="url(#clip0_651_816)">
            <path d="M6.66663 10L11.6666 15V5L6.66663 10Z" fill="white"/>
          </g>
          <defs>
            <clipPath id="clip0_651_816">
              <rect width="20" height="20" fill="white" transform="matrix(-1 0 0 1 20 0)"/>
            </clipPath>
          </defs>
        </svg>
      </div>
    </a>

    @endif
    <div class="flex justify-center border border-main-green rounded-full text-sm sm:text-base font-bold">
      <div class="w-[40px] h-[40px] flex items-center justify-center text-main-green">
        <span>{{ $paginator->currentPage() }}</span>
      </div>
      <div class="h-[40px] flex items-center justify-center">
        <span>Dari</span>
      </div>
      <div class="w-[40px] h-[40px] flex items-center justify-center">
        <span>{{ $paginator->lastPage() }}</span>
      </div>
    </div>
    @if ($paginator->hasMorePages()) 
    <a href="{{ $paginator->nextPageUrl() }}" class="w-[40px] h-[40px] rotate-180 bg-main-green flex items-center justify-center rounded-full">
      <div class="">
        <svg xmlns="http://www.w3.org/2000/svg" class="aspect-square w-[20px] sm:w-[24px]" viewBox="0 0 20 20" fill="none">
          <g clip-path="url(#clip0_651_816)">
            <path d="M6.66663 10L11.6666 15V5L6.66663 10Z" fill="white"/>
          </g>
          <defs>
            <clipPath id="clip0_651_816">
              <rect width="20" height="20" fill="white" transform="matrix(-1 0 0 1 20 0)"/>
            </clipPath>
          </defs>
        </svg>
      </div>
    </a>
    @else
    <a href="javascript:void(0)" class="w-[40px] h-[40px] rotate-180 bg-fourth-white flex items-center justify-center rounded-full">
      <div class="">
        <svg xmlns="http://www.w3.org/2000/svg" class="aspect-square w-[20px] sm:w-[24px]" viewBox="0 0 20 20" fill="none">
          <g clip-path="url(#clip0_651_816)">
            <path d="M6.66663 10L11.6666 15V5L6.66663 10Z" fill="white"/>
          </g>
          <defs>
            <clipPath id="clip0_651_816">
              <rect width="20" height="20" fill="white" transform="matrix(-1 0 0 1 20 0)"/>
            </clipPath>
          </defs>
        </svg>
      </div>
    </a>

    @endif
  </div>
</div>
