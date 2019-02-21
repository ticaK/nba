@extends('layouts.master')
@section('content')

<h4>{{$new->title}}</h4>
<p>{{$new->content}}</p>
<h5>Autor</h5>
<p>
    Name: <strong>{{$new->user->name}}</strong><br>
    Email: <strong>{{$new->user->email}}</strong>
</p>

@endsection