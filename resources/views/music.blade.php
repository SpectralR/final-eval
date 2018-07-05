<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width,  initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/style.css">
    <title>Drums'N'Sticks</title>
  </head>
  <body>
    <header class="music">
      <h1>Drums'N'Sticks</h1>
      <img src="{{ asset('/css/images/logo.png') }}" alt="logo">
    </header>
    <main>
      <h2>Do you know music?</h2>
      <input class="text music-question" type="text" name="music" value="" placeholder="Do Re Mi Fa Sol La Si">
      <button class="button" data-action="playIt" type="button" name="button">Submit</button>
      <audio id="myAudio" src="./js/music.wav"></audio>
      <div id="false"></div>
      <img src="{{ asset('/css/images/music.png') }}" class="music-img">
    </main>
    <footer>
      <img src="{{ asset('/css/images/copyright.png') }}" alt="">
      <p>Copyright Drums'n'Sticks 2018</p>
    </footer>
  </body>
  <script type="text/javascript" src="{{ asset('./js/music.js') }}"></script>
</html>
