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
      <div class="item">
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
      </div>
    </div>

    <div id="main-footer">
     Copyright &copy; 2020
    </div>
  </main>
  <?php wp_footer(); ?>
  </body>
  </html>