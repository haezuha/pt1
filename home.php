<?php require_once 'header.php'; ?>

<?php require_once 'sidebar.php'; ?>

<div class="col bg-light">
    <div id="myBurger" class="p-3 d-lg-none text-white bg-dark">
        <div class="row">
            <a href="#" class="text-white text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#mySidebar">
                <i class="bi bi-list"></i><h5 class="ms-3 d-inline">EsooFit</h5>
            </a>
        </div>
    </div>

    <main class="bg-light p-3 p-md-4">
        <section class="d-flex align-items-center bg-dark bg-gradient text-white rounded-4 shadow-lg mb-4 p-4 p-md-5" aria-labelledby="welcome-title">
            <div class="p-md-4">
                <span class="small fw-bold text-uppercase text-warning">EsooFit · Chalk &amp; Straps</span>
                <h1 class="display-3 fw-bold mt-3 mb-3" id="welcome-title">Welcome to <span class="text-warning">EsooFit</span></h1>
                <p class="lead text-white-50 mb-4">
                    Gear up, grip strong, and make every rep count. Find the essentials
                    that help you show up ready for your next workout.
                </p>
                <div class="d-flex flex-wrap gap-2">
                    <a class="btn btn-warning btn-lg rounded-pill px-4" href="products.php">
                        Explore products <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                    <a class="btn btn-outline-light btn-lg rounded-pill px-4" href="orders.php">View orders</a>
                </div>
            </div>
        </section>

        <section class="bg-white border rounded-4 shadow-sm p-3 p-md-4 mb-4" aria-label="EsooFit highlights">
            <div class="row g-3">
                <div class="col-md-4 d-flex align-items-center gap-3">
                    <span class="d-inline-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-warning-subtle text-warning-emphasis p-3"><i class="bi bi-hand-thumbs-up fs-4"></i></span>
                    <div>
                        <h2 class="h6 fw-bold mb-1">Train with confidence</h2>
                        <p class="small text-muted mb-0">Reliable essentials for your routine</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center gap-3">
                    <span class="d-inline-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-warning-subtle text-warning-emphasis p-3"><i class="bi bi-lightning-charge fs-4"></i></span>
                    <div>
                        <h2 class="h6 fw-bold mb-1">Built for every rep</h2>
                        <p class="small text-muted mb-0">Chalk and straps for a stronger grip</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center gap-3">
                    <span class="d-inline-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-warning-subtle text-warning-emphasis p-3"><i class="bi bi-box-seam fs-4"></i></span>
                    <div>
                        <h2 class="h6 fw-bold mb-1">Easy inventory access</h2>
                        <p class="small text-muted mb-0">Browse products and manage orders</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white border rounded-4 shadow-sm p-3 p-md-4" aria-labelledby="featured-title">
            <div class="d-flex flex-wrap align-items-end justify-content-between gap-2 mb-3">
                <div>
                    <span class="small fw-bold text-uppercase text-warning-emphasis">Find your next essential</span>
                    <h2 class="h3 fw-bold mb-0 mt-1" id="featured-title">Featured gear</h2>
                </div>
                <a class="link-dark fw-semibold text-decoration-none" href="products.php">
                    Browse all products <i class="bi bi-arrow-right ms-1"></i>
                </a>
            </div>

            <div id="featuredGearCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#featuredGearCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#featuredGearCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#featuredGearCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <a class="card h-100 overflow-hidden text-decoration-none text-dark" href="products.php">
                                    <img class="img-fluid bg-light p-3" src="images/gym chalk 400g.png" alt="Gym chalk, 400 grams">
                                    <div class="card-body"><span class="small fw-bold text-uppercase text-warning-emphasis">Grip essential</span><h3 class="h5 fw-bold mt-1 mb-0">Gym Chalk</h3></div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="card h-100 overflow-hidden text-decoration-none text-dark" href="products.php">
                                    <img class="img-fluid bg-light p-3" src="images/black strap.png" alt="Black lifting straps">
                                    <div class="card-body"><span class="small fw-bold text-uppercase text-warning-emphasis">Stay secure</span><h3 class="h5 fw-bold mt-1 mb-0">Lifting Straps</h3></div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="card h-100 overflow-hidden text-decoration-none text-dark" href="products.php">
                                    <img class="img-fluid bg-light p-3" src="images/gym chalk liquid 400ml.png" alt="Liquid gym chalk, 400 milliliters">
                                    <div class="card-body"><span class="small fw-bold text-uppercase text-warning-emphasis">Ready to lift</span><h3 class="h5 fw-bold mt-1 mb-0">Liquid Chalk</h3></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <a class="card h-100 overflow-hidden text-decoration-none text-dark" href="products.php">
                                    <img class="img-fluid bg-light p-3" src="images/blue camo strap.png" alt="Blue camouflage lifting straps">
                                    <div class="card-body"><span class="small fw-bold text-uppercase text-warning-emphasis">Make it yours</span><h3 class="h5 fw-bold mt-1 mb-0">Blue Camo Straps</h3></div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="card h-100 overflow-hidden text-decoration-none text-dark" href="products.php">
                                    <img class="img-fluid bg-light p-3" src="images/gym chalk ball 200g.png" alt="Gym chalk ball, 200 grams">
                                    <div class="card-body"><span class="small fw-bold text-uppercase text-warning-emphasis">Keep a steady grip</span><h3 class="h5 fw-bold mt-1 mb-0">Chalk Ball</h3></div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="card h-100 overflow-hidden text-decoration-none text-dark" href="products.php">
                                    <img class="img-fluid bg-light p-3" src="images/red strap.png" alt="Red lifting straps">
                                    <div class="card-body"><span class="small fw-bold text-uppercase text-warning-emphasis">Lift in color</span><h3 class="h5 fw-bold mt-1 mb-0">Red Straps</h3></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <a class="card h-100 overflow-hidden text-decoration-none text-dark" href="products.php">
                                    <img class="img-fluid bg-light p-3" src="images/gym chalk 1kg.png" alt="Gym chalk, 1 kilogram">
                                    <div class="card-body"><span class="small fw-bold text-uppercase text-warning-emphasis">Stock up</span><h3 class="h5 fw-bold mt-1 mb-0">Bulk Gym Chalk</h3></div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="card h-100 overflow-hidden text-decoration-none text-dark" href="products.php">
                                    <img class="img-fluid bg-light p-3" src="images/yellow strap.png" alt="Yellow lifting straps">
                                    <div class="card-body"><span class="small fw-bold text-uppercase text-warning-emphasis">Bring the energy</span><h3 class="h5 fw-bold mt-1 mb-0">Yellow Straps</h3></div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="card h-100 overflow-hidden text-decoration-none text-dark" href="products.php">
                                    <img class="img-fluid bg-light p-3" src="images/gym chalk with bag 500g.png" alt="Gym chalk with a bag, 500 grams">
                                    <div class="card-body"><span class="small fw-bold text-uppercase text-warning-emphasis">Gym-bag ready</span><h3 class="h5 fw-bold mt-1 mb-0">Chalk with Bag</h3></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#featuredGearCarousel" data-bs-slide="prev" aria-label="Previous featured products">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#featuredGearCarousel" data-bs-slide="next" aria-label="Next featured products">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
        </section>
    </main>
</div>

<?php require_once 'footer.php'; ?>