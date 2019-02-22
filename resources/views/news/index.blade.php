@extends('layouts.master')
@section('title','News')

@section('content')

@if(session('message'))
   <em>{{session('message')}}</em>
@endif
    @foreach ($news as $new)
        <h4><a href = "/news/{{$new->id}}">{{$new->title}}</a></h4>
        <p>created by: <strong>{{$new->user->name}}</strong></p>
        <p>at: {{$new->created_at}}</p>
    @endforeach
    {{$news->links()}}
    
 
@endsection