<?php
/* 
Template Name: Career Archives
Template Post Type: careers
*/
get_header(); ?>

<div id="et-main-area">
  <div id="main-content">
    <article id="careers-page">
      <div class="entry-content">

        <div class="et_pb_section hero-section">
          <div class="et_pb_row">
            <div class="et_pb_column">
              <div class="et_pb_module">
                <div class="hero">
                  <div class="title">
                    <h1>CAREERS</h1>
                  </div>
                  <div class="slogan">
                    <p>
                      Palisade is an Equal Opportunity/Affirmative Action/Pro Disabled & Veteran 
                      Employer that treats all candidates and employees equally without regard to race, 
                      color, religion, national origin, citizenship, age, sex, marital status, gender identity, 
                      physical, or mental disability, veteran status, or sexual orientation.
                    </p>
                  </div>
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
                      <a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
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
        

        <div class="et_pb_section career-benefits-section">
          <div class="et_pb_row">
            <div class="et_pb_column benefits-column et_pb_column_1_3 active">
              <div class="et_pb_module">
                <h3>Benefits</h3>
                <div class="show-mobile">
                  <ul>
                    <li>Paid dental, life, and long-term disability insurance</li>
                    <li>Competitive BCBS health benefits available</li>
                    <li>Immediate vesting in a 401(k) plan with historical company contributions of 20% of employee salary</li>
                    <li>2 weeks paid sick leave</li>
                    <li>Minimum of 2 weeks vacation</li>
                    <li>Eleven paid holidays per year</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="et_pb_column professional-development-column et_pb_column_1_3">
              <div class="et_pb_module">
                <h3>
                  PROFESSIONAL </br>
                  DEVELOPMENT
                </h3>
                <div class="show-mobile">
                  <p>
                  We support the professional development of all our employees. 
                  Support includes reimbursement for tuition, society fees, and journal subscriptions.
                  </p>
                </div>
              </div>
            </div>
            <div class="et_pb_column internship-column et_pb_column_1_3">
              <div class="et_pb_module">
                <h3>
                  INTERNSHIPS
                </h3>
                <div class="show-mobile">
                  <p>
                  Palisade is a strong supporter of hiring student employees whenever a government customer has a need for such support. 
                  Many current mid-level Palisade engineers are former cooperative education students who started their careers with Palisade.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="et_pb_row benefits-row">
            <div class="et_pb_column et_pb_column_1_2">
              <div class="et_pb_module benefits">
                <ul>
                  <li>Paid dental, life, and long-term disability insurance</li>
                  <li>Competitive BCBS health benefits available</li>
                  <li>Immediate vesting in a 401(k) plan with historical company contributions of 20% of employee salary</li>
                </ul>
              </div>
            </div>
            <div class="et_pb_column et_pb_column_1_2">
              <div class="et_pb_module benefits">
                <ul>
                  <li>2 weeks paid sick leave</li>
                  <li>Minimum of 2 weeks vacation</li>
                  <li>Eleven paid holidays per year</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="et_pb_row professional-development-row">
            <div class="et_pb_column et_pb_column_1_1">
              <div class="et_pb_module professional-development">
                <p>
                We support the professional development of all our employees. 
                Support includes reimbursement for tuition, society fees, and journal subscriptions.
                </p>
              </div>
            </div>
          </div>

          <div class="et_pb_row internship-row">
            <div class="et_pb_column et_pb_column_1_1">
              <div class="et_pb_module internship">
                <p>
                Palisade is a strong supporter of hiring student employees whenever a government customer has a need for such support. 
                Many current mid-level Palisade engineers are former cooperative education students who started their careers with Palisade.
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