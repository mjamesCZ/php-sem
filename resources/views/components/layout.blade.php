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

  <title>Skybox | Get front row tickets to your favourite events</title>
</head>

<body>
  <header>

  </header>

  <main>
    {{$slot}}
  </main>

  <footer>

  </footer>

</body>

</html>