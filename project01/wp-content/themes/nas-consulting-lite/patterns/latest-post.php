<?php

/**
 * Title: Latest Post Section
 * Slug: nas-consulting-lite/latest-post
 * Categories: nas-consulting-lite
 */
?>
<!-- wp:group {"metadata":{"name":"Latest-articles"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"80px","bottom":"100px"},"margin":{"top":"0","bottom":"0"}}},"className":"nas-consulting-lite-fade-up","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group nas-consulting-lite-fade-up" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:var(--wp--preset--spacing--50);padding-bottom:100px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-group" style="margin-bottom:60px"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"nas-consulting-lite-header"} -->
        <h1 class="wp-block-heading has-text-align-center nas-consulting-lite-header" style="font-style:normal;font-weight:600"><?php esc_html_e('Latest Blogs and Insights', 'nas-consulting-lite') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'nas-consulting-lite') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":23,"query":{"perPage":"3","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
    <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"30px"}},"layout":{"type":"grid","columnCount":3}} -->
        <!-- wp:group {"className":"nas-consulting-lite-post-featuredimg is-style-nas-consulting-lite-boxshadow-medium","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"0px","width":"1px","color":"#F1ECE6"}},"backgroundColor":"light-color","layout":{"type":"constrained"}} -->
        <div class="wp-block-group nas-consulting-lite-post-featuredimg is-style-nas-consulting-lite-boxshadow-medium has-border-color has-light-color-background-color has-background" style="border-color:#F1ECE6;border-width:1px;border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"height":"280px","align":"wide","style":{"spacing":{"margin":{"bottom":"0px"}},"border":{"radius":"0px"}}} /-->

            <!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"bottom":"28px","left":"28px","right":"28px","top":"28px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-default" style="margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:post-terms {"term":"category","className":"is-style-categories-background-with-round","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|light-color"}}}}},"textColor":"light-color","fontSize":"small"} /--></div>
                <!-- /wp:group -->

                <!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"big"} /-->

                <!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color","fontSize":"small"} /-->

                <!-- wp:post-excerpt {"excerptLength":21} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"64px"}}}} -->
    <div class="wp-block-buttons" style="margin-top:64px"><!-- wp:button {"backgroundColor":"dark-color","textColor":"light-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"20px","bottom":"20px"}},"border":{"radius":"7px"},"typography":{"fontSize":"18px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
        <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor" style="font-size:18px"><a class="wp-block-button__link has-light-color-color has-dark-color-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:7px;padding-top:20px;padding-right:var(--wp--preset--spacing--60);padding-bottom:20px;padding-left:var(--wp--preset--spacing--60)"><?php esc_html_e('Explore All Articles', 'nas-consulting-lite') ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->