<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exercicios</title>
</head>
<body>
  @foreach ($pessoas as $pess )
    <span> {{$pess}} </span>
    
  @endforeach
</body>
</html>