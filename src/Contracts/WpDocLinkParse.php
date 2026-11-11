<?php

namespace WpService\Contracts;

interface WpDocLinkParse
{
/**
 * @since 2.8.0
 *
 * @param string $content
 * @return string[] Array of function names.
 */
    public function wpDocLinkParse(string $content): array;
}
