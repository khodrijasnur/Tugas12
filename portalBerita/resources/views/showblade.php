@extends('layouts.master')

@section('title')
Halaman List Data Cast
@endsection

@section('content')

<a href="/cast/create" class="btn btn-sm btn-primary">Tambah</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Umur</th>
        <th scope="col">bio</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($cast as $key => $item)
        <tr>
            <th scope="row">{{$key + 1}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->umur}}</td>
            <td>{{$item->bio}}</td>
            </td>
                
                <form action="/cast/{{$item->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="/cast/{{$item->id}}" class="btn btn-info btn-info">Detail</a>
                    <a href="/cast/{{$item->id}}/edit" class="btn btn-info btn-warning">Edit</a>
                    <input type="submit" class="btn btn-denger btn-sm" value="Delete">
           </td>
         </tr>
        @empty
         cast belum ada
        @endforelse
   
      
        </tbody>
  </table>

@endsection