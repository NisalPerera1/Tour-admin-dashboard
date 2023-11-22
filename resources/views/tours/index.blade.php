<!-- resources/views/tours/index.blade.php -->

@extends('layouts.layout')

@section('title', 'Tours')

@section('content')
    <h2>All Tours</h2>
    <a href="{{ route('tours.create') }}" class="btn btn-primary">Add New Tour</a>

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

    @if (count($tours) > 0)
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Number of Days</th>
                    <th>Description</th>
                    <th>Destinations</th>

                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tours as $tour)
                    <tr>
                        <td>{{ $tour->id }}</td>
                        <td>{{ $tour->name }}</td>
                        <td>{{ $tour->number_of_days }}</td>
                        <td>{{ $tour->description }}</td>
                        <td>{{ $tour->destinations }}</td>

                        <td>{{ $tour->price }}</td>
                        <td>
                            <a href="{{ route('tours.show', $tour) }}" class="btn btn-sm btn-primary">Show</a>
                            <a href="{{ route('tours.edit', $tour) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('tours.destroy', $tour) }}" method="post" style="display:inline;">
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
        <p>No tours available.</p>
    @endif
@endsection
