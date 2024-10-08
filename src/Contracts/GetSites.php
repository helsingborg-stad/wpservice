<?php

namespace WpService\Contracts;

interface GetSites
{
    /**
 * Retrieves a list of sites matching requested arguments.
 *
 * @since 4.6.0
 * @since 4.8.0 Introduced the 'lang_id', 'lang__in', and 'lang__not_in' parameters.
 *
 * @see WP_Site_Query::parse_query()
 *
 * @param string|array $args Optional. Array or string of arguments. See WP_Site_Query::__construct()
 *                           for information on accepted arguments. Default empty array.
 * @return array|int List of WP_Site objects, a list of site IDs when 'fields' is set to 'ids',
 *                   or the number of sites when 'count' is passed as a query var.
 */
    public function getSites(string|array $args = []): array|int;
}
