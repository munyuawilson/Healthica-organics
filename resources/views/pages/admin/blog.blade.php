<!-- resources/views/admin/promotions/create_promotion.blade.php -->
@extends('layouts.adminlayout')
@section('Title','Promotion')
@section('content')


<!-- Create the editor container -->
<div class="container mt-5">
    <h2 class="mb-4">Create New Blog Post</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Blog Title -->
        <div class="form-group">
            <label for="title">Blog Title:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter blog title" required>
        </div>

        <div class="form-group">
            <label for="image">Blog Image:</label>
            <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
        </div>


        <!-- Small Description -->
        <div class="form-group">
            <label for="description">Small Description:</label>
            <textarea class="form-control" id="description" name="description" rows="2" placeholder="Enter a short description" required></textarea>
        </div>

        <!-- Author -->
        <div class="form-group">
            <label for="author">Author:</label>
            <input type="text" class="form-control" id="author" name="author" placeholder="Enter author name" required>
        </div>

        <!-- Blog Content using Quill Editor -->
        <div class="form-group">
            <label for="content">Blog Content:</label>
            <div id="editor">
                <p>Enter your blog content here...</p>
            </div>
            <!-- Hidden input to store Quill content in HTML format -->
            <input type="hidden" id="content" name="content">
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mt-3">
            <i class="fas fa-plus"></i> Publish Blog
        </button>
    </form>
</div>
<!-- Include the Quill library -->
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
  const quill = new Quill('#editor', {
    theme: 'snow'
  });
</script>



@endsection
