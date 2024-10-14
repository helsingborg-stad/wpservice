<?php

namespace WpService\Contracts;

interface GetPageHierarchy
{
/**
 * Orders the pages with children under parents in a flat list.
 *
 * It uses auxiliary structure to hold parent-children relationships and
 * runs in O(N) complexity
 *
 * @since 2.0.0
 *
 * @param WP_Post[] $pages   Posts array (passed by reference).
 * @param int $pageId Optional. Parent page ID. Default 0.
 * @return string[] Array of post names keyed by ID and arranged by hierarchy. Children immediately follow their parents.
 */
    public function getPageHierarchy(array &$pages, int $pageId = 0): array;
}
