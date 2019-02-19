@extends ('layouts.master')

@section('content')

    <h1>{{$team->name}}</h1>
   
       <p> {{$team->email}}<p>   
       <p> {{$team->address}}<p>
       <p> {{$team->city}}<p>



            <h4>Players:</h4>
            <ul class="list-group">
            @foreach($team->players as $player)
            <li class="list-group-item">
                <a href="/players/{{$player->id}}">
                    {{$player->first_name}} {{$player->last_name}}
                </a> 
            </li>  
            @endforeach
           
@endsection 