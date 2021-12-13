<?php get_header(); ?>
<body class="light">

<!-- Navigation section  -->

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


<!-- Contact Section -->

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10 col-sm-12">
                <div class="section-title">
                    <h2>Contact</h2>
                    <h3>Veuillez renseigner ici vos coordonnées pour que nous puissions vous contacter</h3>
                </div>

                <form action="mailto:contact@jabo.fr" method="post">
                    <div class="col-md-6 col-sm-6">
                        <input type="text" id="place" class="form-control" placeholder="Nom" required>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <input type="email" id="place" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <input type="telephone" id="place" class="form-control text_color" placeholder="Numéro de téléphone" required>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <textarea class="form-control" id="place" rows="5" placeholder="Décrivez la situation" required></textarea>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <input type="submit" class="form-control" value="Envoyer">
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>
