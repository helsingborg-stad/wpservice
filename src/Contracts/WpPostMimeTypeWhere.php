<?php

namespace WpService\Contracts;

interface WpPostMimeTypeWhere
{
    /**
     * Converts MIME types into SQL.
     *
     * @since 2.5.0
     *
     * @param string|string[] $postMimeTypes List of mime types or comma separated string
     *                                         of mime types.
     * @param string $tableAlias     Optional. Specify a table alias, if needed.
     *                                         Default empty.
     * @return string The SQL AND clause for mime searching.
     */
    public function wpPostMimeTypeWhere(string|array $postMimeTypes, string $tableAlias = ''): string;
}
