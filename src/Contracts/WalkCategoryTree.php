<?php

namespace WpService\Contracts;

interface WalkCategoryTree
{
    /**
     * Retrieves HTML list content for category list.
     *
     * @since 2.1.0
     * @since 5.3.0 Formalized the existing `...$args` parameter by adding it
     *              to the function signature.
     *
     * @uses Walker_Category to create HTML list content.
     * @see Walker::walk() for parameters and return description.
     *
     * @param mixed ...$args Elements array, maximum hierarchical depth and optional additional arguments.
     * @return string
     */
    public function walkCategoryTree(): string;
}
