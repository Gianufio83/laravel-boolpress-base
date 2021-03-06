@extends('chronicle_blog.layouts.layout')
  @section('header')
      @if (session('id_delete'))
        <div class="alert aert-success">
          Hai cancellato l'articlo con id: {{session('id_delete')}}
        </div>
      @endif
  @endsection
    @section('main-content')
      <div class="wrapper">
        <h1 class="text-center">Free Blog</h1>
      </div>
        <table class="table">
        <thead>
          <tr>
            <th scope="col">#ID</th>
            <th scope="col">Author</th>
            <th scope="col">Author Job</th>
            <th scope="col">Category</th>
            <th scope="col">Title</th>
            <th scope="col">Image</th>
            <th scope="col">Article</th>
            <th scope="col">Updated At</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($chronicles as $chronicle)
            <tr>
            <th scope="row">{{$chronicle->id}}</th>
            <td>{{$chronicle->author}}</td>
            <td>{{$chronicle->author_job}}</td>
              <td>{{$chronicle->category}}</td>
              <td>{{$chronicle->title}}</td>
              <td>{{$chronicle->img}}</td>
              <td>{{$chronicle->article}}</td>
              <td>{{$chronicle->created_at}}</td>
              <td>
              <form action="{{route('chronicle.destroy', $chronicle->id)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">DELETE</button>
                </form>
              </td>
              <td><a class="btn btn-primary" href="{{route('chronicle.edit', $chronicle->id)}}">UPDATE</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @endsection
  
    
 
