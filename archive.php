<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package RavensPearl
 */

get_header(); 
get_template_part('content', 'header');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
		<?php
		if ( have_posts() ) : ?>

			<header class="page-header center">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<div class="container blog-container">
				<div class="row">
					<div class="col-md-8">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
			</div><!-- col-md-8 -->
					<div class="col-md-4">
						<?php get_template_part('content', 'sidebar'); ?>
					</div>
				</div><!-- row -->
			</div><!-- blog-container -->
		</main><!-- #main -->
	</div><!-- #primary -->
<div class="padder"></div>
<?php

get_footer();
