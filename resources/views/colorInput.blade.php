<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SAL 2021</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Mali:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">
        <script src="/js/app.js" rel="javascript"></script>

        <script> src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"</script>

    </head>
    <body>

      <nav class="navbar navbar-light navbar-expand-lg">
        <p class="navbar-brand">BJS</p>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Square Layout</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/rectangleLayout">Rectangle Layout</a>
            </li>
          </ul>
        </div>
      </nav>

   <div class="container">
     <div class="row">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Floss Color Input</h2>
          <form>
            <label for="dmc">DMC Floss Color:</label><br>
            <input type="text" id="dmc" name="dmc"><br>
            <label for="hex">Hex Color:</label><br>
            <input type="text" id="hex" name="hex"><br>
            <label for="name">Color Name:</label><br>
            <input type="text" id="name" name="name"><br>
            <input class="button" type="submit" value="Submit">
          </form>
          <form>
            <label for="aida">Aida Color:</label><br>
            <input type="text" id="aida" name="aida" onchange="changeBackground();"><br>
            <input class="button" id="submitColor" value="Submit" type="button" />
          </form>
          <a href="http://stitchpalettes.com" class="card-link">Stitch Pallettes Website</a><br>
          <a href="http://dmc.crazyartzone.com" class="card-link">Crazy Art Zone Website</a>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="table">
        <thead>
          <tr class="header">
            <th>DMC Floss</th>
            <th>Hex Color</th>
            <th>Name</th>
          </tr>
        </thead>
        <tbody>
          @foreach($colors as $color)
          <tr class="list">
            <td>{{ $color->dmc }}</td>
            <td>{{ $color->hex}}</td>
            <td>{{ $color->name}}</td>
            <td class="center">
              <a id="delColor" href="{{ url('/colorInput'.$color->id) }}" class="btn-sm">Delete</a>
            </td>
          </tr>
          @endforeach
        </div>
      </div>
    </div>
</body>
</html>
