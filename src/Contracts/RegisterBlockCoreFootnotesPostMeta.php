<?php

namespace WpService\Contracts;

interface RegisterBlockCoreFootnotesPostMeta
{
    /**
 * Registers the footnotes meta field required for footnotes to work.
 *
 * @since 6.5.0
 */
    public function registerBlockCoreFootnotesPostMeta(): void;
}
