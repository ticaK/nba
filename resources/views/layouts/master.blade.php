<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>@yield('title','NBA')</title>
    
</head>
<body>
    @include('partials.navbar'); 
    <div class="container">  
        <div class = "row">
        <div>
            @yield('content')
        </div>
        
                <aside class="col-sm-2 ml-sm-auto blog-sidebar">
                        <div class="sidebar-module sidebar-module-inset">  
                             <ul class="list-unstyled">
                                @foreach ($teams as $team)
                                    <li>
                                        <a href="/news/team/{{ $team->id }}"> {{$team->name}} </a> 
                                    </li>
                                 @endforeach
                            </ul>
                        </div>
                </aside>
            </row>
       </div>
</body>
</html>