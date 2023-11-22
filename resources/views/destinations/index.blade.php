<!-- resources/views/destinations/index.blade.php -->
@extends('layouts.layout')

@section('title', 'Destinations')

@section('content')
    <h2>All Destinations</h2>
    <a href="{{ route('destinations.create') }}" class="btn btn-primary">Add New Destination</a>

    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger mt-3">
            {{ session('error') }}
        </div>
    @endif

    @if (count($destinations) > 0)
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($destinations as $destination)
                    <tr>
                        <td>{{ $destination->id }}</td>
                        <td>{{ $destination->name }}</td>
                        <td>{{ $destination->location }}</td>
                        <td>{{ $destination->description }}</td>
                        <td>
                            <a href="{{ route('destinations.show', $destination) }}" class="btn btn-sm btn-primary">Show</a>
                            <a href="{{ route('destinations.edit', $destination) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('destinations.destroy', $destination) }}" method="post" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No destinations available.</p>
    @endif
@endsection
