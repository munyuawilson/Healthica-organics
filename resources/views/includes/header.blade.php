<!-- resources/views/partials/admin/header.blade.php -->
<nav class="navbar navbar-expand-lg navbar-dark bg-black">
    <a class="navbar-brand" href="/admin"><img src="{{ asset('/images/logo.jpeg') }}"  alt="logo" height="50px" ></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <!-- Products Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="productsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-boxes"></i> Products
                </a>
                <div class="dropdown-menu" aria-labelledby="productsDropdown">
                    <a class="dropdown-item" href="{{route('addproduct')}}">
                        <i class="fas fa-plus"></i> Add Product
                    </a>
                    <a class="dropdown-item" href="">
                        <i class="fas fa-list"></i> View Products
                    </a>
                </div>
            </li>

            <!-- Customers Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="customersDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-users"></i> Customers
                </a>
                <div class="dropdown-menu" aria-labelledby="customersDropdown">
                    <a class="dropdown-item" href="">
                        <i class="fas fa-list"></i> View Customers
                    </a>
                </div>
            </li>

            <!-- Promotions Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="promotionsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-tags"></i> Promotions
                </a>
                <div class="dropdown-menu" aria-labelledby="promotionsDropdown">
                    <a class="dropdown-item" href="{{route('promotion')}}">
                        <i class="fas fa-plus"></i> Create Promotion
                    </a>
                    <a class="dropdown-item" href="">
                        <i class="fas fa-list"></i> View Promotions
                    </a>
                </div>
            </li>

            <!-- Blogs Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="blogsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-blog"></i> Blogs
                </a>
                <div class="dropdown-menu" aria-labelledby="blogsDropdown">
                    <a class="dropdown-item" href="{{route('create-blog')}}">
                        <i class="fas fa-plus"></i> Create Blog
                    </a>
                    <a class="dropdown-item" href="">
                        <i class="fas fa-list"></i> View Blogs
                    </a>
                </div>
            </li>

            <!-- Orders Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="ordersDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-shopping-cart"></i> Orders
                </a>
                <div class="dropdown-menu" aria-labelledby="ordersDropdown">
                    <a class="dropdown-item" href="}">
                        <i class="fas fa-list"></i> View Orders
                    </a>
                </div>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <!-- User Profile and Logout -->
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-user-circle"></i> Profile
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </li>
        </ul>
    </div>
</nav>
