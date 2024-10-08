<?php

namespace WpService\Contracts;

interface RegisterBlockCoreHomeLink
{
    /**
 * Register the home block
 *
 * @since 6.0.0
 *
 * @uses render_block_core_home_link()
 * @throws WP_Error An WP_Error exception parsing the block definition.
 */
    public function registerBlockCoreHomeLink(): void;
}
