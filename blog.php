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
            <a href="index.php" class="navbar-brand"><img id="img3" src="../img/Noir_petit.png"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Punaise de Lit</a></li>
                <li><a href="about.php">Guêpes et Frelons</a></li>
                <li><a href="blog.php">Chenilles Processionnaires</a></li>
                <li><a href="contact.php">Tarifs</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>

    </div>
</div>

<!-- Blog Section -->

<section id="blog">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-1 col-md-10 col-sm-12">
                <div class="section-title">
                    <h3>lastest Blogs</h3>
                    <h2>The creative web & mobile studio and focused on brand identity, web development and social marketing.</h2>
                </div>

                <div class="blog-post-thumb">
                    <div class="blog-post-image">
                        <a href="single-post.html">
                            <img src="images/blog-image1.jpg" class="img-responsive" alt="Blog Image">
                        </a>
                    </div>
                    <div class="blog-post-title">
                        <h3><a href="single-post.html">We Help You Create Perfect Modern Design</a></h3>
                    </div>
                    <div class="blog-post-format">
                        <span><a href="#"><img src="images/author-image1.jpg" class="img-responsive img-circle"> Jen Lopez</a></span>
                        <span><i class="fa fa-date"></i> Jan 30, 2016</span>
                        <span><a href="#"><i class="fa fa-comment-o"></i> 124 Comments</a></span>
                    </div>
                    <div class="blog-post-des">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <a href="single-post.html" class="btn btn-default">Continue Reading</a>
                    </div>
                </div>

                <div class="blog-post-thumb">
                    <div class="blog-post-image">
                        <a href="single-post.html">
                            <img src="images/blog-image2.jpg" class="img-responsive" alt="Blog Image">
                        </a>
                    </div>
                    <div class="blog-post-title">
                        <h3><a href="single-post.html">When do you marry with someone you love in life?</a></h3>
                    </div>
                    <div class="blog-post-format">
                        <span><a href="#"><img src="images/author-image2.jpg" class="img-responsive img-circle"> Leo Dennis</a></span>
                        <span><i class="fa fa-date"></i> November 22, 2016</span>
                        <span><a href="#"><i class="fa fa-comment-o"></i> 23 Comments</a></span>
                    </div>
                    <div class="blog-post-des">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <a href="single-post.html" class="btn btn-default">Continue Reading</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>
