<html>
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<header>
    <h1>@yield('title')</h1>
    <ul class="top">
      <li><a href="{{ url('/login') }}">LOGIN</a></li>
      <li><a href="{{ url('/register') }}">REGISTER</a></li>
    </ul>
</header>

<div class="container">
         @yield('inputform')
</div>
</body>
</html>