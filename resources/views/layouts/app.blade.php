<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>
    
    <!-- Tailwind CSS Link -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fontawesome Link -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
 
  </head>
  <body class="bg-gray-100">
      <nav class="flex py-5 bg-red-500 text-white">
         <div class="w-1/2 px-12 mr-auto">
             <p class="text-2xl font-bold">  </p>
         </div>  

         <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1"> 

         @if(auth()->check())
            <li>
                <p class="text-xl px-6">Bienvenido <b> {{auth()->user()->name}} </b> </p>
            </li>
            <li>
                <a href="{{ route('login.destroy') }}"  class="semibold 
                bg-red-900 py-3 px-4 rounded-md">Salir</a>
            </li>

            </li>

            @else
            <li>
                <a href="{{ route('login') }}" class="font-semibold 
                hover:bg-red-700 py-3 px-4 rounded-md">Login</a>
                <a href="register"  class="font-semibold 
                hover:bg-red-700 py-3 px-4 rounded-md">Registro</a>
            </li>

            @endif

         </ul>
     </nav>
        



      @yield('content')

  </body>
</html>