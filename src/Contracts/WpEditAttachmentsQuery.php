<?php

namespace WpService\Contracts;

interface WpEditAttachmentsQuery
{
/**
 * Executes a query for attachments. An array of WP_Query arguments
 * can be passed in, which will override the arguments set by this function.
 *
 * @since 2.5.0
 *
 * @param array|false $q Optional. Array of query variables to use to build the query.
 *                       Defaults to the `$_GET` superglobal.
 * @return array
 */
    public function wpEditAttachmentsQuery(array|false $q = false): array;
}
