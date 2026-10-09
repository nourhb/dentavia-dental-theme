<?php
/**
 * Title: About story
 * Slug: dentavia/about-story
 * Categories: dentavia
 * Description: Two-column clinic story with equipment list and photo.
 *
 * @package Dentavia
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:heading {"className":"is-style-teal-rule"} -->
			<h2 class="wp-block-heading is-style-teal-rule">A clinic built around calm</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"color":{"text":"#475569"}}} -->
			<p class="has-text-color" style="color:#475569">Dentavia opened in 2011 with one simple idea: dentistry should never be scary. Our Hamilton clinic was designed from scratch to feel calm — natural light, quiet rooms, noise-cancelling headphones and a team trained in anxiety-free care.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"color":{"text":"#475569"}}} -->
			<p class="has-text-color" style="color:#475569">We invested in modern digital equipment — 3D imaging, same-day crowns and laser dentistry — so treatments are faster, more precise and more comfortable than ever.</p>
			<!-- /wp:paragraph -->
			<!-- wp:list {"style":{"color":{"text":"#134e4a"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<ul style="color:#134e4a;margin-top:var(--wp--preset--spacing--40)" class="has-text-color"><!-- wp:list-item -->
				<li>✓ Digital 3D X-rays — 90% less radiation</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li>✓ Same-day ceramic crowns</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li>✓ Laser dentistry for gentle treatments</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li>✓ Sedation options for anxious patients</li>
				<!-- /wp:list-item --></ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"className":"is-style-soft-frame dentavia-reveal","sizeSlug":"large"} -->
			<figure class="wp-block-image size-large is-style-soft-frame dentavia-reveal"><img src="<?php echo dentavia_img( 'operatory.jpg' ); ?>" alt="Bright modern Dentavia treatment room with digital equipment"/></figure>
			<!-- /wp:image -->
			<!-- wp:image {"className":"is-style-soft-frame dentavia-reveal","sizeSlug":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<figure class="wp-block-image size-large is-style-soft-frame dentavia-reveal" style="margin-top:var(--wp--preset--spacing--40)"><img src="<?php echo dentavia_img( 'equipment-lamp.jpg' ); ?>" alt="Dentist preparing modern dental equipment"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
