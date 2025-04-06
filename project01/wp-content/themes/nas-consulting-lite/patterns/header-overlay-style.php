<?php

/**
 * Title: Header Overlay Style
 * Slug: nas-consulting-lite/header-overlay-style
 * Categories: nas-consulting-lite, header
 */
$nusacons_consulting_url = trailingslashit(get_template_directory_uri());
$nusacons_consulting_images = array(
    $nusacons_consulting_url . 'assets/images/icon_location.png',
    $nusacons_consulting_url . 'assets/images/icon_envelop.png',
    $nusacons_consulting_url . 'assets/images/icon_phone.png',
);
?>
<!-- wp:group {"metadata":{"name":"Overlay Header Layout"},"style":{"spacing":{"padding":{"top":"0px","right":"0","bottom":"0px","left":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"style":"none","width":"0px"}}},"backgroundColor":"overlay-header-bgcolor","className":"nas-consulting-lite-header nas-consulting-lite-overlap-nav nas-consulting-lite-sticky-menu","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group nas-consulting-lite-header nas-consulting-lite-overlap-nav nas-consulting-lite-sticky-menu has-overlay-header-bgcolor-background-color has-background" style="border-bottom-style:none;border-bottom-width:0px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0","bottom":"0px","left":"0"}},"border":{"bottom":{"width":"0px","style":"none"}}},"className":"nas-consulting-lite-sticky-navigation","layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group nas-consulting-lite-sticky-navigation" style="border-bottom-style:none;border-bottom-width:0px;padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"10px","bottom":"10px"}},"border":{"bottom":{"color":"#ffffff33","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-group" style="border-bottom-color:#ffffff33;border-bottom-width:1px;padding-top:10px;padding-right:0;padding-bottom:10px;padding-left:0"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
                <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":30,"width":"20px","height":"20px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($nusacons_consulting_images[0]) ?>" alt="" class="wp-image-30" style="object-fit:cover;width:20px;height:20px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                        <p class="has-light-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('178 West 27th Street, Suite 527, NY 10012', 'nas-consulting-lite') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":34,"width":"16px","height":"16px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"envelope-icon"} -->
                        <figure class="wp-block-image size-full is-resized envelope-icon"><img src="<?php echo esc_url($nusacons_consulting_images[1]) ?>" alt="" class="wp-image-34" style="object-fit:contain;width:16px;height:16px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                        <p class="has-light-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('email@example.com', 'nas-consulting-lite') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":38,"width":"16px","height":"16px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"phone-icon"} -->
                        <figure class="wp-block-image size-full is-resized phone-icon"><img src="<?php echo esc_url($nusacons_consulting_images[2]) ?>" alt="" class="wp-image-38" style="object-fit:contain;width:16px;height:16px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                        <p class="has-light-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('(888) 012 - 3456', 'nas-consulting-lite') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFF","iconBackgroundColor":"transparent","iconBackgroundColorValue":"#ffffff00","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}},"className":"nas-consulting-lite-social-profile"} -->
                <ul class="wp-block-social-links has-icon-color has-icon-background-color nas-consulting-lite-social-profile"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"#","service":"x"} /-->

                    <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                    <!-- wp:social-link {"url":"#","service":"tiktok"} /-->

                    <!-- wp:social-link {"url":"#","service":"yelp"} /-->

                    <!-- wp:social-link {"url":"#","service":"reddit"} /-->

                    <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->

                    <!-- wp:social-link {"url":"#","service":"telegram"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"24px","bottom":"24px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-right:0;padding-bottom:24px;padding-left:0"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:site-logo {"width":44,"shouldSyncIcon":false} /-->

                    <!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"none","letterSpacing":"0px"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"5px"}}},"fontSize":"large"} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","layout":{"type":"flex","flexWrap":"wrap"}} -->
                <div class="wp-block-group has-light-color-color has-text-color has-link-color"><!-- wp:navigation {"textColor":"light-color","overlayBackgroundColor":"light-color","overlayTextColor":"heading-color","className":"nas-consulting-lite-navigation","layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"500","lineHeight":"2"},"spacing":{"blockGap":"32px"}},"fontSize":"normal"} -->
                    <!-- wp:page-list /-->
                    <!-- /wp:navigation -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","style":{"border":{"radius":"6px","width":"1px"},"spacing":{"padding":{"left":"24px","right":"24px","top":"16px","bottom":"16px"}},"typography":{"fontSize":"16px"}},"borderColor":"light-color","className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor" style="font-size:16px"><a class="wp-block-button__link has-transparent-background-color has-background has-border-color has-light-color-border-color wp-element-button" style="border-width:1px;border-radius:6px;padding-top:16px;padding-right:24px;padding-bottom:16px;padding-left:24px"><?php esc_html_e('Request an Estimate', 'nas-consulting-lite') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->