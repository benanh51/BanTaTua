<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>

    <title>Document</title>
</head>
<body>
  <div class="overflow-x-hidden flex-col">
    <div class="">
      @include('partial.header')
    </div>
    <div id="body" class= "flex flex-col">
      <div>
        @include('partial.leftmenu')
      </div>
      <div class="bg-green-300 h-20 w-full">Băng rôn của web trà sữa nha</div>
      <div>
        @yield('noidung')
      </div>
    </div>
    <div>
      @include('partial.footer')
    </div>    
  </div>
</body>
</html>