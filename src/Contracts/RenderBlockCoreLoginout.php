<?php

namespace WpService\Contracts;

interface RenderBlockCoreLoginout
{
/**
 * Renders the `core/loginout` block on server.
 *
 * @since 5.8.0
 *
 * @param array $attributes The block attributes.
 *
 * @return string Returns the login-out link or form.
 */
    public function renderBlockCoreLoginout(array $attributes): string;
}
