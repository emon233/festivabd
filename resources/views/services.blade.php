@include('front-end.theme-header')

<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/8.jpg);">
    <div class="container-fluid h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>Services</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Services Catagory Area Start ##### -->
<div class="services-catagory-area d-flex flex-wrap">
    <!-- Single Service Catagory -->
    <div class="single-service-cata bg-img d-flex align-items-center justify-content-center jarallax" style="background-image: url(img/bg-img/19.jpg);">
        <a href="#">VR / AR</a>
    </div>
    <!-- Single Service Catagory -->
    <div class="single-service-cata bg-img d-flex align-items-center justify-content-center jarallax" style="background-image: url(img/bg-img/20.jpg);">
        <a href="#">Artificial <br> Inteligence</a>
    </div>
    <!-- Single Service Catagory -->
    <div class="single-service-cata bg-img d-flex align-items-center justify-content-center jarallax" style="background-image: url(img/bg-img/21.jpg);">
        <a href="#">User <br> Experience</a>
    </div>
</div>
<!-- ##### Services Catagory Area End ##### -->

<!-- ##### Services Block Area Start ##### -->
<section class="services-block-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <!-- Single Service Block -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-service-block mb-100 wow fadeInUp" data-wow-delay="100ms">
                    <h4>vision</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut hendrerit, elit pulvinar interdum dapibus, est dui convallis orci, vel gravida erat ante in sapien.</p>
                </div>
            </div>
            <!-- Single Service Block -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-service-block mb-100 wow fadeInUp" data-wow-delay="300ms">
                    <h4>future</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut hendrerit, elit pulvinar interdum dapibus, est dui convallis orci, vel gravida erat ante in sapien.</p>
                </div>
            </div>
            <!-- Single Service Block -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-service-block mb-100 wow fadeInUp" data-wow-delay="500ms">
                    <h4>intelligence</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut hendrerit, elit pulvinar interdum dapibus, est dui convallis orci, vel gravida erat ante in sapien.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Services Block Area End ##### -->

<!-- ##### Prices Area Start ##### -->
<section class="pixel-prices-area d-flex flex-wrap section-padding-100">

    @foreach($packages as $package)
    <!-- Single Price Table Area -->
    <div class="single-price-table-area mb-100">
        <div class="price-value">
            <h2><span>{{$package->rate}}</span><span></span></h2>
        </div>
        <h2>{{$package->name}}</h2>
        <ul class="price-desc">
            @foreach($package->features as $feature)
            <li>{{$feature->text}}</li>
            @endforeach
        </ul>
    </div>
    @endforeach

</section>
<!-- ##### Prices Area End ##### -->

<!-- ##### Service Area Start ##### -->
<section class="pixel-service-area">
    <div class="container">
        <div class="row">
            <!-- Single Service Area -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="single-service-area text-center mb-100 wow fadeInUp" data-wow-delay="100ms">
                    <img src="img/core-img/cursor.png" alt="">
                    <h5>Light Weight &amp; Fast</h5>
                    <p>Morbi tempus lobortis nunc non commodo. Pellentesque habitant morbi tristique senectus et netus et.</p>
                    <a href="#" class="btn">More Info</a>
                </div>
            </div>

            <!-- Single Service Area -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="single-service-area text-center mb-100 wow fadeInUp" data-wow-delay="200ms">
                    <img src="img/core-img/monitor.png" alt="">
                    <h5>Responsive &amp; Retina Ready</h5>
                    <p>Morbi tempus lobortis nunc non commodo. Pellentesque habitant morbi tristique senectus et netus et.</p>
                    <a href="#" class="btn">More Info</a>
                </div>
            </div>

            <!-- Single Service Area -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="single-service-area text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                    <img src="img/core-img/presentation.png" alt="">
                    <h5>Documentation</h5>
                    <p>Morbi tempus lobortis nunc non commodo. Pellentesque habitant morbi tristique senectus et netus et.</p>
                    <a href="#" class="btn">More Info</a>
                </div>
            </div>

            <!-- Single Service Area -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="single-service-area text-center mb-100 wow fadeInUp" data-wow-delay="400ms">
                    <img src="img/core-img/settings.png" alt="">
                    <h5>Customizable</h5>
                    <p>Morbi tempus lobortis nunc non commodo. Pellentesque habitant morbi tristique senectus et netus et.</p>
                    <a href="#" class="btn">More Info</a>
                </div>
            </div>
            <!-- Single Service Area -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="single-service-area text-center mb-100 wow fadeInUp" data-wow-delay="100ms">
                    <img src="img/core-img/cursor.png" alt="">
                    <h5>Light Weight &amp; Fast</h5>
                    <p>Morbi tempus lobortis nunc non commodo. Pellentesque habitant morbi tristique senectus et netus et.</p>
                    <a href="#" class="btn">More Info</a>
                </div>
            </div>

            <!-- Single Service Area -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="single-service-area text-center mb-100 wow fadeInUp" data-wow-delay="200ms">
                    <img src="img/core-img/monitor.png" alt="">
                    <h5>Responsive &amp; Retina Ready</h5>
                    <p>Morbi tempus lobortis nunc non commodo. Pellentesque habitant morbi tristique senectus et netus et.</p>
                    <a href="#" class="btn">More Info</a>
                </div>
            </div>

            <!-- Single Service Area -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="single-service-area text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                    <img src="img/core-img/presentation.png" alt="">
                    <h5>Documentation</h5>
                    <p>Morbi tempus lobortis nunc non commodo. Pellentesque habitant morbi tristique senectus et netus et.</p>
                    <a href="#" class="btn">More Info</a>
                </div>
            </div>

            <!-- Single Service Area -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="single-service-area text-center mb-100 wow fadeInUp" data-wow-delay="400ms">
                    <img src="img/core-img/settings.png" alt="">
                    <h5>Customizable</h5>
                    <p>Morbi tempus lobortis nunc non commodo. Pellentesque habitant morbi tristique senectus et netus et.</p>
                    <a href="#" class="btn">More Info</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Service Area End ##### -->

@include('front-end.theme-footer')