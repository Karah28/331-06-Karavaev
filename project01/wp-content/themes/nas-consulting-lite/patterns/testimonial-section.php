<?php

/**
 * Title: Testimonial Section
 * Slug: nas-consulting-lite/testimonial-section
 * Categories: nas-consulting-lite
 */
$nusacons_consulting_url = trailingslashit(get_template_directory_uri());
$nusacons_consulting_images = array(
    $nusacons_consulting_url . 'assets/images/testimonial_1.jpg',
    $nusacons_consulting_url . 'assets/images/testimonial_2.jpg',
    $nusacons_consulting_url . 'assets/images/testimonial_3.jpg',
    $nusacons_consulting_url . 'assets/images/rating_star.png',
    $nusacons_consulting_url . 'assets/images/testimonialbg.jpg'
);
?>
<!-- wp:group {"metadata":{"name":"Testimonials"},"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0","right":"0"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($nusacons_consulting_images[4]) ?>","id":2051,"dimRatio":90,"overlayColor":"background-alt","isUserOverlayColor":true,"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-cover" style="padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><span aria-hidden="true" class="wp-block-cover__background has-background-alt-background-color has-background-dim-90 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2051" alt="" src="<?php echo esc_url($nusacons_consulting_images[4]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"60px"}}},"className":"nas-consulting-lite-fade-up","layout":{"type":"constrained","contentSize":"640px"}} -->
            <div class="wp-block-group nas-consulting-lite-fade-up" style="margin-bottom:60px"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"10px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                <div class="wp-block-group" style="margin-bottom:10px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                    <div class="wp-block-group"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"30px"}},"backgroundColor":"primary"} -->
                        <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background" />
                        <!-- /wp:separator -->

                        <!-- wp:heading {"textAlign":"center","level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase"}},"textColor":"primary"} -->
                        <h6 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color" style="text-transform:uppercase"><?php esc_html_e('Testimonials', 'nas-consulting-lite') ?></h6>
                        <!-- /wp:heading -->

                        <!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"30px"}},"backgroundColor":"primary"} -->
                        <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background" />
                        <!-- /wp:separator -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:heading {"textAlign":"center"} -->
                <h2 class="wp-block-heading has-text-align-center"><?php esc_html_e('Hear From Our Happy Clients: Their Stories', 'nas-consulting-lite') ?></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:columns {"style":{"spacing":{"margin":{"top":"0px"},"blockGap":{"left":"30px"}}},"className":"nas-consulting-lite-fade-up"} -->
            <div class="wp-block-columns nas-consulting-lite-fade-up" style="margin-top:0px"><!-- wp:column {"className":"blockbooster-fade-up"} -->
                <div class="wp-block-column blockbooster-fade-up"><!-- wp:group {"style":{"border":{"radius":"0px","color":"#f2ede66e","width":"1px"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"className":"blockbooster-hover-box is-style-nas-consulting-lite-boxshadow-medium","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group blockbooster-hover-box is-style-nas-consulting-lite-boxshadow-medium has-border-color" style="border-color:#f2ede66e;border-width:1px;border-radius:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":4435,"width":"94px","sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($nusacons_consulting_images[3]) ?>" alt="" class="wp-image-4435" style="width:94px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', 'nas-consulting-lite') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                            <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($nusacons_consulting_images[0]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                            <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
                                <h5 class="wp-block-heading" style="font-style:normal;font-weight:600"><?php esc_html_e('Henry Benzamin Clark', 'nas-consulting-lite') ?></h5>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph -->
                                <p><?php esc_html_e('Fitness Coach', 'nas-consulting-lite') ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"className":"blockbooster-fade-up"} -->
                <div class="wp-block-column blockbooster-fade-up"><!-- wp:group {"style":{"border":{"radius":"0px","color":"#f2ede66e","width":"1px"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"className":"blockbooster-hover-box is-style-nas-consulting-lite-boxshadow-medium","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group blockbooster-hover-box is-style-nas-consulting-lite-boxshadow-medium has-border-color" style="border-color:#f2ede66e;border-width:1px;border-radius:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":4435,"width":"94px","sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($nusacons_consulting_images[3]) ?>" alt="" class="wp-image-4435" style="width:94px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', 'nas-consulting-lite') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                            <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($nusacons_consulting_images[1]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                            <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
                                <h5 class="wp-block-heading" style="font-style:normal;font-weight:600"><?php esc_html_e('Robert Linken', 'nas-consulting-lite') ?></h5>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph -->
                                <p><?php esc_html_e('Counseller', 'nas-consulting-lite') ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"className":"blockbooster-fade-up"} -->
                <div class="wp-block-column blockbooster-fade-up"><!-- wp:group {"style":{"border":{"radius":"0px","color":"#f2ede66e","width":"1px"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"className":"blockbooster-hover-box is-style-nas-consulting-lite-boxshadow-medium","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group blockbooster-hover-box is-style-nas-consulting-lite-boxshadow-medium has-border-color" style="border-color:#f2ede66e;border-width:1px;border-radius:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"id":4435,"width":"94px","sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($nusacons_consulting_images[3]) ?>" alt="" class="wp-image-4435" style="width:94px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', 'nas-consulting-lite') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                            <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($nusacons_consulting_images[2]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                            <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
                                <h5 class="wp-block-heading" style="font-style:normal;font-weight:600"><?php esc_html_e('Liyana Torq', 'nas-consulting-lite') ?></h5>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph -->
                                <p><?php esc_html_e('Yoga Coach', 'nas-consulting-lite') ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
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
</div>
<!-- /wp:group -->