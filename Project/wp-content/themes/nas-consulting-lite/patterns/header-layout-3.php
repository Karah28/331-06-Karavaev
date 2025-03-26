<?php

/**
 * Title: Header Layout 3
 * Slug: nas-consulting-lite/header-layout-3
 * Categories: nas-consulting-lite, header
 */
$nusacons_consulting_url = trailingslashit(get_template_directory_uri());
$nusacons_consulting_images = array(
    $nusacons_consulting_url . 'assets/images/icon_phone.png',
    $nusacons_consulting_url . 'assets/images/icon_location.png',
);
?>
<!-- wp:group {"metadata":{"name":"Header Layout 3"},"style":{"spacing":{"padding":{"top":"0px","right":"0","bottom":"0px","left":"0"}},"border":{"bottom":{"width":"0px","style":"none"}}},"backgroundColor":"light-color","className":"nas-consulting-lite-header","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group nas-consulting-lite-header has-light-color-background-color has-background" style="border-bottom-style:none;border-bottom-width:0px;padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"24px","bottom":"24px"}}},"backgroundColor":"light-shade","layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group has-light-shade-background-color has-background" style="padding-top:24px;padding-right:var(--wp--preset--spacing--40);padding-bottom:24px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:site-logo {"width":60,"shouldSyncIcon":false} /-->

                <!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"none","letterSpacing":"0px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"5px"}}},"fontSize":"big"} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","layout":{"type":"flex","flexWrap":"wrap"}} -->
            <div class="wp-block-group has-light-color-color has-text-color has-link-color"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":5779,"width":"16px","sizeSlug":"full","linkDestination":"none","className":"nas-consulting-lite-header-call"} -->
                    <figure class="wp-block-image size-full is-resized nas-consulting-lite-header-call"><img src="<?php echo esc_url($nusacons_consulting_images[0]) ?>" alt="" class="wp-image-5779" style="width:16px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"x-small"} -->
                        <p class="has-foreground-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e('Call Us', 'nas-consulting-lite') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"normal"} -->
                        <h5 class="wp-block-heading has-normal-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('+1 (012) 345-6789', 'nas-consulting-lite') ?></h5>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":5787,"width":"13px","sizeSlug":"full","linkDestination":"none","className":"nas-consulting-lite-header-location"} -->
                    <figure class="wp-block-image size-full is-resized nas-consulting-lite-header-location"><img src="<?php echo esc_url($nusacons_consulting_images[1]) ?>" alt="" class="wp-image-5787" style="width:13px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"x-small"} -->
                        <p class="has-foreground-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e('Location', 'nas-consulting-lite') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"normal"} -->
                        <h5 class="wp-block-heading has-normal-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('New York, NY 10011, USA.', 'nas-consulting-lite') ?></h5>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:buttons -->
                <div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"7px"},"spacing":{"padding":{"left":"30px","right":"30px","top":"20px","bottom":"20px"}},"typography":{"fontSize":"18px"}}} -->
                    <div class="wp-block-button has-custom-font-size" style="font-size:18px"><a class="wp-block-button__link wp-element-button" style="border-radius:7px;padding-top:20px;padding-right:30px;padding-bottom:20px;padding-left:30px"><?php esc_html_e('Request an Estimate', 'nas-consulting-lite') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"width":"0px","style":"none"},"right":[],"bottom":{"width":"0px","style":"none"},"left":[]}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group has-primary-background-color has-background" style="border-top-style:none;border-top-width:0px;border-bottom-style:none;border-bottom-width:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group"><!-- wp:navigation {"textColor":"light-color","overlayBackgroundColor":"light-color","overlayTextColor":"heading-color","className":"nas-consulting-lite-navigation","layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"500","lineHeight":"2"},"spacing":{"blockGap":"32px"}},"fontSize":"normal"} -->
            <!-- wp:page-list /-->
            <!-- /wp:navigation -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group has-light-color-color has-text-color has-link-color"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search products…","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"query":{"post_type":"product"},"isSearchFieldHidden":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"transparent","textColor":"light-color","className":"nas-consulting-lite-nav-search","fontSize":"normal"} /--></div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->