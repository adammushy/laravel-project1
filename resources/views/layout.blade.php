<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/yourcode.js"> </script>

  @vite('resources/css/app.css')
</head>
<body class="bg-gray-200 p-2">
 <nav class="flex bg-violet-100 justify-between p-4 " ><ul class="flex gap-x-2 ">
        <li class="p-2 hover:bg-sky-700">
            Home
        </li>

        <li class="p-2 hover:bg-sky-700"><a href="http:\\127.0.0.1:8000\post">
            Post
            </a>            
        </li>
        <li class="p-2 hover:bg-sky-700"><a href="http:\\127.0.0.1:8000\posts">
            Posts
            </a>            
        </li>

        <li class="p-2 hover:bg-sky-700">
            about
        </li>
    
    </ul>

    <ul class="flex gap-x-2">
    @auth
    <li class="p-2">{{auth()->user()->name}}</li>
    <li class="p-2">log out</li>
    @endauth

    @guest
    <li class="p-2 dark:md:hover:bg-fuchsia-600 "><a href="http:\\127.0.0.1:8000\login">Login</a></li>
    <li class="p-2 dark:md:hover:bg-fuchsia-600 "><a href="http:\\127.0.0.1:8000\register">Register</a></li>
    @endguest
    </ul>
 </nav>

@yield('content')<!--it initiate the export capability of this layout so that  it can be used from as pages in the views  xxx.blade.php-->


</body>
</html>