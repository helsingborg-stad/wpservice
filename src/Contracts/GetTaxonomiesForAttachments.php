<?php

namespace WpService\Contracts;

interface GetTaxonomiesForAttachments
{
/**
 * Retrieves all of the taxonomies that are registered for attachments.
 *
 * Handles mime-type-specific taxonomies such as attachment:image and attachment:video.
 *
 * @since 3.5.0
 *
 * @see get_taxonomies()
 *
 * @param string $output Optional. The type of taxonomy output to return. Accepts 'names' or 'objects'.
 *                       Default 'names'.
 * @return string[]|WP_Taxonomy[] Array of names or objects of registered taxonomies for attachments.
 */
    public function getTaxonomiesForAttachments(string $output = 'names'): array;
}
