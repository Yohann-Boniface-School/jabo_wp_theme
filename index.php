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
            <?php wp_nav_menu(
                    [
                        'theme_location' => 'menu-principal',
                        'container' => 'ul',
                        'menu_class' => 'nav navbar-nav navbar-right'
                    ]
            ) ?>
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
                        </div>
                    </div>
                </div>
            </article>
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
