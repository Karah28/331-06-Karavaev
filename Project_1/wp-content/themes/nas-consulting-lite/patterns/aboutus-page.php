<?php

/**
 * Title: About Us Page 
 * Slug: nas-consulting-lite/aboutus-page
 * Categories: nas-consulting-lite-about
 */
$nusacons_consulting_url = trailingslashit(get_template_directory_uri());
$nusacons_consulting_images = array(
    $nusacons_consulting_url . 'assets/images/banner_bg.jpg',
    $nusacons_consulting_url . 'assets/images/about_image.jpg',
    $nusacons_consulting_url . 'assets/images/team_1.jpg',
    $nusacons_consulting_url . 'assets/images/team_2.jpg',
    $nusacons_consulting_url . 'assets/images/team_3.jpg'
);
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"100%"}} -->
<main class="wp-block-group has-light-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($nusacons_consulting_images[0]) ?>","id":6214,"dimRatio":30,"overlayColor":"dark-color","isUserOverlayColor":true,"minHeight":480,"layout":{"type":"constrained","contentSize":"980px"}} -->
    <div class="wp-block-cover" style="min-height:480px"><span aria-hidden="true" class="wp-block-cover__background has-dark-color-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-6214" alt="" src="<?php echo esc_url($nusacons_consulting_images[0]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"xxx-large"} -->
            <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-xxx-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('About Us', 'nas-consulting-lite') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}}} -->
            <p class="has-text-align-center" style="font-size:18px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'nas-consulting-lite') ?></p>
            <!-- /wp:paragraph -->
        </div>
    </div>
    <!-- /wp:cover -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph -->
        <p><?php esc_html_e('Don’t bother typing “lorem ipsum” into Google translate. If you already tried, you may have gotten&nbsp;anything from “NATO” to “China”, depending on how you capitalized the letters. The bizarre translation was fodder for conspiracy theories, but Google has since updated its “lorem ipsum” translation to, boringly enough, “lorem ipsum”.', 'nas-consulting-lite') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph -->
        <p><?php esc_html_e('One brave soul did take a stab at translating the almost-not-quite-Latin. According to&nbsp;The Guardian, Jaspreet Singh Boparai undertook the challenge with the goal of making the text “precisely as incoherent in English as it is in Latin – and to make it incoherent in the same way”. As a result, “the Greek ‘eu’ in Latin became the French ‘bien’ […] and the ‘-ing’ ending in ‘lorem ipsum’ seemed best rendered by an ‘-iendum’ in English.”', 'nas-consulting-lite') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"60px"},"blockGap":{"left":"60px"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:60px"><!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":6244,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url($nusacons_consulting_images[1]) ?>" alt="" class="wp-image-6244" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph -->
                <p><?php esc_html_e('One brave soul did take a stab at translating the almost-not-quite-Latin. According to&nbsp;The Guardian, Jaspreet Singh Boparai undertook the challenge with the goal of making the text “precisely as incoherent in English as it is in Latin – and to make it incoherent in the same way”. As a result, “the Greek ‘eu’ in Latin became the French ‘bien’ […] and the ‘-ing’ ending in ‘lorem ipsum’ seemed best rendered by an ‘-iendum’ in English.”', 'nas-consulting-lite') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Don’t bother typing “lorem ipsum” into Google translate. If you already tried, you may have gotten&nbsp;anything from “NATO” to “China”, depending on how you capitalized the letters. The bizarre translation was fodder for conspiracy theories, but Google has since updated its “lorem ipsum” translation to, boringly enough, “lorem ipsum”.', 'nas-consulting-lite') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:group {"style":{"spacing":{"margin":{"top":"60px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-group" style="margin-top:60px"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
            <h3 class="wp-block-heading" style="font-style:normal;font-weight:600"><?php esc_html_e('Meet Our Team', 'nas-consulting-lite') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:columns {"style":{"spacing":{"margin":{"top":"40px"},"blockGap":{"left":"44px"}}}} -->
            <div class="wp-block-columns" style="margin-top:40px"><!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"homedroid-team-box","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group homedroid-team-box" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($nusacons_consulting_images[2]) ?>","id":459,"dimRatio":50,"isUserOverlayColor":true,"gradient":"gradient-alternate","contentPosition":"bottom left","style":{"border":{"radius":{"topLeft":"0px","bottomLeft":"0px","bottomRight":"0px","topRight":"0px"}},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:16px;padding-right:24px;padding-bottom:16px;padding-left:24px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim wp-block-cover__gradient-background has-background-gradient has-gradient-alternate-gradient-background"></span><img class="wp-block-cover__image-background wp-image-459" alt="" src="<?php echo esc_url($nusacons_consulting_images[2]) ?>" data-object-fit="cover" />
                            <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                                <div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                                    <h4 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('John Doe', 'nas-consulting-lite') ?></h4>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph -->
                                    <p><?php esc_html_e('Founder', 'nas-consulting-lite') ?></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                        </div>
                        <!-- /wp:cover -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"homedroid-team-box","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group homedroid-team-box" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($nusacons_consulting_images[3]) ?>","id":466,"dimRatio":50,"isUserOverlayColor":true,"gradient":"gradient-alternate","contentPosition":"bottom left","style":{"border":{"radius":{"topLeft":"0px","bottomLeft":"0px","bottomRight":"0px","topRight":"0px"}},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:16px;padding-right:24px;padding-bottom:16px;padding-left:24px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim wp-block-cover__gradient-background has-background-gradient has-gradient-alternate-gradient-background"></span><img class="wp-block-cover__image-background wp-image-466" alt="" src="<?php echo esc_url($nusacons_consulting_images[3]) ?>" data-object-fit="cover" />
                            <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                                <div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                                    <h4 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Lacy Larrat', 'nas-consulting-lite') ?></h4>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph -->
                                    <p><?php esc_html_e('Finance Head', 'nas-consulting-lite') ?></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                        </div>
                        <!-- /wp:cover -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"homedroid-team-box","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group homedroid-team-box" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($nusacons_consulting_images[4]) ?>","id":467,"dimRatio":50,"isUserOverlayColor":true,"gradient":"gradient-alternate","contentPosition":"bottom left","style":{"border":{"radius":{"topLeft":"0px","bottomLeft":"0px","bottomRight":"0px","topRight":"0px"}},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:16px;padding-right:24px;padding-bottom:16px;padding-left:24px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim wp-block-cover__gradient-background has-background-gradient has-gradient-alternate-gradient-background"></span><img class="wp-block-cover__image-background wp-image-467" alt="" src="<?php echo esc_url($nusacons_consulting_images[4]) ?>" data-object-fit="cover" />
                            <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                                <div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                                    <h4 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Matt Patrick', 'nas-consulting-lite') ?></h4>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph -->
                                    <p><?php esc_html_e('Project Manager', 'nas-consulting-lite') ?></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                        </div>
                        <!-- /wp:cover -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</main>
<!-- /wp:group -->