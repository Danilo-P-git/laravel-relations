@extends('layouts.main')

@section('page-content')
<div class="container">
    <h1>Lista fumetti</h1>
    <div class="row">
        @foreach ($comics as $comic)
        <div class="col-sm-4">
            <div class="card">
                <img class="card-img-top" style="width: 100%" src="{{$comic->cover}}" alt="{{$comic->title}}">
                <div class="card-body">
                   <h5 class="card-title">{{$comic->title}}</h5>          
                    <a href="{{route("comics.show", $comic->id)}}" class="btn btn-primary">Scopri di più</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
