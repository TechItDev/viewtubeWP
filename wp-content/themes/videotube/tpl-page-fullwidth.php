<?php if( !defined('ABSPATH') ) exit;?>
<?php
/**
 * Template Name: Page Full Width
 */
?>
<?php get_header(); ?>
<main id="site-content">
	<div class="container">
		<?php if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('<p id="breadcrumbs">','</p>');
		} ?>
		 <div <?php post_class();?>>
			<?php the_post();?>
                    <?php get_template_part('content','page');?>
                </div><!-- /.post -->
                
				<?php dynamic_sidebar('mars-blog-single-bellow-content-sidebar');?>
			<?php 
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
			?>	
		</div>
	</div><!-- /.container -->
</main>	
<?php get_footer();?>