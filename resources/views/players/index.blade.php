@extends('layouts.master')

@section('content')
    <ul class = "list-group">
        @foreach($players as $player)
            <li class = "list-group-item">
                <a href = "/players/{{$player->id}}">
                    {{$player->first_name}} {{$player->last_name}}
                </a><br>
            </li>
        @endforeach
    </ul>
@endsection