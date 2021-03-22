@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Articles</h1>
@stop

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($articles as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->title}}</td>
            <td>{{$item->users->name}}</td>
            <td>
                <a class="btn btn-info" href="articles/{{$item->id}}">Details</a>
            </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@stop