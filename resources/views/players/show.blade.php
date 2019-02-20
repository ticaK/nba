@extends('layouts.master')

@section('content')
<ul class = "list-group">
    <li class = "list-group-item">First name:<strong>{{$player->first_name}}</strong></li><br>
    <li class = "list-group-item">Last name:<strong>{{$player->last_name}}</strong></li><br>
    <li class = "list-group-item">Email:<strong>{{$player->email}}</strong></li><br>
    <li class = "list-group-item">Team:</strong><a href="{{ route('single-team', ['id' => $player->team->id]) }}">{{ $player->team->name }}</a></li>
</ul>

@endsection