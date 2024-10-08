<?php

namespace WpService\Contracts;

interface GetThePostNavigation
{
    /**
 * Retrieves the navigation to next/previous post, when applicable.
 *
 * @since 4.1.0
 * @since 4.4.0 Introduced the `in_same_term`, `excluded_terms`, and `taxonomy` arguments.
 * @since 5.3.0 Added the `aria_label` parameter.
 * @since 5.5.0 Added the `class` parameter.
 *
 * @param array $args {
 *     Optional. Default post navigation arguments. Default empty array.
 *
 *     @type string       $prev_text          Anchor text to display in the previous post link.
 *                                            Default '%title'.
 *     @type string       $next_text          Anchor text to display in the next post link.
 *                                            Default '%title'.
 *     @type bool         $in_same_term       Whether link should be in the same taxonomy term.
 *                                            Default false.
 *     @type int[]|string $excluded_terms     Array or comma-separated list of excluded term IDs.
 *                                            Default empty.
 *     @type string       $taxonomy           Taxonomy, if `$in_same_term` is true. Default 'category'.
 *     @type string       $screen_reader_text Screen reader text for the nav element.
 *                                            Default 'Post navigation'.
 *     @type string       $aria_label         ARIA label text for the nav element. Default 'Posts'.
 *     @type string       $class              Custom class for the nav element. Default 'post-navigation'.
 * }
 * @return string Markup for post links.
 */
    public function getThePostNavigation(array $args = []): string;
}
