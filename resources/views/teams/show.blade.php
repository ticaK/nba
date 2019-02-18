@extends ('layouts.master')

@section('content')

    <h1>{{$team->name}}</h1>
   
       <p> {{$team->email}}<p>   
       <p> {{$team->address}}<p>
       <p> {{$team->city}}<p>



            <h4>Players:</h4>
            @foreach($team->players as $player)
            <div class="p-4 alert alert-success">
                Player:<a href="/players/{{$player->id}}">{{$player->first_name}}</a> <br>    
            </div>
            @endforeach
           
@endsection 