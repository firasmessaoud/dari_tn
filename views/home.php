<!-- Banner start -->
<div class="banner" id="banner">
    <div id="bannerCarousole" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item banner-max-height active">
                <img class="d-block w-100" src="assets/img/banner/banner-2.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container">
                        <div class="text-center">
                            <h3 class="text-uppercase">Trouve votre maison de rêves </h3>
                            <p>
                                Que de la qualité
                            </p>
                            <form action="?controller=annonces&action=recherche" method="post">
                                <div  class="inline-search-area ml-auto mr-auto d-none d-xl-block d-lg-block">
                                    <div style="margin-left:75px" class="row">
                                        
                                        <div  class="col-xl-5 col-lg-5 col-sm-4 col-6 search-col">
                                            <select class="selectpicker search-fields" name="type">
                                                <option value="all">Tout type</option>
                                                <option value="Appartement">Apartement</option>
                                                <option value="Chalet">chalet</option>
                                                <option value="Studio">Studio</option>
                                                <option value="Villa">Villa</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-5 col-lg-5 col-sm-4 col-6 search-col">
                                            <select class="selectpicker search-fields" name="region">
                                                <option value="all">ville</option>
                                                <option value="tunis">Tunis</option>
                                                <option value="bizerte">Bizerte</option>
                                                <option value ="sousse">Sousse</option>
                                                <option value="hammamet">Hammamet</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-2 col-lg-2 col-sm-4 col-6 search-col">
                                            <button class="btn button-theme btn-search btn-block">
                                                <i class="fa fa-search"></i><strong>Trouver</strong>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <a class="carousel-control-prev" href="#bannerCarousole" role="button" data-slide="prev">
            <span class="slider-mover-left" aria-hidden="true">
                <i class="fa fa-angle-left"></i>
            </span>
        </a>
        <a class="carousel-control-next" href="#bannerCarousole" role="button" data-slide="next">
            <span class="slider-mover-right" aria-hidden="true">
                <i class="fa fa-angle-right"></i>
            </span>
        </a>
    </div>
    <div class="container search-options-btn-area">
        <a class="search-options-btn d-lg-none d-xl-none">
            <div class="search-options d-none d-xl-block d-lg-block">Search Options</div>
            <div class="icon"><i class="fa fa-chevron-up"></i></div>
        </a>
    </div>
</div>
<!-- Banner end -->

<!-- Search Section start -->
<div class="search-section search-area pb-hediin-12 bg-grea animated fadeInDown" id="search-style-1">
    <div class="container">
        <div class="search-section-area">
            <div class="search-area-inner">
                <div class="search-contents">
                    <form method="GET">
                        <div class="row">
                            
                            <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="all-type">
                                        <option>tout type</option>
                                        <option>apartements</option>
                                        <option>chalet</option>
                                        <option>Restaurant</option>
                                        <option>Villa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="chambres">
                                        <option>chambres</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="bathrooms">
                                        <option>salle de bains</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="location">
                                        <option>ville</option>
                                        <option>Tunis</option>
                                        <option>Bizerte</option>
                                        <option>sousse</option>
                                        <option>Hammamet</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <button class="search-button">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Search Section end -->

<!-- Featured Properties start -->
<div class="featured-properties content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Featured Properties</h1>
            <p>trouver your properties in your city</p>
        </div>
        <!-- Slick slider area start -->
        <div class="slick-slider-area">
                    <div class="row slick-carousel" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                        
                        <div class="slick-slide-item">
                            <div class="property-box">
                                <div class="property-thumbnail">
                                    <a href="properties-details.html" class="property-img">
                                        <div class="listing-badges">
                                            <span class="featured">Featured</span>
                                        </div>
                                        <div class="price-box"><span>$850.00</span> Per month</div>
                                        <img class="d-block w-100" src="assets/img/properties/properties-1.jpg" alt="properties">
                                    </a>
                                </div>
                                <div class="detail">
                                                <h1 class="title">
                                                    <a href="properties-details.html">Modern Family Home  </a>
                                                </h1>

                                                <div class="location">
                                                    <a href="properties-details.html">
                                                        <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                                    </a>
                                                </div>
                                </div>
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <span>Area</span>3600 Sqft
                                    </li>
                                    <li>
                                        <span>Beds</span> 3
                                    </li>
                                    <li>
                                        <span>Baths</span> 2
                                    </li>
                                    <li>
                                        <span>Garage</span> 1
                                    </li>
                                </ul>
                                <div class="footer">
                                    <a href="#">
                                        <i class="flaticon-people"></i> Jhon Doe
                                    </a>
                                    <span>
                                        <i class="flaticon-calendar"></i>5 Days ago
                                    </span>
                                </div>
                            </div>
                        </div>
                    <!-- DEUXIEME SLIDE  -->
                    <div class="slick-slide-item">
                            <div class="property-box">
                                <div class="property-thumbnail">
                                    <a href="properties-details.html" class="property-img">
                                        <div class="listing-badges">
                                            <span class="featured">Featured</span>
                                        </div>
                                        <div class="price-box"><span>$850.00</span> Per month</div>
                                        <img class="d-block w-100" src="assets/img/properties/properties-2.jpg" alt="properties">
                                    </a>
                                </div>
                                <div class="detail">
                                                <h1 class="title">
                                                    <a href="properties-details.html">Modern Family Home  </a>
                                                </h1>

                                                <div class="location">
                                                    <a href="properties-details.html">
                                                        <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                                    </a>
                                                </div>
                                </div>
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <span>Area</span>3600 Sqft
                                    </li>
                                    <li>
                                        <span>Beds</span> 3
                                    </li>
                                    <li>
                                        <span>Baths</span> 2
                                    </li>
                                    <li>
                                        <span>Garage</span> 1
                                    </li>
                                </ul>
                                <div class="footer">
                                    <a href="#">
                                        <i class="flaticon-people"></i> Jhon Doe
                                    </a>
                                    <span>
                                        <i class="flaticon-calendar"></i>5 Days ago
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- 3EME SLIDE -->
                        <div class="slick-slide-item">
                            <div class="property-box">
                                <div class="property-thumbnail">
                                    <a href="properties-details.html" class="property-img">
                                        <div class="listing-badges">
                                            <span class="featured">Featured</span>
                                        </div>
                                        <div class="price-box"><span>$850.00</span> Per month</div>
                                        <img class="d-block w-100" src="assets/img/properties/properties-3.jpg" alt="properties">
                                    </a>
                                </div>
                                <div class="detail">
                                                <h1 class="title">
                                                    <a href="properties-details.html">Modern Family Home  </a>
                                                </h1>

                                                <div class="location">
                                                    <a href="properties-details.html">
                                                        <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                                    </a>
                                                </div>
                                </div>
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <span>Area</span>3600 Sqft
                                    </li>
                                    <li>
                                        <span>Beds</span> 3
                                    </li>
                                    <li>
                                        <span>Baths</span> 2
                                    </li>
                                    <li>
                                        <span>Garage</span> 1
                                    </li>
                                </ul>
                                <div class="footer">
                                    <a href="#">
                                        <i class="flaticon-people"></i> Jhon Doe
                                    </a>
                                    <span>
                                        <i class="flaticon-calendar"></i>5 Days ago
                                    </span>
                                </div>
                            </div>
                        </div>

                <!-- 4EME SLIDE -->
                <div class="slick-slide-item">
                            <div class="property-box">
                                <div class="property-thumbnail">
                                    <a href="properties-details.html" class="property-img">
                                        <div class="listing-badges">
                                            <span class="featured">Featured</span>
                                        </div>
                                        <div class="price-box"><span>$850.00</span> Per month</div>
                                        <img class="d-block w-100" src="assets/img/properties/properties-5.jpg" alt="properties">
                                    </a>
                                </div>
                                <div class="detail">
                                                <h1 class="title">
                                                    <a href="properties-details.html">Modern Family Home  </a>
                                                </h1>

                                                <div class="location">
                                                    <a href="properties-details.html">
                                                        <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                                    </a>
                                                </div>
                                </div>
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <span>Area</span>3600 Sqft
                                    </li>
                                    <li>
                                        <span>Beds</span> 3
                                    </li>
                                    <li>
                                        <span>Baths</span> 2
                                    </li>
                                    <li>
                                        <span>Garage</span> 1
                                    </li>
                                </ul>
                                <div class="footer">
                                    <a href="#">
                                        <i class="flaticon-people"></i> Jhon Doe
                                    </a>
                                    <span>
                                        <i class="flaticon-calendar"></i>5 Days ago
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                    

                    
            <div class="slick-prev slick-arrow-buton">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="slick-next slick-arrow-buton">
                <i class="fa fa-angle-right"></i>
            </div>
        </div>
    </div>
</div>
<!-- Featured Properties end -->

<!-- Services start -->
<div class="services content-area bg-grea-3">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1>Working with the Reality</h1>
            <p>Who you work with matters</p>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="service-info">
                    <div class="icon">
                        <i class="flaticon-user"></i>
                    </div>
                    <h3>Personalized Service</h3>
                    <p>Que de la qualité tempor incididunt</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="service-info">
                    <div class="icon">
                        <i class="flaticon-apartment-1"></i>
                    </div>
                    <h3>Luxury Real Estate Experts</h3>
                    <p>Que de la qualité tempor incididunt</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 d-none d-xl-block d-lg-block">
                <div class="service-info">
                    <div class="icon">
                        <i class="flaticon-discount"></i>
                    </div>
                    <h3>Modern Building For Rent $ Sell</h3>
                    <p>Que de la qualité tempor incididunt</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services end -->


<!-- Partners strat -->
<div class="partners">
    <div class="container">
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 5, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 3}}, {"breakpoint": 768,"settings":{"slidesToShow": 2}}]}'>
                <div class="slick-slide-item"><img src="assets/img/brand/brand-1.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="assets/img/brand/brand-2.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="assets/img/brand/brand-3.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="assets/img/brand/brand-4.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="assets/img/brand/brand-1.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="assets/img/brand/brand-2.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="assets/img/brand/brand-3.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="assets/img/brand/brand-4.png" alt="brand" class="img-fluid"></div>
            </div>
        </div>
    </div>
</div>
<!-- Partners end -->