<?php
/*
Template Name: Blog Page
*/
?>
<?php get_header(); ?> 
<?php
query_posts('cat=5');
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="img-prev">
  	<img title="<?php the_title(); ?>" src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" width="150" />
  </div>
  <article class="article-content">	"<?php the_excerpt(); ?> <a href="<?php the_permalink() ?>">Читать полностью &raquo;</a>"</article>
<?php endwhile; endif;
wp_reset_query();
?>
<?php get_footer(); ?>