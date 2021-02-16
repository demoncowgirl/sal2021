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
              <a class="nav-link" href="auth/login" class="trigger-btn" data-toggle="modal">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="auth/register" class="trigger-btn" data-toggle="modal">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/colorInput">Color Input</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/rectangleLayout">Rectangle Layout</a>
            </li>
          </ul>
        </div>
      </nav>

      @include('flash-message')

      <div class="main mt-4 justify-content-center align-text-center">
      <h2>Peppermint Purple 2021 SAL - Square</h2>

      <div class="container">
      @foreach($colors as $color)
      <div class="d-flex">
        <div class="d-flex flex-row">
          <div id="box-horizontal" class="box" style="background:">
            <h4>Box 1</h4>
            <p>{{$color -> dmc}}</p>
            <p>{{$color-> name}}</p>
          </div>
        </div>
        <div class="d-flex flex-row">
          <div id="box-square" class="box" style="background: ">
            <h4>Box 5</h4>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-square" class="box" style="background:">
            <h4>Box 4</h4>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-vertical" class="box" style="background: ">
            <h4>Box 2</h4>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-vertical" class="box" style="background: ">
            <h4>Box 3</h4>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-square" class="box" style="background: ">
            <h4>Box 8</h4>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-square" class="box" style="background: ">
            <h4>Box 9</h4>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
        </div>

        <div class="d-flex flex-row" style="margin-top: -80px;">
          <div id="box-square" class="box" style="background: ">
            <h4>Box 14</h4>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-square" class="box" style="background: ">
            <h4>Box 6</h4>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-square" class="box" style="background: ">
            <h4>Box 7</h4>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-square" class="box-filler">
          </div>
          <div id="box-square" class="box-filler">
          </div>
          <div id="box-square" class="box" style="background: ">
            <h4>Box 10</h4>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-square" class="box" style="background: ">
            <h4>Box 11</h4>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-square" class="box" style="background: ">
            <h4>Box 15</h4>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
        </div>

        <div class="d-flex flex-row">
          <div id="box-square" class="box" style="background: ">
            <h4>Box 22</h4>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-square" class="box" style="background: ">
            <h4>Box 16</h4>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-horizontal" class="box" style="background: ">
            <h4>Box 12</h4>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-horizontal" class="box" style="background: ">
            <h4>Box 13</h4>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-square" class="box" style="background: ">
            <h4>Box 17</h4>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-square" class="box" style="background: ">
            <h4>Box 24</h4>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
        </div>

        <div class="d-flex flex-row">
          <div id="box-vertical" class="box" style="background: ">
            <h4>Box 30</h4>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-square" class="box" style="background: ">
            <h4>Box 26</h4>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-horizontal" class="box" style="background: ">
            <h4>Box 18</h4>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-square" class="box" style="background: ">
            <p>Box 19</p>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-square" class="box" style="background: ">
            <p>Box 21</p>
              <p>{{$color -> dmc}}</p>
              <p>{{$color -> name}}</p>
          </div>
          <div id="box-horizontal" class="box" style="background: ">
            <p>Box 23</p>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-square" class="box" style="background: ">
            <p>Box 25</p>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-vertical" class="box" style="background: ">
            <p>Box 33</p>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
        </div>

        <div class="d-flex flex-row" style="margin-top: -80px;">
          <div id="box-square" class="box" style="background: ">
            <p>Box 27</p>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-horizontal" class="box" style="background: ">
            <p>Box 20</p>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-square" class="box" style="background: ">
            <p>Box 28</p>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-square" class="box" style="background: ">
            <p>Box 29</p>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-horizontal" class="box" style="background: ">
            <p>Box 35</p>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-square" class="box" style="background: ">
            <p>Box 31</p>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
        </div>

        <div class="d-flex flex-row">
          <div id="box-square" class="box" style="background: ">
            <p>Box 32</p>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-square" class="box" style="background: ">
            <p>Box 37</p>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-horizontal" class="box" style="background: ">
            <p>Box 41</p>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-horizontal" class="box" style="background: ">
            <p>Box 40</p>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-square" class="box" style="background: ">
            <p>Box 36</p>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-square" class="box" style="background: ">
            <p>Box 34</p>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
        </div>

        <div class="d-flex flex-row">
          <div id="box-square" class="box" style="background: ">
            <p>Box 39</p>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-square" class="box" style="background: ">
            <p>Box 46</p>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-square" class="box" style="background: ">
            <p>Box 47</p>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-vertical" class="box" style="background: ">
            <p>Box 50</p>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-vertical" class="box" style="background: ">
            <p>Box 51</p>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-square" class="box" style="background: ">
            <p>Box 43</p>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-square" class="box" style="background: ">
            <p>Box 42</p>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-square" class="box" style="background: ">
            <p>Box 38</p>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
        </div>

        <div class="d-flex flex-row" style="margin-top: -80px;">
          <div id="box-square" class="box" style="background: ">
            <p>Box 48</p>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-square" class="box" style="background: ">
            <p>Box 49</p>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-square" class="box-filler">
             </div>
             <div id="box-square" class="box-filler">
             </div>
          <div id="box-square" class="box">
            <p>Box 45</p>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          <div id="box-square" class="box" style="background: ">
            <p>Box 44</p>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
        </div>
        <div class="d-flex flex-row">
          <div id="box-horizontal" class="box" style="background: ">
            <p>Box 52</p>
            <p>{{$color -> dmc}}</p>
            <p>{{$color -> name}}</p>
          </div>
          </div>
          <button type="button" class="button" onclick="setRandomColor()">Change Colors</button>
        </div>
        @endforeach
        </div>
      </div>
    </body>
</html>
