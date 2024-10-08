<?php

namespace WpService\Contracts;

interface WpBasename
{
    /**
     * i18n-friendly version of basename().
     *
     * @since 3.1.0
     *
     * @param string $path   A path.
     * @param string $suffix If the filename ends in suffix this will also be cut off.
     * @return string
     */
    public function wpBasename(string $path, string $suffix = ''): string;
}
