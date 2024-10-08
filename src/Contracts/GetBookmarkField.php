<?php

namespace WpService\Contracts;

interface GetBookmarkField
{
    /**
     * Retrieves single bookmark data item or field.
     *
     * @since 2.3.0
     *
     * @param string $field    The name of the data field to return.
     * @param int $bookmark The bookmark ID to get field.
     * @param string $context  Optional. The context of how the field will be used. Default 'display'.
     * @return string|\WP_Error
     */
    public function getBookmarkField(string $field, int $bookmark, string $context = 'display'): string|\WP_Error;
}
