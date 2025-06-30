<?php

/**
 * Title: Brand Showcase Section
 * Slug: nas-consulting-lite/brands-showcase
 * Categories: nas-consulting-lite
 */
$nusacons_consulting_url = trailingslashit(get_template_directory_uri());
$nusacons_consulting_images = array(
    $nusacons_consulting_url . 'assets/images/brand_14.png',
    $nusacons_consulting_url . 'assets/images/brand_12.png',
    $nusacons_consulting_url . 'assets/images/brand_11.png',
    $nusacons_consulting_url . 'assets/images/brand_7.png',
    $nusacons_consulting_url . 'assets/images/brand_4.png',
    $nusacons_consulting_url . 'assets/images/brand_3.png',
    $nusacons_consulting_url . 'assets/images/brand_13.png'
);
?>
<!-- wp:group {"metadata":{"name":"Brands Showcase"},"style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-shade","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-light-shade-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:var(--wp--preset--spacing--50);padding-bottom:80px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"60px"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:60px"><!-- wp:heading {"textAlign":"center","level":1} -->
        <h1 class="wp-block-heading has-text-align-center"><?php esc_html_e('Trusted Brands &amp; Partners', 'nas-consulting-lite') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'nas-consulting-lite') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:gallery {"columns":5,"imageCrop":false,"linkTo":"none","className":"is-style-enable-grayscale-mode-on-image nas-consulting-lite-brands"} -->
    <figure class="wp-block-gallery has-nested-images columns-5 is-style-enable-grayscale-mode-on-image nas-consulting-lite-brands"><!-- wp:image {"id":1469,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url($nusacons_consulting_images[0]) ?>" alt="" class="wp-image-1469" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":1467,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url($nusacons_consulting_images[1]) ?>" alt="" class="wp-image-1467" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":1466,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url($nusacons_consulting_images[2]) ?>" alt="" class="wp-image-1466" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":1456,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url($nusacons_consulting_images[3]) ?>" alt="" class="wp-image-1456" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":1460,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url($nusacons_consulting_images[4]) ?>" alt="" class="wp-image-1460" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":1459,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url($nusacons_consulting_images[5]) ?>" alt="" class="wp-image-1459" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":1468,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url($nusacons_consulting_images[6]) ?>" alt="" class="wp-image-1468" /></figure>
        <!-- /wp:image -->
    </figure>
    <!-- /wp:gallery -->
</div>
<!-- /wp:group -->