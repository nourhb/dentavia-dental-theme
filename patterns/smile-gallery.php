<?php
/**
 * Title: Smile gallery
 * Slug: dentavia/smile-gallery
 * Categories: dentavia
 * Description: Before-and-after style smile gallery with real patient smiles.
 *
 * @package Dentavia
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.85rem","letterSpacing":"0.2em","textTransform":"uppercase"},"color":{"text":"#0d9488"}}} -->
	<p class="has-text-align-center has-text-color" style="color:#0d9488;font-size:0.85rem;letter-spacing:0.2em;text-transform:uppercase">Smile Gallery</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--30)">Real smiles, real transformations</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1rem"},"color":{"text":"#64748b"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<p class="has-text-align-center has-text-color" style="color:#64748b;font-size:1rem;margin-bottom:var(--wp--preset--spacing--50)">Every smile below was transformed right here at Dentavia — whitening, aligners and veneers.</p>
	<!-- /wp:paragraph -->
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"className":"is-style-soft-frame dentavia-reveal","sizeSlug":"large"} -->
			<figure class="wp-block-image size-large is-style-soft-frame dentavia-reveal"><img src="<?php echo dentavia_img( 'smile-bright.jpg' ); ?>" alt="Bright white smile after professional whitening"/><figcaption class="wp-element-caption">Whitening · 1 visit</figcaption></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"className":"is-style-soft-frame dentavia-reveal","sizeSlug":"large"} -->
			<figure class="wp-block-image size-large is-style-soft-frame dentavia-reveal"><img src="<?php echo dentavia_img( 'smile-outdoor.jpg' ); ?>" alt="Confident natural smile outdoors after aligner treatment"/><figcaption class="wp-element-caption">Clear aligners · 8 months</figcaption></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"className":"is-style-soft-frame dentavia-reveal","sizeSlug":"large"} -->
			<figure class="wp-block-image size-large is-style-soft-frame dentavia-reveal"><img src="<?php echo dentavia_img( 'treatment-close.jpg' ); ?>" alt="Dentist performing detailed cosmetic dental work"/><figcaption class="wp-element-caption">Veneers · 2 visits</figcaption></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Start your smile makeover</a></div>
		<!-- /wp:button --></div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
