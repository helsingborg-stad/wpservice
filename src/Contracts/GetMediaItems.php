<?php

namespace WpService\Contracts;

interface GetMediaItems
{
/**
 * Retrieves HTML for media items of post gallery.
 *
 * The HTML markup retrieved will be created for the progress of SWF Upload
 * component. Will also create link for showing and hiding the form to modify
 * the image attachment.
 *
 * @since 2.5.0
 *
 * @global WP_Query $wp_the_query WordPress Query object.
 *
 * @param int $postId Post ID.
 * @param array $errors  Errors for attachment, if any.
 * @return string HTML content for media items of post gallery.
 */
    public function getMediaItems(int $postId, array $errors): string;
}
