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

    <style>
        .home-page {
            --esoofit-orange: #f28a1c;
        }

        .welcome-hero {
            display: flex;
            min-height: 420px;
            align-items: center;
            overflow: hidden;
            border-radius: 1.25rem;
            background:
                linear-gradient(90deg, rgba(13, 15, 19, .94), rgba(13, 15, 19, .76) 48%, rgba(13, 15, 19, .32)),
                url("images/EsooFit logo.jpg") center 48% / cover no-repeat;
            color: #fff;
            box-shadow: 0 1rem 2.5rem rgba(15, 18, 24, .18);
        }

        .welcome-copy {
            max-width: 650px;
            padding: clamp(2rem, 6vw, 5rem);
            animation: welcome-rise .7s ease-out both;
        }

        .welcome-eyebrow {
            color: #ffad52;
            font-size: .78rem;
            font-weight: 700;
            letter-spacing: .2em;
            text-transform: uppercase;
        }

        .welcome-title {
            margin: .85rem 0 1rem;
            font-size: clamp(2.5rem, 5vw, 4.5rem);
            font-weight: 800;
            letter-spacing: -.045em;
            line-height: 1.05;
        }

        .welcome-title span { color: var(--esoofit-orange); }

        .welcome-description {
            max-width: 520px;
            color: rgba(255, 255, 255, .78);
            font-size: 1.05rem;
            line-height: 1.7;
        }

        .welcome-hero .btn-warning {
            background: var(--esoofit-orange);
            border-color: var(--esoofit-orange);
            color: #171717;
            font-weight: 700;
        }

        .home-section-title {
            font-weight: 750;
            letter-spacing: -.025em;
        }

        .feature-strip, .featured-panel {
            border: 1px solid rgba(20, 25, 32, .06);
            border-radius: 1rem;
            background: #fff;
            box-shadow: 0 .5rem 1.5rem rgba(20, 25, 32, .05);
        }

        .feature-icon {
            display: inline-flex;
            width: 2.75rem;
            height: 2.75rem;
            flex: 0 0 2.75rem;
            align-items: center;
            justify-content: center;
            border-radius: .85rem;
            background: rgba(242, 138, 28, .12);
            color: #d66b00;
            font-size: 1.25rem;
        }

        .featured-product {
            height: 100%;
            overflow: hidden;
            border: 1px solid #eceef1;
            border-radius: .9rem;
            transition: transform .2s ease, box-shadow .2s ease;
        }

        .featured-product:hover {
            transform: translateY(-4px);
            box-shadow: 0 .75rem 1.5rem rgba(20, 25, 32, .1);
        }

        .featured-product img {
            width: 100%;
            height: 190px;
            padding: 1rem;
            object-fit: contain;
            background: #f8f8f8;
        }

        .featured-carousel .carousel-item { padding: .5rem .25rem 1rem; }

        .featured-carousel .carousel-control-prev,
        .featured-carousel .carousel-control-next { width: 3rem; }

        .featured-carousel .carousel-control-prev-icon,
        .featured-carousel .carousel-control-next-icon {
            padding: 1rem;
            border-radius: 50%;
            background-color: #222;
            background-size: 55%;
        }

        @keyframes welcome-rise {
            from { opacity: 0; transform: translateY(18px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (prefers-reduced-motion: reduce) {
            .welcome-copy { animation: none; }
            .featured-product { transition: none; }
            .featured-product:hover { transform: none; }
        }
    </style>

    <main class="home-page p-3 p-md-4">
        <section class="welcome-hero mb-4" aria-labelledby="welcome-title">
            <div class="welcome-copy">
                <span class="welcome-eyebrow">EsooFit · Chalk &amp; Straps</span>
                <h1 class="welcome-title" id="welcome-title">Welcome to <span>EsooFit</span></h1>
                <p class="welcome-description mb-4">
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

        <section class="feature-strip p-3 p-md-4 mb-4" aria-label="EsooFit highlights">
            <div class="row g-3">
                <div class="col-md-4 d-flex align-items-center gap-3">
                    <span class="feature-icon"><i class="bi bi-hand-thumbs-up"></i></span>
                    <div>
                        <h2 class="h6 fw-bold mb-1">Train with confidence</h2>
                        <p class="small text-muted mb-0">Reliable essentials for your routine</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center gap-3">
                    <span class="feature-icon"><i class="bi bi-lightning-charge"></i></span>
                    <div>
                        <h2 class="h6 fw-bold mb-1">Built for every rep</h2>
                        <p class="small text-muted mb-0">Chalk and straps for a stronger grip</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center gap-3">
                    <span class="feature-icon"><i class="bi bi-box-seam"></i></span>
                    <div>
                        <h2 class="h6 fw-bold mb-1">Easy inventory access</h2>
                        <p class="small text-muted mb-0">Browse products and manage orders</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="featured-panel p-3 p-md-4" aria-labelledby="featured-title">
            <div class="d-flex flex-wrap align-items-end justify-content-between gap-2 mb-3">
                <div>
                    <span class="welcome-eyebrow">Find your next essential</span>
                    <h2 class="home-section-title h3 mb-0 mt-1" id="featured-title">Featured gear</h2>
                </div>
                <a class="link-dark fw-semibold text-decoration-none" href="products.php">
                    Browse all products <i class="bi bi-arrow-right ms-1"></i>
                </a>
            </div>

            <div id="featuredGearCarousel" class="carousel slide featured-carousel" data-bs-ride="carousel" data-bs-interval="5000">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#featuredGearCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#featuredGearCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#featuredGearCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <a class="card featured-product text-decoration-none text-dark" href="products.php">
                                    <img src="images/gym chalk 400g.png" alt="Gym chalk, 400 grams">
                                    <div class="card-body"><span class="small fw-bold text-uppercase text-warning-emphasis">Grip essential</span><h3 class="h5 fw-bold mt-1 mb-0">Gym Chalk</h3></div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="card featured-product text-decoration-none text-dark" href="products.php">
                                    <img src="images/black strap.png" alt="Black lifting straps">
                                    <div class="card-body"><span class="small fw-bold text-uppercase text-warning-emphasis">Stay secure</span><h3 class="h5 fw-bold mt-1 mb-0">Lifting Straps</h3></div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="card featured-product text-decoration-none text-dark" href="products.php">
                                    <img src="images/gym chalk liquid 400ml.png" alt="Liquid gym chalk, 400 milliliters">
                                    <div class="card-body"><span class="small fw-bold text-uppercase text-warning-emphasis">Ready to lift</span><h3 class="h5 fw-bold mt-1 mb-0">Liquid Chalk</h3></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <a class="card featured-product text-decoration-none text-dark" href="products.php">
                                    <img src="images/blue camo strap.png" alt="Blue camouflage lifting straps">
                                    <div class="card-body"><span class="small fw-bold text-uppercase text-warning-emphasis">Make it yours</span><h3 class="h5 fw-bold mt-1 mb-0">Blue Camo Straps</h3></div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="card featured-product text-decoration-none text-dark" href="products.php">
                                    <img src="images/gym chalk ball 200g.png" alt="Gym chalk ball, 200 grams">
                                    <div class="card-body"><span class="small fw-bold text-uppercase text-warning-emphasis">Keep a steady grip</span><h3 class="h5 fw-bold mt-1 mb-0">Chalk Ball</h3></div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="card featured-product text-decoration-none text-dark" href="products.php">
                                    <img src="images/red strap.png" alt="Red lifting straps">
                                    <div class="card-body"><span class="small fw-bold text-uppercase text-warning-emphasis">Lift in color</span><h3 class="h5 fw-bold mt-1 mb-0">Red Straps</h3></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <a class="card featured-product text-decoration-none text-dark" href="products.php">
                                    <img src="images/gym chalk 1kg.png" alt="Gym chalk, 1 kilogram">
                                    <div class="card-body"><span class="small fw-bold text-uppercase text-warning-emphasis">Stock up</span><h3 class="h5 fw-bold mt-1 mb-0">Bulk Gym Chalk</h3></div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="card featured-product text-decoration-none text-dark" href="products.php">
                                    <img src="images/yellow strap.png" alt="Yellow lifting straps">
                                    <div class="card-body"><span class="small fw-bold text-uppercase text-warning-emphasis">Bring the energy</span><h3 class="h5 fw-bold mt-1 mb-0">Yellow Straps</h3></div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="card featured-product text-decoration-none text-dark" href="products.php">
                                    <img src="images/gym chalk with bag 500g.png" alt="Gym chalk with a bag, 500 grams">
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