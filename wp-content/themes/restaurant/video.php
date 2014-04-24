<?php
/*
Template Name: Videos Page
*/
?>
<?php get_header(); ?>   

	<?php
		if ( have_posts() ) : // если имеются записи в блоге.
		  query_posts('cat=7');   // указываем ID рубрик, которые необходимо вывести.
		  while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
		?>
		<div class="video-page">
		<h1><?php the_title(); ?></a></h1>
				<?php the_content();
			
		  endwhile;  // завершаем цикл.
		endif;
		/* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
		wp_reset_query();                
	?>
	</div>

<?php get_footer(); ?>