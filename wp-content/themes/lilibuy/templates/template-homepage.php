<?php
/* Template name: Homepage Lilibuy */

get_header(); 

	get_template_part('includes/commons/_slider');
?>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<header class="site-main__header">
				<h2>Últimos Productos</h2>
			</header>

			<?php
			/**
			 * Functions hooked in to homepage action
			 *
			 * @hooked storefront_homepage_content      - 10
			 * @hooked storefront_product_categories    - 20
			 * @hooked storefront_recent_products       - 30
			 * @hooked storefront_featured_products     - 40
			 * @hooked storefront_popular_products      - 50
			 * @hooked storefront_on_sale_products      - 60
			 * @hooked storefront_best_selling_products - 70
			 */
				echo do_shortcode( '[recent_products per_page="12" columns="4" orderby="date" order="DESC"]' );
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();