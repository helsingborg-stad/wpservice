<?php

namespace WpService\Contracts;

interface BlockCorePageListNestPages
{
/**
 * Outputs nested array of pages
 *
 * @since 5.8.0
 *
 * @param array $currentLevel The level being iterated through.
 * @param array $children The children grouped by parent post ID.
 *
 * @return array The nested array of pages.
 */
    public function blockCorePageListNestPages(array $currentLevel, array $children): array;
}
