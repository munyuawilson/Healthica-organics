<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthica Organics</title>
    <!-- Bootstrap CSS -->
    <!-- Custom CSS -->
    <style>
       
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=News+Cycle:wght@400;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-12345abcde..." crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{asset('/css/app.css')}}">
<link rel="shortcut icon" href="{{ asset('/images/logo.jpeg') }}"  type="image/x-icon">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

   
@include('includes.nav')
<div id="cartPopup" class="">
    <p class="bg-success text-white px-5 pt-3 pb-3">Item added to the cart!</p>
</div>
    <!-- Hero Section -->
    <section class="hero-section ">
        <div class="container ">
            <h1>Welcome to Healthica Organics</h1>
            <p>Discover the best organic products for a healthy lifestyle.</p>
            <a href="#products" class="btn   mt-3  text-white" style="background-color:#006400">Shop Now</a>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="about-section" id="about">
        <div class="container text-center">
            <h2 class="main-color">About Us</h2>
            <p>At Healthica Organics, we are committed to providing natural and organic products that enhance your well-being. Our mission is to promote a healthier lifestyle through sustainable and eco-friendly practices.</p>
        </div>
    </section>

    <!-- Products Section -->
    <section class="products-section py-5" id="products">
    <div class="container">
        <h2 class="text-center mb-5">Our Featured Products</h2>
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-4 mb-4">
                        <div class="card product-card">
                            <img src="{{ asset('storage/public' . $product->image_path) }}" class="card-img-top" alt="{{ $product->image_path }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                                <p class="card-text"><strong>Price: Ksh {{ number_format($product->price, 2) }}</strong></p>
                                <a href="#" class="btn btn-success">Buy Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Pagination Links -->
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    {{ $products->links() }} <!-- This will render the pagination links -->
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Testimonials Section -->
    <section class="about-section">
        <div class="container">
            <h2 class="text-center mb-5">What Our Customers Say</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card testimonial-card p-3">
                        <p>"Healthica Organics has transformed my life! The organic honey is simply the best I've ever tasted." - Sarah J.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card testimonial-card p-3">
                        <p>"The herbal tea helps me relax every evening. I can't go a day without it!" - John M.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card testimonial-card p-3">
                        <p>"I love their skincare line. My skin feels so much healthier and looks radiant." - Emily R.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Highlights Section -->
    <section class="blog-section">
    <div class="container">
        <h2 class="text-center mb-5">From Our Blog</h2>
        <div class="row">
            <!-- Blog Post 1 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('images/vitamin.webp')}}" class="card-img-top" alt="Blog Image" height="200px">
                    <div class="card-body">
                        <h5 class="card-title">The Power of Vitamin E Oil</h5>
                        <p class="card-text">Uncover the incredible skin benefits of Vitamin E Oil and why it's a must-have in your skincare routine.</p>
                        <a href="#" class="btn btn-success">Read More</a>
                    </div>
                </div>
            </div>
            <!-- Blog Post 2 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('images/shea.jpg')}}" class="card-img-top" alt="Blog Image" height="200px" >
                    <div class="card-body">
                        <h5 class="card-title">Why Shea Butter is Essential for Your Skin</h5>
                        <p class="card-text">Explore the deep moisturizing properties of Shea Butter and how it can transform your skincare regimen.</p>
                        <a href="#" class="btn btn-success">Read More</a>
                    </div>
                </div>
            </div>
            <!-- Blog Post 3 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('images/beauty.jpg')}}"  class="card-img-top" alt="Blog Image" height="200px">
                    <div class="card-body">
                        <h5 class="card-title">Natural Ways to Enhance Your Beauty</h5>
                        <p class="card-text">Learn about simple and effective natural beauty tips that will enhance your skin's glow and health.</p>
                        <a href="#" class="btn btn-success">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Newsletter Subscription Section -->
    <section class="newsletter-section bg-success text-white text-center py-5">
        <div class="container">
            <h2>Stay Updated!</h2>
            <p>Subscribe to our newsletter for the latest updates and special offers.</p>
            <form class="form-inline justify-content-center">
                <div class="form-group mb-2">
                    <input type="email" class="form-control" placeholder="Enter your email">
                </div>
                <button type="submit" class="btn btn-light mb-2 ml-2">Subscribe</button>
            </form>
        </div>
    </section>
    


    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Healthica Organics. All Rights Reserved.</p>
            <div>
                <a href="#" class="text-white">Privacy Policy</a> | <a href="#" class="text-white">Terms of Service</a>
            </div>
        </div>
    </footer>

<script>
// Initialize cart from localStorage or set it as an empty array
let cart = JSON.parse(localStorage.getItem('cart')) || [];


    // Function to add a product to the cart
    function addToCart(id, name, price,description) {
    // Check if the item already exists in the cart
    const existingItem = cart.find(item => item.id === id);

    if (existingItem) {
        // If the item is already in the cart, increase its quantity
        existingItem.quantity += 1;
    } else {
        // Otherwise, add the new item to the cart
        cart.push({ id, name, price, quantity: 1 });
    }

    // Update localStorage with the updated cart
    localStorage.setItem('cart', JSON.stringify(cart));
    console.log(cart);
    updateItemCount(); 

    // Show the popup
    showPopup("Item added to the cart!");

   
}

// Function to display the popup with a message
function showPopup(message) {
    const popup = document.getElementById('cartPopup');
    popup.querySelector('p').textContent = message;
    
    // Show the popup
    popup.classList.add('show');

    // Hide the popup after 3 seconds
    setTimeout(() => {
        popup.classList.remove('show');
    }, 3000);
}

// Function to update the quantity of an item
function updateItemCount() {
    const itemCountElement = document.getElementById('itemCount');
    let totalItems = 0;

    // Calculate total number of items in the cart
    cart.forEach(item => {
        totalItems += item.quantity;
    });

    // Update the item count in the nav
    itemCountElement.textContent = totalItems;
}

// Function to remove an item from the cart
function removeCartItem(id) {
    cart = cart.filter(item => item.id !== id);
    
    // Update localStorage and cart summary
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCartSummary();
}
// Function to update the mini-cart summary
function updateCartSummary() {
    let itemCount = 0;
    let totalPrice = 0;

    // Calculate total items and price
    cart.forEach(item => {
        itemCount += item.quantity;
        totalPrice += item.quantity * item.price;
    });

    // Update the HTML with the new values
    document.getElementById('item-count').textContent = itemCount;
    document.getElementById('total-price').textContent = totalPrice.toFixed(2);
}

// Call the function initially to load the summary on page load
updateCartSummary();

function clearCart() {
    cart = [];
    localStorage.removeItem('cart');
    updateCartSummary();
}
</script>


    <script>
                var url = 'https://wati-integration-prod-service.clare.ai/v2/watiWidget.js?61220';
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = url;
                var options = {
                "enabled":true,
                "chatButtonSetting":{
                    "backgroundColor":"#00e785",
                    "ctaText":"Chat with us",
                    "borderRadius":"25",
                    "marginLeft": "0",
                    "marginRight": "20",
                    "marginBottom": "20",
                    "ctaIconWATI":false,
                    "position":"right"
                },
                "brandSetting":{
                    "brandName":"Wati",
                    "brandSubTitle":"undefined",
                    "brandImg":"https://www.wati.io/wp-content/uploads/2023/04/Wati-logo.svg",
                    "welcomeText":"Hi there!\nHow can I help you?",
                    "messageText":"",
                    "backgroundColor":"#00e785",
                    "ctaText":"Chat with us",
                    "borderRadius":"25",
                    "autoShow":false,
                    "phoneNumber":"254758215423"
                }
                };
                s.onload = function() {
                    CreateWhatsappChatWidget(options);
                };
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            </script>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
