<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car|Rental Landingpage</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Google Font Lato -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Plugin Styles -->
    <link href="css/datepicker.css" rel="stylesheet">


    <!-- Main Styles -->
    <link href="css/styles.css" rel="stylesheet">
    <!-- Available main styles: styles-red.css, styles-green.css -->

    <style>
        form .website_hp{
            display: none;
        }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <link href="css/ie8fix.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:900' rel='stylesheet' type='text/css'>
    <![endif]-->


    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="img/ico/favicon.png">

</head>
<body id="top" data-spy="scroll" data-target=".navbar" data-offset="260">

<!-- Header start -->
<header data-spy="affix" data-offset-top="39" data-offset-bottom="0" class="large">

    <div class="row container box">
        <div class="col-md-5">
            <!-- Logo start -->
            <div class="brand">
                <h1><a class="scroll-to" href="#top"><img class="img-responsive" src="<?php echo e(url('images/logo.gif')); ?>" alt="Car|Rental"></a></h1>
            </div>
            <!-- Logo end -->
        </div>

        <div class="col-md-7">
            <div class="pull-right">
                <div class="header-info pull-right">
                    <div class="contact pull-left">CONTACT: (562) 498-4600</div>
                    <!-- Language Switch start -->
                    <div class="language-switch pull-right">
                        <div class="dropdown">
                            <a data-toggle="dropdown" href="#" id="language-switch-dropdown">Select your language </a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="language-switch-dropdown">
                                <li><a href="#"><img src="img/flags/United-States.png" alt="usa"> English</a></li>
                                <li><a href="#"><img src="img/flags/Germany.png" alt="germany"> German</a></li>
                                <li><a href="#"><img src="img/flags/France.png" alt="france"> French</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Language Switch end -->
                </div>
            </div>

            <div class="clearfix"></div>

            <!-- start navigation -->
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <!-- Toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand scroll-to" href="#top"><img class="img-responsive"  src="img/logo-green.gif" alt="Car|Rental"></a>
                    </div>
                    <!-- Collect the nav links, for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <!-- Nav-Links start -->
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#top" class="scroll-to">Home</a></li>
                            <li><a href="#services" class="scroll-to">Services</a></li>
                            <li><a href="#vehicles" class="scroll-to">Vehicle Models</a></li>
                            <li><a href="#locations" class="scroll-to">Locations</a></li>
                            <li><a href="#contact" class="scroll-to">Contact</a></li>
                        </ul>
                        <!-- Nav-Links end -->
                    </div>
                </div>
            </nav>
            <!-- end navigation -->
        </div>
    </div>

</header>
<!-- Header end -->

<?php echo $__env->yieldContent('content'); ?>


<!-- Footer start -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="footer-nav">
                    <li><a class="scroll-to" href="#top">Home</a></li>
                    <li><a class="scroll-to" href="#services">Service</a></li>
                    <li><a class="scroll-to" href="#vehicles">Vehicle Models</a></li>
                    <li><a class="scroll-to" href="#reviews">Reviews</a></li>
                    <li><a class="scroll-to" href="#locations">Locations</a></li>
                    <li><a class="scroll-to" href="#contact">Contact</a></li>
                </ul>
                <div class="clearfix"></div>
                <p class="copyright">©2014 Themeinjection, All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->



<!-- Checkout Modal Start -->
<div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="checkoutModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/" method="post" id="checkout-form" name="checkout-form">
                <?php echo csrf_field(); ?>

                <!-- Modal header start -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Complete reservation</h4>
                </div>
                <!-- Modal header end -->

                <!-- Modal body start -->
                <div class="modal-body">

                    <!-- Checkout Info start -->
                    <div class="checkout-info-box">
                        <h3><i class="fa fa-info-circle"></i> Upon completing this reservation enquiry, you will receive::</h3>
                        <p>Your rental voucher to produce on arrival at the rental desk and a toll-free customer support number.</p>
                    </div>
                    <!-- Checkout Info end -->

                    <!-- Checkout Rental Info start -->
                    <div class="checkout-vehicle-info">
                        <div class="location-date-info">
                            <h3>Location & Date</h3>
                            <div class="info-box">
                                <span class="glyphicon glyphicon-calendar"></span>
                                <h4 class="info-box-title">Pick-Up Time</h4>
                                <p class="info-box-description"><span id="pick-up-date-ph"></span> at <span id="pick-up-time-ph"></span></p>
                                <input type="hidden" name="pick-up" id="pick-up" value="">
                            </div>
                            <div class="info-box">
                                <span class="glyphicon glyphicon-calendar"></span>
                                <h4 class="info-box-title">Drop-Off Time</h4>
                                <p class="info-box-description"><span id="drop-off-date-ph"></span> at <span id="drop-off-time-ph"></span></p>
                                <input type="hidden" name="drop-off" id="drop-off" value="">
                            </div>
                            <div class="info-box">
                                <span class="glyphicon glyphicon-map-marker"></span>
                                <h4 class="info-box-title">Pick-Up Location</h4>
                                <p class="info-box-description" id="pickup-location-ph"></p>
                                <input type="hidden" name="pickup-location" id="pickup-location" value="">
                            </div>
                            <div class="info-box">
                                <span class="glyphicon glyphicon-map-marker"></span>
                                <h4 class="info-box-title">Drop-Off Location</h4>
                                <p class="info-box-description" id="dropoff-location-ph"></p>
                                <input type="hidden" name="dropoff-location" id="dropoff-location" value="">
                            </div>
                        </div>

                        <div class="vehicle-info">
                            <h3>CAR: <span id="selected-car-ph"></span></h3> <a href="#vehicles" class="scroll-to">[ Vehicle Models ]</a>
                            <input type="hidden" name="selected-car" id="selected-car" value="">
                            <div class="clearfix"></div>
                            <div class="vehicle-image">
                                <img class="img-responsive" id="selected-vehicle-image" src="<?php echo e(url('images/vehicle1.jpg')); ?>" alt="Vehicle">
                            </div>
                        </div>

                        <div class="clearfix"></div>

                    </div>
                    <!-- Checkout Rental Info end -->

                    <hr>

                    <!-- Checkout Personal Info start -->
                    <div class="checkout-personal-info">
                        <div class="alert hidden" id="checkout-form-msg">
                            test
                        </div>
                        <h3>PERSONAL INFORMATION</h3>
                        <div class="form-group left">
                            <label for="first-name">First Name:</label>
                            <input type="text" class="form-control" name="first-name" id="first-name" placeholder="Enter your first name">
                        </div>
                        <div class="form-group right">
                            <label for="last-name">Last Name:</label>
                            <input type="text" class="form-control" name="last-name" id="last-name" placeholder="Enter your last name">
                        </div>
                        <div class="form-group left">
                            <label for="phone-number">Phone Number:</label>
                            <input type="text" class="form-control" name="phone-number" id="phone-number" placeholder="Enter your phone number">
                        </div>
                        <div class="form-group right age">
                            <label for="age">Age:</label>
                            <div class="styled-select-age">
                                <select name="age" id="age">
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    <option value="32">32</option>
                                    <option value="33">33</option>
                                    <option value="34">34</option>
                                    <option value="35">35</option>
                                    <option value="36">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="40">40</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    <option value="44">44</option>
                                    <option value="45">45</option>
                                    <option value="46">46</option>
                                    <option value="47">47</option>
                                    <option value="48">48</option>
                                    <option value="49">49</option>
                                    <option value="50">50</option>
                                    <option value="51">51</option>
                                    <option value="52">52</option>
                                    <option value="53">53</option>
                                    <option value="54">54</option>
                                    <option value="55">55</option>
                                    <option value="56">56</option>
                                    <option value="57">57</option>
                                    <option value="58">58</option>
                                    <option value="59">59</option>
                                    <option value="50">50</option>
                                    <option value="61">61</option>
                                    <option value="62">62</option>
                                    <option value="63">63</option>
                                    <option value="64">64</option>
                                    <option value="65">65</option>
                                    <option value="66">66</option>
                                    <option value="67">67</option>
                                    <option value="68">68</option>
                                    <option value="69">69</option>
                                    <option value="70">70</option>
                                    <option value="71">71</option>
                                    <option value="72">72</option>
                                    <option value="73">73</option>
                                    <option value="74">74</option>
                                    <option value="75">75</option>
                                    <option value="76">76</option>
                                    <option value="77">77</option>
                                    <option value="78">78</option>
                                    <option value="79">79</option>
                                    <option value="80">80</option>
                                    <option value="81">81</option>
                                    <option value="82">82</option>
                                    <option value="83">83</option>
                                    <option value="84">84</option>
                                    <option value="85">85</option>
                                    <option value="86">86</option>
                                    <option value="87">87</option>
                                    <option value="88">88</option>
                                    <option value="89">89</option>
                                    <option value="90">90</option>
                                    <option value="91">91</option>
                                    <option value="92">92</option>
                                    <option value="93">93</option>
                                    <option value="94">94</option>
                                    <option value="95">95</option>
                                    <option value="96">96</option>
                                    <option value="97">97</option>
                                    <option value="98">98</option>
                                    <option value="99">99</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group left">
                            <label for="email-address">Email Address:</label>
                            <input type="email" class="form-control" name="email-address" id="email-address" placeholder="Enter your email address">
                        </div>
                        <div class="form-group right">
                            <label for="email-address-confirm">Confirm Email Address:</label>
                            <input type="email" class="form-control" name="email-address-confirm" id="email-address-confirm" placeholder="Confirm your email address">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Checkout Personal Info end -->

                    <!-- Checkout Address Info start -->
                    <div class="checkout-address-info">
                        <div class="form-group address">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="Enter your Street an No.">
                        </div>
                        <div class="form-group city">
                            <label for="city">City</label>
                            <input type="text" class="form-control" name="city" id="city" placeholder="Enter your City">
                        </div>
                        <div class="form-group zip-code">
                            <label for="zip-code">Zip Code</label>
                            <input type="text" class="form-control" name="zip-code" id="zip-code" placeholder="Enter your Zip Code">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Checkout Address Info end -->

                    <div class="newsletter">
                        <div class="form-group">
                            <div class="checkbox">
                                <input id="check1" type="checkbox" name="newsletter" value="yes">
                                <label for="check1">Please send me latest news and updates</label>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Modal body end -->

                <!-- Modal footer start -->
                <div class="modal-footer">
                  <span class="btn-border btn-gray">
                    <button type="button" class="btn btn-default btn-gray" data-dismiss="modal">Cancel</button>
                  </span>
                    <span class="btn-border btn-yellow">
                    <button type="submit" class="btn btn-primary btn-yellow">Reserve now</button>
                  </span>
                </div>
                <!-- Modal footer end -->

            </form>
        </div>
    </div>
</div>
<!-- Checkout Modal end -->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.autocomplete.min.js"></script>
<script src="js/jquery.placeholder.js"></script>
<script src="js/locations-autocomplete.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/gmap3.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsr1sFUtzPoVl9GIKmp1dXCS04tcJ9NfI" type="text/javascript"></script>




<!--[if !(gte IE 8)]><!-->
<script src="js/wow.min.js"></script>
<script>
    // Initialize WOW
    //-------------------------------------------------------------
    new WOW({mobile: false}).init();
</script>
<!--<![endif]-->

<script src="js/custom.js"></script>



</body>
</html>

<?php /**PATH C:\xampp\htdocs\newlara\resources\views/layouts/app.blade.php ENDPATH**/ ?>