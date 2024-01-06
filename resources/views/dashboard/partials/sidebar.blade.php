<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="/admin/dashboard">
      <img src="{{ asset('img/logo.png') }}" class="navbar-brand-img h-100 rounded-circle" alt="main_logo">
      <span class="ms-1 font-weight-bold text-white">RASCARSUMATERA</span>
    </a>
  </div>
  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white {{ Request::is('admin/dashboard/product*') ? 'bg-gradient-success' : ''}}" href="/admin/dashboard/product">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-car"></i>
          </div>
          <span class="nav-link-text ms-1">Produk</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white {{ Request::is('admin/dashboard/brand*') ? 'bg-gradient-success' : ''}}" href="/admin/dashboard/brand">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-medal"></i>
          </div>
          <span class="nav-link-text ms-1">Merk</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white {{ Request::is('admin/dashboard/type*') ? 'bg-gradient-success' : ''}}" href="/admin/dashboard/type">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-gear"></i>
          </div>
          <span class="nav-link-text ms-1">Jenis</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white {{ Request::is('admin/dashboard/faq*') ? 'bg-gradient-success' : ''}}" href="/admin/dashboard/faq">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-regular fa-circle-question"></i>
          </div>
          <span class="nav-link-text ms-1">FAQ</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white {{ Request::is('admin/dashboard/contact*') ? 'bg-gradient-success' : ''}}" href="/admin/dashboard/contact">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-address-book"></i>
          </div>
          <span class="nav-link-text ms-1">Kontak</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white {{ Request::is('admin/dashboard/article*') ? 'bg-gradient-success' : ''}}" href="/admin/dashboard/article">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-newspaper"></i>
          </div>
          <span class="nav-link-text ms-1">Artikel</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white {{ Request::is('admin/dashboard/gallery*') ? 'bg-gradient-success' : ''}}" href="/admin/dashboard/gallery">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-images"></i>
          </div>
          <span class="nav-link-text ms-1">Galeri</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white {{ Request::is('admin/dashboard/video*') ? 'bg-gradient-success' : ''}}" href="/admin/dashboard/video">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-film"></i>
          </div>
          <span class="nav-link-text ms-1">Video</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white {{ Request::is('admin/dashboard/banner*') ? 'bg-gradient-success' : ''}}" href="/admin/dashboard/banner">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-image"></i>
          </div>
          <span class="nav-link-text ms-1">Banner</span>
        </a>
      </li>
    </ul>
  </div>
  <div class="sidenav-footer position-absolute w-100 bottom-0 ">
    <div class="mx-3">
      <a class="btn btn-danger mt-4 w-100 font-weight-bold" href="/logout"><i class="fa-solid fa-right-from-bracket" type="button"></i>  Log out</a>
    </div>
  </div>
</aside>