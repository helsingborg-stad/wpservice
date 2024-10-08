<?php

namespace WpService\Contracts;

interface GetHookedBlocks
{
    /**
     * Retrieves block types hooked into the given block, grouped by anchor block type and the relative position.
     *
     * @since 6.4.0
     *
     * @return array[] Array of block types grouped by anchor block type and the relative position.
     */
    public function getHookedBlocks(): array;
}
