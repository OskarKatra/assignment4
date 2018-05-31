<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/css/stilen.css" type="text/css" rel="stylesheet">


        <title>Biograf</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
      <header>
       <h1>Cinematicon</h1>
      </header>
        <nav>
         <ul>
          <li><a href="index.html">Hem</a></li>
          <li><a href="">Biosal</a></li>
          <li><a href="">FIlm</a></li>
          <li><a href="">Biljett</a></li>

         </ul>
         </nav>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

              <div class="content">
               <h2>Syftet med denna webbplats</h2>
                <p>Med hjälp av denna webbplats kan ni välja biosal,boka biljett och slutligen titta på en spännande film!</p>
                <h3>Biosal</h3>
                <button class="button createbutton">Skapa</button>
                <button class="button editbutton">Redigera</button>
                <button class="button deletebutton">Radera</button>

  </div>
    <footer>
      <p>
       &copy; Robin Håkansson, Oskar Katra & Christina Tsigara
      </p>
      </footer>
      </body>
  </html>
