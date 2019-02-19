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
            <br>

            <h4>Comments:</h4>
            <ul class="list-group">

            @foreach($team->comments as $comment)
            <li class="list-group-item list-group-item-secondary">
                    {{$comment->content}}<br>
                    {{$comment->created_at}}<br>
            </li>  
            @endforeach
            <div class="container">
                    <form method = "POST"action = "{{route('teams.comment',['id'=>$team->id])}}"> 
                       @csrf
                        
                       <div class="form-group">
                        <label for="textarea" class="col-4 col-form-label">Comment</label>
                        <div class="col-8">
                            <textarea id="textarea"
                             name="content" 
                             cols="40" 
                             rows="5"
                              class="form-control {{$errors->has('content') ? 'is-invalid' : ''}}">{{ old('content') }}</textarea>
                            @include('partials.invalid-feedback',['field'=>'content']) 
                
                        </div>
                        </div>
                
                
                          <div class="form-group row">
                                <div class="offset-4 col-8">
                                    <button type="submit" class="btn btn-primary">Add comment</button>
                                </div>
                        </div>
                
                    </form>
                    
                </div>
        
        
           
@endsection 