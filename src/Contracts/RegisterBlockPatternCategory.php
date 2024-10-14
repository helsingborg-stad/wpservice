<?php

namespace WpService\Contracts;

interface RegisterBlockPatternCategory
{
/**
 * Registers a new pattern category.
 *
 * @since 5.5.0
 *
 * @param string $categoryName       Pattern category name including namespace.
 * @param array $categoryProperties List of properties for the block pattern.
 *                                    See WP_Block_Pattern_Categories_Registry::register() for
 *                                    accepted arguments.
 * @return bool True if the pattern category was registered with success and false otherwise.
 */
    public function registerBlockPatternCategory(string $categoryName, array $categoryProperties): bool;
}
