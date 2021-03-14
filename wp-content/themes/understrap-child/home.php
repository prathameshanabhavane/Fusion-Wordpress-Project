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
