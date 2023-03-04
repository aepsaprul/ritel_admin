<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <p>home</p>
  <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="hover:font-bold">LOGOUT <i class="fa fa-sign-out text-xl text-slate-500"></i></a>
  <form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf
  </form>
</body>
</html>