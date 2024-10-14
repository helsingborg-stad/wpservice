<?php

namespace WpService\Contracts;

interface GetTermParentsList
{
/**
 * Retrieves term parents with separator.
 *
 * @since 4.8.0
 *
 * @param int $termId  Term ID.
 * @param string $taxonomy Taxonomy name.
 * @param string|array $args {
 *     Array of optional arguments.
 *
 * @type string $format    Use term names or slugs for display. Accepts 'name' or 'slug'.
 *                             Default 'name'.
 * @type string $separator Separator for between the terms. Default '/'.
 * @type bool   $link      Whether to format as a link. Default true.
 * @type bool   $inclusive Include the term to get the parents for. Default true.
 * }
 * @return string|\WP_Error A list of term parents on success, WP_Error or empty string on failure.
 */
    public function getTermParentsList(int $termId, string $taxonomy, string|array $args = []): string|\WP_Error;
}
