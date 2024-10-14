<?php

namespace WpService\Contracts;

interface GetCategoryByPath
{
/**
 * Retrieves a category based on URL containing the category slug.
 *
 * Breaks the $category_path parameter up to get the category slug.
 *
 * Tries to find the child path and will return it. If it doesn't find a
 * match, then it will return the first category matching slug, if $full_match,
 * is set to false. If it does not, then it will return null.
 *
 * It is also possible that it will return a WP_Error object on failure. Check
 * for it when using this function.
 *
 * @since 2.1.0
 *
 * @param string $categoryPath URL containing category slugs.
 * @param bool $fullMatch    Optional. Whether full path should be matched.
 * @param string $output        Optional. The required return type. One of OBJECT, ARRAY_A, or ARRAY_N, which
 *                              correspond to a WP_Term object, an associative array, or a numeric array,
 *                              respectively. Default OBJECT.
 * @return \WP_Term|array|\WP_Error|null Type is based on $output value.
 */
    public function getCategoryByPath(string $categoryPath, bool $fullMatch = true, string $output = OBJECT): \WP_Term|array|\WP_Error|null;
}
