<?php get_header(); ?>
<body>

<!-- PRE LOADER -->

<div class="preloader">
    <div class="sk-spinner sk-spinner-wordpress">
        <span class="sk-inner-circle"></span>
    </div>
</div>

<!-- Navigation section  -->

<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand"><i class="fa fa-magnet"></i></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Projects</a></li>
                <li class="active"><a href="about.php">Our Studio</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>

    </div>
</div>


<!-- About Section -->

<section id="about">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-1 col-md-10 col-sm-12">
                <div class="section-title">
                    <h3>about our story</h3>
                    <h2>The creative web & mobile studio and focused on brand identity, web development and social marketing.</h2>
                </div>

                <div class="col-md-8 col-sm-12">
                    <img src="images/about-image.jpg" class="img-responsive" alt="About">
                </div>

                <div class="col-md-4 col-sm-12">
                    <h1>Magnet Studio</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                </div>

                <div class="clearfix"></div>

                <hr>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>

                <hr>

                <div class="col-md-4 col-sm-6">
                    <h3>Web Development</h3>
                    <ul>
                        <li>Online Shopping Site</li>
                        <li>Wordpress CMS</li>
                        <li>Bootstrap themes</li>
                        <li>Web Application</li>
                    </ul>
                </div>

                <div class="col-md-4 col-sm-6">
                    <h3>Brand Identity</h3>
                    <ul>
                        <li>Logo Design</li>
                        <li>Personal Branding</li>
                        <li>Flyer Design</li>
                        <li>Creative Direction</li>
                    </ul>
                </div>

                <div class="col-md-4 col-sm-6">
                    <h3>Social marketing</h3>
                    <ul>
                        <li>facebook, twitter.</li>
                        <li>Page Maintenance</li>
                        <li>Social media</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>
