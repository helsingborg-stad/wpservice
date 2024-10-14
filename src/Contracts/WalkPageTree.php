<?php

namespace WpService\Contracts;

interface WalkPageTree
{
/**
 * Retrieves HTML list content for page list.
 *
 * @uses Walker_Page to create HTML list content.
 * @since 2.1.0
 *
 * @param array $pages
 * @param int $depth
 * @param int $currentPage
 * @param array $args
 * @return string
 */
    public function walkPageTree(array $pages, int $depth, int $currentPage, array $args): string;
}
