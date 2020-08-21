@extends('layout')

@section('content')
<h1>List page</h1>

{{-- {{print_r($user)}} --}}
<div>
    <ul>
        @foreach ($user as $u)
            <li><span>{{$u->name}}</span><span>{{$u->email}}</span></li>
        @endforeach
    </ul>
</div>

@endsection
