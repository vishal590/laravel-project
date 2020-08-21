@extends('layout')

@section('content')
<h1>Account page</h1>
<form action="{{url('/createsub')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" id="name">
      </div>
    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="email" class="form-control" name="email" id="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="password"id="pwd">
    </div>
    <button type="submit" class="btn btn-primary" >Submit</button>
  </form>
@endsection
