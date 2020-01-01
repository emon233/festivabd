@include('front-end.theme-header')
<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    <div class="hero-slideshow owl-carousel">

        @foreach($advertises as $key=>$advertise)
        <!-- Single Slide -->
        <div class="single-slide mb-4">
            <!-- Background Image-->
            <div class="slide-bg-img bg-img" style="background-image: url({{ route('advertises.displayImage', $advertise->image) }});"></div>
            <!-- Welcome Text -->
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 col-lg-9">
                        <div class="welcome-text">
                            <h2 data-animation="fadeInUp" data-delay="300ms"><span>{{$advertise->title}}</span></h2>
                            <h4 data-animation="fadeInUp" data-delay="500ms">{{$advertise->footer}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</section>
<!-- ##### Hero Area End ##### -->
<!-- ##### Top Catagory Area Start ##### -->
<div class="top-catagory-area d-flex flex-wrap">
    <!-- Single Catagory -->
    <div class="single-catagory bg-img d-flex align-items-center justify-content-center jarallax" style="background-image: url(img/index-page/we-do-1.jpg);">
        <a href="#">Photography</a>
    </div>
    <!-- Single Catagory -->
    <div class="single-catagory bg-img d-flex align-items-center justify-content-center jarallax" style="background-image: url(img/index-page/we-do-2.jpg);">
        <a href="#">Cinematography</a>
    </div>
    <!-- Single Catagory -->
    <div class="single-catagory bg-img d-flex align-items-center justify-content-center jarallax" style="background-image: url(img/index-page/we-do-3.jpg);">
        <a href="#">Web<br>Development</a>
    </div>
    <!-- Single Catagory -->
    <div class="single-catagory bg-img d-flex align-items-center justify-content-center jarallax" style="background-image: url(img/index-page/we-do-4.jpg);">
        <a href="#">Software<br>Development</a>
    </div>
    <div class="single-catagory bg-img d-flex align-items-center justify-content-center jarallax" style="background-image: url(img/index-page/we-do-5.jpg);">
        <a href="#">Graphics<br>Design</a>
    </div>
    <!-- Single Catagory -->
    <div class="single-catagory bg-img d-flex align-items-center justify-content-center jarallax" style="background-image: url(img/index-page/we-do-6.jpg);">
        <a href="#">Digital<br>Marketing</a>
    </div>
</div>
<!-- ##### Top Catagory Area End ##### -->


<!-- ##### Portfolio Area Start ###### -->
<div class="pixel-portfolio-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                    <h2>Made by FESTIVA</h2>
                    <img src="img/festiva-logo-1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Menu -->
    <div class="pixel-projects-menu wow fadeInUp" data-wow-delay="200ms">
        <div class="text-center portfolio-menu">
            <button class="btn active" data-filter="*">All Projects</button>
            @foreach($categories as $category)
            <button class="btn" data-filter=".{{$category->id}}">{{$category->name}}</button>
            @endforeach
        </div>
    </div>

    <div class="pixel-portfolio">

        @foreach($galleries as $gallery)
        <!-- Single gallery Item -->
        <div class="single_gallery_item {{$gallery->category_id}} wow fadeInUp" data-wow-delay="0.2s">
            <img src="{{ route('galleries.displayImage', $gallery->galleryImages[0]->image) }}" alt="{{$gallery->album}}">
            <div class="hover-content text-center d-flex align-items-center justify-content-center">
                <div class="hover-text">
                    @foreach($gallery->galleryImages as $image)
                    <a href="{{ route('galleries.displayImage', $image->image) }}" class="zoom-img"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    @endforeach
                    <h4>{{$gallery->album}}</h4>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<br>
<br>
@include('front-end.theme-footer')