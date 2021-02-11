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
    
    <table class="table table-bordered table-dark container mt-5">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Icone</th>
            <th scope="col">Text</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">{{$show->id}}</th>
            <td>{{$show->icone}}</td>
            <td>{{$show->paragraph}}</td>
          </tr>
        </tbody>
      </table>
    
    <script src="{{asset("js/app.js")}}"></script>
</body>
</html>