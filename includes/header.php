    <!-- Mouse Cursor  -->
    <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner"><span>Drag</span></div>

    <!-- Pre-Loader -->
    <!-- <div class="preloader"></div> -->

    <!-- Header Top Area -->

    <!-- Header Area -->

    <div class="header-area header-two">
        <div class="sticky-area">
            <div class="navigation">
                <div class="container-fluid">
                    <div class="header-inner-box">
                        <div class="logo">
                            <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" alt=""></a>
                        </div>

                        <div class="main-menu">
                            <nav class="navbar navbar-expand-lg">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                    <span class="navbar-toggler-icon"></span>
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <style>
                                    .nav-2row {
                                        display: flex;
                                        flex-direction: column;
                                    }
                                </style>
                                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                                    <ul>
                                        <li><a href="tel:+91-9876 543 210"><span class="circle-small-btn"><i class="las la-phone"></i></span>+91-9876 543 210</a></li>
                                        <li><a href="mailto:info@examplemail.com"><span class="circle-small-btn"><i class="las la-envelope"></i></span>info@examplemail.com</a></li>
                                        <span style=margin-left:20px>
                                            <a href="" class="main-btn header-btn">Login Portfolio</a>
                                        </span>
                                    </ul>

                                    <ul class="navbar-nav m-auto">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#">Products
                                                <span class="sub-nav-toggler"> </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="about.php">About Us
                                                <span class="sub-nav-toggler"> </span>
                                            </a>
                                            <!-- <ul class="sub-menu">
                                                <li><a href="about.php">About Us</a></li>
                                                <li><a href="team.php">Team</a></li>
                                                <li><a href="faq.php">Helpful FAQ</a></li>
                                                <li><a href="price.php">Pricing</a></li>
                                            </ul> -->
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Financial Tools
                                                <span class="sub-nav-toggler"> </span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Financial Health Check</a></li>
                                                <li><a href="#">Financial Fact Finder</a></li>
                                                <li><a href="#">Goal Based Planning</a></li>
                                            </ul>


                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Services
                                                <span class="sub-nav-toggler"> </span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="services.php">Service </a>
                                                </li>
                                                <li>
                                                    <a href="service-details.php">Service Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Cases
                                                <span class="sub-nav-toggler"> </span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="cases.php">Cases </a>
                                                </li>
                                                <li>
                                                    <a href="case-details.php">Cases Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Blogs
                                                <span class="sub-nav-toggler"> </span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="blog.php">Blogs </a>
                                                </li>
                                                <li>
                                                    <a href="blog-details.php">Blog Details</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="contact.php">Online Appointment</a>
                                        </li>
                                        <!-- <div style=margin-left:20px>
                                            <a href="" class="main-btn">Login Portfolio</a>
                                        </div> -->

                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- 
                        <div class="header-contact">
                            <div class="header-contact-info">
                                <a href="" class="main-btn">Login Portfolio</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="box-3">
        <div class="btn btn-three">
            <span>HOVER ME</span>
        </div>
    </div>  -->

    <style>
        .box-3 {
            background-color: #66A182;
        }

        .btn {
            line-height: 50px;
            height: 50px;
            text-align: center;
            width: 250px;
            cursor: pointer;
        }

        .btn-three {
            color: #FFF;
            transition: all 0.5s;
            position: relative;
        }

        .btn-three::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            background-color: rgba(255, 255, 255, 0.1);
            transition: all 0.3s;
        }

        .btn-three:hover::before {
            opacity: 0;
            transform: scale(0.5, 0.5);
        }

        .btn-three::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            opacity: 0;
            transition: all 0.3s;
            border: 1px solid rgba(255, 255, 255, 0.5);
            transform: scale(1.2, 1.2);
        }

        .btn-three:hover::after {
            opacity: 1;
            transform: scale(1, 1);
        }
    </style>