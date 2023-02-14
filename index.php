<?php get_header() ?>
    <main class="container d-flex flex-column align-items-center mt-3">


        <!-- qui suis ? -->
        <div class="row w-100 mx-0">
            <div class="col-12">
                <div class="text-white text-center">
                    <h3 class="fs-2">QUI SUIS-JE?</h3>
                    <p class="fs-3">FLEIG Véronique<br>
                        48160 St Hilaire de Lavit

                    </p>
                </div>
            </div>
        </div>

        <!-- ce que j'aime -->
        <div class="row w-75 mx-0 bcg_main_row2 rounded justify-content-center">
            <div class="col-12 mx-0">
                <div class="text-primary text-center">
                    <h2> Ce que j'aime?</h2><br>
                    <p>La lecture, le cinéma,les séries, faire de la musique,des randonnées, de l'escalade, et ...faire
                        la cuisine!</p>
                </div>
            </div>
        </div>
        <!-- diplôme et compétences -->
        <div class="row w-100 mx-0 bcg-main-row3 rounded">
            <div class="col-md-12 col-lg-6">
                <div
                    class="text-white text-center bcg_main_row3 h-100 d-flex flex-column justify-content-around rounded">
                    <!-- diplome et compétences -->
                    <div id="bcg_main_row3" class="card">
  <div class="card-body">
  <h1 class="mb-5"><i class="bi bi-briefcase"></i> <br><button type="button" class="btn btn-outline-light"><a href="<?= get_template_directory_uri(); ?>'/page-diplomes.php'">DIPLOMES</button></a></h1>
  </div>
</div>


                    <div id="bcg_main_row3" class="card">
  <div class="card-body">
  <h1 class="mb-5"><i class="bi bi-bar-chart-line-fill"></i><br><button type="button" class="btn btn-outline-light"><a href="<?= get_template_directory_uri(); ?>'/page-competences.php'">COMPETENCES</button></a></h1>
  </div>
</div>

                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div
                    class="text-white text-center bcg_main_row3 h-100 d-flex flex-column justify-content-around rounded">
                    <!-- Parcours pro -->
                    <h1><i class="bi bi-calendar-check-fill"></i><br>PARCOURS PROFESSIONNEL</h1>
                    <p class="fs-4">Depuis 1984</p>
                    <p class="text-parcours-proffesionnel"> Encadrement d'enfants dans diverses structures:<br>
                        MJC, CVL, Centres de découverte de l'environnement et des sports de montagne, école du cirque,
                        école de théatre,écoles maternelles, collège.</p>
                    


                        <?php if (have_posts()): // ON verifie si on a des articles ?> 
                        <?php while(have_posts()): the_post();// the_post sert a déclarer l'articles ) // on utilise cette boucle tant que il ya des articles?>

                        <div class="col d-flex justify-content-center">


                            <div id="bcg_main_row3" class="card">
                                <?php the_post_thumbnail('medium',['class' => 'card-img-top', 'alt' => '', 'style' => 'height: auto;']) ?>
                              <div class="card-body">
                                <h5 class="card-title"><?php the_title() ?></h5>
                                <p class="card-text"> 
                                    <?php the_content('En voir plus') // afficher le contenue de notre article ?>
                                </p>
                                <a href="<?php the_permalink() ?>" class="card-link">Plus de détails</a>
                              </div>
                            </div>
                            </div>
                            <?php endwhile ?>
                        </div>
                        <?php else: ?>
                            <p> Pas d'articles </p>
                        <?php endif; ?>


                </div>
            </div>
        </div>
    </main>

<?php get_footer() ?>