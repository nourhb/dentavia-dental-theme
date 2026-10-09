<?php
/**
 * Title: Team grid
 * Slug: dentavia/team-grid
 * Categories: dentavia
 * Description: Three dentist profiles with photos, roles and bios.
 *
 * @package Dentavia
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.85rem","letterSpacing":"0.2em","textTransform":"uppercase"},"color":{"text":"#0d9488"}}} -->
	<p class="has-text-align-center has-text-color" style="color:#0d9488;font-size:0.85rem;letter-spacing:0.2em;text-transform:uppercase">Meet The Team</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--50)">Dentists who genuinely care</h2>
	<!-- /wp:heading -->
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-dentavia-card dentavia-reveal","style":{"color":{"background":"#ffffff"},"border":{"radius":"18px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-dentavia-card dentavia-reveal has-background" style="background-color:#ffffff;border-radius:18px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:image {"className":"is-style-soft-frame","sizeSlug":"large"} -->
				<figure class="wp-block-image size-large is-style-soft-frame"><img src="<?php echo dentavia_img( 'team-sofia.jpg' ); ?>" alt="Dr. Sofia Marchetti, cosmetic dentist"/></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":3,"textAlign":"center","style":{"typography":{"fontSize":"1.25rem"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
				<h3 class="wp-block-heading has-text-align-center" style="font-size:1.25rem;margin-top:var(--wp--preset--spacing--40)">Dr. Sofia Marchetti</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem","fontWeight":"600"},"color":{"text":"#0d9488"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#0d9488;font-size:0.9rem;font-weight:600">Cosmetic Dentistry</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#64748b"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#64748b;font-size:0.95rem">12 years crafting natural-looking smiles. Certified in veneers and smile design.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-dentavia-card dentavia-reveal","style":{"color":{"background":"#ffffff"},"border":{"radius":"18px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-dentavia-card dentavia-reveal has-background" style="background-color:#ffffff;border-radius:18px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:image {"className":"is-style-soft-frame","sizeSlug":"large"} -->
				<figure class="wp-block-image size-large is-style-soft-frame"><img src="<?php echo dentavia_img( 'team-daniel.jpg' ); ?>" alt="Dr. Daniel Brooks, family dentist"/></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":3,"textAlign":"center","style":{"typography":{"fontSize":"1.25rem"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
				<h3 class="wp-block-heading has-text-align-center" style="font-size:1.25rem;margin-top:var(--wp--preset--spacing--40)">Dr. Daniel Brooks</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem","fontWeight":"600"},"color":{"text":"#0d9488"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#0d9488;font-size:0.9rem;font-weight:600">Family &amp; Kids Dentistry</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#64748b"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#64748b;font-size:0.95rem">Makes even nervous kids laugh. Specialist in gentle, pain-free first visits.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-dentavia-card dentavia-reveal","style":{"color":{"background":"#ffffff"},"border":{"radius":"18px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-dentavia-card dentavia-reveal has-background" style="background-color:#ffffff;border-radius:18px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:image {"className":"is-style-soft-frame","sizeSlug":"large"} -->
				<figure class="wp-block-image size-large is-style-soft-frame"><img src="<?php echo dentavia_img( 'team-marcus.jpg' ); ?>" alt="Dr. Marcus Reid, implant surgeon"/></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":3,"textAlign":"center","style":{"typography":{"fontSize":"1.25rem"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
				<h3 class="wp-block-heading has-text-align-center" style="font-size:1.25rem;margin-top:var(--wp--preset--spacing--40)">Dr. Marcus Reid</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem","fontWeight":"600"},"color":{"text":"#0d9488"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#0d9488;font-size:0.9rem;font-weight:600">Implants &amp; Surgery</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#64748b"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#64748b;font-size:0.95rem">2,000+ successful implants. Precise, calm and honest about every option.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
