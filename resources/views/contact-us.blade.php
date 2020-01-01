@include('front-end.theme-header')

<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/8.jpg);">
    <div class="container-fluid h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>Contact</h2>
                </div>
            </div>
        </div>
    </div>
    <!--Email Reporting Section-->
    @if(session('success'))
        <div class="alert alert-success" id="div-operation-success">
            {{session('success')}}
        </div>
    @endif
    <!--Email Reporting Section-->
</section>
<!-- ##### Breadcrumb Area End ##### -->



<!-- ##### Contact Area Start ##### -->
<section class="contact-area section-padding-100-0">
    <div class="container">
        <div class="row">

            <!-- Single Contact Area -->
            <div class="col-12 col-lg-4">
                <!-- Contact Content -->
                <div class="contact-content mb-100">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2>Where?</h2>
                        <h6>Our Address</h6>
                    </div>

                    <!-- Single Contact Content -->
                    <div class="single-contact-content d-flex">
                        <div class="icon">
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <h6>Address</h6>
                            <p>132 Basupara Main Road<br> Moylapota, Khulna </p>
                        </div>
                    </div>

                    <!-- Single Contact Content -->
                    <div class="single-contact-content d-flex">
                        <div class="icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="text">
                            <h6>Email</h6>
                            <p>shahirul.kabir@gmail.com</p>
                        </div>
                    </div>

                    <!-- Single Contact Content -->
                    <div class="single-contact-content d-flex">
                        <div class="icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="text">
                            <h6>Phone</h6>
                            <p>+880 1718 03 18 08</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Contact Area -->
            <div class="col-12 col-lg-8">
                <!-- Section Heading -->
                <div class="section-heading">
                    <h2>Get In Touch</h2>
                    <h6>Drop us a few lines</h6>
                </div>

                <!-- Contact Form -->
                <div class="contact-form-area mb-100">
                    <form method="get" action="/send-message" >
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                        <input type="email" name="email" class="form-control" placeholder="E-mail">
                        <input type="text" name="phone" class="form-control" placeholder="Phone Number" required>
                        <input type="name" name="facebook" class="form-control" placeholder="Facebook Name">
                        <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                        <textarea name="message" class="form-control" placeholder="Message" required></textarea>
                        <button type="submit" class="btn pixel-btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Contact Area End ##### -->

@include('front-end.theme-footer')