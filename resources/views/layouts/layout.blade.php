<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<ul class="menu">
    <li>Active</li>
    <li>Default</li>
    <li>Default</li>
    <li>Default</li>
</ul>
<a href="{{ url('vueApropos') }}">lien vers vue à propos<a/>
    @yield('content')
<footer class="footer">
    <div> 
    <p>&copy;Réalisé en 2021 par Charmarke Développeur full-stack en herbe</p>
  </div>
</footer>

</body>
</html>