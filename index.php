<?php

get_header(); ?>

<div class="grid">
  <?php
  if (have_posts()) {
    while (have_posts()) {
      the_post(); ?>
      <article class="post">
        <img class="thumb-img" src="<?php the_post_thumbnail_url(); ?>" alt="thumbnail image" />
        <div class="media">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
          <span class="date"><?php the_date(); ?> </span>
          <?php the_excerpt(); ?>
        </div>
      </article>
      <?php
    }
  } else {
    echo '<p>No Content Found </p>';
  } ?>
</div>
<div class="pagination">
  <?php
  the_posts_pagination();
  ?>
</div>
<?php
get_footer();

?>