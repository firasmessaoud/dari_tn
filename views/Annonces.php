

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Nos annonces</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Nos annonces</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Properties section body start -->
<div class="properties-section-body content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <!-- Option bar start -->
                
                <!-- grid properties start -->
                <div class="row">
                    <?php foreach($Annonces as $annonce): ?>
                    <div class="col-lg-4 col-md-6 col-sm-12" >
                        <div class="property-box">
                            <div class="property-thumbnail">
                                <a href="properties-details.html" class="property-img">
                                    <div class="-badges">
                                        
                                    </div>
                                    
                                    <img class="d-block w-100" src="assets/img/properties/properties-1.jpg" alt="properties">
                                  </a>
                            </div>
                            <div class="detail">
                                <h1 class="title">
                                    <a href="properties-details.html"><?php echo $annonce->getTitre_annonce(); ?></a>
                                </h1>

                                <div class="location">
                                    <a href="properties-details.html">
                                        <i class="flaticon-pin"></i><?php echo $annonce->getRegion(); ?>
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
                                    <span>Prix</span> <?php echo $annonce->getPrix()."dt"; ?>
                                </li>
                            </ul>
                            <div class="footer">
                                <a href="#">
                                    <i class="flaticon-people"></i> XX
                                </a>
                                <span>
                                <i class="flaticon-calendar"></i>5 Days ago
                            </span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
                <!-- Page navigation start -->
              
            </div>
        </div>
    </div>
</div>
<!-- Properties section body end -->

