@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Posts</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="/posts/create" class="btn btn-success"><i class="fas fa-plus-circle"></i> Nieuwe Post Aanmaken</a>
        </div>
    </div>
    @if(count($posts) > 0)
        @foreach($posts as $post)
        <div class="row">
            <div class="col-md-12">
                <a href="/posts/{{$post->id}}" style="text-decoration: none">
                    <div class="card">
                        <div class="card-header">
                            <h3>{{$post->title}}</h3>
                            <small>Gepost op: {{$post->created_at}} door {{$post->user->name}}</small>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>Geen berichten gevonden.</p>
    @endif
@endsection