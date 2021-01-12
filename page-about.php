<?php
get_header();
/* Template Name: about */
?>

<main id="about">
      <h1 class="lg-heading">
          About <span class="text-secondary">Me</span>
      </h1>
      <h2 class="sm-heading">
          Let me tell you a few things
      </h2>
      
      <div class="about-info">
      
            <?php while (have_rows('small_portrait')) : the_row();
             $image = get_sub_field('port');
            ?>
            <img src="<?php echo $image?>" alt="Kam Saiyed" class="bio-image" />
    
            <?php endwhile ; ?>
          
          <div class="bio">
              <h3 class="textsecondary">BIO</h3>
              <p><?php echo get_field('paragraph') ?></p>
          </div>

          <div class="job job-1">
            <h3>Kipling Media</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                 sed do eiusmod tempor incididunt ut labore et dolore magna 
                 aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                 ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                  aute irure dolor in reprehenderit in voluptate</p>
          </div>

          <div class="job job-2">
            <h3>Kipling Media</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                 sed do eiusmod tempor incididunt ut labore et dolore magna 
                 aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                 ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                  aute irure dolor in reprehenderit in voluptate</p>
          </div>

          <div class="job job-3">
            <h3>Kipling Media</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                 sed do eiusmod tempor incididunt ut labore et dolore magna 
                 aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                 ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                  aute irure dolor in reprehenderit in voluptate</p>
          </div>

          

      </div>
      
  </main>

  <?php wp_footer(); ?>
  </body>
  </html>