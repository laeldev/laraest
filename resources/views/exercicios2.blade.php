<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exercicios 2</title>
</head>
<body>
  @for ($numero = 1;$numero < 51;$numero++ )
  <img src="{{$url.$numero}}"/>
  @endfor
  
</body>
</html>