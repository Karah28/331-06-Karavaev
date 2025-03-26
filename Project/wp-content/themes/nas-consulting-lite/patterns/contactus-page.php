<?php

/**
 * Title: Contact Us Page 
 * Slug: nas-consulting-lite/contactus-page
 * Categories: nas-consulting-lite-contact
 */
$nusacons_consulting_url = trailingslashit(get_template_directory_uri());
$nusacons_consulting_images = array(
    $nusacons_consulting_url . 'assets/images/banner_bg.jpg',
);
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"100%"}} -->
<main class="wp-block-group has-light-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($nusacons_consulting_images[0]) ?>","id":6214,"dimRatio":70,"overlayColor":"primary","minHeight":480,"layout":{"type":"constrained","contentSize":"860px"}} -->
    <div class="wp-block-cover" style="min-height:480px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-6214" alt="" src="<?php echo esc_url($nusacons_consulting_images[0]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"xxx-large"} -->
            <h2 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-xxx-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Contact Us', 'nas-consulting-lite') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}}} -->
            <p class="has-text-align-center" style="font-size:18px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'nas-consulting-lite') ?></p>
            <!-- /wp:paragraph -->
        </div>
    </div>
    <!-- /wp:cover -->

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} -->
        <h3 class="wp-block-heading has-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Get in Touch', 'nas-consulting-lite') ?></h3>
        <!-- /wp:heading -->

        <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"80px"}}}} -->
        <div class="wp-block-columns"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:paragraph -->
                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'nas-consulting-lite') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:list {"style":{"typography":{"lineHeight":"1.5"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"is-style-list-style-no-bullet","fontSize":"medium"} -->
                <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5" class="is-style-list-style-no-bullet has-medium-font-size"><!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('2824 Fleming Street, Montgomery', 'nas-consulting-lite') ?></a></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->

                <!-- wp:list {"style":{"typography":{"lineHeight":"1.5"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"is-style-list-style-no-bullet","fontSize":"medium"} -->
                <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5" class="is-style-list-style-no-bullet has-medium-font-size"><!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('+1 (012) 345-6789', 'nas-consulting-lite') ?></a></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->

                <!-- wp:list {"style":{"typography":{"lineHeight":"1.5"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"is-style-list-style-no-bullet","fontSize":"medium"} -->
                <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5" class="is-style-list-style-no-bullet has-medium-font-size"><!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('email@yoursite.com', 'nas-consulting-lite') ?></a></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->

                <!-- wp:list {"style":{"typography":{"lineHeight":"1.5"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","className":"is-style-list-style-no-bullet","fontSize":"medium"} -->
                <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5" class="is-style-list-style-no-bullet has-heading-color-color has-text-color has-link-color has-medium-font-size"><!-- wp:list-item -->
                    <li><?php esc_html_e('Monday - Friday : 10:00AM - 6:00PM', 'nas-consulting-lite') ?></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->

                <!-- wp:social-links {"style":{"spacing":{"margin":{"top":"40px"}}}} -->
                <ul class="wp-block-social-links" style="margin-top:40px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"#","service":"x"} /-->

                    <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

                    <!-- wp:social-link {"url":"#","service":"instagram"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</main>
<!-- /wp:group -->