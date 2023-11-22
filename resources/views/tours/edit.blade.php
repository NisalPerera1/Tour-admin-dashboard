<!-- resources/views/tours/edit.blade.php -->
@extends('layouts.layout')

@section('title', 'Edit Tour')

@section('content')
    <h2>Edit Tour</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('tours.update', $tour) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $tour->name }}" required>
        </div>
        <div class="form-group">
            <label for="number_of_days">Number of Days</label>
            <input type="number" name="number_of_days" class="form-control" value="{{ $tour->number_of_days }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" required>{{ $tour->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" step="0.01" name="price" class="form-control" value="{{ $tour->price }}" required>
        </div>
        <div class="form-group">
            <label for="destination_id">Destination</label>
            <!-- Assuming you have a destinations table with an id and name field -->
            <select name="destination_id" class="form-control" required>
                @foreach ($destinations as $destination)
                    <option value="{{ $destination->id }}" {{ $destination->id == $tour->destination_id ? 'selected' : '' }}>
                        {{ $destination->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Tour</button>
    </form>
@endsection
