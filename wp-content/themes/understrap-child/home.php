<?php /* Template Name: Home */  ?>
<?php get_header(); ?>

    <div class="home-page">
        <section class="section-services">
            <div class="container">
                <div class="row header-element">
                    <div class="col-12 col-md-8 mx-auto">
                        <h6 class="text-uppercase">
                            Our Services
                        </h6>
                        <h2>
                            <?php echo get_field('header_content'); ?>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-10 mx-auto">
                        <div class="row">
                            <?php
                                $categories = get_categories( array(
                                    'orderby' => 'name',
                                    'order'   => 'ASC'
                                ) );

                                foreach( $categories as $category ) : ?>
                                    <div class="col-12 col-md-4 service-grid">
                                     <a href="<?php echo get_category_link($category->term_id); ?>">
                                        <?php
                                        $image = get_field('icon', $category);
                                        if( !empty( $image ) ): ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <?php endif; ?>
                                        <h3>
                                            <?php echo $category->name; ?>
                                        </h3>
                                        <p>
                                            <?php echo $category->description; ?>
                                        </p>
                                        <span class="see-details-btn">
                                            See detalis
                                        </span>
                                     </a>
                                    </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-testimonials">
            <div class="container">
                <div class="row header-element">
                    <div class="col-12 col-md-8 mx-auto">
                        <h6 class="text-uppercase">
                            Testimonials
                        </h6>
                        <h2>
                            <?php echo get_field('header_text'); ?>
                        </h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-team">
            <div class="container">
                <div class="row header-element">
                    <div class="col-12">
                        <h6 class="text-uppercase">
                            Our Team
                        </h6>
                        <h2>
                            <?php echo get_field('team_header_content'); ?>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <?php

                        $args = array(
                            'post_type' => 'team',
                            'post_status' => 'publish',
                            'posts_per_page' => -1,
                        );

                        $query = new WP_Query( $args );

                        // echo '<pre>';
                        // print_r($query);
                        // echo '</pre>';

                        if ( $query->have_posts() ) :
                            while ( $query->have_posts() ) : $query->the_post(); ?>

                            <div class="col-12 col-md-3 team-grid">
                                <div class="thumbnail-element">
                                    <?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
                                </div>
                                <h2>
                                    <?php the_title(); ?>
                                </h2>
                                <h6>
                                    <?php echo get_field('designation'); ?>
                                </h6>
                                <div class="hover-team-element">
                                    <div class="name-element">
                                        <div class="thumbnail-main">
                                            <div class="thumbnail-element">
                                                <?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <h6>
                                                <?php echo get_field('designation'); ?>
                                            </h6>
                                            <h2>
                                                <?php the_title(); ?>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="content-element">
                                        <p>
                                            <?php the_excerpt(); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                    <?php
                            endwhile;
                        endif;
                        wp_reset_postdata();
                    ?>
                </div>
            </div>
        </section>
        <section class="section-contact">
            <div class="container">
                <div class="row header-element">
                    <div class="col-12">
                        <h6 class="text-uppercase">
                            Conact us
                        </h6>
                        <h2>
                            <?php echo get_field('contact_header_content'); ?>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-8 mx-auto">
                        <div class="contact-element">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Your Name</label>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Your Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="company">Company</label>
                                        <input type="text" class="form-control" id="company">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="email" class="form-control" id="subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="form-group pb-0">
                                        <label for="message">Your Message</label>
                                        <input type="text" class="form-control" id="message">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php get_footer(); ?>
