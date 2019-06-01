<?php

 function ha_news_posttype_register(){

   // TODO: make argoman for function register_post_type(name , Arg)

   $label = array(
     'name' => __( 'اخبار' ),
     'singular_name' => __( 'خبر' ),
   );
   $arg = array(
     'labels' => $label,
     'public' => true,
     'has_archive' => true,
     'menu_position' => 10,
     'supports' =>array(
       'title',
       'author',
       'editor',
       'page-attributes',
       'revisions' ,
       'comments',
       'custom-fields',
       'trackbacks',
       'excerpt',
       'thumbnail',
     ),
     'taxonomies' => array('news_cat','news_tag'),
   );
   register_post_type("news",$arg);

 }


 add_action( 'init', 'ha_news_posttype_register' );



 ?>
