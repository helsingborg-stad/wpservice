<?php

namespace WpService\Contracts;

interface WpDoingAjax
{
/**
 * Determines whether the current request is a WordPress Ajax request.
 *
 * @since 4.7.0
 *
 * @return bool True if it's a WordPress Ajax request, false otherwise.
 */
    public function wpDoingAjax(): bool;
}
