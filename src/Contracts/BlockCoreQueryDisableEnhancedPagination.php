<?php

namespace WpService\Contracts;

interface BlockCoreQueryDisableEnhancedPagination
{
/**
 * Traverse the tree of blocks looking for any plugin block (i.e., a block from
 * an installed plugin) inside a Query block with the enhanced pagination
 * enabled. If at least one is found, the enhanced pagination is effectively
 * disabled to prevent any potential incompatibilities.
 *
 * @since 6.4.0
 *
 * @param array $parsedBlock The block being rendered.
 * @return string Returns the parsed block, unmodified.
 */
    public function blockCoreQueryDisableEnhancedPagination(array $parsedBlock): string;
}
