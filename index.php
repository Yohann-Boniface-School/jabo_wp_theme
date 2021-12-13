<?php get_header(); ?>

<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="punaises.php">Punaises de Lit</a></li>
                <li><a href="guepes.php">Guêpes et Frelons</a></li>
                <li><a href="chenilles.php">Chenilles Processionnaires</a></li>
                <li><a href="tarifs.php">Tarifs</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</div>


<!-- Home Section -->

<section id="home">
    <div class="container">
        <div class="row">
            <article id="top" class="wrapper style1">
                <div class="container">
                    <div class="row">
                        <div class="col-8 col-7-large col-12-medium">
                            <header>
                                <h1>
                                    <a href="<?= get_bloginfo('wpurl'); ?>">
                                        <strong><?= get_bloginfo('name'); ?></strong>
                                    </a>
                                </h1>
                            </header>
                            <p><?= get_bloginfo('description'); ?></p>
                            <div style="padding-top: 30px;" class="col-4 col-5-large col-12-medium">
                                <span class="image fit"><img id="img2" class="logo_petit" src="../img/Noir_petit.png"
                                                             alt=""/></span>
                            </div>
                            <!--<a href="#" class="button large scrolly">06 99 20 64 33</a>-->
                            <h1 style="padding-top: 40px;"><strong><a href="tel:+330699206433">06 99 20 64
                                        33</a></strong></h1>
                        </div>
                    </div>
                </div>
            </article>
            <div class="col-md-12 col-sm-12">
                <h2 style="padding-top: 80px;"><b>Retrouvez le confort de vos espaces</b></h2>
                <h3>
                    Nous faisons en sorte que vos espaces de vie redeviennent utilisables et sans nuisibles. Nous
                    intervenons en #Eure et Loir et dans le #Sud-Yvelines
                </h3>
                <hr>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section -->

<section id="portfolio">
    <div class="container">
        <div class="row">
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    get_template_part('content', get_post_format());
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
