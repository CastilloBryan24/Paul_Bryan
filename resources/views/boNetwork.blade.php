@extends('template.second')

@section('content')
    <table class="table table-bordered table-dark container mt-5">
        <thead>
        <tr>
            <th scope="col">Lien</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($network as $item)
        <tr>
            <td>{{$item ->lien}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>

    <form class="container mt-5" action="/network-store" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Lien</label>
            <input type="text" name="lien" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection