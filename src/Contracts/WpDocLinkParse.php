<?php

namespace WpService\Contracts;

interface WpDocLinkParse
{
    /**
     * @since 2.8.0
     *
     * @param string $content
     * @return array
     */
    public function wpDocLinkParse(string $content): array;
}
