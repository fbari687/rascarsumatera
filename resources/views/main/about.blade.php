@extends('main.layouts.main')

@section('content')
<div class="w-full mt-[70px] sm:mt-[90px] pt-5 px-5 sm:px-10 lg:px-[80px] 2xl:px-40 flex flex-col">
  <div class="w-full flex flex-col p-5 gap-1 border border-main-green rounded-xl">
    <span class="text-main-green text-base sm:hidden">TENTANG KAMI</span>
    <span class="hidden text-main-green text-2xl sm:block">TENTANG KAMI</span>
    <span class="text-main-green text-sm sm:text-base lg:text-lg italic">Tentang RASCAR SUMATERA</span>
  </div>
</div>

<div class="w-full p-5 sm:p-10 2xl:px-40 flex flex-col gap-5">
  <img src="{{ asset('img/about.png') }}" alt="" class="w-full rounded-lg">
  <div class="w-full flex flex-col gap-5">
    <span class="w-full text-justify text-sm sm:text-base lg:text-lg"><span class="text-base text-main-green sm:text-xl lg:text-2xl">RASCAR SUMATERA</span> merupakan perusahaan manufaktur variasi mobil 4x4 yang memiliki komitmen untuk meningkatkan produksi aksesoris kendaraan 4x4 dengan kualitas terbaik dan menjadi mitra pelanggan terpercaya.</span>
    <span class="w-full text-justify text-sm sm:text-base lg:text-lg"><span class="text-base text-main-green sm:text-xl lg:text-2xl">PT. Perdana Makmur Abadi (Rascar 4x4)</span> didirikan di Jakarta berdasarkan Akta Notaris Resnizar, S.H No. 37 tanggal 23 Agustus 2017.Perusahaan telah memulai kegiatan komersial pada tahun 2003. Sesuai Pasal 3 Anggaran Dasar Perusahaan, kegiatan usaha perusahaan adalah perdagangan, perbengkelan, dan jasa untuk kendaraan 4x4. 
    <br>
    Saat ini perusahaan juga bertindak sebagai distributor dan supplier untuk aksesoris kendaraan 4x4. Selama lebih dari 15 tahun, Rascar 4x4 telah menjadi pioner dalam manufaktur aksesoris kendaraan 4x4 di Indonesia.Rascar 4x4 kini tumbuh agresif dengan melakukan inovasi produk dan terobosan terbaru dalam memproduksi aksesosis kendaraan 4x4.Rascar 4x4 berinvestasi pada teknologi terkini dalam memproduksi yang membuat Rascar 4x4 memperoleh hasil yang semakin terbaik untuk setiap produk yang telah diluncurkan.</span>
  </div>
</div>

<div class="w-full px-5 pt-5 pb-10 sm:px-10 sm:pt-10 sm:pb-20 2xl:px-40 flex flex-col items-center">
  <div class="w-full flex flex-col gap-5">
    <div class="w-full flex flex-col sm:flex-row gap-5 sm:gap-10">
      <div class="pb-3 sm:px-10 sm:pb-5 sm:pt-5 border-b border-b-main-green sm:border-b-0 sm:border-r sm:border-r-main-green text-sm font-bold uppercase flex items-center sm:justify-center sm:text-base lg:text-xl"><span class="sm:w-[35px] lg:w-[44px] sm:text-center">VISI</span></div>
      <div class="text-sm flex items-center sm:text-base lg:text-lg">
        <p>Menjadi perusahaan kelas dunia dalam industri produk dan jasa aksesoris kendaraan 4x4 dengan kualitas dan pelayanan terbaik.</p>
      </div>
    </div>
    <div class="w-full flex flex-col sm:flex-row gap-5 sm:gap-10">
      <div class="pb-3 sm:px-10 sm:pb-5 sm:pt-5 border-b border-b-main-green sm:border-b-0 sm:border-r sm:border-r-main-green text-sm font-bold uppercase flex items-center sm:justify-center sm:text-base lg:text-xl"><span class="sm:w-[35px] lg:w-[44px] sm:text-center">MISI</span></div>
      <div class="text-sm flex items-center sm:text-base lg:text-lg">
        <p>Menjadi mitra pelanggan yang dapat diandalkan dan amanah serta menjadi distributor dan supplier yang dapat dipercaya.</p>
      </div>
    </div>
  </div>
</div>
@endsection