<?php
/**
 * Generate related posts for a post in WP loop
 *
 * @param string $args
 * @return string|array
 */
function st_get_related_posts( $args = '' ) {
	global $simple_tags;
	return $simple_tags->relatedPosts( $args );
}

/**
 * Display related posts for a post in WP loop
 *
 * @param string $args
 */
function st_related_posts( $args = '' ) {
	echo st_get_related_posts( $args );
}

/**
 * Generate extended tag cloud
 *
 * @param string $args
 * @return string|array
 */
function st_get_tag_cloud( $args = '' ) {
	global $simple_tags;
	return $simple_tags->extendedTagCloud( $args );
}

/**
 *  Display extended tag cloud
 *
 * @param string $args
 */
function st_tag_cloud( $args = '' ) {
	echo st_get_tag_cloud( $args );
}

/**
 * Generate extended current tags post
 *
 * @param string $args
 * @return string
 */
function st_get_the_tags( $args = '' ) {
	global $simple_tags;
	return $simple_tags->extendedPostTags( $args );
}

/**
 *  Display extended current tags post
 *
 * @param string $args
 */
function st_the_tags( $args = '' ) {
	echo st_get_the_tags( $args );
}

/**
 * Generate meta keywords for HTML header
 *
 * @return string
 */
function st_get_meta_keywords() {
	global $simple_tags;
	$tags_list = $simple_tags->generateKeywords();
	if ( !empty($tags_list) ) {
		return "\n\t" . '<meta name="keywords" content="' . $tags_list . '" />' . "\n";
	}
	return '';
}

/**
 * Display meta keywords for HTML header
 *
 */
function st_meta_keywords() {
	echo st_get_meta_keywords();
}
?>