<?php
use ElatedListing\Lib\RelatedPost;
$tax_array = eltd_listing_related_taxonomy_settings();

$related_post_object = new RelatedPost\ElatedRelatedPosts(get_the_ID(), $tax_array);
$related_post_query = $related_post_object->getRelatedPosts();
$params = array(
	'query' => $related_post_query
);

echo eltd_listing_single_template_part('related-posts/holder', '', $params);