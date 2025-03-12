<?php

/**
 * Title: Services Block
 * Slug: showfolio/services-block
 * Categories: showfolio-patterns
 */
$showfolio_services_url = trailingslashit(get_stylesheet_directory_uri());
$showfolio_services_img = array(
    $showfolio_services_url . 'assets/images/frontend.png',
    $showfolio_services_url . 'assets/images/backend.png',
    $showfolio_services_url . 'assets/images/devops.png'
)
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"120px","bottom":"120px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","wideSize":"100%","contentSize":"100%"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:120px;padding-right:var(--wp--preset--spacing--40);padding-bottom:120px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"70px"}},"layout":{"type":"constrained","wideSize":"100%"}} -->
    <div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained","wideSize":"1180px"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"80px"}}},"layout":{"type":"constrained","wideSize":"723px","justifyContent":"left","contentSize":"723px"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:80px"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"background","fontSize":"medium","fontFamily":"open-sans"} -->
                <p class="has-background-color has-text-color has-link-color has-open-sans-font-family has-medium-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase"><a href="#"><?php esc_html_e('/', 'showfolio') ?></a><?php esc_html_e(' services', 'showfolio') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"style":{"typography":{"fontSize":"52px"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontFamily":"space-grotesk"} -->
                <h2 class="wp-block-heading has-background-color has-text-color has-link-color has-space-grotesk-font-family" style="font-size:52px"><?php esc_html_e("Here's what I can do for you", 'showfolio') ?></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0","padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","wideSize":"1200px"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"width":"100%"} -->
                <div class="wp-block-column" style="flex-basis:100%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"85px","bottom":"85px","left":"30px","right":"30px"},"blockGap":"30px"},"border":{"radius":"10px"}},"backgroundColor":"terniary","layout":{"type":"constrained","justifyContent":"left","wideSize":"383px","contentSize":"319px"}} -->
                    <div class="wp-block-group has-terniary-background-color has-background" style="border-radius:10px;padding-top:85px;padding-right:30px;padding-bottom:85px;padding-left:30px"><!-- wp:image {"id":45,"width":"86px","height":"86px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($showfolio_services_img[0]) ?>" alt="" class="wp-image-45" style="object-fit:contain;width:86px;height:86px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"30px"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"textTransform":"uppercase"}},"textColor":"background","fontSize":"x-large","fontFamily":"space-grotesk"} -->
                        <h3 class="wp-block-heading has-background-color has-text-color has-link-color has-space-grotesk-font-family has-x-large-font-size" style="margin-top:30px;text-transform:uppercase"><?php esc_html_e('Frontend', 'showfolio') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}}},"textColor":"foregound-alt","fontSize":"small"} -->
                        <p class="has-foregound-alt-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit fames', 'showfolio') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:separator {"backgroundColor":"background"} -->
                        <hr class="wp-block-separator has-text-color has-background-color has-alpha-channel-opacity has-background-background-color has-background" />
                        <!-- /wp:separator -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"100%"} -->
                <div class="wp-block-column" style="flex-basis:100%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"85px","bottom":"85px","left":"30px","right":"30px"},"blockGap":"30px"},"border":{"radius":"10px"}},"backgroundColor":"terniary","layout":{"type":"constrained","justifyContent":"left","wideSize":"383px","contentSize":"319px"}} -->
                    <div class="wp-block-group has-terniary-background-color has-background" style="border-radius:10px;padding-top:85px;padding-right:30px;padding-bottom:85px;padding-left:30px"><!-- wp:image {"id":46,"width":"86px","height":"86px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($showfolio_services_img[1]) ?>" alt="" class="wp-image-46" style="object-fit:contain;width:86px;height:86px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"30px"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"textTransform":"uppercase"}},"textColor":"background","fontSize":"x-large","fontFamily":"space-grotesk"} -->
                        <h3 class="wp-block-heading has-background-color has-text-color has-link-color has-space-grotesk-font-family has-x-large-font-size" style="margin-top:30px;text-transform:uppercase"><?php esc_html_e('Backend', 'showfolio') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}}},"textColor":"foregound-alt","fontSize":"small"} -->
                        <p class="has-foregound-alt-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit fames', 'showfolio') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:separator {"backgroundColor":"background"} -->
                        <hr class="wp-block-separator has-text-color has-background-color has-alpha-channel-opacity has-background-background-color has-background" />
                        <!-- /wp:separator -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"100%"} -->
                <div class="wp-block-column" style="flex-basis:100%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"85px","bottom":"85px","left":"30px","right":"30px"},"blockGap":"30px"},"border":{"radius":"10px"}},"backgroundColor":"terniary","layout":{"type":"constrained","justifyContent":"left","wideSize":"383px","contentSize":"319px"}} -->
                    <div class="wp-block-group has-terniary-background-color has-background" style="border-radius:10px;padding-top:85px;padding-right:30px;padding-bottom:85px;padding-left:30px"><!-- wp:image {"id":48,"width":"86px","height":"86px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($showfolio_services_img[2]) ?>" alt="" class="wp-image-48" style="object-fit:contain;width:86px;height:86px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"30px"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"textTransform":"uppercase"}},"textColor":"background","fontSize":"x-large","fontFamily":"space-grotesk"} -->
                        <h3 class="wp-block-heading has-background-color has-text-color has-link-color has-space-grotesk-font-family has-x-large-font-size" style="margin-top:30px;text-transform:uppercase"><?php esc_html_e('devops', 'showfolio') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}}},"textColor":"foregound-alt","fontSize":"small"} -->
                        <p class="has-foregound-alt-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit fames', 'showfolio') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:separator {"backgroundColor":"background"} -->
                        <hr class="wp-block-separator has-text-color has-background-color has-alpha-channel-opacity has-background-background-color has-background" />
                        <!-- /wp:separator -->
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
</div>
<!-- /wp:group -->