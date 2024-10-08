<?php

namespace WpService\Contracts;

interface AddRewriteEndpoint
{
    /**
     * Adds an endpoint, like /trackback/.
     *
     * Adding an endpoint creates extra rewrite rules for each of the matching
     * places specified by the provided bitmask. For example:
     *
     *     add_rewrite_endpoint( 'json', EP_PERMALINK | EP_PAGES );
     *
     * will add a new rewrite rule ending with "json(/(.*))?/?$" for every permastruct
     * that describes a permalink (post) or page. This is rewritten to "json=$match"
     * where $match is the part of the URL matched by the endpoint regex (e.g. "foo" in
     * "[permalink]/json/foo/").
     *
     * A new query var with the same name as the endpoint will also be created.
     *
     * When specifying $places ensure that you are using the EP_* constants (or a
     * combination of them using the bitwise OR operator) as their values are not
     * guaranteed to remain static (especially `EP_ALL`).
     *
     * Be sure to flush the rewrite rules - see flush_rewrite_rules() - when your plugin gets
     * activated and deactivated.
     *
     * @since 2.1.0
     * @since 4.3.0 Added support for skipping query var registration by passing `false` to `$query_var`.
     *
     * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
     *
     * @param string $name      Name of the endpoint.
     * @param int $places    Endpoint mask describing the places the endpoint should be added.
     *                               Accepts a mask of:
     *                               - `EP_ALL`
     *                               - `EP_NONE`
     *                               - `EP_ALL_ARCHIVES`
     *                               - `EP_ATTACHMENT`
     *                               - `EP_AUTHORS`
     *                               - `EP_CATEGORIES`
     *                               - `EP_COMMENTS`
     *                               - `EP_DATE`
     *                               - `EP_DAY`
     *                               - `EP_MONTH`
     *                               - `EP_PAGES`
     *                               - `EP_PERMALINK`
     *                               - `EP_ROOT`
     *                               - `EP_SEARCH`
     *                               - `EP_TAGS`
     *                               - `EP_YEAR`
     * @param string|bool $queryVar Name of the corresponding query variable. Pass `false` to skip registering a query_var
     *                               for this endpoint. Defaults to the value of `$name`.
     */
    public function addRewriteEndpoint(string $name, int $places, string|bool $queryVar = true): void;
}
