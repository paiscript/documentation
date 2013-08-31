<?php
  
  // Define some junk
  define('ST', '/static/');
  
  function title($title) {
  	return 'PAI - '.$title;
  }

  pai_add_filter('title', 'title');

  function breadcrumb($content) {
  	$base = array();
  	$html = array();
  	foreach(explode('/', PAI_PAGE) AS $page) {
  		$base[] = $page;
  		$page = implode('/', $base);
  		$html[] = '<a href="'.PAI_PATH.$page.'">'.pai_pageInfo('title', $page).'</a>';
  	}
  	return implode(' > ', $html);
  }
  pai_add_filter('content-breadcrumb', 'breadcrumb');