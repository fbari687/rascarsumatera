<div class="w-full flex flex-col p-5 sm:p-10 lg:px-20 2xl:px-40 items-center gap-5 sm:gap-10 bg-main-black">
  <div class="w-full flex items-center justify-center gap-3">
    <img src="{{ asset("img/logo.png") }}" alt="" class="w-[70px] h-[70px]">
    <h3 class="italic text-base sm:text-2xl font-bold uppercase text-white">RASCARSUMATERA.CO.ID</h3>
  </div>
  <div class="w-full flex flex-col sm:p-0 gap-5 sm:gap-10 sm:flex-row">
    <div class="w-full flex p-5 sm:p-0 gap-5 justify-between">
      <div class="w-1/2 flex flex-col gap-5 text-main-white">
        <span class="font-bold text-sm sm:text-base 2xl:text-[24px]">Navigasi</span>
        <div class="w-full flex flex-col gap-3">
          <a href="/" class="text-sm sm:text-base 2xl:text-lg">Beranda</a>
          <a href="/product?by=merk" class="text-sm sm:text-base 2xl:text-lg">Produk</a>
          <a href="/faq" class="text-sm sm:text-base 2xl:text-lg">FAQ</a>
          <a href="/about" class="text-sm sm:text-base 2xl:text-lg">Tentang</a>
          <a href="/contact" class="text-sm sm:text-base 2xl:text-lg">Kontak</a>
          <a href="/article" class="text-sm sm:text-base 2xl:text-lg">Artikel</a>
        </div>
      </div>
      <div class="w-1/2 flex flex-col gap-5 items-end sm:items-start text-end sm:text-start text-white">
        <span class="font-bold text-sm sm:text-base 2xl:text-[24px]">Kategori</span>
        <div class="w-full flex flex-col gap-3">
          @foreach ($types as $type)
          <a href="" class="text-sm sm:text-base 2xl:text-lg">{{ $type->name }}</a>
          @endforeach
        </div>
      </div>
    </div>
    <div class="w-full p-5 sm:p-0 flex flex-col gap-3">
      <span class="font-bold text-sm text-main-white sm:text-base lg:text-lg 2xl:text-[24px]">Alamat</span>
      <span class="text-justify text-sm font-base text-main-white sm:text-base 2xl:text-lg">
        Jl. Nusantara / Jl. Raya Lintas Timur Km 32 No. 41 RT. 02 Kel, Indralaya Kec, Indralaya Utara Kab, Ogan Ilir
      </span>
      <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3983.558894447086!2d104.65201637497147!3d-3.2098527967653308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zM8KwMTInMzUuNSJTIDEwNMKwMzknMTYuNSJF!5e0!3m2!1sen!2sid!4v1704445032636!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full h-[180px] lg:h-full rounded-lg xl:w-full xl:h-full"></iframe>
    </div>
  </div>
  <div class="w-full px-5 gap-1 flex flex-col items-center text-sm sm:text-base">
    <span class="font-normal text-center text-main-white">© 2003 - 2023 RASCARSUMATERA.</span>
    <span class="font-normal text-center text-main-white">All rights reserved. </span>
  </div>
</div>