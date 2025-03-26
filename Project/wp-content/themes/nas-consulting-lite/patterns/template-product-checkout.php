<?php

/**
 * Title: Product Checkout Template
 * Slug: nas-consulting-lite/template-product-checkout
 * Categories: template
 * Inserter: false
 */
$nusacons_consulting_url = trailingslashit(get_template_directory_uri());
$nusacons_consulting_images = array(
    $nusacons_consulting_url . 'assets/images/banner_bg.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"inherit":true,"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($nusacons_consulting_images[0]) ?>","id":1993,"dimRatio":50,"overlayColor":"background-alt","isUserOverlayColor":true,"minHeight":300,"layout":{"type":"constrained"}} -->
    <div class="wp-block-cover" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-background-alt-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1993" alt="" src="<?php echo esc_url($nusacons_consulting_images[0]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
            <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":1,"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                <h1 class="wp-block-heading alignwide has-text-align-left has-light-color-color has-text-color has-link-color">Checkout</h1>
                <!-- /wp:heading -->

                <!-- wp:woocommerce/breadcrumbs {"textColor":"light-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}}} /-->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:woocommerce/store-notices /-->

        <!-- wp:woocommerce/checkout {"className":"wc-block-checkout"} -->
        <div class="wp-block-woocommerce-checkout alignwide wc-block-checkout is-loading"><!-- wp:woocommerce/checkout-fields-block -->
            <div class="wp-block-woocommerce-checkout-fields-block"><!-- wp:woocommerce/checkout-express-payment-block -->
                <div class="wp-block-woocommerce-checkout-express-payment-block"></div>
                <!-- /wp:woocommerce/checkout-express-payment-block -->

                <!-- wp:woocommerce/checkout-contact-information-block -->
                <div class="wp-block-woocommerce-checkout-contact-information-block"></div>
                <!-- /wp:woocommerce/checkout-contact-information-block -->

                <!-- wp:woocommerce/checkout-shipping-method-block -->
                <div class="wp-block-woocommerce-checkout-shipping-method-block"></div>
                <!-- /wp:woocommerce/checkout-shipping-method-block -->

                <!-- wp:woocommerce/checkout-pickup-options-block -->
                <div class="wp-block-woocommerce-checkout-pickup-options-block"></div>
                <!-- /wp:woocommerce/checkout-pickup-options-block -->

                <!-- wp:woocommerce/checkout-shipping-address-block -->
                <div class="wp-block-woocommerce-checkout-shipping-address-block"></div>
                <!-- /wp:woocommerce/checkout-shipping-address-block -->

                <!-- wp:woocommerce/checkout-billing-address-block -->
                <div class="wp-block-woocommerce-checkout-billing-address-block"></div>
                <!-- /wp:woocommerce/checkout-billing-address-block -->

                <!-- wp:woocommerce/checkout-shipping-methods-block -->
                <div class="wp-block-woocommerce-checkout-shipping-methods-block"></div>
                <!-- /wp:woocommerce/checkout-shipping-methods-block -->

                <!-- wp:woocommerce/checkout-payment-block -->
                <div class="wp-block-woocommerce-checkout-payment-block"></div>
                <!-- /wp:woocommerce/checkout-payment-block -->

                <!-- wp:woocommerce/checkout-additional-information-block -->
                <div class="wp-block-woocommerce-checkout-additional-information-block"></div>
                <!-- /wp:woocommerce/checkout-additional-information-block -->

                <!-- wp:woocommerce/checkout-order-note-block -->
                <div class="wp-block-woocommerce-checkout-order-note-block"></div>
                <!-- /wp:woocommerce/checkout-order-note-block -->

                <!-- wp:woocommerce/checkout-terms-block -->
                <div class="wp-block-woocommerce-checkout-terms-block"></div>
                <!-- /wp:woocommerce/checkout-terms-block -->

                <!-- wp:woocommerce/checkout-actions-block -->
                <div class="wp-block-woocommerce-checkout-actions-block"></div>
                <!-- /wp:woocommerce/checkout-actions-block -->
            </div>
            <!-- /wp:woocommerce/checkout-fields-block -->

            <!-- wp:woocommerce/checkout-totals-block -->
            <div class="wp-block-woocommerce-checkout-totals-block"><!-- wp:woocommerce/checkout-order-summary-block -->
                <div class="wp-block-woocommerce-checkout-order-summary-block"><!-- wp:woocommerce/checkout-order-summary-cart-items-block -->
                    <div class="wp-block-woocommerce-checkout-order-summary-cart-items-block"></div>
                    <!-- /wp:woocommerce/checkout-order-summary-cart-items-block -->

                    <!-- wp:woocommerce/checkout-order-summary-coupon-form-block -->
                    <div class="wp-block-woocommerce-checkout-order-summary-coupon-form-block"></div>
                    <!-- /wp:woocommerce/checkout-order-summary-coupon-form-block -->

                    <!-- wp:woocommerce/checkout-order-summary-totals-block -->
                    <div class="wp-block-woocommerce-checkout-order-summary-totals-block"><!-- wp:woocommerce/checkout-order-summary-subtotal-block -->
                        <div class="wp-block-woocommerce-checkout-order-summary-subtotal-block"></div>
                        <!-- /wp:woocommerce/checkout-order-summary-subtotal-block -->

                        <!-- wp:woocommerce/checkout-order-summary-fee-block -->
                        <div class="wp-block-woocommerce-checkout-order-summary-fee-block"></div>
                        <!-- /wp:woocommerce/checkout-order-summary-fee-block -->

                        <!-- wp:woocommerce/checkout-order-summary-discount-block -->
                        <div class="wp-block-woocommerce-checkout-order-summary-discount-block"></div>
                        <!-- /wp:woocommerce/checkout-order-summary-discount-block -->

                        <!-- wp:woocommerce/checkout-order-summary-shipping-block -->
                        <div class="wp-block-woocommerce-checkout-order-summary-shipping-block"></div>
                        <!-- /wp:woocommerce/checkout-order-summary-shipping-block -->

                        <!-- wp:woocommerce/checkout-order-summary-taxes-block -->
                        <div class="wp-block-woocommerce-checkout-order-summary-taxes-block"></div>
                        <!-- /wp:woocommerce/checkout-order-summary-taxes-block -->
                    </div>
                    <!-- /wp:woocommerce/checkout-order-summary-totals-block -->
                </div>
                <!-- /wp:woocommerce/checkout-order-summary-block -->
            </div>
            <!-- /wp:woocommerce/checkout-totals-block -->
        </div>
        <!-- /wp:woocommerce/checkout -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->