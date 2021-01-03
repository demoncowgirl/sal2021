<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SAL 2021</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">
        <script src="/js/app.js" rel="javascript"></script>

        <script> src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"</script>

    </head>
    <body>

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Beth's Color Randomizer</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/squareLayout">Square Layout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/rectangleLayout">Rectangle Layout</a>
      </li>
    </ul>
  </div>
</nav>

      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Floss Color Input</h4>
          <form>
            <label for="dmc">DMC Floss Color:</label><br>
            <input type="text" id="dmc" name="dmc"><br>
            <label for="hex">Hex Color:</label><br>
            <input type="text" id="hex" name="hex">
            <input type="submit" value="Submit">
          </form>
          <a href="http://stitchpalettes.com" class="card-link">Stitch Pallettes Website</a>
        </div>
      </div>


    </body>
</html>
