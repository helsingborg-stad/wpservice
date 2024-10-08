<?php

namespace WpService\Contracts;

interface GotModRewrite
{
    /**
 * Returns whether the server is running Apache with the mod_rewrite module loaded.
 *
 * @since 2.0.0
 *
 * @return bool Whether the server is running Apache with the mod_rewrite module loaded.
 */
    public function gotModRewrite(): bool;
}
