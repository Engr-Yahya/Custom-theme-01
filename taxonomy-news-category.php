<?php
get_header();

$term = get_queried_object();
$term_posts = new WP_Query([
  'post_type' => 'news',
  'post_status' => 'publish',
  'tax_query' => [
    [
      'taxonomy' => 'news-category',
      'field' => 'term_id',
      'terms' => $term->term_id,
    ]
  ],
]);

if ($term_posts->have_posts()): ?>
  <h1><?php echo esc_html($term->name); ?></h1>

  <ul>
    <?php while ($term_posts->have_posts()):
      $term_posts->the_post(); ?>
      <li>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </li>
    <?php endwhile; ?>
  </ul>

  <?php
  wp_reset_postdata();
else:
  echo '<p>No posts found in this category.</p>';
endif;

get_footer();
?>