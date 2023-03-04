<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Aplikasi</title>
  <link rel="shortcut icon" href="{{ asset('assets/sakola.png') }}" type="image/x-icon">
  @vite('resources/css/app.css')
</head>
<body>  
  <div class="min-h-screen">
    <div>
      <div class="fixed w-full top-0">
        <div class="flex justify-center items-center h-14">
          <div class="w-4/5 flex justify-between">
            <div class="flex items-center">
              <img src="{{ asset('assets/sakola.png') }}" alt="logo" class="w-12 mr-3">
              <div class="font-semibold text-xl">Logo</div>
            </div>
            <div class="flex items-center">
              <div class="mx-2 uppercase font-semibold text-slate-800"><a href="{{ route('login') }}">login</a></div>
              <div class="border-l-2 h-4 border-slate-400"></div>
              <div class="mx-2 uppercase font-semibold text-slate-800"><a href="{{ route('register') }}">register</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="flex justify-center">
        @yield('content')
      </div>
      <div>
        <img src="{{ asset('assets/wave.svg') }}" alt="wave image" class="fixed bottom-0">
      </div>
    </div>
  </div>    
</body>
</html>