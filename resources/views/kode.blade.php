@extends('layouts.master')

@section('title','Laravel 6.0 by Aldi')

@section('content')
    <a href="/addnote">
        <button type="button" class="btn btn-primary">Tambah Data</button>
    </a>

    <br><br>

    @if(count($data)>0)
    <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">id</th>
                <th scope="col">Title</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>
                            <a href="/note/{{$item->id}}">{{$item->title}}</a>
                        </td>
                        <td>
                            <a href="/note/edit/{{$item->id}}"><button type="button" class="btn btn-warning">Edit</button></a> |
                            <a href="/note/delete/{{$item->id}}"><button type="button" class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-danger" role="alert">
            Maaf data tidak ditemukan T_T
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
@endsection
