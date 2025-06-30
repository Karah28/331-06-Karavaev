<?php

/**
 * Title: Contact Us Section with Request Quote Form
 * Slug: nas-consulting-lite/contact-with-form
 * Categories: nas-consulting-lite
 */
$nusacons_consulting_url = trailingslashit(get_template_directory_uri());
$nusacons_consulting_images = array(
    $nusacons_consulting_url . 'assets/images/icon_loc.png',
    $nusacons_consulting_url . 'assets/images/icon_call.png',
    $nusacons_consulting_url . 'assets/images/icon_env.png'
);
?>
<!-- wp:group {"metadata":{"name":"Contact Section With Form"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"80px","bottom":"80px"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:var(--wp--preset--spacing--40);padding-bottom:80px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"45%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background-alt"}}}},"textColor":"background-alt"} -->
            <h2 class="wp-block-heading has-background-alt-color has-text-color has-link-color"><?php esc_html_e('Get In Touch', 'nas-consulting-lite') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background-alt"}}}},"textColor":"background-alt"} -->
            <p class="has-background-alt-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'nas-consulting-lite') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"40px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="margin-top:40px"><!-- wp:image {"id":2186,"width":"38px","sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($nusacons_consulting_images[0]) ?>" alt="" class="wp-image-2186" style="width:38px" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                <p class="has-heading-color-color has-text-color has-link-color"><?php esc_html_e('2345 Beach,Rd<br>Metrocity USA, HWY 1235', 'nas-consulting-lite') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="margin-top:20px;margin-bottom:20px"><!-- wp:image {"id":2188,"width":"30px","sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($nusacons_consulting_images[1]) ?>" alt="" class="wp-image-2188" style="width:30px" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                <p class="has-heading-color-color has-text-color has-link-color"><?php esc_html_e('(888) 012-3456', 'nas-consulting-lite') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:image {"id":2192,"width":"30px","sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($nusacons_consulting_images[2]) ?>" alt="" class="wp-image-2192" style="width:30px" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                <p class="has-heading-color-color has-text-color has-link-color"><?php esc_html_e('youremail@example.com', 'nas-consulting-lite') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"40px","bottom":"32px","left":"48px","right":"48px"},"blockGap":"0"}},"backgroundColor":"heading-color"} -->
        <div class="wp-block-column is-vertically-aligned-center has-heading-color-background-color has-background" style="padding-top:40px;padding-right:48px;padding-bottom:32px;padding-left:48px"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"large"} -->
            <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-large-font-size"><?php esc_html_e('Request a Quote', 'nas-consulting-lite') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:contact-form-7/contact-form-selector {"id":355,"hash":"5719fe2","title":"Quote Form","className":"request-quote-form"} -->
            <div class="wp-block-contact-form-7-contact-form-selector request-quote-form">[contact-form-7 id="5719fe2" title="Quote Form"]</div>
            <!-- /wp:contact-form-7/contact-form-selector -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->