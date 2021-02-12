@extends('template.second')

@section('content')
<table class="table table-bordered table-dark container mt-5">
    <thead>
      <tr>
        <th scope="col">Titre</th>
        <th scope="col">Numéro</th>
        <th scope="col">Sous-titre</th>
        <th scope="col">Paragraphe</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($article as $item)
      <tr>
        <td>{{$item ->title}}</td>
        <td>{{$item ->number}}</td>
        <td>{{$item ->subtitle}}</td>
        <td>{{$item ->paragraph}}</td>
        <td>
        <form action="/delete-article/{{$item->id}}" method="post">
            @csrf
            <button type="submit" class="btn btn-danger">Supprimer</button>
          </form>
          <td><a href="/article-show/{{$item->id}}" class="btn btn-danger">Show</a></td>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <form class="container mt-5" action="/article-store" method="POST">
      @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Titre</label>
      <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Numéro</label>
      <input type="number" name="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Sous-titre</label>
      <input type="text" name="subtitle" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Paragraphe</label>
      <input type="text" name="paragraph" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection