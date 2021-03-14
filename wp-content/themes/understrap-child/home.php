<?php /* Template Name: Home */  ?>
<?php get_header(); ?>

    <div class="home-page">
        <section class="section-banner">
            <div class="container position-relative banner-container">
                <div class="col-12 col-md-12 col-lg-9 mx-auto">
                    <div class="banner-content">
                        <?php
                            the_content();
                        ?>
                    </div>
                </div>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-element">
                    F
                </a>
                <a class="link-btn getin-touch-btn" href="<?php the_permalink(); ?>">Get in touch
                    <svg class="right-arrow" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M508.875,248.458l-160-160c-4.167-4.167-10.917-4.167-15.083,0c-4.167,4.167-4.167,10.917,0,15.083l141.792,141.792
                                H10.667C4.771,245.333,0,250.104,0,256s4.771,10.667,10.667,10.667h464.917L333.792,408.458c-4.167,4.167-4.167,10.917,0,15.083
                                c2.083,2.083,4.813,3.125,7.542,3.125c2.729,0,5.458-1.042,7.542-3.125l160-160C513.042,259.375,513.042,252.625,508.875,248.458z
                                "/>
                        </g>
                    </g>
                    </svg>
                </a>
            </div>
        </section>
        <section class="section-services">
            <div class="container">
                <div class="row header-element">
                    <div class="col-12 col-lg-8 mx-auto">
                        <h6 class="text-uppercase">
                            Our Services
                        </h6>
                        <h2>
                            <?php echo get_field('header_content'); ?>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-10 mx-auto">
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
        <section class="section-projects">
            <div class="container">
                <div class="col-12 col-lg-12 col-xl-10 mx-auto">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php

                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'posts_per_page' => -1,
                                );

                                $query = new WP_Query( $args );

                                // echo '<pre>';
                                // print_r($query);
                                // echo '</pre>';

                                if ( $query->have_posts() ) :
                                    $i = 0;
                                    while ( $query->have_posts() ) : $query->the_post();
                            ?>
                                        <div class="carousel-item <?php if($i == 0): ?>active<?php endif; ?>">
                                            <div class="project-content">
                                                <h3>
                                                    <?php
                                                        $categories = get_the_category();
                                                        // echo '<pre>';
                                                        // print_r($categories);
                                                        // echo '</pre>';
                                                        $cat_name = $categories[0]->cat_name;
                                                        echo $cat_name;
                                                    ?>
                                                </h3>
                                                <h2>
                                                    <?php the_title(); ?>
                                                </h2>
                                            </div>
                                            <?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
                                            <div class="action-elements">
                                                <p>
                                                    <a href="<?php the_permalink(); ?>">Project details
                                                        <svg class="right-arrow" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                        <g>
                                                        	<g>
                                                        		<path d="M508.875,248.458l-160-160c-4.167-4.167-10.917-4.167-15.083,0c-4.167,4.167-4.167,10.917,0,15.083l141.792,141.792
                                                        			H10.667C4.771,245.333,0,250.104,0,256s4.771,10.667,10.667,10.667h464.917L333.792,408.458c-4.167,4.167-4.167,10.917,0,15.083
                                                        			c2.083,2.083,4.813,3.125,7.542,3.125c2.729,0,5.458-1.042,7.542-3.125l160-160C513.042,259.375,513.042,252.625,508.875,248.458z
                                                        			"/>
                                                        	</g>
                                                        </g>
                                                        </svg>
                                                    </a>
                                                </p>
                                                <p>
                                                    <a href="#">View Slides
                                                        <svg class="right-arrow" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                        <g>
                                                        	<g>
                                                        		<path d="M508.875,248.458l-160-160c-4.167-4.167-10.917-4.167-15.083,0c-4.167,4.167-4.167,10.917,0,15.083l141.792,141.792
                                                        			H10.667C4.771,245.333,0,250.104,0,256s4.771,10.667,10.667,10.667h464.917L333.792,408.458c-4.167,4.167-4.167,10.917,0,15.083
                                                        			c2.083,2.083,4.813,3.125,7.542,3.125c2.729,0,5.458-1.042,7.542-3.125l160-160C513.042,259.375,513.042,252.625,508.875,248.458z
                                                        			"/>
                                                        	</g>
                                                        </g>
                                                        </svg>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>

                            <?php
                                    $i++;
                                    endwhile;
                                endif;
                                wp_reset_postdata();
                            ?>

                        </div>
                        <ol class="carousel-indicators">
                            <?php

                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'posts_per_page' => -1,
                                );

                                $query = new WP_Query( $args );

                                if ( $query->have_posts() ) :
                                    $i = 0;
                                    while ( $query->have_posts() ) : $query->the_post();
                            ?>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>" class="<?php if($i == 0): ?>active<?php endif; ?>"></li>

                            <?php
                                    $i++;
                                    endwhile;
                                endif;
                                wp_reset_postdata();
                            ?>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-testimonials">
            <div class="container">
                <div class="row header-element">
                    <div class="col-12 col-lg-8 mx-auto">
                        <h6 class="text-uppercase">
                            Testimonials
                        </h6>
                        <h2>
                            <?php echo get_field('header_text'); ?>
                        </h2>
                    </div>
                </div>
                <div class="row companies-logo-element">
                    <div class="col-12 col-lg-10 mx-auto">
                        <?php if( have_rows('companies_logo') ): ?>
                            <ul class="logos-ul">
                            <?php while( have_rows('companies_logo') ): the_row();
                                ?>
                                <li>
                                    <?php
                                    $image = get_sub_field('logo');
                                    if( !empty( $image ) ): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                </li>
                            <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row testimonials-element">
                    <div class="col-12 col-md-10 col-lg-8 mx-auto">
                        <div id="carouselTestimonialsIndicators" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <?php if( have_rows('testimonials') ): ?>
                                    <?php
                                        $i = 0;
                                        while( have_rows('testimonials') ): the_row();
                                        $image = get_sub_field('image');
                                    ?>
                                        <div class="carousel-item <?php if($i == 0): ?>active<?php endif; ?>">
                                            <div class="testimonials-image">
                                                <?php echo wp_get_attachment_image( $image, 'full' ); ?>
                                            </div>
                                            <p>
                                                <?php the_sub_field('content'); ?>
                                            </p>
                                            <div class="info-bx">
                                                <div class="inner-info-bx">
                                                    <h3>
                                                        <?php the_sub_field('name'); ?>
                                                    </h3>
                                                    <h4>
                                                        <?php the_sub_field('designation'); ?>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    <?php $i++; endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <ol class="carousel-indicators">
                                <?php if( have_rows('testimonials') ): ?>
                                    <?php
                                        $i = 0;
                                        while( have_rows('testimonials') ): the_row();
                                        $image = get_sub_field('image');
                                    ?>
                                        <li data-target="#carouselTestimonialsIndicators" data-slide-to="<?php echo $i; ?>" class="<?php if($i == 0): ?>active<?php endif; ?>"></li>
                                    <?php $i++; endwhile; ?>
                                <?php endif; ?>
                            </ol>
                        </div>
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

                            <div class="col-12 col-md-6 col-lg-4 col-xl-3 team-grid">
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
                    <div class="col-12 col-lg-8 mx-auto">
                        <?php echo do_shortcode('[contact-form-7 id="80" title="Contact form"]'); ?>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php get_footer(); ?>
