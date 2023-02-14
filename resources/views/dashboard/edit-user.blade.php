@extends('layouts.main')
@section('title', 'Edit')
@section('content')
<form action="{{route('updateUsr', $data->id)}}" method="post">
  @csrf
<div class="mb-3">
  <label for="name" class="form-label">Name</label>
  <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}">
</div>
<div class="mb-3">
  <label for="email" class="form-label">Email</label>
  <input type="email" class="form-control" id="email" name="email">
</div>
<div class="mb-3">
  <label for="noHp" class="form-label">No Hp</label>
  <input type="number" class="form-control" id="noHp" name="no_hp">
</div>  
<div class="mb-3">
  <label for="address" class="form-label">Address</label>
  <textarea class="form-control" id="address" rows="3" name="address"></textarea>
</div>
</form>


@endsection