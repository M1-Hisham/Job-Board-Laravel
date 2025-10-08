@extends('layouts.app')

@section('title', 'Job Listings')
@section('content')<div style="text-align: center;">

    <h1>Job Listings</h1>
    <p>Welcome to the job board! Here are the latest job postings:</p>
    <ul>
        <li>Software Engineer at TechCorp</li>
        <li>Marketing Manager at MarketMinds</li>
        <li>Data Analyst at DataPros</li>
    </ul>

    @foreach ($jobs as $job)
        <div>
            <h2>{{ $job['title'] }}</h2>
            <p>{{ $job['description'] }}</p>
            <p><strong>Location:</strong> {{ $job['location'] }}</p>
            <p><strong>Type:</strong> {{ $job['type'] }}</p>
            <p> <strong>Salary:</strong>{{ $job['salary'] }}</p>
            <p><strong>Company:</strong> {{ $job['company'] }}</p>
        </div>
    
    @endforeach

</div>


@endsection