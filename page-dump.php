<!-- GOOD stuff -->

<?php
$args = array(  'post_type' => 'product', 
 								'product_cat' => 'ceramic',
 								'posts_per_page' => -1,
 								'columns' => '3',  							
 								);
 
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
  <li class="product col-md-4">    
    <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>hello">
        <h3><?php the_title(); ?></h3><br /><span class="price"><?php echo $product->get_price_html(); ?></span><br />
        <?php woocommerce_show_product_sale_flash( $post, $product ); ?>
        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?></a>
        <span class="motangan"><?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?></span><br />
  </li>
    <?php
/**
 * woocommerce_pagination hook
 *
 * @hooked woocommerce_pagination - 10
 * @hooked woocommerce_catalog_ordering - 20
 */
do_action( 'woocommerce_pagination' );
        ?>
<?php endwhile; ?>
<?php wp_reset_query(); ?>


<!-- to here -->






<!--<?php
              wp_nav_menu( array(
                
                'theme_location'  => 'primary',                
                'container'     => 'div',
                'container_class' => 'navbar-collapse collapse',
                'menu_class'    => 'nav navbar-nav'                
              ) );
            ?>-->






<?php

				$args = array(
					'post_type' => 'product',
					'meta_key' => '_featured',
					'meta_value' => 'yes',
					'posts_per_page' => 1
				);

				$featured_query = new WP_Query( $args );
					
				if ($featured_query->have_posts()) : 
					
					while ($featured_query->have_posts()) : 
						
						$featured_query->the_post();
						
						$product = get_product( $featured_query->post->ID );
						
						// Output product information here
						
					endwhile;
					
				endif;

				

				wp_reset_query(); // Remember to reset








			?>












			<?php 

	$posts = get_posts(array(
		'numberposts'	=> -1,
		'post_type'		=> 'post',
		'meta_key'		=> 'color',
		'meta_value'	=> 'red'
	));

	if( $posts ): ?>
		
		<ul>
			
		<?php foreach( $posts as $post ): 
			
			setup_postdata( $post )
			
			?>
			<li>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</li>
		
		<?php endforeach; ?>
		
		</ul>
		
		<?php wp_reset_postdata(); ?>

	<?php endif; ?>





	<!-- <ul id="alm-filter-nav">
  <li><a href="#" data-repeater="default" data-post-type="standard" data-posts-per-page="3" data-scroll="false" data-button-label="Load More Work">Recent Work</a></li>
  <li><a href="#" data-repeater="default" data-post-type="standard" data-posts-per-page="5" data-scroll="true" data-button-label="Load More Articles">Recent Articles</a></li>
</ul> -->