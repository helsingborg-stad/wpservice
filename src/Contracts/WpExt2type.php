<?php

namespace WpService\Contracts;

interface WpExt2type
{
    /**
     * Retrieves the file type based on the extension name.
     *
     * @since 2.5.0
     *
     * @param string $ext The extension to search.
     * @return string|void The file type, example: audio, video, document, spreadsheet, etc.
     */
    public function wpExt2type(string $ext): mixed;
}
