<?php

/**
 * Title: Header with Banner
 * Slug: nas-consulting-lite/header-with-banner
 * Categories: nas-consulting-lite, header
 */
$nusacons_consulting_url = trailingslashit(get_template_directory_uri());
$nusacons_consulting_images = array(
    $nusacons_consulting_url . 'assets/images/icon_location.png',
    $nusacons_consulting_url . 'assets/images/icon_envelop.png',
    $nusacons_consulting_url . 'assets/images/icon_phone.png',
    $nusacons_consulting_url . 'assets/images/banner_bg.jpg'
);
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"657px"}},"gradient":"primary-gradient","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-primary-gradient-gradient-background has-background" style="min-height:657px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($nusacons_consulting_images[3]) ?>","id":1993,"isUserOverlayColor":true,"minHeight":700,"gradient":"gradient-alternate","contentPosition":"center center","style":{"spacing":{"padding":{"left":"0","right":"0","top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-cover" style="padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0;min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-gradient-alternate-gradient-background"></span><img class="wp-block-cover__image-background wp-image-1993" alt="" src="<?php echo esc_url($nusacons_consulting_images[3]) ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"nas-consulting-lite-header","style":{"spacing":{"padding":{"top":"0px","right":"0","bottom":"0px","left":"0"}},"border":{"bottom":{"width":"0px","style":"none"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group nas-consulting-lite-header" style="border-bottom-style:none;border-bottom-width:0px;padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"10px","bottom":"10px"}},"border":{"bottom":{"color":"#ffffff33","width":"1px"},"top":[],"right":[],"left":[]}},"backgroundColor":"secondary","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-bottom-color:#ffffff33;border-bottom-width:1px;padding-top:10px;padding-right:var(--wp--preset--spacing--40);padding-bottom:10px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":30,"width":"20px","height":"20px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($nusacons_consulting_images[1]) ?>" alt="" class="wp-image-30" style="object-fit:cover;width:20px;height:20px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
<p class="has-light-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('178 West 27th Street, Suite 527, NY 10012', 'nas-consulting-lite') ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":34,"width":"16px","height":"16px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"envelope-icon"} -->
<figure class="wp-block-image size-full is-resized envelope-icon"><img src="<?php echo esc_url($nusacons_consulting_images[2]) ?>" alt="" class="wp-image-34" style="object-fit:contain;width:16px;height:16px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
<p class="has-light-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('email@example.com', 'nas-consulting-lite') ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":38,"width":"16px","height":"16px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"phone-icon"} -->
<figure class="wp-block-image size-full is-resized phone-icon"><img src="<?php echo esc_url($nusacons_consulting_images[0]) ?>" alt="" class="wp-image-38" style="object-fit:contain;width:16px;height:16px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
<p class="has-light-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('(888) 012 - 3456', 'nas-consulting-lite') ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFF","iconBackgroundColor":"transparent","iconBackgroundColorValue":"#ffffff00","className":"nas-consulting-lite-social-profile","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color nas-consulting-lite-social-profile"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"tiktok"} /-->

<!-- wp:social-link {"url":"#","service":"yelp"} /-->

<!-- wp:social-link {"url":"#","service":"reddit"} /-->

<!-- wp:social-link {"url":"#","service":"whatsapp"} /-->

<!-- wp:social-link {"url":"#","service":"telegram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"24px","bottom":"24px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-right:var(--wp--preset--spacing--40);padding-bottom:24px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":44,"shouldSyncIcon":false} /-->

<!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"none","letterSpacing":"0px"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"5px"}}},"fontSize":"large"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group has-light-color-color has-text-color has-link-color"><!-- wp:navigation {"textColor":"light-color","overlayBackgroundColor":"light-color","overlayTextColor":"heading-color","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account"]},"className":"nas-consulting-lite-navigation","style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"500","lineHeight":"2"},"spacing":{"blockGap":"32px"}},"fontSize":"normal","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:page-list /-->
<!-- /wp:navigation -->

<!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconStyle":"line","iconClass":"wc-block-customer-account__account-icon","style":{"spacing":{"margin":{"left":"0.5em"}}}} /-->

<!-- wp:woocommerce/mini-cart /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"6px","width":"1px"},"spacing":{"padding":{"left":"24px","right":"24px","top":"16px","bottom":"16px"}},"typography":{"fontSize":"16px"}},"borderColor":"light-color"} -->
<div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor" style="font-size:16px"><a class="wp-block-button__link has-transparent-background-color has-background has-border-color has-light-color-border-color wp-element-button" style="border-width:1px;border-radius:6px;padding-top:16px;padding-right:24px;padding-bottom:16px;padding-left:24px"><?php esc_html_e('Request an Estimate', 'nas-consulting-lite') ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:cover {"overlayColor":"transparent","isUserOverlayColor":true,"minHeight":640,"isDark":false,"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"40px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="margin-top:0;margin-bottom:0;padding-bottom:40px;min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-transparent-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"nas-consulting-lite-slide-up","style":{"spacing":{"padding":{"right":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"880px"}} -->
<div class="wp-block-group nas-consulting-lite-slide-up" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"textTransform":"uppercase","fontSize":"60px","lineHeight":"1.5"},"spacing":{"margin":{"top":"10px","bottom":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
<h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color" style="margin-top:10px;margin-bottom:24px;font-size:60px;line-height:1.5;text-transform:uppercase"><?php esc_html_e('Expert Nas Consulting Lite Services at Your Doorstep!', 'nas-consulting-lite') ?></h1>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"normal"} -->
<h2 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-normal-font-size" style="font-style:normal;font-weight:400;text-transform:none"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'nas-consulting-lite') ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"40px"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:40px"><!-- wp:button {"backgroundColor":"primary","textColor":"heading-color","className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"7px","width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"40px","right":"40px","top":"22px","bottom":"22px"}}},"fontSize":"normal"} -->
<div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-normal-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-heading-color-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:7px;padding-top:22px;padding-right:40px;padding-bottom:22px;padding-left:40px"><?php esc_html_e('Schedule Quick Call', 'nas-consulting-lite') ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"light-color","textColor":"dark-color","className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"7px","width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|dark-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"40px","right":"40px","top":"22px","bottom":"22px"}}},"fontSize":"normal"} -->
<div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-normal-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-dark-color-color has-light-color-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:7px;padding-top:22px;padding-right:40px;padding-bottom:22px;padding-left:40px"><?php esc_html_e('Request a Quote', 'nas-consulting-lite') ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->