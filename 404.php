<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RavensPearl
 */

get_header(); 
get_template_part('content', 'header');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header center">
					<h1 class="page-title"><?php esc_html_e( 'Page not found', 'ravenspearl' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<div class="container blog-container">
					<div class="row">
						<div class="col-md-12">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'ravenspearl' ); ?></p>

					<?php
						get_search_form();

						//the_widget( 'WP_Widget_Recent_Posts' );

						// Only show the widget if site has multiple categories.
						if ( ravenspearl_categorized_blog() ) :
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'ravenspearl' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->

					<?php
						endif;

						/* translators: %1$s: smiley */
						$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'ravenspearl' ), convert_smilies( ':)' ) ) . '</p>';
						//the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

						//the_widget( 'WP_Widget_Tag_Cloud' );
					?>
							</div>
						</div><!-- row -->
					</div><!-- blog-container -->
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
<div class="padder"></div>
<?php
get_footer();
