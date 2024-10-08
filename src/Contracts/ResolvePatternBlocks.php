<?php

namespace WpService\Contracts;

interface ResolvePatternBlocks
{
    /**
     * Replaces patterns in a block tree with their content.
     *
     * @since 6.6.0
     *
     * @param array $blocks An array blocks.
     *
     * @return array An array of blocks with patterns replaced by their content.
     */
    public function resolvePatternBlocks(array $blocks): array;
}
