<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper footer" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">
			<div class="col-12 col-md-8 mx-auto">
				<div class="row">
					<div class="col-12 col-md-3">
						<?php
						$image = get_field('footer_logo');
						if( !empty( $image ) ): ?>
						    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
					</div>
					<?php if( have_rows('addresses') ): ?>
					    <?php while( have_rows('addresses') ): the_row();
					        ?>
							<div class="col-12 col-md-3">
						       <h4>
						       		<?php the_sub_field('title'); ?>
						       </h4>
							   <p>
							   		<?php the_sub_field('content'); ?>
							   </p>
							</div>
					    <?php endwhile; ?>
					<?php endif; ?>
					<?php if( have_rows('other_contact') ): ?>
					    <?php while( have_rows('other_contact') ): the_row();
					        ?>
							<div class="col-12 col-md-3">
						       <h4>
						       		<?php the_sub_field('title'); ?>
						       </h4>
							   <p>
							   		<?php the_sub_field('email'); ?>
							   </p>
							   <ul>
								   <?php if( have_rows('social_links') ): ?>
						   			    <?php while( have_rows('social_links') ): the_row();
											$icon = get_sub_field('icon');
						   			        ?>
											<li>
									   			<a href="<?php the_sub_field('link'); ?>">
													<?php echo wp_get_attachment_image( $image, 'full' ); ?>
									   			</a>
									   		</li>
						   			    <?php endwhile; ?>
						   			<?php endif; ?>
							   </ul>
							</div>
					    <?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
