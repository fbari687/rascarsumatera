<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @yield('seo')
  <title>{{ $title ?? 'RASCARSUMATERA' }}</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('img/logo.png') }}">
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">
</head>
<body class="font-openSans">
  {{-- start container --}}
  <div class="w-full max-w-[100vw] flex flex-col relative overflow-hidden">
    {{-- Start Navbar --}}
    @include('main.partials.navbar')
    {{-- End Navbar --}}
    {{-- Start Content --}}
    @yield('content')
  </div>
  {{-- end container --}}
  {{-- <script src="https://kit.fontawesome.com/e1744d5724.js" crossorigin="anonymous"></script> --}}
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="{{ asset('js/lightbox-plus-jquery.js') }}"></script>
  <script>
    // searchbarOpen
    const searchbarBtn = document.getElementById('searchBtn');
    const overlaySearchbar = document.getElementById('overlaySearchbar');
    const searchbarCloseBtn = document.getElementById('searchbarCloseBtn');
    const searchbar = document.getElementById('searchbar');

    searchbarBtn.addEventListener('click', function (e) {
      overlaySearchbar.classList.remove('hidden')
      setTimeout(() => {
        searchbar.classList.remove('translate-y-[6000px]')
      }, 100);
    })

    searchbarCloseBtn.addEventListener('click', function (e) {
      searchbar.classList.add('translate-y-[6000px]');
      setTimeout(() => {
        overlaySearchbar.classList.add('hidden')
      }, 100);
    })

    // searchbarLaptopOpen
    const searchbarBtnLaptop = document.getElementById('searchBtnLaptop');

    searchbarBtnLaptop.addEventListener('click', function (e) {
      overlaySearchbar.classList.remove('hidden')
      setTimeout(() => {
        searchbar.classList.remove('translate-y-[6000px]')
      }, 100);
    })

    searchbarCloseBtn.addEventListener('click', function (e) {
      searchbar.classList.add('translate-y-[6000px]');
      setTimeout(() => {
        overlaySearchbar.classList.add('hidden')
      }, 100);
    })

    // sidebarOpen
    const hamburgerBtn = document.getElementById('hamburgerBtn');
    const overlaySidebar = document.getElementById('overlaySidebar');
    const sidebarCloseBtn = document.getElementById('sidebarCloseBtn');
    const sidebar = document.getElementById('sidebar')
    hamburgerBtn.addEventListener('click', function (event) {
      
      overlaySidebar.classList.remove('hidden')
      setTimeout(() => {
        sidebar.classList.remove('translate-x-[6000px]')
      }, 100);
    })

    sidebarCloseBtn.addEventListener('click', function (e) {
      sidebar.classList.add('translate-x-[6000px]');
      setTimeout(() => {
        overlaySidebar.classList.add('hidden')
      }, 100);
    })
    // sidebarProduct
    let situasi = true;
    const arrowDown = document.getElementById('arrowDown');
    const arrowUp = document.getElementById('arrowUp');
    const sideProduct = document.getElementById('sideProduct');
    sideProduct.addEventListener('click', function () {
      
      const merk = this.lastElementChild;

      if(situasi) {
        merk.classList.remove('hidden');
        arrowDown.classList.add('hidden');
        arrowUp.classList.remove('hidden');
        situasi = !situasi
      } else {
        merk.classList.add('hidden');
        arrowDown.classList.remove('hidden');
        arrowUp.classList.add('hidden');
        situasi = !situasi
      }
    })
    const searchInput = document.getElementById('searchInput');
    const searchResultContainer = document.getElementById('searchResultContainer');
    searchInput.addEventListener('input', function() {
      let keywordSearch = this.value;
      let url = `/search?keyword=${keywordSearch}`;

      fetch(url).then((response) => response.json()).then((response) => {
        const searchProducts = response.data;
        let searchProductsResults = '';
        searchProducts.forEach((product) => {
          searchProductsResults += `<a href="/product/${product.slug}" class="w-full flex gap-3 transition pb-1 border-b border-b-main-green duration-150 hover:bg-transparent-hover">
                <div class="w-[80px] sm:w-[120px] aspect-square bg-no-repeat bg-center bg-cover rounded-xl" style="background-image: url('${
                        window.location.origin + "/storage/" + product.images
                    }')"></div>
                <div class="w-auto flex flex-col gap-1 justify-center">
                  <h4 class="text-sm lg:text-base font-bold">${product.name}</h4>
                  <div class="flex gap-1 items-center">
                    <span class="text-[10px] sm:text-xs font-normal text-main-green lg:text-sm">${
                            product.type.name
                        }</span>
                    <span class="text-[10px] sm:text-xs font-normal lg:text-sm">,</span>
                    <span class="text-[10px] sm:text-xs font-normal text-main-green lg:text-sm">${
                            product.brand.name
                        }</span>
                  </div>
                </div>
              </a>`;
        })
        searchResultContainer.innerHTML = searchProductsResults;
      })
    })
  </script>
  @yield('script')
</body>
</html>