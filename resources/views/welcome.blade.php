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
            <li class="nav-item">
              <a class="nav-link" href="/squareLayout">Square Layout</a>
            </li>
          </ul>
        </div>
      </nav>

      @include('flash-message')

      <div class="main mt-4 justify-content-center align-text-center">
      <h1>Welcome!</h1>
      <div class="container-welcome">
        <p>As an avid crafter and a software developer, I decided to challenge myself and create a program that would randomize the colors for each of the Peppermint Purple SAL designs. After choosing my color palette, I was also having trouble deciding where to place each color, so I though that I'd do it randomly.<br>Please feel free to play around with the site, and understand that in order to save your own personal color palette, you will need to register and login. Your information will never be sold or used for anything else.</p>
        <ul><strong>Step 1: </strong>Enter your DMC floss colors in the Color Input page. You will need to convert them to hex colors (also shown as R,G,B) if you go to the Crazy Art Zone website. It will be the number after the #.</ul>
        <ul><strong>Step 2: </strong>Once you've entered the colors you'd like to use, choose your layout, and hit the "Change Color" button at the buttom.
        </ul><p>If you don't like the order of colors, hit the button again and it will rearrange them for you.<p>I will eventually set up a way to print out your color scheme, but as I also work fulltime, this will be a work-in-progress. Let me know if you have any suggestions for the site.<br><br>Have fun!<br>Beth</p>
      </div>
      </div>
    </body>
</html>
