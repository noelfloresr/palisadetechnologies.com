<?php
/* 
Template Name: Career Archives
Template Post Type: careers
*/
get_header(); ?>

<div id="et-main-area">
  <div id="main-content">
    <article id="single-career">
      <div class="entry-content">

        <div class="et_pb_section hero-section">
          <div class="et_pb_row">
            <div class="et_pb_column">
              <div class="et_pb_module">
                <div class="hero">
                  
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="job-item">
          <?php while( have_posts() ) : the_post(); ?>
            <div class="et_pb_section career-item-section">
              <div class="et_pb_row">
                <div class="et_pb_column">
                  <div class="et_pb_module career-item">
                    <header>
                      <h1><?php the_title(); ?></h1>
                      <div class="date">
                        <span><?php echo get_field('career_date'); ?></span>
                      </div>
                    </header>
                    <div class="content">
                      <div class="social-icons">
                        <ul>
                          <li><a href="#" target="_blank" rel="noopener noreferrer"></a>
                            <img src="/wp-content/themes/divi-child/dist/images/facebook.png" alt="">
                          </li>
                          <li><a href="#" target="_blank" rel="noopener noreferrer">
                            <img src="/wp-content/themes/divi-child/dist/images/twitter.png" alt="">
                          </a></li>
                          <li><a href="#" target="_blank" rel="noopener noreferrer">
                            <img src="/wp-content/themes/divi-child/dist/images/google-plus.png" alt="">
                          </a></li>
                          <li><a href="#" target="_blank" rel="noopener noreferrer">
                            <img src="/wp-content/themes/divi-child/dist/images/linkedin.png" alt="">
                          </a></li>
                        </ul>
                      </div>
                      <div class=""><?php the_content(); ?></div>
                      <div class="requirements">
                        <h2>Requirements</h2>
                        <div class="requirement">
                          <h3>Minimum Required Skills</h3>
                          <p><?php echo get_field('minimum_required_skills'); ?></p>
                        </div>
                        <div class="requirement">
                          <h3>Degree Level</h3>
                          <p><?php echo get_field('degree_level'); ?></p>
                        </div>
                        <div class="requirement">
                          <h3>Minimum Training</h3>
                          <p><?php echo get_field('minimum_training'); ?></p>
                        </div>
                        <div class="requirement">
                          <h3>Minimum Qualifications</h3>
                          <p><?php echo get_field('minimum_qualifications'); ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php 
            endwhile;
            wp_reset_postdata();
          ?>
        </div>
        
      </div>
    </article>
  </div>
</div>
<?php get_footer(); ?>