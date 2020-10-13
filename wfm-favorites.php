<?php

/*
Plugin Name: Добавление статей в Избранное
*/

add_filter( 'the_title', 'wfm_favorites' );

function wfm_favorites($title) {
  return $title;
}
