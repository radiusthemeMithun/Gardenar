<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gardenar
 */


use RT\Gardenar\Helpers\Fns;

if ( is_singular() && is_active_sidebar( Fns::default_sidebar('single') ) ) {
	gardenar_sidebar( Fns::default_sidebar('single')  );
} else {
	gardenar_sidebar( Fns::default_sidebar('main') );
}
