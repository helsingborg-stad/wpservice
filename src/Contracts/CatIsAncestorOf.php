<?php

namespace WpService\Contracts;

interface CatIsAncestorOf
{
    /**
 * Checks if a category is an ancestor of another category.
 *
 * You can use either an ID or the category object for both parameters.
 * If you use an integer, the category will be retrieved.
 *
 * @since 2.1.0
 *
 * @param int|object $cat1 ID or object to check if this is the parent category.
 * @param int|object $cat2 The child category.
 * @return bool Whether $cat2 is child of $cat1.
 */
    public function catIsAncestorOf(int|object $cat1, int|object $cat2): bool;
}
