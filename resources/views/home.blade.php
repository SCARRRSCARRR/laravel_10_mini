@extends('base')

@section('title', 'Accueil')

@section('content')
<h1>Accueil</h1>
<p>
    Vous êtes sur la page d'accueil.
</p>

<h2>{{$article5->titre}}</h2>
<p>{{$article5->texte}}</p>
<ul>
    @foreach ($article5images as $image)
    <li>
        <img src="{{asset('images/'.$image->fichier)}}" alt="{{$image->titre}}">
    </li>      
    @endforeach
</ul>

@foreach($articles as $article)
    <h2>{{ $article->titre}}</h2>
    <p>{{ $article->texte}}</p>
    <ul>
         @foreach ($article->images()->get() as $image)
        <li>
            <img src="{{asset('images/'.$image->fichier)}}" alt="{{$image->titre}}">
        </li>      
        @endforeach
    </ul>
@endforeach
@endsection
