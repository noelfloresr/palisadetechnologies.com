<?php
  function recent_contracts_function() {
    global $post;
      $html = "";
      $my_query = new WP_Query( array(
           'post_type' => 'contracts',
           'posts_per_page' => 3
      ));
      if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();
          $html .= "<div class='custom-post-type-list'>";
            $html .= "<h3 class='title'>" . get_the_title() . " </h3>";
            $html .= "<div class='date'>" . get_field('date_of_contract') . " </div>";
            $html .= "<div class='content'>";
              $html .= "<div class='contract-image'>" .get_the_post_thumbnail() . "</div>";
              $html .= "<div class='contract-description'> <p>" . get_field('brief_description') . "</p> </div>";
            $html .= "</div>";
          $html .= "</div>";
         endwhile;
       wp_reset_postdata();
   endif;
      return $html;
  }

  // Careers Shortcode
  function recent_careers_function() {
    global $post;
      $html = "";
      $my_query = new WP_Query( array(
           'post_type' => 'careers',
           'posts_per_page' => 3
      ));
      if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();
          $html .= "<div class='custom-post-type-list'>";
            $html .= "<a href=" . get_permalink() . " target='_self'><h3 class='title'>" . get_the_title() . " </h3></a>";
            $html .= "
            <div class='social-icons'>
              <ul>
                <li>
                  <a target='_blank' href='https://www.facebook.com/sharer/sharer.php?u=" . get_permalink() . "  rel='noopener noreferrer'>
                    <img src='/wp-content/themes/divi-child/dist/images/facebook.png' alt=''>
                  </a>
                </li>
                <li>
                  <a target='_blank' href='https://twitter.com/share?u=" . get_permalink() . "  rel='noopener noreferrer'>
                    <img src='/wp-content/themes/divi-child/dist/images/twitter.png' alt=''>
                  </a>
                </li>
                <li>
                  <a target='_blank' href='https://www.linkedin.com/shareArticle?mini=true&url=" . get_permalink() . " rel='noopener noreferrer'>
                    <img src='/wp-content/themes/divi-child/dist/images/linkedin.png' alt=''>
                  </a>
                </li>
              </ul>
            </div>";
            $html .= "<div class='content'>";
              $html .= "<div class='excerpt'><p>" . get_the_excerpt() . "</p></div>";
            $html .= "</div>";
            $html .= "<a class='blue-button' href=" . get_permalink() . "> View & Apply </a>";
          $html .= "</div>";
         endwhile;
         $html .= "<a href='/careers' class='view-all-link'>VIEW ALL OPENINGS </a> <i class='fas fa-arrow-right'></i>";
       wp_reset_postdata();
   endif;
      return $html;
  }
  function register_shortcodes(){
    add_shortcode('ContractList', 'recent_contracts_function');
    add_shortcode('CareersList', 'recent_careers_function');
  }
  add_action( 'init', 'register_shortcodes');
?>