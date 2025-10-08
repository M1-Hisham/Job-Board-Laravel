@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h2 class="text-3xl font-semibold border-l-4 border-yellow-400 pl-3 mb-4">Welcome</h2>
    <p class="text-gray-600 mb-6">This is the home page of your Laravel + Tailwind setup.</p>

    {{-- Example card component --}}
    @include('components.card', [
        'title' => 'Feature 1',
        'text' => 'This is an example reusable card built with Tailwind.'
    ])
@endsection 