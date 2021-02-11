<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">

</head>
<body>

      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$show->icone}} {{$show->title}}</h5>
          <p class="card-text">{{$show->paragraph}} {{$show->number}}</p>
          <p class="card-text">{{$show->subtitle}}</p>
          <p class="card-text">{{$show->paragraph}}</p>
        </div>
      </div>
    
    <script src="{{asset("js/app.js")}}"></script>
</body>
</html>