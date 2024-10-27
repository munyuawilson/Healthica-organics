@extends("layouts.adminlayout")

@section('title', "Dashboard")



@section('content')



<div class="container mt-5">
    <h2 class="mb-4">Add New Product</h2>
    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Product Name -->
        <div class="form-group">
            <label for="name">Product Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter product name" required>
        </div>

        <!-- Product Description -->
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter product description" required></textarea>
        </div>

        <!-- Product Price -->
        <div class="form-group">
            <label for="price">Price (Ksh):</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Enter product price" min="0" required>
        </div>

        <!-- Product Image -->
        <div class="form-group">
            <label for="image">Product Image:</label>
            <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-success mt-3">
            <i class="fas fa-plus"></i> Add Product
        </button>
    </form>
</div>

@endsection