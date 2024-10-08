<?php

namespace WpService\Contracts;

interface GetTags
{
    /**
     * Retrieves all post tags.
     *
     * @since 2.3.0
     *
     * @param string|array $args {
     *     Optional. Arguments to retrieve tags. See get_terms() for additional options.
     *
     * @type string $taxonomy Taxonomy to retrieve terms for. Default 'post_tag'.
     * }
     * @return WP_Term[]|int|WP_Error Array of 'post_tag' term objects, a count thereof,
     *                                or WP_Error if any of the taxonomies do not exist.
     */
    public function getTags(string|array $args = ''): array|int|\WP_Error;
}
