<?php $__env->startSection('content'); ?>
<!-- Teaser start -->
<section id="teaser">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-xs-12 pull-right">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides start -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <h1 class="title">Luxury car from from $28 day
                                <span class="subtitle">Treat yourself in USA</span></h1>
                            <div class="car-img">
                                <img src="<?php echo e(url('images/car1.png')); ?>" class="img-responsive" alt="car1">
                            </div>
                        </div>
                        <div class="item">
                            <h1 class="title">Get 15% off your rental
                                <span class="subtitle">Plan your trip now</span></h1>
                            <div class="car-img">
                                <img src="<?php echo e(url('images/car2.png')); ?>" class="img-responsive" alt="car1">
                            </div>
                        </div>
                    </div>
                    <!-- Wrapper for slides end -->

                    <!-- Slider Controls start -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    <!-- Slider Controls end -->
                </div>
            </div>
            <div class="col-md-5 col-xs-12 pull-left">
                <div class="reservation-form-shadow">

                    <form action="#" method="POST" name="car-select-form" id="car-select-form">
                        <div class="alert alert-danger hidden" id="car-select-form-msg">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <strong>Note:</strong> All fields required!
                        </div>

                        <!-- Car select start -->
                        <div class="styled-select-car">
                            <select name="car-select" id="car-select">
                                <option value="">Select your car type</option>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($s_data->id); ?>" the_image="<?php echo e(url('images/'.$s_data->image)); ?>"><?php echo e($s_data->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <!-- Car select end -->

                        <!-- Pick-up location start -->
                        <div class="location">
                            <div class="input-group pick-up">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span> Pick-up</span>
                                <input type="text" name="pick-up-location" id="pick-up-location" class="form-control autocomplete-location" placeholder="Enter a City or Airport">
                            </div>
                            <!-- Pick-up location end -->

                            <a class="different-drop-off" href="#">Need a different drop-off location?</a>

                            <!-- Drop-off location start -->
                            <div class="input-group drop-off">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span> Drop-off</span>
                                <input type="text" name="drop-off-location" id="drop-off-location" class="form-control autocomplete-location" placeholder="Enter a City or Airport">
                            </div>
                        </div>
                        <!-- Drop-off location end -->

                        <!-- Pick-up date/time start -->
                        <div class="datetime pick-up">
                            <div class="date pull-left">
                                <div class="input-group">
                                    <span class="input-group-addon pixelfix"><span class="glyphicon glyphicon-calendar"></span> Pick-up</span>
                                    <input type="text" readonly="true" name="pick-up-date" id="pick-up-date" class="form-control datepicker" placeholder="mm/dd/yyyy">
                                </div>
                            </div>
                            <div class="time pull-right">
                                <div class="styled-select-time">
                                    <select name="pick-up-time" id="pick-up-time">
                                        <option value="12:00 AM">12:00 AM</option>
                                        <option value="12:30 AM">12:30 AM</option>
                                        <option value="01:00 AM">01:00 AM</option>
                                        <option value="01:30 AM">01:30 AM</option>
                                        <option value="02:00 AM">02:00 AM</option>
                                        <option value="02:30 AM">02:30 AM</option>
                                        <option value="03:00 AM">03:00 AM</option>
                                        <option value="03:30 AM">03:30 AM</option>
                                        <option value="04:00 AM">04:00 AM</option>
                                        <option value="04:30 AM">04:30 AM</option>
                                        <option value="05:00 AM">05:00 AM</option>
                                        <option value="05:30 AM">05:30 AM</option>
                                        <option value="06:00 AM">06:00 AM</option>
                                        <option value="06:30 AM">06:30 AM</option>
                                        <option value="07:00 AM">07:00 AM</option>
                                        <option value="07:30 AM">07:30 AM</option>
                                        <option value="08:00 AM">08:00 AM</option>
                                        <option value="08:30 AM">08:30 AM</option>
                                        <option value="09:00 AM">09:00 AM</option>
                                        <option value="09:30 AM">09:30 AM</option>
                                        <option value="10:00 AM">10:00 AM</option>
                                        <option value="10:30 AM">10:30 AM</option>
                                        <option value="11:00 AM">11:00 AM</option>
                                        <option value="11:30 AM">11:30 AM</option>
                                        <option value="12:00 PM">12:00 PM</option>
                                        <option value="12:30 PM">12:30 PM</option>
                                        <option value="01:00 PM">01:00 PM</option>
                                        <option value="01:30 PM">01:30 PM</option>
                                        <option value="02:00 PM">02:00 PM</option>
                                        <option value="02:30 PM">02:30 PM</option>
                                        <option value="03:00 PM">03:00 PM</option>
                                        <option value="03:30 PM">03:30 PM</option>
                                        <option value="04:00 PM">04:00 PM</option>
                                        <option value="04:30 PM">04:30 PM</option>
                                        <option value="05:00 PM">05:00 PM</option>
                                        <option value="05:30 PM">05:30 PM</option>
                                        <option value="06:00 PM">06:00 PM</option>
                                        <option value="06:30 PM">06:30 PM</option>
                                        <option value="07:00 PM">07:00 PM</option>
                                        <option value="07:30 PM">07:30 PM</option>
                                        <option value="08:00 PM">08:00 PM</option>
                                        <option value="08:30 PM">08:30 PM</option>
                                        <option value="09:00 PM">09:00 PM</option>
                                        <option value="09:30 PM">09:30 PM</option>
                                        <option value="10:00 PM">10:00 PM</option>
                                        <option value="10:30 PM">10:30 PM</option>
                                        <option value="11:00 PM">11:00 PM</option>
                                        <option value="11:30 PM">11:30 PM</option>
                                    </select>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- Pick-up date/time end -->

                        <!-- Drop-off date/time start -->
                        <div class="datetime drop-off">
                            <div class="date pull-left">
                                <div class="input-group">
                                    <span class="input-group-addon pixelfix"><span class="glyphicon glyphicon-calendar"></span> Drop-off</span>
                                    <input type="text" readonly="true" name="drop-off-date" id="drop-off-date" class="form-control datepicker" placeholder="mm/dd/yyyy">
                                </div>
                            </div>
                            <div class="time pull-right">
                                <div class="styled-select-time">
                                    <select name="drop-off-time" id="drop-off-time">
                                        <option value="12:00 AM">12:00 AM</option>
                                        <option value="12:30 AM">12:30 AM</option>
                                        <option value="01:00 AM">01:00 AM</option>
                                        <option value="01:30 AM">01:30 AM</option>
                                        <option value="02:00 AM">02:00 AM</option>
                                        <option value="02:30 AM">02:30 AM</option>
                                        <option value="03:00 AM">03:00 AM</option>
                                        <option value="03:30 AM">03:30 AM</option>
                                        <option value="04:00 AM">04:00 AM</option>
                                        <option value="04:30 AM">04:30 AM</option>
                                        <option value="05:00 AM">05:00 AM</option>
                                        <option value="05:30 AM">05:30 AM</option>
                                        <option value="06:00 AM">06:00 AM</option>
                                        <option value="06:30 AM">06:30 AM</option>
                                        <option value="07:00 AM">07:00 AM</option>
                                        <option value="07:30 AM">07:30 AM</option>
                                        <option value="08:00 AM">08:00 AM</option>
                                        <option value="08:30 AM">08:30 AM</option>
                                        <option value="09:00 AM">09:00 AM</option>
                                        <option value="09:30 AM">09:30 AM</option>
                                        <option value="10:00 AM">10:00 AM</option>
                                        <option value="10:30 AM">10:30 AM</option>
                                        <option value="11:00 AM">11:00 AM</option>
                                        <option value="11:30 AM">11:30 AM</option>
                                        <option value="12:00 PM">12:00 PM</option>
                                        <option value="12:30 PM">12:30 PM</option>
                                        <option value="01:00 PM">01:00 PM</option>
                                        <option value="01:30 PM">01:30 PM</option>
                                        <option value="02:00 PM">02:00 PM</option>
                                        <option value="02:30 PM">02:30 PM</option>
                                        <option value="03:00 PM">03:00 PM</option>
                                        <option value="03:30 PM">03:30 PM</option>
                                        <option value="04:00 PM">04:00 PM</option>
                                        <option value="04:30 PM">04:30 PM</option>
                                        <option value="05:00 PM">05:00 PM</option>
                                        <option value="05:30 PM">05:30 PM</option>
                                        <option value="06:00 PM">06:00 PM</option>
                                        <option value="06:30 PM">06:30 PM</option>
                                        <option value="07:00 PM">07:00 PM</option>
                                        <option value="07:30 PM">07:30 PM</option>
                                        <option value="08:00 PM">08:00 PM</option>
                                        <option value="08:30 PM">08:30 PM</option>
                                        <option value="09:00 PM">09:00 PM</option>
                                        <option value="09:30 PM">09:30 PM</option>
                                        <option value="10:00 PM">10:00 PM</option>
                                        <option value="10:30 PM">10:30 PM</option>
                                        <option value="11:00 PM">11:00 PM</option>
                                        <option value="11:30 PM">11:30 PM</option>
                                    </select>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- Drop-off date/time end -->

                        <input type="submit" class="submit" name="submit" value="continue car reservation" id="checkoutModalLabel">
                    </form>

                </div>
            </div>

        </div>
    </div>
</section>
<div class="arrow-down"></div>
<!-- Teaser end -->



<!-- Services start -->
<section id="services" class="container">
    <div class="row">
        <div class="col-md-12 title">
            <h2>Customer Services</h2>
            <span class="underline">&nbsp;</span>
        </div>

        <!-- Service Box start -->
        <div class="col-md-6">
            <div class="service-box wow fadeInLeft" data-wow-offset="100">
                <div class="service-icon">+</div>
                <h3 class="service-title">Special rates on car booking</h3>
                <div class="clearfix"></div>
                <p class="service-content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed  nonumy eirmod tempor invidunt ut labore et dolore magnaed aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
            </div>
        </div>
        <!-- Service Box end -->

        <!-- Service Box start -->
        <div class="col-md-6">
            <div class="service-box wow fadeInRight" data-wow-offset="100">
                <div class="service-icon">+</div>
                <h3 class="service-title">Mobile Phone Reservation</h3>
                <div class="clearfix"></div>
                <p class="service-content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed  nonumy eirmod tempor invidunt ut labore et dolore magnaed aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
            </div>
        </div>
        <!-- Service Box end -->

        <!-- Service Box start -->
        <div class="col-md-6">
            <div class="service-box wow fadeInLeft" data-wow-offset="100">
                <div class="service-icon">+</div>
                <h3 class="service-title">Unlimited Miles Car Rental</h3>
                <div class="clearfix"></div>
                <p class="service-content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed  nonumy eirmod tempor invidunt ut labore et dolore magnaed aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
            </div>
        </div>
        <!-- Service Box end -->

        <!-- Service Box start -->
        <div class="col-md-6">
            <div class="service-box wow fadeInRight" data-wow-offset="100">
                <div class="service-icon">+</div>
                <h3 class="service-title">One Way Car Rentals</h3>
                <div class="clearfix"></div>
                <p class="service-content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed  nonumy eirmod tempor invidunt ut labore et dolore magnaed aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
            </div>
        </div>
        <!-- Service Box end -->

    </div>
</section>
<!-- Services end -->



<!-- Newsletter start -->
<section id="newsletter" class="wow slideInLeft" data-wow-offset="300">
    <div class="container">
        <div class="row">
            <div class="col-md-12"><div class="alert hidden" id="newsletter-form-msg"></div></div>
            <div class="col-md-5 col-xs-12">
                <h2 class="title">Sign up for amazing offers
                    <span class="subtitle">exclusive access for offers and promotions</span></h2>
            </div>
            <div class="col-md-7">
                <div class="newsletter-form pull-left">
                    <form action="#" method="post" name="newsletter-form" id="newsletter-form">
                        <input type="hidden" name="action" value="send_newsletter_form"/>
                        <input type="text" class="website_hp" name="website_hp"/>
                        <div class="input-group">
                            <input type="email" name="newsletter-email" class="form-control" placeholder="Enter your Email Address">
                            <span class="input-group-btn">
                          <input class="btn btn-default button" type="submit" value="send">
                        </span>
                        </div>
                    </form>
                </div>
                <div class="social-icons pull-right">
                    <ul>
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="googleplus" href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
<!-- Newsletter end -->



<!-- Vehicles start -->
<section id="vehicles" class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="title wow fadeInDown" data-wow-offset="200">Vehicle Models - <span class="subtitle">Our rental fleet at a glance</span></h2>
        </div>

        <!-- Vehicle nav start -->
        <div class="col-md-3 vehicle-nav-row wow fadeInUp" data-wow-offset="100">
            <div id="vehicle-nav-container">
                <ul class="vehicle-nav">
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="<?php echo e($loop->first ? 'active' : ''); ?>"><a href="#vehicle-<?php echo e($loop->index + 1); ?>"><?php echo e($s_data->name); ?></a><span class="active">&nbsp;</span></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>

            <div class="vehicle-nav-control">
                <a class="vehicle-nav-scroll" data-direction="up" href="#"><i class="fa fa-chevron-up"></i></a>
                <a class="vehicle-nav-scroll" data-direction="down" href="#"><i class="fa fa-chevron-down"></i></a>
            </div>

        </div>
        <!-- Vehicle nav end -->

        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!-- Vehicle <?php echo e($loop->index + 1); ?> data start -->
                <div class="vehicle-data" id="vehicle-<?php echo e($loop->index + 1); ?>">
                    <div class="col-md-6 wow fadeIn" data-wow-offset="100">
                        <div class="vehicle-img">
                            <img class="img-responsive" src="<?php echo e(url('images/'.$s_data->image)); ?>" alt="Vehicle">
                        </div>
                    </div>
                    <div class="col-md-3 wow fadeInUp" data-wow-offset="200">
                        <div class="vehicle-price">$ <?php echo e($s_data->price); ?> <span class="info">rent per day</span></div>
                        <table class="table vehicle-features">
                            <tr>
                                <td>Model</td>
                                <td><?php echo e($s_data->model); ?></td>
                            </tr>
                            <tr>
                                <td>Doors</td>
                                <td><?php echo e($s_data->doors); ?></td>
                            </tr>
                            <tr>
                                <td>Seats</td>
                                <td><?php echo e($s_data->seats); ?></td>
                            </tr>
                            <tr>
                                <td>Luggage</td>
                                <td><?php echo e($s_data->suitcases); ?> Suitcases / <?php echo e($s_data->bags); ?> Bags</td>
                            </tr>
                            <tr>
                                <td>Transmission</td>
                                <td><?php echo e($s_data->transmition); ?></td>
                            </tr>
                            <tr>
                                <td>Air conditioning</td>
                                <td><?php echo e($s_data->air_condition = 1 ? 'yes' : 'no'); ?></td>
                            </tr>
                            <tr>
                                <td>Minimum age</td>
                                <td><?php echo e($s_data->min_age); ?> years</td>
                            </tr>
                        </table>
                        <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
                    </div>
                </div>
            <!-- Vehicle <?php echo e($loop->index + 1); ?> data end -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </div>
</section>
<!-- Vehicles end -->



<!-- Reviews start -->
<section id="reviews" class="container wow fadeInUp">
    <div class="row text-center">
        <div class="col-md-12 stars">
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star big"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
        </div>
        <div class="col-md-10 col-md-offset-1">
            <div id="reviews-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">

                    <!-- Review item 1 start -->
                    <div class="item active">
                        <div class="review">
                            It is always a positive experience when renting from your 5th street location. The staff is very professional and efficient and always smiling. And I always feel welcome and appreciated. The management is always prompt to solve any issue at any moment. Their efficiency and professionalism makes it my number one choice.
                        </div>
                        <div class="author">
                            – Michael Smith, Santa Barbara CA
                        </div>
                    </div>
                    <!-- Review item 1 end -->

                    <!-- Review item 2 start -->
                    <div class="item">
                        <div class="review">
                            This rental was the best rental experience ever! After completing all details on-line myself, the pick-up was super efficient, extremely friendly, and free of the usual 5 - 10 min very unpleasant drilling of why one is not signing up to all options (insurance, etc). I was handed the keys and a wide register print out that required...
                        </div>
                        <div class="author">
                            – Jon Doe, Las Vegas NV
                        </div>
                    </div>
                    <!-- Review item 2 end -->

                    <!-- Review item 3 start -->
                    <div class="item">
                        <div class="review">
                            This was my first time renting from car|rental. And over all it was a wonderful experience I have no complaints. The service rep help me find the best rental to suit my needs. I also love the fact that you guys provide luxury rentals at a great price. I will definitely rent with this company again.
                        </div>
                        <div class="author">
                            – Michael Smith, Santa Barbara CA
                        </div>
                    </div>
                    <!-- Review item 3 end -->

                </div>

                <!-- Review Nav start -->
                <ol class="carousel-indicators">
                    <li data-target="#reviews-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#reviews-carousel" data-slide-to="1"></li>
                    <li data-target="#reviews-carousel" data-slide-to="2"></li>
                </ol>
                <!-- Review Nav end -->

            </div>
        </div>
    </div>
</section>
<!-- Reviews end -->



<!-- Locations start -->
<section id="locations">
    <div class="container location-select-container wow bounceInDown" data-wow-offset="200">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="location-select">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Car Rental Locations</h2>
                        </div>
                        <div class="col-md-6">
                            <div class="styled-select-location">
                                <select id="location-map-select"></select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="arrow-down-location">&nbsp;</div>
    </div>
    <div class="map wow bounceInUp" data-wow-offset="100"><!-- map by gmap3 --></div>
</section>
<!-- Locations end -->



<!-- Information start -->
<section id="information" class="container">

    <!-- Single photo start -->
    <div class="row wow fadeInLeft" data-wow-offset="100">
        <div class="col-md-6 col-xs-12 pull-right">
            <img src="<?php echo e(url('images/info-img.jpg')); ?>" alt="Info Img" class="img-responsive">
        </div>
        <div class="col-md-6 pull-left">
            <h2 class="title">Quality Guaranteed</h2>
            <h3 class="subtitle">Here is an example with one single photo displayed on the right.</h3>
            <p>Here is some dummy text. <span class="my-tooltip" data-toggle="tooltip" title="" data-original-title="This is an demo tooltip!">Hover over me!</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, vero voluptas delectus explicabo maxime ad qui incidunt! Saepe.</p>
            <a href="http://themeforest.net/item/car-rental-landing-page/8245093?ref=themeinjection" class="btn">More information</a>
            <a href="http://themeforest.net/item/car-rental-landing-page/8245093?ref=themeinjection" class="btn btn-gray">Buy this theme</a>
        </div>
    </div>
    <!-- Single photo end -->

    <!-- Video start -->
    <div class="row wow fadeInRight" data-wow-offset="50">
        <div class="col-md-6">
            <div class="video">
                <!-- Youtube iframe start -->
                <iframe width="420" height="315" src="http://www.youtube.com/embed/9_5pjZlWV3A?rel=0&amp;autoplay=0" allowfullscreen></iframe>
                <!-- Youtube iframe end -->
            </div>
        </div>
        <div class="col-md-6">
            <h2 class="title">Watch our info tour</h2>
            <h3 class="subtitle">You can also show youtube videos in this section!</h3>
            <p>Here is some dummy text. Lorem ipsum dolor sit amet, <span class="label label-default">This is an labeled text snippet!</span>, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, vero voluptas delectus explicabo maxime ad qui incidunt! no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        </div>
    </div>
    <!-- Video end -->

</section>
<!-- Information end -->



<!-- Partners start -->
<section id="partners" class="wow fadeIn" data-wow-offset="50">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Meet Our Partners</h2>
                <span class="underline">&nbsp;</span>
                <p>To contribute to positive change and achieve our sustainability goals, we partner with many extraordinary organizations around the world. Their expertise enables us to do far more than we could alone, and their passion and talent inspire us. It is our pleasure to introduce you to a handful of the organizations whose accomplishments and commitments are representative of all the organizations we are fortunate to call our partners.</p>
            </div>
            <div class="col-md-3 col-xs-6 text-center">
                <img src="images/partner1.png" alt="Partner" class="img-responsive wow fadeInUp" data-wow-delay="0.5s" data-wow-offset="200">
            </div>
            <div class="col-md-3 col-xs-6 text-center">
                <img src="images/partner2.png" alt="Partner" class="img-responsive wow fadeInUp" data-wow-delay="1s" data-wow-offset="200">
            </div>
            <div class="col-md-3 col-xs-6 text-center">
                <img src="images/partner3.png" alt="Partner" class="img-responsive wow fadeInUp" data-wow-delay="1.5s" data-wow-offset="200">
            </div>
            <div class="col-md-3 col-xs-6 text-center">
                <img src="images/partner4.png" alt="Partner" class="img-responsive wow fadeInUp" data-wow-delay="2s" data-wow-offset="200">
            </div>
        </div>
    </div>
</section>
<!-- Partners end -->



<!-- Contact start -->
<section id="contact" class="container wow bounceInUp" data-wow-offset="50">
    <div class="row">
        <div class="col-md-12">
            <h2>Contact Us</h2>
        </div>
        <div class="col-md-4 col-xs-12 pull-right">
            <h4 class="contact-box-title">Customer Center</h4>
            <div class="contact-box">
                <img src="<?php echo e(url('images/contact-box-img1.jpg')); ?>" alt="contact-img">
                <div class="contact-box-name">Sarah Connor</div>
                <div class="contact-box-phon"><span class="highlight">Phone:</span> 666-999-888</div>
                <div class="contact-box-email"><span class="highlight">Email:</span> connor@example.com</div>
                <div class="clearfix"></div>
            </div>
            <div class="contact-box-border">&nbsp;</div>

            <div class="contact-box-divider">&nbsp;</div>

            <h4 class="contact-box-title">Change or Cancel Reservation</h4>
            <div class="contact-box">
                <img src="<?php echo e(url('images/contact-box-img2.jpg')); ?>" alt="contact-img">
                <div class="contact-box-name">Mike Smith</div>
                <div class="contact-box-phon"><span class="highlight">Phone:</span> 666-999-888</div>
                <div class="contact-box-email"><span class="highlight">Email:</span> connor@example.com</div>
                <div class="clearfix"></div>
            </div>
            <div class="contact-box-border">&nbsp;</div>

            <div class="contact-box">
                <img src="<?php echo e(url('images/contact-box-img3.jpg')); ?>" alt="contact-img">
                <div class="contact-box-name">Jane Doe</div>
                <div class="contact-box-phon"><span class="highlight">Phone:</span> 666-999-888</div>
                <div class="contact-box-email"><span class="highlight">Email:</span> connor@example.com</div>
                <div class="clearfix"></div>
            </div>
            <div class="contact-box-border">&nbsp;</div>
        </div>
        <div class="col-md-8 col-xs-12 pull-left">
            <p class="contact-info">You have any questions or need additional information? <br>
                <span class="address"><span class="highlight">Address:</span>  Car|Rental / 3861 Sepulveda Blvd. / Culver City, CA 90230</span></p>
            <form action="#" method="post" id="contact-form" name="contact-form">
                <input type="hidden" name="action" value="send_contact_form"/>
                <input type="text" class="website_hp" name="website_hp"/>

                <div class="alert hidden" id="contact-form-msg"></div>

                <div class="form-group">
                    <input type="text" class="form-control first-name text-field" name="first-name" placeholder="First Name:">
                    <input type="text" class="form-control last-name text-field" name="last-name" placeholder="Last Name:">
                    <div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <input type="tel" class="form-control telephone text-field" name="telephone" placeholder="Telephone:">
                </div>

                <div class="form-group">
                    <input type="email" class="form-control email text-field" name="email" placeholder="Email:">
                </div>

                <div class="form-group">
                    <textarea class="form-control message" name="message" placeholder="Message:"></textarea>
                </div>

                <input type="submit" class="btn submit-message" name="submit-message" value="Submit Message">


            </form>
        </div>

    </div>
</section>
<!-- Contact end -->


<a href="#" class="scrollup">ScrollUp</a>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newlara\resources\views/index.blade.php ENDPATH**/ ?>