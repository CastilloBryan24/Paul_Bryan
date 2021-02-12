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
    <section class="container mt-5">
        <form action="/update-home2/{{$edit->id}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Icone</label>
              <input type="text" name="icone" value="{{$edit->icone}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Paragraphe</label>
              <input type="text" name="paragraph" value="{{$edit->paragraph}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
    
    <script src="{{asset("js/app.js")}}"></script>
</body>
</html>