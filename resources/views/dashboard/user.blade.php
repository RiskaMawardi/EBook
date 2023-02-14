@extends('layouts.main')

@section('title', 'User')
@section('content')
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">No Hp</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        $i=1;
    ?>  
    <tr>
    @foreach($data as $dt)
      <td>{{$i++}}</td>
      <td>{{$dt->name}}</td>
      <td>{{$dt->email}}</td>
      <td>{{$dt->no_hp}}</td>
      <td>{{$dt->address}}</td>
      <td>
        <form action="{{route('Edit', $dt->id)}}" method="get">
          <button type="submit" class="btn btn-primary">Edit</button>
        </form>
        <button type="submit" class="btn btn-danger">Delete</button>

      </td>
    @endforeach
    </tr>
  </tbody>
</table>
</div>

@endsection