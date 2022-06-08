<!DOCTYPE html>
<html lang="en">

<head>
  {{-- Meta --}}
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="images/favicon.ico" />

  {{-- Fonts --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300;500&display=swap" rel="stylesheet">

  {{-- Styles --}}
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

  <title>Skybox | Front row tickets to your favourite events</title>
</head>

<body class="flex text-slate-800">
  <aside class="h-screen sticky top-0 pt-14 xl:pt-20 pl-20 pr-28 bg-gradient-to-b from-gray-100 to-white">
    <h1>
      <a class="p-1" href="/">
        <img class="inline" src="{{asset('images/logo.svg')}}" alt="Skybox" />
      </a>
    </h1>

    <ul class="text-xl my-10 leading-loose">
      <x-navigation-link url="/" route-name="home">
        Home
      </x-navigation-link>

      <x-navigation-link url="/events" route-name="events">
        Events
      </x-navigation-link>

      <x-navigation-link url="/venues" route-name="venues">
        Venues
      </x-navigation-link>

      <x-navigation-link url="/artists" route-name="artists">
        Artists
      </x-navigation-link>
    </ul>

    <ul class="text-slate-600 my-10 leading-relaxed">
      <x-navigation-link url="/about" route-name="about">
        About
      </x-navigation-link>

      <li class="p-1 mb-2">
        <a class="hover:text-dodger-blue transition-colors block" href="https://nofluffjobs.com/cz/laravel"
          target="_blank" rel="noreferrer">Careers</a>
      </li>
    </ul>

    <p class="text-sm absolute bottom-12 text-slate-400 font-light">&copy; {{ now()->year }} Skybox Ltd.</p>
  </aside>

  <div class="flex-1">
    <header class="sticky top-0 bg-gradient-to-l from-gray-100 to-white text-right">
      @auth
      AUTH
      @else
      <div class="py-3">
        <a class="px-6 py-2 mr-2 text-slate-600 hover:text-dodger-blue transition-colors" href="/login">Log in</a>
      </div>
      @endauth
    </header>

    <main>
      {{$slot}}
    </main>
  </div>

  <footer>

  </footer>

</body>

</html>