<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('./css/style.css') }}">
    <title>Drums'N'Sticks</title>
  </head>
  <body>
    <header>
      <h1>Drums'N'Sticks</h1>
      <img src="{{ asset('/css/images/logo.png') }}" alt="logo">
      <nav>
        <ul>
          <li><a href="#"></a>Home</li>
          <li><a href="/products">Products</a></li>
          <li><a href="#"></a>Add</li>
          <li><a href="#"></a>Delete</li>
          <li><a href="/logout">logout</a></li>
        </ul>
      </nav>
    </header>
    <main>
      @yield('content')
    </main>
    <footer>
      <p>Copyright Drums'n'Sticks 2018</p>
    </footer>
  </body>
</html>
