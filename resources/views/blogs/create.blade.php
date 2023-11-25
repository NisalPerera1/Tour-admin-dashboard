<!-- resources/views/blogs/create.blade.php -->

@extends('layouts.layout') {{-- Assuming you have a layout file --}}

@section('content')
    <h1>Create a New Blog</h1>


    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
    Create Blog
</button>

<!-- Modal -->
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Your form goes here -->
            <form id="createBlogForm" method="post" action="{{ route('blogs.store') }}">
                @csrf
                <!-- Include form fields for blog attributes -->
                <div class="form-group">
            <label for="name">Blog Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="author">Author:</label>
            <input type="text" name="author" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="content">Content:</label>
            <textarea name="content" class="form-control" required></textarea>
        </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</div>

<script>
    $('#createBlogForm').submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function (data) {
                $('#createModal').modal('hide');
                // You can update the page content or show a success message
            },
            error: function (data) {
                // Handle errors, show validation messages, etc.
            }
        });
    });
</script>

@endsection
