<?php

get_header(); 
pageBanner(array(
  'title' => 'All Campuses',
  'subtitle' => 'We have conveniently located campuses.'
));
?>

<div class="container container--narrow page-section">
<ul class="link-list min-list">
    <?php
        while(have_posts()) {
        the_post(); ?>
        <!--<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> -->

        <div class="event-summary__content">
            <h5 class="event-summary__title headline headline--tiny">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h5>
            <p><?php if (has_excerpt()) {
                    echo get_the_excerpt();
                  } else {
                    echo wp_trim_words(get_the_content(), 18);
                    } 
                ?> 
                <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a>
                <hr class="section-break">
            </p>
        </div>
    
    <?php }
        echo paginate_links();
    ?>
<ul>
</div>

<?php get_footer();
?>