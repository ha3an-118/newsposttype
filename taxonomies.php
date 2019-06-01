<?php

add_action( 'init', 'ha_news_tax_hierarchical', 0 );

function ha_news_tax_hierarchical() {


 $labels = array(
   'name'              => _x( 'دسته بندی اخبار', 'taxonomy general name', 'textdomain' ),
   'singular_name'     => _x( 'دسته بندی خبر', 'taxonomy singular name', 'textdomain' ),
   'search_items'      => __( 'جستجوی اخبار', 'textdomain' ),
   'all_items'         => __( 'همه اخبار', 'textdomain' ),
   'parent_item'       => __( 'دسته بندی مادر ', 'textdomain' ),
   'parent_item_colon' => __( 'دسته بندی مادر ', 'textdomain' ),
   'edit_item'         => __( 'اصلاح دسته بندی ', 'textdomain' ),
   'update_item'       => __( 'Update news', 'textdomain' ),
   'add_new_item'      => __( 'افزودن یک دسته بندی جدید', 'textdomain' ),
   'new_item_name'     => __( 'New Genre news', 'textdomain' ),
   'menu_name'         => __( 'دسته بندی اخبار', 'textdomain' ),
 );

 $args = array(
   'hierarchical'      => true,
   'labels'            => $labels,
   'show_ui'           => true,
   'show_admin_column' => true,
   'query_var'         => true,
   'rewrite'           => array( 'slug' => 'newscat' ),
 );

 register_taxonomy( 'news_cat', array( 'news'), $args );

}

// ====================================================================


add_action( 'init', 'ha_news_tax_nonhierarchical', 0 );

function ha_news_tax_nonhierarchical() {


 $labels = array(
   'name'              => _x( 'برچسب اخبار', 'taxonomy general name', 'textdomain' ),
   'singular_name'     => _x( 'برچسب خبر', 'taxonomy singular name', 'textdomain' ),
   'search_items'      => __( 'جستجوی اخبار', 'textdomain' ),
   'all_items'         => __( 'همه اخبار', 'textdomain' ),
   'parent_item'       => __( 'برچسب مادر ', 'textdomain' ),
   'parent_item_colon' => __( 'برچسب مادر ', 'textdomain' ),
   'edit_item'         => __( 'اصلاح برچسب ', 'textdomain' ),
   'update_item'       => __( 'Update news', 'textdomain' ),
   'add_new_item'      => __( 'افزودن یک برچسب جدید', 'textdomain' ),
   'new_item_name'     => __( 'New Genre news', 'textdomain' ),
   'menu_name'         => __( 'برچسب اخبار', 'textdomain' ),
 );

 $args = array(
   'hierarchical'      => false,
   'labels'            => $labels,
   'show_ui'           => true,
   'show_admin_column' => true,
   'query_var'         => true,
   'rewrite'           => array( 'slug' => 'newstag' ),
 );

 register_taxonomy( 'news_tag', array( '' ), $args );

}
