<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head() ?>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <style>
            * {
                box-sizing: border-box
            }

            /* Slideshow container */
            .slideshow-container {
                max-width: 500px;
                position: relative;
                margin: auto;

                h2 {
                    text-align: center;
                }
            }

            /* Ẩn các slider */
            .mySlides {
                display: none;
            }

            /* �?ịnh dạng nội dung Caption */
            .text {
                color: #f2f2f2;
                font-size: 15px;
                padding: 8px 12px;
                position: absolute;
                bottom: 8px;
                width: 100%;
                text-align: center;
            }

            /* định dạng các chấm chuyển đổi các slide */
            .dot {
                cursor: pointer;
                height: 13px;
                width: 13px;
                margin: 0 2px;
                background-color: #bbb;
                border-radius: 50%;
                display: inline-block;
                transition: background-color 0.6s ease;
            }

            /* khi được hover, active đổi màu n�?n */
            .active,
            .dot:hover {
                background-color: #717171;
            }

            /* Thêm hiệu ứng khi chuyển đổi các slide */
            .fade {
                -webkit-animation-name: fade;
                -webkit-animation-duration: 3s;
                animation-name: fade;
                animation-duration: 3s;
            }

            @-webkit-keyframes fade {
                from {
                    opacity: .4
                }

                to {
                    opacity: 1
                }
            }

            @keyframes fade {
                from {
                    opacity: .4
                }

                to {
                    opacity: 1
                }
            }
        </style>



    </head>



    <body <?php body_class(); ?>>
        <div class="container">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Theme</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog <span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Page blog 1</a></li>
                                    <li><a href="#">Page blog 2</a></li>
                                    <li><a href="#">Page blog 3</a></li>
                                </ul>
                            </li>
                            <li><a href="#">About</a></li>
                            <form class="navbar-form navbar-left" action="/action_page.php">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search" name="search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit">
                                            <i class="glyphicon glyphicon-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <header class="site-header">
                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                <h4><?php bloginfo('description'); ?></h4>


                <div class="slideshow-container">
                    <h2>SlideShow</h2>
                    <div class="mySlides fade">
                        <img src="https://freetuts.net/upload/tut_post/images/2017/07/30/964/slide-1.jpg" style="width:100%">
                        <div class="text">Slide thu 1!</div>
                    </div>

                    <div class="mySlides fade">
                        <img src="https://freetuts.net/upload/tut_post/images/2017/07/30/964/slide-2.jpg" style="width:100%">
                        <div class="text">Slide thu 2!</div>
                    </div>

                    <div class="mySlides fade">
                        <img src="https://freetuts.net/upload/tut_post/images/2017/07/30/964/slide-3.jpg" style="width:100%">
                        <div class="text">Slide thu 3!</div>
                    </div>
                </div>
                <br>

                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(0)"></span>
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                </div>
            </header>



