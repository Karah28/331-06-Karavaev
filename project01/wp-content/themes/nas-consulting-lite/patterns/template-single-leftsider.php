<?php

/**
 * Title: Left Sidebar Single Template
 * Slug: nas-consulting-lite/template-single-leftsidebar
 * Categories: template
 * Inserter: false
 */
$nusacons_consulting_url = trailingslashit(get_template_directory_uri());
$nusacons_consulting_images = array(
    $nusacons_consulting_url . 'assets/images/banner_bg.jpg',
);
?>
<!-- wp:group {"tagName":"main","style":{"border":{"top":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"}},"spacing":{"padding":{"top":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<main class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-bottom-style:none;border-bottom-width:0px;margin-top:0;margin-bottom:0;padding-top:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"gradient":"primary-gradient-alt","layout":{"type":"constrained","contentSize":"100%"},"fontSize":"xx-large"} -->
    <div class="wp-block-group has-primary-gradient-alt-gradient-background has-background has-xx-large-font-size" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($nusacons_consulting_images[0]) ?>","id":1993,"dimRatio":50,"overlayColor":"dark-color","isUserOverlayColor":true,"minHeight":300,"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-cover" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-dark-color-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1993" alt="" src="<?php echo esc_url($nusacons_consulting_images[0]) ?>" data-object-fit="cover" />
            <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group"><!-- wp:post-title {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"light-color","fontSize":"xx-large"} /-->

                    <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50"}},"border":{"bottom":{"width":"0px","style":"none"},"top":[],"right":[],"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                    <div class="wp-block-group" style="border-bottom-style:none;border-bottom-width:0px;padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group"><!-- wp:avatar {"size":32,"style":{"border":{"radius":"50px"}}} /-->

                            <!-- wp:post-author-name {"fontSize":"normal"} /-->

                            <!-- wp:post-date {"fontSize":"normal"} /-->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
        </div>
        <!-- /wp:cover -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column {"width":"30%"} -->
            <div class="wp-block-column" style="flex-basis:30%"><!-- wp:template-part {"slug":"sidebar","theme":"nas-consulting-lite","area":"uncategorized"} /--></div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"70%"} -->
            <div class="wp-block-column" style="flex-basis:70%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
                <div class="wp-block-group" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:post-featured-image {"isLink":true,"height":"580px","style":{"border":{"radius":"0px"}}} /--></div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
                <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:post-content /--></div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"nutral","layout":{"type":"constrained","contentSize":"1180px"}} -->
                <div class="wp-block-group has-nutral-background-color has-background" style="margin-top:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:comments -->
                    <div class="wp-block-comments"><!-- wp:comments-title /-->

                        <!-- wp:comment-template -->
                        <!-- wp:columns -->
                        <div class="wp-block-columns"><!-- wp:column {"width":"40px"} -->
                            <div class="wp-block-column" style="flex-basis:40px"><!-- wp:avatar {"size":40,"style":{"border":{"radius":"20px"}}} /--></div>
                            <!-- /wp:column -->

                            <!-- wp:column -->
                            <div class="wp-block-column"><!-- wp:comment-author-name {"fontSize":"small"} /-->

                                <!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex"}} -->
                                <div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:comment-date {"fontSize":"small"} /-->

                                    <!-- wp:comment-edit-link {"fontSize":"small"} /-->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:comment-content /-->

                                <!-- wp:comment-reply-link {"fontSize":"small"} /-->
                            </div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                        <!-- /wp:comment-template -->

                        <!-- wp:comments-pagination -->
                        <!-- wp:comments-pagination-previous /-->

                        <!-- wp:comments-pagination-numbers /-->

                        <!-- wp:comments-pagination-next /-->
                        <!-- /wp:comments-pagination -->

                        <!-- wp:post-comments-form /-->
                    </div>
                    <!-- /wp:comments -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</main>
<!-- /wp:group -->