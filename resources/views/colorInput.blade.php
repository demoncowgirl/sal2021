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

      <nav class="navbar navbar-expand-lg">
        <h2 class="navbar-brand">Beth's SAL Color Randomizer</h2>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
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
       <div class="col-sm-6 col-md-4 col-lg-2">
          <h2>Floss Color Input</h2>
           <form method="POST" action="{{ action('App\Http\Controllers\ColorController@store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
            <label for="dmc">DMC Floss Color:</label><br>
            <input type="text" id="dmc" name="dmc" placeholder="Required"><br>
            <label for="hex">Hex Color:</label><br>
            <input type="text" id="hex" name="hex" placeholder="Include #"><br>
            <label for="name">Color Name:</label><br>
            <input type="text" id="name" name="name" placeholder="Optional"><br>
            <input class="button" type="submit" value="Submit">
          </form>
          <form>
            <label for="aida">Aida Color:</label><br>
            <input type="text" id="aida" name="aida" onchange="changeBackground();"><br>
            <input class="button" id="submitColor" value="Submit" type="button" />
          </form>
          <h3>Helpful Websites</h3>
          <a href="http://peppermintpurple.com" target="_blank" rel="noopener noreferrer">Peppermint Purple Website</a><br>
          <a href="http://stitchpalettes.com" target="_blank" rel="noopener noreferrer">Stitch Pallettes Website</a><br>
          <a href="http://dmc.crazyartzone.com" target="_blank" rel="noopener noreferrer">Crazy Art Zone Website</a>
    </div>
    <div class="col-sm-6 offset-sm-6 col-md-4 offset-md-4 col-lg-2 offset-lg-2">
      <div class="table table-bordered">
        <thead>
          <tr>
            <th>DMC Floss</th>
            <th>Hex Color</th>
            <th>Name</th>
          </tr>
        </thead><br>
        <tbody>
          @foreach($colors as $color)
          <tr>
            <td>{{ $color->dmc }}</td>
            <td>{{ $color->hex}}</td>
            <td>{{ $color->name}}</td>
            <td>
              <button type="button" class="btn btn-info">
              </button><br>
            </td>
          </tr>
          @endforeach
        </tbody>
        </div>
      </div>s
    </div>
  </div>
</body>
</html>
