<?php

namespace WpService\Contracts;

interface RegisterBlockCoreTemplatePart
{
    /**
 * Registers the `core/template-part` block on the server.
 *
 * @since 5.9.0
 */
    public function registerBlockCoreTemplatePart(): void;
}
