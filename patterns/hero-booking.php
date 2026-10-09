<?php
/**
 * Title: Hero with booking card
 * Slug: dentavia/hero-booking
 * Categories: dentavia
 * Description: Full-width hero with headline, trust stats and an appointment booking card.
 *
 * @package Dentavia
 */
?>
<!-- wp:cover {"url":"<?php echo dentavia_img( 'hero-treatment.jpg' ); ?>","dimRatio":55,"overlayColor":"pine","minHeight":640,"contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-pine-background-color has-background-dim-55 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Dentist gently treating a patient at Dentavia clinic" src="<?php echo dentavia_img( 'hero-treatment.jpg' ); ?>" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:columns {"verticalAlignment":"center"} -->
		<div class="wp-block-columns are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center","width":"58%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58%">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","letterSpacing":"0.22em","textTransform":"uppercase"},"color":{"text":"#99f6e4"}}} -->
				<p class="has-text-color" style="color:#99f6e4;font-size:0.9rem;letter-spacing:0.22em;text-transform:uppercase">Dentavia · Hamilton Dental Clinic</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|display"},"color":{"text":"#ffffff"}}} -->
				<h1 class="wp-block-heading has-text-color" style="color:#ffffff">A brighter smile starts with gentle care</h1>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem"},"color":{"text":"#d9efeb"}}} -->
				<p class="has-text-color" style="color:#d9efeb;font-size:1.125rem">From routine cleanings to complete smile makeovers — our friendly team makes every visit calm, comfortable and judgment-free.</p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"className":"dentavia-reveal","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
				<div class="wp-block-group dentavia-reveal" style="margin-top:var(--wp--preset--spacing--50)">
					<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50)">
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.75rem","fontWeight":"700"},"color":{"text":"#ffffff"}}} -->
						<p class="has-text-color" style="color:#ffffff;font-size:1.75rem;font-weight:700"><span class="dentavia-count" data-count="15">0</span>+</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem"},"color":{"text":"#bfe3dd"}}} -->
						<p class="has-text-color" style="color:#bfe3dd;font-size:0.85rem">Years of gentle dentistry</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50)">
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.75rem","fontWeight":"700"},"color":{"text":"#ffffff"}}} -->
						<p class="has-text-color" style="color:#ffffff;font-size:1.75rem;font-weight:700"><span class="dentavia-count" data-count="12000">0</span>+</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem"},"color":{"text":"#bfe3dd"}}} -->
						<p class="has-text-color" style="color:#bfe3dd;font-size:0.85rem">Happy smiles created</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.75rem","fontWeight":"700"},"color":{"text":"#ffffff"}}} -->
						<p class="has-text-color" style="color:#ffffff;font-size:1.75rem;font-weight:700"><span class="dentavia-count" data-count="49">0</span>/50</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem"},"color":{"text":"#bfe3dd"}}} -->
						<p class="has-text-color" style="color:#bfe3dd;font-size:0.85rem">Google rating score</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"center","width":"42%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:42%">
				<!-- wp:group {"className":"dentavia-reveal","style":{"color":{"background":"#ffffff"},"border":{"radius":"18px"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group dentavia-reveal has-background" style="background-color:#ffffff;border-radius:18px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.35rem"},"color":{"text":"#134e4a"}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#134e4a;font-size:1.35rem">Book your visit</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#64748b"}}} -->
					<p class="has-text-color" style="color:#64748b;font-size:0.95rem">Same-week appointments available. We will confirm by phone within 2 hours.</p>
					<!-- /wp:paragraph -->
					<!-- wp:group {"className":"dentavia-booking-form","layout":{"type":"constrained"}} -->
					<div class="wp-block-group dentavia-booking-form">
						<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
						<p style="margin-bottom:var(--wp--preset--spacing--20)"><label>Full name<br><input type="text" name="dentavia-name" placeholder="Jane Doe" /></label></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
						<p style="margin-bottom:var(--wp--preset--spacing--20)"><label>Phone<br><input type="tel" name="dentavia-phone" placeholder="+1 (905) 000-0000" /></label></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
						<p style="margin-bottom:var(--wp--preset--spacing--30)"><label>Reason for visit<br><select name="dentavia-reason"><option>Check-up &amp; cleaning</option><option>Tooth pain</option><option>Whitening</option><option>Braces / aligners</option><option>Other</option></select></label></p>
						<!-- /wp:paragraph -->
						<!-- wp:buttons -->
						<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
							<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#">Request Appointment</a></div>
							<!-- /wp:button --></div>
						<!-- /wp:buttons -->
						<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.8rem"},"color":{"text":"#64748b"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
						<p class="has-text-align-center has-text-color" style="color:#64748b;font-size:0.8rem;margin-top:var(--wp--preset--spacing--20)">No spam, ever. Or call <strong>+1 (905) 555-0182</strong></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
</div>
<!-- /wp:cover -->
