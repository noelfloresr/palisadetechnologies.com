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
                      <div class="job-description"><?php the_content(); ?></div>
                      <div class="job-detail">
                        <div class="requirements">
                          <h2>Requirements</h2>

                          <div class="requirement">
                            <div class="icon">
                              <img src="/wp-content/themes/divi-child/dist/images/single-job-tools-icon.png" alt="">
                            </div>
                            <div class="description">
                              <h3>Minimum Required Skills</h3>
                              <p><?php echo get_field('minimum_required_skills'); ?></p>
                            </div>
                          </div>

                          <div class="requirement">
                            <div class="icon">
                              <img src="/wp-content/themes/divi-child/dist/images/single-job-mortarboard-icon.png" alt="">
                            </div>
                            <div class="description">
                              <h3>Degree Level</h3>
                              <p><?php echo get_field('degree_level'); ?></p>
                            </div>
                          </div>

                          <div class="requirement">
                            <div class="icon">
                              <img src="/wp-content/themes/divi-child/dist/images/single-job-notes-icon.png" alt="">
                            </div>
                            <div class="description">
                              <h3>Minimum Training</h3>
                              <p><?php echo get_field('minimum_training'); ?></p>
                            </div>
                          </div>

                          <div class="requirement">
                            <div class="icon">
                              <img src="/wp-content/themes/divi-child/dist/images/single-job-diploma-icon.png" alt="">
                            </div>
                            <div class="description">
                              <h3>Minimum Qualifications</h3>
                              <p><?php echo get_field('minimum_qualifications'); ?></p>
                            </div>
                            
                          </div>
                        </div>
                        <div class="contact">
                          <h2>Apply Today!</h2>
                          <p>
                            To apply for this position, </br>
                            please email your resume to <a href="mailto:jobs@palisade.com">jobs@palisade.com</a> </br>
                            with the subject line: </br>
                            <?php the_title(); ?>
                          </p>
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
        
        <div class="et_pb_section announcement-section">
          <div class="et_pb_row">
            <div class="et_pb_column">
              <div class="et_pb_module">
                <p>
                  If you are a qualified individual with a disability or disabled veteran, 
                  you have the right to request a reasonable accommodation. 
                  If you are unable or limited in your ability to use or access the Palisade career page, 
                  as a result of your disability, 
                  you can request a reasonable accommodation by calling the Palisade HR Coordinator at XXX-XXX-XXXX or by sending an email to jobs@palisade.com 
                  Thank you for your interest in Palisade.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="et_pb_section policy-section">
          <div class="et_pb_row">
            <div class="et_pb_column">
              <div class="et_pb_module">
                <p>
                Palisade, Inc. abides by the requirements of 41 CFR §§ 60-1.4(a), 60-300.5(a) and 60-741.5(a).
                These regulations prohibit discrimination against qualified individuals based on their status as protected veterans or individuals with disabilities, 
                and prohibit discrimination against all individuals based on sexual orientation, gender identity, 
                national origin, age, disability status, genetic information, protected veteran status or any other 
                characteristics protected by law. Moreover, these regulations require that covered prime contractors and 
                subcontractors take affirmative action to employ and advance in employment individuals without regard to 
                sexual orientation, gender identity, national origin, age, disability status, genetic information, 
                protected veteran status or any other characteristics protected by law. 
                All applicants are considered for all positions based on the requirements specified above.
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </article>
  </div>
</div>
<?php get_footer(); ?>