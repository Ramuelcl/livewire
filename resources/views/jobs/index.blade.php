@extends('layouts.app')

@section('content')
    <h1 class="text-3xl text-green-500 mb-3">Nos dèrniers missions</h1>
    @foreach ($jobs as $job)
        <div class="px3 py-5 mb-3 shadow-sm hover:shadow-md rounded border-2 border-gray-300">
            <h2 class="text-xl font-bold text-green-800">{{ $job->title }}</h2>
            <p class="text-md text-gray-800">{{ $job->description }}</p>
            <div class="flex items-center">
                <span class="h-2 w2 bg-green-300 rounded-full mr-1">*</span>
                <a href="#" class="" id="">Consulter la mission</a>
            </div>
            <span class="text-sm text-gray-600">{{ number_format($job->price, 2, ',', '') }} €</span>
        </div>
    @endforeach
@endsection
