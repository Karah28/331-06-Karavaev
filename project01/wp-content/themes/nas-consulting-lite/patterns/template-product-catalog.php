<?php

/**
 * Title: Product Catalog Template
 * Slug: nas-consulting-lite/template-product-catalog
 * Categories: template
 * Inserter: false
 */
$nusacons_consulting_url = trailingslashit(get_template_directory_uri());
$nusacons_consulting_images = array(
    $nusacons_consulting_url . 'assets/images/banner_bg.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"60px","left":"0","right":"0"}}},"layout":{"inherit":true,"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:60px;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($nusacons_consulting_images[0]) ?>","id":1993,"dimRatio":50,"overlayColor":"background-alt","isUserOverlayColor":true,"minHeight":300,"layout":{"type":"constrained"}} -->
    <div class="wp-block-cover" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-background-alt-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1993" alt="" src="<?php echo esc_url($nusacons_consulting_images[0]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
            <div class="wp-block-group"><!-- wp:query-title {"type":"archive","textAlign":"center","showPrefix":false,"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"light-color"} /-->

                <!-- wp:woocommerce/breadcrumbs {"textColor":"light-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}}} /-->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->

    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:woocommerce/store-notices /-->

        <!-- wp:group {"style":{"spacing":{"margin":{"top":"10px","bottom":"0","left":"0","right":"0"}}},"textColor":"light-color","className":"nas-consulting-lite-cart-button","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"fontSize":"small"} -->
        <div class="wp-block-group nas-consulting-lite-cart-button has-light-color-color has-text-color has-small-font-size" style="margin-top:10px;margin-right:0;margin-bottom:0;margin-left:0"><!-- wp:woocommerce/product-results-count /-->

            <!-- wp:woocommerce/catalog-sorting {"fontSize":"normal","textColor":"heading-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"layout":{"selfStretch":"fit","flexSize":null}}} /-->
        </div>
        <!-- /wp:group -->

        <!-- wp:query {"queryId":3,"query":{"perPage":"9","pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"__woocommerceAttributes":[],"__woocommerceStockStatus":["instock","outofstock","onbackorder"]},"namespace":"woocommerce/product-query","className":"nas-consulting-lite-cart-button"} -->
        <div class="wp-block-query nas-consulting-lite-cart-button"><!-- wp:post-template {"style":{"spacing":{"blockGap":"32px"}},"className":"products-block-post-template","layout":{"type":"grid","columnCount":3},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
            <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"className":"nas-consulting-lite-product-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group nas-consulting-lite-product-box"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"14px"}}},"className":"nas-consulting-lite-product-image","layout":{"type":"constrained"}} -->
                <div class="wp-block-group nas-consulting-lite-product-image" style="margin-bottom:14px"><!-- wp:woocommerce/product-image {"saleBadgeAlign":"left","imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"height":"300px","style":{"border":{"radius":"0px"}}} /-->

                    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"1px"}}},"className":"nas-consulting-lite-product-buttons"} -->
                    <div class="wp-block-columns nas-consulting-lite-product-buttons"><!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:woocommerce/product-button {"textAlign":"center","width":100,"isDescendentOfQueryLoop":true,"className":"nas-consulting-lite-cart-button","textColor":"light-color","fontSize":"small","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /--></div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->

                <!-- wp:post-terms {"term":"product_cat","textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"x-small"} /-->

                <!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"4px","left":"0","right":"0","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontSize":"18px"}},"__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

                <!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"textAlign":"center","style":{"spacing":{"margin":{"top":"3px","bottom":"0px","left":"0","right":"0"}}}} /-->

                <!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","style":{"spacing":{"margin":{"top":"10px","bottom":"0","left":"0","right":"0"}}}} /-->
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->

            <!-- wp:query-pagination -->
            <!-- wp:query-pagination-previous /-->

            <!-- wp:query-pagination-numbers /-->

            <!-- wp:query-pagination-next /-->
            <!-- /wp:query-pagination -->

            <!-- wp:query-no-results -->
            <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
            <p></p>
            <!-- /wp:paragraph -->
            <!-- /wp:query-no-results -->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->