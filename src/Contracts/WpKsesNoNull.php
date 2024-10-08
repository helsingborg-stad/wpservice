<?php

namespace WpService\Contracts;

interface WpKsesNoNull
{
    /**
     * Removes any invalid control characters in a text string.
     *
     * Also removes any instance of the `\0` string.
     *
     * @since 1.0.0
     *
     * @param string $content Content to filter null characters from.
     * @param array $options Set 'slash_zero' => 'keep' when '\0' is allowed. Default is 'remove'.
     * @return string Filtered content.
     */
    public function wpKsesNoNull(string $content, array $options = null): string;
}
