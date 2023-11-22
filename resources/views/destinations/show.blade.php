<!-- resources/views/destinations/show.blade.php -->
@extends('layouts.layout')

@section('title', 'Destination Details')

@section('content')
    <div class="container mt-5">
        <h2>Destination Details</h2>

        <div>
            <strong>Name:</strong> {{ $destination->name }}
        </div>

        <div>
            <strong>Location:</strong> {{ $destination->location }}
        </div>

        <div>
            <strong>Description:</strong> {{ $destination->description }}
        </div>

        <!-- Add more details as needed -->

        <a href="{{ route('destinations.index') }}" class="btn btn-primary mt-3">Back to Destinations</a>
    </div>
@endsection
