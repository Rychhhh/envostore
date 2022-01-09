@extends('layouts.admin.main')


@section('content')
    Hello

    @foreach ($alluser as $user)
    <ul>
        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>
        <li>{{ $user->role }}</li>
    </ul>
    @endforeach
@endsection