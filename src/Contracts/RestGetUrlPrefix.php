<?php

namespace WpService\Contracts;

interface RestGetUrlPrefix
{
/**
 * Retrieves the URL prefix for any API resource.
 *
 * @since 4.4.0
 *
 * @return string Prefix.
 */
    public function restGetUrlPrefix(): string;
}
