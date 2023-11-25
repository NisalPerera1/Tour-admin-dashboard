<!-- resources/views/blogs/index.blade.php -->

@extends('layouts.layout')

@section('title', 'Blogs')

@section('content')
    <h2>All Blogs</h2>
    <a href="{{ route('blogs.create') }}" class="btn btn-primary">Add New Blog</a>

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

    @if (count($blogs) > 0)
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Author</th>
                    <th>Date</th>
                    <th>Featured Image</th>
                    {{-- Add more columns as needed --}}
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                    <tr>
                        <td>{{ $blog->id }}</td>
                        <td>{{ $blog->name }}</td>
                        <td>{{ $blog->author }}</td>
                        <td>{{ $blog->created_at->format('F j, Y') }}</td>
                        <td>{{ $blog->featured_image }}</td>
                        {{-- Add more columns as needed --}}
                        <td>
                            <a href="{{ route('blogs.show', $blog) }}" class="btn btn-sm btn-primary">Show</a>
                            <a href="{{ route('blogs.edit', $blog) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('blogs.destroy', $blog) }}" method="post" style="display:inline;">
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
        <p>No blogs available.</p>
    @endif
@endsection
