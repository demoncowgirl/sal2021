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

      <nav class="navbar navbar-light navbar-expand-lg">
        <p class="navbar-brand ml-0">BJS</p>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Square Layout L</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/rectangleLayout">Rectangle Layout L</a>
            </li>
          </ul>
        </div>
      </nav>

   <div class="container mt-4">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Floss Color Input</h2>
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
    </div>

    <div class="container">

      <div class="list">
        <thead>
    <tr>
      <th>DMC Floss</th>
      <th>Hex Color</th>
    </tr>
  </thead>
  <tbody>
    @foreach($colors as $color)
    <tr class="gradeX">
      <td>{{ $color->dmc }}</td>
      <td>{{ $color->hex}}</td>
      <td class="center"><a href="{{ url('/admin/edit-product/'.$product->id) }}" class="btn
btn-primary btn-mini">Edit</a> <a id="delCat" href="{{ url('/admin/delete-
product/'.$product->id) }}" class="btn btn-danger btn-mini">Delete</a></td>
    </tr>
    @endforeach
      </div>
    </div>

</div>
    </body>
</html>
