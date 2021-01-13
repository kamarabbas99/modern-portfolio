<?php
/* Template Name: work */
get_header();

?>

<main id="work">
    <h1 class="lg-heading">
      My
      <span class="text-secondary">Work</span>
    </h1>
    <h2 class="sm-heading">
      Check out some of my projects...
    </h2>

    <div class="projects">


      <?php while (have_rows('projects')) : the_row();
        $image = get_sub_field('image');
        $title = get_sub_field('title');
        $tech = get_sub_field('tech');
        $gitLink = get_sub_field('gitLink');
        $projectLink = get_sub_field('projectLink');
      ?>
        <img src="<?php echo $image?>" alt="Kam Saiyed" class="bio-image" />

        <div class="item">
          <a href="<?php echo $gitLink?>">
            <img src="<?php echo $image?>" alt="Project">
          </a>
          <a href="projectLink" class="btn-light">
            <i class="fas fa-eye"></i> Project
          </a>
          <a href="<?php echo $gitLink?>" class="btn-dark">
            <i class="fab fa-github"></i> Github
          </a>
        </div>

      <?php endwhile ; ?>

      <!-- <div class="item">
        <a href="#!">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projects/project1.jpg" alt="Project">
        </a>
        <a href="#" class="btn-light">
          <i class="fas fa-eye"></i> Project
        </a>
        <a href="#" class="btn-dark">
          <i class="fab fa-github"></i> Github
        </a>
      </div>

      <div class="item">
        <a href="#!">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projects/project2.jpg" alt="Project">
        </a>
        <a href="#" class="btn-light">
          <i class="fas fa-eye"></i> Project
        </a>
        <a href="#" class="btn-dark">
          <i class="fab fa-github"></i> Github
        </a>
      </div>

      <div class="item">
        <a href="#!">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projects/project3.jpg" alt="Project">
        </a>
        <a href="#" class="btn-light">
          <i class="fas fa-eye"></i> Project
        </a>
        <a href="#" class="btn-dark">
          <i class="fab fa-github"></i> Github
        </a>
      </div>

      <div class="item">
        <a href="#!">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projects/project4.jpg" alt="Project">
        </a>
        <a href="#" class="btn-light">
          <i class="fas fa-eye"></i> Project
        </a>
        <a href="#" class="btn-dark">
          <i class="fab fa-github"></i> Github
        </a>
      </div>

      <div class="item">
        <a href="#!">
          <img src= "<?php echo get_template_directory_uri();?>/assets/images/projects/project5.jpg" alt="Project">
        </a>
        <a href="#" class="btn-light">
          <i class="fas fa-eye"></i> Project
        </a>
        <a href="#" class="btn-dark">
          <i class="fab fa-github"></i> Github
        </a>
      </div> -->

    </div>

    <div id="main-footer">
     Copyright &copy; 2020
    </div>
  </main>
  <?php wp_footer(); ?>
  </body>
  </html>