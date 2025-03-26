<?php

/**
 * Title: Sitemap Page Template
 * Slug: nas-consulting-lite/template-page-sitemap
 * Categories: template
 * Inserter: false
 */
$nusacons_consulting_url = trailingslashit(get_template_directory_uri());
$nusacons_consulting_images = array(
    $nusacons_consulting_url . 'assets/images/banner_bg.jpg',
);
?>
<!-- wp:group {"tagName":"main","style":{"border":{"top":{"color":"var:preset|color|border-light-color","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<main class="wp-block-group" style="border-top-color:var(--wp--preset--color--border-light-color);border-top-width:1px"><!-- wp:cover {"url":"<?php echo esc_url($nusacons_consulting_images[0]) ?>","id":1993,"dimRatio":50,"overlayColor":"background-alt","isUserOverlayColor":true,"minHeight":300,"layout":{"type":"constrained"}} -->
    <div class="wp-block-cover" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-background-alt-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1993" alt="" src="<?php echo esc_url($nusacons_consulting_images[0]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container"><!-- wp:post-title {"textAlign":"center","level":1} /--></div>
    </div>
    <!-- /wp:cover -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|70","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"fontSize":"large"} -->
                <h3 class="wp-block-heading has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:500">Pages</h3>
                <!-- /wp:heading -->

                <!-- wp:page-list {"className":"is-style-blockverse-page-list-bullet-hide-style is-style-nas-consulting-lite-page-list-bullet-hide-style","style":{"typography":{"lineHeight":1.8}}} /-->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"fontSize":"large"} -->
                <h3 class="wp-block-heading has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:500">Categories</h3>
                <!-- /wp:heading -->

                <!-- wp:categories {"showPostCounts":true,"className":"is-style-blockverse-categories-bullet-hide-style is-style-nas-consulting-lite-categories-bullet-hide-style"} /-->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"fontSize":"large"} -->
                <h3 class="wp-block-heading has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:500">Posts</h3>
                <!-- /wp:heading -->

                <!-- wp:query {"queryId":44,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
                <div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default","columnCount":3}} -->
                    <!-- wp:post-title {"level":5,"isLink":true,"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} /-->
                    <!-- /wp:post-template -->
                </div>
                <!-- /wp:query -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</main>
<!-- /wp:group -->