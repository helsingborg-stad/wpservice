<?php

namespace WpService\Contracts;

interface WpKsesStripslashes
{
    /**
     * Strips slashes from in front of quotes.
     *
     * This function changes the character sequence `\"` to just `"`. It leaves all other
     * slashes alone. The quoting from `preg_replace(//e)` requires this.
     *
     * @since 1.0.0
     *
     * @param string $content String to strip slashes from.
     * @return string Fixed string with quoted slashes.
     */
    public function wpKsesStripslashes(string $content): string;
}
