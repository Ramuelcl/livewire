@extends('layouts.app')
@section('title')
    Home
@endsection
@section('content')
    <h1>Salut usuario: {{ auth()->user()->name }}</h1>
@endsection
