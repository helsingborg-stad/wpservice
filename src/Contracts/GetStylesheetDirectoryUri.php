<?php

namespace WpService\Contracts;

interface GetStylesheetDirectoryUri
{
    /**
     * Retrieves the URI of the stylesheet directory.
     *
     * @return string
     */
    public function getStylesheetDirectoryUri(): string;
}
