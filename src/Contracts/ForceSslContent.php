<?php

namespace WpService\Contracts;

interface ForceSslContent
{
    /**
     * Determines whether to force SSL on content.
     *
     * @since 2.8.5
     *
     * @param bool $force
     * @return bool True if forced, false if not forced.
     */
    public function forceSslContent(bool|string $force = ''): bool;
}
