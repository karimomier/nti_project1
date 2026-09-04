<?php
include_once "navbar.php"
?>



    
    <div class="card hero-card mb-5 border-0 shadow-sm">
        <div class="row g-0 align-items-center container mx-auto">
            <div class="col-md-6 p-4 p-lg-5">
                <h1 class="display-5 fw-bold mb-3">Good Coffee<br>Good Mood</h1>
                <p class="text-light opacity-75 fs-6 mb-4">
                    Start your day with the best coffee in town. Crafted freshly from organic beans every single morning.
                </p>
                <div class="d-flex gap-3">
                    <a href="menu.php" class="btn btn-outline-brown text-white border-white">Explore Menu</a>
                    <a href="login.php" class="btn btn-brown">Register</a>
                </div>
            </div>
            <div class="col-md-6 text-center p-3">
                <img src="coffe.jpg" class="img-fluid rounded-4 shadow" style="max-height: 350px; object-fit: cover;" alt="Coffee Hero">
            </div>
        </div>
    </div>

   
    <section id="about" class="container mb-5">
        <div class="text-center mb-4">
            <h2 class="section-title h3">About Us</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card border-0 shadow-sm p-3">
                    <div class="card-body text-center">
                        <h3 class="card-title fw-bold mb-3">Our Story</h3>
                        <p class="text-muted">
                            Brew Café was founded with a simple goal: to serve the best coffee using the finest beans and create a cozy place where people can relax and enjoy perfection in every cup.
                        </p>
                        <a href="about.php" class="btn btn-brown btn-sm mt-2">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section id="popular-items" class="container my-5">
        <div class="text-center mb-4">
            <h2 class="section-title h3">Our Popular Items</h2>
        </div>
        <div class="row g-4">
           
            <div class="col-md-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <img src="cappuccino.jpg" class="card-img-top card-menu-img" alt="Cappuccino">
                    <div class="card-body d-flex flex-column">
                        <h5 class="fw-bold fs-6 mb-1">Cappuccino</h5>
                        <p class="text-muted small mb-3">$3.50</p>
                        <a href="menu.php" class="btn btn-brown btn-sm mt-auto w-100">View Details</a>
                    </div>
                </div>
            </div>

           
            <div class="col-md-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <img src="latte.jpg" class="card-img-top card-menu-img" alt="Latte">
                    <div class="card-body d-flex flex-column">
                        <h5 class="fw-bold fs-6 mb-1">Latte</h5>
                        <p class="text-muted small mb-3">$3.00</p>
                        <a href="menu.php" class="btn btn-brown btn-sm mt-auto w-100">View Details</a>
                    </div>
                </div>
            </div>

            
            <div class="col-md-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <img src="mocha.jpg" class="card-img-top card-menu-img" alt="Mocha">
                    <div class="card-body d-flex flex-column">
                        <h5 class="fw-bold fs-6 mb-1">Mocha</h5>
                        <p class="text-muted small mb-3">$3.50</p>
                        <a href="menu.php" class="btn btn-brown btn-sm mt-auto w-100">View Details</a>
                    </div>
                </div>
            </div>

            
            <div class="col-md-3">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <img src="coldbrew.jpg" class="card-img-top card-menu-img" alt="Cold Brew">
                    <div class="card-body d-flex flex-column">
                        <h5 class="fw-bold fs-6 mb-1">Cold Brew</h5>
                        <p class="text-muted small mb-3">$4.00</p>
                        <a href="menu.php" class="btn btn-brown btn-sm mt-auto w-100">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
<?php
include_once "footer.php"
?>