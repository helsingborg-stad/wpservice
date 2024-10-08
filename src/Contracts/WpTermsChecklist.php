<?php

namespace WpService\Contracts;

interface WpTermsChecklist
{
    /**
 * Outputs an unordered list of checkbox input elements labelled with term names.
 *
 * Taxonomy-independent version of wp_category_checklist().
 *
 * @since 3.0.0
 * @since 4.4.0 Introduced the `$echo` argument.
 *
 * @param int $postId Optional. Post ID. Default 0.
 * @param array|string $args {
 *     Optional. Array or string of arguments for generating a terms checklist. Default empty array.
 *
 *     @type int    $descendants_and_self ID of the category to output along with its descendants.
 *                                        Default 0.
 *     @type int[]  $selected_cats        Array of category IDs to mark as checked. Default false.
 *     @type int[]  $popular_cats         Array of category IDs to receive the "popular-category" class.
 *                                        Default false.
 *     @type Walker $walker               Walker object to use to build the output. Default empty which
 *                                        results in a Walker_Category_Checklist instance being used.
 *     @type string $taxonomy             Taxonomy to generate the checklist for. Default 'category'.
 *     @type bool   $checked_ontop        Whether to move checked items out of the hierarchy and to
 *                                        the top of the list. Default true.
 *     @type bool   $echo                 Whether to echo the generated markup. False to return the markup instead
 *                                        of echoing it. Default true.
 * }
 * @return string HTML list of input elements.
 */
    public function wpTermsChecklist(int $postId, array|string $args): string;
}
