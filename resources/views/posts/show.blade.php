@extends('layouts.app')

@section('content')
    <a href="/posts" ><i class="fas fa-arrow-alt-circle-left fa-3x"></i></a>
    
    {{-- <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div> --}}

    <div class="card">
        <div class="card-header">
            <h1>{{$post->title}}</h1>
        </div>
        <div class="card-body">
          <p class="card-text">{!!$post->body!!}</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

    <hr>
    <small>Gepost op {{$post->created_at}} door {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-warning"><i class="far fa-edit"></i> Edit</a>
            
            {{-- <a href="{{ action('PostsController@destroy') }}" class="btn btn-danger"><i class="far fa-trash-alt"></i> Delete</a> --}}
            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection