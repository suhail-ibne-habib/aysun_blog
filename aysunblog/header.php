<?php 
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <a class="skip-link screen-reader-text" href="#main">Skip to content</a>
        
    <div class="menu">
        
            <header class="flex align-center justify-between">
                <a href="<?php echo get_home_url(); ?>" class="logo">
                    <?php 
                       if (function_exists("the_custom_logo")) {
                        $logo_id = get_theme_mod('custom_logo');
                        if ($logo_id) {
                            $logo = wp_get_attachment_image_src($logo_id);
                            if ($logo) {
                                echo '<img src="'.$logo[0].'" />';
                            }
                        }
                    }
                    ?>
                </a>
                <button class="mob-cross" tabindex="0">
                    <ul class="lines">
                        <li class="line"></li>
                        <li class="line"></li>
                        <li class="line"></li>
                    </ul>
                </button>
                <nav class="main-nav">
                    <?php 
                        wp_nav_menu(array(
                            'menu' => 'primary',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul class="nav-lists flex">%3$s</ul>'
                        ))
                    ?>
                    <!-- <ul class="nav-lists flex">
                        <li class="nav-list"><a href="#" class="nav-link">Home</a></li>
                        <li class="nav-list"><a href="#" class="nav-link">Blog</a></li>
                        <li class="nav-list"><a href="#" class="nav-link">Contact</a></li>
                    </ul> -->
                </nav>
                
            </header>
        
    </div>
    <main id="main">