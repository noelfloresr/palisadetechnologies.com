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

        <div class="job-items">
          <?php while( have_posts() ) : the_post(); ?>
            <div class="et_pb_section career-item-section">
              <div class="et_pb_row">
                <div class="et_pb_column">
                  <div class="et_pb_module career-item">
                    <div class="date">
                      <span><?php echo get_field('career_date'); ?></span>
                    </div>
                    <div class="content">
                      <h2><?php the_title(); ?></h2>
                      <div class="excerpt"><?php the_excerpt(); ?></div>
                      <a href="<?php the_permalink() ?>" class="apply-now-link">Apply Now <i class="fas fa-long-arrow-alt-right"></i></a>
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