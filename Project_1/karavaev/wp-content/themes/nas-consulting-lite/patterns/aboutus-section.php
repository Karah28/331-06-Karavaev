<?php

/**
 * Title: About Us Section
 * Slug: nas-consulting-lite/aboutus-section
 * Categories: nas-consulting-lite
 */
$nusacons_consulting_url = trailingslashit(get_template_directory_uri());
$nusacons_consulting_images = array(
    $nusacons_consulting_url . 'assets/images/about_image.png'
);
?>
<!-- wp:group {"metadata":{"name":"About Us Section"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","bottom":"100px","top":"100px"}}},"backgroundColor":"light-shade","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-light-shade-background-color has-background" style="padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"100px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","className":"nas-consulting-lite-fade-up"} -->
        <div class="wp-block-column is-vertically-aligned-center nas-consulting-lite-fade-up"><!-- wp:heading {"level":1} -->
            <h1 class="wp-block-heading"><?php esc_html_e('From attics to basements, and everything in between.', 'nas-consulting-lite') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p><?php esc_html_e('We help you with any jobs around the house. Order our services and get the task done on the same day.', 'nas-consulting-lite') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"30px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="margin-top:30px"><!-- wp:buttons -->
                <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"dark-color","textColor":"light-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70","top":"22px","bottom":"22px"}},"border":{"radius":"8px"},"typography":{"fontSize":"18px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor" style="font-size:18px"><a class="wp-block-button__link has-light-color-color has-dark-color-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:8px;padding-top:22px;padding-right:var(--wp--preset--spacing--70);padding-bottom:22px;padding-left:var(--wp--preset--spacing--70)"><?php esc_html_e('Explore More', 'nas-consulting-lite') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","className":"nas-consulting-lite-slide-up"} -->
        <div class="wp-block-column is-vertically-aligned-center nas-consulting-lite-slide-up"><!-- wp:image {"id":2042,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0px"}}} -->
            <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($nusacons_consulting_images[0]) ?>" alt="" class="wp-image-2042" style="border-radius:0px" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->