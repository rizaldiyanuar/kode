@extends('layouts.master')

@section('title','Create - Laravel 6.0 by Aldi')

@section('content')
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{$error}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endforeach
@endif

<h2>Tambah Data</h2>
<form action="/note" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" class="form-control" name="title" aria-describedby="emailHelp" placeholder="Enter title">

        <label for="exampleInputEmail1">Description</label>
        <textarea class="form-control" name="description" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
