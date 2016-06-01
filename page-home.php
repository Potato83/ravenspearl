<?php
/*
Template Name: Home Page
 */
get_header();

$gallery = get_field('gallery');
get_template_part('content', 'sidebar');
?>

<section id="home-page">
	<div class="row">
		<?php 
			if($gallery){
				foreach ($gallery as $cover) {
					$cover_image = $cover['cover_image']['url'];
					echo '<div class="gallery-thumb col-sm-3"><a href="#"><div class="covers"><img src="' . $cover_image . '" alt=""><div class="discipline"><div class="title-link">TITLE</div></div></div></a></div>'; 
				}
			}	
		?>
	</div><!-- .row -->

</section><!-- #home-page -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>