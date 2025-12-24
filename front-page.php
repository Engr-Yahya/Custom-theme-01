<?php
get_header(); ?>
<?php $news = get_terms([
  'taxonomy' => 'news-category',
  'hide_empty' => false,
  'orderby' => 'name',
  'order' => 'Des'
]);

foreach ($news as $newsData) {

  $taxonomy_img = get_taxonomy_image($newsData->term_id);

  if ($taxonomy_img) {
    echo '<img src="' . esc_url($taxonomy_img) . '" alt="' . esc_attr($newsData->name) . '">';
  }
} ?>

<div class="center-div grid">
  <?php
  $paged = get_query_var('paged', 1);
  $wp_query = new Wp_Query([
    'post_type' => 'post',
    'posts_per_page' => 6,
    'paged' => $paged,
  ]);

  if ($wp_query->have_posts()) {
    while ($wp_query->have_posts()) {
      $wp_query->the_post();
      global $post;
      ?>

      <!-- <a class="article" href="<?php the_permalink(); ?>"> -->
      <article class="post">
        <img class="thumb-img" src="<?php the_post_thumbnail_url(); ?>" alt="thumbnail image" />
        <div class="media">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
          <span class="date"><?php print_r(date('d M, Y h:m:s', strtotime($post->post_date))); ?> </span>
          <?php the_excerpt(); ?>
        </div>
      </article>
      <!-- </a> -->
      <?php
    }
  } else {
    echo '<p>No Content Found </p>';
  }
  wp_reset_postdata();
  ?>
</div>
<div class="btn">
  <a href="/blog/">View All Posts</a>
</div>
<?php
get_footer();

?>