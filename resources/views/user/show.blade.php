@extends('user.layouts.layout')
  @section('main-content')
    <h2 class="text-center text-primary">Utente: {{$user->name}}</h2>
      <div class="card">
       <ul>
        @foreach ($user->photos as $photo)
              <li class="text-primary">Titolo foto:<span class="text-dark"> {{ $photo->title }}</span></li> 
          @endforeach
      </ul>
    </div>            
  @endsection