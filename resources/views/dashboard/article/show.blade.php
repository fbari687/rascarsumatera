<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>RASCARSUMATERA</title>
  <meta name="robots" content="noindex">
  <meta name="googlebot" content="noindex">
  <link rel="shortcut icon" type="image/png" href="{{ asset('img/logo.png') }}">
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
</head>
<body class="font-openSans">
  <div class="w-full max-w-[100vw] flex flex-col relative overflow-hidden">
    {{-- Start Navbar --}}
    <div class="w-full py-5 px-5 sm:px-10 lg:px-20 xl:px-20 2xl:px-40 flex item-center justify-start bg-main-white shadow-shadowBold z-40 fixed transition-all duration-150" id="navbar">
      <div class="w-full flex justify-between items-center">
        <span>Preview</span>
        <div class="flex items-center flex-row justify-center gap-5">
          {{-- Laptop Navbar --}}
          <div class="flex items-center gap-5 text-lg font-bold">
            <a href="/admin/dashboard/article/{{ $article->slug }}/edit" class="py-2 px-4 bg-blue-500 text-white flex items-center justify-center"><i class="fa-solid fa-pen-to-square"></i></a>
            <form action="/admin/dashboard/article/{{ $article->slug }}" method="POST">
              @csrf
              @method('delete')
              <button type="submit" class="py-1 px-4 bg-red-500 text-white" onclick="return confirm('Yakin ingin dihapus?')"><i class="fa-solid fa-trash"></i></button>
            </form>
          </div>
          {{-- End Laptop Navbar --}}
        </div>
      </div>
    </div>
    {{-- End Navbar --}}
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
  </div>
  <script src="https://kit.fontawesome.com/e1744d5724.js" crossorigin="anonymous"></script>
</body>
</html>