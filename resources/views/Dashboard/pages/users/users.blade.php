@extends('Dashboard.layout.master')
@section('title', 'Kullanıcılar')
@section('content')
<ul>
    @foreach ($users as $user)
        <li>{{ $user->name_surname }}</li>
    @endforeach
</ul>
@endsection
