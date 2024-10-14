<?php

namespace WpService\Contracts;

interface WpListCategories
{
/**
 * Displays or retrieves the HTML list of categories.
 *
 * @since 2.1.0
 * @since 4.4.0 Introduced the `hide_title_if_empty` and `separator` arguments.
 * @since 4.4.0 The `current_category` argument was modified to optionally accept an array of values.
 * @since 6.1.0 Default value of the 'use_desc_for_title' argument was changed from 1 to 0.
 *
 * @param array|string $args {
 *     Array of optional arguments. See get_categories(), get_terms(), and WP_Term_Query::__construct()
 *     for information on additional accepted arguments.
 *
 * @type int|int[]    $current_category      ID of category, or array of IDs of categories, that should get the
 *                                               'current-cat' class. Default 0.
 * @type int          $depth                 Category depth. Used for tab indentation. Default 0.
 * @type bool|int     $echo                  Whether to echo or return the generated markup. Accepts 0, 1, or their
 *                                               bool equivalents. Default 1.
 * @type int[]|string $exclude               Array or comma/space-separated string of term IDs to exclude.
 *                                               If `$hierarchical` is true, descendants of `$exclude` terms will also
 *                                               be excluded; see `$exclude_tree`. See get_terms().
 *                                               Default empty string.
 * @type int[]|string $exclude_tree          Array or comma/space-separated string of term IDs to exclude, along
 *                                               with their descendants. See get_terms(). Default empty string.
 * @type string       $feed                  Text to use for the feed link. Default 'Feed for all posts filed
 *                                               under [cat name]'.
 * @type string       $feed_image            URL of an image to use for the feed link. Default empty string.
 * @type string       $feed_type             Feed type. Used to build feed link. See get_term_feed_link().
 *                                               Default empty string (default feed).
 * @type bool         $hide_title_if_empty   Whether to hide the `$title_li` element if there are no terms in
 *                                               the list. Default false (title will always be shown).
 * @type string       $separator             Separator between links. Default '<br />'.
 * @type bool|int     $show_count            Whether to include post counts. Accepts 0, 1, or their bool equivalents.
 *                                               Default 0.
 * @type string       $show_option_all       Text to display for showing all categories. Default empty string.
 * @type string       $show_option_none      Text to display for the 'no categories' option.
 *                                               Default 'No categories'.
 * @type string       $style                 The style used to display the categories list. If 'list', categories
 *                                               will be output as an unordered list. If left empty or another value,
 *                                               categories will be output separated by `<br>` tags. Default 'list'.
 * @type string       $taxonomy              Name of the taxonomy to retrieve. Default 'category'.
 * @type string       $title_li              Text to use for the list title `<li>` element. Pass an empty string
 *                                               to disable. Default 'Categories'.
 * @type bool|int     $use_desc_for_title    Whether to use the category description as the title attribute.
 *                                               Accepts 0, 1, or their bool equivalents. Default 0.
 * @type Walker       $walker                Walker object to use to build the output. Default empty which results
 *                                               in a Walker_Category instance being used.
 * }
 * @return void|string|false Void if 'echo' argument is true, HTML list of categories if 'echo' is false.
 *                           False if the taxonomy does not exist.
 */
    public function wpListCategories(array|string $args = ''): mixed;
}
