@extends('layouts.master')
@section('content')



<h4>{{$new->title}}</h4>
<small>{{"Ova novost je vezana za timove:"}}</small>

@if(count($new->teams))
<ul>
    @foreach($new->teams as $team)
    <li><a href="/teams/{{$team->id}}">{{ $team->name }}</a></li>
    @endforeach
</ul>
@endif
<p>{{$new->content}}</p>
<h5>O autoru:</h5>
<p>
    Name: <strong>{{$new->user->name}}</strong><br>
    Email: <strong>{{$new->user->email}}</strong>
</p>

@endsection