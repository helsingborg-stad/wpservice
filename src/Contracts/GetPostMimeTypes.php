<?php

namespace WpService\Contracts;

interface GetPostMimeTypes
{
/**
 * Gets default post mime types.
 *
 * @since 2.9.0
 * @since 5.3.0 Added the 'Documents', 'Spreadsheets', and 'Archives' mime type groups.
 *
 * @return array List of post mime types.
 */
    public function getPostMimeTypes(): array;
}
