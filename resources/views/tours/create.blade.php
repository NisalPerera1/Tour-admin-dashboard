<!-- resources/views/tours/create.blade.php -->
@extends('layouts.layout')

@section('title', 'Add New Tour')

@section('content')
    <div class="container mt-5">
        <h2>Add New Tour</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('tours.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="number_of_days">Number of Days</label>
                <input type="number" name="number_of_days" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" step="0.01" name="price" class="form-control" required>
            </div>
            <!-- Use a text input for destinations -->
            <div class="form-group">
                <label for="destinations">Destinations (comma-separated)</label>
                <input type="text" name="destinations" class="form-control" placeholder="Enter destinations separated by commas" required>
            </div>

            <button type="submit" class="btn btn-primary">Add Tour</button>
        </form>
    </div>
@endsection
