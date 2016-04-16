<?php
/*
Template Name: Thanks
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div id="page" role="main">
<article class="main-content">
<?php do_action( 'foundationpress_before_content' ); ?>
<?php
$args=array(
'post_type' => 'message',
 'post_status' => 'publish',
 'paged' => true,
 'posts_per_page' => 10,
 'ignore_sticky_posts'=> 1
);

$wp_query = new WP_Query($args);
$even = true;
while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
  <?php
  if ($even){
    $classes = array (
      'callout',
      'secondary',
    );
  } else {
    $classes = array (
      'callout',
    );
  }
  $even = !$even;
  ?>
<div <?php post_class($classes) ?> id="post-<?php the_ID(); ?>">
    <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
      <div class="entry-content">
          <?php the_content(); ?>
      </div>
      <?php
      $footerValues = array();
      $fromName = get_custom_field('fromName');
      $location = get_custom_field('location');
      $messageDate = get_custom_field('messageDate');
      if (!empty($fromName)) $footerValues[0] = $fromName;
      if (!empty($location)) $footerValues[1] = $location;
      ?>
      <div class="messageFooter">
        <div class="messageFooterName"><?php print implode(', ',$footerValues); ?></div>
        <div><?php print $messageDate; ?></div>
      </div>
      <footer>
          <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
          <p><?php the_tags(); ?></p>
      </footer>
      <?php do_action( 'foundationpress_page_before_comments' ); ?>
      <?php comments_template(); ?>
      <?php do_action( 'foundationpress_page_after_comments' ); ?>
  </div>
<?php endwhile;?>
<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
  <nav id="post-nav">
    <div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
    <div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
  </nav>
<?php } ?>

<?php do_action( 'foundationpress_after_content' ); ?>
</article>
<?php get_sidebar(); ?>
</div>

<?php get_footer();
