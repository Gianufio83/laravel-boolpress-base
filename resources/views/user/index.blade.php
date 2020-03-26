@extends('user.layouts.layout')
@section('main-content')
    @foreach ($users as $user)
        <div class="card">
            <ul>
               <li class="text-primary">NOME UTENTE: <span class="text-dark">{{$user->name}}</span></li> 
               <li><a class="btn btn-warning" href="">VISUALIZZA PROFILO </a></li> 
                AVATAR : {{$user->avatar['path']}}<br>
                @foreach ($user->photos as $photo)
                 TITOLO FOTO: {{$photo->title}} <br>
                 @endforeach
                <br>
            </ul>
        </div>
    @endforeach
@endsection