@extends('layouts.app')
@section('title')
    Homes
@endsection
@section('content')
    <h1>Salut usuario: {{ auth()->user()->name }}</h1>
@endsection
