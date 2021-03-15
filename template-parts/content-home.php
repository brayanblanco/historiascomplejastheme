<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HistoriasComplejasTheme
 */

?>
	<?php the_post_thumbnail(
		'post-thumbnail',
		array(
			'alt' => the_title_attribute(array('echo' => false)),
			'class' => "slideshow"
		)
	); ?>
