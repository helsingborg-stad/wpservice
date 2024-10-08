<?php

namespace WpService\Contracts;

interface DoFavicon
{
    /**
     * Displays the favicon.ico file content.
     *
     * @since 5.4.0
     */
    public function doFavicon(): void;
}
