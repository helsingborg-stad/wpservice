<?php

namespace WpService\Contracts;

interface WalkPageDropdownTree
{
    /**
     * Retrieves HTML dropdown (select) content for page list.
     *
     * @since 2.1.0
     * @since 5.3.0 Formalized the existing `...$args` parameter by adding it
     *              to the function signature.
     *
     * @uses Walker_PageDropdown to create HTML dropdown content.
     * @see Walker_PageDropdown::walk() for parameters and return description.
     *
     * @param mixed ...$args Elements array, maximum hierarchical depth and optional additional arguments.
     * @return string
     */
    public function walkPageDropdownTree(mixed ...$args): string;
}
