<!-- resources/views/destinations/edit.blade.php -->
@extends('layouts.layout')

@section('title', 'Edit Destination')

@section('content')
    <h2>Edit Destination</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('destinations.update', $destination) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $destination->name }}" required>
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" name="location" class="form-control" value="{{ $destination->location }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" required>{{ $destination->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Destination</button>
    </form>
@endsection
