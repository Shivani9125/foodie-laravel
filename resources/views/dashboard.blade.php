<!doctype html>
 <html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Foodies</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png" >
        <link rel="icon" href="{{asset('images/meal-food-icon.png')}}" type="image/png">
        <link rel="stylesheet" href="{{asset('cssfiles/bootstrap.min.css')}}">
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{asset('cssfiles/font-awesome.min.css')}}">
        <!--        <link rel="stylesheet" href="asset/cssfiles/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="{{asset('cssfiles/animate/animate.css')}}" />
        <link rel="stylesheet" href="{{asset('cssfiles/plugins.css')}}" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="{{asset('cssfiles/style.css')}}">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="{{asset('cssfiles/responsive.css')}}" />

        <script src="{{asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <header id="home" class="navbar-fixed-top">
            <div class="header_top_menu clearfix">	
                <div class="container">
                    <div class="row">	
                        <div class="col-md-5 col-md-offset-3 col-sm-12 text-right">
                            <div class="call_us_text">
								<span><i class="fa fa-clock-o"></i> Order Foods 24/7</span>
								<span class="num"><i class="fa fa-phone"></i>+91 9654796762</span>
							</div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="head_top_social text-right">
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                                <a href=""><i class="fa fa-pinterest-p"></i></a>
                                <a href=""><i class="fa fa-youtube"></i></a>
                                <a href=""><i class="fa fa-phone"></i></a>
                            </div>	
                        </div>

                    </div>			
                </div>
            </div>

            <!-- End navbar-collapse-->

            <div class="main_menu_bg">
                <div class="container"> 
                    <div class="row">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <span class="navbar-brand our_logo"><img src="{{asset('images/logo.png')}}" alt="" /></span>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="#slider">Home</a></li>
                                        <li><a href="cart">Cart</a></li>
                                        <li><a href="diet">Diet</a></li>
                                        <li><a href="order">Orders</a></li>
                                        <li><a href="login">Login</a></li>
                                        <li><a href="register">Signup</a></li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
            </div>	
        </header> <!-- End Header Section -->

        <section id="slider" class="slider">
            <div class="slider_overlay">
                <div class="container">
                    <div class="row">
                        <div class="main_slider text-center">
                            <div class="col-md-12">
                                <div class="main_slider_content wow zoomIn" data-wow-duration="1s">
                                    <h1>Foodie Love</h1>
                                    <p>Where deliciousness meets convenience. Order your favorite meals with ease and experience culinary delights at your fingertips.</p>
                                    <!-- <button href="" class="btn-lg">Click here</button> -->
                                </div>
                            </div>	
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="abouts" class="abouts">
            <div class="container">
                <div class="row">
                    <div class="abouts_content">
                        <div class="col-md-6">
                            <div class="single_abouts_text text-center wow slideInLeft" data-wow-duration="1s">
                                <img src="{{asset('images/ab.png')}}" alt="" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="single_abouts_text wow slideInRight" data-wow-duration="1s">
                                <h4>About us</h4>
                                <h3>WE ARE TASTY</h3>
                                <p>Welcome to Foodie, your ultimate destination for delicious food delivered right to your doorstep.</p>

                                <p> We are a leading restaurant and online food ordering service dedicated to satisfying your cravings with a wide variety of mouthwatering dishes. Our passion for exceptional flavors and culinary delights drives us to partner with top-notch restaurants and talented chefs, ensuring that every bite is an unforgettable experience. With a user-friendly interface and seamless ordering process, we make it easy for you to explore a diverse menu and conveniently place your order from the comfort of your home or office. Customer satisfaction is our priority, and we strive to provide prompt delivery and exceptional service. Join us on this gastronomic journey and indulge in the finest culinary delights. Welcome to Foodie, where great taste meets convenience!</p>

                                <!-- <a href="" class="btn btn-primary">click here</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="features" class="features">
            <div class="slider_overlay">
                <div class="container">
                    <div class="row">
                        <div class="main_features_content_area  wow fadeIn" data-wow-duration="3s">
                            <div class="col-md-12">
                                <div class="main_features_content text-left">
                                    <div class="col-md-6">
                                        <div class="single_features_text">
                                            <h4>Special Recipes</h4>
                                            <h3>Taste of Precious</h3>
                                            <p>At Foodie, we take pride in our collection of special recipes that are crafted with utmost care and passion. Our culinary experts have perfected the art of creating dishes that tantalize your taste buds and leave you craving for more. From traditional classics to innovative creations, we offer a diverse range of culinary delights that cater to all palates.</p>
                                            <p>With years of experience in the industry, we ensure that every dish is prepared using the finest ingredients and follows strict quality standards. Our commitment to excellence is reflected in the flavors and presentation of our dishes, providing you with a truly memorable dining experience.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="portfolio" class="portfolio">
            <div class="container">
                <div class="row">
                    <div class="portfolio_content text-center  wow fadeIn" data-wow-duration="5s">
                        <div class="col-md-12">
                            <div class="head_title text-center">
                                <h4>Delightful</h4>
                                <h3>Foods</h3>
                            </div>

                            <div class="main_portfolio_content">
                                <div class="col-md-3 col-sm-4 col-xs-6 single_portfolio_text">
                                    <img src="{{asset('images/p1.png')}}" alt="" />
                                    <div class="portfolio_images_overlay text-center">
                                        <h6>Italian Source Mushroom</h6>
                                        <p class="product_price">$12</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 single_portfolio_text">
                                    <img src="{{asset('images/p2.png')}}" alt="" />
                                    <div class="portfolio_images_overlay text-center">
                                        <h6>Italian Source Mushroom</h6>
                                        <p class="product_price">$12</p>
                                    </div>								
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 single_portfolio_text">
                                    <img src="{{asset('images/p3.png')}}" alt="" />
                                    <div class="portfolio_images_overlay text-center">
                                        <h6>Italian Source Mushroom</h6>
                                        <p class="product_price">$12</p>
                                    </div>								
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 single_portfolio_text">
                                    <img src="{{asset('images/p4.png')}}" alt="" />
                                    <div class="portfolio_images_overlay text-center">
                                        <h6>Italian Source Mushroom</h6>
                                        <p class="product_price">$12</p>
                                    </div>								
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 single_portfolio_text">
                                    <img src="{{asset('images/p5.png')}}" alt="" />
                                    <div class="portfolio_images_overlay text-center">
                                        <h6>Italian Source Mushroom</h6>
                                        <p class="product_price">$12</p>
                                    </div>								
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 single_portfolio_text">
                                    <img src="{{asset('images/p6.png')}}" alt="" />
                                    <div class="portfolio_images_overlay text-center">
                                        <h6>Italian Source Mushroom</h6>
                                        <p class="product_price">$12</p>
                                    </div>								
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 single_portfolio_text">
                                    <img src="{{asset('images/p7.png')}}" alt="" />
                                    <div class="portfolio_images_overlay text-center">
                                        <h6>Italian Source Mushroom</h6>
                                        <p class="product_price">$12</p>
                                    </div>								
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6 single_portfolio_text">
                                    <img src="{{asset('images/p8.png')}}" alt="" />
                                    <div class="portfolio_images_overlay text-center">
                                        <h6>Italian Source Mushroom</h6>
                                        <p class="product_price">$12</p>
                                    </div>								
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="footer_widget" class="footer_widget">
            <div class="container test">
                <div class="">
                    <div class="footer_widget_content text-center">
                        <div class="col-md-4">
                            <div class="single_widget wow fadeIn" data-wow-duration="2s">
                                <h3>Take it easy with location</h3>

                                <div class="single_widget_info">
                                    <p>D-Block, M-455, Aliganj

                                        <span>Lucknow,</span>
                                        <span>Uttar Pradesh</span>
                                        <span class="phone_email">phone: +91 9654796762</span>
                                        <span>Email: Shivanshu@gmail.com</span></p>
                                </div>

                                <div class="footer_socail_icon">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                    <a href=""><i class="fa fa-pinterest-p"></i></a>
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                    <a href=""><i class="fa fa-phone"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="{{asset('js/vendor/jquery-1.11.2.min.js')}}"></script>
        <script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>

        <script src="{{asset('js/jquery-easing/jquery.easing.1.3.js')}}"></script>
        <script src="{{asset('js/wow/wow.min.js')}}"></script>
        <script src="{{asset('js/plugins.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>
