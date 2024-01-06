<div class="w-full py-5 px-5 sm:px-10 lg:px-20 xl:px-20 2xl:px-40 flex item-center justify-start bg-main-white shadow-shadowBold z-40 fixed transition-all duration-150" id="navbar">
  <div class="w-full flex justify-between items-center">
    <a href="{{ route('home') }}" class="flex items-center gap-3 sm:gap-5">
      <img src="{{ asset('img/logo.png') }}" alt="" class="aspect-square w-[30px] h-[30px] sm:w-[50px] sm:h-[50px]">
      <h3 class="italic text-base sm:text-2xl font-bold uppercase text-main-black">RASCARSUMATERA.CO.ID</h3>
    </a>
    <div class="flex items-center flex-row justify-center gap-5">
      {{-- 640px > 1024px --}}
      <div class="xl:hidden cursor-pointer" id="searchBtn">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] sm:w-[32px] sm:h-[32px]" viewBox="0 0 40 40" fill="none">
          <g clip-path="url(#clip0_212_702)">
            <path d="M30.0513 27.695L37.1897 34.8317L34.8313 37.19L27.6947 30.0517C25.0392 32.1804 21.7363 33.3382 18.333 33.3333C10.053 33.3333 3.33301 26.6133 3.33301 18.3333C3.33301 10.0533 10.053 3.33334 18.333 3.33334C26.613 3.33334 33.333 10.0533 33.333 18.3333C33.3379 21.7367 32.18 25.0396 30.0513 27.695ZM26.708 26.4583C28.8232 24.2832 30.0045 21.3674 29.9997 18.3333C29.9997 11.8867 24.778 6.66668 18.333 6.66668C11.8863 6.66668 6.66634 11.8867 6.66634 18.3333C6.66634 24.7783 11.8863 30 18.333 30C21.3671 30.0048 24.2828 28.8235 26.458 26.7083L26.708 26.4583Z" fill="#1E1E1E"/>
          </g>
          <defs>
            <clipPath id="clip0_212_702">
              <rect width="40" height="40" fill="white"/>
            </clipPath>
          </defs>
        </svg>
      </div>
      <div class="hidden w-full h-screen bg-overlay absolute top-0 left-0 z-[41]" id="overlaySearchbar">
        <div class="w-full h-full flex justify-end relative">
          <div class="absolute bottom-0 right-0 w-full h-3/4 bg-main-white flex flex-col translate-y-[6000px] transition-all duration-200 rounded-t-xl p-5 gap-5" id="searchbar">
            <div class="w-full flex items-center justify-between">
              <span class="font-bold text-base">Cari Produk</span>
              <div class="cursor-pointer" id="searchbarCloseBtn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 28 28" fill="none">
                  <path d="M16.3502 13.9999L26.8502 3.51661C27.1641 3.20277 27.3404 2.77711 27.3404 2.33328C27.3404 1.88944 27.1641 1.46378 26.8502 1.14994C26.5364 0.836103 26.1107 0.65979 25.6669 0.65979C25.2231 0.65979 24.7974 0.836103 24.4836 1.14994L14.0002 11.6499L3.51689 1.14994C3.20305 0.836103 2.77739 0.65979 2.33356 0.65979C1.88972 0.65979 1.46406 0.836103 1.15022 1.14994C0.836384 1.46378 0.660071 1.88944 0.660071 2.33328C0.660071 2.77711 0.836384 3.20277 1.15022 3.51661L11.6502 13.9999L1.15022 24.4833C0.99401 24.6382 0.87002 24.8225 0.785405 25.0256C0.700791 25.2287 0.657227 25.4466 0.657227 25.6666C0.657227 25.8866 0.700791 26.1045 0.785405 26.3076C0.87002 26.5107 0.99401 26.695 1.15022 26.8499C1.30516 27.0062 1.4895 27.1301 1.6926 27.2148C1.89569 27.2994 2.11354 27.3429 2.33356 27.3429C2.55358 27.3429 2.77142 27.2994 2.97452 27.2148C3.17762 27.1301 3.36195 27.0062 3.51689 26.8499L14.0002 16.3499L24.4836 26.8499C24.6385 27.0062 24.8228 27.1301 25.0259 27.2148C25.229 27.2994 25.4469 27.3429 25.6669 27.3429C25.8869 27.3429 26.1048 27.2994 26.3079 27.2148C26.511 27.1301 26.6953 27.0062 26.8502 26.8499C27.0064 26.695 27.1304 26.5107 27.215 26.3076C27.2997 26.1045 27.3432 25.8866 27.3432 25.6666C27.3432 25.4466 27.2997 25.2287 27.215 25.0256C27.1304 24.8225 27.0064 24.6382 26.8502 24.4833L16.3502 13.9999Z" fill="#1E1E1E"/>
                </svg>
              </div>
            </div>
            <div class="w-full flex items-center gap-3">
              <div class="py-2.5 px-5 items-center bg-main-white text-xs border border-fourth-white rounded-xl flex-1">
                <input type="text" class="text-xs outline-none bg-transparent w-full" id="searchInput" placeholder="Ketik produk di sini...">
              </div>
              <div class="cursor-pointer flex items-center justify-center bg-main-green p-2.5 rounded-xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.33264 4.16688C7.22752 4.16688 6.16766 4.60588 5.38622 5.38732C4.60478 6.16876 4.16577 7.22862 4.16577 8.33375C4.16577 9.43887 4.60478 10.4987 5.38622 11.2802C6.16766 12.0616 7.22752 12.5006 8.33264 12.5006C9.43776 12.5006 10.4976 12.0616 11.2791 11.2802C12.0605 10.4987 12.4995 9.43887 12.4995 8.33375C12.4995 7.22862 12.0605 6.16876 11.2791 5.38732C10.4976 4.60588 9.43776 4.16688 8.33264 4.16688ZM2.49902 8.33375C2.49903 7.40975 2.71851 6.49897 3.13941 5.67641C3.56032 4.85385 4.17059 4.14303 4.91998 3.60249C5.66937 3.06196 6.53644 2.70716 7.44979 2.56733C8.36315 2.42749 9.29665 2.50662 10.1734 2.79818C11.0502 3.08975 11.8452 3.58542 12.4929 4.24438C13.1407 4.90333 13.6226 5.70672 13.899 6.58839C14.1755 7.47006 14.2386 8.40479 14.083 9.3156C13.9275 10.2264 13.5579 11.0873 13.0045 11.8272L17.2556 16.0775C17.412 16.2337 17.4998 16.4457 17.4999 16.6668C17.5 16.8878 17.4123 17.0999 17.256 17.2563C17.0997 17.4126 16.8877 17.5005 16.6667 17.5006C16.4456 17.5007 16.2336 17.4129 16.0772 17.2567L11.827 13.0065C10.9599 13.6551 9.92932 14.0496 8.85072 14.1458C7.77212 14.2419 6.68805 14.036 5.71985 13.551C4.75166 13.066 3.93758 12.3211 3.36873 11.3996C2.79989 10.4782 2.49875 9.41662 2.49902 8.33375Z" fill="white"/>
                </svg>
              </div>
            </div>
            <div class="w-full flex flex-col gap-3 overflow-y-scroll hideScrollbar" id="searchResultContainer">
            </div>
          </div>
        </div>
      </div>
      <div class="xl:hidden cursor-pointer" id="hamburgerBtn">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-[24px] h-[24px] sm:w-[32px] sm:h-[32px]" viewBox="0 0 40 40" fill="none">
          <path d="M30.6748 12.5H9.34147C8.14147 12.5 7.1748 11.5333 7.1748 10.3333C7.1748 9.13332 8.14147 8.16666 9.34147 8.16666H30.6748C31.8748 8.16666 32.8415 9.13332 32.8415 10.3333C32.8415 11.5333 31.8748 12.5 30.6748 12.5ZM32.8415 20C32.8415 18.8 31.8748 17.8333 30.6748 17.8333H9.34147C8.14147 17.8333 7.1748 18.8 7.1748 20C7.1748 21.2 8.14147 22.1667 9.34147 22.1667H30.6748C31.8748 22.1667 32.8415 21.2 32.8415 20ZM32.8415 29.6667C32.8415 28.4667 31.8748 27.5 30.6748 27.5H9.34147C8.14147 27.5 7.1748 28.4667 7.1748 29.6667C7.1748 30.8667 8.14147 31.8333 9.34147 31.8333H30.6748C31.8748 31.8333 32.8415 30.8667 32.8415 29.6667Z" fill="#1E1E1E"/>
        </svg>
      </div>
      {{-- Mobile Sidebar --}}
      <div class="hidden w-full h-screen bg-overlay absolute top-0 left-0 z-[41]" id="overlaySidebar">
        <div class="w-full h-full flex justify-end relative">
          <div class="absolute top-0 right-0 w-full sm:w-5/6 h-full p-5 sm:max-w-[300px] bg-main-white flex flex-col justify-between gap-5 translate-x-[6000px] transition-all duration-200" id="sidebar">
            <div class="w-full flex flex-col gap-3 overflow-y-scroll hideScrollbar">
              <div class="py-3 sm:h-[90px] flex items-center justify-between">
                <div class="flex items-center justify-center gap-3">
                  <img src="{{ asset("img/logo.png") }}" alt="" class="w-[30px] h-[30px]">
                  <span class="uppercase italic font-bold text-base">RASCARSUMATERA.CO.ID</span>
                </div>
                <div class="cursor-pointer" id="sidebarCloseBtn">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 28 28" fill="none">
                    <path d="M16.3502 13.9999L26.8502 3.51661C27.1641 3.20277 27.3404 2.77711 27.3404 2.33328C27.3404 1.88944 27.1641 1.46378 26.8502 1.14994C26.5364 0.836103 26.1107 0.65979 25.6669 0.65979C25.2231 0.65979 24.7974 0.836103 24.4836 1.14994L14.0002 11.6499L3.51689 1.14994C3.20305 0.836103 2.77739 0.65979 2.33356 0.65979C1.88972 0.65979 1.46406 0.836103 1.15022 1.14994C0.836384 1.46378 0.660071 1.88944 0.660071 2.33328C0.660071 2.77711 0.836384 3.20277 1.15022 3.51661L11.6502 13.9999L1.15022 24.4833C0.99401 24.6382 0.87002 24.8225 0.785405 25.0256C0.700791 25.2287 0.657227 25.4466 0.657227 25.6666C0.657227 25.8866 0.700791 26.1045 0.785405 26.3076C0.87002 26.5107 0.99401 26.695 1.15022 26.8499C1.30516 27.0062 1.4895 27.1301 1.6926 27.2148C1.89569 27.2994 2.11354 27.3429 2.33356 27.3429C2.55358 27.3429 2.77142 27.2994 2.97452 27.2148C3.17762 27.1301 3.36195 27.0062 3.51689 26.8499L14.0002 16.3499L24.4836 26.8499C24.6385 27.0062 24.8228 27.1301 25.0259 27.2148C25.229 27.2994 25.4469 27.3429 25.6669 27.3429C25.8869 27.3429 26.1048 27.2994 26.3079 27.2148C26.511 27.1301 26.6953 27.0062 26.8502 26.8499C27.0064 26.695 27.1304 26.5107 27.215 26.3076C27.2997 26.1045 27.3432 25.8866 27.3432 25.6666C27.3432 25.4466 27.2997 25.2287 27.215 25.0256C27.1304 24.8225 27.0064 24.6382 26.8502 24.4833L16.3502 13.9999Z" fill="#1E1E1E"/>
                  </svg>
                </div>
              </div>
              <div class="w-full flex flex-col gap-3">
                <a href="{{ route('home') }}" class="p-5 flex items-center justify-center border border-fourth-white">
                  <div class="w-full flex items-center justify-start">
                    <span class="w-full text-start font-bold text-base">Beranda</span>
                  </div>
                </a>
                <div class="p-5 flex flex-col gap-5 items-center justify-center border border-fourth-white cursor-pointer" id="sideProduct">
                  <div class="w-full"">
                    <div class="w-full flex items-center justify-between">
                      <span class="w-full text-start font-bold text-base">Produk</span>
                      <div class="" id="arrowDown">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M12.0002 13.172L16.9502 8.222L18.3642 9.636L12.0002 16L5.63623 9.636L7.05023 8.222L12.0002 13.172Z" fill="#1E1E1E"/>
                        </svg>
                      </div>
                      <div class="hidden" id="arrowUp">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M12.0002 10.828L16.9502 15.778L18.3642 14.364L12.0002 8.00002L5.63623 14.364L7.05023 15.778L12.0002 10.828Z" fill="#1E1E1E"/>
                        </svg>
                      </div>
                    </div>
                  </div>
                  <div class="hidden w-full">
                    <a href="/product?by=merk" class="w-full py-5 px-10 flex items-center justify-center bg-sec-white">
                      <div class="w-full flex items-center justify-start">
                        <span class="w-full text-start font-bold text-base">Merk</span>
                      </div>
                    </a>
                    <a href="/product?by=jenis" class="w-full py-5 px-10 flex items-center justify-center bg-sec-white">
                      <div class="w-full flex items-center justify-start">
                        <span class="w-full text-start font-bold text-base">Jenis</span>
                      </div>
                    </a>
                  </div>
                </div>
                <a href="{{ route('faq') }}" class="p-5 flex items-center justify-center border border-fourth-white">
                  <div class="w-full flex items-center justify-start">
                    <span class="w-full text-start font-bold text-base">FAQ</span>
                  </div>
                </a>
                <a href="{{ route('tentang') }}" class="p-5 flex items-center justify-center border border-fourth-white">
                  <div class="w-full flex items-center justify-start">
                    <span class="w-full text-start font-bold text-base">Tentang</span>
                  </div>
                </a>
                <a href="{{ route('kontak') }}" class="p-5 flex items-center justify-center border border-fourth-white">
                  <div class="w-full flex items-center justify-start">
                    <span class="w-full text-start font-bold text-base">Kontak</span>
                  </div>
                </a>
                <a href="{{ route('artikel') }}" class="p-5 flex items-center justify-center border border-fourth-white">
                  <div class="w-full flex items-center justify-start">
                    <span class="w-full text-start font-bold text-base">Artikel</span>
                  </div>
                </a>
              </div>
            </div>
            <a href="{{ $whatsapp->link }}?text=Halo, saya pengunjung website https://rascarsumatera.co.id ingin info lebih lanjut terkait produk rascar sumatera" target="_blank" class="w-full p-5 bg-main-green rounded-xl flex items-center justify-center transition duration-150 hover:bg-green-700">
              <div class="w-full flex items-center justify-center gap-1">
                <span class="text-main-white text-sm font-bold">HUBUNGI KAMI</span>
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
              </div>
            </a>
          </div>
        </div>
      </div>
      {{-- End Mobile Sidebar --}}
      {{-- Laptop Navbar --}}
      <div class="hidden xl:flex items-center gap-5 text-lg font-bold">
        <a href="{{ route('home') }}" class="flex items-center transition duration-150 hover:text-main-green {{ Request::is('/') ? 'text-main-green' : '' }}">
          <span>Beranda</span>
        </a>
        <div class="flex items-center justify-center transition duration-150 cursor-pointer relative group">
          <span class="transition duration-150 group-hover:text-main-green {{ Request::is('product*') ? 'text-main-green' : '' }}">Produk</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-main-black transition duration-150 group-hover:fill-main-green {{ Request::is('product*') ? 'fill-main-green' : '' }}">
            <path d="M12.0002 13.172L16.9502 8.222L18.3642 9.636L12.0002 16L5.63623 9.636L7.05023 8.222L12.0002 13.172Z"/>
          </svg>
          <div class="hidden absolute bg-sec-white rounded top-[25px] left-0 text-base w-[210px] transition-all duration-150 delay-150 group-hover:block hover:block">
            <div class="w-full flex flex-col p-5 gap-5">
              <a href="/product?by=jenis" class="transition duration-150 hover:text-main-green">Berdasarkan Jenis</a>
              <a href="/product?by=merk" class="transition duration-150 hover:text-main-green">Berdasarkan Merk</a>
            </div>
          </div>
        </div>
        <a href="{{ route('faq') }}" class="flex items-center transition duration-150 hover:text-main-green {{ Request::is('faq*') ? 'text-main-green' : '' }}">
          <span>FAQ</span>
        </a>
        <a href="{{ route('tentang') }}" class="flex items-center transition duration-150 hover:text-main-green {{ Request::is('about*') ? 'text-main-green' : '' }}">
          <span>Tentang</span>
        </a>
        <a href="{{ route('kontak') }}" class="flex items-center transition duration-150 hover:text-main-green {{ Request::is('contact*') ? 'text-main-green' : '' }}">
          <span>Kontak</span>
        </a>
        <a href="{{ route('artikel') }}" class="flex items-center transition duration-150 hover:text-main-green {{ Request::is('article*') ? 'text-main-green' : '' }}">
          <span>Artikel</span>
        </a>
      </div>
      {{-- End Laptop Navbar --}}
    </div>
    <div class="hidden xl:flex items-center justify-center gap-5">
      <div class="hidden xl:flex items-center lg:cursor-pointer" id="searchBtnLaptop">
        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 40 40" fill="none">
          <g clip-path="url(#clip0_212_702)">
            <path d="M30.0513 27.695L37.1897 34.8317L34.8313 37.19L27.6947 30.0517C25.0392 32.1804 21.7363 33.3382 18.333 33.3333C10.053 33.3333 3.33301 26.6133 3.33301 18.3333C3.33301 10.0533 10.053 3.33334 18.333 3.33334C26.613 3.33334 33.333 10.0533 33.333 18.3333C33.3379 21.7367 32.18 25.0396 30.0513 27.695ZM26.708 26.4583C28.8232 24.2832 30.0045 21.3674 29.9997 18.3333C29.9997 11.8867 24.778 6.66668 18.333 6.66668C11.8863 6.66668 6.66634 11.8867 6.66634 18.3333C6.66634 24.7783 11.8863 30 18.333 30C21.3671 30.0048 24.2828 28.8235 26.458 26.7083L26.708 26.4583Z" fill="#1E1E1E"/>
          </g>
          <defs>
            <clipPath id="clip0_212_702">
              <rect width="40" height="40" fill="white"/>
            </clipPath>
          </defs>
        </svg>
      </div>
      <a href="{{ $whatsapp->link }}?text=Halo, saya pengunjung website https://rascarsumatera.co.id ingin info lebih lanjut terkait produk rascar sumatera" target="_blank" class="px-5 py-2.5 flex items-center gap-2 justify-center bg-main-green rounded-xl transition duration-150 hover:bg-green-700">
        <span class="font-bold text-main-white text-base">HUBUNGI KAMI</span>
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
</div>