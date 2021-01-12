<?php get_header(); ?>

    <!-- CONTENT -->


<main  id="home">
    <h1 class="lg-heading">
    <?php the_field('firstname') ?>
      <span class="text-secondary"><?php the_field('lastname_') ?></span>
    </h1>
    <h2 class="sm-heading">
    <?php the_field('description') ?>
    </h2>
    <div class="icons">
      <a href="#!">
        <i class="fab fa-twitter fa-2x"></i>
      </a>
      <a href="#!">
        <i class="fab fa-facebook fa-2x"></i>
      </a>
      <a href="#!">
        <i class="fab fa-linkedin fa-2x"></i>
      </a>
      <a href="#!">
        <i class="fab fa-github fa-2x"></i>
      </a>
    </div>
  </main>



<?php get_footer(); ?>