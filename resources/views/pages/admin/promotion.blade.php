<!-- resources/views/admin/promotions/create_promotion.blade.php -->
@extends('layouts.adminlayout')
@section('Title','Promotion')
@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Create New Promotion</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Promotion Title -->
        <div class="form-group">
            <label for="title">Promotion Title:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter promotion title" required>
        </div>

        <!-- Promotion Description -->
        <div class="form-group">
            <label for="description">Promotion Description:</label>
            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter promotion details" required></textarea>
        </div>

        <!-- Promotion Image -->
        <div class="form-group">
            <label for="image">Promotion Image:</label>
            <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
        </div>

        <!-- Start Date -->
        <div class="form-group">
            <label for="start_date">Start Date:</label>
            <input type="date" class="form-control" id="start_date" name="start_date" required>
        </div>

        <!-- End Date -->
        <div class="form-group">
            <label for="end_date">End Date:</label>
            <input type="date" class="form-control" id="end_date" name="end_date" required>
        </div>

        <!-- Enable/Disable Promotion -->
        <div class="form-group">
            <label for="status">Enable Promotion:</label>
            <select class="form-control" id="status" name="status" required>
                <option value="1">Enabled</option>
                <option value="0">Disabled</option>
            </select>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-success mt-3">
            <i class="fas fa-plus"></i> Create Promotion
        </button>
    </form>
</div>
@endsection
