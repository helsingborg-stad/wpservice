<?php

namespace WpService\Contracts;

interface WpOembedRegisterRoute
{
    /**
 * Registers the oEmbed REST API route.
 *
 * @since 4.4.0
 */
    public function wpOembedRegisterRoute(): void;
}
