function custom_excerpt_length($length)
{
	return 60; // Number of words to display
}




function custom_excerpt_more($more)
{
	return '...'; // Ellipsis to append at the end of the excerpt
}
add_filter('excerpt_length', 'custom_excerpt_length');
add_filter('excerpt_more', 'custom_excerpt_more');
