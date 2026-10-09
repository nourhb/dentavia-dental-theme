<?php
/**
 * Title: Latest from the blog
 * Slug: dentavia/blog-latest
 * Categories: dentavia
 * Description: Three latest blog posts with featured images.
 *
 * @package Dentavia
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.85rem","letterSpacing":"0.2em","textTransform":"uppercase"},"color":{"text":"#0d9488"}}} -->
	<p class="has-text-align-center has-text-color" style="color:#0d9488;font-size:0.85rem;letter-spacing:0.2em;text-transform:uppercase">Dental Tips</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--50)">From our blog</h2>
	<!-- /wp:heading -->
	<!-- wp:query {"queryId":1,"query":{"perPage":3,"postType":"post","order":"desc","orderBy":"date"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:group {"className":"is-style-dentavia-card","style":{"color":{"background":"#ffffff"},"border":{"radius":"18px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group is-style-dentavia-card has-background" style="background-color:#ffffff;border-radius:18px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:post-featured-image {"isLink":true,"className":"is-style-soft-frame"} /-->
			<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"1.15rem"}}} /-->
			<!-- wp:post-excerpt {"moreText":"Read more","style":{"typography":{"fontSize":"0.9rem"},"color":{"text":"#64748b"}}} /-->
			<!-- wp:post-date {"style":{"typography":{"fontSize":"0.8rem"},"color":{"text":"#94a3b8"}}} /-->
		</div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->
		<!-- wp:query-no-results -->
		<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#64748b"}}} -->
		<p class="has-text-align-center has-text-color" style="color:#64748b">No posts yet — check back soon for dental tips!</p>
		<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
