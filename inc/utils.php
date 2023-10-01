<?php
define("TEMPLATE_DIR", get_bloginfo('template_directory'));

function get_assets_dir($url) {
  if ($url != '/')
      $url = '/assets/'.$url;
  return TEMPLATE_DIR.''.$url;
}

function assets_dir($url) {
  echo get_assets_dir($url);
}