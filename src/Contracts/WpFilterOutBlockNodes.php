<?php

namespace WpService\Contracts;

interface WpFilterOutBlockNodes
{
    /**
     * Applies a filter to the list of style nodes that comes from WP_Theme_JSON::get_style_nodes().
     *
     * This particular filter removes all of the blocks from the array.
     *
     * We want WP_Theme_JSON to be ignorant of the implementation details of how the CSS is being used.
     * This filter allows us to modify the output of WP_Theme_JSON depending on whether or not we are
     * loading separate assets, without making the class aware of that detail.
     *
     * @since 6.1.0
     *
     * @param array $nodes The nodes to filter.
     * @return array A filtered array of style nodes.
     */
    public function wpFilterOutBlockNodes(array $nodes): array;
}
