@extends('layouts.master')

@section('title','Update - Laravel 6.0 by Aldi')

@section('content')
<h2>Update Data</h2>
<form action="/note/{{$data->id}}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PUT')}}
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" class="form-control" value="{{$data->title}}" name="title" aria-describedby="emailHelp" placeholder="Enter title">

        <label for="exampleInputEmail1">Description</label>
        <textarea class="form-control" name="description" rows="3">{{$data->description}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
