<?php

namespace WpService\Contracts;

interface UnregisterBlockPatternCategory
{
    /**
 * Unregisters a pattern category.
 *
 * @since 5.5.0
 *
 * @param string $categoryName Pattern category name including namespace.
 * @return bool True if the pattern category was unregistered with success and false otherwise.
 */
    public function unregisterBlockPatternCategory(string $categoryName): bool;
}
