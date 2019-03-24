<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="header-top">
    <?php materialis_print_header_top_bar(); ?>
    <?php materialis_get_navigation(); ?>
</div>

<div id="page" class="site">
    <div class="header-wrapper">
        <div <?php echo materialis_header_background_atts(); ?>>
            <?php do_action('materialis_before_header_background'); ?>
            <?php materialis_print_video_container(); ?>
            <?php materialis_print_inner_pages_header_content(); ?>
            <?php materialis_print_header_separator(); ?>
            
            <div class="tickerr">
                <?php echo do_shortcode( '[hsas-shortcode group="" speed="20" direction="right" gap="100"]' ); ?>
            </div>
        </div>
    </div>
    <div class="breadcrumbs mdc-elevation--z2" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </div>
