<?php

namespace WpService\Contracts;

interface GetAttachmentTaxonomies
{
    /**
 * Retrieves taxonomies attached to given the attachment.
 *
 * @since 2.5.0
 * @since 4.7.0 Introduced the `$output` parameter.
 *
 * @param int|array|object $attachment Attachment ID, data array, or data object.
 * @param string $output     Output type. 'names' to return an array of taxonomy names,
 *                                     or 'objects' to return an array of taxonomy objects.
 *                                     Default is 'names'.
 * @return string[]|WP_Taxonomy[] List of taxonomies or taxonomy names. Empty array on failure.
 */
    public function getAttachmentTaxonomies(int|array|object $attachment, string $output): array;
}
