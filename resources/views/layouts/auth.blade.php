<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>@yield('pageName')</title>
</head>
<body class="bg-slate-900">
    <div class="my-10 mx-5 flex justify-center items-center flex-col ">
        @yield('content')
    </div>
</body>
</html>