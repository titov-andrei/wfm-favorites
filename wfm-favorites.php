<?php

/*
Plugin Name: Добавление статей в Избранное
*/

add_filter( 'the_content', 'wfm_favorites_content' );

function wfm_favorites_content($content) {
  return '<p class="wfm-favorites-link"><a href=""></a></p>' . $content;
}
