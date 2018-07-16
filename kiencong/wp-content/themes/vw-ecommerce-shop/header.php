<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content-vw">
 *
 * @package VW Ecommerce Shop
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'vw-ecommerce-shop' ) ); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','vw-ecommerce-shop'); ?></a></div>
  
<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <div class="row">
          <div class="top-contact col-md-3 col-xs-12 col-sm-4">
            <?php if( get_theme_mod('vw_ecommerce_shop_shipping','') != ''){ ?>
              <span class="free"><i class="fa fa-car" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('vw_ecommerce_shop_shipping','') ); ?></span>
            <?php } ?>
          </div>      
          <div class="top-contact col-md-3 col-xs-12 col-sm-4">
            <?php if( get_theme_mod('vw_ecommerce_shop_return','') != ''){ ?>
              <span class="return"><i class="fas fa-sync-alt"></i><?php echo esc_html( get_theme_mod('vw_ecommerce_shop_return','') ); ?></span>
            <?php } ?>
          </div>
          <div class="top-contact col-md-3 col-xs-12 col-sm-4">
            <?php if( get_theme_mod('vw_ecommerce_shop_cash','') != ''){ ?>
              <span class="cash"><i class="fas fa-dollar-sign"></i><?php echo esc_html( get_theme_mod('vw_ecommerce_shop_cash','') ); ?></span>
            <?php } ?>
          </div>
          <div class="top-contact col-md-3 col-xs-12 col-sm-4">
            <?php if( get_theme_mod( 'vw_ecommerce_shop_contact','' ) != '') { ?>
              <span class="call"><i class="fa fa-phone" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('vw_ecommerce_shop_contact','') ); ?></span>
             <?php } ?>
          </div>
        </div>
      </div>
      <div class="social-media col-md-6 col-sm-6 col-xs-12">
        <?php if( get_theme_mod( 'vw_ecommerce_shop_youtube_url','' ) != '') { ?>
          <a href="<?php echo esc_url( get_theme_mod( 'vw_ecommerce_shop_youtube_url','' ) ); ?>"><i class="fab fa-youtube"></i></a>
        <?php } ?>
        <?php if( get_theme_mod( 'vw_ecommerce_shop_facebook_url','' ) != '') { ?>
          <a href="<?php echo esc_url( get_theme_mod( 'vw_ecommerce_shop_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f"></i></a>
        <?php } ?>
        <?php if( get_theme_mod( 'vw_ecommerce_shop_twitter_url','' ) != '') { ?>
          <a href="<?php echo esc_url( get_theme_mod( 'vw_ecommerce_shop_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i></a>
        <?php } ?>
        <?php if( get_theme_mod( 'vw_ecommerce_shop_insta_url','' ) != '') { ?>
          <a href="<?php echo esc_url( get_theme_mod( 'vw_ecommerce_shop_insta_url','' ) ); ?>"><i class="fab fa-instagram"></i></a>
        <?php } ?>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
</div>

<div id="header">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="logo">        
          <?php if( has_custom_logo() ){ vw_ecommerce_shop_the_custom_logo();
             }else{ ?>
            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?> 
              <p class="site-description"><?php echo esc_html($description); ?></p>       
          <?php endif; }?>
        </div>
      </div>
      <div class="side_search col-md-6 col-sm-6">      
        <div class="search_form">
          <?php get_search_form(); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="menubox">
    <div class="container">
      <div class="row">
          <div class="col-md-3 col-sm-3">
          </div>
          <div class="col-md-9 col-sm-9">
            <div class="nav">
              <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
            </div>
          </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
</div>

  <?php if ( is_singular() && has_post_thumbnail() ) : ?>
    <?php
      $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'vw-ecommerce-shop-post-image-cover' );
      $post_image = $thumb['0'];
    ?>
    <div class="header-image bg-image" style="background-image: url(<?php echo esc_url( $post_image ); ?>)">
      <?php the_post_thumbnail( 'vw-ecommerce-shop-post-image' ); ?>
    </div>

  <?php elseif ( get_header_image() ) : ?>
  <div class="header-image bg-image" style="background-image: url(<?php header_image(); ?>)">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
      <img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
    </a>
  </div>
  <?php endif; // End header image check. ?>