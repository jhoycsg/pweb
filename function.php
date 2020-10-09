<?php
function ajout_titre(){
  add_theme_support('title_tag');
}


function ajout_syle(){
  wp_enqueue_style('general',get_template_directory_uri();)
}
?>
