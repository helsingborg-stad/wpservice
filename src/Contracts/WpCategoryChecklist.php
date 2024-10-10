<?php

namespace WpService\Contracts;

interface WpCategoryChecklist
{
    /**
     * Outputs an unordered list of checkbox input elements labeled with category names.
     *
     * @since 2.5.1
     *
     * @see wp_terms_checklist()
     *
     * @param int $postId              Optional. Post to generate a categories checklist for. Default 0.
     *                                          $selected_cats must not be an array. Default 0.
     * @param int $descendantsAndSelf Optional. ID of the category to output along with its descendants.
     *                                          Default 0.
     * @param int[]|false $selectedCats        Optional. Array of category IDs to mark as checked. Default false.
     * @param int[]|false $popularCats         Optional. Array of category IDs to receive the "popular-category" class.
     *                                          Default false.
     * @param \Walker $walker               Optional. Walker object to use to build the output.
     *                                          Default is a Walker_Category_Checklist instance.
     * @param bool $checkedOntop        Optional. Whether to move checked items out of the hierarchy and to
     *                                          the top of the list. Default true.
     */
    public function wpCategoryChecklist(int $postId, int $descendantsAndSelf, array|false $selectedCats = false, array|false $popularCats = false, \Walker $walker = null, bool $checkedOntop = true): void;
}
