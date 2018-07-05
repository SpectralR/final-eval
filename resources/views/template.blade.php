<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('./css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Amiri:400,400i,700,700i" rel="stylesheet">
    <title>Drums'N'Sticks</title>
  </head>
  <body>
    <header>
      <h1>Drums'N'Sticks</h1>
      <img src="{{ asset('/css/images/logo.png') }}" alt="logo">
      @auth
        <p>{{ Auth::user()->name }}</p>
      @endauth
      <nav>
        <ul>
          <li><a href="/home">Home</a></li>
          <li><a href="/products">Products</a></li>
          <li><a href="/product/add">Add</a></li>
          <li><a href="/product/delete">Delete</a></li>
          @auth
            <li><a href="/logout">logout</a></li>
          @endauth
          @guest
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Register</a></li>
          @endguest
        </ul>
      </nav>
    </header>
    <main>
      @yield('content')
    </main>
    <footer>
      <img src="{{ asset('/css/images/copyright.png') }}" alt="">
      <p>Copyright Drums'n'Sticks 2018</p>
    </footer>
    <div class="hidden">Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
  </body>
</html>
