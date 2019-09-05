@extends('layouts.master')

@section('title','Detail - Laravel 6.0 by Aldi')

@section('content')
    <h2>{{$data->title}}</h2>
    <h4>Description : </h4>
    <p>{{$data->description}}</p>
@endsection
