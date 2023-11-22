<!-- resources/views/tours/show.blade.php -->
@extends('layouts.layout')

@section('title', 'Tour Details')

@section('content')
    <div class="container mt-5">
        <h2>Tour Details</h2>

        <div>
            <strong>Name:</strong> {{ $tour->name }}
        </div>

        <div>
            <strong>Number of Days:</strong> {{ $tour->number_of_days }}
        </div>

        <div>
            <strong>Description:</strong> {{ $tour->description }}
        </div>

        <div>
            <strong>Price:</strong> {{ $tour->price }}
        </div>

        <!-- Add more details as needed -->

        <a href="{{ route('tours.index') }}" class="btn btn-primary mt-3">Back to Tours</a>
    </div>
@endsection
