@extends('layouts.master')

@section('content')
first name:{{$player->first_name}}<br>
last name:{{$player->last_name}}<br>
email:{{$player->email}}<br>

@endsection